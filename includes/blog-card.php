<?php
/**
 * Blog Card Partial
 * Usage: set $post array then include this file.
 */
?>
<article class="blog-card reveal <?= $post['delay_class'] ?? '' ?>">
  <div class="blog-card-image">
    <div style="width:100%;height:100%;background:linear-gradient(135deg,var(--bg-tertiary),var(--bg-elevated));display:flex;align-items:center;justify-content:center;color:var(--text-subtle);font-size:0.8rem;">
      <?= $post['image_placeholder'] ?? 'Article Image' ?>
    </div>
  </div>
  <div class="blog-card-body">
    <div class="blog-card-meta">
      <span class="blog-card-category"><?= $post['category'] ?? 'AI' ?></span>
      <span>•</span>
      <span><?= $post['date'] ?? 'Jan 2026' ?></span>
      <span>•</span>
      <span><?= $post['read_time'] ?? '5 min read' ?></span>
    </div>
    <h3 class="blog-card-title">
      <a href="blog-detail.php?slug=<?= urlencode($post['slug'] ?? '') ?>"><?= $post['title'] ?? 'Article Title' ?></a>
    </h3>
    <p class="blog-card-excerpt"><?= $post['excerpt'] ?? 'Article excerpt goes here.' ?></p>
    <a href="blog-detail.php?slug=<?= urlencode($post['slug'] ?? '') ?>" class="card-link">
      Read article
      <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </div>
</article>
