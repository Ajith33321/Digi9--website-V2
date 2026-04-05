<?php
/**
 * Case Study Card Partial
 * Usage: set $case array then include this file.
 */
?>
<div class="case-card reveal <?= $case['delay_class'] ?? '' ?>">
  <div class="case-card-image">
    <div style="width:100%;height:100%;background:linear-gradient(135deg,var(--bg-tertiary),var(--bg-elevated));display:flex;align-items:center;justify-content:center;color:var(--text-subtle);font-size:0.8rem;">
      <?= $case['image_placeholder'] ?? 'Project Preview' ?>
    </div>
  </div>
  <div class="case-card-body">
    <span class="case-card-tag"><?= $case['tag'] ?? 'AI Solution' ?></span>
    <h3 class="case-card-title"><?= $case['title'] ?? 'Project Title' ?></h3>
    <p class="case-card-desc"><?= $case['description'] ?? 'Project description.' ?></p>
    <?php if (!empty($case['stats'])): ?>
    <div class="case-card-stats">
      <?php foreach ($case['stats'] as $stat): ?>
      <div class="case-stat">
        <div class="case-stat-value"><?= $stat['value'] ?></div>
        <div class="case-stat-label"><?= $stat['label'] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</div>
