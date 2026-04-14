<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Admin</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-light">
        <div class="d-flex" style="min-height: 100vh;">
            <!-- Sidebar -->
            <nav class="bg-primary text-white" style="width: 250px; min-height: 100vh;">
                <div class="p-3 border-bottom border-primary-subtle">
                    <h5 class="mb-0 d-flex align-items-center">
                        <i class="bi bi-gear-fill me-2"></i>
                        Admin Panel
                    </h5>
                </div>
                <div class="p-3">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="{{ route('admin.index') }}" class="nav-link text-white {{ request()->routeIs('admin.index*') ? 'active bg-primary-subtle rounded' : '' }}">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                Contents
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="{{ route('admin.stories.index') }}" class="nav-link text-white {{ request()->routeIs('admin.stories*') ? 'active bg-primary-subtle rounded' : '' }}">
                                <i class="bi bi-book-fill me-2"></i>
                                Stories
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="{{ route('admin.quizzes.index') }}" class="nav-link text-white {{ request()->routeIs('admin.quizzes*') ? 'active bg-primary-subtle rounded' : '' }}">
                                <i class="bi bi-question-circle-fill me-2"></i>
                                Quizzes
                            </a>
                        </li>
                    </ul>
                    <hr class="my-3 border-primary-subtle">
                    <a href="{{ route('dashboard') }}" class="nav-link text-white-50">
                        <i class="bi bi-arrow-left-circle-fill me-2"></i>
                        Back to Dashboard
                    </a>
                </div>
            </nav>

            <!-- Main Content -->
            <div class="flex-grow-1 d-flex flex-column">
                @include('layouts.navigation')

                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white shadow-sm py-3 px-4 border-bottom">
                        <div class="container-fluid">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="flex-grow-1">
                    {{ $slot }}
                </main>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>