<?php

function renderHead(string $title, string $basePath): void {
    echo <<<HTML
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{$basePath}/img/favicon.ico" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{$basePath}/css/plugins/bootstrap.min.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="{$basePath}/css/plugins/swiper.min.css">
    <!-- fancybox css -->
    <link rel="stylesheet" href="{$basePath}/css/plugins/fancybox.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{$basePath}/css/plugins/font-awesome.min.css">
    <!-- nice select css -->
    <link rel="stylesheet" href="{$basePath}/css/plugins/nice-select.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{$basePath}/css/plugins/datepicker.css">
    <!-- kinsley css -->
    <link rel="stylesheet" href="{$basePath}/css/style.css">
    <title>{$title}</title>
</head>
HTML;
}

function renderNavbar(string $basePath, string $currentPage): void
{
    // Define menu items
    $menu = [
        'Home' => '/',
        'About' => '/about',
        'Services' => '/services',
        'Contact' => '/contact'
    ];

    echo '<!-- top bar -->
    <div class="knsl-top-bar">
    <div class="container">
    <div class="knsl-left-side">
    <!-- logo -->
    <a target="_blank" href="' . $basePath . '" class="knsl-logo-frame">
    <img src="' . $basePath . '/img/icons/logo.jpg" style="width: 48px !important; margin-right: 14px;">
    <h2>UNMESH</h2>
    </a>
    <!-- logo end -->
    </div>
    <div class="knsl-right-side">
    <!-- menu -->
    <div class="knsl-menu">
    <nav>
    <ul>';

    foreach ($menu as $name => $path)
    {
        $active = ($currentPage === $path) ? ' class="current-item"' : '';
        echo '<li' . $active . '><a target="_blank" href="' . $basePath . $path . '">' . $name . '</a></li>';
    }

    echo '</ul>
    </nav>
    </div>
    </div>
    <!-- menu button -->
    <div class="knsl-menu-btn"><span></span></div>
    <!-- menu button end -->
    </div>
    </div>
    <!-- top bar end -->';
}

function renderBannerSection(string $title, string $subtitle, array $breadcrumbs, string $bgColor): void
{
    echo '<section class="knsl-banner-simple knsl-transition-bottom" style="background-color: ' . $bgColor . '">
    <img src="/UNMESH/img/palm.svg" class="knsl-deco-left" alt="palm">
    <img src="/UNMESH/img/palm.svg" class="knsl-deco-right" alt="palm">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="knsl-center knsl-title-frame">
    <p><b>' . $subtitle . '</b></p>
    <h1 class="knsl-mb-20 knsl-h1-inner">' . $title . '</h1>
    <ul class="knsl-breadcrumbs">';

    foreach ($breadcrumbs as $name => $link)
    {
        if ($link) { echo '<li><a target="_blank" href="' . $link . '">' . $name . '</a></li>';} 
        else {echo '<li><span>' . $name . '</span></li>';}
    }

    echo '</ul>
    </div>
    </div>
    </div>
    </div>
    </section>';
}
