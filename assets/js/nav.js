/**
 * nav.js — D.El.Ed College
 * Interaction logic for the navigation (hamburger, dropdowns) and scroll-to-top.
 */
(function () {
  'use strict';

  /* ── Init interactions ───────────────────────── */
  function initInteractions() {
    const hamburger = document.getElementById('hamburger');
    const menu      = document.getElementById('nav-menu');

    /* --- Hamburger toggle --- */
    if (hamburger && menu) {
      hamburger.addEventListener('click', e => {
        e.stopPropagation();
        const isOpen = menu.classList.toggle('open');
        hamburger.classList.toggle('active', isOpen);
        hamburger.setAttribute('aria-expanded', String(isOpen));
        document.body.style.overflow = isOpen ? 'hidden' : '';
      });
    }

    /* --- Close menu on outside click --- */
    document.addEventListener('click', e => {
      if (!menu?.contains(e.target) && !hamburger?.contains(e.target)) {
        closeMenu();
      }
    });

    /* --- Mobile: top-level items with dropdowns toggle on click --- */
    document.querySelectorAll('.nav-item[data-has-dropdown] > .nav-link').forEach(link => {
      link.addEventListener('click', e => {
        if (window.innerWidth > 768) return;
        e.preventDefault();
        const parent  = link.closest('.nav-item');
        const wasOpen = parent.classList.contains('open');
        // Close all siblings
        document.querySelectorAll('#nav-menu > .nav-item.open')
          .forEach(el => el.classList.remove('open'));
        if (!wasOpen) parent.classList.add('open');
      });
    });

    /* --- Mobile: level-2 items with sub-dropdowns or toggle-only --- */
    document.querySelectorAll('.dropdown-item > .dropdown-link').forEach(link => {
      link.addEventListener('click', e => {
        if (window.innerWidth > 768) return;
        const parent = link.closest('.dropdown-item');
        const hasSub = parent.querySelector('.sub-dropdown');
        if (hasSub || link.classList.contains('toggle-only')) {
          e.preventDefault();
          parent.classList.toggle('open');
        }
      });
    });

    /* --- Keyboard: Escape closes everything --- */
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') {
        closeMenu();
        document.querySelectorAll('.nav-item.open, .dropdown-item.open')
          .forEach(el => el.classList.remove('open'));
      }
    });

    /* --- Scroll-to-top button --- */
    const scrollBtn = document.getElementById('scroll-top');
    if (scrollBtn) {
      window.addEventListener('scroll', () => {
        scrollBtn.classList.toggle('visible', window.scrollY > 400);
      }, { passive: true });
      scrollBtn.addEventListener('click', () =>
        window.scrollTo({ top: 0, behavior: 'smooth' })
      );
    }
  }

  function closeMenu() {
    const menu = document.getElementById('nav-menu');
    const ham  = document.getElementById('hamburger');
    if (menu) { menu.classList.remove('open'); }
    if (ham)  { ham.classList.remove('active'); ham.setAttribute('aria-expanded', 'false'); }
    document.body.style.overflow = '';
  }

  /* ── Mark current page active ──────────────────── */
  function markActive() {
    const currentPath = window.location.pathname;
    document.querySelectorAll('#site-header .nav-link').forEach(link => {
      try {
        const linkPath = new URL(link.href, window.location.origin).pathname;
        // Basic match, e.g. /dedcollege/index.php
        if (linkPath === currentPath) {
          link.closest('.nav-item')?.classList.add('active');
        } else if (currentPath.endsWith('/') && linkPath.endsWith('index.php')) {
          // Handle directory root
          link.closest('.nav-item')?.classList.add('active');
        }
      } catch (_) { /* ignore */ }
    });
  }

  /* ── Bootstrap ─────────────────────────────────── */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
      initInteractions();
      markActive();
    });
  } else {
    initInteractions();
    markActive();
  }

})();
