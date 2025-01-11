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
            color: white;
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

        .logout-container {
            position: fixed;
            bottom: 20px;
            /* Jarak dari bawah */
            width: 250px;
            /* Sama dengan lebar sidebar */
            text-align: center;
            background-color: #343a40;
            /* Opsional, jika ingin sama dengan sidebar */
            padding: 10px 0;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .logout-container form {
            margin: 0;
        }

        .logout-container button {
            width: 90%;
            /* Opsional, agar lebih proporsional */
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <a href="<?php echo e(route('dashboard')); ?>">
            <h2 class="sidebar-title">DASHBOARD</h2>
        </a>
        <?php if(auth()->user()->id_role == 1): ?>
            <a href="<?php echo e(route('user.index')); ?>" class="<?php echo e(Request::is('user*') ? 'active' : ''); ?>">Kelola Staff</a>
            <?php endif; ?>
            <a href="<?php echo e(route('proyek.index')); ?>" class="<?php echo e(Request::is('proyek*') ? 'active' : ''); ?>">Kelola Proyek (Internal)</a>
            <a href="<?php echo e(route('proyek.indexPublik')); ?>" class="<?php echo e(Request::is('user*') ? 'active' : ''); ?>">Proyek: Publik</a>
    </div>

    <div class="logout-container">
        <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger btn-lg">
                <i class="fas fa-power-off"></i> Logout
            </button>
        </form>
    </div>


    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html>
<?php /**PATH D:\Gawe\cp-pt-csi\KomproCSI\resources\views/layouts/layoutdashboard.blade.php ENDPATH**/ ?>