@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
<!-- some CSS styling changes and overrides -->
<style>
.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}
</style>

    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">{{$user->fname}} {{$user->lname}} Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
            <div class="row">
              <div class="col-md-4 text-center">
                  <div class="kv-avatar">
                          <img src="{{ asset('img/staff/'.$user->avatar) }}" width="90%">
                  </div>
              </div> 
              <div class="col-md-8">
              <table class="table table-striped">
                <tr>
                    <td><b>First Name</b></td>
                    <td>{{$user->fname}}</td>
                </tr>
                <tr>
                    <td><b>Last Name</b></td>
                    <td>{{$user->lname}}</td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td><b>Phone Number</b></td>
                    <td>{{$user->phonenumber}}</td>
                </tr>
                <tr>
                    <td><b>Address</b></td>
                    <td>21 West, Barg Town, CA</td>
                </tr>
                <tr>
                    <td><b>Company Name</b></td>
                    <td>Robo Door</td>
                </tr>
                <tr>
                    <td><b>VAT Number</b></td>
                    <td>RB123123</td>
                </tr>
                <tr>
                    <td><b>Created At</b></td>
                    <td>{{$user->created_at->format('d-m-Y')}}</td>
                </tr>
                <tr>
                    <td><b>Updated At</b></td>
                    <td>{{$user->updated_at->format('d-m-Y')}}</td>
                </tr>
                <tr>
                    <td><b>User Role</b></td>
                    <td>{{$user['role']['role_title']}}</td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td>
                        @if ($user->status === 1)
                          <span class="text-green"><b>Active</b></span>
                        @else
                            <span class="text-red"><b>Deactive</b></span>
                        @endif
                    </td>
                </tr>
                
              </table>
                  

              </div>
              </div>

          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/distributors'); !!}" class="btn btn-default">Back</a>
              </div>
              <!-- /.box-footer -->

</div>

<div class="row">

    <div class="col-md-12">
    <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Quotes</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
                <div id="nofeaturesapp_wrapper" class="dataTables_wrapper no-footer">
                    <table id="nofeaturesapp" class="display responsive wrap dataTable no-footer dtr-inline" style="width:100%;" role="grid">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Quote#</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>			  
                        <tr>
                            <td>01-Jan-2018</td>
                            <td>RB123</td>
                            <td>R277.97</td>
                            <td>
                                <span class="label label-info">New</span>
                            </td>
                            <td>
                            <a href="{!! url('/quotes/1'); !!}" class="btn btn-primary" title="View Detail"><li class="fa fa-eye"></li> </a>
                            </td>
                            </tr>
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table></div>
                        
        
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <!-- Order Widget ends -->

    <!-- Product Widget begins -->
    <div class="col-md-12">
            <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Invoices</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                        <div id="nofeaturesapp_wrapper" class="dataTables_wrapper no-footer">
                            <table id="nofeaturesapp" class="display responsive wrap dataTable no-footer dtr-inline" style="width:100%;" role="grid">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Invoice#</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                
                                <tbody>			  
                                    <tr>
                                        <td>11-Jan-2019</td>
                                        <td>RB001</td>
                                        <td>R100.00</td>
                                        <td><label class="label label-success">paid</label></td>
                                        <td>
                                            <a href="{!! url('/invoices/1'); !!}" class="btn btn-primary" title="View Detail"><li class="fa fa-eye"></li> </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01-Jan-2018</td>
                                        <td>RB001</td>
                                        <td>R105.60</td>
                                        <td><label class="label label-danger">unpaid</label></td>
                                        <td>
                                            <a href="{!! url('/invoices/1'); !!}" class="btn btn-primary" title="View Detail"><li class="fa fa-eye"></li> </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table></div>
                                
                
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
    <!-- Product Widget ends -->

</div>

@endsection