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
                        <div class="card-title ">  البحث والاستعلام  </div>
                        <form >
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">البحث</span>
                                <input type="text" class="form-control" placeholder="البحث ...." aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                              </div>
                        </form>
                        <span>عدد الطلبات : 5</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                  <tr>
                                    
                                  
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="3">
                                       
                                        <span>zenon-5-001397</span>
                                        <br>
                                        <span>تم التسليم</span>
                                    </td>
                                    <td >23-10-2024</td>
                                   
                                  </tr>
                                  <tr>
                                    <td colspan="3">
                                       
                                        <span>zenon-5-001397</span>
                                        <br>
                                        <span>تم التسليم</span>
                                    </td>
                                    <td >23-10-2024</td>
                                   
                                  </tr>
                                  <tr>
                                    <td colspan="3">
                                       
                                        <span>zenon-5-001397</span>
                                        <br>
                                        <span>تم التسليم</span>
                                    </td>
                                    <td >23-10-2024</td>
                                   
                                  </tr>
                                  <tr>
                                    <td colspan="3">
                                       
                                        <span>zenon-5-001397</span>
                                        <br>
                                        <span>تم التسليم</span>
                                    </td>
                                    <td >23-10-2024</td>
                                   
                                  </tr>
                                  <tr>
                                    <td colspan="3">
                                       
                                        <span>zenon-5-001397</span>
                                        <br>
                                        <span>تم التسليم</span>
                                    </td>
                                    <td >23-10-2024</td>
                                   
                                  </tr>
                                 
                                
                                </tbody>
                              </table>
                        </div>
                    </div>
                   
                </div>
            </form>

        </div><!--//container-fluid-->
    </div><!--//app-content-->
@endsection
@section('js')
@endsection
