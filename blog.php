<?php
$page_title = 'Blog & Insights — Tendou Creative Agency';
$meta_desc  = 'Strategy, design, and digital intelligence from Tendou\'s team of creative and technical experts.';
require_once 'includes/header.php';

$posts = [
  ['Brand Strategy','Why Enterprise Brands Are Abandoning Template Design in 2025','The shift toward bespoke digital identity is accelerating. Here\'s what\'s driving corporate brands to invest in custom creative.','March 18, 2025','linear-gradient(135deg,#0B0E28,#2A338F,#2BAADB)'],
  ['Animation','The Business Case for 3D Animation in Corporate Communications','Animated content generates 3x more engagement. We break down the full ROI case for animation investment at enterprise scale.','February 28, 2025','linear-gradient(135deg,#1A0E00,#F5A623,#2A338F)'],
  ['Web Development','Core Web Vitals in 2025: What Every Enterprise Site Must Know','Google\'s performance signals have evolved. Our technical team explains what matters now and how to optimize for maximum impact.','February 12, 2025','linear-gradient(135deg,#041420,#0F5F8A,#4FC3E8)'],
  ['SEO','Organic Growth vs. Paid Media: A 2025 Strategic Framework','The channel mix question every CMO wrestles with. Our data-backed framework for allocating digital spend effectively.','January 30, 2025','linear-gradient(135deg,#150820,#2A338F,#F5A623)'],
  ['UI/UX','How UX Friction Is Costing Enterprise SaaS Billions in Churn','The hidden cost of poor interface design in B2B software. Six case studies and what they reveal about retention rates.','January 14, 2025','linear-gradient(135deg,#030409,#2BAADB,#F5A623)'],
  ['Process','Inside Our Discovery Process: Why We Spend 20% Before We Design','Our most successful projects share one thing in common: deep discovery. Here\'s exactly how we do it and why it works.','December 18, 2024','linear-gradient(135deg,#040A14,#2A338F,#2BAADB)'],
];
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
    <?php foreach($posts as $i => $post):
      $d = $i % 3 === 0 ? '' : ' d'.($i % 3);
    ?>
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
    <?php endforeach; ?>
  </div>
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
