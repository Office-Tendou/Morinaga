<?php
$page_title = 'Blog & Insights — Tendou Creative Agency';
$meta_desc  = 'Strategy, design, and digital intelligence from Tendou\'s team of creative and technical experts.';
require_once 'includes/header.php';



// Dynamic blog posts from blogs/ directory
$blog_files = glob("blogs/*.php");
$posts = [];
foreach ($blog_files as $file) {
  $content = file_get_contents($file);
  $slug = basename($file, ".php");
  if (preg_match("/'title'\\s*=>\\s*'([^']+)/", $content, $m)) {
    $title = $m[1];
  } else continue;
  if (preg_match("/'cat'\\s*=>\\s*'([^']+)/", $content, $m)) {
    $cat = $m[1];
  } else $cat = 'Strategy';
  if (preg_match("/'date'\\s*=>\\s*'([^']+)/", $content, $m)) {
    $date = $m[1];
  } else $date = '2024-12-01';
  if (preg_match("/'cover'\\s*=>\\s*'([^']+)/", $content, $m)) {
    $gradient = $m[1];
  } else $gradient = 'linear-gradient(135deg,#0B0E28,#2A338F,#2BAADB)';
  // Extract excerpt from first p tag, max 120 chars
  if (preg_match("/<p[^>]*>([^<]{50,150})<\\/p>/", $content, $m)) {
    $excerpt = trim(strip_tags($m[1]));
    $excerpt = strlen($excerpt) > 120 ? substr($excerpt, 0, 120) . '...' : $excerpt;
  } else {
    $excerpt = substr($title, 0, 120) . '...';
  }
  $posts[] = [$cat, $title, $excerpt, $date, $gradient, $slug];
}
usort($posts, function($a, $b) { return strtotime($b[3]) - strtotime($a[3]); }); // Sort desc by date

// Pagination
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$per_page = 6;
$total_posts = count($posts);
$total_pages = ceil($total_posts / $per_page);
$offset = ($page - 1) * $per_page;
$display_posts = array_slice($posts, $offset, $per_page);
?>
<link rel="stylesheet" href="assets/css/blog.css">

<div class="pg-hero">
  <div class="pg-glow"></div>
  <div class="eyebrow rv">Insights</div>
  <h1 class="pg-h rv d1">The Tendou <em>Journal</em></h1>
  <p class="pg-sub rv d2">Strategy, design, and digital intelligence from our creative experts.</p>
</div>

<div class="sec">
<div class="inner">
  <div class="blog-grid">
    <?php foreach($display_posts as $i => $post):
      $d = $i % 3 === 0 ? '' : ' d'.($i % 3);
    ?>
    <a href="blogs/<?php echo htmlspecialchars($post[5]); ?>.php" class="blog-card-link">
      <article class="blog-card rv<?php echo $d; ?>">
        <div class="blog-img"><div class="blog-bg" style="background:<?php echo $post[4]; ?>"></div></div>
        <div class="blog-body">
          <div class="blog-cat"><?php echo htmlspecialchars($post[0]); ?></div>
          <h2 class="blog-title"><?php echo htmlspecialchars($post[1]); ?></h2>
          <p class="blog-ex"><?php echo htmlspecialchars($post[2]); ?></p>
          <div class="blog-meta">
            <span><?php echo htmlspecialchars($post[3]); ?></span>
            <span class="blog-read">Read &rarr;</span>
          </div>
        </div>
      </article>
    </a>
    <?php endforeach; ?>
  </div>

  <!-- Pagination -->
  <?php if ($total_pages > 1): ?>
  <div class="pagination rv">
    <?php if ($page > 1): ?>
      <a href="?page=<?= $page - 1; ?>" class="pag-link">← Prev</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
      <a href="?page=<?= $i; ?>" class="pag-link <?= $i == $page ? 'active' : ''; ?>"><?= $i; ?></a>
    <?php endfor; ?>
    <?php if ($page < $total_pages): ?>
      <a href="?page=<?= $page + 1; ?>" class="pag-link">Next →</a>
    <?php endif; ?>
  </div>
  <?php endif; ?>
</div>
</div>

<div class="cta-band">
  <div class="cta-glow"></div>
  <div class="cta-lines"><div class="cta-line"></div><div class="cta-line"></div><div class="cta-line"></div></div>
  <div class="cta-inner">
    <h2 class="cta-h" style="font-size:clamp(1.8rem,4vw,4rem)">Ready to work with <span class="g">Tendou?</span></h2>
    <p class="cta-sub">Let&rsquo;s build something extraordinary for your brand.</p>
    <a href="contact.php" class="btn-p"><span>Start a Project &rarr;</span></a>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>

