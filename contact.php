<?php
$page_title = 'Contact Us — Tendou Creative Agency';
$meta_desc  = 'Get in touch with Tendou. Start a project, request a proposal, or ask us anything. We respond within 24 hours.';

// Handle form POST submission server-side
$form_success = false;
$form_error   = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $firstname = trim(strip_tags($_POST['firstname'] ?? ''));
  $lastname  = trim(strip_tags($_POST['lastname']  ?? ''));
  $email     = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
  $company   = trim(strip_tags($_POST['company']   ?? ''));
  $service   = trim(strip_tags($_POST['service']   ?? ''));
  $budget    = trim(strip_tags($_POST['budget']    ?? ''));
  $message   = trim(strip_tags($_POST['message']   ?? ''));

  if(empty($firstname) || empty($email) || empty($message)){
    $form_error = 'Please fill in all required fields (First Name, Email, Message).';
  } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $form_error = 'Please enter a valid email address.';
  } else {
    // Send email — configure your SMTP or use PHPMailer in production
    $to      = 'info@tendou.us';
    $subject = "New Project Inquiry from $firstname $lastname";
    $body    = "Name: $firstname $lastname\nEmail: $email\nCompany: $company\nService: $service\nBudget: $budget\n\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();
    if(mail($to, $subject, $body, $headers)){
      $form_success = true;
    } else {
      $form_error = 'There was an error sending your message. Please email us directly at info@tendou.us';
    }
  }
}

require_once 'includes/header.php';
?>

<div class="pg-hero">
  <div class="pg-glow"></div>
  <div class="eyebrow rv">Get in Touch</div>
  <h1 class="pg-h rv d1">Let&rsquo;s build something<br><em>remarkable</em></h1>
  <p class="pg-sub rv d2">We respond to every inquiry within 24 hours. Tell us about your project.</p>
</div>

<div class="sec">
<div class="inner">
  <div class="ct-grid">

    <!-- Contact Info -->
    <div>
      <div class="eyebrow rv">Contact Information</div>
      <div style="margin-top:2rem">
        <div class="rv d1"><div class="ct-lbl">Address</div><div class="ct-val">Gillespie Lane<br>Grand Prairie, TX 75052<br>United States</div></div>
        <div class="rv d2"><div class="ct-lbl">Phone</div><div class="ct-val"><a href="tel:9725918660">(972) 591-8660</a></div></div>
        <div class="rv d2"><div class="ct-lbl">Email</div><div class="ct-val"><a href="mailto:info@tendou.us">info@tendou.us</a></div></div>
        <div class="rv d3"><div class="ct-lbl">Office Hours</div><div class="ct-val">Monday &ndash; Friday<br>9:00 am &ndash; 6:00 pm EST</div></div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="ct-form rv d1">
      <div class="ct-fh">Start a project</div>

      <?php if($form_success): ?>
      <div class="form-msg success">&#10003; Message sent! We&rsquo;ll respond within 24 hours.</div>
      <?php elseif($form_error): ?>
      <div class="form-msg error"><?php echo htmlspecialchars($form_error); ?></div>
      <?php endif; ?>

      <form id="contactForm" method="POST" action="contact.php" novalidate>

        <div class="fg-row">
          <div class="fg">
            <label for="firstname">First Name <span style="color:var(--c3)">*</span></label>
            <input type="text" id="firstname" name="firstname" placeholder="John" required value="<?php echo htmlspecialchars($_POST['firstname'] ?? ''); ?>">
          </div>
          <div class="fg">
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" placeholder="Smith" value="<?php echo htmlspecialchars($_POST['lastname'] ?? ''); ?>">
          </div>
        </div>

        <div class="fg">
          <label for="email">Email Address <span style="color:var(--c3)">*</span></label>
          <input type="email" id="email" name="email" placeholder="john@company.com" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
        </div>

        <div class="fg">
          <label for="company">Company</label>
          <input type="text" id="company" name="company" placeholder="Your Company Name" value="<?php echo htmlspecialchars($_POST['company'] ?? ''); ?>">
        </div>

        <div class="fg">
          <label for="service">Service Needed</label>
          <select id="service" name="service">
            <option value="">Select a service...</option>
            <?php
            $svcs = ['Web Design & Development','Brand Identity & Graphic Design','2D & 3D Animation','Video Editing & Post Production','Application Development','SEO & Social Media Management','UI/UX & Digital Marketing','Multiple Services / Full Retainer'];
            foreach($svcs as $svc):
              $sel = (($_POST['service'] ?? '') === $svc) ? ' selected' : '';
            ?>
            <option value="<?php echo htmlspecialchars($svc); ?>"<?php echo $sel; ?>><?php echo htmlspecialchars($svc); ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="fg">
          <label for="budget">Budget Range</label>
          <select id="budget" name="budget">
            <option value="">Select budget range...</option>
            <?php
            $budgets = ['$5,000 – $15,000','$15,000 – $50,000','$50,000 – $100,000','$100,000+'];
            foreach($budgets as $b):
              $sel = (($_POST['budget'] ?? '') === $b) ? ' selected' : '';
            ?>
            <option value="<?php echo htmlspecialchars($b); ?>"<?php echo $sel; ?>><?php echo htmlspecialchars($b); ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="fg">
          <label for="message">Project Details <span style="color:var(--c3)">*</span></label>
          <textarea id="message" name="message" placeholder="Tell us about your project, goals, and timeline..." required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
        </div>

        <div style="display:flex;gap:1rem;margin-top:.5rem;flex-wrap:wrap">
          <button type="submit" class="btn-p form-submit-btn" style="flex:1;min-width:160px"><span>Send Message &rarr;</span></button>
          <button type="reset"  class="btn-s" style="flex:1;min-width:140px"><span>Clear Form</span></button>
        </div>
        <p style="font-size:.75rem;color:var(--muted2);text-align:center;margin-top:1rem">Fields marked <span style="color:var(--c3)">*</span> are required. We respond within 24 hours on business days.</p>

      </form>
    </div>

  </div>
</div>
</div>

<?php require_once 'includes/footer.php'; ?>
