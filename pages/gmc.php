<?php
$ROOT = '../';
$PAGE_TITLE = "G.M.C — D.El.Ed College";
$PAGE_DESC = "Grievance Management Cell (GMC) of D.El.Ed College — student welfare, complaint procedures, and redressal mechanisms.";
include $ROOT . 'includes/header.php';
?>
  <main>
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>G.M.C — Grievance Management Cell</h1>
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../index.php">Home</a>
            <span class="breadcrumb-sep">›</span>
            <a href="general-information.php">General Information</a>
            <span class="breadcrumb-sep">›</span>
            <span>G.M.C</span>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="content-card">
          <h2>About the Grievance Management Cell</h2>
          <p>The Grievance Management Cell (GMC) of D.El.Ed College is established to provide a transparent, fair, and effective mechanism for addressing student grievances and concerns. The GMC operates in accordance with the guidelines of NCTE and the Maharashtra State Board.</p>
          <p>The primary objective of the GMC is to ensure that every student feels heard, respected, and supported. The cell handles all types of grievances — academic, administrative, personal, or related to college facilities — in a confidential and time-bound manner.</p>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;margin-top:2rem;">
          <div class="content-card">
            <div class="gmc-section">
              <h3>Objectives</h3>
              <ul style="list-style:none;display:flex;flex-direction:column;gap:0.75rem;margin-top:1rem;">
                <li>✅ To provide a formal channel for lodging and resolving student grievances</li>
                <li>✅ To ensure prompt, fair, and unbiased resolution of complaints</li>
                <li>✅ To maintain the dignity and well-being of every student</li>
                <li>✅ To prevent recurrence of issues through systemic improvements</li>
                <li>✅ To create a safe, supportive, and inclusive campus environment</li>
              </ul>
            </div>
          </div>
          <div class="content-card">
            <div class="gmc-section">
              <h3>Types of Grievances Addressed</h3>
              <ul style="list-style:none;display:flex;flex-direction:column;gap:0.75rem;margin-top:1rem;">
                <li>📋 Academic issues (evaluation, attendance, marks)</li>
                <li>📋 Administrative complaints (fees, documentation, facilities)</li>
                <li>📋 Personal welfare concerns (harassment, bullying)</li>
                <li>📋 Infrastructure and facility-related complaints</li>
                <li>📋 Any other matter affecting student welfare</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="content-card" style="margin-top:2rem;">
          <h3>GMC Committee Members</h3>
          <div class="table-wrap" style="margin-top:1rem;">
            <table class="data-table">
              <thead>
                <tr><th>Sr. No.</th><th>Name</th><th>Designation</th><th>Role in GMC</th></tr>
              </thead>
              <tbody>
                <tr><td>1</td><td>Dr. [Principal Name]</td><td>Principal</td><td>Chairperson, GMC</td></tr>
                <tr><td>2</td><td>Prof. [Name]</td><td>Senior Lecturer</td><td>Member</td></tr>
                <tr><td>3</td><td>Prof. [Name]</td><td>Lecturer</td><td>Member</td></tr>
                <tr><td>4</td><td>[Student Representative Name]</td><td>Student (Year 2)</td><td>Student Representative</td></tr>
                <tr><td>5</td><td>[Parent Representative Name]</td><td>Parent</td><td>Parent Representative</td></tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="content-card" style="margin-top:2rem;">
          <h3>Grievance Submission Procedure</h3>
          <div class="rules-list">
            <div class="rule-item">
              <div class="rule-number">1</div>
              <div class="rule-text">
                <strong>Submit Written Complaint</strong>
                <p>The aggrieved student must submit a written grievance form to the GMC Chairperson (Principal's Office) or drop it in the designated Grievance Box.</p>
              </div>
            </div>
            <div class="rule-item">
              <div class="rule-number">2</div>
              <div class="rule-text">
                <strong>Acknowledgement</strong>
                <p>The GMC will acknowledge receipt of the grievance within 3 working days.</p>
              </div>
            </div>
            <div class="rule-item">
              <div class="rule-number">3</div>
              <div class="rule-text">
                <strong>Investigation</strong>
                <p>The GMC will investigate the matter, may call for a hearing, and gather relevant information from concerned parties.</p>
              </div>
            </div>
            <div class="rule-item">
              <div class="rule-number">4</div>
              <div class="rule-text">
                <strong>Resolution</strong>
                <p>The GMC will communicate its decision and resolution within 15 working days of receipt of the complaint.</p>
              </div>
            </div>
          </div>
          <p style="margin-top:1rem;padding:1rem;background:var(--color-bg);border-radius:var(--radius);font-size:0.9rem;">
            <strong>Contact GMC:</strong> Students may also reach the GMC via email at <a href="mailto:gmc@dedcollege.edu.in" style="color:var(--color-primary);font-weight:600;">gmc@dedcollege.edu.in</a> or visit the Principal's Office during working hours.
          </p>
        </div>
      </div>
    </section>
  </main>
<?php include $ROOT . 'includes/footer.php'; ?>
