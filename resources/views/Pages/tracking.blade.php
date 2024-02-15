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
                        <div class="card-title "> تتبع شحنتك </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="ادخل كود السلعة المراد تتبعها">
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
            </form>

        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection
@section('js')
@endsection
