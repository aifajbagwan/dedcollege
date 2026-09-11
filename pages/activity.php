<?php
$ROOT = '../';
$PAGE_TITLE = "Activity — D.El.Ed College";
$PAGE_DESC = "Activities at D.El.Ed College — cultural events, workshops, seminars, sports, and co-curricular programmes.";
include $ROOT . 'includes/header.php';
?>
  <main>
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>Activities</h1>
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../index.php">Home</a>
            <span class="breadcrumb-sep">›</span>
            <a href="general-information.php">General Information</a>
            <span class="breadcrumb-sep">›</span>
            <span>Activity</span>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-header">
          <h2>College Activities &amp; Events</h2>
          <div class="section-divider"></div>
          <p>Life at D.El.Ed College extends far beyond the classroom. We offer a rich tapestry of cultural, academic, and co-curricular activities that shape well-rounded educators.</p>
        </div>

        <div class="achievement-grid">
          <div class="activity-card">
            <div class="activity-img" style="background:linear-gradient(135deg,#1a2e4a,#2a4a74);">🎭</div>
            <div class="activity-body">
              <div class="activity-tag">Cultural</div>
              <h4>Annual Day Celebration</h4>
              <p>A grand annual celebration featuring cultural performances, prize distribution, and addresses by distinguished guests. Students showcase their artistic talents in dance, drama, and music.</p>
            </div>
          </div>
          <div class="activity-card">
            <div class="activity-img" style="background:linear-gradient(135deg,#c9a84c,#a8853c);">📚</div>
            <div class="activity-body">
              <div class="activity-tag">Academic</div>
              <h4>Educational Seminars &amp; Workshops</h4>
              <p>Regular seminars, guest lectures, and workshops by educationists and subject experts on contemporary topics in education, pedagogy, and child psychology.</p>
            </div>
          </div>
          <div class="activity-card">
            <div class="activity-img" style="background:linear-gradient(135deg,#2a4a74,#1a2e4a);">🏃</div>
            <div class="activity-body">
              <div class="activity-tag">Sports</div>
              <h4>Annual Sports Day</h4>
              <p>A day-long sports event encouraging physical fitness, team spirit, and sportsmanship among students. Events include track &amp; field, team sports, and fun activities for all participants.</p>
            </div>
          </div>
          <div class="activity-card">
            <div class="activity-img" style="background:linear-gradient(135deg,#0f1c2e,#1a2e4a);">🌱</div>
            <div class="activity-body">
              <div class="activity-tag">Social</div>
              <h4>Community Outreach Programmes</h4>
              <p>Student-teachers engage with the local community through literacy drives, awareness campaigns, and volunteering — developing social responsibility alongside professional skills.</p>
            </div>
          </div>
          <div class="activity-card">
            <div class="activity-img" style="background:linear-gradient(135deg,#1a2e4a,#c9a84c);">🎨</div>
            <div class="activity-body">
              <div class="activity-tag">Creative</div>
              <h4>Art Exhibition</h4>
              <p>An annual display of student artwork, craft projects, and teaching-learning materials created during the academic year, highlighting the creativity and artistic skills of student-teachers.</p>
            </div>
          </div>
          <div class="activity-card">
            <div class="activity-img" style="background:linear-gradient(135deg,#2a4a74,#c9a84c);">🌍</div>
            <div class="activity-body">
              <div class="activity-tag">Environment</div>
              <h4>Environment Day Activities</h4>
              <p>Tree plantation drives, cleanliness campaigns, and awareness programmes held on National Environment Day and throughout the year to instil environmental consciousness.</p>
            </div>
          </div>
          <div class="activity-card">
            <div class="activity-img" style="background:linear-gradient(135deg,#1a2e4a,#2a4a74);">📖</div>
            <div class="activity-body">
              <div class="activity-tag">Academic</div>
              <h4>Study Tours &amp; Field Visits</h4>
              <p>Educational trips to schools, heritage sites, and educational institutions to provide contextual learning experiences and expose student-teachers to diverse educational settings.</p>
            </div>
          </div>
          <div class="activity-card">
            <div class="activity-img" style="background:linear-gradient(135deg,#c9a84c,#1a2e4a);">🏅</div>
            <div class="activity-body">
              <div class="activity-tag">Competitions</div>
              <h4>Inter-College Competitions</h4>
              <p>Participation in inter-college events including debates, elocution contests, teaching competitions, and cultural festivals, bringing recognition and exposure to our students.</p>
            </div>
          </div>
          <div class="activity-card">
            <div class="activity-img" style="background:linear-gradient(135deg,#0f1c2e,#2a4a74);">🇮🇳</div>
            <div class="activity-body">
              <div class="activity-tag">National</div>
              <h4>National Celebrations</h4>
              <p>Independence Day, Republic Day, Teachers' Day, and other national occasions are celebrated with patriotic fervour, flag-hoisting ceremonies, and cultural programmes.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php include $ROOT . 'includes/footer.php'; ?>
