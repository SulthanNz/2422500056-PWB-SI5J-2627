<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= isset($title) ? html_escape($title) : 'Klinik Dokter Depun' ?></title>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
    <style>
    html,
    body {
        min-height: 100%;
        margin: 0;
    }

    body.sidebar-mini .wrapper {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    body.sidebar-mini .content-wrapper {
        flex: 1 0 auto;
        min-height: auto !important;
    }

    body.sidebar-mini .main-footer {
        flex-shrink: 0;
        margin-top: auto;
    }
    </style>

    <!-- Perbaikan posisi footer -->
    <style>
        html,
        body {
            min-height: 100%;
        }

        body.sidebar-mini .wrapper {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            flex: 1 0 auto;
            min-height: 0;
        }

        .main-footer {
            flex-shrink: 0;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= site_url('admin') ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->