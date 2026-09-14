<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/supplier/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/supplier/assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/supplier/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/supplier/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/supplier/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('backend/supplier/assets/images/favicon.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('backend/shared/assets/css/refined.css') }}">
    <style>
        #main.refined-main { padding: 0; }
        #main.refined-main > .refined-wrap { max-width: none; margin: 0; }
        #main.refined-main .page { max-width: none; }
        #main.refined-main .card { display: block; flex-direction: unset; }
        #main.refined-main .stat-card { display: flex; flex-direction: row; }
        #main.refined-main .profile-card { display: flex; flex-direction: row; }
        #main.refined-main .msg-item { display: flex; flex-direction: row; }
        #main.refined-main .comment-row { display: flex; flex-direction: row; }
        #main.refined-main .topbar { display: flex; flex-direction: row; align-items: center; }
        #main.refined-main .topbar-right { display: flex; flex-direction: row; align-items: center; }
        #main.refined-main .bars { display: flex; flex-direction: row; }
        #main.refined-main .bar-col { display: flex; flex-direction: column; }
        #main.refined-main .region-row { display: flex; flex-direction: row; align-items: center; }
        #main.refined-main .donut-wrap { display: flex; flex-direction: row; align-items: center; }

        html[data-theme="dark"] .sidebar-wrapper { background-color: var(--bg-sidebar); }
        html[data-theme="dark"] .sidebar-wrapper .menu .sidebar-title { color: var(--text-secondary); }
        html[data-theme="dark"] .sidebar-wrapper .menu .sidebar-link { color: var(--text-primary); }
        html[data-theme="dark"] .sidebar-wrapper .menu .sidebar-link i,
        html[data-theme="dark"] .sidebar-wrapper .menu .sidebar-link svg { color: var(--text-secondary); }
        html[data-theme="dark"] .sidebar-wrapper .menu .sidebar-link:hover { background-color: var(--bg-input); }
        html[data-theme="dark"] .sidebar-wrapper .menu .sidebar-item.active .sidebar-link { background-color: var(--accent); }
        html[data-theme="dark"] .sidebar-wrapper .menu .sidebar-item.active .sidebar-link span { color: #fff; }
        html[data-theme="dark"] .sidebar-wrapper .menu .submenu .submenu-item.active > a { color: var(--accent); }
        html[data-theme="dark"] .sidebar-wrapper .menu .submenu .submenu-item a { color: var(--text-primary); }
        html[data-theme="dark"] .sidebar-toggler.btn { color: var(--text-primary); }
        html[data-theme="dark"] .sidebar-wrapper .ps__rail-y,
        html[data-theme="dark"] .sidebar-wrapper .ps__rail-x { background-color: transparent; }
        html[data-theme="dark"] .sidebar-wrapper .ps__thumb-y,
        html[data-theme="dark"] .sidebar-wrapper .ps__thumb-x { background-color: var(--border); }
        html[data-theme="dark"] .sidebar-wrapper .ps__thumb-y:hover,
        html[data-theme="dark"] .sidebar-wrapper .ps__thumb-x:hover { background-color: var(--text-tertiary); }
        html[data-theme="dark"] .sidebar-wrapper::-webkit-scrollbar { width: 6px; }
        html[data-theme="dark"] .sidebar-wrapper::-webkit-scrollbar-track { background: transparent; }
        html[data-theme="dark"] .sidebar-wrapper::-webkit-scrollbar-thumb { background: var(--border); border-radius: 3px; }
    </style>
</head>