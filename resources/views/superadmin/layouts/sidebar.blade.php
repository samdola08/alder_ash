<div class="sidebar-wrapper" id="sidebar">
    <!-- Brand Logo / Identity -->
    <a href="{{ url('/super-admin') }}" class="sidebar-brand">
      <i class="bi bi-shield-lock-fill"></i>
      <span>Spark Super</span>
    </a>

    <!-- Navigation Menu -->
    <div class="flex-grow-1 overflow-y-auto">
      <!-- Group: Menu -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">Menu</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="{{ url('/super-admin') }}" class="sidebar-menu-link active" id="menu-overview" title="Overview">
              <i class="bi bi-grid-fill"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" id="menu-superadmins" title="Super Admins">
              <i class="bi bi-person-gear"></i>
              <span>Super Admins</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" id="menu-admins" title="Admins">
              <i class="bi bi-person-badge"></i>
              <span>Admins</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Group: Roles -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">Roles</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" id="menu-staff" title="Staff">
              <i class="bi bi-people"></i>
              <span>Staff</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" id="menu-suppliers" title="Suppliers">
              <i class="bi bi-truck"></i>
              <span>Suppliers</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" id="menu-customers" title="Customers">
              <i class="bi bi-person-check"></i>
              <span>Customers</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Group: Settings -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">Settings</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" id="menu-plugins" title="Plugins">
              <i class="bi bi-plug"></i>
              <span>Plugins</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a href="#" class="sidebar-menu-link" id="menu-system-logs" title="System Logs">
              <i class="bi bi-terminal"></i>
              <span>System Logs</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Sidebar Profile Card (Dynamic Footer) -->
    <div class="sidebar-profile">
      <img src="{{ asset('super-admin/assets/images/avatar.png') }}" alt="Super Administrator" class="sidebar-profile-img">
      <div class="sidebar-profile-info">
        <div class="sidebar-profile-name">Super Administrator</div>
        <div class="sidebar-profile-email">superadmin@email.com</div>
      </div>
    </div>
  </div>