<head>
    {!! Theme::metatags() !!}
    @php
        Theme::add('pub_theme::dist/css/app.css');
        Theme::add('pub_theme::resources/css/style.default.css');
        Theme::add('pub_theme::resources/css/custom.css');
    @endphp
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    {{--
        --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    {!! Theme::showStyles(false) !!}
    @stack('styles')
  </head>
