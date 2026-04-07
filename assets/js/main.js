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

// ── MEDIA POPUP (Video/Image) ──────────────────────────────────
function openMediaPopup(item) {
  var mediaSrc = item.querySelector('.pf-media').src || item.querySelector('video source').src;
  var title = item.querySelector('.pf-name').textContent;
  var isVideo = item.querySelector('video') !== null;

  // Remove existing modal
  var existing = document.getElementById('mediaModal');
  if (existing) existing.remove();

  var modal = document.createElement('div');
  modal.id = 'mediaModal';
  modal.className = 'media-modal';
  if (isVideo) {
    modal.innerHTML = `
      <div class="media-modal-overlay" onclick="closeMediaPopup()"></div>
      <div class="media-modal-content">
        <button class="media-modal-close" onclick="closeMediaPopup()" aria-label="Close">&times;</button>
        <div class="media-modal-title">${title}</div>
        <video class="media-modal-player" controls preload="metadata">
          <source src="${mediaSrc}" type="video/mp4">
        </video>
      </div>
    `;
  } else {
    modal.innerHTML = `
      <div class="media-modal-overlay" onclick="closeMediaPopup()"></div>
      <div class="media-modal-content">
        <button class="media-modal-close" onclick="closeMediaPopup()" aria-label="Close">&times;</button>
        <div class="media-modal-title">${title}</div>
        <div class="media-zoom-container">
          <div class="zoom-controls">
            <button onclick="zoomImage(-0.25)">-</button>
            <span id="zoom-level">1x</span>
            <button onclick="zoomImage(0.25)">+</button>
            <button onclick="resetZoom()">Reset</button>
          </div>
          <div class="zoom-viewport">
            <img class="media-modal-player" src="${mediaSrc}" alt="${title}" id="zoomable-img">
          </div>
        </div>
      </div>
    `;
  }
  document.body.appendChild(modal);

  var player = modal.querySelector('.media-modal-player');
  if (isVideo && player) {
    player.addEventListener('loadedmetadata', () => player.play().catch(e => console.log(e)));
  }
  
  // ESC handler
  var escHandler = (e) => { if (e.key === 'Escape') closeMediaPopup(); };
  document.addEventListener('keydown', escHandler);
  window.mediaEscHandler = escHandler;
  window.mediaModalPlayer = player;
}

function closeMediaPopup() {
  var modal = document.getElementById('mediaModal');
  if (modal) {
    var player = window.mediaModalPlayer;
    if (player && player.tagName === 'VIDEO') {
      player.pause();
      player.currentTime = 0;
    }
    // Reset zoom if image
    var img = document.getElementById('zoomable-img');
    if (img) {
      img.style.transform = 'scale(1)';
      img.style.cursor = 'grab';
      var level = document.getElementById('zoom-level');
      if (level) level.textContent = '1x';
    }
    var escHandler = window.mediaEscHandler;
    if (escHandler) {
      document.removeEventListener('keydown', escHandler);
      delete window.mediaEscHandler;
    }
    delete window.mediaModalPlayer;
    modal.remove();
  }
}

// Pan & Zoom for images
window.zoomLevel = 1;
window.panX = 0;
window.panY = 0;
function zoomImage(direction) {
  var img = document.getElementById('zoomable-img');
  if (!img) return;
  zoomLevel += direction * 0.25;
  zoomLevel = Math.max(0.25, Math.min(zoomLevel, 5));
  img.style.transform = `scale(${zoomLevel})`;
  var levelSpan = document.getElementById('zoom-level');
  if (levelSpan) levelSpan.textContent = zoomLevel.toFixed(1) + 'x';
}

let isDragging = false;
let startX, startY;

document.addEventListener('mousedown', function(e) {
  var img = document.getElementById('zoomable-img');
  if (img && zoomLevel > 1) {
    isDragging = true;
    startX = e.clientX - panX;
    startY = e.clientY - panY;
    img.style.cursor = 'grabbing';
  }
});
document.addEventListener('mousemove', function(e) {
  if (isDragging) {
    panX = e.clientX - startX;
    panY = e.clientY - startY;
    var img = document.getElementById('zoomable-img');
    if (img) img.style.transform = `scale(${zoomLevel}) translate(${panX}px, ${panY}px)`;
  }
});
document.addEventListener('mouseup', function() {
  isDragging = false;
});
document.addEventListener('mouseleave', function() {
  isDragging = false;
});

// Touch support for mobile
let startTouchX, startTouchY;
document.addEventListener('touchstart', function(e) {
  var img = document.getElementById('zoomable-img');
  if (img && zoomLevel > 1 && e.touches.length === 1) {
    isDragging = true;
    startTouchX = e.touches[0].clientX - panX;
    startTouchY = e.touches[0].clientY - panY;
  }
});
document.addEventListener('touchmove', function(e) {
  if (isDragging && e.touches.length === 1) {
    panX = e.touches[0].clientX - startTouchX;
    panY = e.touches[0].clientY - startTouchY;
    var img = document.getElementById('zoomable-img');
    if (img) img.style.transform = `scale(${zoomLevel}) translate(${panX}px, ${panY}px)`;
    e.preventDefault();
  }
}, { passive: false });
document.querySelector('.media-modal-overlay').addEventListener('wheel', function(e) {
  e.preventDefault();
  zoomImage(e.deltaY > 0 ? -0.1 : 0.1);
}, { passive: false });
document.addEventListener('touchend', function() {
  isDragging = false;
});

function resetZoom() {
  zoomLevel = 1;
  panX = 0;
  panY = 0;
  var img = document.getElementById('zoomable-img');
  if (img) img.style.transform = 'scale(1) translate(0px, 0px)';
  var levelSpan = document.getElementById('zoom-level');
  if (levelSpan) levelSpan.textContent = '1x';
}
