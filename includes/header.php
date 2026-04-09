<?php
// includes/header.php — Shared header, nav, meta tags
$script_name = $_SERVER['SCRIPT_NAME'];
$is_blog_post = strpos($script_name, '/blogs/') !== false;
$css_base = $is_blog_post ? '../' : '';
$current   = basename($_SERVER['PHP_SELF'], '.php');
if (strpos($current, 'blog-') === 0) $current = 'blog';
$title     = isset($page_title) ? htmlspecialchars($page_title) : 'Tendou — Creative Agency | Web · Animation · Brand';
$desc      = isset($meta_desc)  ? htmlspecialchars($meta_desc)  : 'Tendou is a premium creative agency in Grand Prairie TX. Web design, animation, branding and digital marketing for enterprise clients.';
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?></title>
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" type="image/svg+xml" href="../assets/image/favicon.svg">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/image/favicon32.png">
<meta name="description" content="<?php echo $desc; ?>">
<meta name="keywords" content="web design, animation, branding, UI UX, SEO, app development, Grand Prairie TX, creative agency">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $desc; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://tendou.us">
<link rel="canonical" href="https://tendou.us/<?php echo ($current==='index')?'':$current.'.php'; ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $css_base; ?>assets/css/main.css">

</head>
<body>

<div id="cur-dot"></div>
<div id="cur-ring"></div>

<nav id="mainNav">
<a class="nav-logo" href="<?php echo $is_blog_post ? '../index.php' : 'index.php'; ?>">
    <img src="<?php echo $css_base; ?>assets/image/logo.png" alt="Tendou" height="32">
  </a>
  <div class="nav-links">
    <?php
$is_blog_sub = strpos($_SERVER['SCRIPT_NAME'], '/blogs/') !== false;
$pages = ['index'=>'Home','services'=>'Services','portfolio'=>'Portfolio','about'=>'About','blog'=>'Blog','contact'=>'Contact'];
    foreach($pages as $slug=>$label):
$href  = ($slug==='index') ? (($is_blog_sub ? '../index.php' : 'index.php')) : ($is_blog_sub ? '../' . $slug . '.php' : $slug . '.php');
      $class = ($current===$slug) ? ' class="active"' : '';
    ?>
    <a href="<?php echo $href; ?>"<?php echo $class; ?>><?php echo $label; ?></a>
    <?php endforeach; ?>
  </div>
  <div class="nav-right">
    <button class="theme-toggle" id="themeBtn" onclick="toggleTheme()" aria-label="Toggle theme"><span id="themeIcon">☀</span></button>
    <a href="../morinaga/contact.php" class="nav-cta"><span>Start a Project</span></a>
    <button class="ham" onclick="toggleMob()" aria-label="Menu"><span></span><span></span><span></span></button>
  </div>
</nav>

<div class="mob-menu" id="mobMenu">
  <?php foreach($pages as $slug=>$label): $href=($slug==='index')?'../index.php':'../'.$slug; ?>
  <a href="<?php echo $href; ?>"><?php echo $label; ?></a>
  <?php endforeach; ?>
  <a href="../contact" class="btn-p" style="text-align:center;margin-top:.5rem">Start a Project →</a>
</div>


