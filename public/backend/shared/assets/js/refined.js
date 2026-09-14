(function () {
  var root = document.documentElement;
  var toggle = document.getElementById('themeToggle');
  var icon = document.getElementById('themeIcon');

  var sunPath = '<circle cx="12" cy="12" r="4.5"/><path d="M12 2v2.5M12 19.5V22M4.2 4.2l1.8 1.8M18 18l1.8 1.8M2 12h2.5M19.5 12H22M4.2 19.8 6 18M18 6l1.8-1.8"/>';
  var moonPath = '<path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8Z"/>';

  function setTheme(mode) {
    root.setAttribute('data-theme', mode);
    if (icon) icon.innerHTML = mode === 'dark' ? moonPath : sunPath;
    localStorage.setItem('refined-theme', mode);
  }

  if (toggle) {
    toggle.addEventListener('click', function () {
      var current = root.getAttribute('data-theme');
      setTheme(current === 'dark' ? 'light' : 'dark');
    });
  }

  var saved = localStorage.getItem('refined-theme');
  var systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  setTheme(saved || (systemDark ? 'dark' : 'light'));
})();