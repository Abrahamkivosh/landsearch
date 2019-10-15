@extends('layouts.dashboard')
@section('content')
   <div class="container-fluid">
            <div class="row font-1">
                <div class="col-lg-4">
                    <div class="card card-body flex-row align-items-center">
                        <h5 class="m-0"><i class="material-icons align-middle text-muted md-18">content_paste</i> Today</h5>
                        <div class="text-primary ml-auto">$12,319</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body flex-row align-items-center">
                        <h5 class="m-0"> Last 7 Days</h5>
                        <div class="text-primary ml-auto">$35,129</div>
                        <i class="material-icons text-success md-18 ml-1">arrow_upward</i>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body flex-row align-items-center">
                        <h5 class="m-0"> Past 30 Days</h5>
                        <div class="text-primary ml-auto">$142,545</div>
                        <i class="material-icons text-success md-18 ml-1">arrow_upward</i>
                    </div>
                </div>
            </div>


            <div class=" border card">
                <div class=" bg-info card-header">
                    Land Search
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="">PLOT NUMBER</label>
                          <input type="text" name="plotnumber" id="" class="form-control" placeholder="Type plot number" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Plot number only</small>
                        </div>
                        <div class="form-group">
                          <label for="">TITLE DEED</label>
                          <input type="text" name="titildeed" id="" class="form-control" placeholder="Plot title deed" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Plot title deed number</small>
                        </div>
                        <div class=" form-group" >
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>








                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="card-title">Recent Orders</div>
                                    </div>
                                    <div class="col-md-8 d-flex justify-content-md-end">
                                        <div class="dropdown mr-2">
                                            <button class="btn btn-white dropdown-toggle" type="button" id="sortOrdersDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sort By
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Date</a>
                                                <a class="dropdown-item" href="#">ID</a>
                                                <a class="dropdown-item" href="#">Name</a>
                                            </div>
                                        </div>
                                        <div class="dropdown mr-4">
                                            <button class="btn btn-white dropdown-toggle" type="button" id="filterOrdersDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Filter
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="filterOrdersDropdown">
                                                <a class="dropdown-item" href="#">Delivered</a>
                                                <a class="dropdown-item" href="#">Failed</a>
                                                <a class="dropdown-item" href="#">Pending</a>
                                            </div>
                                        </div>

                                        <form class="form-inline float-right">
                                            <div class="form-group mr-3">
                                                <label class="control-label mr-1">From:</label>
                                                <input type="text" class="datepicker form-control" value="10/24/2017">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="control-label mr-1">To: </label>
                                                <input type="text" class="datepicker form-control" value="10/25/2017">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr class="bg-fade">
                                            <th style="width: 120px;">Date</th>
                                            <th>Name</th>
                                            <th style="width: 100px;"># INV</th>
                                            <th style="width: 140px;">Amount</th>
                                            <th style="width: 100px">Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="align-middle">23 Feb 2018</td>
                                            <td class="align-middle">
                                                <div><i class="material-icons align-middle md-18 text-link-color">contacts</i> <a href="#"> Tara Knows</a>
                                                    <em class="text-muted ml-1">(Sales Manager)</em>
                                                </div>

                                            </td>

                                            <td class="align-middle">
                                                <a href="#">#31982</a>
                                            </td>
                                            <td class="align-middle">&dollar;8650.99</td>
                                            <td class="align-middle">
                                                <div class="badge badge-warning">pending</div>
                                            </td>
                                            <td class="align-middle" style="width:40px">
                                                <a class="btn btn-white btn-sm" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons md-18 align-middle">more_vert</i>
                                                    </a>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">assignment</i>
                                                        <span class="align-middle">Manage</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="material-icons md-14 align-middle">content_copy</i>
                                                        <span class="align-middle">Duplicate</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <i class="material-icons md-14 align-middle">delete</i>
                                                        <span class="align-middle">Delete</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
