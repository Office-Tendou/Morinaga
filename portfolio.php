<?php
$page_title = 'Portfolio — Tendou Creative Agency';
$meta_desc  = 'Browse Tendou\'s portfolio of web design, animation, branding, app development and video production projects for enterprise clients.';
require_once 'includes/header.php';

$projects = [
  // 2D Animation - 9 MP4
  ['2danim', '2D Animation', '2D Animated Video', '', 'assets/2danimation/2D-Animated-Video.mp4'],
  ['2danim', '2D Animation', 'Empowering', '', 'assets/2danimation/Empowering.mp4'],
  ['2danim', '2D Animation', 'Ero', '', 'assets/2danimation/ero.mp4'],
  ['2danim', '2D Animation', 'Harmonizing', '', 'assets/2danimation/harmonizing.mp4'],
  ['2danim', '2D Animation', 'LMS', '', 'assets/2danimation/LMS.mp4'],
  ['2danim', '2D Animation', 'LRC', '', 'assets/2danimation/LRC.mp4'],
  ['2danim', '2D Animation', 'Moodcaster', '', 'assets/2danimation/Moodcaster.mp4'],
  ['2danim', '2D Animation', 'NCF', '', 'assets/2danimation/NCF.mp4'],
  ['2danim', '2D Animation', 'Starting', '', 'assets/2danimation/Starting.mp4'],

  // 3D Animation - 9 MP4
  ['3danim', '3D Animation', '3D Architectural Walkthrough', '', 'assets/3danimation/3D-Architectural-walkthrough.mp4'],
  ['3danim', '3D Animation', '3D Interior', '', 'assets/3danimation/3D-INTERIOR.mp4'],
  ['3danim', '3D Animation', '4K Cinematic Animation', '', 'assets/3danimation/4K-Cinematic-Animation.mp4'],
  ['3danim', '3D Animation', 'Chicken 3D Animation', '', 'assets/3danimation/CHICKEN-3D-ANIMATION.mp4'],
  ['3danim', '3D Animation', 'CTRL', '', 'assets/3danimation/CTRL.mp4'],
  ['3danim', '3D Animation', 'ELISE ZONE', '', 'assets/3danimation/ELISE-ZONE.mp4'],
  ['3danim', '3D Animation', 'EMOJI Animation', '', 'assets/3danimation/EMOJI-ANIMATION.mp4'],
  ['3danim', '3D Animation', 'FLAV', '', 'assets/3danimation/FLAV.mp4'],
  ['3danim', '3D Animation', 'Interior Walkthrough', '', 'assets/3danimation/Interior-walkthrough-animation.mp4'],

  // Post-Production - 9 MP4
  ['postprod', 'Post-Production', 'Chamak Patti', '', 'assets/post-production/Chamak-Patti.mp4'],
  ['postprod', 'Post-Production', 'Class', '', 'assets/post-production/Class.mp4'],
  ['postprod', 'Post-Production', 'Conquer The Wild', '', 'assets/post-production/Conquer-The-Wild.mp4'],
  ['postprod', 'Post-Production', 'Corporate Video', '', 'assets/post-production/corporate-video.mp4'],
  ['postprod', 'Post-Production', 'Eagle', '', 'assets/post-production/Eagle.mp4'],
  ['postprod', 'Post-Production', 'Jade', '', 'assets/post-production/Jade.mp4'],
  ['postprod', 'Post-Production', 'Property Group', '', 'assets/post-production/Property-Group.mp4'],
  ['postprod', 'Post-Production', 'Safts', '', 'assets/post-production/Safts.mp4'],
  ['postprod', 'Post-Production', 'The Art of Transforming', '', 'assets/post-production/The-Art-of-Transforming.mp4'],

  // Web Design - 9 PNG/JPG
  ['webdesign', 'Web Design', 'Corporate Portal Redesign', 'assets/Web/web1.png'],
  ['webdesign', 'Web Design', 'E-Commerce Platform', 'assets/Web/web2.png'],
  ['webdesign', 'Web Design', 'SaaS Dashboard UI', 'assets/Web/web3.png'],
  ['webdesign', 'Web Design', 'Healthcare App Landing', 'assets/Web/web4.png'],
  ['webdesign', 'Web Design', 'Fintech Mobile Web', 'assets/Web/web5.png'],
  ['webdesign', 'Web Design', 'Real Estate Marketplace', 'assets/Web/web6.png'],
  ['webdesign', 'Web Design', 'EdTech Learning Portal', 'assets/Web/web7.png'],
  ['webdesign', 'Web Design', 'Fitness Tracker Web', 'assets/Web/web8.png'],
  ['webdesign', 'Web Design', 'Travel Booking Site', 'assets/Web/web9.png'],

  // Brand Identity - 9 PNG
  ['brand', 'Brand Identity', 'Tech Startup Rebrand', 'assets/brand-identity/graphic1.png'],
  ['brand', 'Brand Identity', 'Luxury Watch Brand Logo', 'assets/brand-identity/graphic2.png'],
  ['brand', 'Brand Identity', 'Coffee Shop Visual ID', 'assets/brand-identity/graphic3.png'],
  ['brand', 'Brand Identity', 'Fitness Brand Guidelines', 'assets/brand-identity/graphic4.png'],
  ['brand', 'Brand Identity', 'Real Estate Agency Logo', 'assets/brand-identity/graphic5.png'],
  ['brand', 'Brand Identity', 'App Launch Campaign', 'assets/brand-identity/graphic6.png'],
  ['brand', 'Brand Identity', 'Restaurant Menu Design', 'assets/brand-identity/graphic7.png'],
  ['brand', 'Brand Identity', 'Eco Product Packaging', 'assets/brand-identity/graphic8.png'],
  ['brand', 'Brand Identity', 'Fashion E-Com Brand', 'assets/brand-identity/graphic9.png'],

  // Application - 9 PNG/JPG
  ['app', 'Application', 'Fleet Management App', 'assets/application/app1.png'],
  ['app', 'Application', 'SaaS Analytics Dashboard', 'assets/application/app2.png'],
  ['app', 'Application', 'Health Tracking Mobile', 'assets/application/app3.png'],
  ['app', 'Application', 'E-Learning Platform', 'assets/application/app4.png'],
  ['app', 'Application', 'Delivery Service App', 'assets/application/app5.png'],
  ['app', 'Application', 'Social Media Manager', 'assets/application/app6.jpg'],
  ['app', 'Application', 'CRM Enterprise', 'assets/application/app7.jpg'],
  ['app', 'Application', 'Task Management Tool', 'assets/application/app8.png'],
  ['app', 'Application', 'Budget Planner App', 'assets/application/app9.png'],
  
];

$filters = ['all'=>'All Work','2danim'=>'2D Animation','3danim'=>'3D Animation','postprod'=>'Post-Production','webdesign'=>'Web Design','brand'=>'Brand Identity','app'=>'Application'];
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
    <div class="pf-item" data-cat="<?php echo $p[0]; ?>" onclick="openMediaPopup(this)" style="cursor: pointer;">
      <?php if (!empty($p[3])): // image ?>
      <img class="pf-media" src="<?php echo $p[3]; ?>" alt="<?php echo $p[2]; ?>" loading="lazy">
      <div class="pf-icon pf-zoom">🔍</div>
      <?php elseif (!empty($p[4])): // video ?>
      <video class="pf-media" muted loop preload="metadata">
        <source src="<?php echo $p[4]; ?>" type="video/mp4">
      </video>
      <div class="pf-icon pf-play">▶</div>
      <?php endif; ?>
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
