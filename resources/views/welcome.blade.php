@extends('layouts.app_staff')@push('css')    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">@endpush@section('header')    @include('layouts.app_header')@endsection@section('content')    <!--Hero_Section-->    <section id="hero_section" class="top_cont_outer">        <div class="hero_wrapper">            <div class="container">                <div class="hero_section">                    <div class="row">                        <div class="text-center">                            <div class="col-lg-4">                                <a href="{{ route('staff_tree.index') }}" class="read_more2">Staff tree</a>                            </div>                            <div class="col-lg-4">                                <h1 class="text-white">abz.agency test work</h1>                            </div>                            <div class="col-lg-4">                                <a href="{{ route('staff_list.index') }}" class="read_more2 pull-right">Staff list</a>                                {{--                            <img src="{{ asset('img/main_device_image.png') }}" class="zoomIn wow animated" alt=""/>--}}                            </div>                        </div>                    </div>                </div>            </div>        </div>    </section>    <!--Hero_Section-->    <!--Service-->    <section id="service">        <div class="container">            <h2>Services</h2>            <div class="service_wrapper">                <div class="row">                    <div class="col-lg-4">                        <div class="service_block">                            <div class="service_icon delay-03s animated wow  zoomIn"><span><i                                            class="fa fa-android"></i></span></div>                            <h3 class="animated fadeInUp wow">Android</h3>                            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>                        </div>                    </div>                    <div class="col-lg-4 borderLeft">                        <div class="service_block">                            <div class="service_icon icon2  delay-03s animated wow zoomIn"><span><i                                            class="fa fa-apple"></i></span>                            </div>                            <h3 class="animated fadeInUp wow">Apple IOS</h3>                            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>                        </div>                    </div>                    <div class="col-lg-4 borderLeft">                        <div class="service_block">                            <div class="service_icon icon3  delay-03s animated wow zoomIn"><span><i                                            class="fa fa-html5"></i></span>                            </div>                            <h3 class="animated fadeInUp wow">Design</h3>                            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>                        </div>                    </div>                </div>                <div class="row borderTop">                    <div class="col-lg-4 mrgTop">                        <div class="service_block">                            <div class="service_icon delay-03s animated wow  zoomIn"><span><i                                            class="fa fa-dropbox"></i></span></div>                            <h3 class="animated fadeInUp wow">Concept</h3>                            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>                        </div>                    </div>                    <div class="col-lg-4 borderLeft mrgTop">                        <div class="service_block">                            <div class="service_icon icon2  delay-03s animated wow zoomIn"><span><i                                            class="fa fa-slack"></i></span>                            </div>                            <h3 class="animated fadeInUp wow">User Research</h3>                            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>                        </div>                    </div>                    <div class="col-lg-4 borderLeft mrgTop">                        <div class="service_block">                            <div class="service_icon icon3  delay-03s animated wow zoomIn"><span><i                                            class="fa fa-users"></i></span>                            </div>                            <h3 class="animated fadeInUp wow">User Experience</h3>                            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>                        </div>                    </div>                </div>            </div>        </div>    </section>    <!--Service-->@endsection@section('footer')    @include('layouts.app_footer')@endsection@push('scripts')    <script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed.js') }}"></script>    <script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>    <script type="text/javascript" src="{{ asset('js/jquery.isotope.js') }}"></script>    <script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>@endpush