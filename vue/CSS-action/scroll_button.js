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
      length = path.getTotalLength();
      path.style.strokeDasharray = String(length);
      update(); // première mise à jour cohérente
    }

    function update() {
      const doc = document.documentElement;
      const scrollTop = window.pageYOffset || doc.scrollTop || 0;
      const scrollMax = Math.max(1, doc.scrollHeight - doc.clientHeight);
      const progress = Math.min(1, Math.max(0, scrollTop / scrollMax));
      const offset = length * (1 - progress);

      path.style.strokeDashoffset = Math.max(0.0001, Math.min(length, offset)).toFixed(2);

      if (scrollTop > 100) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    }

    btn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    window.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', recalc);
    window.addEventListener('orientationchange', recalc);
    window.addEventListener('load', recalc);

    recalc();
    setTimeout(recalc, 0);
    setTimeout(recalc, 250);
  }
})();
