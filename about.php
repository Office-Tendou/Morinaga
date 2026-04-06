<?php
$page_title = 'About Us — Tendou Creative Agency';
$meta_desc  = 'Learn about Tendou, a premium creative agency in Grand Prairie TX. Meet our team of designers, developers, animators and strategists.';
require_once 'includes/header.php';

$values = [
  ['01','Craft Without Compromise','We refuse to ship work that doesn\'t meet the standard we\'d put our name on — every pixel, every frame, every line of code.'],
  ['02','Strategy Before Aesthetics','Beautiful work that doesn\'t perform is decoration. Business objectives drive every creative decision we make.'],
  ['03','Radical Transparency','Our clients are partners. Open communication about process, timelines, and challenges — no surprises, no excuses.'],
];

$team = [
  ['A','Ahmad Al-Rashidi','Founder &amp; Creative Director','linear-gradient(135deg,#2A338F,#2BAADB)'],
  ['S','Sofia Mendez','Head of Brand &amp; Design','linear-gradient(135deg,#1A0E00,#F5A623)'],
  ['J','James Okafor','Lead Developer','linear-gradient(135deg,#041420,#2BAADB)'],
  ['L','Lena Park','Animation Director','linear-gradient(135deg,#0A0415,#4FC3E8,#F5A623)'],
];
?>

<div class="pg-hero">
  <div class="pg-glow"></div>
  <div class="eyebrow rv">Our Story</div>
  <h1 class="pg-h rv d1">About <em>Tendou</em></h1>
  <p class="pg-sub rv d2">A team united by a singular obsession with craft and strategic excellence.</p>
</div>

<!-- WHO WE ARE -->
<div class="sec">
<div class="inner">
  <div class="ab-split">
    <div>
      <div class="eyebrow rv">Who We Are</div>
      <h2 class="h2 rv d1">Precision.<br><span class="g">Artistry.</span><br>Ambition.</h2>
      <div class="ab-text">
        <p class="rv d2">Founded in Grand Prairie, Texas, Tendou was born from a belief that corporate brands deserve the same creative excellence reserved for luxury houses.</p>
        <p class="rv d2">Every engagement begins with curiosity, every decision is grounded in strategy, and every deliverable is held to an uncompromising standard of execution.</p>
      </div>
      <div class="pills rv d3">
        <?php foreach(['Strategy First','Craft Without Compromise','Enterprise Expertise','Radical Transparency','Long-term Partnerships'] as $pill): ?>
        <span class="pill"><?php echo $pill; ?></span>
        <?php endforeach; ?>
      </div>
      <div style="display:flex;gap:1rem;flex-wrap:wrap" class="rv d4">
        <a href="contact.php"   class="btn-p"><span>Work With Us &rarr;</span></a>
        <a href="portfolio.php" class="btn-s"><span>Our Work</span></a>
      </div>
    </div>
    <div class="ab-vis rv d1">
      <div class="geo-r gr1"></div>
      <div class="geo-r gr2"></div>
      <div class="geo-r gr3"></div>
      <div class="geo-core">T</div>
      <div class="orb-ring or1" style="position:absolute;top:50%;left:50%;width:115px;height:115px"><div class="gs1 geo-sat"></div></div>
      <div class="orb-ring or2" style="position:absolute;top:50%;left:50%;width:170px;height:170px;border-color:rgba(245,166,35,.18)"><div class="gs2 geo-sat"></div></div>
    </div>
  </div>
</div>
</div>

<!-- VALUES -->
<div class="sec-b">
<div class="inner">
  <div class="eyebrow rv">Our Values</div>
  <h2 class="h2 rv d1">What drives our <span class="g">work</span></h2>
  <div class="vals-grid">
    <?php foreach($values as $i => $v): ?>
    <div class="val-card rv<?php echo $i?' d'.$i:''; ?>">
      <div class="val-n"><?php echo $v[0]; ?></div>
      <div class="val-title"><?php echo $v[1]; ?></div>
      <div class="val-desc"><?php echo $v[2]; ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>

<!-- TEAM -->
<div class="sec">
<div class="inner">
  <div class="eyebrow rv">The Team</div>
  <h2 class="h2 rv d1">The minds behind the <span class="g">magic</span></h2>
  <div class="team-grid">
    <?php foreach($team as $i => $m): ?>
    <div class="team-card rv<?php echo $i?' d'.$i:''; ?>">
      <div class="tphoto" style="background:<?php echo $m[3]; ?>"><div class="tinit"><?php echo $m[0]; ?></div></div>
      <div class="tinfo"><div class="tnm"><?php echo $m[1]; ?></div><div class="trl"><?php echo $m[2]; ?></div></div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>

<div class="cta-band">
  <div class="cta-glow"></div>
  <div class="cta-lines"><div class="cta-line"></div><div class="cta-line"></div><div class="cta-line"></div></div>
  <div class="cta-inner">
    <h2 class="cta-h" style="font-size:clamp(1.8rem,4vw,4rem)">Want to work with our <span class="g">team?</span></h2>
    <p class="cta-sub">Let&rsquo;s create something extraordinary together.</p>
    <a href="contact.php" class="btn-p"><span>Get in Touch &rarr;</span></a>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>
