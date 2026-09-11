<?php
$ROOT = '../';
$PAGE_TITLE = "Our Course — D.El.Ed College";
$PAGE_DESC = "D.El.Ed Course — Diploma in Elementary Education at D.El.Ed College. Eligibility, duration, curriculum, and career prospects.";
include $ROOT . 'includes/header.php';
?>
  <main>
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>Our Course</h1>
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../index.php">Home</a>
            <span class="breadcrumb-sep">›</span>
            <a href="general-information.php">General Information</a>
            <span class="breadcrumb-sep">›</span>
            <span>Our Course</span>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">

        <!-- Course Card -->
        <div class="course-card">
          <span class="course-badge">NCTE Recognised</span>
          <h3>Diploma in Elementary Education (D.El.Ed)</h3>
          <p>The Diploma in Elementary Education is a two-year professional teacher education programme designed to prepare candidates for the role of teacher at the elementary level (Classes I–VIII). It combines rigorous academic study with extensive school-based practice.</p>
          <div class="course-details" style="display:flex;flex-wrap:wrap;gap:1rem;">
            <div class="course-detail-item">
              <span class="label">Duration</span>
              <span class="value">2 Years</span>
            </div>
            <div class="course-detail-item">
              <span class="label">Medium</span>
              <span class="value">English</span>
            </div>
            <div class="course-detail-item">
              <span class="label">Intake</span>
              <span class="value">150 Seats (76 Minority + 74 Non-Minority)</span>
            </div>
            <div class="course-detail-item">
              <span class="label">Intake Criteria</span>
              <span class="value" style="font-size:0.8rem;white-space:normal;">40% Arts + 50% Science + 9% Commerce + 1% MCVC</span>
            </div>
          </div>
        </div>

        <!-- Details grid -->
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;margin-top:2rem;">
          <div class="content-card">
            <h3>Eligibility Criteria</h3>
            <ul style="margin-top:1rem;display:flex;flex-direction:column;gap:0.75rem;">
              <li>✅ <strong>Maharashtra State Residential:</strong> H.S.C. passed from Maharashtra State Board with 49.50% for Open category, 44.50% for Caste category (SC, ST, OBC, VJNT - caste certificate compulsory). HSC from CBSE/NIOS/ICSE/other state boards with same %, provided Domicile Certificate of Maharashtra State is produced.</li>
              <li>✅ <strong>Other State Residential:</strong> Only Muslim Minority candidates may apply, HSC from CBSE/NIOS/ICSE/other state boards with 49.50%/44.50% as above.</li>
              <li>✅ Any candidate who has completed H.Sc. (MCVC) is also applicable — one seat reserved. (Passed with Horticulture / Crop Science / Creche and Pre-School Management Subject)</li>
              <li>✅ Any candidate who has completed H.Sc. (CRASH) is also applicable — one seat reserved.</li>
              <li><small><em>Note: Other than above eligibility, contact college for more information.</em></small></li>
            </ul>
          </div>
          <div class="content-card">
            <h3>Admission Process</h3>
            <ul style="margin-top:1rem;display:flex;flex-direction:column;gap:0.75rem;">
              <li>✅ Admission procedure begins immediately the next day after the 12th std results are declared.</li>
              <li>✅ <strong>Documents required at admission:</strong> Passed mark sheets of Std 10th, 12th, and Leaving Certificate (Original &amp; Xerox copies), 3 photographs, Aadhar card Xerox, and bank details.</li>
              <li>✅ Examination form fee is Rs. 200/-.</li>
              <li>✅ This is a 2-year government course recognized by NCTE – Bhopal.</li>
            </ul>
          </div>
        </div>

        <!-- Curriculum -->
        <div class="content-card" style="margin-top:2rem;">
          <h3>Curriculum Structure</h3>
          <p style="margin-bottom:1.5rem;">The D.El.Ed curriculum is structured across two years with four semesters, designed as per NCTE norms and Maharashtra State Board guidelines.</p>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;">
            <div>
              <h4 style="color:var(--color-accent-dark);margin-bottom:1rem;">Year 1 — Core Areas</h4>
              <div class="table-wrap">
                <table class="data-table">
                  <thead><tr><th>Paper</th><th>Subject</th></tr></thead>
                  <tbody>
                    <tr><td>1</td><td>Child Development &amp; Learning Process</td></tr>
                    <tr><td>2</td><td>Curriculum &amp; Pedagogy — Language</td></tr>
                    <tr><td>3</td><td>Curriculum &amp; Pedagogy — Mathematics</td></tr>
                    <tr><td>4</td><td>Curriculum &amp; Pedagogy — EVS</td></tr>
                    <tr><td>5</td><td>Drama &amp; Art in Education</td></tr>
                    <tr><td>Pract</td><td>School Internship — Phase I</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div>
              <h4 style="color:var(--color-accent-dark);margin-bottom:1rem;">Year 2 — Advanced Areas</h4>
              <div class="table-wrap">
                <table class="data-table">
                  <thead><tr><th>Paper</th><th>Subject</th></tr></thead>
                  <tbody>
                    <tr><td>1</td><td>Knowledge &amp; Curriculum</td></tr>
                    <tr><td>2</td><td>Contemporary Issues in Education</td></tr>
                    <tr><td>3</td><td>ICT in Education</td></tr>
                    <tr><td>4</td><td>Guidance &amp; Counselling</td></tr>
                    <tr><td>5</td><td>Inclusive Education</td></tr>
                    <tr><td>Pract</td><td>School Internship — Phase II (20 weeks)</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Career Prospects -->
        <div class="content-card" style="margin-top:2rem;">
          <h3>Career Prospects</h3>
          <p>Graduates of our D.El.Ed programme are eligible to teach in government and private primary schools across Maharashtra. The D.El.Ed qualification is also a prerequisite for the Teachers Eligibility Test (TET), which is mandatory for primary school teaching positions.</p>
          <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:1rem;margin-top:1rem;">
            <div style="background:var(--color-bg);border-radius:var(--radius);padding:1rem;text-align:center;border:1px solid var(--color-border);">
              <div style="font-size:1.75rem;margin-bottom:0.5rem;">🏫</div>
              <strong style="color:var(--color-primary);font-size:0.9rem;">Primary School Teacher</strong>
            </div>
            <div style="background:var(--color-bg);border-radius:var(--radius);padding:1rem;text-align:center;border:1px solid var(--color-border);">
              <div style="font-size:1.75rem;margin-bottom:0.5rem;">📖</div>
              <strong style="color:var(--color-primary);font-size:0.9rem;">Subject Teacher (I–VIII)</strong>
            </div>
            <div style="background:var(--color-bg);border-radius:var(--radius);padding:1rem;text-align:center;border:1px solid var(--color-border);">
              <div style="font-size:1.75rem;margin-bottom:0.5rem;">🎓</div>
              <strong style="color:var(--color-primary);font-size:0.9rem;">Further Studies (B.Ed.)</strong>
            </div>
            <div style="background:var(--color-bg);border-radius:var(--radius);padding:1rem;text-align:center;border:1px solid var(--color-border);">
              <div style="font-size:1.75rem;margin-bottom:0.5rem;">🏛️</div>
              <strong style="color:var(--color-primary);font-size:0.9rem;">Private School Educator</strong>
            </div>
          </div>
          <div style="margin-top:1.5rem;text-align:center;">
            <a href="#" target="_blank" rel="noopener" class="btn btn-primary" id="course-apply-btn">Apply for Admission →</a>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php include $ROOT . 'includes/footer.php'; ?>
