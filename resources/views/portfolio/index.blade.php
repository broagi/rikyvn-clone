@php
    $settings = App\Models\Setting::getSiteSettings();
@endphp

@extends('master')
@section('content')
    <div class="main-wrapper">
      <div class="banner-website">
        <img class="shape dots" src="images/slider-dots.png" alt="Shape">
        <!-- <div class="banner_svg_linea"></div> -->
        <div class="banner-website-txt">
          <h2>Khách hàng của chúng tôi</h2>
          <p>Với đội ngũ nhân viên chuyên nghiệp Khách hàng luôn luôn tin tưởng trên mọi lĩnh vực</p>
        </div>
        <!-- <div class="title-ani">
          <div class="line-title line-1">
              Khách hàng của chúng tôi
          </div>
          <div class="line-title line-2">
              Khách hàng của chúng tôi
          </div>
        </div> -->
      </div>
      <div class="content-inner">
        <div class="container">
          <div class="row">
            @foreach($portifolios as $key => $portifolio)
              <div class="col-sm-6">
              <a href="/portifolio/{{$portifolio->id}}">     
              <div class="item-portfolio">
                  <div class="item-portfolio-img">
                    <img src={{Storage::url($portifolio->thumbnail)}} atl="" />
                  </div>
                  <div class="item-portfolio-txt">
                    <h3 data-text="{{$portifolio->title}}">{{$portifolio->title}}</h3>
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="1em" height="1em" >
                      <path fill="currentcolor" class="line-color" d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12Zm22,0A10,10,0,1,1,12,2,10.011,10.011,0,0,1,22,
                      12ZM13.121,6.293a1,1,0,0,0,0,1.414L16.413,11,6,11.007a1,1,0,1,0,0,2L16.414,13l-3.293,3.293a1,1,0,1,0,1.389,
                      1.438l.025-.024,3.586-3.585a3,3,0,0,0,0-4.243h0L14.535,6.293A1,1,0,0,0,13.121,6.293Z"/>
                  </svg>
                  </div>
              </div>
            </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="box-contact-mobile">
        <a href="#dangky" class="btn btn-danger"><i class="fas fa-user"></i> Đăng Ký</a>
        <a href="https://zalo.me/{{ $settings['zalo'] }}" target="_blank" class="btn btn-primary">Zalo</a>
    </div>

    <div id="fixedLinks">
      @if (isset($settings['zalo']))
      <a href="https://zalo.me/{{ $settings['zalo'] }}" target="_blank">
        <img src="/images/zalo.svg" alt="zalo">
      </a>
      @endif
    </div>
@endsection
