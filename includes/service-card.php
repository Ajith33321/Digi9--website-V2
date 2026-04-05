<?php
/**
 * Service Card Partial
 * Usage: set $service array with keys: icon, title, description, link, tag
 * Then include this file.
 */
?>
<div class="card card-glow reveal <?= $service['delay_class'] ?? '' ?>">
  <div class="card-icon">
    <?= $service['icon'] ?? '<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/></svg>' ?>
  </div>
  <h3 class="card-title"><?= $service['title'] ?? 'Service Title' ?></h3>
  <p class="card-text"><?= $service['description'] ?? 'Service description goes here.' ?></p>
  <?php if (!empty($service['link'])): ?>
  <a href="<?= $service['link'] ?>" class="card-link">
    Learn more
    <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
  </a>
  <?php endif; ?>
</div>
