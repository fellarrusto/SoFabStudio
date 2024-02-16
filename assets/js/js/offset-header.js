document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        // Calcola l'altezza dell'header utilizzando l'ID 'header' e la classe 'navbar'
        const header = document.getElementById('header') || document.querySelector('.navbar');
        const headerHeight = header ? header.offsetHeight : 0;
        const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
        const offsetPosition = elementPosition - headerHeight; // Applica l'offset basato sull'altezza dell'header

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });
});
