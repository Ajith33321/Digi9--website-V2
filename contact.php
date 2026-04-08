<?php
$pageTitle = "Contact Us — Start Your Project | Digi9";
$metaDescription = "Get in touch with Digi9. We build AI software, web platforms, and mobile apps for businesses in Bangalore and globally.";
require_once 'includes/header.php';
?>

<!-- SECTION 1: HERO -->
<section class="section section-odd" style="padding-top: 180px;">
    <div class="hero-glow"></div>
    <div class="container">
        <div class="reveal">
            <div class="eyebrow">✦ &nbsp;Get In Touch</div>
            <h1 class="h1-mega">Let's Build Something Together</h1>
            <p class="subtext">Tell us about your project. We'll respond within 24 hours with a clear path forward.</p>
        </div>
    </div>
</section>

<!-- SECTION 2: FORM + INFO -->
<section class="section section-even">
    <div class="container">
        <div class="grid-2" style="align-items: flex-start; gap: 80px;">

            <!-- FORM -->
            <div class="reveal">
                <div class="eyebrow" style="margin-bottom: 16px;">Send a Message</div>
                <h2 class="section-title" style="font-size: 32px; margin-bottom: 40px;">Tell Us About Your Project</h2>

                <form id="contactForm" onsubmit="return handleContact(event)">

                    <div class="grid-2" style="gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">Full Name *</label>
                            <input type="text" id="cf-name" placeholder="John Doe" required
                                style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none;"
                                onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                        </div>
                        <div>
                            <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">Company</label>
                            <input type="text" id="cf-company" placeholder="Acme Corp"
                                style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none;"
                                onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                        </div>
                    </div>

                    <div class="grid-2" style="gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">Email Address *</label>
                            <input type="email" id="cf-email" placeholder="john@company.com" required
                                style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none;"
                                onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                        </div>
                        <div>
                            <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">Phone Number</label>
                            <input type="tel" id="cf-phone" placeholder="+91 98765 43210"
                                style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none;"
                                onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                        </div>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">What Are You Building? *</label>
                        <select id="cf-service" required
                            style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none; -webkit-appearance:none; cursor:pointer;"
                            onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                            <option value="" disabled selected style="background:#13161E;">Select a service</option>
                            <option value="ai" style="background:#13161E;">AI Software Development</option>
                            <option value="web" style="background:#13161E;">Web Application Development</option>
                            <option value="mobile" style="background:#13161E;">Mobile App Development</option>
                            <option value="custom" style="background:#13161E;">Custom Software</option>
                            <option value="automation" style="background:#13161E;">Automation & Integration</option>
                            <option value="other" style="background:#13161E;">Other / Not Sure Yet</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 28px;">
                        <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">Project Details *</label>
                        <textarea id="cf-message" rows="5" placeholder="Describe the problem you're solving and what you need built..." required
                            style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none; resize:none;"
                            onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'"></textarea>
                    </div>

                    <button type="submit" class="btn-primary" id="cf-submit" style="width:100%; padding:14px; font-size:15px; cursor:pointer;">Send Message →</button>
                    <p id="cf-error" style="display:none; color:#f87171; font-size:13px; margin-top:12px; text-align:center;"></p>
                </form>

                <div id="cf-success" style="display:none; text-align:center; padding:60px 0;">
                    <div style="font-size:52px; margin-bottom:20px;">✅</div>
                    <h3 class="card-title" style="font-size:22px; margin-bottom:10px;">Message Sent!</h3>
                    <p class="body-text">We've received your message and will get back to you within 24 hours.</p>
                </div>
            </div>

            <!-- CONTACT INFO -->
            <div class="reveal">

                <div class="card" style="margin-bottom: 24px; padding: 32px;">
                    <div class="eyebrow" style="margin-bottom: 20px;">Contact Details</div>
                    <div style="margin-bottom: 24px; padding-bottom: 24px; border-bottom: 1px solid var(--border);">
                        <div style="font-size:12px; color:var(--text-muted); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Email</div>
                        <a href="mailto:hello@digi9.in" class="card-title" style="color:var(--accent-cyan); text-decoration:none; font-size:17px;">hello@digi9.in</a>
                    </div>
                    <div style="margin-bottom: 24px; padding-bottom: 24px; border-bottom: 1px solid var(--border);">
                        <div style="font-size:12px; color:var(--text-muted); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Location</div>
                        <div class="card-title" style="font-size:16px;">Bangalore, India 🇮🇳</div>
                        <p class="body-text" style="margin-top:4px; font-size:13px;">Serving clients globally</p>
                    </div>
                    <div>
                        <div style="font-size:12px; color:var(--text-muted); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Working Hours</div>
                        <div class="card-title" style="font-size:16px;">Mon – Sat, 9AM – 7PM IST</div>
                        <p class="body-text" style="margin-top:4px; font-size:13px;">Response within 24 hours</p>
                    </div>
                </div>

                <div class="card" style="padding: 32px;">
                    <div class="eyebrow" style="margin-bottom: 20px;">What Happens Next</div>
                    <div class="feature-row" style="padding: 16px 0;">
                        <div style="font-size:18px;">📋</div>
                        <div>
                            <h3 class="card-title" style="margin-bottom:4px; font-size:15px;">We Review Your Request</h3>
                            <p class="body-text" style="font-size:13px;">Our team reads your brief and prepares relevant questions.</p>
                        </div>
                    </div>
                    <div class="feature-row" style="padding: 16px 0;">
                        <div style="font-size:18px;">📞</div>
                        <div>
                            <h3 class="card-title" style="margin-bottom:4px; font-size:15px;">Discovery Call</h3>
                            <p class="body-text" style="font-size:13px;">A 30-min call to understand your workflow and goals.</p>
                        </div>
                    </div>
                    <div class="feature-row" style="padding: 16px 0;">
                        <div style="font-size:18px;">📄</div>
                        <div>
                            <h3 class="card-title" style="margin-bottom:4px; font-size:15px;">Proposal & Roadmap</h3>
                            <p class="body-text" style="font-size:13px;">Detailed scope, timeline, and investment breakdown.</p>
                        </div>
                    </div>
                    <div class="feature-row" style="padding: 16px 0; border-bottom: none;">
                        <div style="font-size:18px;">🚀</div>
                        <div>
                            <h3 class="card-title" style="margin-bottom:4px; font-size:15px;">We Start Building</h3>
                            <p class="body-text" style="font-size:13px;">Kick off with your dedicated team. First milestone in 2 weeks.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHY DIGI9 -->
