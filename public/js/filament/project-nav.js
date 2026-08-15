/**
 * project-nav.js
 * Smooth AJAX-style transitions between /projects/* pages.
 * Intercepts internal project links, fetches the new page in the background,
 * fades the current content out, swaps it in, then fades/rises it back in.
 * Falls back to a normal browser navigation for anything it can't safely handle.
 */
(function () {
    const CONTENT_ID = 'page-content';
    const FADE_MS = 300;

    function isProjectLink(anchor) {
        if (!anchor || !anchor.href) return false;
        const url = new URL(anchor.href, window.location.origin);

        // Only intercept same-origin links
        if (url.origin !== window.location.origin) return false;

        // Only intercept project pages (detail pages + the listing page)
        if (!/^\/projects(\/|$)/.test(url.pathname)) return false;

        // Don't hijack anchors meant to open in a new tab/window or download
        if (anchor.target && anchor.target !== '_self') return false;
        if (anchor.hasAttribute('download')) return false;

        return true;
    }

    function fadeOut(el) {
        return new Promise((resolve) => {
            el.classList.add('opacity-0', 'translate-y-4');
            window.setTimeout(resolve, FADE_MS);
        });
    }

    function fadeIn(el) {
        // Force a reflow so the browser registers the "before" state
        // before we remove the classes and trigger the transition.
        void el.offsetWidth;
        el.classList.remove('opacity-0', 'translate-y-4');
    }

    async function navigateTo(url, addHistory) {
        const content = document.getElementById(CONTENT_ID);
        if (!content) {
            window.location.href = url;
            return;
        }

        try {
            await fadeOut(content);

            const response = await fetch(url, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
            });

            if (!response.ok) {
                window.location.href = url;
                return;
            }

            const html = await response.text();
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newContent = doc.getElementById(CONTENT_ID);
            const newTitle = doc.querySelector('title');

            if (!newContent) {
                window.location.href = url;
                return;
            }

            content.innerHTML = newContent.innerHTML;
            if (newTitle) document.title = newTitle.textContent;

            if (addHistory) {
                window.history.pushState({ projectNav: true }, '', url);
            }

            window.scrollTo({ top: 0, behavior: 'smooth' });
            fadeIn(content);
        } catch (err) {
            // Network hiccup or parsing issue — don't trap the user, just navigate normally.
            window.location.href = url;
        }
    }

    document.addEventListener('click', function (e) {
        const anchor = e.target.closest('a');
        if (!anchor) return;
        if (e.defaultPrevented) return;
        if (e.button !== 0) return; // left click only
        if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return; // let modified clicks open new tabs

        if (!isProjectLink(anchor)) return;

        // Same page? Don't re-fetch, just let it no-op.
        if (anchor.href === window.location.href) {
            e.preventDefault();
            return;
        }

        e.preventDefault();
        navigateTo(anchor.href, true);
    });

    window.addEventListener('popstate', function () {
        navigateTo(window.location.href, false);
    });
})();