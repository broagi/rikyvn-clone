@php
    $settings = App\Models\Setting::getSiteSettings();
@endphp

@extends('master')
@section('content')
    <div class="popup-detail">
      <button class="close-popup">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em" fill="currentcolor"><path d="m15.854,8.854l-3.146,3.146,3.146,3.146c.195.195.195.512,0,.707-.098.098-.226.146-.354.146s-.256-.049-.354-.146l-3.146-3.146-3.146,3.146c-.098.098-.226.146-.354.146s-.256-.049-.354-.146c-.195-.195-.195-.512,0-.707l3.146-3.146-3.146-3.146c-.195-.195-.195-.512,0-.707s.512-.195.707,0l3.146,3.146,3.146-3.146c.195-.195.512-.195.707,0s.195.512,0,.707Zm8.146,3.146c0,6.617-5.383,12-12,12S0,18.617,0,12,5.383,0,12,0s12,5.383,12,12Zm-1,0c0-6.065-4.935-11-11-11S1,5.935,1,12s4.935,11,11,11,11-4.935,11-11Z"/></svg>
      </button>
      <div class="banner-detail">
        <img src="../images/portfolio/banner-detail.jpg" atl="" />
      </div>
      <div class="content-detail" style="background-image: linear-gradient(to right, #04396A , #0065C2);">
        <div class="container">
          <div class="link-web">
            <a href="#" target="_blank">
              <span>Link to website</span>
              <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="1em" height="1em" >
                  <path fill="currentcolor" class="line-color" d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12Zm22,0A10,10,0,1,1,12,2,10.011,10.011,0,0,1,22,
                  12ZM13.121,6.293a1,1,0,0,0,0,1.414L16.413,11,6,11.007a1,1,0,1,0,0,2L16.414,13l-3.293,3.293a1,1,0,1,0,1.389,
                  1.438l.025-.024,3.586-3.585a3,3,0,0,0,0-4.243h0L14.535,6.293A1,1,0,0,0,13.121,6.293Z"/>
              </svg>
            </a>
          </div>
          <div class="desktop-detail">
            <img src="../images/portfolio/desktop.jpg" atl="" />
          </div>
          <div class="mobile-detail">
            <img src="../images/portfolio/mobile.jpg" atl="" />
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
