!function (_0x41d8d8) {
    'use strict';
  
    let _0x28923c = document.querySelector(".progress");
    let _0x59fd02 = document.querySelector(".progress path");
    let _0x36a671 = _0x59fd02.getTotalLength();
    _0x59fd02.style.transition = _0x59fd02.style.WebkitTransition = "none";
    _0x59fd02.style.strokeDasharray = _0x36a671;
    _0x59fd02.style.strokeDashoffset = _0x36a671;
    _0x59fd02.getBoundingClientRect();
    _0x59fd02.style.transition = _0x59fd02.style.WebkitTransition = "stroke-dashoffset 10ms linear";
    let _0x3e2b0d = () => {
      let _0x1cd881 = window.scrollY;
      let _0x277bed = document.body.offsetHeight;
      let _0x33a34d = window.innerHeight;
      _0x59fd02.style.strokeDashoffset = _0x36a671 - _0x1cd881 * _0x36a671 / (_0x277bed - _0x33a34d);
      if (_0x1cd881 > 0x32) {
        _0x28923c.classList.add("active");
      } else {
        _0x28923c.classList.remove("active");
      }
    };
    _0x28923c.onclick = function () {
      window.scrollTo({
        'top': 0x0,
        'behavior': "smooth"
      });
    };
    window.onscroll = () => {
      _0x3e2b0d();
    };
    _0x3e2b0d();
  }(jQuery);

  // Fichiers/scroll_button.js — version robuste
(function () {
  // trouve 1 ou plusieurs boutons
  const btns = Array.from(document.querySelectorAll('#toTop, .toTop, .progress#toTop'));
  if (!btns.length) return;

  btns.forEach((btn) => initButton(btn));

  function initButton(btn) {
    const path = btn.querySelector('.progress-svg path');
    if (!path) return;

    let length = 0;

    // prépare le chemin et recalcule après chargements/layout
    function recalc() {
      // getTotalLength peut dépendre du layout : on le reprend
      length = path.getTotalLength();
      path.style.strokeDasharray = String(length);
      update(); // première mise à jour cohérente
    }

    function update() {
      const doc = document.documentElement;
      const scrollTop = window.pageYOffset || doc.scrollTop || 0;

      // hauteur scrollable (protégée contre les 0 et arrondis)
      const scrollMax = Math.max(1, doc.scrollHeight - doc.clientHeight);
      const progress = Math.min(1, Math.max(0, scrollTop / scrollMax));

      const offset = length * (1 - progress);

      // clamp + évite 0 exact -> supprime la "cassure"
      path.style.strokeDashoffset = Math.max(0.0001, Math.min(length, offset)).toFixed(2);
    }

    // listeners
    window.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', recalc);
    window.addEventListener('orientationchange', recalc);
    window.addEventListener('load', recalc);

    // appels initiaux (double-tap pour couvrir les injections tardives)
    recalc();
    setTimeout(recalc, 0);
    setTimeout(recalc, 250);
  }
})();
