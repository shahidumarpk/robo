@extends('layouts.mainlayout')
@section('content')
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

<!-- Advance Filter Begins -->
<div class="row">
  <div class="col-md-12">
      <form class="form-horizontal" action="{!! url('/orders'); !!}" method="get" enctype="multipart/form-data">
        @csrf
      <div class="box box-success collapsed-box">
        <div class="box-header with-border">
          <h3 class="box-title">Advance Filter</h3>            
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
              <label>Select Product</label>
              <select name="shopname" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Shop" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
               <option value="all">All</option>
               <option value="1">DELUX Gate</option>
               <option value="2">TRELLES Fixture</option>
              </select>
              
            </div>

              <div class="col-md-6">
                <label>Select Status</label>
                <select name="status" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select Status" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
                 <option value="all">All</option>
                 <option value="1">New</option>
                 <option value="2">Closed</option>
                 <option value="2">Draft</option>
                </select>
                
              </div>
              <div class="col-md-6">
                  <label class="" for=""> Customer Name </label>
                  <input type="text" class="form-control" value="" placeholder="Customer Name">
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
              $(function() {
                $('#customrange1').daterangepicker({
                  opens: 'left'
                }, function(start, end, label) {
                  console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                });
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
        <div class="box-footer clearfix">
            <button type="submit" class="pull-right btn btn-primary" id="searchRecords">Search
              <i class="fa fa-search"></i></button>
          </div>
      </div>
      <!-- /.box -->
    </form>
    </div>
</div>
<!-- Advance Filter Ends -->


<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Quotes</h3>
              <a href="{{url('/quotes/create')}}" class="btn btn-primary pull-right">New Quote</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>Sales Person</th>
                  <th>Date</th>
                  <th>Total Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td>123</td>
                    <td>James Bond</td>
                    <td>Racheal Jack</td>
                    <td>08-Jan-2018</td>
                    <td>$277.97</td>
                    <td>
                      <span class="label label-primary">Closed</span>
                    </td>
                    <td>
                      {{-- <a href="{!! url('/quote/table'); !!}" class="btn btn-info" title="View Table"><i class="fa fa-suitcase"></i> </a>     --}}
                      <a href="{!! url('/quotes/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <a href="{!! url('/quotes/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                      <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                    </td>
                  </tr>

                  <tr>
                      <td>124</td>
                      <td>Jhon Elia</td>
                      <td>Racheal Jack</td>
                      <td>07-Jan-2018</td>
                      <td>$187.97</td>
                      <td>
                          <span class="label label-info">New</span>
                      </td>
                      <td>
                        <a href="{!! url('/quotes/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                        <a href="{!! url('/quotes/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                        <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                      </td>
                    </tr>

                    <tr>
                        <td>125</td>
                        <td>Mc Grith </td>
                        <td>Chinara Ait</td>
                        <td>05-Jan-2018</td>
                        <td>$877.97</td>
                        <td>
                          <span class="label label-info">New</span>
                        </td>
                        <td>
                          <a href="{!! url('/quotes/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                          <a href="{!! url('/quotes/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                          <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                        </td>
                      </tr>

                      <tr>
                          <td>125</td>
                          <td>Mc Grith </td>
                          <td>Chinara Ait</td>
                          <td>05-Jan-2018</td>
                          <td>$877.97</td>
                          <td>
                            <span class="label label-warning">Draft</span>
                          </td>
                          <td>
                            <a href="{!! url('/quotes/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a href="{!! url('/quotes/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                            <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                          </td>
                        </tr>

                        <tr>
                            <td>125</td>
                            <td>Mc Grith </td>
                            <td>Chinara Ait</td>
                            <td>05-Jan-2018</td>
                            <td>$877.97</td>
                            <td>
                              <span class="label label-success">Invoiced</span>
                            </td>
                            <td>
                              <a href="{!! url('/quotes/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                              <a href="{!! url('/quotes/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                              <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                            </td>
                          </tr>


                      <tr>
                          <td>126</td>
                          <td>James Bond</td>
                          <td>Racheal Jack</td>
                          <td>04-Jan-2018</td>
                          <td>$967.97</td>
                          <td>
                            
                            <span class="label label-primary">Closed</span>
                          </td>
                          <td>
                            <a href="{!! url('/quotes/1'); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a href="{!! url('/quotes/1/edit'); !!}" class="btn btn-success" title="Edit Details"><i class="fa fa-edit"></i> </a>    
                            <a href="" class="btn btn-primary" title="Download Details"><i class="fa fa-download"></i> </a>    
                          </td>
                        </tr>
                 
                </tbody>
                <tfoot>
                <tr>
                  <th>Quote No</th>
                  <th>Customer Name</th>
                  <th>Seller Name</th>
                  <th>Date</th>
                  <th>Total Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->   

@endsection