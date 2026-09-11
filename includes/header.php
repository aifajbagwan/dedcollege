<?php
// Ensure $ROOT is defined
if (!isset($ROOT)) {
    $ROOT = './';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo isset($PAGE_DESC) ? htmlspecialchars($PAGE_DESC) : 'D.El.Ed College — M.C.E. Society\'s Junior College of Education.'; ?>">
  <title><?php echo isset($PAGE_TITLE) ? htmlspecialchars($PAGE_TITLE) : 'D.El.Ed College'; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $ROOT; ?>assets/css/style.css">
</head>
<body>

  <header id="site-header">
    <div class="top-bar">
      <div class="container">
        <span>📞 02026456010 &nbsp;|&nbsp; ✉ juniorcollegeofeducation@gmail.com</span>
        <span>🗓 Academic Year 2026–27 &nbsp;|&nbsp; <a href="<?php echo $ROOT; ?>pages/contact.php">Get Directions</a></span>
      </div>
    </div>
    <nav class="navbar" aria-label="Main navigation">
      <div class="container">
        <a href="<?php echo $ROOT; ?>index.php" class="nav-logo" aria-label="D.El.Ed College — Home">
          <img src="<?php echo $ROOT; ?>assets/images/logo.png" alt="D.El.Ed College Logo" width="46" height="46">
          <span class="nav-logo-text">
            <span class="college-name">D.El.Ed College</span>
            <span class="society-name">M.C.E. Society's Junior College of Education</span>
          </span>
        </a>
        <ul class="nav-menu" id="nav-menu" role="menubar">
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $ROOT; ?>index.php">Home</a>
          </li>
          
          <li class="nav-item" data-has-dropdown>
            <a class="nav-link" href="<?php echo $ROOT; ?>pages/about.php">About Us <span class="chevron" aria-hidden="true">▾</span></a>
            <ul class="dropdown" role="menu">
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/vision-mission.php">Vision &amp; Mission</a></li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/history.php">History of College</a></li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/principal-desk.php">Principal Desk</a></li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/governing-board.php">Governing Board</a></li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/managing-committee.php">Managing Committee (LMC)</a></li>
              <li class="dropdown-item">
                <a class="dropdown-link" href="<?php echo $ROOT; ?>pages/faculty.php">Faculty <span class="chevron" aria-hidden="true">›</span></a>
                <ul class="sub-dropdown" role="menu">
                  <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>assets/pdfs/staff-approval.pdf" target="_blank" rel="noopener">Staff Approval <span class="pdf-badge">PDF</span> <span class="ext-badge">↗</span></a></li>
                </ul>
              </li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/infrastructure.php">Infrastructure</a></li>
            </ul>
          </li>
          
          <li class="nav-item" data-has-dropdown>
            <a class="nav-link" href="<?php echo $ROOT; ?>pages/general-information.php">General Information <span class="chevron" aria-hidden="true">▾</span></a>
            <ul class="dropdown" role="menu">
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>assets/pdfs/ncte-recognition.pdf" target="_blank" rel="noopener">NCTE Recognition <span class="pdf-badge">PDF</span> <span class="ext-badge">↗</span></a></li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/rules.php">Rules</a></li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/gmc.php">G.M.C</a></li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/activity.php">Activity</a></li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/achievement.php">Achievement</a></li>
              <li class="dropdown-item">
                <a class="dropdown-link toggle-only" href="javascript:void(0)">Academic <span class="chevron" aria-hidden="true">›</span></a>
                <ul class="sub-dropdown" role="menu">
                  <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>assets/pdfs/attendance-july.pdf" target="_blank" rel="noopener">Attendance July <span class="pdf-badge">PDF</span> <span class="ext-badge">↗</span></a></li>
                  <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>assets/pdfs/attendance-august.pdf" target="_blank" rel="noopener">Attendance August <span class="pdf-badge">PDF</span> <span class="ext-badge">↗</span></a></li>
                  <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>assets/pdfs/september-2019.pdf" target="_blank" rel="noopener">September 2019 <span class="pdf-badge">PDF</span> <span class="ext-badge">↗</span></a></li>
                  <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>assets/pdfs/october-2019.pdf" target="_blank" rel="noopener">October 2019 <span class="pdf-badge">PDF</span> <span class="ext-badge">↗</span></a></li>
                  <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>assets/pdfs/november.pdf" target="_blank" rel="noopener">November <span class="pdf-badge">PDF</span> <span class="ext-badge">↗</span></a></li>
                  <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>assets/pdfs/december-2019.pdf" target="_blank" rel="noopener">December 2019 <span class="pdf-badge">PDF</span> <span class="ext-badge">↗</span></a></li>
                </ul>
              </li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/gallery.php">Gallery</a></li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>pages/our-course.php">Our Course</a></li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#" target="_blank" rel="noopener">Library <span class="ext-badge">↗</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $ROOT; ?>pages/contact.php">Contact Us</a>
          </li>
          
          <li class="nav-item" data-has-dropdown>
            <a class="nav-link" href="#" target="_blank" rel="noopener">Admission <span class="ext-badge">↗</span> <span class="chevron" aria-hidden="true">▾</span></a>
            <ul class="dropdown" role="menu">
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>assets/pdfs/how-to-fill-deled-form.pdf" target="_blank" rel="noopener">How To Fill DElEd Form <span class="pdf-badge">PDF</span> <span class="ext-badge">↗</span></a></li>
              <li class="dropdown-item"><a class="dropdown-link" href="<?php echo $ROOT; ?>assets/pdfs/merit-list-2026-27.pdf" target="_blank" rel="noopener">Merit List 2026-27 <span class="pdf-badge">PDF</span> <span class="ext-badge">↗</span></a></li>
            </ul>
          </li>

        </ul>
        <button class="hamburger" id="hamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="nav-menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </nav>
  </header>
