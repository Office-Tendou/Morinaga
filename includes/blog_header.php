<?php
// blog_header.php - Full head + blog hero
$current = 'blog';
require_once 'header.php';
?>
<link rel="stylesheet" href="../assets/css/blog.css">

<?php
$gradient = $post['cover'] ?? 'linear-gradient(135deg,#0B0E28,#2A338F,#2BAADB)';
?>

<div class="pg-hero">
  <div class="pg-glow"></div>
  <div class="eyebrow rv">Insights</div>
  <h1 class="pg-h rv d1"><?php echo htmlspecialchars($post['title']); ?></h1>
  <div class="blog-meta-full">
    <span><?php echo htmlspecialchars($post['date']); ?> · <?php echo htmlspecialchars($post['read']); ?></span>
    <span>By <?php echo htmlspecialchars($post['author']); ?></span>
  </div>
</div>

<div class="sec">
  <div class="inner">

