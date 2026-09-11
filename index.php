<?php
$ROOT = './';
$PAGE_TITLE = "Home — D.El.Ed College | M.C.E. Society's Junior College of Education";
$PAGE_DESC = "D.El.Ed College — M.C.E. Society's Junior College of Education. NCTE-recognised teacher training college offering the Diploma in Elementary Education programme.";
include $ROOT . 'includes/header.php';
?>
<main>

    <!-- ═══════════════════ HERO ═══════════════════ -->
    <section class="hero" aria-label="College welcome banner">
      <div class="hero-bg" aria-hidden="true"></div>
      <div class="hero-overlay" aria-hidden="true"></div>
      <div class="hero-content fade-in-up">
        <span class="hero-badge">Est. Since Decades of Excellence</span>
        <h1>D.El.Ed College</h1>
        <p class="hero-society">M.C.E. Society's Junior College of Education</p>
        <p class="hero-tagline">Shaping compassionate, skilled educators who transform primary classrooms across Maharashtra and beyond.</p>
        <div class="hero-cta">
          <a href="#" target="_blank" rel="noopener" class="btn btn-primary" id="hero-admission-btn">
            🎓 Online Admission
          </a>
          <a href="pages/about.php" class="btn btn-outline" id="hero-about-btn">Discover Our College</a>
        </div>
      </div>
      <div class="scroll-hint" aria-hidden="true">Scroll</div>
    </section>

    <!-- ═══════════════════ STATS BAR ═══════════════════ -->
    <div class="stats-bar" aria-label="College statistics">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-item">
            <span class="stat-number">25+</span>
            <span class="stat-label">Years of Excellence</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">1000+</span>
            <span class="stat-label">Alumni Educators</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">15+</span>
            <span class="stat-label">Expert Faculty</span>
          </div>
          <div class="stat-item">
            <span class="stat-number">100%</span>
            <span class="stat-label">NCTE Recognised</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ═══════════════════ ABOUT INTRO ═══════════════════ -->
    <section class="section" aria-labelledby="about-heading">
      <div class="container">
        <div class="about-grid">
          <!-- Text -->
          <div class="about-text">
            <div class="section-header">
              <h2 id="about-heading">Nurturing the Teachers of Tomorrow</h2>
              <div class="section-divider"></div>
              <p>D.El.Ed College, under the aegis of M.C.E. Society, has been a beacon of quality teacher education, producing generations of dedicated educators who have made a lasting impact on primary education.</p>
            </div>
            <div class="feature-list">
              <div class="feature-item">
                <div class="feature-icon">🏛️</div>
                <div class="feature-item-text">
                  <strong>NCTE Recognised</strong>
                  <span>Fully recognised by the National Council for Teacher Education</span>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-icon">📚</div>
                <div class="feature-item-text">
                  <strong>Holistic Curriculum</strong>
                  <span>Balanced academic, practical, and co-curricular education</span>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-icon">🌱</div>
                <div class="feature-item-text">
                  <strong>Experienced Faculty</strong>
                  <span>Dedicated educators with deep domain expertise</span>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-icon">🏆</div>
                <div class="feature-item-text">
                  <strong>Proven Track Record</strong>
                  <span>Consistent outstanding results and alumni success</span>
                </div>
              </div>
            </div>
            <div style="margin-top:2rem;">
              <a href="pages/about.php" class="btn btn-primary-dark" id="home-learn-more-btn">Learn More About Us</a>
            </div>
          </div>

          <!-- Principal & HOD Portraits -->
          <div class="portraits-grid">
            <div class="portrait-card">
              <img src="assets/images/principal.jpg"
                   alt="Principal of D.El.Ed College"
                   onerror="this.style.background='linear-gradient(135deg,#1a2e4a,#2a4a74)';this.style.height='240px';this.removeAttribute('src')">
              <div class="portrait-info">
                <h4>[Principal Name]</h4>
                <span class="title">Principal</span>
                <p class="quote">"Education is the most powerful weapon to change the world."</p>
              </div>
            </div>
            <div class="portrait-card">
              <img src="assets/images/hod.jpg"
                   alt="Head of Department"
                   onerror="this.style.background='linear-gradient(135deg,#1a2e4a,#2a4a74)';this.style.height='240px';this.removeAttribute('src')">
              <div class="portrait-info">
                <h4>Mrs. Rizwana Daulatabad</h4>
                <span class="title">Head of Department</span>
                <p class="quote">"Education is the most important tool offers inner and outer strength to a person."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════ QUICK LINKS ═══════════════════ -->
    <section class="section section-alt" aria-labelledby="quick-links-heading">
      <div class="container">
        <div class="section-header">
          <h2 id="quick-links-heading">Explore Our College</h2>
          <div class="section-divider"></div>
          <p>Everything you need to know about D.El.Ed College — from academics to campus life.</p>
        </div>
        <div class="quick-links-grid">
          <a href="pages/our-course.php" class="quick-link-card" id="qlc-course">
            <div class="quick-link-icon">🎓</div>
            <h3>D.El.Ed Programme</h3>
            <p>Two-year diploma programme for aspiring primary school teachers</p>
          </a>
          <a href="pages/faculty.php" class="quick-link-card" id="qlc-faculty">
            <div class="quick-link-icon">👨‍🏫</div>
            <h3>Our Faculty</h3>
            <p>Meet our experienced and dedicated teaching staff</p>
          </a>
          <a href="pages/infrastructure.php" class="quick-link-card" id="qlc-infra">
            <div class="quick-link-icon">🏫</div>
            <h3>Infrastructure</h3>
            <p>Modern classrooms, labs, and library facilities</p>
          </a>
          <a href="pages/gallery.php" class="quick-link-card" id="qlc-gallery">
            <div class="quick-link-icon">🖼️</div>
            <h3>Gallery</h3>
            <p>A glimpse into campus life and college events</p>
          </a>
          <a href="pages/achievement.php" class="quick-link-card" id="qlc-achievement">
            <div class="quick-link-icon">🏆</div>
            <h3>Achievements</h3>
            <p>Our milestones, awards, and student successes</p>
          </a>
          <a href="pages/contact.php" class="quick-link-card" id="qlc-contact">
            <div class="quick-link-icon">📞</div>
            <h3>Contact Us</h3>
            <p>Get directions, reach out, or send us a message</p>
          </a>
        </div>
      </div>
    </section>

    <!-- ═══════════════════ NOTICE + ABOUT SECTION ═══════════════════ -->
    <section class="section" aria-labelledby="notice-heading">
      <div class="container">
        <div style="display:grid;grid-template-columns:1.5fr 1fr;gap:3rem;align-items:start;">
          <!-- College Snapshot -->
          <div>
            <div class="section-header" style="text-align:left;">
              <h2 id="notice-heading">Why Choose D.El.Ed College?</h2>
              <div class="section-divider" style="margin-left:0;"></div>
            </div>
            <div class="content-card" style="margin-top:1.5rem;">
              <p>Founded under the banner of M.C.E. Society, D.El.Ed College has consistently maintained high academic standards in teacher education. Our two-year Diploma in Elementary Education (D.El.Ed) programme is meticulously designed to equip student-teachers with theoretical knowledge and practical classroom skills.</p>
              <p>We believe that great teachers are made, not born. Our structured curriculum integrates child psychology, pedagogy, educational philosophy, and extensive school internship — ensuring our graduates are classroom-ready from day one.</p>
              <p>With a strong alumni network spanning Maharashtra and beyond, D.El.Ed College remains a top choice for students aspiring to make a difference through teaching.</p>
              <a href="pages/vision-mission.php" class="btn btn-primary" style="margin-top:0.5rem;" id="home-vision-btn">Our Vision &amp; Mission</a>
            </div>
          </div>
          <!-- Notice Board -->
          <div>
            <div class="notice-board">
              <h3>📌 Notice Board</h3>
              <div class="notice-item">
                <span class="notice-date">Sep 2026</span>
                <span class="notice-text">Admission open for D.El.Ed 2026–27 batch. Apply online now.</span>
              </div>
              <div class="notice-item">
                <span class="notice-date">Aug 2026</span>
                <span class="notice-text">Merit List 2026-27 published. Check the Admission section.</span>
              </div>
              <div class="notice-item">
                <span class="notice-date">Jul 2026</span>
                <span class="notice-text">Attendance records for July uploaded. See Academic section.</span>
              </div>
              <div class="notice-item">
                <span class="notice-date">Jun 2026</span>
                <span class="notice-text">Annual Day celebrations scheduled. All students to participate.</span>
              </div>
              <div class="notice-item">
                <span class="notice-date">May 2026</span>
                <span class="notice-text">NCTE Inspection report — college re-recognised for 2026-28.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════ CTA BANNER ═══════════════════ -->
    <div class="cta-banner">
      <div class="container" style="position:relative;z-index:1;">
        <h2>Begin Your Teaching Journey Today</h2>
        <p>Join hundreds of student-teachers who chose D.El.Ed College for quality education and a bright future.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
          <a href="#" target="_blank" rel="noopener" class="btn btn-primary" id="cta-admission-btn">🎓 Apply for Admission</a>
          <a href="pages/contact.php" class="btn btn-outline" id="cta-contact-btn">📞 Contact Us</a>
        </div>
      </div>
    </div>

  </main>
<?php include $ROOT . 'includes/footer.php'; ?>
