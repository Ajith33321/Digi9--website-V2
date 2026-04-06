<?php 
$pageTitle = "Book a Consultation — Start Your Project | Digi9";
$metaDescription = "Book a consultation with Digi9 to discuss your AI software, web platform, or mobile app development needs. Let's build what your business actually works.";
include 'includes/header.php'; 
?>

<!-- SECTION 1: HERO -->
<section class="section section-odd" style="padding-top: 180px;">
    <div class="hero-glow"></div>
    <div class="container">
        <div class="reveal">
            <div class="eyebrow">Engagement</div>
            <h1 class="h1-mega">Book a Consultation</h1>
            <p class="subtext">Let's map out your project together and build what your business actually needs.</p>
        </div>
    </div>
</section>

<!-- SECTION 2: CONTACT FORM -->
<section class="section section-even">
    <div class="container">
        <div class="grid-2" style="align-items: flex-start;">
            
            <div class="reveal">
                <div class="card" style="padding: 40px;">
                    <form onsubmit="handleFormSubmit(event)" id="contactForm">
                        <div style="margin-bottom: 24px;">
                            <label style="display:block; font-size:12px; font-weight:600; text-transform:uppercase; color:var(--accent-cyan); margin-bottom:8px;">Full Name</label>
                            <input type="text" placeholder="John Doe" required style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px; color:var(--white); outline:none; transition:var(--transition);" onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                        </div>
                        <div style="margin-bottom: 24px;">
                            <label style="display:block; font-size:12px; font-weight:600; text-transform:uppercase; color:var(--accent-cyan); margin-bottom:8px;">Email Address</label>
                            <input type="email" placeholder="john@company.com" required style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px; color:var(--white); outline:none; transition:var(--transition);" onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'">
                        </div>
                        <div style="margin-bottom: 24px;">
                            <label style="display:block; font-size:12px; font-weight:600; text-transform:uppercase; color:var(--accent-cyan); margin-bottom:8px;">Project Details</label>
                            <textarea placeholder="Tell us about your operational challenges..." rows="5" required style="width:100%; background:rgba(255,255,255,0.05); border:1px solid var(--border); border-radius:8px; padding:12px; color:var(--white); outline:none; transition:var(--transition); resize:none;" onfocus="this.style.borderColor='var(--accent-blue)'" onblur="this.style.borderColor='var(--border)'"></textarea>
                        </div>
                        <button type="submit" class="btn-primary" style="width:100%; cursor:pointer;">Send Message →</button>
                    </form>
                    <div id="formSuccess" style="display:none; text-align:center; padding: 40px 0;">
                        <div style="font-size:48px; margin-bottom:24px;">✅</div>
                        <h3 class="card-title">Message Received</h3>
                        <p class="body-text">We'll get back to you within 24 hours.</p>
                    </div>
                </div>
            </div>

            <div class="reveal" style="padding-left: 40px;">
                <h2 class="section-title" style="font-size: 32px; margin-bottom: 24px;">Other Ways to Connect</h2>
                <div style="margin-bottom: 32px;">
                    <div class="eyebrow" style="margin-bottom: 8px;">Direct Email</div>
                    <a href="mailto:hello@digi9.in" style="font-size: 20px; color: var(--white); text-decoration:none; font-weight:600;">hello@digi9.in</a>
                </div>
                <div>
                    <div class="eyebrow" style="margin-bottom: 8px;">Office</div>
                    <p class="body-text" style="font-size: 18px; color: var(--white);">Bangalore, India 🇮🇳</p>
                    <p class="body-text" style="margin-top: 8px;">Building custom software for global clients.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
