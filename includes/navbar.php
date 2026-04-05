<!-- ===== NAVBAR ===== -->
<nav>
  <div class="nav-inner">
    <a href="index.php" class="logo">Digi<span>9</span></a>
    <ul class="nav-links">
      <li><a href="index.php#services" class="<?php echo isActive('index.php'); ?>">Services</a></li>
      <li><a href="index.php#solutions" class="<?php echo isActive('index.php'); ?>">Solutions</a></li>
      <li><a href="index.php#work" class="<?php echo isActive('index.php'); ?>">Work</a></li>
      <li><a href="index.php#process" class="<?php echo isActive('index.php'); ?>">Process</a></li>
      <li><a href="index.php#about" class="<?php echo isActive('index.php'); ?>">About</a></li>
      <li><a href="blog.php" class="<?php echo isActive('blog.php'); ?>">Insights</a></li>
      <li><a href="contact.php" class="nav-cta">Book a Consultation</a></li>
    </ul>
    <div class="hamburger" id="hamburger">
      <span></span><span></span><span></span>
    </div>
  </div>
</nav>

<!-- Mobile Menu (Controlled by JS) -->
<div class="mobile-menu" id="mobileMenu">
  <a href="index.php#services">Services</a>
  <a href="index.php#solutions">Solutions</a>
  <a href="index.php#work">Work</a>
  <a href="index.php#process">Process</a>
  <a href="index.php#about">About</a>
  <a href="blog.php">Insights</a>
  <a href="contact.php" class="mobile-cta">Book a Consultation</a>
</div>
