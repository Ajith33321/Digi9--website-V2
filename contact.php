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

<!-- SECTION 2: INFO CARDS -->
<section class="section section-even" style="padding-top: 80px; padding-bottom: 80px;">
    <div class="container">
        <div class="grid-3 reveal">

            <div class="card" style="text-align: center; padding: 36px 28px;">
                <div class="card-icon" style="margin: 0 auto 20px auto;">✉️</div>
                <div class="eyebrow" style="margin-bottom: 10px;">Email Us</div>
                <a href="mailto:hello@digi9.in" style="font-size: 17px; font-weight: 600; color: var(--accent-cyan); text-decoration: none; font-family: var(--font-display);">hello@digi9.in</a>
                <p class="body-text" style="margin-top: 8px; font-size: 13px;">We reply within 24 hours</p>
            </div>

            <div class="card" style="text-align: center; padding: 36px 28px;">
                <div class="card-icon" style="margin: 0 auto 20px auto;">📍</div>
                <div class="eyebrow" style="margin-bottom: 10px;">Our Office</div>
                <div style="font-size: 17px; font-weight: 600; color: var(--white); font-family: var(--font-display);">Bangalore, India</div>
                <p class="body-text" style="margin-top: 8px; font-size: 13px;">Building for global clients 🇮🇳</p>
            </div>

            <div class="card" style="text-align: center; padding: 36px 28px;">
                <div class="card-icon" style="margin: 0 auto 20px auto;">🕐</div>
                <div class="eyebrow" style="margin-bottom: 10px;">Working Hours</div>
                <div style="font-size: 17px; font-weight: 600; color: var(--white); font-family: var(--font-display);">Mon – Sat</div>
                <p class="body-text" style="margin-top: 8px; font-size: 13px;">9:00 AM – 7:00 PM IST</p>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 3: FORM + WHAT HAPPENS NEXT -->
