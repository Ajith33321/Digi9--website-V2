<?php
$article_title = $current_post['title'] ?? 'Article';
$article_desc = $current_post['excerpt'] ?? 'Read this article on DIGI9 blog.';
?>
<title><?= htmlspecialchars($article_title) ?> — DIGI9 Blog</title>
<meta name="description" content="<?= htmlspecialchars($article_desc) ?>">
<link rel="canonical" href="<?= SITE_URL ?>/blog/<?= urlencode($current_post['slug'] ?? '') ?>">
