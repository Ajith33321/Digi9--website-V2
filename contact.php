<?php
$pageTitle = "Contact Us — Let's Build Together | Digi9";
$metaDescription = "Get in touch with Digi9 to discuss your AI software, web platform, or mobile app development project. Based in Bangalore, serving clients globally.";
require_once 'includes/header.php';
?>

<!-- SECTION 1: HERO -->
<section class="section section-odd" style="padding-top: 180px; padding-bottom: 80px;">
    <div class="hero-glow"></div>
    <div class="container">
        <div class="reveal text-center" style="max-width: 720px; margin: 0 auto;">
            <div class="eyebrow">✦ &nbsp;Let's Talk</div>
            <h1 class="h1-mega">Start Your Project With Us</h1>
            <p class="subtext" style="margin: 0 auto;">
                Tell us what you're building. We'll respond within 24 hours with a clear path forward.
            </p>
        </div>
    </div>
</section>

<!-- SECTION 2: CONTACT CARDS -->
<section class="section section-even" style="padding-top: 60px; padding-bottom: 60px;">
    <div class="container">
        <div class="grid-3 reveal">

            <div class="contact-info-card">
                <div class="contact-info-icon">✉️</div>
                <div class="contact-info-label">Email Us</div>
                <a href="mailto:hello@digi9.in" class="contact-info-value">hello@digi9.in</a>
                <p class="contact-info-note">We reply within 24 hours</p>
            </div>

            <div class="contact-info-card">
                <div class="contact-info-icon">📍</div>
                <div class="contact-info-label">Our Office</div>
                <div class="contact-info-value">Bangalore, India</div>
                <p class="contact-info-note">Building for global clients 🇮🇳</p>
            </div>

            <div class="contact-info-card">
                <div class="contact-info-icon">🕐</div>
                <div class="contact-info-label">Working Hours</div>
                <div class="contact-info-value">Mon – Sat</div>
                <p class="contact-info-note">9:00 AM – 7:00 PM IST</p>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 3: FORM + SIDEBAR -->
