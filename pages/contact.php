<?php
$ROOT = '../';
$PAGE_TITLE = "Contact Us — D.El.Ed College";
$PAGE_DESC = "Contact D.El.Ed College — address, phone, email, and contact form. Reach out to M.C.E. Society's Junior College of Education.";
include $ROOT . 'includes/header.php';
?>
  <main>
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-content">
          <h1>Contact Us</h1>
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../index.php">Home</a>
            <span class="breadcrumb-sep">›</span>
            <span>Contact Us</span>
          </nav>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-header">
          <h2>Get in Touch</h2>
          <div class="section-divider"></div>
          <p>We'd love to hear from you. Whether it's an admission enquiry, general question, or feedback — reach out and we'll respond promptly.</p>
        </div>

        <div class="contact-grid">

          <!-- Contact Info -->
          <div class="contact-info-card">
            <h3>📍 Our Details</h3>

            <div class="contact-detail">
              <div class="contact-icon">📍</div>
              <div class="contact-detail-text">
                <strong>Address</strong>
                <span>2390-B – K. B. Hidayatullah Road, New Modikhana,<br>Azam Campus, Camp,<br>Pune – 411001, Maharashtra, India</span>
              </div>
            </div>

            <div class="contact-detail">
              <div class="contact-icon">📞</div>
              <div class="contact-detail-text">
                <strong>Phone</strong>
                <span>02026456010<br>8698302064</span>
              </div>
            </div>

            <div class="contact-detail">
              <div class="contact-icon">✉</div>
              <div class="contact-detail-text">
                <strong>Email</strong>
                <span>juniorcollegeofeducation@gmail.com</span>
              </div>
            </div>

            <div class="contact-detail">
              <div class="contact-icon">🕐</div>
              <div class="contact-detail-text">
                <strong>Office Hours</strong>
                <span>Monday – Saturday<br>9:00 AM – 5:00 PM<br>(Closed on Public Holidays)</span>
              </div>
            </div>

            <div class="contact-detail">
              <div class="contact-icon">🎓</div>
              <div class="contact-detail-text">
                <strong>Admission Enquiries</strong>
                <span>For admission-related queries, visit the <a href="../index.php#hero-admission-btn" style="color:var(--color-accent-light);">Admission Portal</a> or call us during office hours.</span>
              </div>
            </div>

            <!-- Social / Quick Links -->
            <div style="margin-top:2rem;padding-top:1.5rem;border-top:1px solid rgba(255,255,255,0.15);">
              <p style="color:var(--color-accent-light);font-size:0.8rem;font-weight:700;text-transform:uppercase;letter-spacing:0.06em;margin-bottom:0.75rem;">Quick Links</p>
              <div style="display:flex;flex-direction:column;gap:0.5rem;">
                <a href="our-course.php" style="color:rgba(255,255,255,0.7);font-size:0.85rem;transition:color 0.28s;">→ D.El.Ed Course Details</a>
                <a href="#" target="_blank" rel="noopener" style="color:rgba(255,255,255,0.7);font-size:0.85rem;transition:color 0.28s;">→ Online Admission Portal</a>
                <a href="../assets/pdfs/how-to-fill-deled-form.pdf" target="_blank" rel="noopener" style="color:rgba(255,255,255,0.7);font-size:0.85rem;transition:color 0.28s;">→ How to Fill D.El.Ed Form (PDF)</a>
                <a href="../assets/pdfs/ncte-recognition.pdf" target="_blank" rel="noopener" style="color:rgba(255,255,255,0.7);font-size:0.85rem;transition:color 0.28s;">→ NCTE Recognition (PDF)</a>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="contact-form">
            <h3>Send Us a Message</h3>
            <form id="contact-form" novalidate>
              <div class="form-row">
                <div class="form-group">
                  <label for="contact-name">Full Name <span style="color:#e74c3c;">*</span></label>
                  <input type="text" id="contact-name" name="name" placeholder="Your full name" required autocomplete="name">
                </div>
                <div class="form-group">
                  <label for="contact-email">Email Address <span style="color:#e74c3c;">*</span></label>
                  <input type="email" id="contact-email" name="email" placeholder="you@example.com" required autocomplete="email">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="contact-phone">Phone Number</label>
                  <input type="tel" id="contact-phone" name="phone" placeholder="+91 XXXXX XXXXX" autocomplete="tel">
                </div>
                <div class="form-group">
                  <label for="contact-subject">Subject <span style="color:#e74c3c;">*</span></label>
                  <select id="contact-subject" name="subject" required>
                    <option value="" disabled selected>Select a subject</option>
                    <option value="admission">Admission Enquiry</option>
                    <option value="course">Course Information</option>
                    <option value="fees">Fee Structure</option>
                    <option value="faculty">Faculty Information</option>
                    <option value="general">General Enquiry</option>
                    <option value="feedback">Feedback / Suggestion</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="contact-message">Message <span style="color:#e74c3c;">*</span></label>
                <textarea id="contact-message" name="message" placeholder="Write your message here..." required rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-primary-dark form-submit" id="contact-submit-btn">
                📨 Send Message
              </button>
              <div class="form-success" id="contact-success" role="alert">
                ✅ Thank you! Your message has been sent. We'll get back to you within 2 working days.
              </div>
            </form>
          </div>

        </div>

        <!-- Google Map Placeholder -->
        <div class="map-wrap" aria-label="College location map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.9456!2d73.8567!3d18.5204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDMxJzEzLjQiTiA3M8KwNTEnMjQuMSJF!5e0!3m2!1sen!2sin!4v1234567890"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="D.El.Ed College Location on Google Maps">
          </iframe>
        </div>

      </div>
    </section>
  </main>
<?php include $ROOT . 'includes/footer.php'; ?>
  <script>
    /* Front-end form validation & success feedback */
    document.getElementById('contact-form').addEventListener('submit', function (e) {
      e.preventDefault();
      const name    = document.getElementById('contact-name').value.trim();
      const email   = document.getElementById('contact-email').value.trim();
      const subject = document.getElementById('contact-subject').value;
      const message = document.getElementById('contact-message').value.trim();

      if (!name || !email || !subject || !message) {
        alert('Please fill in all required fields.');
        return;
      }
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert('Please enter a valid email address.');
        return;
      }

      /* In production: send data to backend / email service here */
      document.getElementById('contact-success').classList.add('visible');
      this.reset();
      document.getElementById('contact-submit-btn').disabled = true;
      setTimeout(() => {
        document.getElementById('contact-success').classList.remove('visible');
        document.getElementById('contact-submit-btn').disabled = false;
      }, 8000);
    });
  </script>
