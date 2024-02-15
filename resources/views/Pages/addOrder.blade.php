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
    <div class="app-content pt-3 p-md-3 p-lg-4 mx-3">
        <div class="container-xl">
            <h1 class="app-page-title"></h1>
           
            <form >
                <div class="card">
                    <div class="card-header">
                        <div class="card-title "> <h2>طلب جديد :</h2>  </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="form-group mb-3">
                                    <input type="number" class="form-control" placeholder="عدد الشحنات">
                                </div>
                            </div>

                            <div class="col-12 col-lg-12 col-xl-12 col-md-12 col-sm-12 mb-3">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                      <option selected>اختر وسيله النقل</option>
                                      <option value="1">سياره</option>
                                      <option value="2">موتوسيكل</option>
                                   
                                    </select>
                                    <label for="floatingSelect">وسائل النقل</label>
                                  </div>
                            </div>

                            <div class="col-12 col-lg-12 col-xl-12 col-md-12 col-sm-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">ملاحظات</label>
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