<section class="section section-odd">
    <div class="container">
        <div class="contact-layout">

            <!-- LEFT: FORM -->
            <div class="reveal contact-form-wrap">
                <div class="eyebrow" style="margin-bottom: 16px;">Send a Message</div>
                <h2 class="section-title" style="font-size: 32px; margin-bottom: 32px;">Tell Us About Your Project</h2>

                <form id="contactForm" class="contact-form" novalidate>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" name="name" class="form-input" placeholder="John Doe" required>
                            <span class="form-error-msg"></span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Company / Startup</label>
                            <input type="text" name="company" class="form-input" placeholder="Acme Corp">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" name="email" class="form-input" placeholder="john@company.com" required>
                            <span class="form-error-msg"></span>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" name="phone" class="form-input" placeholder="+91 98765 43210">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">What are you looking to build? *</label>
                        <select name="service" class="form-input form-select" required>
                            <option value="" disabled selected>Select a service</option>
                            <option value="ai">AI Software Development</option>
                            <option value="web">Web Application Development</option>
                            <option value="mobile">Mobile App Development</option>
                            <option value="custom">Custom Software</option>
                            <option value="automation">Automation & Integration</option>
                            <option value="other">Other / Not Sure Yet</option>
                        </select>
                        <span class="form-error-msg"></span>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Estimated Budget</label>
                        <select name="budget" class="form-input form-select">
                            <option value="" disabled selected>Select a range</option>
                            <option value="under5">Under ₹5 Lakhs</option>
                            <option value="5to15">₹5 – ₹15 Lakhs</option>
                            <option value="15to50">₹15 – ₹50 Lakhs</option>
                            <option value="50plus">₹50 Lakhs+</option>
                            <option value="unsure">Not sure yet</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Project Details *</label>
                        <textarea name="message" class="form-input form-textarea" rows="5" placeholder="Describe the problem you're solving, your current workflow, and any technical requirements..." required></textarea>
                        <span class="form-error-msg"></span>
                    </div>

                    <button type="submit" class="btn-primary contact-submit" id="submitBtn">
                        Send Message →
                    </button>

                </form>

                <!-- Success State -->
                <div id="formSuccess" style="display:none; text-align:center; padding: 60px 0;">
                    <div style="font-size: 56px; margin-bottom: 24px;">✅</div>
                    <h3 class="card-title" style="font-size: 24px; margin-bottom: 12px;">Message Sent!</h3>
                    <p class="body-text">We've received your message and will get back to you within 24 hours.</p>
                </div>
            </div>

            <!-- RIGHT: SIDEBAR -->
            <div class="reveal contact-sidebar">

                <div class="contact-sidebar-block">
                    <div class="eyebrow" style="margin-bottom: 16px;">What Happens Next</div>
                    <div class="next-step">
                        <div class="next-step-num">01</div>
                        <div>
                            <div class="next-step-title">We Review Your Request</div>
                            <p class="body-text">Our team reads your brief and prepares relevant questions within 24 hours.</p>
                        </div>
                    </div>
                    <div class="next-step">
                        <div class="next-step-num">02</div>
                        <div>
                            <div class="next-step-title">Discovery Call</div>
                            <p class="body-text">A 30-minute call to understand your workflow, goals, and technical needs.</p>
                        </div>
                    </div>
                    <div class="next-step">
                        <div class="next-step-num">03</div>
                        <div>
                            <div class="next-step-title">Proposal & Roadmap</div>
                            <p class="body-text">You receive a detailed scope, timeline, and investment breakdown.</p>
                        </div>
                    </div>
                    <div class="next-step" style="border-bottom: none;">
                        <div class="next-step-num">04</div>
                        <div>
                            <div class="next-step-title">We Start Building</div>
                            <p class="body-text">Kick off with your dedicated team. First milestone in 2 weeks.</p>
                        </div>
                    </div>
                </div>

                <div class="contact-sidebar-block" style="margin-top: 40px;">
                    <div class="eyebrow" style="margin-bottom: 16px;">Why Companies Choose Us</div>
                    <div class="trust-item">✓&nbsp; Custom-built, no white-label apps</div>
                    <div class="trust-item">✓&nbsp; 50+ projects delivered</div>
                    <div class="trust-item">✓&nbsp; 8+ years of engineering expertise</div>
                    <div class="trust-item">✓&nbsp; End-to-end: Design → Dev → Deploy</div>
                    <div class="trust-item">✓&nbsp; Transparent pricing, no surprises</div>
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
        <div class="faq-list reveal" style="max-width: 760px; margin: 0 auto;">

            <div class="faq-item">
                <button class="faq-question">
                    How long does a typical project take?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p class="body-text" style="padding: 16px 0;">Most projects range from 8–24 weeks depending on complexity. A simple web app might take 8–10 weeks; an AI-powered platform typically takes 16–24 weeks. We give you a realistic timeline upfront — no surprises.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you work with early-stage startups?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p class="body-text" style="padding: 16px 0;">Yes. We work with startups from MVP stage through scale. We've helped founders validate ideas quickly and build systems that grow with them. Budget-conscious options are available for early-stage teams.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What information do I need to have ready?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p class="body-text" style="padding: 16px 0;">Just a description of the problem you're solving and who your users are. You don't need a technical spec — we handle discovery together. The more context the better, but we can start from scratch.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you offer post-launch support?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p class="body-text" style="padding: 16px 0;">Yes. Every project includes a 30-day post-launch support window. We also offer monthly retainer plans for ongoing maintenance, feature additions, and performance monitoring.</p>
                </div>
            </div>

            <div class="faq-item" style="border-bottom: none;">
                <button class="faq-question">
                    Can you work with our existing tech stack?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p class="body-text" style="padding: 16px 0;">Absolutely. We integrate with existing systems, APIs, and databases. Whether you need to extend an existing platform or build something new alongside it, we adapt to what's already in place.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* ── Contact Info Cards ── */
.contact-info-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 32px 28px;
    transition: var(--transition);
}
.contact-info-card:hover {
    border-color: var(--border-glow);
    background: rgba(255,255,255,0.06);
}
.contact-info-icon { font-size: 28px; margin-bottom: 16px; }
.contact-info-label { font-size: 11px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: var(--accent-cyan); margin-bottom: 8px; }
.contact-info-value { display: block; font-size: 18px; font-weight: 600; color: var(--white); font-family: var(--font-display); text-decoration: none; margin-bottom: 6px; }
a.contact-info-value:hover { color: var(--accent-cyan); }
.contact-info-note { font-size: 13px; color: var(--text-muted); margin: 0; }

/* ── Contact Layout ── */
.contact-layout {
    display: grid;
    grid-template-columns: 1fr 380px;
    gap: 80px;
    align-items: flex-start;
}
@media (max-width: 1024px) {
    .contact-layout { grid-template-columns: 1fr; gap: 48px; }
}

