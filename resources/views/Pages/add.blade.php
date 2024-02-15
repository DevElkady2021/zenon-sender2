@extends('layouts.master')
@section('title')
@endsection
@section('btn')
@endsection
@section('css')
    <style>
        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;

            font-weight: 400
        }

        #progressbar li img {
            opacity: .4;
            min-width: 50%;
            min-height: 50%;
            max-width: 50%;
            max-height: 50%;
        }

        .card  , .card-footer{
            border: transparent;
            background: transparent;
        }
        .card-title{
            font-size: 20px;
          
        }
        strong{
            text-wrap:wrap;
        }
        
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-11 col-md-8 col-lg-10 col-xl-10 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li id="confirm">
                            <img src="{{ asset('public/assets/Icon/order/4.png') }}" class="bg-secondary rounded-circle"
                                id="step-4" >
                            <br>
                            <strong>المرسل اليه</strong>
                        </li>
                        <li id="payment">
                            <img src="{{ asset('public/assets/Icon/order/3.png') }}" class="bg-secondary rounded-circle"
                                id="step-3" >
                            <br>
                            <strong>الراسل</strong>
                        </li>

                        <li id="personal">
                            <img src="{{ asset('public/assets/Icon/order/2.png') }}" class="bg-secondary rounded-circle"
                                id="step-2" >
                            <br>
                            <strong>تفاصيل الطرد</strong>
                        </li>
                        <li class="active" id="account">
                            <img src="{{ asset('public/assets/Icon/order/1.png') }}" class="bg-secondary rounded-circle"
                                id="step-1" >
                            <br>
                            <strong>بيانات الشحن</strong>
                        </li>
                    </ul>
                    <!--  End progressbar -->
                    <div class="row mt-3">
                        <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="tab my-3" id ="tab-1">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 w-80 m-auto">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="card-title ">بيانات الشحن </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group mb-3">

                                                        <input type="text" class="form-control" placeholder="الكود">

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control" placeholder="الخدمة">

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control" placeholder="قيمه الطرد">

                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control " placeholder="فتح الطرد">

                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="index-btn-wrapper">
                                                        <button class="index-btn btn btn-primary w-100 text-white fs-5"
                                                            onclick="run(1, 2);">التالى <i
                                                                class="fa fa-arrow-circle-left "></i></button>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                            <div class="tab my-3" id ="tab-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 w-80 m-auto">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        تفاصيل الطرد
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group mb-3">
                                                        <input type="number" class="form-control" placeholder="عدد القطع">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="number" class="form-control" placeholder="وزن الطرد">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control" placeholder="وصف الطرد">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="الرقم المرجعى">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="index-btn-wrapper">
                                                        <button class="index-btn btn btn-danger  text-white fs-5 mb-2"
                                                            onclick="run(2, 1);">السابق <i
                                                                class="fa fa-arrow-circle-right "></i></button>
                                                        <button class="index-btn btn btn-primary  text-white fs-5 mb-2"
                                                            onclick="run(2, 3);">التالى <i
                                                                class="fa fa-arrow-circle-left "></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                            <div class="tab my-3" id="tab-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 w-80 m-auto">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        الراسل
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="اسم العميل">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="الموبايل">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="التليفون">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="المدينه">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="المنطقه">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control" placeholder="العنوان">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="index-btn-wrapper">
                                                        <button class="index-btn btn btn-danger  text-white fs-5 mb-2"
                                                            onclick="run(3, 2);">السابق <i
                                                                class="fa fa-arrow-circle-right "></i></button>
                                                        <button class="index-btn btn btn-primary  text-white fs-5 mb-2"
                                                            onclick="run(3, 4);">التالى <i
                                                                class="fa fa-arrow-circle-left "></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                            <div class="tab my-3" id="tab-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 w-80 m-auto">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        المرسل اليه
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="اسم المرسل اليه">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="الموبايل">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="التليفون">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="المدينة">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group mb-3">
                                                                <input type="text" class="form-control"
                                                                    placeholder="المنظقة">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control" placeholder="العنوان">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control" placeholder="ملاحظات">
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="index-btn-wrapper">
                                                        <button class="index-btn btn btn-danger  text-white fs-5 mb-2"
                                                            onclick="run(4, 3);">السابق <i
                                                                class="fa fa-arrow-circle-right "></i></button>
                                                        <button type="submit"
                                                            class="index-btn btn btn-info  text-white fs-5 mb-2">حفظ <i
                                                                class="fa fa-circle-check"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        // Default tab
        $(".tab").css("display", "none");
        $("#tab-1").css("display", "block");

        function run(hide, show) {
            if (hide < show) {
                var currentTab = 0;
                x = $('#tab-' + hide);
                y = $(x).find("input");

                for (i = 0; i < y.length; i++) {
                    if (y[i].value == "") {
                        $(y[i]).css("background", "#ffdddd");
                        $(y[i]).attr("placeholder", "يرجى ادخال البيانات المطلوبة");
                        return false;
                    }
                }

                // Progress bar
                $("#step-" + hide).css("background", "#3C6A8A");
                $("#step-" + hide).css("opacity", 1);


                // Switch tab
                $("#tab-" + hide).css("display", "none");
                $("#tab-" + show).css("display", "block");
                $("input").css("background", "#fff");
            } else {
                var currentTab = 0;
                x = $('#tab-' + hide);
                y = $(x).find("input");


                // Progress bar
                $("#step-" + show).css("background", "gray");
                $("#step-" + show).css("opacity", .5);

                // Switch tab
                $("#tab-" + hide).css("display", "none");
                $("#tab-" + show).css("display", "block");
                $("input").css("background", "#fff");
            }
        }
    </script>
@endsection
