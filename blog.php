<?php
$page_title = 'Blog & Insights — Tendou Creative Agency';
$meta_desc  = 'Strategy, design, and digital intelligence from Tendou\'s team of creative and technical experts.';
require_once 'includes/header.php';

$posts = [];
$blog_files = scandir('blogs/');
foreach ($blog_files as $file) {
  if (pathinfo($file, PATHINFO_EXTENSION) === 'php' && $file !== '.' && $file !== '..') {
    $slug = pathinfo($file, PATHINFO_FILENAME);
    $content = file_get_contents('blogs/' . $file);
    if (preg_match('/\/\*\\s*(\\{.*?\\})\\s*\*\//s', $content, $matches)) {
      $meta = json_decode($matches[1]);
      if ($meta) {
        $meta->slug = $slug;
        $posts[] = $meta;
      }
    }
  }
}
usort($posts, function($a, $b) { return strtotime($b->date) - strtotime($a->date); });

$page = intval($_GET['page'] ?? 1);
$per_page = 6;
$total_pages = ceil(count($posts) / $per_page);
$offset = ($page - 1) * $per_page;
$display_posts = array_slice($posts, $offset, $per_page);
?>

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
    <article class="blog-card rv<?php echo $d; ?>">
<div class="blog-img"><div class="blog-bg" style="background:<?php echo htmlspecialchars($post->gradient); ?>"></div></div>
      <div class="blog-body">
        <div class="blog-cat"><?php echo htmlspecialchars($post->cat); ?></div>
        <h2 class="blog-title"><?php echo htmlspecialchars($post->title); ?></h2>
        <p class="blog-ex"><?php echo htmlspecialchars($post->excerpt); ?></p>
        <div class="blog-meta">
          <span><?php echo htmlspecialchars($post->date); ?></span>
          <a href="blogs/<?php echo htmlspecialchars($post->slug); ?>.php" class="blog-read">Read &rarr;</a>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  
  <?php if ($total_pages > 1): ?>
  <div class="pagination" style="text-align:center;padding:3rem 0;font-family:'Syne',serif;font-weight:600;font-size:1.1rem;">
    <?php for ($p=1; $p<=$total_pages; $p++): ?>
      <?php if ($p == $page): ?>
        <span style="color:#2BAADB;padding:0.5rem 1rem;background:rgba(43,170,219,0.1);border-radius:4px;">[<?php echo $p; ?>]</span>
      <?php else: ?>
        <a href="?page=<?php echo $p; ?>" style="color:#aaa;padding:0.5rem 1rem;text-decoration:none;">[<?php echo $p; ?>]</a>
      <?php endif; ?>
    <?php endfor; ?>
    <?php if ($page < $total_pages): ?>
      <a href="?page=<?php echo $page+1; ?>" style="color:#2BAADB;padding:0.5rem 1.5rem;">Next</a>
    <?php endif; ?>
    <?php if ($page > 1): ?>
      <a href="?page=<?php echo $page-1; ?>" style="color:#2BAADB;padding:0.5rem 1.5rem;">Back</a>
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

