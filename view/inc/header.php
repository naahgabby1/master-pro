<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo date('Y'); ?></title>
<link rel="shortcut icon" type="image/png" href="images/favicon.png">
<link href="../vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div id="preloader">
<div class="lds-ripple">
<div></div>
<div></div>
</div>
</div>
<div id="main-wrapper">
<div class="nav-header">
<a href="index.php?page=dashboard" class="brand-logo">
<div class="brand-title">
<h2 class="">M S</h2>
<span class="brand-sub-title">Master Details</span>
</div>
</a>
<div class="nav-control">
<div class="hamburger">
<span class="line"></span><span class="line"></span><span class="line"></span>
</div>
</div>
</div>
<div class="header">
<div class="header-content">
<nav class="navbar navbar-expand">
<div class="collapse navbar-collapse justify-content-between">
<div class="header-left">
<div class="dashboard_bar">
Dashboard 
</div>
</div>
<ul class="navbar-nav header-right">
<li class="nav-item dropdown notification_dropdown">
<a class="nav-link " href="#" data-bs-toggle="dropdown">
<svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M22.1666 5.83331H20.9999V3.49998C20.9999 3.19056 20.877 2.89381 20.6582 2.67502C20.4394 2.45623 20.1427 2.33331 19.8333 2.33331C19.5238 2.33331 19.2271 2.45623 19.0083 2.67502C18.7895 2.89381 18.6666 3.19056 18.6666 3.49998V5.83331H9.33325V3.49998C9.33325 3.19056 9.21034 2.89381 8.99154 2.67502C8.77275 2.45623 8.47601 2.33331 8.16659 2.33331C7.85717 2.33331 7.56042 2.45623 7.34163 2.67502C7.12284 2.89381 6.99992 3.19056 6.99992 3.49998V5.83331H5.83325C4.90499 5.83331 4.01476 6.20206 3.35838 6.85844C2.702 7.51482 2.33325 8.40506 2.33325 9.33331V10.5H25.6666V9.33331C25.6666 8.40506 25.2978 7.51482 24.6415 6.85844C23.9851 6.20206 23.0948 5.83331 22.1666 5.83331Z" fill="#717579"></path>
<path d="M2.33325 22.1666C2.33325 23.0949 2.702 23.9851 3.35838 24.6415C4.01476 25.2979 4.90499 25.6666 5.83325 25.6666H22.1666C23.0948 25.6666 23.9851 25.2979 24.6415 24.6415C25.2978 23.9851 25.6666 23.0949 25.6666 22.1666V12.8333H2.33325V22.1666Z" fill="#717579"></path>
</svg>
<span class="badge light text-white bg-success rounded-circle">
<?php echo 200; ?>
</span>
</a>
<div class="dropdown-menu dropdown-menu-end">
<div id="DZ_W_TimeLine02" class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
<ul class="timeline">
<li>
<div class="timeline-badge primary"></div>
<a class="timeline-panel text-muted" href="javascript:void(0);">
<span>10 minutes ago</span>
<h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
</a>
</li>
</ul>
</div>
</div>
</li>

<li class="nav-item dropdown  header-profile">
<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
<img src="../images/user.jpg" width="56">
</a>
<div class="dropdown-menu dropdown-menu-end">
<a href="view/index.php?page=profile" class="dropdown-item ai-icon">
<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
<span class="ms-2">Profile </span>
</a>
<a href="view/index.php?page=business" class="dropdown-item ai-icon">
<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
<span class="ms-2">Business </span>
</a>
<a href="../controller/logoutController.php" class="dropdown-item ai-icon">
<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
<span class="ms-2">Logout </span>
</a>
</div>
</li>
</ul>
</div>
</nav>
</div>
</div>