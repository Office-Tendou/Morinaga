<?php
/* {"title":"Core Web Vitals Optimization Guide 2025", "date":"2025-03-20", "cat":"Web Development", "gradient":"linear-gradient(135deg,#041420,#0F5F8A,#4FC3E8)", "excerpt":"Master Google's Core Web Vitals for 2025. Enterprise-grade optimization strategies for animation-heavy websites."} */
$page_title = 'Core Web Vitals Optimization Guide 2025 | Tendou Blog';
$meta_desc = 'Complete Core Web Vitals guide for 2025: LCP, CLS, INP optimization for video/animation portfolios achieving PageSpeed 95+ scores.';
require_once '../includes/header.php';
?>
<div class="pg-hero">
  <div class="pg-glow"></div>
  <div class="eyebrow rv">Web Development</div>
  <h1 class="pg-h rv d1">Core Web Vitals <em>Optimization Guide 2025</em></h1>
  <p class="pg-sub rv d2">Enterprise strategies for animation-heavy portfolios achieving PageSpeed 95+.</p>
</div>

<div class="sec">
<div class="inner">
  <article class="post-content">
    <p>Animation portfolios fail Core Web Vitals. 4K videos + 3D models = instant LCP fails. Here's the Tendou optimization playbook.</p>
    
    <h2>Largest Contentful Paint (LCP) < 2.5s</h2>
    <p>Preload hero GLB models. Lazyload below-fold animations. WebP for portfolio thumbs (75% smaller).</p>
    
    <h2>Cumulative Layout Shift (CLS) = 0</h2>
    <p>Reserve space for dynamic video heights. CSS containment for animated elements. No CLS surprises.</p>
    
    <h2>Interaction to Next Paint (INP) < 200ms</h2>
    <p>60fps scroll animations via WAAPI. Debounce hover effects. Main thread = UI only.</p>
    
    <video controls width="100%" style="margin:2rem 0;">
      <source src="../assets/3danimation/Interior-walkthrough-animation.mp4" type="video/mp4">
    </video>
    
    <h2>Real Results</h2>
    <ul>
      <li>Client portfolio: 45 → 94 PageSpeed</li>
      <li>Animation reel LCP: 4.2s → 1.8s</li>
      <li>Mobile rankings +28 positions</li>
    </ul>
    
    <p><a href="../contact.php">Free Core Web Vitals audit</a>. Est. read: 5 min.</p>
  </article>
</div>
</div>

<div class="cta-band">
  <div class="cta-glow"></div>
  <div class="cta-lines"><div class="cta-line"></div><div class="cta-line"></div><div class="cta-line"></div></div>
  <div class="cta-inner">
    <h2 class="cta-h">Fix your Core Web Vitals today</h2>
    <a href="../contact.php" class="btn-p"><span>Free Audit &rarr;</span></a>
  </div>
</div>

<?php require_once '../includes/footer.php'; ?>

