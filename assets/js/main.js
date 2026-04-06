// ── CURSOR ────────────────────────────────────────────────────
(function(){
  var dot  = document.getElementById('cur-dot');
  var ring = document.getElementById('cur-ring');
  if(!dot || !ring) return;
  var mx=window.innerWidth/2, my=window.innerHeight/2, rx=mx, ry=my;

  document.addEventListener('mousemove', function(e){ mx=e.clientX; my=e.clientY; dot.style.left=mx+'px'; dot.style.top=my+'px'; });
  (function loop(){ rx+=(mx-rx)*.1; ry+=(my-ry)*.1; ring.style.left=rx+'px'; ring.style.top=ry+'px'; requestAnimationFrame(loop); })();
  document.addEventListener('mouseleave', function(){ dot.style.opacity='0'; ring.style.opacity='0'; });
  document.addEventListener('mouseenter', function(){ dot.style.opacity='1'; ring.style.opacity='1'; });
  document.querySelectorAll('a,button,.pf-item,.srv-card,.blog-card,.team-card').forEach(function(el){
    el.addEventListener('mouseenter', function(){ document.body.classList.add('c-hover'); });
    el.addEventListener('mouseleave', function(){ document.body.classList.remove('c-hover'); });
  });
  document.addEventListener('mousedown', function(){ document.body.classList.add('c-click'); });
  document.addEventListener('mouseup',   function(){ document.body.classList.remove('c-click'); });
})();

// ── THEME ─────────────────────────────────────────────────────
var isDark = true;
function toggleTheme(){
  isDark = !isDark;
  document.documentElement.setAttribute('data-theme', isDark ? 'dark' : 'light');
  var icon = document.getElementById('themeIcon');
  if(icon) icon.textContent = isDark ? '☀' : '☾';
  try { localStorage.setItem('tendou-theme', isDark ? 'dark' : 'light'); } catch(e){}
}
// Restore saved theme
(function(){
  try {
    var saved = localStorage.getItem('tendou-theme');
    if(saved === 'light'){ isDark = false; document.documentElement.setAttribute('data-theme','light'); var i=document.getElementById('themeIcon'); if(i) i.textContent='☾'; }
  } catch(e){}
})();

// ── MOBILE MENU ───────────────────────────────────────────────
function toggleMob(){
  var m = document.getElementById('mobMenu');
  if(m) m.classList.toggle('open');
}

// ── PORTFOLIO FILTER ──────────────────────────────────────────
function pfF(cat, el){
  document.querySelectorAll('.btn-ghost').forEach(function(b){ b.classList.remove('on'); });
  el.classList.add('on');
  document.querySelectorAll('.pf-item').forEach(function(item){
    item.style.display = (cat==='all' || item.dataset.cat===cat) ? 'block' : 'none';
  });
}

// ── SCROLL REVEAL ─────────────────────────────────────────────
(function(){
  function initReveal(){
    var els = document.querySelectorAll('.rv:not(.on)');
    if(!els.length) return;
    var obs = new IntersectionObserver(function(entries){
      entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('on'); obs.unobserve(e.target); } });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
    els.forEach(function(el){ obs.observe(el); });
  }
  if(document.readyState === 'loading'){ document.addEventListener('DOMContentLoaded', initReveal); }
  else { initReveal(); }
})();

// ── CONTACT FORM ──────────────────────────────────────────────
(function(){
  var form = document.getElementById('contactForm');
  if(!form) return;
  form.addEventListener('submit', function(e){
    e.preventDefault();
    var btn = form.querySelector('.form-submit-btn');
    var msg = document.getElementById('formMsg');
    if(btn){ btn.querySelector('span').textContent = 'Sending...'; btn.disabled = true; }

    // Basic client-side validation
    var email = form.querySelector('input[name="email"]');
    var name  = form.querySelector('input[name="firstname"]');
    if(!email || !name || !email.value.trim() || !name.value.trim()){
      if(msg){ msg.className='form-msg error'; msg.textContent='Please fill in all required fields.'; }
      if(btn){ btn.querySelector('span').textContent='Send Message →'; btn.disabled=false; }
      return;
    }

    // Simulate submission (replace with real PHP fetch or action)
    setTimeout(function(){
      if(msg){ msg.className='form-msg success'; msg.textContent='Message sent! We\'ll respond within 24 hours.'; }
      if(btn){ btn.querySelector('span').textContent='Message Sent ✓'; }
      form.reset();
      setTimeout(function(){
        if(btn){ btn.querySelector('span').textContent='Send Message →'; btn.disabled=false; }
      }, 5000);
    }, 1000);
  });
})();
