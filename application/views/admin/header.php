<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>DN19 | <?= $title ?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('theme/') ?>assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url('theme/') ?>assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('theme/') ?>assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url('theme/') ?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url('theme/') ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url('theme/') ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo base_url('theme/') ?>assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url('theme/') ?>assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="<?php echo base_url('theme/') ?>assets/img/logo/logo_dn19.png" height="60" alt="">
              </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner pt-3">
            <!-- Dashboard -->
            <li class="menu-item  <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/page/dashboard')){ echo 'active';} ?>">
              <a href="<?= base_url('page/dashboard') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Kompetisi Umum</span>
            </li>

            <!-- Layouts -->
            <li class="menu-item  <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/tipografi/setting') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/tipografi/pending') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/tipografi/tolak') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/tipografi/aktif')){ echo 'active open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle ">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Layouts">Tipografi</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/tipografi/setting')){ echo 'active';} ?>">
                  <a href="<?= base_url('tipografi/setting') ?>" class="menu-link ">
                    <div data-i18n="Without menu">Setting</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/tipografi/pending')){ echo 'active';} ?>">
                  <a href="<?= base_url('tipografi/pending') ?>" class="menu-link ">
                    <div data-i18n="Without navbar">Pending</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/tipografi/aktif')){ echo 'active';} ?>">
                  <a href="<?= base_url('tipografi/aktif') ?>" class="menu-link ">
                    <div data-i18n="Container">Aktif</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/tipografi/tolak')){ echo 'active';} ?>">
                  <a href="<?= base_url('tipografi/tolak') ?>" class="menu-link ">
                    <div data-i18n="Fluid">Tolak</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/desain_poster/setting') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/desain_poster/pending') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/desain_poster/tolak') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/desain_poster/aktif')){ echo 'active open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Layouts">Desain Poster</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/desain_poster/setting')){ echo 'active';} ?>">
                  <a href="<?= base_url('desain_poster/setting') ?>" class="menu-link">
                    <div data-i18n="Without menu">Setting</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/desain_poster/pending')){ echo 'active';} ?>">
                  <a href="<?= base_url('desain_poster/pending') ?>" class="menu-link">
                    <div data-i18n="Without navbar">Pending</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/desain_poster/aktif')){ echo 'active';} ?>">
                  <a href="<?= base_url('desain_poster/aktif') ?>" class="menu-link">
                    <div data-i18n="Container">Aktif</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/desain_poster/tolak')){ echo 'active';} ?>">
                  <a href="<?= base_url('desain_poster/tolak') ?>" class="menu-link">
                    <div data-i18n="Fluid">Tolak</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/videografi/setting') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/videografi/pending') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/videografi/tolak') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/videografi/aktif')){ echo 'active open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Layouts">Videografi</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/videografi/setting')){ echo 'active';} ?>">
                  <a href="<?= base_url('videografi/setting') ?>" class="menu-link">
                    <div data-i18n="Without menu">Setting</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/videografi/pending')){ echo 'active';} ?>">
                  <a href="<?= base_url('videografi/pending') ?>" class="menu-link">
                    <div data-i18n="Without navbar">Pending</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/videografi/aktif')){ echo 'active';} ?>">
                  <a href="<?= base_url('videografi/aktif') ?>" class="menu-link">
                    <div data-i18n="Container">Aktif</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/videografi/tolak')){ echo 'active';} ?>">
                  <a href="<?= base_url('videografi/tolak') ?>" class="menu-link">
                    <div data-i18n="Fluid">Tolak</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/problem_solving_coding/setting') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/problem_solving_coding/pending') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/problem_solving_coding/tolak') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/problem_solving_coding/aktif')){ echo 'active open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Layouts">Problem Solving Coding</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/problem_solving_coding/setting')){ echo 'active';} ?>">
                  <a href="<?= base_url('problem_solving_coding/setting') ?>" class="menu-link">
                    <div data-i18n="Without menu">Setting</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/problem_solving_coding/pending')){ echo 'active';} ?>">
                  <a href="<?= base_url('problem_solving_coding/pending') ?>" class="menu-link">
                    <div data-i18n="Without navbar">Pending</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/problem_solving_coding/aktif')){ echo 'active';} ?>">
                  <a href="<?= base_url('problem_solving_coding/aktif') ?>" class="menu-link">
                    <div data-i18n="Container">Aktif</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/problem_solving_coding/tolak')){ echo 'active';} ?>">
                  <a href="<?= base_url('problem_solving_coding/tolak') ?>" class="menu-link">
                    <div data-i18n="Fluid">Tolak</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pubgm/setting') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pubgm/pending') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pubgm/tolak') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pubgm/aktif')){ echo 'active open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Layouts">PUBGM</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pubgm/setting')){ echo 'active';} ?>">
                  <a href="<?= base_url('pubgm/setting') ?>" class="menu-link">
                    <div data-i18n="Without menu">Setting</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pubgm/pending')){ echo 'active';} ?>">
                  <a href="<?= base_url('pubgm/pending') ?>" class="menu-link">
                    <div data-i18n="Without navbar">Pending</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pubgm/aktif')){ echo 'active';} ?>">
                  <a href="<?= base_url('pubgm/aktif') ?>" class="menu-link">
                    <div data-i18n="Container">Aktif</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/pubgm/tolak')){ echo 'active';} ?>">
                  <a href="<?= base_url('pubgm/tolak') ?>" class="menu-link">
                    <div data-i18n="Fluid">Tolak</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/free_fire/setting') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/free_fire/pending') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/free_fire/tolak') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/free_fire/aktif')){ echo 'active open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Layouts">Free Fire</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/free_fire/setting')){ echo 'active';} ?>">
                  <a href="<?= base_url('free_fire/setting') ?>" class="menu-link">
                    <div data-i18n="Without menu">Setting</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/free_fire/pending')){ echo 'active';} ?>">
                  <a href="<?= base_url('free_fire/pending') ?>" class="menu-link">
                    <div data-i18n="Without navbar">Pending</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/free_fire/aktif')){ echo 'active';} ?>">
                  <a href="<?= base_url('free_fire/aktif') ?>" class="menu-link">
                    <div data-i18n="Container">Aktif</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/free_fire/tolak')){ echo 'active';} ?>">
                  <a href="<?= base_url('free_fire/tolak') ?>" class="menu-link">
                    <div data-i18n="Fluid">Tolak</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Kompetisi Mahasiswa</span>
            </li>

            <!-- Layouts -->
            <li class="menu-item  <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/cipta_puisi/setting') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/cipta_puisi/pending') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/cipta_puisi/tolak') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/cipta_puisi/aktif')){ echo 'active open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle ">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Layouts">Baca Puisi</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/cipta_puisi/setting')){ echo 'active';} ?>">
                  <a href="<?= base_url('cipta_puisi/setting') ?>" class="menu-link ">
                    <div data-i18n="Without menu">Setting</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/cipta_puisi/pending')){ echo 'active';} ?>">
                  <a href="<?= base_url('cipta_puisi/pending') ?>" class="menu-link ">
                    <div data-i18n="Without navbar">Pending</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/cipta_puisi/aktif')){ echo 'active';} ?>">
                  <a href="<?= base_url('cipta_puisi/aktif') ?>" class="menu-link ">
                    <div data-i18n="Container">Aktif</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/cipta_puisi/tolak')){ echo 'active';} ?>">
                  <a href="<?= base_url('cipta_puisi/tolak') ?>" class="menu-link ">
                    <div data-i18n="Fluid">Tolak</div>
                  </a>
                </li>
              </ul>
            </li>

          <!-- Layouts -->
            <li class="menu-item  <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/vocal_solo/setting') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/vocal_solo/pending') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/vocal_solo/tolak') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/vocal_solo/aktif')){ echo 'active open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle ">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Layouts">Vocal Solo</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/vocal_solo/setting')){ echo 'active';} ?>">
                  <a href="<?= base_url('vocal_solo/setting') ?>" class="menu-link ">
                    <div data-i18n="Without menu">Setting</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/vocal_solo/pending')){ echo 'active';} ?>">
                  <a href="<?= base_url('vocal_solo/pending') ?>" class="menu-link ">
                    <div data-i18n="Without navbar">Pending</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/vocal_solo/aktif')){ echo 'active';} ?>">
                  <a href="<?= base_url('vocal_solo/aktif') ?>" class="menu-link ">
                    <div data-i18n="Container">Aktif</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/vocal_solo/tolak')){ echo 'active';} ?>">
                  <a href="<?= base_url('vocal_solo/tolak') ?>" class="menu-link ">
                    <div data-i18n="Fluid">Tolak</div>
                  </a>
                </li>
              </ul>
            </li>
            
            <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/mobile_legend/setting') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/mobile_legend/pending') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/mobile_legend/tolak') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/mobile_legend/aktif')){ echo 'active open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Layouts">Mobile Legend</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/mobile_legend/setting')){ echo 'active';} ?>">
                  <a href="<?= base_url('mobile_legend/setting') ?>" class="menu-link">
                    <div data-i18n="Without menu">Setting</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/mobile_legend/pending')){ echo 'active';} ?>">
                  <a href="<?= base_url('mobile_legend/pending') ?>" class="menu-link">
                    <div data-i18n="Without navbar">Pending</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/mobile_legend/aktif')){ echo 'active';} ?>">
                  <a href="<?= base_url('mobile_legend/aktif') ?>" class="menu-link">
                    <div data-i18n="Container">Aktif</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/mobile_legend/tolak')){ echo 'active';} ?>">
                  <a href="<?= base_url('mobile_legend/tolak') ?>" class="menu-link">
                    <div data-i18n="Fluid">Tolak</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Lainnya</span>
            </li>

            <!-- Layouts -->
            <li class="menu-item  <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/bootcamp/setting') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/bootcamp/pending') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/bootcamp/tolak') OR ($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/bootcamp/aktif')){ echo 'active open';} ?>">
              <a href="javascript:void(0);" class="menu-link menu-toggle ">
                <i class="menu-icon tf-icons bx bx-certification"></i>
                <div data-i18n="Layouts">Bootcamp</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/bootcamp/setting')){ echo 'active';} ?>">
                  <a href="<?= base_url('bootcamp/setting') ?>" class="menu-link ">
                    <div data-i18n="Without menu">Setting</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/bootcamp/pending')){ echo 'active';} ?>">
                  <a href="<?= base_url('bootcamp/pending') ?>" class="menu-link ">
                    <div data-i18n="Without navbar">Pending</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/bootcamp/aktif')){ echo 'active';} ?>">
                  <a href="<?= base_url('bootcamp/aktif') ?>" class="menu-link ">
                    <div data-i18n="Container">Aktif</div>
                  </a>
                </li>
                <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/bootcamp/tolak')){ echo 'active';} ?>">
                  <a href="<?= base_url('bootcamp/tolak') ?>" class="menu-link ">
                    <div data-i18n="Fluid">Tolak</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">User</span>
            </li>

            <li class="menu-item <?php if(($_SERVER['PHP_SELF']) == ($_SERVER['SCRIPT_NAME'].'/page/panitia')){ echo 'active';} ?>">
              <a href="<?= base_url('page/panitia') ?>"  class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Documentation">Panitia</div>
              </a>
            </li>
            <li class="menu-item">  
              <a href="<?= base_url('auth/logout') ?>"  class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Documentation">Logout</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <div class="nav-item d-flex align-items-center">
                    <h4 class="fw-semibold pt-3"><?= $title ?></h4>
                  </div>
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <span class="fw-light d-md-block d-lg-block d-none"><?= $this->session->userdata('nama') ?></span>
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?php echo base_url('theme/') ?>assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?php echo base_url('theme/') ?>assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= $this->session->userdata('nama') ?></span>
                            <small class="text-muted">Panitia</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
          <?= $this->session->flashdata('msg'); ?>
