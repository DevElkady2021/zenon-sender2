@extends('layouts.master')
@section('title')
@endsection
@section('btn')
@endsection
@section('css')

<style>
      .card  , .card-footer{
            border: transparent;
            background: transparent;
        }
        .card-title{
            font-size: 20px;
          
        }
</style>
  
@endsection
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title"></h1>
           
            <form >
                <div class="card">
                    <div class="card-header">
                        <div class="card-title "> البحث والاستعلام </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="البحث">
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="الحاله">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="المدينة">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="المنطقة">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">من تاريخ</span>
                                    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                  </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">الى تاريخ</span>
                                    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="index-btn-wrapper">
                            <button class="index-btn btn btn-primary w-100 text-white fs-5">التالى <i
                                    class="fa fa-arrow-circle-left "></i></button>
                        </div>
                    </div>
                </div>
            </form>

        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection
@section('js')
@endsection
