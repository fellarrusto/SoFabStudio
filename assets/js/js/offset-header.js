document.addEventListener('DOMContentLoaded', () => {
  const scrollToTarget = (targetId) => {
    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      const header = document.getElementById('header') || document.querySelector('.navbar');
      const headerHeight = header ? header.offsetHeight : 0;
      const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

      window.scrollTo({
        top: elementPosition,
        behavior: 'smooth'
      });
    }
  };

  // Gestione click su anchor link
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      scrollToTarget(this.getAttribute('href'));
    });
  });

  // Gestione navigazione diretta tramite URL
  if (window.location.hash) {
    setTimeout(() => scrollToTarget(window.location.hash), 0);
  }
});
