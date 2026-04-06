<?php
$page_title = 'Our Services — Tendou Creative Agency';
$meta_desc  = 'Tendou offers web design, branding, 2D & 3D animation, app development, SEO, UI/UX and post production services for corporate and enterprise clients.';
require_once 'includes/header.php';

$services = [
  ['🌐','Web Design &amp; Development','Bespoke websites and applications balancing aesthetic excellence with technical performance, architected to scale.',
   ['Custom responsive design','CMS integration (WordPress, Webflow)','Performance &amp; Core Web Vitals optimization','E-commerce solutions']],
  ['🎨','Brand Identity &amp; Graphic Design','Comprehensive brand systems communicating authority and distinctiveness across every touchpoint.',
   ['Logo design &amp; visual identity','Brand guidelines &amp; style systems','Print &amp; digital collateral','Packaging &amp; environmental design']],
  ['🎬','2D &amp; 3D Animation','Cinematic animation production for product launches, explainers, title sequences, and immersive brand films.',
   ['2D character &amp; motion graphics','3D product &amp; architectural visualization','Motion design &amp; kinetic typography','VFX &amp; compositing']],
  ['🎞','Video Editing &amp; Post Production','From raw footage to broadcast-quality finishes with a full professional post-production workflow.',
   ['Corporate video production','Color grading &amp; DI','Audio design &amp; mixing','Social content formatting']],
  ['📱','Application Development','Scalable web and mobile applications built with modern frameworks for enterprise-grade demands.',
   ['React / Next.js web applications','iOS &amp; Android mobile apps','API design &amp; integration','Cloud infrastructure &amp; DevOps']],
  ['🔍','SEO &amp; Social Media Management','Organic growth strategies grounded in technical SEO, content authority, and social engagement.',
   ['Technical SEO audits &amp; implementation','Content strategy &amp; production','Social media management','Analytics &amp; monthly reporting']],
  ['✦','UI/UX &amp; Digital Marketing','User experience design that converts, paired with data-driven optimization across all digital channels.',
   ['UX research &amp; journey mapping','Wireframing &amp; prototyping','Paid media (Google, Meta, LinkedIn)','Conversion rate optimization']],
];
?>

<div class="pg-hero">
  <div class="pg-glow"></div>
  <div class="eyebrow rv">What We Do</div>
  <h1 class="pg-h rv d1">Our <em>Services</em></h1>
  <p class="pg-sub rv d2">End-to-end creative and technical services engineered for corporate excellence.</p>
</div>

<div class="sec">
<div class="inner">
  <div class="srvp-grid">
    <?php foreach($services as $i => $s):
      $d = $i % 3 === 0 ? '' : ' d'.($i % 3);
    ?>
    <div class="srvp-card rv<?php echo $d; ?>">
      <div class="srvp-glow"></div>
      <span class="srvp-icon"><?php echo $s[0]; ?></span>
      <div class="srvp-name"><?php echo $s[1]; ?></div>
      <p class="srvp-desc"><?php echo $s[2]; ?></p>
      <ul class="srvp-list">
        <?php foreach($s[3] as $feat): ?><li><?php echo $feat; ?></li><?php endforeach; ?>
      </ul>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>

<div class="cta-band">
  <div class="cta-glow"></div>
  <div class="cta-lines"><div class="cta-line"></div><div class="cta-line"></div><div class="cta-line"></div></div>
  <div class="cta-inner">
    <h2 class="cta-h" style="font-size:clamp(1.8rem,4vw,4rem)">Ready to get <span class="g">started?</span></h2>
    <p class="cta-sub">We&rsquo;ll send a tailored proposal within 48 hours.</p>
    <a href="contact.php" class="btn-p"><span>Request a Proposal &rarr;</span></a>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>
