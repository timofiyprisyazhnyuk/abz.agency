@extends('layouts.app_staff')@push('css')    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">@endpush@section('header')    @include('layouts.app_header')@endsection@section('content')    <!--Hero_Section-->    <section id="hero_section" class="top_cont_outer">        <div class="hero_wrapper">            <div class="container">                <div class="hero_section">                    <div class="row">                        <div class="text-center">                            <div class="col-lg-4">                                <h1 class="app-head-text">abz.agency test work</h1>                            </div>                            <div class="col-lg-4">                                <a href="{{ route('staff_tree.index') }}" class="read_more2">                                    Task №-I <br>Users tree <i class="fa fa-tree fa-2x" aria-hidden="true"></i>                                </a>                            </div>                            <div class="col-lg-4">                                <a href="{{ route('staff_list.index') }}" class="read_more2 ">                                    Task №-II <br>Users list <i class="fa fa-users fa-2x" aria-hidden="true"></i>                                </a>                            </div>                        </div>                    </div>                </div>            </div>        </div>    </section>    <!--Hero_Section-->    <!--Service-->    <section id="service">        <div class="container">            <h2>USED TECHNOLOGIES</h2>            <div class="service_wrapper">                <div class="row">                    <div class="col-lg-4 col-sm-4">                        <div class="service_block">                            <div class="service_icon delay-03s animated wow  zoomIn"><span>                                   <i class="fab fa-laravel"></i></span></div>                            <h3 class="animated fadeInDown wow">Laravel</h3>                        </div>                    </div>                    <div class="col-lg-4 col-sm-4 borderLeft">                        <div class="service_block">                            <div class="service_icon icon2  delay-03s animated wow zoomIn">                                <span>                                    <i class="fab fa-js"></i>                                </span>                            </div>                            <h3 class="animated fadeInDown wow">JS / jQuery </h3>                        </div>                    </div>                    <div class="col-lg-4 col-sm-4 borderLeft">                        <div class="service_block">                            <div class="service_icon icon3  delay-03s animated wow zoomIn">                                <span>                                    <i class="fab fa-react"></i>                                </span>                            </div>                            <h3 class="animated fadeInDown wow">React</h3>                        </div>                    </div>                </div>                <div class="row borderTop">                    <div class="col-lg-4 col-sm-4 mrgTop">                        <div class="service_block">                            <div class="service_icon delay-03s animated wow  zoomIn">                                <span>                                    <i class="fab fa-html5"></i>                                </span>                            </div>                            <h3 class="animated fadeInDown wow">HTML 5</h3>                        </div>                    </div>                    <div class="col-lg-4 col-sm-4 borderLeft mrgTop">                        <div class="service_block">                            <div class="service_icon icon2  delay-03s animated wow zoomIn">                                <span>                                    <i class="fab fa-css3-alt"></i>                                </span>                            </div>                            <h3 class="animated fadeInDown wow">CSS 3</h3>                        </div>                    </div>                    <div class="col-lg-4 col-sm-4 borderLeft mrgTop">                        <div class="service_block">                            <div class="service_icon icon3  delay-03s animated wow zoomIn">                                <span><i class="fas fa-database"></i></span>                            </div>                            <h3 class="animated fadeInDown wow">MySQL</h3>                        </div>                    </div>                </div>            </div>        </div>    </section>    <!--Service-->@endsection@section('footer')    @include('layouts.app_footer')@endsection@push('scripts')    <script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed.js') }}"></script>    <script type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>    <script type="text/javascript" src="{{ asset('js/jquery.isotope.js') }}"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>@endpush