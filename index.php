<?php
$page_title = 'Tendou — Creative Agency | Web · Animation · Brand';
$meta_desc  = 'Tendou is a premium creative agency in Grand Prairie TX. Web design, 3D animation, branding, app development and digital marketing for enterprise clients.';
require_once 'includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-blobs">
    <div class="blob blob1"></div>
    <div class="blob blob2"></div>
    <div class="blob blob3"></div>
  </div>
  <div class="hero-grid"></div>
  <div class="hero-shapes">
    <div class="hshape hs1"><svg width="110" height="110" viewBox="0 0 110 110" fill="none"><rect x="8" y="8" width="94" height="94" rx="14" stroke="#2BAADB" stroke-width="1.5"/><rect x="26" y="26" width="58" height="58" rx="8" stroke="#2A338F" stroke-width="1"/><circle cx="55" cy="55" r="14" stroke="#F5A623" stroke-width="1"/></svg></div>
    <div class="hshape hs2"><svg width="85" height="85" viewBox="0 0 85 85" fill="none"><polygon points="42,4 81,72 3,72" stroke="#2BAADB" stroke-width="1.5"/><polygon points="42,20 67,63 17,63" stroke="#2A338F" stroke-width="1"/></svg></div>
    <div class="hshape hs3"><svg width="75" height="75" viewBox="0 0 75 75" fill="none"><circle cx="37" cy="37" r="32" stroke="#F5A623" stroke-width="1.5" stroke-dasharray="4 4"/><circle cx="37" cy="37" r="18" stroke="#2BAADB" stroke-width="1"/><circle cx="37" cy="37" r="5" fill="#F5A623" opacity=".6"/></svg></div>
    <div class="hshape hs4"><svg width="190" height="190" viewBox="0 0 190 190" fill="none"><path d="M95 8L182 52L182 138L95 182L8 138L8 52Z" stroke="#2A338F" stroke-width="1"/><path d="M95 36L156 68L156 122L95 154L34 122L34 68Z" stroke="#2BAADB" stroke-width=".8"/></svg></div>
  </div>

  <div class="hero-content">
    <div class="hero-badge"><div class="bdot"></div>Grand Prairie, TX &bull; Est. 2016</div>
    <h1 class="hero-h1">
      <span>We build</span><br>
      <span class="gline">digital</span>
      <span class="gline">worlds.</span>
    </h1>
    <p class="hero-p">Premium creative agency. Web, animation, brand, and strategy for enterprises that refuse to blend in.</p>
    <div class="hero-btns">
      <a href="portfolio.php" class="btn-p"><span>View Our Work &rarr;</span></a>
      <a href="services.php"  class="btn-s"><span>Our Services</span></a>
    </div>
    <div class="hero-stats">
      <div><div class="hstat-n">120+</div><div class="hstat-l">Projects Delivered</div></div>
      <div><div class="hstat-n">8+</div>  <div class="hstat-l">Years of Excellence</div></div>
      <div><div class="hstat-n">95%</div> <div class="hstat-l">Client Retention</div></div>
    </div>
  </div>
  <div class="scroll-cue"><div class="scroll-bar"></div><div class="scroll-lbl">Scroll</div></div>
</section>

<!-- MARQUEE -->
<div class="mq">
  <div class="mq-track">
    <?php
    $items = ['Web Design','Brand Identity','3D Animation','UI · UX','Post Production','SEO Strategy','App Development','Digital Marketing'];
    $all   = array_merge($items, $items); // duplicate for seamless loop
    foreach($all as $item): ?>
    <span class="mq-item"><?php echo htmlspecialchars($item); ?></span><span class="mq-sep">✦</span>
    <?php endforeach; ?>
  </div>
</div>

<!-- SERVICES PREVIEW -->
<div class="sec-b">
<div class="inner">
  <div class="eyebrow rv">What We Do</div>
  <h2 class="h2 rv d1">Built to <span class="g">elevate</span> your brand</h2>
  <div class="srv-grid">
    <?php
    $services = [
      ['01','Web Design &amp; Development','Bespoke digital platforms engineered for performance, conversion, and brand authority at scale.',
       '<svg viewBox="0 0 56 56" fill="none"><rect x="4" y="10" width="48" height="36" rx="4" stroke="#2BAADB" stroke-width="1.5"/><path d="M4 20h48" stroke="#2BAADB" stroke-width="1.5"/><circle cx="11" cy="15" r="2" fill="#F5A623"/><circle cx="18" cy="15" r="2" fill="#2A338F"/><circle cx="25" cy="15" r="2" fill="#2BAADB"/><rect x="10" y="28" width="16" height="12" rx="2" stroke="rgba(43,170,219,.4)" stroke-width="1"/><rect x="32" y="28" width="12" height="5" rx="1" stroke="rgba(245,166,35,.4)" stroke-width="1"/><rect x="32" y="36" width="9" height="4" rx="1" stroke="rgba(43,170,219,.3)" stroke-width="1"/></svg>'],
      ['02','Brand Identity &amp; Design','Visual systems — logos, guidelines, and graphic design that command attention and build lasting trust.',
       '<svg viewBox="0 0 56 56" fill="none"><circle cx="28" cy="28" r="20" stroke="#2A338F" stroke-width="1.5"/><circle cx="28" cy="28" r="12" stroke="#2BAADB" stroke-width="1"/><circle cx="28" cy="28" r="5" fill="#F5A623" opacity=".8"/><path d="M28 8L28 48M8 28L48 28" stroke="rgba(43,170,219,.2)" stroke-width="1"/></svg>'],
      ['03','2D &amp; 3D Animation','Cinematic animation for product launches, explainers, and brand films that captivate audiences.',
       '<svg viewBox="0 0 56 56" fill="none"><rect x="6" y="14" width="44" height="28" rx="3" stroke="#2BAADB" stroke-width="1.5"/><polygon points="23,22 23,36 38,29" fill="#F5A623" opacity=".8"/><circle cx="49" cy="12" r="5" stroke="#2A338F" stroke-width="1.5"/></svg>'],
      ['04','Application Development','Scalable web and mobile applications built for the demands of growing enterprise businesses.',
       '<svg viewBox="0 0 56 56" fill="none"><rect x="16" y="6" width="24" height="44" rx="4" stroke="#2BAADB" stroke-width="1.5"/><rect x="20" y="12" width="16" height="26" rx="2" stroke="rgba(43,170,219,.4)" stroke-width="1"/><circle cx="28" cy="44" r="3" stroke="#F5A623" stroke-width="1.5"/><rect x="23" y="18" width="10" height="2" rx="1" fill="rgba(245,166,35,.5)"/><rect x="23" y="23" width="7" height="2" rx="1" fill="rgba(43,170,219,.4)"/></svg>'],
      ['05','SEO &amp; Digital Marketing','Data-driven SEO, social strategy, and paid campaigns generating measurable compounding growth.',
       '<svg viewBox="0 0 56 56" fill="none"><circle cx="28" cy="28" r="18" stroke="#2A338F" stroke-width="1.5"/><path d="M28 10Q46 28 28 46Q10 28 28 10Z" stroke="#2BAADB" stroke-width="1"/><circle cx="28" cy="28" r="4" fill="#F5A623"/></svg>'],
      ['06','UI/UX &amp; Post Production','Human-centered design and broadcast-quality video post-production — from wire to final cut.',
       '<svg viewBox="0 0 56 56" fill="none"><rect x="4" y="14" width="48" height="28" rx="4" stroke="#2BAADB" stroke-width="1.5"/><path d="M4 23L52 23M4 35L52 35" stroke="rgba(43,170,219,.2)" stroke-width="1"/><rect x="11" y="17.5" width="9" height="3.5" rx="1.5" fill="rgba(245,166,35,.5)"/><circle cx="20" cy="29" r="3.5" stroke="#F5A623" stroke-width="1.5"/></svg>'],
    ];
    foreach($services as $i => $s):
      $delay = ['','','','rv d1','rv d1','rv d2'][$i];
    ?>
    <div class="srv-card rv <?php echo $delay; ?>">
      <div class="srv-num"><?php echo $s[0]; ?></div>
      <div class="srv-ill"><?php echo $s[3]; ?></div>
      <div class="srv-name"><?php echo $s[1]; ?></div>
      <div class="srv-desc"><?php echo $s[2]; ?></div>
      <a href="services.php" class="srv-lnk">Explore <span>&rarr;</span></a>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>

