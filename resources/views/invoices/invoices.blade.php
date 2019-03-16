@extends('layouts.mainlayout')
@section('content')
<style>
.label-partial{
  background-color: #d634b3;
}
</style>
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
@if(session('failed'))
    <script>
      $( document ).ready(function() {
        swal("Failed", "{{session('failed')}}", "error");
      });
      
    </script>
@endif
<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal" action="http://localhost:8000/sellers" method="get" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="9btczgagfhiwDI56pOTtBKw2qfqYwlZUgKwCi9IN">        <div class="box box-success collapsed-box">
          <div class="box-header with-border">
            <h3 class="box-title">Search</h3>            
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body" style="display: none;">
            
            <!--Search Form Begins -->
            <div class="col-md-6">
              <label class="" for=""> Invoicer Name </label>
              <input type="text" class="form-control" value="" placeholder="Invoice Name">
            </div>
            <div class="col-md-6">
            <label class="" for=""> Sales Person  </label>
            <input type="text" class="form-control" value="" placeholder="Sales Person ">
            </div>
            <div class="col-md-6">
                <label>Date range:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="customrange">
                </div>
            </div>
  
                
             
              <script>
                 $(function() {
                var start = moment().subtract(29, 'days');
                var end = moment();

                function cb(start, end) {
                    $('#customrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }

                $('#customrange').daterangepicker({
                    startDate: start,
                    endDate: end,
                    ranges: {
                      'Today': [moment(), moment()],
                      'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                      'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                      'This Month': [moment().startOf('month'), moment().endOf('month')],
                      'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }
                }, cb);

                cb(start, end);

                });

                 $(document).ready(function() { 
                    $('.select2').select2({
                        placeholder: "Select Staff",
                        multiple: false,
                    }); 
                  });
              </script>
            <!-- Search Form Ends -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix" style="display: none;">
              <button type="submit" class="pull-right btn btn-primary" id="searchRecords">Search
                <i class="fa fa-search"></i></button>
            </div>
        </div>
        <!-- /.box -->
      </form>
      </div>
  </div>
<div class="row">

        <div class="col-xs-12">
          <div class="box">
          
            <div class="box-header">
              <h3 class="box-title">Invoice List</h3>
            <a class="btn btn-primary pull-right" href="{{url('invoices/create')}}">
                Add New Invoice
              </a>

              <span class="pull-right">
              <!-- <a href="{!! url('/sellers/create'); !!}" class="btn btn-info"><span class="fa fa-plus"></span> Add Seller</a> -->
              </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(count($users) > 0)
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Invoicer Name</th>
                  <th>Sales Person</th>
                  <th>Date</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  
                  <tr>
                      <td>123</td>
                      <td>James Bond</td>
                      <td>Racheal Jack</td>
                      <td>08-Jan-2018</td>
                      <td>R 277.97</td>
                      <td>
                        <span  data-toggle="modal" data-target="#exampleModalCenter"  class="label label-success">Paid</span>
                      </td>
                      <td>
                        <a href="{!! url('/invoices/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                        <a href="{!! url('/invoices/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                        <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                      </td>
                    </tr>
                    <tr>
                        <td>123</td>
                        <td>James Bond</td>
                        <td>Racheal Jack</td>
                        <td>08-Jan-2018</td>
                        <td>R 277.97</td>
                        <td>
                          <span data-toggle="modal" data-target="#exampleModalCenter" class="label label-partial">Partial Paid</span>
                        </td>
                        <td>
                          <a href="{!! url('/invoices/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                          <a href="{!! url('/invoices/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                          <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                        </td>
                      </tr>
                      <tr>
                          <td>123</td>
                          <td>James Bond</td>
                          <td>Racheal Jack</td>
                          <td>08-Jan-2018</td>
                          <td>R 277.97</td>
                          <td>
                            <span data-toggle="modal" data-target="#exampleModalCenter"  class="label label-success">Paid</span>
                          </td>
                          <td>
                            <a href="{!! url('/invoices/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a href="{!! url('/invoices/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                            <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                          </td>
                        </tr>
  
                    <tr>
                        <td>124</td>
                        <td>Jhon Elia</td>
                        <td>Racheal Jack</td>
                        <td>07-Jan-2018</td>
                        <td>R 187.97</td>
                        <td>
                            <span class="label label-danger">Unpaid</span>
                        </td>
                        <td>
                          <a href="{!! url('/invoices/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                          <a href="{!! url('/invoices/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                          <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                        </td>
                      </tr>
  
                      <tr>
                          <td>125</td>
                          <td>Mc Grith </td>
                          <td>Chinara Ait</td>
                          <td>05-Jan-2018</td>
                          <td>R 877.97</td>
                          <td>
                            <span class="label label-danger">Unpaid</span>
                          </td>
                          <td>
                            <a href="{!! url('/invoices/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a href="{!! url('/invoices/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                            <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                          </td>
                        </tr>
  
                        <tr>
                            <td>125</td>
                            <td>Mc Grith </td>
                            <td>Chinara Ait</td>
                            <td>05-Jan-2018</td>
                            <td>R 877.97</td>
                            <td>
                              <span class="label label-warning">Draft</span>
                            </td>
                            <td>
                              <a href="{!! url('/invoices/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                              <a href="{!! url('/invoices/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                              <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                            </td>
                          </tr>
  
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Code</th>
                  <th>Invoice Name</th>
                  <th>Sales Person</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              @else
              <div>No Record found.</div>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->   


      {{-- modal for the transaction details which will be popup by clicking the status label --}}

      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Transaction Details</h4>
                  </div>
                  <div class="modal-body">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="name">Customer Name</label>
                          <input type="text" disabled value="Jhon Mc Grith" class="form-control" id="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label for="code">Payment Date</label>
                          <input type="text" disabled value="22/02/2019" class="form-control" id="code" placeholder="Enter Circumference">
                        </div>
                        <div class="form-group">
                            <label for="status">Payment Method</label>
                            <select disabled name="status" class="form-control">
                              <option selected>Cash </option>
                              <option> Bank Transfer </option>
                              <option> Online </option>
                            </select>
                          </div>
                        <div class="form-group">
                          <label for="code">Amount</label>
                          <input type="text" disabled value="R 8500" class="form-control" id="code" placeholder="Enter Circumference">
                        </div>
                        <div class="form-group">
                          <label for="code">Transaction Number</label>
                          <input type="text" disabled value="85004582" class="form-control" id="code" placeholder="Enter Circumference">
                        </div>
                        <div class="form-group">
                          <label for="price">Account Number</label>
                          <input type="text" disabled value=" **** **871234" class="form-control" id="price" placeholder="Enter Length">
                        </div>
                        <div class="form-group">
                          <label for="price">Country</label>
                          <input type="text" disabled value="South Africa" class="form-control" id="price" placeholder="Enter Length">
                        </div>
                        
                      </div>
                      <!-- /.box-body -->
                    </form>
                  </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              
            </div>
          </div>
        </div>
@endsection