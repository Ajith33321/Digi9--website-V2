<?php $page_title = "Contact — Tell Us What You Want to Build"; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- ##### PAGE HEADER ##### -->
<div class="page-header" style="background: linear-gradient(160deg, #F8FAFE 0%, #EEF4FF 100%); padding: 120px 0 64px; border-bottom: 1px solid var(--gray-200);">
  <div class="container">
    <div class="section-label">Get in Touch</div>
    <h1 class="page-title">Tell Us What You Want to Build</h1>
    <p class="lead-text" style="margin-top:16px;">We'll review your message and get back to you within one business day to set up an initial conversation.</p>
  </div>
</div>

<!-- ##### CONTACT SECTION ##### -->
<section class="section">
  <div class="container">
    <div style="display:grid; grid-template-columns:1fr 1.2fr; gap:80px; align-items:start;">
      
      <!-- Info Col -->
      <div>
        <div class="section-label">Contact Information</div>
        <h2 class="section-title" style="margin-bottom:24px;">Let's Start a Conversation</h2>
        <p class="body-text" style="margin-bottom:36px;">Whether you have a fully formed brief or just a rough idea — we're happy to talk through it and help you figure out the right approach.</p>
        
        <div style="display:flex; flex-direction:column; gap:20px;">
          <div style="display:flex; gap:16px; align-items:flex-start;">
            <div style="width:40px; height:40px; background:var(--gray-100); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:18px; flex-shrink:0;">📍</div>
            <div>
              <div style="font-size:13px; font-weight:600; color:var(--navy); margin-bottom:4px;">Location</div>
              <div class="body-text">Bangalore, Karnataka, India</div>
            </div>
          </div>
          <div style="display:flex; gap:16px; align-items:flex-start;">
            <div style="width:40px; height:40px; background:var(--gray-100); border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:18px; flex-shrink:0;">✉️</div>
            <div>
              <div style="font-size:13px; font-weight:600; color:var(--navy); margin-bottom:4px;">Email</div>
              <div class="body-text">hello@digi9.in</div>
            </div>
          </div>
        </div>
        
        <div style="margin-top:40px; padding:24px; background:var(--gray-100); border-radius:14px;">
          <div style="font-size:13px; font-weight:600; color:var(--navy); margin-bottom:8px;">What to Expect</div>
          <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
            <li style="display:flex; gap:12px; font-size:15px; color:var(--gray-600); align-items:flex-start;"><span style="color:var(--accent); font-weight:800;">✓</span> A response within 1 business day</li>
            <li style="display:flex; gap:12px; font-size:15px; color:var(--gray-600); align-items:flex-start;"><span style="color:var(--accent); font-weight:800;">✓</span> A 30-minute discovery call</li>
            <li style="display:flex; gap:12px; font-size:15px; color:var(--gray-600); align-items:flex-start;"><span style="color:var(--accent); font-weight:800;">✓</span> A clear proposal within 5 working days</li>
          </ul>
        </div>
      </div>

      <!-- Form Col -->
      <div style="background:var(--white); border:1px solid var(--gray-200); border-radius:20px; padding:40px; box-shadow: var(--shadow-soft);">
        <h3 style="font-family:var(--font-display); font-size:20px; font-weight:700; color:var(--navy); margin-bottom:28px;">Send Us a Message</h3>
        <form class="contact-form">
          <div style="display:grid; grid-template-columns:1fr 1fr; gap:16px;">
            <div style="margin-bottom: 20px;">
              <label style="display:block; font-size:13px; font-weight:600; margin-bottom:8px;">Full Name *</label>
              <input type="text" placeholder="Your name" style="width:100%; padding:12px; border:1.5px solid var(--gray-200); border-radius:8px; outline:none;" required>
            </div>
            <div style="margin-bottom: 20px;">
              <label style="display:block; font-size:13px; font-weight:600; margin-bottom:8px;">Company</label>
              <input type="text" placeholder="Your company" style="width:100%; padding:12px; border:1.5px solid var(--gray-200); border-radius:8px; outline:none;">
            </div>
          </div>
          <div style="margin-bottom: 20px;">
            <label style="display:block; font-size:13px; font-weight:600; margin-bottom:8px;">Email Address *</label>
            <input type="email" placeholder="your@email.com" style="width:100%; padding:12px; border:1.5px solid var(--gray-200); border-radius:8px; outline:none;" required>
          </div>
          <div style="margin-bottom: 20px;">
            <label style="display:block; font-size:13px; font-weight:600; margin-bottom:8px;">Tell us about your project *</label>
            <textarea placeholder="Describe what you want to build..." style="width:100%; padding:12px; border:1.5px solid var(--gray-200); border-radius:8px; outline:none; min-height:120px; resize:vertical;" required></textarea>
          </div>
          <button type="submit" class="btn-primary" style="width:100%; justify-content:center; padding:15px;">Send Message →</button>
        </form>
        <p style="font-size:12px; color:var(--gray-400); text-align:center; margin-top:14px;">We typically respond within 1 business day.</p>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
