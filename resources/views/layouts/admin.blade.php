<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kids Edu') }} - Admin</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800;900&family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --sidebar-bg: #1a1a1a;
            --charcoal: #212529;
            --gold: #ffc107;
            --sidebar-w: 250px;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #f4f6f9;
        }

        /* ================================
           SIDEBAR
        ================================ */
        .admin-sidebar {
            width: var(--sidebar-w);
            min-height: 100vh;
            background-color: var(--sidebar-bg);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            flex-direction: column;
        }

        .sidebar-brand {
            color: var(--gold) !important;
            font-family: 'Outfit', sans-serif;
            font-weight: 900;
            font-size: 1.4rem;
            text-decoration: none;
            letter-spacing: -0.02em;
        }

        .sidebar-divider {
            border-color: rgba(255,255,255,0.07) !important;
        }

        .nav-item .nav-link {
            color: rgba(255,255,255,0.65);
            font-weight: 600;
            font-size: 0.875rem;
            padding: 0.75rem 1.5rem;
            border-radius: 0;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .nav-item .nav-link:hover {
            color: #fff;
            background-color: rgba(255,255,255,0.05);
        }

        .nav-item .nav-link.active {
            color: #fff;
        }

        .nav-item .nav-link.active i {
            color: var(--gold);
        }

        .nav-link-danger { color: #f87171 !important; }

        /* ================================
           MAIN CONTENT
        ================================ */
        .admin-main {
            margin-left: var(--sidebar-w);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ================================
           TOPBAR
        ================================ */
        .admin-topbar {
            height: 60px;
            background: #fff;
            border-bottom: 2px solid #e9ecef;
            position: sticky;
            top: 0;
            z-index: 900;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1.5rem;
        }

        .topbar-title {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.05rem;
            color: #212529;
        }

        .admin-avatar {
            width: 38px;
            height: 38px;
            background-color: var(--gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            font-size: 1rem;
        }

        /* ================================
           CARDS
        ================================ */
        .admin-card {
            border-radius: 0.5rem;
            border: 1px solid #dee2e6;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        .admin-card-header {
            background-color: var(--charcoal);
            color: #fff;
            padding: 0.75rem 1.25rem;
            font-weight: 700;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .admin-card-body { padding: 1.25rem; }

        /* ================================
           TABLES
        ================================ */
        .admin-table th {
            background-color: #f8f9fa;
            font-size: 0.7rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #6c757d;
            border-bottom: 2px solid #dee2e6;
        }

        .admin-table td { vertical-align: middle; font-size: 0.875rem; }

        /* ================================
           ACTION BUTTONS
        ================================ */
        .btn-action {
            width: 30px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            font-size: 0.75rem;
            border: none;
            cursor: pointer;
            transition: opacity 0.2s;
        }
        .btn-action:hover { opacity: 0.85; }
        .btn-action-view { background-color: #0dcaf0; color: #fff; }
        .btn-action-edit { background-color: var(--gold); color: #000; }
        .btn-action-delete { background-color: #dc3545; color: #fff; }

        /* ================================
           FORM LABELS
        ================================ */
        .form-label-sm {
            font-size: 0.7rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #6c757d;
        }

        /* ================================
           FOOTER
        ================================ */
        .admin-footer {
            background: #fff;
            border-top: 1px solid #dee2e6;
            padding: 1rem 1.5rem;
            text-align: center;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: #adb5bd;
        }

        /* Sidebar toggle for mobile */
        @media (max-width: 991.98px) {
            .admin-sidebar { transform: translateX(-100%); transition: transform 0.3s; }
            .admin-sidebar.show { transform: translateX(0); }
            .admin-main { margin-left: 0; }
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <aside class="admin-sidebar" id="adminSidebar">
        <!-- Brand -->
        <div class="p-4 border-bottom sidebar-divider">
            <a href="/admin" class="sidebar-brand">Kids Edu</a>
        </div>

        <!-- Nav -->
        <nav class="flex-grow-1 mt-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="bi bi-display"></i> Visit Site
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.stories.index') }}" class="nav-link {{ request()->routeIs('admin.stories*') ? 'active' : '' }}">
                        <i class="bi bi-journal-text"></i> Stories
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.quizzes.index') }}" class="nav-link {{ request()->routeIs('admin.quizzes*') ? 'active' : '' }}">
                        <i class="bi bi-patch-question"></i> Quizzes
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}" class="nav-link {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
                        <i class="bi bi-person-badge"></i> Profile
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Footer Link -->
        <div class="border-top sidebar-divider p-3">
            <a href="/" class="nav-link nav-link-danger">
                <i class="bi bi-box-arrow-left"></i> Exit Console
            </a>
        </div>
    </aside>

    <!-- Main Wrapper -->
    <div class="admin-main flex-grow-1">
        <!-- Topbar -->
        <header class="admin-topbar">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-sm btn-outline-secondary d-lg-none" id="sidebarToggle">
                    <i class="bi bi-list fs-5"></i>
                </button>
                <span class="topbar-title">{{ $header ?? 'Admin Dashboard' }}</span>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="admin-avatar">
                    <i class="bi bi-person-fill"></i>
                </div>
                <span class="fw-bold text-muted" style="font-size: 0.875rem;">Admin</span>
            </div>
        </header>

        <!-- Content -->
        <main class="flex-grow-1 p-4">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="admin-footer">
            &copy; {{ date('Y') }} Kids Edu Admin Console
        </footer>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Sidebar toggle for mobile
    const sidebarToggle = document.getElementById('sidebarToggle');
    const adminSidebar = document.getElementById('adminSidebar');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', () => {
            adminSidebar.classList.toggle('show');
        });
    }
</script>
</body>
</html>