<section class="section section-odd">
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
                                style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none; transition: border-color 0.3s;"
                                onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                        </div>
                        <div>
                            <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">Company</label>
                            <input type="text" id="cf-company" placeholder="Acme Corp"
                                style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none; transition: border-color 0.3s;"
                                onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                        </div>
                    </div>

                    <div class="grid-2" style="gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">Email Address *</label>
                            <input type="email" id="cf-email" placeholder="john@company.com" required
                                style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none; transition: border-color 0.3s;"
                                onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                        </div>
                        <div>
                            <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">Phone Number</label>
                            <input type="tel" id="cf-phone" placeholder="+91 98765 43210"
                                style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none; transition: border-color 0.3s;"
                                onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                        </div>
                    </div>

                    <div class="grid-2" style="gap: 20px; margin-bottom: 20px;">
                        <div>
                            <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">What Are You Building? *</label>
                            <select id="cf-service" required
                                style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none; -webkit-appearance:none; cursor:pointer; transition: border-color 0.3s;"
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
                        <div>
                            <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">Estimated Budget</label>
                            <select id="cf-budget"
                                style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none; -webkit-appearance:none; cursor:pointer; transition: border-color 0.3s;"
                                onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                                <option value="" disabled selected style="background:#13161E;">Select a range</option>
                                <option value="under5" style="background:#13161E;">Under ₹5 Lakhs</option>
                                <option value="5to15" style="background:#13161E;">₹5 – ₹15 Lakhs</option>
                                <option value="15to50" style="background:#13161E;">₹15 – ₹50 Lakhs</option>
                                <option value="50plus" style="background:#13161E;">₹50 Lakhs+</option>
                                <option value="unsure" style="background:#13161E;">Not sure yet</option>
                            </select>
                        </div>
                    </div>

                    <div style="margin-bottom: 28px;">
                        <label style="display:block; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:1.5px; color:var(--accent-cyan); margin-bottom:8px;">Project Details *</label>
                        <textarea id="cf-message" rows="5" placeholder="Describe the problem you're solving and what you need built..." required
                            style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px 16px; color:var(--white); font-family:var(--font-main); font-size:14px; outline:none; resize:none; transition: border-color 0.3s;"
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

            <!-- WHAT HAPPENS NEXT -->
            <div class="reveal">
                <div class="eyebrow" style="margin-bottom: 16px;">What Happens Next</div>
                <h2 class="section-title" style="font-size: 32px; margin-bottom: 40px;">Your Journey With Us</h2>

                <div class="feature-row">
                    <div style="font-size: 22px;">📋</div>
                    <div>
                        <h3 class="card-title" style="margin-bottom: 4px;">We Review Your Request</h3>
                        <p class="body-text">Our team reads your brief and prepares relevant questions within 24 hours.</p>
                    </div>
                </div>
                <div class="feature-row">
                    <div style="font-size: 22px;">📞</div>
                    <div>
                        <h3 class="card-title" style="margin-bottom: 4px;">Discovery Call</h3>
                        <p class="body-text">A 30-minute call to understand your workflow, goals, and technical needs.</p>
                    </div>
                </div>
                <div class="feature-row">
                    <div style="font-size: 22px;">📄</div>
                    <div>
                        <h3 class="card-title" style="margin-bottom: 4px;">Proposal & Roadmap</h3>
                        <p class="body-text">You receive a detailed scope, timeline, and investment breakdown.</p>
                    </div>
                </div>
                <div class="feature-row" style="border-bottom: none;">
                    <div style="font-size: 22px;">🚀</div>
                    <div>
                        <h3 class="card-title" style="margin-bottom: 4px;">We Start Building</h3>
                        <p class="body-text">Kick off with your dedicated team. First milestone in 2 weeks.</p>
                    </div>
                </div>

                <div class="card" style="margin-top: 40px; padding: 28px;">
                    <div class="eyebrow" style="margin-bottom: 16px;">Why Businesses Choose Us</div>
                    <div class="stats-strip" style="display:block; background:none; border:none; padding:0;">
                        <p class="body-text" style="padding: 10px 0; border-bottom: 1px solid var(--border); font-size:14px;">✓ &nbsp;No white-label apps — 100% custom built</p>
                        <p class="body-text" style="padding: 10px 0; border-bottom: 1px solid var(--border); font-size:14px;">✓ &nbsp;50+ projects delivered across 7 industries</p>
                        <p class="body-text" style="padding: 10px 0; border-bottom: 1px solid var(--border); font-size:14px;">✓ &nbsp;8+ years of engineering expertise</p>
                        <p class="body-text" style="padding: 10px 0; border-bottom: 1px solid var(--border); font-size:14px;">✓ &nbsp;End-to-end: Design → Dev → Deploy</p>
                        <p class="body-text" style="padding: 10px 0; font-size:14px;">✓ &nbsp;Transparent pricing, no surprises</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 4: FAQ -->
