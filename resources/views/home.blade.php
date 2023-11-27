@extends('master')
@section('content')
    <div class="wrapper">
        <section class="banner">
            <video src="{{ url($settings['welcome_video']) }}" id="background-video" autoplay loop muted>
            </video>
            <div class="bg-svg"><svg version="1.1" id="_glob_shape-fake" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 811.8 811.8" xml:space="preserve">
                    <polygon stroke="#fff" opacity="1" fill="none"
                        points="421.3,1 389.7,1 357.9,3.5 326.5,8.5 295.6,15.9 265.4,25.7 236,37.9 207.7,52.3 180.6,68.9 154.9,87.6 130.7,108.2 108.2,130.7 87.6,154.9 68.9,180.6 52.3,207.7 37.9,236 25.7,265.4 15.9,295.6 8.5,326.5 3.5,357.9 1,389.7 1,421.3 3.5,453.1 8.5,484.5 15.9,515.4 25.7,545.6 37.9,575 52.3,603.3 68.9,630.4 87.6,656.1 108.2,680.3 130.7,702.8 154.9,723.4 180.6,742.1 207.7,758.7 236,773.1 265.4,785.3 295.6,795.1 326.5,802.5 357.9,807.5 389.7,810 421.3,810 453.1,807.5 484.5,802.5 515.4,795.1 545.6,785.3 575,773.1 603.3,758.7 630.4,742.1 656.1,723.4 680.3,702.8 702.8,680.3 723.4,656.1 742.1,630.4 758.7,603.3 773.1,575 785.3,545.6 795.1,515.4 802.5,484.5 807.5,453.1 810,421.3 810,389.7 807.5,357.9 802.5,326.5 795.1,295.6 785.3,265.4 773.1,236 758.7,207.7 742.1,180.6 723.4,154.9 702.8,130.7 680.3,108.2 656.1,87.6 630.4,68.9 603.3,52.3 575,37.9 545.6,25.7 515.4,15.9 484.5,8.5 453.1,3.5"
                        data-svg-origin="412.49999990463255 412.3000000953674" transform="matrix(1,0,0,1,0,0)"
                        style=""></polygon>
                    <polygon stroke="#fff" opacity="1" fill="none"
                        points="416.5,135.4 395.3,135.4 374.1,137 353.1,140.4 332.4,145.3 312.2,152 292.5,160.1 273.6,169.7 255.5,180.8 238.3,193.3 222.2,207.1 207.1,222.2 193.3,238.3 180.8,255.5 169.7,273.6 160.1,292.5 152,312.2 145.3,332.4 140.4,353.1 137,374.1 135.4,395.3 135.4,416.5 137,437.7 140.4,458.7 145.3,479.4 152,499.6 160.1,519.3 169.7,538.2 180.8,556.3 193.3,573.5 207.1,589.6 222.2,604.7 238.3,618.5 255.5,631 273.6,642.1 292.5,651.7 312.2,659.8 332.4,666.5 353.1,671.4 374.1,674.8 395.3,676.4 416.5,676.4 437.7,674.8 458.7,671.4 479.4,666.5 499.6,659.8 519.3,651.7 538.2,642.1 556.3,631 573.5,618.5 589.6,604.7 604.7,589.6 618.5,573.5 631,556.3 642.1,538.2 651.7,519.3 659.8,499.6 666.5,479.4 671.4,458.7 674.8,437.7 676.4,416.5 676.4,395.3 674.8,374.1 671.4,353.1 666.5,332.4 659.8,312.2 651.7,292.5 642.1,273.6 631,255.5 618.5,238.3 604.7,222.2 589.6,207.1 573.5,193.3 556.3,180.8 538.2,169.7 519.3,160.1 499.6,152 479.4,145.3 458.7,140.4 437.7,137"
                        data-svg-origin="405.8999938964844 405.8999938964844" transform="matrix(1,0,0,1,0,0)"
                        style="transform-origin: 0px 0px 0px;"></polygon>
                    <polygon stroke="#fff" opacity="1" fill="none"
                        points="410.9,277.8 400.9,277.8 390.8,278.6 380.9,280.2 371.1,282.5 361.5,285.6 352.2,289.5 343.3,294    334.7,299.3 326.5,305.2 318.9,311.8 311.8,318.9 305.2,326.5 299.3,334.7 294,343.3 289.5,352.2 285.6,361.5 282.5,371.1    280.2,380.9 278.6,390.8 277.8,400.9 277.8,410.9 278.6,421 280.2,430.9 282.5,440.7 285.6,450.3 289.5,459.6 294,468.5    299.3,477.1 305.2,485.3 311.8,492.9 318.9,500 326.5,506.6 334.7,512.5 343.3,517.8 352.2,522.3 361.5,526.2 371.1,529.3    380.9,531.6 390.8,533.2 400.9,534 410.9,534 421,533.2 430.9,531.6 440.7,529.3 450.3,526.2 459.6,522.3 468.5,517.8 477.1,512.5    485.3,506.6 492.9,500 500,492.9 506.6,485.3 512.5,477.1 517.8,468.5 522.3,459.6 526.2,450.3 529.3,440.7 531.6,430.9 533.2,421    534,410.9 534,400.9 533.2,390.8 531.6,380.9 529.3,371.1 526.2,361.5 522.3,352.2 517.8,343.3 512.5,334.7 506.6,326.5 500,318.9    492.9,311.8 485.3,305.2 477.1,299.3 468.5,294 459.6,289.5 450.3,285.6 440.7,282.5 430.9,280.2 421,278.6  "
                        data-svg-origin="684.5000061035156 684.4" transform="matrix(1,0,0,1,0,0)" style=""></polygon>
                </svg></div>
            <div class="txt-banner">
                {{-- <div class="box-slogan intro__title-line i-item top-show">GẶP MẶT - KẾT NỐI - ĐỊNH HƯỚNG</div> --}}
                <h1 class="intro__title-line i-item top-show">MARKETING ONLINE CÙNG CHUYÊN GIA</h1>
                <a href="#dangky" class="btn btn-primary intro__title-line i-item top-show">Kết nối chuyên gia</a>
            </div>
        </section>
        <section class="pictures-home padding-main" id="videos">
            <div class="container">
                <div class="title-main i-item top-show">
                    <h2><span>Video Dự Án Tiêu Biểu</span></h2>
                </div>
                <div class="slider-picture i-item right-show">
                    @foreach ($videos as $key => $video)
                        <div class="item-picture item-picture-video" data-id="{{ $key }}">
                            <div class="item-picture-img">
                                <img src="{{ url($video->cover) }}">
                                <span class="play-icon"><i class="fas fa-play"></i></span>
                            </div>
                            <h3>{{ $video->title }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="pictures-home padding-main  box-blue" id="hinhanh">
            <div class="container">
                <div class="title-main i-item top-show">
                    <h2><span>Hình Ảnh Hoạt Động</span></h2>
                </div>
                <div class="slider-picture i-item right-show">
                    @foreach ($photos as $key => $photo)
                        <div class="item-picture item-picture-photo" data-id="{{ $key }}">
                            <div class="item-picture-img">
                                <img src="{{ url($photo->path) }}">

                            </div>
                            <h3>{{ $photo->title }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="mission-home padding-main" id="sumenh">
            <div class="container">
                <div class="row row-center">
                    <div class="col-sm-6 txt-mission i-item left-show">
                        <img src="images/success.png">
                        <div class="title-main">
                            <h2><span>Sứ mệnh</span> của chúng tôi</h2>
                        </div>
                        <p>Truyền tải thông tin, cách làm marketing online đến với mọi người theo một cách dễ hiểu, dễ làm
                            và chuyên nghiệp. </p>
                    </div>
                    <div class="col-sm-6 i-item right-show">
                        <img src="images/img1.png" width="100%">
                    </div>
                </div>
            </div>
        </section>

        <section class="why-sections" id="gioithieu">

            <div class="box-section box-green">
                <div class="row row-center">
                    <div class="col-sm-6 i-item left-show">
                        <img src="images/img/10.jpg" width="100%" class="image-mask">
                    </div>
                    <div class="col-sm-6 i-item right-show">
                        <div class="title-main">
                            <h2><span>Lý do</span> tạo nên buổi gặp gỡ giữa bạn với chuyên gia </h2>
                        </div>
                        <ul>
                            <li>Bạn đang tìm hiểu hoặc đang Kinh Doanh Online nhưng chưa biết bắt đầu từ đâu ?</li>
                            <li>Bạn có các thắc mắc về quảng cáo, muốn định hướng và cần các chuyên gia giúp đỡ giải đáp.
                            </li>
                            <li>Bạn đang phân vân giữa tự chạy hoặc đi thuê người chạy ? Cái nào tốt hơn ?</li>
                            <li>Bạn đang tự chạy quảng cáo nhưng chưa biết liệu đang làm như hiện tại đã tốt chưa ? Cần làm
                                gì để tốt hơn.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-section box-red pt-0 pb-0 pt-lg-5 pb-lg-5">
                <div class="row row-center">
                    <div class="col-sm-6 order-12 i-item right-show">
                        <img src="images/img/12.jpg" width="100%" class="image-mask">
                    </div>
                    <div class="col-sm-6 i-item left-show">
                        <div class="title-main">
                            <h2>Buổi gặp gỡ này dành <span>cho những ai</span>?</h2>
                        </div>
                        <ul>
                            <li>Bạn là shop hoặc cá nhân đang kinh doanh online</li>
                            <li>Doanh nghiệp muốn tìm hiểu sâu hơn để phát triển kinh doanh</li>
                            <li>Các nhà quảng cáo vẫn còn đang loay hoay tìm công thức để làm tốt hơn</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-section box-green">
                <div class="row row-center">
                    <div class="col-sm-6 i-item left-show">
                        <img src="images/img/11.jpg" width="100%" class="image-mask">
                    </div>
                    <div class="col-sm-6 i-item right-show">
                        <div class="title-main">
                            <h2><span>Nội dung</span> sẽ được chia sẽ từ chuyên gia</h2>
                        </div>
                        <ul>
                            <li>Quảng cáo online bắt đầu từ đâu và làm như thế nào ?</li>
                            <li>Tự chạy quảng cáo và đi thuê đơn vị chạy quảng cáo, phương án nào tốt hơn ?</li>
                            <li>Khi nào nên đi thuê, khi nào nên tự chạy ?</li>
                            <li>Tìm ra lý do mà Shop/ Doanh nghiệp đang lãng phí ngân sách trong quá trình chạy quảng cáo
                                mỗi ngày mà bạn KHÔNG HỀ HAY BIẾT Tìm ra lý do mà Shop/ Doanh nghiệp đang lãng phí ngân sách
                                trong quá trình chạy quảng cáo mỗi ngày mà bạn KHÔNG HỀ HAY BIẾT.</li>
                            <li>Chia sẽ về các hình thức chạy quảng cáo online và cách làm phù hợp với ngành hàng của bạn.
                            </li>
                            <li>Trả lời và giải đáp các thắc mắc của các bạn về kinh doanh online.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="member-home padding-main" id="chuyengia">
            <div class="container">
                <div class="title-main title-white">
                    <h2><span>Chuyên gia</span> sẽ kết nối <br>đến bạn là ai ?</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 i-item left-show">
                        <div class="box-member">
                            <img src="images/member.png">
                            <h3>Coach Harry An Pham</h3>
                            <div class="staff-member">Nhà huấn luyện Digital Marketing</div>
                            <p>Khởi nguồn được đào tạo trực tiếp từ Facebook Việt Nam từ năm 2015. Nhà Huấn Luyện đã có hơn
                                7 năm kinh nghiệm trong ngành Marketing và trên 5 năm kinh nghiệm đào tạo, huấn luyện, tư
                                vấn cho các cá nhân, tổ chức, doanh nghiệp về Marketing Online. Hiện tại, anh đang quản lý
                                và chạy quảng cáo cho nhiều tài khoản quảng cáo ngân sách lớn cho các doanh nghiệp lớn tại
                                Việt Nam.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 i-item right-show">
                        <div class="box-member">
                            <img src="images/member1.png">
                            <h3>Coach Sang Dang</h3>
                            <div class="staff-member">Nhà huấn luyện Digital Marketing</div>
                            <p>Là nhà huấn luyện có thời gian làm việc về website, google marketing với các đối tác dự án
                                nươc ngoài (Pháp, Úc, Ấn Độ, …) thâm niên nhất tại riky.vn với hơn 8 năm kinh nghiệm. Thế
                                mạnh định hướng về tư duy cách làm sẽ giúp đỡ cho rất nhiều cho các shop/doanh nghiệp trong
                                việc phát triển kinh doanh trên nền tảng online. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="padding-signup">
            <div class="container">
                <div class="signup-home i-item  zoomin" id="dangky">
                    <div class="form-sign">
                        <h3>Thông tin đăng ký</h3>
                        <p>Chương trình được tài trợ MIỄN PHÍ bởi Riky.vn</p>
                        <form id="contact-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required type="text" class="form-control" name="fullname"
                                            placeholder="Họ và tên">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required type="text" class="form-control" name="phone_number"
                                            placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input required type="text" class="form-control" name="description"
                                            placeholder="Sản phẩm kinh doanh">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="images/logo.svg">
                        <p>Riky Marketing là công ty tư vấn, huấn luyện đào tạo Marketing Online tại Việt Nam. Hỗ trợ các Cá
                            Nhân, Doanh Nghiệp, Nghệ Sĩ nắm bắt cơ hội kinh doanh trực tuyến và khai thác tối đa ứng dụng
                            của Internet vào hoạt động kinh doanh.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3>Thông Tin liên hệ</h3>
                        <ul>
                            <li>Địa chỉ: {{ $settings['address'] }}</li>
                            <li>Email: {{ $settings['email'] }}</li>
                            <li>Hotline: {{ $settings['hotline'] }}</li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h3>Fanpage RIKY</h3>
                        <div class="fb-page" data-href="https://www.facebook.com/RiKyMarketing" data-tabs="timeline"
                            data-width="400" data-height="100" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/RiKyMarketing" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/RiKyMarketing">RiKy Marketing</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="box-contact-mobile">
        <a href="#dangky" class="btn btn-primary"><i class="fas fa-user"></i> Đăng Ký</a>
        <a href="https://zalo.me/{{ $settings['hotline'] }}" target="_blank" class="btn btn-danger">Zalo</a>
    </div>

    <div class="popup-album popup-album-photo">
        <div class="close-modal close-popup"><i class="fa fa-close"></i></div>
        <div class="bg-popup-album"></div>
        <div class="slider-for">
            @foreach ($photos as $photo)
                <div class="item-for"><img src="{{ url($photo->path) }}"></div>
            @endforeach()
        </div>
        <div class="slider-nav">
            @foreach ($photos as $photo)
                <div class="item-nav"><img src="{{ url($photo->path) }}"></div>
            @endforeach()
        </div>
    </div>

    <div class="popup-album popup-album-video">
        <div class="close-modal close-popup"><i class="fa fa-close"></i></div>
        <div class="bg-popup-album"></div>
        <div class="slider-for">
            @foreach ($videos as $video)
                <div class="item-for">
                    <div class="video-wrapper"><video poster="{{ url($video->cover) }}" preload="none" controls width="600" height="400"
                            src="{{ url($video->path) }}"></video></div>
                </div>
            @endforeach()
        </div>
        <div class="slider-nav">
            @foreach ($videos as $video)
                <div class="item-nav"><img src="{{ url($video->cover) }}"></div>
            @endforeach()
        </div>
    </div>

    <div id="success_tic" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="marker">
                    <h1 style="text-align:center;">
                        <div class="checkmark-circle">
                            <div class="background"></div>
                            <div class="checkmark draw"></div>
                        </div>
                        <h1>
                </div>
                {{-- <a class="close" href="#" data-dismiss="modal">&times;</a> --}}
                <div class="page-body">
                    <div class="head">
                        <h3 style="margin-top:5px;">Awesome!</h3>
                        <h4>Your booking has been confirmed</h4>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-success w-100  " data-dismiss="modal">OK</button>
                    </div>



                </div>
            </div>
        </div>

    </div>
@endsection
