<?php
$ROOT = '../';
$PAGE_TITLE = "General Information — D.El.Ed College";
$PAGE_DESC = "General Information about D.El.Ed College — NCTE recognition, rules, activities, gallery, and academic resources.";
include $ROOT . 'includes/header.php';
?>
  <main>
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>General Information</h1>
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../index.php">Home</a>
            <span class="breadcrumb-sep">›</span>
            <span>General Information</span>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-header">
          <h2>Important Information &amp; Resources</h2>
          <div class="section-divider"></div>
          <p>Everything you need to know about the college — documents, regulations, activities, and academic resources.</p>
        </div>

        <div class="gen-info-cards">
          <div class="gen-info-card">
            <div class="gen-info-icon">📋</div>
            <h4>NCTE Recognition</h4>
            <p>Official recognition document from the National Council for Teacher Education for our D.El.Ed programme.</p>
            <a href="../assets/pdfs/ncte-recognition.pdf" target="_blank" rel="noopener" class="card-link" id="ncte-pdf-btn">
              View PDF →
            </a>
          </div>
          <div class="gen-info-card">
            <div class="gen-info-icon">📜</div>
            <h4>Rules &amp; Regulations</h4>
            <p>College rules, student conduct guidelines, attendance requirements, and examination norms.</p>
            <a href="rules.php" class="card-link" id="geninfo-rules-link">Read Rules →</a>
          </div>
          <div class="gen-info-card">
            <div class="gen-info-icon">🏛️</div>
            <h4>G.M.C (Grievance Management)</h4>
            <p>Grievance Management Cell — procedures for student welfare, complaints, and redressal.</p>
            <a href="gmc.php" class="card-link" id="geninfo-gmc-link">View GMC →</a>
          </div>
          <div class="gen-info-card">
            <div class="gen-info-icon">🎭</div>
            <h4>Activities</h4>
            <p>College events, co-curricular activities, workshops, and cultural programmes.</p>
            <a href="activity.php" class="card-link" id="geninfo-activity-link">View Activities →</a>
          </div>
          <div class="gen-info-card">
            <div class="gen-info-icon">🏆</div>
            <h4>Achievements</h4>
            <p>Institutional and student achievements, awards, and recognitions over the years.</p>
            <a href="achievement.php" class="card-link" id="geninfo-achievement-link">View Achievements →</a>
          </div>
          <div class="gen-info-card">
            <div class="gen-info-icon">🖼️</div>
            <h4>Gallery</h4>
            <p>Photo gallery showcasing campus life, events, and memorable college moments.</p>
            <a href="gallery.php" class="card-link" id="geninfo-gallery-link">View Gallery →</a>
          </div>
          <div class="gen-info-card">
            <div class="gen-info-icon">📖</div>
            <h4>Our Course</h4>
            <p>Details about the D.El.Ed two-year diploma programme, curriculum, and eligibility.</p>
            <a href="our-course.php" class="card-link" id="geninfo-course-link">View Course →</a>
          </div>
          <div class="gen-info-card">
            <div class="gen-info-icon">📅</div>
            <h4>Academic — Attendance</h4>
            <p>Monthly attendance records for student reference and parent information.</p>
            <div style="display:flex;flex-direction:column;gap:0.4rem;margin-top:0.75rem;">
              <a href="../assets/pdfs/attendance-july.pdf"    target="_blank" rel="noopener" style="font-size:0.82rem;color:var(--color-primary);font-weight:600;">July PDF ↗</a>
              <a href="../assets/pdfs/attendance-august.pdf"  target="_blank" rel="noopener" style="font-size:0.82rem;color:var(--color-primary);font-weight:600;">August PDF ↗</a>
              <a href="../assets/pdfs/september-2019.pdf"     target="_blank" rel="noopener" style="font-size:0.82rem;color:var(--color-primary);font-weight:600;">September 2019 PDF ↗</a>
              <a href="../assets/pdfs/october-2019.pdf"       target="_blank" rel="noopener" style="font-size:0.82rem;color:var(--color-primary);font-weight:600;">October 2019 PDF ↗</a>
              <a href="../assets/pdfs/november.pdf"           target="_blank" rel="noopener" style="font-size:0.82rem;color:var(--color-primary);font-weight:600;">November PDF ↗</a>
              <a href="../assets/pdfs/december-2019.pdf"      target="_blank" rel="noopener" style="font-size:0.82rem;color:var(--color-primary);font-weight:600;">December 2019 PDF ↗</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php include $ROOT . 'includes/footer.php'; ?>
