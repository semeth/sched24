<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (isset($title)) ? $title : 'Sched24'; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Sched24</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown <?php echo ($this->router->fetch_class() == 'firm') ? 'active' : ''; ?>">
                            <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span>Firm</span>
                            </a>
                            <div class="sidebar-submenu" <?php echo ($this->router->fetch_class() == 'firm') ? 'style="display: block;"' : ''; ?>>
                                <ul>
                                    <li><a href="<?php echo base_url('firm'); ?>">Dashboard</a></li>
                                    <li><a href="<?php echo base_url('firm/employees'); ?>">Employees</a></li>
                                    <li><a href="<?php echo base_url('firm/calendar'); ?>">Calendar</a></li>
                                    <li><a href="<?php echo base_url('firm/schedules'); ?>">Schedules</a></li>
                                    <li><a href="<?php echo base_url('firm/clients'); ?>">Clients</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-layer-group"></i>
                                <span>Components</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="<?php echo base_url('components/banners'); ?>">Banners</a></li>
                                    <li><a href="<?php echo base_url('components/ads'); ?>">Ads</a></li>
                                    <li><a href="<?php echo base_url('components/icons'); ?>">Icons</a></li>
                                    <li><a href="<?php echo base_url('components/forms'); ?>">Forms</a></li>
                                    <li><a href="<?php echo base_url('components/crawl'); ?>">Crawling Data</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#"><i class="fa fa-chart-line"></i> <span>Analytics</span></a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="#">Campaigns</a></li>
                                    <li><a href="#">Engagements</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>System</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#"><i class="fa fa-users"></i> <span>Contacts</span></a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="#">Emails</a></li>
                                    <li><a href="#">Groups</a></li>
                                    <li><a href="#">Import List</a></li>
                                    <li><a href="#">Export List</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Localization</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="#">Sites</a></li>
                                    <li><a href="#">Currencies</a></li>
                                    <li><a href="#">Stock Statuses</a></li>
                                    <li><a href="#">Order Statuses</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Taxes</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Examples</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a href="#">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">