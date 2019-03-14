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
              <label>Select Status</label>
              <select name="shopname" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Shop" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
               <option value="all">All</option>
               <option value="1">New</option>
               <option value="1">Completed</option>
               <option value="2">Progress</option>
               <option value="2">Delayed</option>
              </select>
              
            </div>

              <div class="col-md-6">
                <label>Sellers Name</label>
               <input type="text" class="form-control" name="sellersname" placeholder="Sellers Name"/>
                
              </div>
              <div class="col-md-6">
                <label>Order Number</label>
               <input type="text" class="form-control" name="sellersname" placeholder="Order Number"/>
                
              </div>
              <div class="col-md-6">
                <label>Select Status</label>
               <input type="text" class="form-control" id="advanceSearchDate" name="sellersname"/>
                
              </div>
           
            <script>
              
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
              <h3 class="box-title">Manage Job Cards</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Order No</th>
                  <th>Job Card</th>
                  <th>Delivery Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                  <tr>
                    <td>124</td>
                    <td onclick=""><a href="{{url('/orders/1/product/1')}}">DELUXE TRELLIS <br/><small>This product needs to get ready 2 days before the deadline</small></a></td>
                    <td>01-Jan-2018</td>
                    <td>
                      <span class="label label-primary">New</span>
                    </td>
                    <td>
                      <a href="{{url('/orders/1/product/1')}}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      {{-- <a href="{!! url('/orders/createticket'); !!}" class="btn btn-info"><i class="fa fa-support"></i></a> --}}
                    </td>
                   
                    

                  </tr>
                  <tr>
                    <td>124</td>
                    <td onclick=""><a href="{{url('/orders/1/product/1')}}">Alu TRELLIS <br/><small>Ask buyer for the color once again</small></a></td>
                    <td>02-Jan-2018</td>
                    <td>
                      <span class="label label-success">Completed</span>
                    </td>
                    <td>
                      <a href="{{url('/orders/1/product/1')}}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      {{-- <a href="{!! url('/orders/createticket'); !!}" class="btn btn-info"><i class="fa fa-support"></i></a> --}}
                    </td>
                   
                    

                  </tr>
                  <tr>
                    <td>124</td>
                    <td onclick=""><a href="{{url('/orders/1/product/1')}}">ECONO TRELLIS <br/><small>the installation is not yet confirmed</small></a></td>
                    <td>03-Jan-2018</td>
                    <td>
                      <span class="label label-warning">Progress</span>
                    </td>
                    <td>
                      <a href="{{url('/orders/1/product/1')}}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      {{-- <a href="{!! url('/orders/createticket'); !!}" class="btn btn-info"><i class="fa fa-support"></i></a> --}}
                    </td>
                   
                    

                  </tr>
                  <tr>
                    <td>127</td>
                    <td onclick=""><a href="{{url('/orders/1/product/1')}}">Galv TRELLIS <br/><small>Deliver the product by salesperson</small></a></td>
                    <td>04-Jan-2018</td>
                    <td>
                      <span class="label label-danger">Delayed</span>
                    </td>
                    <td>
                      <a href="{{url('/orders/1/product/1')}}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      {{-- <a href="{!! url('/orders/createticket'); !!}" class="btn btn-info"><i class="fa fa-support"></i></a> --}}
                    </td>
                   
                    

                  </tr>
                 
                </tbody>
                <tfoot>
                <tr>
                  <th>Order No</th>
                  <th>Seller Name</th>
                  <th>Order Date</th>
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

      <script>
      $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#advanceSearchDate').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#advanceSearchDate').daterangepicker({
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
</script>
@endsection