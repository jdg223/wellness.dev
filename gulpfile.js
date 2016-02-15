var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');
elixir(function (mix) {
    'use strict';
    // mix.styles([
    //     'dashboard/bootstrap-extend.min.css',
    //     'dashboard/bootstrap.min.css',
    //     'dashboard/site.min.css',
    //     'dashboard/v2.min.css',
    //     'dashboard/animsition.min.css',
    //     'dashboard/asScrollable.min.css',
    //     'dashboard/switchery.min.css',
    //     'dashboard/introjs.min.css',
    //     'dashboard/slidePanel.min.css',
    //     'dashboard/chartist.min.css',
    //     'dashboard/jquery-jvectormap.min.css',
    //     'dashboard/modals.min.css',
    //     'dashboard/waves.min.css',
    //     'dashboard/login-v2.min.css',
    //     'dashboard/chartist-plugin-tooltip.min.css',
    //     'dashboard/fonts/web-icons/web-icons.min.css',
    //     'dashboard/fonts/brand-icons/brand-icons.min.css',
    //     'dashboard/fonts/weather-icons/weather-icons.css',
    // ],'public/css/dashboard.min.css')
    // .scripts([
    //     'dashboard/breakpoints/breakpoints.js',
    //     'dashboard/jquery/jquery.js',
    //     'dashboard/jquery-ui/jquery-ui.min.js',
    //     'dashboard/lodash/lodash.min.js',
    //     'dashboard/bootstrap/bootstrap.js',
    //     'dashboard/animsition/jquery.animsition.js',
    //     'dashboard/asscroll/jquery-asScroll.js',
    //     'dashboard/mousewheel/jquery.mousewheel.js',
    //     'dashboard/asscrollable/jquery.asScrollable.all.js',
    //     'dashboard/ashoverscroll/jquery-asHoverScroll.js',
    //     'dashboard/skycons/skycons.js',
    //     'dashboard/chartist-js/chartist.min.js',
    //     'dashboard/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js',
    //     'dashboard/core.min.js',
    //     'dashboard/site.min.js',
    //     'dashboard/aspieprogress/jquery-asPieProgress.min.js',
    //     'dashboard/jvectormap/jquery-jvectormap.min.js',
    //     'dashboard/jvectormap/maps/jquery-jvectormap-au-mill-en.js',
    //     'dashboard/matchheight/jquery.matchHeight-min.js',
    //     'dashboard/waves/waves.min.js',
    //     'dashboard/sections/menu.js',
    //     'dashboard/sections/menubar.js',
    //     'dashboard/sections/gridmenu.js',
    //     'dashboard/sections/sidebar.js',
    //     'dashboard/configs/config-colors.js',
    //     'dashboard/configs/config-tour.js',
    //     'dashboard/components/asscrollable.js',
    //     'dashboard/components/animsition.js',
    //     'dashboard/components/slidepanel.js',
    //     'dashboard/jquery-placeholder.min.js',
    //     'dashboard/components/switchery.js',
    //     'dashboard/slick.min.js',
    //     'dashboard/chartist-js/chartist.min.js',
    //     'dashboard/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js',
    //     'dashboard/aspieprogress/jquery-asPieProgress.min.js',
    //     'dashboard/jvectormap/jquery-jvectormap.min.js',
    //     'dashboard/jvectormap/maps/jquery-jvectormap-au-mill-en.js',
    //     'dashboard/matchheight/jquery.matchHeight-min.js',
    //     'dashboard/modernizr/modernizr.min.js',
    //     'dashboard/breakpoints/breakpoints.min.js',
    //     'dashboard/v2.js'
    // ],'public/js/dashboard-scripts.js')
    // .browserify('main.js')
    // .version(['js/dashboard.js','js/dashboard-scripts.js','css/dashboard.min.css']);

    // mix.browserSync({
    //     proxy: 'leadpropeller.dev',
    //     host: "192.168.88.10",
    //     reloadDelay: 2000,
    //     files: [
    //         elixir.config.appPath + '/**/*.php',
    //         elixir.config.appPath + 'resources/assets/**/*.vue',
    //         elixir.config.get('public.css.outputFolder') + '/**/*.css',
    //         elixir.config.get('public.versioning.buildFolder') + '/rev-manifest.json',
    //         'public/views/**/*.php',
    //         'resources/assets/**/*.vue'
    //     ]
    // });
    mix.scripts([
        'home/jquery-1.11.3.min.js',
        'home/jquery-ui.js',
        'home/jquery.lettering.js',
        'home/jquery.magnific-popup.min.js',
        'home/jquery.mb.YTPlayer.min.js',
        'home/jquery.mousewheel.min.js',
        'home/owl.carousel.min.js',
        'home/prefixfree.min.js',
        'home/jquery.plugin.min.js',
        'home/jquery.countdown.min.js',
        'home/wow.js',
        'home/masonry.pkgd.min.js',
        'home/bootstrap.min.js',
        'home/script.js',
    ],'public/js/home-scripts.js')
    .styles([
        'home/bootstrap.css',
        'home/docs.min.css',
        'home/font-awesome.min.css',
        'home/owl.carousel.css',
        'home/magnific-popup.css',
        'home/animate.css',
        'home/style.css',
    ],'public/css/home-styles.css');
});

// elixir.Task.find("browserify").watch("resources/assets/**/*.vue");