<!-- ══ Consultation Form ══ -->
<form id="consultation-form" method="POST" action="contact.php" class="reveal">
  <div class="form-row grid grid-2">
    <div class="form-group">
      <label class="form-label" for="cf-name">Full Name *</label>
      <input type="text" name="name" id="cf-name" class="form-input" placeholder="John Doe" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="cf-email">Work Email *</label>
      <input type="email" name="email" id="cf-email" class="form-input" placeholder="john@company.com" required>
    </div>
  </div>
  <div class="form-row grid grid-2">
    <div class="form-group">
      <label class="form-label" for="cf-phone">Phone *</label>
      <input type="tel" name="phone" id="cf-phone" class="form-input" placeholder="+91 XXX XXX XXXX" required>
    </div>
    <div class="form-group">
      <label class="form-label" for="cf-company">Company</label>
      <input type="text" name="company" id="cf-company" class="form-input" placeholder="Company name">
    </div>
  </div>
  <div class="form-group">
    <label class="form-label" for="cf-service">Service Interest</label>
    <select name="service" id="cf-service" class="form-select">
      <option value="">Select a service...</option>
      <option value="ai-mobile">AI Mobile App Development</option>
      <option value="ai-software">AI Software Development</option>
      <option value="ai-web">AI Web Development</option>
      <option value="qa">Quality Assurance</option>
      <option value="seo">SEO & Performance</option>
      <option value="cybersecurity">Cybersecurity</option>
      <option value="other">Other</option>
    </select>
  </div>
  <div class="form-group">
    <label class="form-label" for="cf-brief">Project Brief</label>
    <textarea name="brief" id="cf-brief" class="form-textarea" placeholder="Tell us about your project, goals, and timeline..."></textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-lg mt-2">
    Submit Inquiry
    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
  </button>
</form>
