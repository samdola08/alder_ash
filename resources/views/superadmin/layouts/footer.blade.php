<footer class="footer-custom">
      <div class="footer-left">
        <span class="footer-logo">
          <i class="bi bi-shield-lock-fill"></i> Spark Super
        </span>
        <span class="footer-separator">|</span>
        <span class="footer-copy">&copy; 2026 Made with <i class="bi bi-heart-fill text-danger footer-heart"></i> by<a
            href="https://sparkadminpro.gumroad.com/" target="_blank">Spark Admin</a>• Distributed by <a
            href="https://www.themewagon.com/" target="_blank">ThemeWagon</a> </span>
      </div>
      <div class="footer-right">
        <ul class="footer-links">
          <li><a href="#" class="footer-link">Overview</a></li>
          <li><a href="#" class="footer-link">Statistics</a></li>
          <li><a href="#" class="footer-link">Help & Documentation</a></li>
          <li><a href="#" class="footer-link">Status <span class="status-dot"></span></a></li>
        </ul>
      </div>
    </footer>
    <!-- END: Footer Component -->

  </div>
  <!-- ==========================================
         END: Main Content Area
         ========================================== -->

  <!-- Local Third-Party Libraries Script dependencies -->
  <script src="{{ asset('backend/super-admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('backend/super-admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('backend/super-admin/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

  <!-- Local dashboard interactions controller -->
  <script src="{{ asset('backend/super-admin/assets/js/dashboard.js') }}"></script>

  <!-- Theme Toggle Controller -->
  <script>
    (function () {
      const root = document.documentElement;
      const btn = document.getElementById('theme-toggle');
      const iconDark = document.getElementById('theme-icon-dark');
      const iconLight = document.getElementById('theme-icon-light');
      const STORAGE_KEY = 'spark-theme';

      function apply(mode) {
        root.setAttribute('data-theme', mode);
        if (iconDark) iconDark.style.display = mode === 'dark' ? 'none' : 'inline-block';
        if (iconLight) iconLight.style.display = mode === 'dark' ? 'inline-block' : 'none';
      }

      const saved = localStorage.getItem(STORAGE_KEY);
      const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
      apply(saved || (systemDark ? 'dark' : 'light'));

      if (btn) {
        btn.addEventListener('click', function () {
          const next = (root.getAttribute('data-theme') === 'dark') ? 'light' : 'dark';
          apply(next);
          localStorage.setItem(STORAGE_KEY, next);
        });
      }
    })();
  </script>
</body>

</html>