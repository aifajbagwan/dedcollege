<?php
$ROOT = '../';
$PAGE_TITLE = "Gallery — D.El.Ed College";
$PAGE_DESC = "Gallery — D.El.Ed College photo gallery showcasing campus life, cultural events, and academic activities.";
include $ROOT . 'includes/header.php';
?>
  <main>
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>Gallery</h1>
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../index.php">Home</a>
            <span class="breadcrumb-sep">›</span>
            <a href="general-information.php">General Information</a>
            <span class="breadcrumb-sep">›</span>
            <span>Gallery</span>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-header">
          <h2>Campus Life in Pictures</h2>
          <div class="section-divider"></div>
          <p>A visual journey through our vibrant campus — from classrooms to cultural events, every moment captured.</p>
        </div>

        <!-- Filter Buttons -->
        <div class="gallery-filters">
          <button class="gallery-filter-btn active" data-filter="all" id="filter-all">All</button>
          <button class="gallery-filter-btn" data-filter="sports"   id="filter-sports">Sport Player's</button>
          <button class="gallery-filter-btn" data-filter="guest"   id="filter-guest">Guest Lecture</button>
          <button class="gallery-filter-btn" data-filter="curricular" id="filter-curricular">Curricular</button>
          <button class="gallery-filter-btn" data-filter="cultural"   id="filter-cultural">Cultural</button>
          <button class="gallery-filter-btn" data-filter="academic"   id="filter-academic">Academic Topper</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid" id="gallery-grid">

          <div class="gallery-item" data-category="sports">
            <img src="../assets/images/gallery/gallery-6.jpg" alt="Sport Player's"
                 onerror="this.parentElement.style.background='linear-gradient(135deg,#1a2e4a,#2a4a74)';this.style.display='none'">
            <div class="gallery-overlay"><span>Sport Player's</span></div>
            <div class="gallery-zoom">🔍</div>
          </div>
          <div class="gallery-item" data-category="guest">
            <img src="../assets/images/gallery/gallery-7.jpg" alt="Guest Lecture"
                 onerror="this.parentElement.style.background='linear-gradient(135deg,#c9a84c,#a8853c)';this.style.display='none'">
            <div class="gallery-overlay"><span>Guest Lecture</span></div>
            <div class="gallery-zoom">🔍</div>
          </div>
          <div class="gallery-item" data-category="curricular">
            <img src="../assets/images/gallery/gallery-1.jpg" alt="Curricular"
                 onerror="this.parentElement.style.background='linear-gradient(135deg,#2a4a74,#1a2e4a)';this.style.display='none'">
            <div class="gallery-overlay"><span>Curricular</span></div>
            <div class="gallery-zoom">🔍</div>
          </div>
          <div class="gallery-item" data-category="cultural">
            <img src="../assets/images/gallery/gallery-2.jpg" alt="Cultural"
                 onerror="this.parentElement.style.background='linear-gradient(135deg,#e74c3c,#c0392b)';this.style.display='none'">
            <div class="gallery-overlay"><span>Cultural</span></div>
            <div class="gallery-zoom">🔍</div>
          </div>
          <div class="gallery-item" data-category="academic">
            <img src="../assets/images/gallery/gallery-5.jpg" alt="Academic Topper"
                 onerror="this.parentElement.style.background='linear-gradient(135deg,#0f1c2e,#1a2e4a)';this.style.display='none'">
            <div class="gallery-overlay"><span>Academic Topper</span></div>
            <div class="gallery-zoom">🔍</div>
          </div>

        </div>
      </div>
    </section>
  </main>
<?php include $ROOT . 'includes/footer.php'; ?>
  <script src="<?php echo $ROOT; ?>assets/js/gallery.js"></script>
  <script>
    /* Gallery filter functionality */
    const filterBtns = document.querySelectorAll('.gallery-filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.dataset.filter;
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        galleryItems.forEach(item => {
          if (filter === 'all' || item.dataset.category === filter) {
            item.style.display = '';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  </script>
