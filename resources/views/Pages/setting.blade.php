@extends('layouts.master')
@section('title')
@endsection
@section('btn')
@endsection
@section('css')
    <style>
        .accordion-item,
        .accordion-button {
            border-radius: 20px !important;
            box-shadow: 2px 2px 5px gray;
        }

        .accordion-item {
            margin-bottom: 10px;
        }


        .collapsed:hover {
            background: #3C6A8A;
            color: #FFFFFF;
        }
    </style>
@endsection
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title">Settings</h1>
            <hr class="mb-4">
            <div class="row g-4 settings-section">
                <div class="col-12 col-md-12 text-center">
                    <h3 class="section-title"><img src="{{ asset('public/assets/images/blacl.png') }}"
                            alt="{{ config('app.name') }}" width="50%"></h3>
                    <div class="section-intro"></div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="mb-3 ">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed first " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <i class="fa fa-user-circle h3 mx-3"></i> حسابى
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-center">
                                        لسه شوية 
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <i class="fa fa-globe h3  mx-3"></i>اللغة
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body text-center">
                                      

                                       
                                        @if (Config::get('app.locale') == 'ar')
                                            
                                                <a class="btn btn-primary text-white w-50 p-3" rel="alternate" hreflang="{{ 'en' }}"
                                                    href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                                                    English
                                                </a>
                                           
                                        @elseif (Config::get('app.locale') == 'en')
                                       
                                            <a class="btn btn-success text-white w-50 p-3" rel="alternate" hreflang="{{ 'ar' }}"
                                                href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                                                Arabic
                                            </a>
                                       
                                        @endif
                                            
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <i class="fa fa-key h3 mx-3"></i> تغيير كلمه المرور
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body ">
                                        <form action="" method="post">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="passowrd" class="form-label">كلمه المرور الجديد</label>
                                                <input type="text" name="password" class="form-control"
                                                    placeholder="ادخل كلمه المرور الجديده">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="passowrd" class="form-label">تاكيد كلمه المرور </label>
                                                <input type="text" name="password-comformid" class="form-control"
                                                    placeholder="تاكيد كلمه المرور">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapsefour" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <i class="fa fa-door-open  h3  mx-3"></i> تسجيل الخروج
                                    </button>
                                </h2>
                                <div id="flush-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="txt text-center">
                                            هل انت متاكد من تسجيل الخروج
                                            <br><br>
                                            👇 للتاكيد اضغط هنا 👇
                                            <br><br>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>

                                            <a class="btn btn-danger text-white my-2" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i
                                                    class="fa fa-door-open"></i> تسجيل الخروج </a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--//row-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection
@section('js')
@endsection