<section class="section section-odd">
    <div class="container">
        <div class="reveal" style="max-width:600px; margin-bottom: 64px;">
            <div class="eyebrow">Why Work With Us</div>
            <h2 class="section-title">Built for Serious Projects</h2>
        </div>
        <div class="grid-3 reveal">
            <div class="card">
                <div class="card-icon">🛠️</div>
                <h3 class="card-title">100% Custom Built</h3>
                <p class="body-text">No white-label apps. Everything engineered from scratch for your specific workflow.</p>
            </div>
            <div class="card">
                <div class="card-icon">🎯</div>
                <h3 class="card-title">Outcome Focused</h3>
                <p class="body-text">We measure success by operational impact — not just deliverables shipped.</p>
            </div>
            <div class="card">
                <div class="card-icon">🚀</div>
                <h3 class="card-title">End-to-End Team</h3>
                <p class="body-text">Design, engineering, and deployment handled by one dedicated team from day one.</p>
            </div>
        </div>
    </div>
</section>

<script>
function handleContact(e) {
    e.preventDefault();
    var name    = document.getElementById('cf-name').value.trim();
    var email   = document.getElementById('cf-email').value.trim();
    var service = document.getElementById('cf-service').value;
    var message = document.getElementById('cf-message').value.trim();
    var errEl   = document.getElementById('cf-error');

    errEl.style.display = 'none';

    if (!name || name.length < 2) { errEl.textContent = 'Please enter your full name.'; errEl.style.display = 'block'; return false; }
    if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { errEl.textContent = 'Please enter a valid email address.'; errEl.style.display = 'block'; return false; }
    if (!service) { errEl.textContent = 'Please select what you are looking to build.'; errEl.style.display = 'block'; return false; }
    if (!message || message.length < 20) { errEl.textContent = 'Please describe your project in at least 20 characters.'; errEl.style.display = 'block'; return false; }

    var btn = document.getElementById('cf-submit');
    btn.disabled = true;
    btn.textContent = 'Sending…';

    setTimeout(function() {
        document.getElementById('contactForm').style.display = 'none';
        document.getElementById('cf-success').style.display = 'block';
    }, 1200);

    return false;
}
</script>

<?php require_once 'includes/footer.php'; ?>