/* ── Form Styles ── */
.contact-form-wrap { }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
@media (max-width: 640px) { .form-row { grid-template-columns: 1fr; } }
.form-group { margin-bottom: 24px; }
.form-label {
    display: block;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: var(--accent-cyan);
    margin-bottom: 8px;
}
.form-input {
    width: 100%;
    background: rgba(255,255,255,0.05);
    border: 1px solid var(--border);
    border-radius: 8px;
    padding: 12px 16px;
    color: var(--white);
    font-family: var(--font-main);
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s ease, background 0.3s ease;
    -webkit-appearance: none;
    appearance: none;
}
.form-input::placeholder { color: var(--text-muted); }
.form-input:focus {
    border-color: var(--accent-blue);
    background: rgba(37,99,235,0.05);
}
.form-input.error { border-color: #f87171; }
.form-select { cursor: pointer; }
.form-select option { background: #1A1E2A; color: var(--white); }
.form-textarea { resize: vertical; min-height: 120px; }
.form-error-msg { display: block; font-size: 12px; color: #f87171; margin-top: 6px; min-height: 16px; }
.contact-submit { width: 100%; padding: 14px; font-size: 15px; cursor: pointer; margin-top: 8px; }
.contact-submit:disabled { opacity: 0.6; cursor: not-allowed; }

/* ── Sidebar ── */
.contact-sidebar { }
.contact-sidebar-block {
    background: rgba(255,255,255,0.04);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 32px;
}
.next-step {
    display: grid;
    grid-template-columns: 40px 1fr;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid var(--border);
    align-items: flex-start;
}
.next-step-num {
    font-family: var(--font-display);
    font-size: 13px;
    font-weight: 700;
    color: var(--accent-blue);
    background: rgba(37,99,235,0.1);
    border: 1px solid rgba(37,99,235,0.2);
    border-radius: 6px;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 2px;
}
.next-step-title { font-size: 14px; font-weight: 600; color: var(--white); margin-bottom: 4px; }
.trust-item {
    font-size: 14px;
    color: var(--text-body);
    padding: 10px 0;
    border-bottom: 1px solid var(--border);
}
.trust-item:last-child { border-bottom: none; }

/* ── FAQ ── */
.faq-list { }
.faq-item { border-bottom: 1px solid var(--border); }
.faq-question {
    width: 100%;
    background: none;
    border: none;
    color: var(--white);
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 600;
    text-align: left;
    padding: 24px 0;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    transition: color 0.3s ease;
}
.faq-question:hover { color: var(--accent-cyan); }
.faq-icon {
    font-size: 22px;
    font-weight: 300;
    color: var(--accent-cyan);
    flex-shrink: 0;
    transition: transform 0.3s ease;
}
.faq-item.open .faq-icon { transform: rotate(45deg); }
.faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease; }
</style>

<script>
// Contact form handler
(function() {
    const form = document.getElementById('contactForm');
    const success = document.getElementById('formSuccess');
    const submitBtn = document.getElementById('submitBtn');
    if (!form) return;

    function validateEmail(v) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }

    function setError(input, msg) {
        input.classList.add('error');
        const errEl = input.parentElement.querySelector('.form-error-msg');
        if (errEl) errEl.textContent = msg;
    }

    function clearError(input) {
        input.classList.remove('error');
        const errEl = input.parentElement.querySelector('.form-error-msg');
        if (errEl) errEl.textContent = '';
    }

    // Live clear on input
    form.querySelectorAll('.form-input').forEach(input => {
        input.addEventListener('input', () => clearError(input));
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let valid = true;

        const name = form.querySelector('[name="name"]');
        const email = form.querySelector('[name="email"]');
        const service = form.querySelector('[name="service"]');
        const message = form.querySelector('[name="message"]');

        if (!name.value.trim() || name.value.trim().length < 2) {
            setError(name, 'Please enter your full name'); valid = false;
        }
        if (!validateEmail(email.value)) {
            setError(email, 'Please enter a valid email address'); valid = false;
        }
        if (!service.value) {
            setError(service, 'Please select a service'); valid = false;
        }
        if (!message.value.trim() || message.value.trim().length < 20) {
            setError(message, 'Please describe your project (at least 20 characters)'); valid = false;
        }

        if (!valid) return;

        // Simulate submission (replace with real endpoint)
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending…';

        setTimeout(() => {
            form.style.display = 'none';
            success.style.display = 'block';
        }, 1200);
    });

    // FAQ accordion
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.parentElement;
            const answer = item.querySelector('.faq-answer');
            const isOpen = item.classList.contains('open');

            document.querySelectorAll('.faq-item.open').forEach(openItem => {
                openItem.classList.remove('open');
                openItem.querySelector('.faq-answer').style.maxHeight = null;
            });

            if (!isOpen) {
                item.classList.add('open');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });
})();
</script>

<?php require_once 'includes/footer.php'; ?>
