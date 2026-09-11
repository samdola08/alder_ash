@extends('superadmin.layouts.master')
@section('page')

    <!-- START: Dashboard Header Banner -->
    <div class="page-header">
      <div>
        <h1 class="page-title">Super Admin Dashboard</h1>
        <p class="page-subtitle">Full control over platform roles, admins and system health.</p>
      </div>
      <button class="btn-date-picker" type="button" id="date-picker-trigger">
        <i class="bi bi-calendar4-event"></i>
        <span id="selected-date-range">January 12, 2026 - January 23, 2026</span>
        <i class="bi bi-chevron-down ms-1"></i>
      </button>
    </div>
    <!-- END: Dashboard Header Banner -->

    <!-- START: Main Layout Grid -->
    <div class="row g-4">

      <!-- TOP AREA: Quick Info Stat Cards Row (Full Width) -->
      <div class="col-12">
        <div class="row g-4">
          <!-- Stat Card 1: Platform status -->
          <div class="col-md-4">
            <div class="card alert-green-card">
              <div class="position-relative z-index-2">
                <span class="alert-green-badge">Update</span>
                <div class="alert-green-date">Feb 14th 2026</div>
                <div class="alert-green-text">Platform uptime 99.9% in the last 30 days</div>
              </div>
              <a href="#" class="alert-green-link z-index-2" id="alert-link-statistics">
                <span>See System Logs</span>
                <i class="bi bi-arrow-right"></i>
              </a>

              <svg class="alert-green-bg-shape" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(50,50)">
                  <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" />
                  <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" transform="rotate(60)" />
                  <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" transform="rotate(120)" />
                </g>
              </svg>
            </div>
          </div>

          <!-- Stat Card 2: Total Admins -->
          <div class="col-md-4">
            <div class="card card-stat d-flex flex-column justify-content-between">
              <div>
                <div class="card-header">
                  <span class="stat-label">Total Admins</span>
                  <div class="dropdown">
                    <button class="card-more-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                      aria-label="More Options" id="btn-more-admins">
                      <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                      <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-repeat"></i> Refresh</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-arrow-down"></i> Export
                          Report</a></li>
                    </ul>
                  </div>
                </div>
                <div class="stat-value">24</div>
                <div class="trend-badge trend-up">
                  <i class="bi bi-arrow-up-right"></i>
                  <span>+4 this month</span>
                </div>
              </div>
              <div class="sparkline-container sparkline-card-footer">
                <div id="income-sparkline"></div>
              </div>
            </div>
          </div>

          <!-- Stat Card 3: Active Customers -->
          <div class="col-md-4">
            <div class="card card-stat d-flex flex-column justify-content-between">
              <div>
                <div class="card-header">
                  <span class="stat-label">Active Customers</span>
                  <div class="dropdown">
                    <button class="card-more-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                      aria-label="More Options" id="btn-more-customers">
                      <i class="bi bi-three-dots"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                      <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-repeat"></i> Refresh</a></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-arrow-down"></i> Export
                          Report</a></li>
                    </ul>
                  </div>
                </div>
                <div class="stat-value">8,742</div>
                <div class="trend-badge trend-down">
                  <i class="bi bi-arrow-down-left"></i>
                  <span>-2% from last month</span>
                </div>
              </div>
              <div class="sparkline-container sparkline-card-footer">
                <div id="return-sparkline"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END: TOP AREA -->

      <!-- LEFT AREA: Primary Dashboard Stats & Tables -->
      <div class="col-xl-9 col-lg-8">

        <!-- START: Details Area (Transactions + Performance Charts) -->
        <div class="row g-4">
          <!-- Column: Revenue Chart (Full Width / Wider) -->
          <div class="col-12">
            <div class="card mb-0">
              <div class="card-header mb-2">
                <h2 class="card-title">Platform Revenue</h2>
                <div class="d-flex gap-3 align-items-center">
                  <div class="chart-legend-item">
                    <span class="legend-dot bg-forest-medium"></span>
                    <span class="chart-legend-label">Income</span>
                  </div>
                  <div class="chart-legend-item">
                    <span class="legend-dot bg-lime-accent"></span>
                    <span class="chart-legend-label">Expenses</span>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-baseline gap-2 mb-3">
                <span class="stat-value-amount">$196.000</span>
                <span class="trend-badge trend-up fs-xs">+35% from last month</span>
              </div>
              <div id="revenue-chart"></div>
            </div>
          </div>

          <!-- Column: Recent Role Changes -->
          <div class="col-md-7 d-flex flex-column">
            <div class="card h-100 flex-grow-1">
              <div class="card-header">
                <h2 class="card-title">Recent Role Changes</h2>
                <div class="dropdown">
                  <button class="card-more-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    aria-label="More Options" id="btn-more-roles">
                    <i class="bi bi-three-dots"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-funnel"></i> Filter Status</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-arrow-down"></i> Export CSV</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="transaction-list">
                <div class="transaction-item">
                  <div class="transaction-icon bg-forest-light text-lime">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <div class="transaction-info">
                    <div class="transaction-name">A. Hasan promoted to Admin</div>
                    <div class="transaction-date">Feb 14, 2026 • 12:40 PM</div>
                  </div>
                  <div class="transaction-amount text-main">Staff</div>
                </div>

                <div class="transaction-item">
                  <div class="transaction-icon bg-forest-light text-lime">
                    <i class="bi bi-person-dash"></i>
                  </div>
                  <div class="transaction-info">
                    <div class="transaction-name">Rafi Khan removed from Staff</div>
                    <div class="transaction-date">Feb 13, 2026 • 08:15 AM</div>
                  </div>
                  <div class="transaction-amount text-success">Admin</div>
                </div>

                <div class="transaction-item">
                  <div class="transaction-icon bg-forest-light text-lime">
                    <i class="bi bi-truck"></i>
                  </div>
                  <div class="transaction-info">
                    <div class="transaction-name">New Supplier onboarded</div>
                    <div class="transaction-date">Feb 11, 2026 • 04:30 PM</div>
                  </div>
                  <div class="transaction-amount text-success">Supplier</div>
                </div>

                <div class="transaction-item">
                  <div class="transaction-icon bg-forest-light text-lime">
                    <i class="bi bi-person-plus"></i>
                  </div>
                  <div class="transaction-info">
                    <div class="transaction-name">New Customer account</div>
                    <div class="transaction-date">Feb 09, 2026 • 09:20 AM</div>
                  </div>
                  <div class="transaction-amount text-main">Customer</div>
                </div>
              </div>

            </div>
          </div>

          <!-- Column: Role Distribution Progress -->
          <div class="col-md-5 d-flex flex-column">
            <div class="card h-100 flex-grow-1">
              <div class="card-header">
                <h2 class="card-title">Role Distribution</h2>
                <div class="dropdown">
                  <button class="card-more-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                    aria-label="More Options" id="btn-more-distribution">
                    <i class="bi bi-three-dots"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Manage</a></li>
                  </ul>
                </div>
              </div>

              <div class="progress-container">
                <div class="progress-label-row">
                  <span class="progress-label">Super Admins</span>
                  <span class="progress-value">2</span>
                </div>
                <div class="progress" role="progressbar" aria-label="Super Admin Progress" aria-valuenow="10"
                  aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar bg-brand-orange w-10"></div>
                </div>
              </div>

              <div class="progress-container">
                <div class="progress-label-row">
                  <span class="progress-label">Admins</span>
                  <span class="progress-value">24</span>
                </div>
                <div class="progress" role="progressbar" aria-label="Admin Progress" aria-valuenow="30"
                  aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar bg-lime-accent w-30"></div>
                </div>
              </div>

              <div class="progress-container">
                <div class="progress-label-row">
                  <span class="progress-label">Staff</span>
                  <span class="progress-value">186</span>
                </div>
                <div class="progress" role="progressbar" aria-label="Staff Progress" aria-valuenow="45"
                  aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar bg-lime-accent w-45"></div>
                </div>
              </div>

              <div class="progress-container">
                <div class="progress-label-row">
                  <span class="progress-label">Suppliers</span>
                  <span class="progress-value">58</span>
                </div>
                <div class="progress" role="progressbar" aria-label="Supplier Progress" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar bg-forest-medium w-25"></div>
                </div>
              </div>

              <div class="progress-container">
                <div class="progress-label-row">
                  <span class="progress-label">Customers</span>
                  <span class="progress-value">8,742</span>
                </div>
                <div class="progress" role="progressbar" aria-label="Customer Progress" aria-valuenow="85"
                  aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar bg-lime-accent w-85"></div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- END: Details Area -->

      </div>

      <!-- RIGHT AREA: Performance Details Sidebar Panel -->
      <div class="col-xl-3 col-lg-4">
        <div class="right-panel-wrapper d-flex flex-column gap-4 h-100">

          <!-- Performance Donut Chart card -->
          <div class="card flex-grow-1 d-flex flex-column justify-content-between mb-0">
            <div class="card-header mb-1">
              <h2 class="card-title">System Health</h2>
            </div>

            <div id="views-chart"></div>

            <div class="chart-legends-container">
              <div class="chart-legend-item">
                <span class="legend-dot bg-lime-accent"></span>
                <span class="text-muted-green">CPU</span>
              </div>
              <div class="chart-legend-item">
                <span class="legend-dot bg-forest-medium"></span>
                <span class="text-muted-green">Memory</span>
              </div>
              <div class="chart-legend-item">
                <span class="legend-dot bg-brand-orange"></span>
                <span class="text-muted-green">Storage</span>
              </div>
            </div>
          </div>

          <!-- Level Up Promotion CTA banner -->
          <div class="promo-banner-card">
            <svg class="promo-banner-bg-shape" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g transform="translate(50,50)">
                <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" />
                <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" transform="rotate(60)" />
                <rect x="-6" y="-45" width="12" height="90" rx="6" ry="6" fill="#B4F105" transform="rotate(120)" />
              </g>
            </svg>

            <h3 class="promo-title">Secure the platform at the next level.</h3>
            <p class="promo-desc">Review security policies and admin permissions.</p>
            <button class="btn-promo" id="btn-promo-action">Run Security Check</button>
          </div>
        </div>
      </div>
      <!-- END: RIGHT AREA -->

    </div>
    <!-- END: Main Layout Grid -->

@endsection