<!-- ABOUT BENTO -->
<div class="sec">
<div class="inner">
  <div class="eyebrow rv">About Tendou</div>
  <h2 class="h2 rv d1">Where precision meets <span class="g">artistry</span></h2>
  <div class="bento rv d2">
    <div class="ba">
      <div class="bcard" style="height:100%">
        <div style="max-width:480px">
          <div style="font-family:var(--font-h);font-size:1.25rem;font-weight:700;margin-bottom:1rem;line-height:1.4">Founded in Grand Prairie, TX — built to challenge what corporate creative looks like.</div>
          <p style="font-size:.9rem;color:var(--muted);line-height:1.8">We believe every enterprise brand deserves creative excellence — not templates. Strategy meets obsessive craft across every medium we touch.</p>
        </div>
        <div style="display:flex;gap:3rem;flex-wrap:wrap;margin-top:2.5rem;padding-top:2rem;border-top:1px solid var(--border)">
          <div><div class="bn">120+</div><div class="bl">Projects</div></div>
          <div><div class="bn">8+</div>  <div class="bl">Years</div></div>
          <div><div class="bn">95%</div> <div class="bl">Retention</div></div>
        </div>
      </div>
    </div>
    <div class="bb">
      <div class="bcard bcard-accent" style="height:100%;display:flex;align-items:center;justify-content:center">
        <div class="orb-wrap">
          <div class="orb-scene">
            <div class="orb-core">T</div>
            <div class="orb-ring or1"><div class="odot"></div></div>
            <div class="orb-ring or2"><div class="odot2"></div></div>
            <div class="orb-ring or3"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="bc"><div class="bcard"><div class="bn">8+</div><div class="bl">Years of Craft</div><p style="font-size:.82rem;color:var(--muted);line-height:1.65;margin-top:1rem">Serving corporate clients across North America with award-caliber creative work.</p></div></div>
    <div class="bd"><div class="bcard bcard-amber"><div style="font-family:var(--font-h);font-size:1.05rem;font-weight:700;margin-bottom:.75rem">Strategy First</div><div style="font-size:.87rem;color:var(--muted);line-height:1.75">Every engagement starts with deep discovery. We connect creative decisions to business outcomes before a single pixel moves.</div></div></div>
    <div class="be"><div class="bcard"><div class="bn">95%</div><div class="bl">Client Retention</div><p style="font-size:.82rem;color:var(--muted);line-height:1.65;margin-top:1rem">Long-term partnerships built on trust, transparency, and delivered results.</p></div></div>
  </div>
</div>
</div>

<!-- PROCESS -->
<div class="sec-b">
<div class="inner">
  <div class="eyebrow rv">How We Work</div>
  <h2 class="h2 rv d1">A process built for <span class="g">results</span></h2>
  <div class="proc-grid">
    <?php
    $steps = [
      ['01','Discovery','Deep dive into your business, audience, and competitive landscape.'],
      ['02','Strategy','A creative roadmap connecting every deliverable to a measurable objective.'],
      ['03','Creation','Craft, build, animate — relentless attention to detail at every stage.'],
      ['04','Launch &amp; Grow','Seamless delivery, optimization, and ongoing support post-launch.'],
    ];
    foreach($steps as $i => $step): ?>
    <div class="proc-step rv<?php echo $i?(' d'.$i):''; ?>">
      <div class="proc-bubble"><?php echo $step[0]; ?></div>
      <div class="proc-title"><?php echo $step[1]; ?></div>
      <div class="proc-desc"><?php echo $step[2]; ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>

<!-- TESTIMONIALS -->
<div class="sec">
<div class="inner">
  <div class="eyebrow rv">Client Stories</div>
  <h2 class="h2 rv d1">Trusted by <span class="g">industry leaders</span></h2>
  <div class="testi-grid">
    <?php
    $testimonials = [
      ['"Tendou transformed our digital presence completely. The attention to brand detail exceeded every benchmark. Our conversion rate increased by 240% within three months."','Marcus Holloway','CMO, NexaTech Industries'],
      ['"The 3D animation for our product launch was nothing short of cinematic. Stakeholders were stunned. The ROI was immediate and measurable from day one."','Priya Okafor','VP Brand, Meridian Capital'],
      ['"They rebuilt our enterprise app on time, on budget, with a level of UX refinement we didn\'t think was possible at this scale. Outstanding."','David Chen','CTO, Axiom Logistics Corp'],
    ];
    foreach($testimonials as $i => $t): ?>
    <div class="testi-card rv<?php echo $i?(' d'.$i):''; ?>">
      <div class="tglow"></div>
      <div class="tstars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <p class="ttext"><?php echo htmlspecialchars($t[0]); ?></p>
      <div class="tname"><?php echo htmlspecialchars($t[1]); ?></div>
      <div class="trole"><?php echo htmlspecialchars($t[2]); ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</div>

<!-- CTA -->
<div class="cta-band">
  <div class="cta-glow"></div>
  <div class="cta-lines"><div class="cta-line"></div><div class="cta-line"></div><div class="cta-line"></div><div class="cta-line"></div><div class="cta-line"></div></div>
  <div class="cta-inner">
    <div class="eyebrow" style="justify-content:center;margin-bottom:1.5rem">Ready to Begin?</div>
    <h2 class="cta-h">Let&rsquo;s build something<br><span class="g">extraordinary.</span></h2>
    <p class="cta-sub">Tell us about your project. We respond within 24 hours.</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
      <a href="contact.php"   class="btn-p"><span>Start Your Project &rarr;</span></a>
      <a href="portfolio.php" class="btn-s"><span>View Our Work</span></a>
    </div>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>
