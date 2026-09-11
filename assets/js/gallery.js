/**
 * gallery.js — D.El.Ed College
 * Vanilla JS lightbox for the gallery page.
 * Reads all .gallery-item elements and builds a keyboard-accessible lightbox.
 */
(function () {
  'use strict';

  let items        = [];
  let currentIndex = 0;
  let lb, lbImg, lbCaption, lbCounter;

  /* ── Init ───────────────────────────────────── */
  function init() {
    items = Array.from(document.querySelectorAll('.gallery-item'));
    if (!items.length) return;

    createLightbox();
    bindGalleryItems();
    bindKeyboard();
  }

  /* ── Create lightbox DOM ────────────────────── */
  function createLightbox() {
    lb = document.createElement('div');
    lb.className = 'lightbox';
    lb.id        = 'gallery-lightbox';
    lb.setAttribute('role', 'dialog');
    lb.setAttribute('aria-modal', 'true');
    lb.setAttribute('aria-label', 'Image viewer');

    lb.innerHTML = `
      <button class="lightbox-close" id="lb-close" aria-label="Close image viewer">✕</button>
      <button class="lightbox-nav lightbox-prev" id="lb-prev" aria-label="Previous image">&#8249;</button>
      <img class="lightbox-img" id="lb-img" src="" alt="">
      <button class="lightbox-nav lightbox-next" id="lb-next" aria-label="Next image">&#8250;</button>
      <div class="lightbox-caption" id="lb-caption"></div>
      <div class="lightbox-counter" id="lb-counter"></div>`;

    document.body.appendChild(lb);

    lbImg     = document.getElementById('lb-img');
    lbCaption = document.getElementById('lb-caption');
    lbCounter = document.getElementById('lb-counter');

    document.getElementById('lb-close').addEventListener('click', close);
    document.getElementById('lb-prev').addEventListener('click', () => navigate(-1));
    document.getElementById('lb-next').addEventListener('click', () => navigate(+1));

    /* Close on backdrop click */
    lb.addEventListener('click', e => { if (e.target === lb) close(); });
  }

  /* ── Bind gallery items ─────────────────────── */
  function bindGalleryItems() {
    items.forEach((item, i) => {
      item.addEventListener('click', () => open(i));
      item.setAttribute('role', 'button');
      item.setAttribute('tabindex', '0');
      item.setAttribute('aria-label', 'View image ' + (i + 1));
      item.addEventListener('keydown', e => {
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); open(i); }
      });
    });
  }

  /* ── Keyboard navigation ────────────────────── */
  function bindKeyboard() {
    document.addEventListener('keydown', e => {
      if (!lb || !lb.classList.contains('active')) return;
      switch (e.key) {
        case 'ArrowLeft':  navigate(-1); break;
        case 'ArrowRight': navigate(+1); break;
        case 'Escape':     close();      break;
      }
    });
  }

  /* ── Open lightbox ──────────────────────────── */
  function open(index) {
    currentIndex = index;
    updateDisplay();
    lb.classList.add('active');
    document.body.style.overflow = 'hidden';
    document.getElementById('lb-close').focus();
  }

  /* ── Close lightbox ─────────────────────────── */
  function close() {
    lb.classList.remove('active');
    document.body.style.overflow = '';
    items[currentIndex]?.focus();
  }

  /* ── Navigate ───────────────────────────────── */
  function navigate(dir) {
    currentIndex = (currentIndex + dir + items.length) % items.length;
    lbImg.style.opacity = '0';
    setTimeout(updateDisplay, 150);
  }

  /* ── Update lightbox content ────────────────── */
  function updateDisplay() {
    const item    = items[currentIndex];
    const imgEl   = item.querySelector('img');
    const caption = item.querySelector('.gallery-overlay span')?.textContent || '';

    lbImg.src     = imgEl ? imgEl.src : '';
    lbImg.alt     = imgEl ? imgEl.alt : '';
    lbCaption.textContent = caption;
    lbCounter.textContent = `${currentIndex + 1} / ${items.length}`;
    lbImg.style.opacity   = '1';
  }

  /* ── Bootstrap ──────────────────────────────── */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
