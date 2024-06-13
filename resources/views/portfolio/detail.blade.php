@php
    $settings = App\Models\Setting::getSiteSettings();
@endphp

@extends('master')
@section('content')
    <div class="main-wrapper">

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
