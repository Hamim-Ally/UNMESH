<?php
function loadScripts($basePath)
{
    $scripts = [
        'js/plugins/jquery.min.js',
        'js/plugins/bootstrap.min.js',
        'js/plugins/jquery.nice-select.min.js',
        'js/plugins/datepicker.js',
        'js/plugins/smooth-scroll.js',
        'js/plugins/isotope.min.js',
        'js/plugins/mapbox.min.js',
        'js/plugins/fancybox.min.js',
        'js/plugins/swiper.min.js',
        'js/plugins/sticky.js',
        'js/main.js'
    ];

    foreach ($scripts as $src) {
        echo '<script src="' . rtrim($basePath, '/') . '/' . $src . '"></script>' . PHP_EOL;
    }
}

?>