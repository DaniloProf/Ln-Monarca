document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = e.target.getAttribute('href');
      document.querySelector(targetId).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    });
  });