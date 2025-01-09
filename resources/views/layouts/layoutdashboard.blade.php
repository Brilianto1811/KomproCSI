{{-- <!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .sidebar-title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            border-bottom: 1px solid #34495e;
            padding-bottom: 10px;
        }

        .sidebar nav ul {
            list-style: none;
            padding: 0;
        }

        .sidebar nav ul li {
            margin: 10px 0;
        }

        .sidebar nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .sidebar nav ul li a:hover,
        .sidebar nav ul li a.active {
            background-color: #34495e;
        }

        .content {
            flex: 1;
            padding: 20px;
            background-color: white;
            overflow-y: auto;
        }

        .content h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .content p {
            color: #555;
            line-height: 1.6;
        }

        .alert {
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .btn {
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #117a8b;
        }

        .btn-warning {
            background-color: #ffc107;
            color: black;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #bd2130;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table thead {
            background-color: #343a40;
            color: white;
        }

        .table thead th {
            padding: 10px;
            text-align: left;
        }

        .table tbody tr {
            border-bottom: 1px solid #e9ecef;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .table tbody td {
            padding: 10px;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table tbody td:last-child {
            text-align: center;
        }

        form {
            display: inline;
        }
    </style>
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <h2 class="sidebar-title">Dashboard</h2>
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('user.index') }}"
                            class="{{ request()->routeIs('user.index') ? 'active' : '' }}">
                            Kelola Staff
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('proyek.index') }}"
                            class="{{ request()->routeIs('proyek.index') ? 'active' : '' }}">
                            Kelola Proyek
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="content">
            @yield('content')
        </main>
    </div>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar-title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            border-bottom: 1px solid #34495e;
            padding-bottom: 10px;
        }

        .sidebar a {
            display: block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .sidebar .active {
            background-color: #007bff;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .alert {
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .btn {
            padding: 8px 12px;
            font-size: 14px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #117a8b;
        }

        .btn-warning {
            background-color: #ffc107;
            color: black;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #bd2130;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .table thead {
            background-color: #343a40;
            color: white;
        }

        .table thead th {
            padding: 10px;
            text-align: left;
        }

        .table tbody tr {
            border-bottom: 1px solid #e9ecef;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .table tbody td {
            padding: 10px;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table tbody td:last-child {
            text-align: center;
        }

        form {
            display: inline;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2 class="sidebar-title">DASHBOARD</h2>
        <a href="{{ route('user.index') }}" class="{{ Request::is('user*') ? 'active' : '' }}">Kelola Staff</a>
        <a href="{{ route('proyek.index') }}" class="{{ Request::is('proyek*') ? 'active' : '' }}">Kelola Proyek</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>
