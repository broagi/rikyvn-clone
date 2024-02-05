<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <link rel="icon" href="{{ $settings['site_favicon'] ?? url('images/logo.png') }}">



    <title>{{ $settings['site_name'] }}</title>

    <meta name="keywords" content="{{ $settings['site_keyword'] }}" />
    <meta property="og:url" content="<?= request()->url() ?>" />
    <meta property="og:type" content="{{ $settings['site_name'] }}" />
    <meta property="og:title" content="{{ $settings['site_name'] }}" />
    <meta property="og:description" content="{{ $settings['site_description'] }}" />
    <meta property="og:image" content="{{url('images/logo-blue.png')}}" />


    <link rel="canonical" href="<?= request()->url() ?>" />

    <meta name="twitter:card" content="{{ $settings['site_name'] }}" />
    <meta name="twitter:title" content="{{ $settings['site_name'] }}" />
    <meta name="copyright" content="{{ $settings['site_name'] }}" />
    <meta name="author" content="{{ $settings['site_name'] }}" />
    <meta name="GENERATOR" content="{{ $settings['site_name'] }}" />
    <meta name="twitter:description" content="{{ $settings['site_description'] }}" />
    <meta name="DC.description" content="{{ $settings['site_description'] }}" />
    <meta name="twitter:site" publiccontent="{{ request()->fullUrl() }}" />
    <meta name="DC.language" scheme="ISO639-1" content="en" />
    <meta name="DC.identifier" content="{{ request()->fullUrl() }}" />
    <meta name="DC.subject" content="{{ $settings['site_keyword'] }}" />
    <meta name="twitter:image" content="{{url('images/logo-blue.png')}}" />

    @if(isset($settings['header_script']))
    {{ $settings['header_script'] }}
    @endif
    @yield('metadata')
<body>

    <div class="header i-item top-show show1">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="{{$settings['site_logo'] ?? url('images/logo.svg')}}"></a>
            </div>
            <div class="right-header">
                <div class="menu">
                    <ul>
                        <li><a href="/#videos"><span>Videos</span></a></li>
                        <li><a href="/#hinhanh"><span>Hình ảnh</span></a></li>
                        <li><a href="/#sumenh"><span>Sứ mệnh</span></a></li>
                        <li><a href="/#gioithieu"><span>Giới thiệu</span></a></li>
                        <li><a href="/#chuyengia"><span>Chuyên gia</span></a></li>
                        <li><a href="/#dangky" class="a-singup">Đăng ký</a></li>
                    </ul>
                </div>
            </div>
            <div class="toogle-a"><span></span><span></span><span></span></div>
            <div class="bg-menu"></div>
        </div>
    </div>

    @yield('content')

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=2240291739529093&autoLogAppEvents=1"
        nonce="mLFkBIqK"></script>
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="/js/locomotive-scroll.js" type="text/javascript"></script>
    <script src="/js/jquery.visible.js" type="text/javascript"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/slick.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
