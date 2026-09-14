@extends('supplier.layouts.master')
@section('page')
    <div id="main" class="refined-main">
        @include('supplier.layouts.topbar')

        <div class="refined-wrap">
          <div class="page">
            <div class="page-head">
                <div>
                  <h1>Profile Statistics</h1>
                  <div class="page-sub">Here's what's happening with your profile today.</div>
                </div>
            </div>

            <div class="stat-grid">
                <div class="card stat-card">
                  <div class="stat-icon" style="background:var(--accent-soft);color:var(--accent);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                  </div>
                  <div><div class="stat-label">Profile Views</div><div class="stat-value">112,000</div></div>
                </div>
                <div class="card stat-card">
                  <div class="stat-icon" style="background:var(--accent-2-soft);color:var(--accent-2);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                  </div>
                  <div><div class="stat-label">Followers</div><div class="stat-value">183,000</div></div>
                </div>
                <div class="card stat-card">
                  <div class="stat-icon" style="background:var(--accent-2-soft);color:var(--accent-2);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M19 8v6M22 11h-6"/></svg>
                  </div>
                  <div><div class="stat-label">Following</div><div class="stat-value">80,000</div></div>
                </div>
                <div class="card stat-card">
                  <div class="stat-icon" style="background:var(--accent-3-soft);color:var(--accent-3);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21 12 16l-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16Z"/></svg>
                  </div>
                  <div><div class="stat-label">Saved Post</div><div class="stat-value">112</div></div>
                </div>
                <div class="card profile-card">
                  <div class="avatar">JD</div>
                  <div><div class="name">John Duck</div><div class="handle">@johnducky</div></div>
                  <div class="verify"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 12 2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg></div>
                </div>
            </div>

            <div class="main-grid">
                <div class="card">
                  <div class="card-head">
                    <div class="card-title">Profile Visit</div>
                    <div class="card-meta">This year · <b>+18.2%</b></div>
                  </div>
                  <div class="bars">
                    <div class="bar-col"><div class="bar" style="height:25%"></div><div class="bar-month">Jan</div></div>
                    <div class="bar-col"><div class="bar" style="height:52%"></div><div class="bar-month">Feb</div></div>
                    <div class="bar-col"><div class="bar peak" style="height:90%"></div><div class="bar-month">Mar</div></div>
                    <div class="bar-col"><div class="bar" style="height:53%"></div><div class="bar-month">Apr</div></div>
                    <div class="bar-col"><div class="bar" style="height:22%"></div><div class="bar-month">May</div></div>
                    <div class="bar-col"><div class="bar" style="height:50%"></div><div class="bar-month">Jun</div></div>
                    <div class="bar-col"><div class="bar peak" style="height:88%"></div><div class="bar-month">Jul</div></div>
                    <div class="bar-col"><div class="bar" style="height:48%"></div><div class="bar-month">Aug</div></div>
                    <div class="bar-col"><div class="bar" style="height:30%"></div><div class="bar-month">Sep</div></div>
                    <div class="bar-col"><div class="bar" style="height:56%"></div><div class="bar-month">Oct</div></div>
                    <div class="bar-col"><div class="bar peak" style="height:85%"></div><div class="bar-month">Nov</div></div>
                    <div class="bar-col"><div class="bar" style="height:47%"></div><div class="bar-month">Dec</div></div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-head"><div class="card-title">Recent Messages</div></div>
                  <div class="msg-item"><div class="avatar sm" style="background:linear-gradient(135deg,#f2578a,#f7b1c6)">HS</div><div><div class="name">Hank Schrader</div><div class="handle">@hanks</div></div></div>
                  <div class="msg-item"><div class="avatar sm" style="background:linear-gradient(135deg,#5b5ff0,#8f92ff)">DW</div><div><div class="name">Dean Winchester</div><div class="handle">@imdean</div></div></div>
                  <div class="msg-item"><div class="avatar sm" style="background:linear-gradient(135deg,#22b8cf,#7fe3ef)">JD</div><div><div class="name">John Dodol</div><div class="handle">@dodoljohn</div></div></div>
                  <button class="start-btn">Start Conversation</button>
                </div>
            </div>

            <div class="bottom-grid">
                <div class="card">
                  <div class="card-title">Profile Visit</div>
                  <div class="sparkline-value">862</div>
                  <div class="region-row"><span class="region-dot"></span>Europe · this week</div>
                </div>
                <div class="card">
                  <div class="card-head"><div class="card-title">Latest Comments</div></div>
                  <div class="comment-row">
                    <div class="avatar sm" style="background:linear-gradient(135deg,#9b6cf2,#c79bff)">SC</div>
                    <div><div class="name">Si Cantik</div><div class="text">Congratulations on your graduation!</div></div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-title" style="margin-bottom:16px;">Visitors Profile</div>
                  <div class="donut-wrap">
                    <div class="donut"><div class="donut-center">565K</div></div>
                    <div>
                      <div class="legend-item"><span class="legend-dot" style="background:var(--accent)"></span>Returning · 70%</div>
                      <div class="legend-item"><span class="legend-dot" style="background:var(--accent-2)"></span>New · 30%</div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection