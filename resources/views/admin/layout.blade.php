<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Expense Tracker | Admin Dashboard')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href = "{{ asset('css/admin.css') }}" rel = "stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.querySelector('.menu-toggle');
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');

            menuToggle.addEventListener('click', () => {
                sidebar.classList.toggle('hidden');
                content.classList.toggle('shifted');
            });
        });
    </script>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-header"></div>
        <ul>
        <li><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Dashboard</a></li>
        <li><a href="{{ route('admin.users') }}"><i class="fas fa-users"></i> Users</a></li>
        <!-- ... -->
    </ul>
    </aside>
    @yield('content')
    <div class="navbar">
        <button class="menu-toggle"><i class="fas fa-bars"></i></button>
        <div class="user-info">
            <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i></a>
            <span>{{ Auth::user()->name }}</span>
        </div>
    </div>
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdownMenu');
            dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
