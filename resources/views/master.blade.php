<!DOCTYPE html>
<html lang="en">
<head>
    <link rel=icon href=images/favicon.ico type=image/x-icon>
    <link rel="shortcut icon" href=images/favicon.ico type=image/x-icon>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/css/slick.css" >
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<body>

    <div class="header i-item top-show">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="images/logo.svg"></a>
            </div>
            <div class="right-header">
                <div class="menu">
                    <ul>
                        <li><a href="#sumenh"><span>Sứ mệnh</span></a></li>
                        <li><a href="#gioithieu"><span>Giới thiệu</span></a></li>
                        <li><a href="#chuyengia"><span>Chuyên gia</span></a></li>
                        <li><a href="#hinhanh"><span>Hình ảnh</span></a></li>
                        <li><a href="#dangky" class="a-singup">Đăng ký</a></li>
                    </ul>
                </div>
            </div>
            <div class="toogle-a"><span></span><span></span><span></span></div>
            <div class="bg-menu"></div>
        </div>
    </div>

@yield('content')

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=2240291739529093&autoLogAppEvents=1" nonce="mLFkBIqK"></script>
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="/js/locomotive-scroll.js" type="text/javascript"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/slick.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>