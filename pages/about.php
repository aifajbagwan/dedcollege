<?php
$ROOT = '../';
$PAGE_TITLE = "About Us — D.El.Ed College";
$PAGE_DESC = "About D.El.Ed College — M.C.E. Society's Junior College of Education. Learn about our history, faculty, and mission.";
include $ROOT . 'includes/header.php';
?>
  <main>
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>About Us</h1>
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../index.php">Home</a>
            <span class="breadcrumb-sep">›</span>
            <span>About Us</span>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:start;">
          <div>
            <div class="content-card">
              <h2>M.C.E. Society's Junior College of Education</h2>
              <p>M. C. E. Society's Junior College of Education is proud to be an integral part of this picturesque Educational Complex at Azam Campus. The Junior college of education for English Medium having intake capacity 150 (76 for Minority Students + 74 for Non-Minority Students) was established in the year 2003, approved by NCTE Bhopal, recognised by the Govt. of Maharashtra.</p>
              <blockquote>
                "Education is the most important tool offers inner and outer strength to a person. Education is the fundamental rights of everyone and capable of bringing any desired change and upliftment in the human mind and society."<br>
                <strong style="display:block;margin-top:0.5rem;">— Mrs. Rizwana Daulatabad (H.O.D)</strong>
              </blockquote>
            </div>
            <div class="content-card">
              <h3>Our Accreditations</h3>
              <ul style="list-style:none;display:flex;flex-direction:column;gap:0.75rem;margin-top:1rem;">
                <li style="display:flex;align-items:center;gap:0.75rem;"><span style="color:#27ae60;font-size:1.2rem;">✅</span> <span>NCTE Recognised Institution</span></li>
                <li style="display:flex;align-items:center;gap:0.75rem;"><span style="color:#27ae60;font-size:1.2rem;">✅</span> <span>Affiliated to Maharashtra State Board</span></li>
                <li style="display:flex;align-items:center;gap:0.75rem;"><span style="color:#27ae60;font-size:1.2rem;">✅</span> <span>Member of M.C.E. Society Educational Network</span></li>
                <li style="display:flex;align-items:center;gap:0.75rem;"><span style="color:#27ae60;font-size:1.2rem;">✅</span> <span>Compliant with NEP 2020 Guidelines</span></li>
              </ul>
            </div>
          </div>
          <div>
            <div class="content-card">
              <h3>Quick Facts</h3>
              <div class="table-wrap" style="margin-top:1rem;">
                <table class="data-table">
                  <tbody>
                    <tr><td><strong>College Name</strong></td><td>D.El.Ed College (M.C.E. Society's Junior College of Education)</td></tr>
                    <tr><td><strong>Type</strong></td><td>Teacher Education Institute</td></tr>
                    <tr><td><strong>Programme</strong></td><td>Diploma in Elementary Education (D.El.Ed)</td></tr>
                    <tr><td><strong>Duration</strong></td><td>2 Years</td></tr>
                    <tr><td><strong>Affiliation</strong></td><td>Maharashtra State Board</td></tr>
                    <tr><td><strong>Recognition</strong></td><td>NCTE (National Council for Teacher Education)</td></tr>
                    <tr><td><strong>Medium</strong></td><td>Marathi / Semi-English</td></tr>
                    <tr><td><strong>Location</strong></td><td>Azam Campus, Pune, Maharashtra</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="content-card">
              <h3>Explore More</h3>
              <div style="display:flex;flex-direction:column;gap:0.75rem;margin-top:1rem;">
                <a href="history.php" style="display:flex;align-items:center;justify-content:space-between;padding:0.75rem 1rem;background:var(--color-bg);border-radius:var(--radius);border:1px solid var(--color-border);color:var(--color-primary);font-weight:600;transition:all 0.28s ease;">History of College <span>→</span></a>
                <a href="principal-desk.php" style="display:flex;align-items:center;justify-content:space-between;padding:0.75rem 1rem;background:var(--color-bg);border-radius:var(--radius);border:1px solid var(--color-border);color:var(--color-primary);font-weight:600;transition:all 0.28s ease;">Principal's Desk <span>→</span></a>
                <a href="governing-board.php" style="display:flex;align-items:center;justify-content:space-between;padding:0.75rem 1rem;background:var(--color-bg);border-radius:var(--radius);border:1px solid var(--color-border);color:var(--color-primary);font-weight:600;transition:all 0.28s ease;">Governing Board <span>→</span></a>
                <a href="faculty.php" style="display:flex;align-items:center;justify-content:space-between;padding:0.75rem 1rem;background:var(--color-bg);border-radius:var(--radius);border:1px solid var(--color-border);color:var(--color-primary);font-weight:600;transition:all 0.28s ease;">Our Faculty <span>→</span></a>
                <a href="infrastructure.php" style="display:flex;align-items:center;justify-content:space-between;padding:0.75rem 1rem;background:var(--color-bg);border-radius:var(--radius);border:1px solid var(--color-border);color:var(--color-primary);font-weight:600;transition:all 0.28s ease;">Infrastructure <span>→</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php include $ROOT . 'includes/footer.php'; ?>
