<?php
$ROOT = '../';
$PAGE_TITLE = "Faculty — D.El.Ed College";
$PAGE_DESC = "Faculty of D.El.Ed College — meet our experienced and dedicated teaching staff committed to excellence in teacher education.";
include $ROOT . 'includes/header.php';
?>
  <main>
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>Faculty</h1>
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../index.php">Home</a>
            <span class="breadcrumb-sep">›</span>
            <a href="about.php">About Us</a>
            <span class="breadcrumb-sep">›</span>
            <span>Faculty</span>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-header">
          <h2>Our Teaching Staff</h2>
          <div class="section-divider"></div>
          <p>Our faculty brings together deep subject expertise, pedagogical excellence, and a genuine passion for shaping future educators.</p>
        </div>

        <!-- Staff Approval PDF link -->
        <div style="text-align:right;margin-bottom:1.5rem;">
          <a href="../assets/pdfs/staff-approval.pdf" target="_blank" rel="noopener"
             class="btn btn-primary-dark" id="staff-approval-btn"
             style="display:inline-flex;align-items:center;gap:0.5rem;">
            📄 View Staff Approval (PDF)
          </a>
        </div>

        <!-- Teaching Faculty -->
        <h3 style="color:var(--color-primary);margin-bottom:1.5rem;padding-bottom:0.75rem;border-bottom:2px solid var(--color-accent);">Teaching Faculty</h3>
        <div class="faculty-grid">
          <div class="faculty-card">
            <img src="../assets/images/hod.jpg" alt="HOD"
                 onerror="this.style.background='linear-gradient(135deg,#1a2e4a,#2a4a74)';this.style.height='190px';this.removeAttribute('src')">
            <div class="faculty-card-body">
              <h4>Mrs. Rizwana Daulatabad</h4>
              <div class="designation">H.O.D</div>
              <div class="qual">B.Sc, MSc, B.Ed, M.Ed</div>
            </div>
          </div>
          <div class="faculty-card">
            <img src="../assets/images/faculty-3.jpg" alt="Lecturer"
                 onerror="this.style.background='linear-gradient(135deg,#2a4a74,#1a2e4a)';this.style.height='190px';this.removeAttribute('src')">
            <div class="faculty-card-body">
              <h4>Mrs. Anuradha Reddy</h4>
              <div class="designation">Lecturer</div>
              <div class="qual">B.A, MA, B.Ed, M.Ed</div>
            </div>
          </div>
          <div class="faculty-card">
            <img src="../assets/images/faculty-4.jpg" alt="Lecturer"
                 onerror="this.style.background='linear-gradient(135deg,#1a2e4a,#c9a84c)';this.style.height='190px';this.removeAttribute('src')">
            <div class="faculty-card-body">
              <h4>Mrs. Amita Dambir</h4>
              <div class="designation">Lecturer</div>
              <div class="qual">BSc (Home Sci), BA, MA, B.Ed, M.Ed, M.Phil, DSM</div>
            </div>
          </div>
          <div class="faculty-card">
            <img src="../assets/images/faculty-5.jpg" alt="Lecturer"
                 onerror="this.style.background='linear-gradient(135deg,#0f1c2e,#2a4a74)';this.style.height='190px';this.removeAttribute('src')">
            <div class="faculty-card-body">
              <h4>Mrs. Shahenaaz Shaikh</h4>
              <div class="designation">Lecturer</div>
              <div class="qual">B.A, M.A (Hindi), MA (English), M.Ed</div>
            </div>
          </div>
          <div class="faculty-card">
            <img src="../assets/images/faculty-6.jpg" alt="Lecturer"
                 onerror="this.style.background='linear-gradient(135deg,#1a2e4a,#2a4a74)';this.style.height='190px';this.removeAttribute('src')">
            <div class="faculty-card-body">
              <h4>Ms. Reshma Shaikh</h4>
              <div class="designation">Lecturer</div>
              <div class="qual">B.A, MA, M.Phil, B.Ed, M.Ed, D.C.A, D.S.M, MSCIT</div>
            </div>
          </div>
          <div class="faculty-card">
            <img src="../assets/images/faculty-7.jpg" alt="Lecturer"
                 onerror="this.style.background='linear-gradient(135deg,#2a4a74,#1a2e4a)';this.style.height='190px';this.removeAttribute('src')">
            <div class="faculty-card-body">
              <h4>Mrs. Pallavi Kumbhar</h4>
              <div class="designation">Lecturer</div>
              <div class="qual">B.A, MA, B.Ed, M.Ed</div>
            </div>
          </div>
          <div class="faculty-card">
            <img src="../assets/images/faculty-8.jpg" alt="Lecturer"
                 onerror="this.style.background='linear-gradient(135deg,#1a2e4a,#c9a84c)';this.style.height='190px';this.removeAttribute('src')">
            <div class="faculty-card-body">
              <h4>Mrs. Nousheen Shaikh</h4>
              <div class="designation">Lecturer</div>
              <div class="qual">BA, MA, B.Ed, M.Ed</div>
            </div>
          </div>
          <div class="faculty-card">
            <img src="../assets/images/faculty-9.jpg" alt="Lecturer"
                 onerror="this.style.background='linear-gradient(135deg,#0f1c2e,#1a2e4a)';this.style.height='190px';this.removeAttribute('src')">
            <div class="faculty-card-body">
              <h4>Mr. Joseph Francis</h4>
              <div class="designation">Lecturer</div>
              <div class="qual">B.Sc, M.A, B.Ed, M.Ed</div>
            </div>
          </div>
          <div class="faculty-card">
            <img src="../assets/images/faculty-10.jpg" alt="Lecturer"
                 onerror="this.style.background='linear-gradient(135deg,#1a2e4a,#2a4a74)';this.style.height='190px';this.removeAttribute('src')">
            <div class="faculty-card-body">
              <h4>Mr. Shabbir Fulari</h4>
              <div class="designation">Lecturer</div>
              <div class="qual">B.A, M.A, M.Ed, MS-CIT</div>
            </div>
          </div>
        </div>

        <!-- Non-Teaching Staff -->
        <h3 style="color:var(--color-primary);margin:2.5rem 0 1.5rem;padding-bottom:0.75rem;border-bottom:2px solid var(--color-accent);">Non-Teaching Staff</h3>
        <div class="table-wrap">
          <table class="data-table">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Qualification</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>1</td><td>[Name]</td><td>Office Superintendent</td><td>B.Com</td></tr>
              <tr><td>2</td><td>[Name]</td><td>Library Assistant</td><td>B.Lib.Sc.</td></tr>
              <tr><td>3</td><td>[Name]</td><td>Lab Assistant</td><td>B.Sc.</td></tr>
              <tr><td>4</td><td>[Name]</td><td>Clerk / Typist</td><td>HSC</td></tr>
              <tr><td>5</td><td>[Name]</td><td>Peon / Attender</td><td>SSC</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>
<?php include $ROOT . 'includes/footer.php'; ?>
