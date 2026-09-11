<?php
$ROOT = '../';
$PAGE_TITLE = "Principal's Desk — D.El.Ed College";
$PAGE_DESC = "Principal's Desk — Message from the Principal of D.El.Ed College, M.C.E. Society's Junior College of Education.";
include $ROOT . 'includes/header.php';
?>
  <main>
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>Principal's Desk</h1>
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../index.php">Home</a>
            <span class="breadcrumb-sep">›</span>
            <a href="about.php">About Us</a>
            <span class="breadcrumb-sep">›</span>
            <span>Principal's Desk</span>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="principal-desk">
          <!-- Photo & Name Card -->
          <div class="principal-photo-wrap">
            <img src="../assets/images/principal.jpg"
                 alt="Principal of D.El.Ed College"
                 onerror="this.style.background='linear-gradient(135deg,#1a2e4a,#2a4a74)';this.style.minHeight='320px';this.removeAttribute('src')">
            <div class="principal-name-card">
              <h4>Mrs. Rizwana Daulatabad</h4>
              <span class="role">Principal</span>
            </div>
          </div>

          <!-- Message -->
          <div class="desk-content">
            <div class="content-card">
              <h2>A Message from the Principal</h2>
              <blockquote>
                "Teaching is the profession that makes all other professions possible."
              </blockquote>
              <p>Dear students, staff and parents,</p>
              <p>It's my immense pleasure to welcome you at MCE Society's Junior College of Education Azam Campus. Since the journey started way back in 2003 our aim is to develop a generation of empowered teachers in content, methodology and values, so as to be able to contribute to national development.</p>
              <p>We provide quality education and facilitate training to all students, especially the minorities and weaker sections of the society. We all are committed to empower students as we strongly believe in the quote by Aristotle "educating the mind without educating the heart is no education at all".</p>
              <p>Let us join hands to help our students take pride in how far they have come and to develop faith in how far they can go. I conclude by wishing you all a wonderful academic year.</p>
              <div class="signature">
                <p>With warm regards,</p>
                <p><strong>Mrs. Rizwana Daulatabad</strong><br>
                <em>Principal, M.C.E. Society's Junior College of Education</em></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php include $ROOT . 'includes/footer.php'; ?>
