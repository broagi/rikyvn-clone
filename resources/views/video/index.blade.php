@php
    $settings = App\Models\Setting::getSiteSettings();
@endphp

@extends('master')
@section('content')
    <div class="wrapper main-wrapper">
        @if (isset($video))
            <section class="padding-main bg-main">
                <div class="container d-flex flex-wrap">
                    <div class="col-sm-8 col-12"><div class="embed-frame">{!! $video->embed_frame !!}</div></div>
                    <div class="col-sm-4 col-12 i-item right-show">
                      <div class="title-main mb-4">
                          <h4>MARKETING ONLINE CÙNG CHUYÊN GIA</h4>
                          <h3>{{$video->title}}</h3>
                          <span class="divide"></span>
                      </div>
                      <p class="whitespace-pre-line">{{$video->description}}</p>
                  </div>

                </div>
            </section>
        @endif
        <section class="pictures-home padding-main" id="videos">
            <div class="container">
                <div class="title-main i-item top-show">
                    <h2><span>Video Dự Án Tiêu Biểu</span></h2>
                </div>
                {{-- <div class="slider-picture i-item right-show">
                @foreach ($videos as $key => $video)
                    <div class="item-picture item-picture-video" data-id="{{ $key }}">
                        <div class="item-picture-img">
                            <img src="{{ url($video->cover) }}">
                            <span class="play-icon"><i class="fas fa-play"></i></span>
                        </div>
                        <h3>{{ $video->title }}</h3>
                    </div>
                @endforeach
            </div> --}}
                <div class="d-flex flex-wrap">
                    @foreach ($related_videos as $key => $video)
                          <a href="{{url('/video/'.$video->slug)}}" class="col-md-4 col-sm-4 col-6 item-picture item-picture-video" data-id="{{ $key }}">
                              <div class="item-picture-img">
                                  <img src="{{ url($video->cover) }}">
                                  <span class="play-icon"><i class="fas fa-play"></i></span>
                              </div>
                              <h3>{{ $video->title }}</h3>
                          </a>
                    @endforeach
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
                        <img src="/images/logo.svg">
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
                            data-width="400" data-height="100" data-small-header="false" data-adapt-container-width="true"
                            data-hide-cover="false" data-show-facepile="true">
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
@endsection
