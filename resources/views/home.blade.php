@extends('layouts.master')
@section('title')
@endsection
@section('btn')
@endsection
@section('css')
@endsection
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">الصفحةالرئيسية</h1>

            {{-- <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
            <div class="inner">
                <div class="app-card-body p-3 p-lg-4">
                    <h3 class="mb-3">Welcome, developer!</h3>
                    <div class="row gx-5 gy-3">
                        <div class="col-12 col-lg-9">

                            <div>is not just a software house but a planet for creativity. We are building the
                                box for others to think outside of it.
                            </div>
                        </div><!--//col-->
                        <div class="col-12 col-lg-3">
                            <a class="btn app-btn-primary" href="https://www.facebook.com/zenonsoftware"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                </svg>Follow Us</a>
                        </div><!--//col-->
                    </div><!--//row-->
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div><!--//app-card-body-->

            </div><!--//inner-->
        </div> --}}

            <div class="row g-4 mb-4">
                <div class="col-12 col-lg-4 col-xl-4 col-md-6 col-sm-12 mb-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <img src="{{ asset('public/assets/Icon/home page icon/1.png') }}" alt="" width="75"
                                class="mb-3">
                            <h3 class="stats-type mb-1">انتظار شحن</h3>
                            <div class="stats-figure">12</div>
                            <div class="stats-meta text-success">

                            </div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-12 col-lg-4 col-xl-4 col-md-6 col-sm-12 mb-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <img src="{{ asset('public/assets/Icon/home page icon/2.png') }}" alt="" width="75"
                                class="mb-3">
                            <h3 class="stats-type mb-1">في المخزن</h3>
                            <div class="stats-figure">250</div>
                            <div class="stats-meta text-success">

                            </div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-12 col-lg-4 col-xl-4 col-md-6 col-sm-12 mb-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <img src="{{ asset('public/assets/Icon/home page icon/3.png') }}" alt="" width="75"
                                class="mb-3">
                            <h3 class="stats-type mb-1">تم التسليم</h3>
                            <div class="stats-figure">23</div>

                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-12 col-lg-4 col-xl-4 col-md-6 col-sm-12 mb-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <img src="{{ asset('public/assets/Icon/home page icon/4.png') }}" alt="" width="75"
                                class="mb-3">

                            <h3 class="stats-type mb-1">قيد التوصيل</h3>
                            <div class="stats-figure">6</div>

                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-12 col-lg-4 col-xl-4 col-md-6 col-sm-12 mb-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-5 p-lg-4">
                            <img src="{{ asset('public/assets/Icon/home page icon/5.png') }}" alt="" width="75"
                                class="mb-3">
    
                            <h3 class="stats-type mb-1">اعاده توصيل</h3>
                            <div class="stats-figure">628</div>
                            <div class="stats-meta text-success">
    
                            </div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
    
                <div class="col-12 col-lg-4 col-xl-4 col-md-6 col-sm-12 mb-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <img src="{{ asset('public/assets/Icon/home page icon/6.png') }}" alt="" width="75"
                                class="mb-3">
    
                            <h3 class="stats-type mb-1">تعذر التسليم</h3>
                            <div class="stats-figure">628</div>
                            <div class="stats-meta text-success">
    
                            </div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
            </div><!--//row-->
           



        </div>
    </div>
@endsection
@section('js')
@endsection