<section class="section section-even">
    <div class="container">
        <div class="reveal text-center" style="max-width: 600px; margin: 0 auto 64px auto;">
            <div class="eyebrow">Common Questions</div>
            <h2 class="section-title">Before You Reach Out</h2>
        </div>

        <div class="reveal" style="max-width: 760px; margin: 0 auto;">

            <div class="faq-item" style="border-bottom: 1px solid var(--border);">
                <button class="faq-question" onclick="toggleFaq(this)"
                    style="width:100%; background:none; border:none; color:var(--white); font-family:var(--font-display); font-size:17px; font-weight:600; text-align:left; padding:24px 0; cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:16px;">
                    How long does a typical project take?
                    <span style="font-size:22px; color:var(--accent-cyan); flex-shrink:0; transition: transform 0.3s;">+</span>
                </button>
                <div class="faq-answer" style="max-height:0; overflow:hidden; transition: max-height 0.4s ease;">
                    <p class="body-text" style="padding-bottom: 20px;">Most projects range from 8–24 weeks depending on complexity. A simple web app might take 8–10 weeks; an AI-powered platform typically takes 16–24 weeks. We give you a realistic timeline upfront — no surprises.</p>
                </div>
            </div>

            <div class="faq-item" style="border-bottom: 1px solid var(--border);">
                <button class="faq-question" onclick="toggleFaq(this)"
                    style="width:100%; background:none; border:none; color:var(--white); font-family:var(--font-display); font-size:17px; font-weight:600; text-align:left; padding:24px 0; cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:16px;">
                    Do you work with early-stage startups?
                    <span style="font-size:22px; color:var(--accent-cyan); flex-shrink:0; transition: transform 0.3s;">+</span>
                </button>
                <div class="faq-answer" style="max-height:0; overflow:hidden; transition: max-height 0.4s ease;">
                    <p class="body-text" style="padding-bottom: 20px;">Yes. We work with startups from MVP stage through scale. We've helped founders validate ideas quickly and build systems that grow with them. Budget-conscious options are available for early-stage teams.</p>
                </div>
            </div>

            <div class="faq-item" style="border-bottom: 1px solid var(--border);">
                <button class="faq-question" onclick="toggleFaq(this)"
                    style="width:100%; background:none; border:none; color:var(--white); font-family:var(--font-display); font-size:17px; font-weight:600; text-align:left; padding:24px 0; cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:16px;">
                    What information do I need to have ready?
                    <span style="font-size:22px; color:var(--accent-cyan); flex-shrink:0; transition: transform 0.3s;">+</span>
                </button>
                <div class="faq-answer" style="max-height:0; overflow:hidden; transition: max-height 0.4s ease;">
                    <p class="body-text" style="padding-bottom: 20px;">Just a description of the problem you're solving and who your users are. You don't need a technical spec — we handle discovery together. The more context the better, but we can start from scratch.</p>
                </div>
            </div>

            <div class="faq-item" style="border-bottom: 1px solid var(--border);">
                <button class="faq-question" onclick="toggleFaq(this)"
                    style="width:100%; background:none; border:none; color:var(--white); font-family:var(--font-display); font-size:17px; font-weight:600; text-align:left; padding:24px 0; cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:16px;">
                    Do you offer post-launch support?
                    <span style="font-size:22px; color:var(--accent-cyan); flex-shrink:0; transition: transform 0.3s;">+</span>
                </button>
                <div class="faq-answer" style="max-height:0; overflow:hidden; transition: max-height 0.4s ease;">
                    <p class="body-text" style="padding-bottom: 20px;">Yes. Every project includes a 30-day post-launch support window. We also offer monthly retainer plans for ongoing maintenance, feature additions, and performance monitoring.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"
                    style="width:100%; background:none; border:none; color:var(--white); font-family:var(--font-display); font-size:17px; font-weight:600; text-align:left; padding:24px 0; cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:16px;">
                    Can you work with our existing tech stack?
                    <span style="font-size:22px; color:var(--accent-cyan); flex-shrink:0; transition: transform 0.3s;">+</span>
                </button>
                <div class="faq-answer" style="max-height:0; overflow:hidden; transition: max-height 0.4s ease;">
                    <p class="body-text" style="padding-bottom: 20px;">Absolutely. We integrate with existing systems, APIs, and databases. Whether you need to extend an existing platform or build something new alongside it, we adapt to what's already in place.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 5: FINAL CTA -->
<section class="section" style="background: linear-gradient(135deg, #0D0F14 0%, #131E3D 50%, #0D0F14 100%); overflow: hidden;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 600px; height: 600px; background: radial-gradient(circle, rgba(37,99,235,0.15) 0%, transparent 70%); filter: blur(80px); z-index: 1;"></div>
    <div class="container text-center reveal" style="position: relative; z-index: 5;">
        <h2 class="h1-mega" style="font-size: 48px; margin-bottom: 24px;">Ready to Start Building?</h2>
        <p class="subtext" style="margin: 0 auto 40px auto; opacity: 0.8;">Fill out the form above or email us directly at hello@digi9.in</p>
        <div class="btn-group" style="justify-content:center;">
            <a href="mailto:hello@digi9.in" class="btn-primary">Email Us Directly</a>
            <a href="services.php" class="btn-outline">Explore Services</a>
        </div>
    </div>
</section>

<script>
function toggleFaq(btn) {
    var answer = btn.nextElementSibling;
    var icon = btn.querySelector('span');
    var isOpen = answer.style.maxHeight && answer.style.maxHeight !== '0px';

    // Close all
    document.querySelectorAll('.faq-answer').forEach(function(a) { a.style.maxHeight = '0px'; });
    document.querySelectorAll('.faq-question span').forEach(function(i) { i.style.transform = 'rotate(0deg)'; });

    if (!isOpen) {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        icon.style.transform = 'rotate(45deg)';
    }
}

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
