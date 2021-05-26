<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/b-1.7.0/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/b-1.7.0/datatables.min.js"></script>
    <title><?php esc($title) ?></title>
</head>

<body>
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link <?= $active_menu  == 'divelog' ? 'active' : '' ?>" href="<?php echo base_url('/divelog') ?>">Dive Log</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active_menu == 'place' ? 'active' : '' ?>" href="<?php echo base_url('/place') ?>">Dive Sites</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= uri_string(true) == 'country' ? 'active' : '' ?>" href="<?php echo base_url('/country') ?>">Dive Countries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= uri_string(true) == 'equipment' ? 'active' : '' ?>" href="<?php echo base_url('/equipment') ?>">Dive Equipment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/statistics') ?>">Dive Statistics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>