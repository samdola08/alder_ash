@extends('staff.layouts.master')
@section('page')

    <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Overview</p>
                <h1 class="h3 mb-1">Staff Dashboard</h1>
                <p class="text-muted mb-0">Monitor daily operations, orders, and inventory from one clean workspace.</p>
              </div>
            </div>
            <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
          </div>

          <section class="row g-3 mt-1" aria-label="Staff metrics">
            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-primary">
                <div class="metric-top">
                  <span class="metric-label">Today Orders</span>
                  <span class="metric-icon"><i class="bi bi-bag-check" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">128</div>
                <div class="metric-meta">
                  <span class="text-success">+9.4%</span>
                  <span>from yesterday</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-success">
                <div class="metric-top">
                  <span class="metric-label">Revenue</span>
                  <span class="metric-icon"><i class="bi bi-currency-dollar" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">$12,480</div>
                <div class="metric-meta">
                  <span class="text-success">+6.2%</span>
                  <span>this week</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-warning">
                <div class="metric-top">
                  <span class="metric-label">Items Shipped</span>
                  <span class="metric-icon"><i class="bi bi-box-seam" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">642</div>
                <div class="metric-meta">
                  <span class="text-success">+3.5%</span>
                  <span>units shipped</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-danger">
                <div class="metric-top">
                  <span class="metric-label">Pending Shipments</span>
                  <span class="metric-icon"><i class="bi bi-truck" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">24</div>
                <div class="metric-meta">
                  <span class="text-danger">4 urgent</span>
                  <span>need dispatch</span>
                </div>
              </article>
            </div>
          </section>

          <section class="row g-3 mt-1">
            <div class="col-12 col-xl-8">
              <div class="panel">
                <div class="panel-header">
                  <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-graph-up-arrow" aria-hidden="true"></i><span>Sales Performance</span></h2>
                    <p class="text-muted mb-0">Weekly revenue compared with operational targets.</p>
                  </div>
                </div>

                <div class="chart-bars" aria-label="Sales performance chart">
                  <div class="chart-column bar-42"><span></span><small>Jan</small></div>
                  <div class="chart-column bar-58"><span></span><small>Feb</small></div>
                  <div class="chart-column bar-51"><span></span><small>Mar</small></div>
                  <div class="chart-column bar-72"><span></span><small>Apr</small></div>
                  <div class="chart-column bar-66"><span></span><small>May</small></div>
                  <div class="chart-column bar-83"><span></span><small>Jun</small></div>
                </div>
              </div>
            </div>

            <div class="col-12 col-xl-4">
              <div class="panel h-100">
                <div class="panel-header">
                  <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-activity" aria-hidden="true"></i><span>Recent Activity</span></h2>
                    <p class="text-muted mb-0">Latest operational updates.</p>
                  </div>
                </div>

                <div class="activity-list">
                  <div class="activity-item"><span class="activity-dot bg-primary"></span><div><p class="mb-1 fw-semibold">Order #1042 confirmed</p><p class="text-muted small mb-0">Payment cleared for order 1042.</p></div></div>
                  <div class="activity-item"><span class="activity-dot bg-success"></span><div><p class="mb-1 fw-semibold">Stock restocked</p><p class="text-muted small mb-0">332 units added to inventory.</p></div></div>
                  <div class="activity-item"><span class="activity-dot bg-warning"></span><div><p class="mb-1 fw-semibold">Shipment delayed</p><p class="text-muted small mb-0">Courier rescheduled for tomorrow.</p></div></div>
                </div>
              </div>
            </div>
          </section>

          <section class="panel mt-3">
            <div class="panel-header">
              <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-cart-check" aria-hidden="true"></i><span>Recent Orders</span></h2>
                <p class="text-muted mb-0">Latest orders requiring attention.</p>
              </div>
              <a class="btn btn-outline-secondary btn-sm" href="">View All Orders</a>
            </div>
            <div class="table-responsive">
              <table class="table align-middle mb-0">
                <thead><tr><th scope="col">Order</th><th scope="col">Customer</th><th scope="col">Items</th><th scope="col">Total</th><th scope="col">Status</th><th scope="col" class="text-end">Action</th></tr></thead>
                <tbody>
                  <tr>
                    <td>#1042</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="{{ asset('admin/assets/images/avatar/avatar-1.jpg') }}" alt="Sarah Ahmed">
                        <div>
                          <p class="fw-semibold mb-0">Sarah Ahmed</p>
                          <p class="text-muted small mb-0">sarah@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>3 items</td>
                    <td>$86.40</td>
                    <td><span class="badge text-bg-success">Paid</span></td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="">Details</a></td>
                  </tr>
                  <tr>
                    <td>#1041</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="{{ asset('admin/assets/images/avatar/avatar-2.jpg') }}" alt="Rafi Khan">
                        <div>
                          <p class="fw-semibold mb-0">Rafi Khan</p>
                          <p class="text-muted small mb-0">rafi@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>1 item</td>
                    <td>$32.00</td>
                    <td><span class="badge text-bg-warning">Pending</span></td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="">Details</a></td>
                  </tr>
                  <tr>
                    <td>#1040</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="{{ asset('admin/assets/images/avatar/avatar-3.jpg') }}" alt="Nadia Islam">
                        <div>
                          <p class="fw-semibold mb-0">Nadia Islam</p>
                          <p class="text-muted small mb-0">nadia@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>5 items</td>
                    <td>$214.75</td>
                    <td><span class="badge text-bg-info">Shipped</span></td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="">Details</a></td>
                  </tr>
                  <tr>
                    <td>#1039</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="{{ asset('admin/assets/images/avatar/avatar-4.jpg') }}" alt="Mina Torres">
                        <div>
                          <p class="fw-semibold mb-0">Mina Torres</p>
                          <p class="text-muted small mb-0">mina@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>2 items</td>
                    <td>$54.00</td>
                    <td><span class="badge text-bg-secondary">Cancelled</span></td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="">Details</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
@endsection