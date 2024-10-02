if (window.location.pathname === '/portfolio.html') {
  // filters
  const filters = ['tutto', 'fotografia', 'social', 'grafica', 'web', 'altro'];

  const updateClassPortfolio = (activeElement) => {
    document.querySelectorAll('.nav-link.text-nowrap').forEach(link => {
      link.className = 'nav-link text-nowrap';
    });

    activeElement.className = 'nav-link text-nowrap active';
  }

  function showAllPortfolio() {
    var elements = document.querySelectorAll('.tutto');
    
    elements.forEach(function(element) {
      element.style.display = 'block';
    });
  }

  function showFilterPortfolio(className) {
    var elements = document.querySelectorAll(`.tutto:not(.${className})`);
    
    elements.forEach(function(element) {
      element.style.display = 'none';
    });
  }

  filters.forEach(filter => {
    const element = document.getElementById(filter);
    
    element.addEventListener('click', () => {
      updateClassPortfolio(element);

      showAllPortfolio();
      
      if (filter !== 'tutto') {
        showFilterPortfolio(filter);
      }
    });
  });

  // apply filter from URL parameter
  const urlParams = new URLSearchParams(window.location.search);
  const filter = urlParams.get('filter');

  if (filter && filters.includes(filter)) {
    document.getElementById(filter).click();
  }
}