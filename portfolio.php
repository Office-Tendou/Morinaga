<?php
$page_title = 'Portfolio — Tendou Creative Agency';
$meta_desc  = 'Browse Tendou\'s portfolio of web design, animation, branding, app development and video production projects for enterprise clients.';
require_once 'includes/header.php';

$projects = [
  ['web',       'Web Design &amp; Dev',  'Nexatech Enterprise Platform', 'linear-gradient(135deg,#0B0E28,#2A338F,#2BAADB)'],
  ['branding',  'Brand Identity',        'Meridian Capital Rebrand',     'linear-gradient(135deg,#1A0E00,#F5A623,#C47D10)'],
  ['animation', '3D Animation',          'Quantum Product Reveal',       'linear-gradient(135deg,#030409,#2A338F,#2BAADB)'],
  ['app',       'App Development',       'Axiom Fleet Management',       'linear-gradient(135deg,#050A18,#1A2A5E,#4FC3E8)'],
  ['video',     'Video &amp; Post',      'Apex 2024 Corporate Film',     'linear-gradient(135deg,#150820,#F5A623,#2A338F)'],
  ['web',       'Web Design',            'Serenova Health Portal',       'linear-gradient(135deg,#041420,#0F5F8A,#2BAADB)'],
  ['branding',  'Brand Identity',        'Vantage Financial Identity',   'linear-gradient(135deg,#0A0B1E,#2A338F,#F5A623)'],
  ['animation', '2D Animation',          'Lumina Explainer Series',      'linear-gradient(135deg,#0A0415,#3D1A6E,#2BAADB)'],
  ['app',       'App Development',       'ClearPath SaaS Dashboard',     'linear-gradient(135deg,#040A14,#2BAADB,#F5A623)'],
];

$filters = ['all'=>'All Work','web'=>'Web Design','animation'=>'Animation','branding'=>'Branding','app'=>'App Dev','video'=>'Video'];
?>

<div class="pg-hero">
  <div class="pg-glow"></div>
  <div class="eyebrow rv">Our Work</div>
  <h1 class="pg-h rv d1">Selected <em>Portfolio</em></h1>
  <p class="pg-sub rv d2">Curated projects across design, development, animation, and brand.</p>
</div>

<div class="sec">
<div class="inner">

  <div class="pf-filters">
    <?php foreach($filters as $cat => $label): ?>
    <button class="btn-ghost <?php echo $cat==='all'?'on':''; ?>" onclick="pfF('<?php echo $cat; ?>',this)"><?php echo $label; ?></button>
    <?php endforeach; ?>
  </div>

  <div class="pf-grid" id="pfGrid">
    <?php foreach($projects as $p): ?>
    <div class="pf-item" data-cat="<?php echo $p[0]; ?>">
      <div class="pf-bg" style="background:<?php echo $p[3]; ?>"></div>
      <div class="pf-stub">
        <div class="pf-cat"><?php echo $p[1]; ?></div>
        <div class="pf-name"><?php echo $p[2]; ?></div>
      </div>
      <div class="pf-overlay">
        <div class="pf-ov-name"><?php echo $p[2]; ?></div>
        <div class="pf-ov-tag"><?php echo $p[1]; ?></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

</div>
</div>

<div class="cta-band">
  <div class="cta-glow"></div>
  <div class="cta-lines"><div class="cta-line"></div><div class="cta-line"></div><div class="cta-line"></div></div>
  <div class="cta-inner">
    <h2 class="cta-h" style="font-size:clamp(1.8rem,4vw,4rem)">Love what you see?<br><span class="g">Let&rsquo;s create yours.</span></h2>
    <p class="cta-sub">Tell us about your project and we&rsquo;ll get to work.</p>
    <a href="contact.php" class="btn-p"><span>Start a Project &rarr;</span></a>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>
