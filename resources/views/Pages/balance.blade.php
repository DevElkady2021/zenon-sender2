@extends('layouts.master')
@section('title')
@endsection
@section('btn')
@endsection
@section('css')
    <style>
        .card,
        .card-footer {
            border: transparent;
            background: transparent;
        }

        .card-title {
            font-size: 20px;

        }
    </style>
@endsection
@section('content')
    <div class="app-content pt-3 p-md-3 p-lg-4 mx-3">
        <div class="container-xl">
            <h1 class="app-page-title"></h1>

            <form>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title "> كشف حساب </div>
                        <form>
                            <div class="row">
                                <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">من تاريخ</span>
                                        <input type="date" class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">الى تاريخ</span>
                                        <input type="date" class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">الرصيد الافتتاحى</span>
                                    <input type="text" readonly value="{{ number_format(20000, 2) }}"
                                        class="form-control text-danger" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 col-md-6 col-sm-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default"> الرصيد الختامى</span>
                                    <input type="text" readonly value="{{ number_format(20000, 2) }}"
                                        class="form-control text-success" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>

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
                                        <td>
                                            <span>25-10-2024</span>
                                            <br>
                                            <span class="text-success fw-bold">300</span>
                                        </td>

                                    </tr>
                                    <tr>
                                      <td colspan="3">

                                          <span>zenon-5-001397</span>
                                          <br>
                                          <span>تم التسليم</span>
                                      </td>
                                      <td>
                                          <span>25-10-2024</span>
                                          <br>
                                          <span class="text-success fw-bold">300</span>
                                      </td>

                                  </tr>
                                  <tr>
                                    <td colspan="3">

                                        <span>zenon-5-001397</span>
                                        <br>
                                        <span>تم التسليم</span>
                                    </td>
                                    <td>
                                        <span>25-10-2024</span>
                                        <br>
                                        <span class="text-success fw-bold">300</span>
                                    </td>

                                </tr>
                                <tr>
                                  <td colspan="3">

                                      <span>zenon-5-001397</span>
                                      <br>
                                      <span>تم التسليم</span>
                                  </td>
                                  <td>
                                      <span>25-10-2024</span>
                                      <br>
                                      <span class="text-success fw-bold">300</span>
                                  </td>

                              </tr>
                              <tr>
                                <td colspan="3">

                                    <span>zenon-5-001397</span>
                                    <br>
                                    <span>تم التسليم</span>
                                </td>
                                <td>
                                    <span>25-10-2024</span>
                                    <br>
                                    <span class="text-success fw-bold">300</span>
                                </td>

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
