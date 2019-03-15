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
      <div class="breadcrumb_pic">
        <div class="col-md-4">
          <h1> Manage Products </h1>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Products</li>
            <li class="active">Manage Products</li>
          </ol>
        </div>
      </div>
      
        <form class="form-horizontal" action="{!! url('/products'); !!}" method="get" enctype="multipart/form-data">
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
            <div class="form-group col-md-12">
                <label>Select Category</label>
                <select name="categoryid" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Category" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
                 <option value="all">All</option>
                 <option value="1">Toys</option>
                 <option value="2">Food</option>
                </select>
                
              </div>

              <div class="form-group col-md-12">
                  <label>Keyword</label>
                  <input type="text" name="keyword" class="form-control"placeholder="Enter Keyword">                 
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
              <h3 class="box-title">Products List</h3>
              <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalCenter">
                Add New Product
              </button>

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
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>F001</td>
                    <td>Fresh Tuna Fish</td>
                    <td>K10.00</td>
                    <td>Toys</td>
                    <td><span class="btn btn-success">Active</span></td>
                     <!-- For Delete Form begin - ->
                    <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                    </form>
                    <!-- For Delete Form Ends -->
                    <td>
                      <a href="{!! url('/products/'.$user['id']); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <a href="{!! url('/products/'.$user['id'].'/edit'); !!}"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <!--
                      @if ($user['status'] === 1)
                        <a href="{!! url('/products/deactivate/'.$user['id']); !!}"  class="btn btn-warning" title="Deactivate"><i class="fa fa-times"></i> </a>
                      @else
                        <a href="{!! url('/products/active/'.$user['id']); !!}"  class="btn btn-info" title="Active"><i class="fa fa-check"></i> </a>
                      @endif
                       <button class="btn btn-danger" onclick="archiveFunction('form{{$user['id']}}')"><i class="fa fa-trash"></i></button>
                      <a href="{!! url('/products/resetpassword/'.$user->id); !!}"  class="btn btn-info" title="Reset Password"><i class="fa fa-key"></i> </a> -->
                    </td>
                   
                    

                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Code</th>
                  <th>Product Name</th>
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
<!-- modal  -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Product Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="code">Product Code</label>
                  <input type="text" class="form-control" id="code" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="price">Product Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="quantity">Available Qty</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" class="form-control">
                    <option disabled selected>Select Status </option>
                    <option  >Active </option>
                    <option  >Deactivate </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="description">Product Description</label>
                  <textarea name="description" class="form-control" rows="5"> </textarea>
                </div>
                <div class="form-group">
                  <label for="images">File input</label>
                  <input type="file" id="images" name="images">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
      
    </div>
  </div>
</div>

@endsection

{{-- not to show, just backup 15march --}}
@section("nonetoshowbutbackup")
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
        <form class="form-horizontal" action="" method="get" enctype="multipart/form-data">
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
                 <option value="1">Deluxe Fixture</option>
                 <option value="2">Deluxe TRELLES </option>
                </select>
                
              </div>
  
                <div class="col-md-6">
                  <label>Select Status</label>
                  <select name="status" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select Status" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
                   <option value="all">All</option>
                   <option value="1">Out of Stock</option>
                   <option value="2">Less than Level</option>
                   <option value="2">In Stock</option>
                  </select>
                  
                </div>
                <div class="col-md-6">
                    <label class="" for=""> Inventory Name </label>
                    <input type="text" class="form-control" value="" placeholder="Inventory Name">
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
              <button type="button" class="pull-right btn btn-primary" id="searchRecords">Search
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
              <h3 class="box-title">Inventory List</h3>
              <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalCenter">
                Add New Inventory
              </button>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(count($users) > 0)
            <div class="table-responsive">
              <table id="example1" class="display nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Inventory Name</th>
                  <th>Stock</th>
                  <th>Unit</th>
                  <th>Material Cost</th>
                  <th>Laser Cutting</th>
                  <th>Powder Coating</th>
                  <th>Rate Per Unit</th>
                  <th>Rate m/p</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>19MM STEEL UPRIGHT WHITE LC</td>
                    <td>6.6</td>
                    <td>Meter</td>
                    <td>R 61.12</td>
                    <td>R 34.00</td>
                    <td>R 30.50</td>
                    <td>R 125.62</td>
                    <td>R 19.03</td>
                    <td>
                      <a href="{{url('/inventory/1/')}}" class="btn btn-info" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddStock" title="Add More Stock"><i class="fa fa-plus"></i></button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MinusStock" title="Less Stock"><i class="fa fa-minus"></i></button>
                      <a href="{{url('/inventory/1/edit')}}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a  class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>19MM STEEL UPRIGHT CHARCOAL LC</td>
                    <td>6.6</td>
                    <td>Meter</td>
                    <td>R 61.12</td>
                    <td>R 34.00</td>
                    <td>R 30.50</td>
                    <td>R 125.62</td>
                    <td>R 19.03</td>
                    <td>
                      <a href="{{url('/inventory/1/')}}" class="btn btn-info" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddStock" title="Add More Stock"><i class="fa fa-plus"></i></button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MinusStock" title="Less Stock"><i class="fa fa-minus"></i></button>
                      <a href="{{url('/inventory/1/edit')}}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a  class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>

                  <tr>
                    <td>12MM STEEL UPRIGHT BRONZE LC</td>
                    <td>6.6</td>
                    <td>Meter</td>
                    <td>R 61.12</td>
                    <td>R 34.00</td>
                    <td>R 30.50</td>
                    <td>R 125.62</td>
                    <td>R 19.03</td>
                    <td>
                      <a href="{{url('/inventory/1/')}}" class="btn btn-info" title="View Detail"><i class="fa fa-eye"></i> </a> 
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddStock" title="Add More Stock"><i class="fa fa-plus"></i></button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MinusStock" title="Less Stock"><i class="fa fa-minus"></i></button>   
                      <a href="{{url('/inventory/1/edit')}}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a  class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>

                  <tr>
                    <td>19MM STEEL UPRIGHT CHARCOAL</td>
                    <td>6.6</td>
                    <td>Meter</td>
                    <td>R 61.12</td>
                    <td>R 34.00</td>
                    <td>R 30.50</td>
                    <td>R 125.62</td>
                    <td>R 19.03</td>
                    <td>
                      <a href="{{url('/inventory/1/')}}" class="btn btn-info" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddStock" title="Add More Stock"><i class="fa fa-plus"></i></button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MinusStock" title="Less Stock"><i class="fa fa-minus"></i></button>
                      <a href="{{url('/inventory/1/edit')}}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a  class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>

                  <tr>
                    <td>20 MM ALUMINIUM UPRIGHTS WHITE LC</td>
                    <td>6.6</td>
                    <td>Meter</td>
                    <td>R 61.12</td>
                    <td>R 34.00</td>
                    <td>R 30.50</td>
                    <td>R 125.62</td>
                    <td>R 19.03</td>
                    <td>
                      <a href="{{url('/inventory/1/')}}" class="btn btn-info" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddStock" title="Add More Stock"><i class="fa fa-plus"></i></button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MinusStock" title="Less Stock"><i class="fa fa-minus"></i></button>
                      <a href="{{url('/inventory/1/edit')}}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a  class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>

                  <tr>
                    <td>CARDBOARD</td>
                    <td>40.0</td>
                    <td>KG</td>
                    <td>R 398.00</td>
                    <td>-</td>
                    <td>-</td>
                    <td>R 398.00</td>
                    <td>R 9.95</td>
                    <td>
                      <a href="{{url('/inventory/1/')}}" class="btn btn-info" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddStock" title="Add More Stock"><i class="fa fa-plus"></i></button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MinusStock" title="Less Stock"><i class="fa fa-minus"></i></button>
                      <a href="{{url('/inventory/1/edit')}}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a  class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>  
                  </td>
                  </tr>
                  <tr>
                    <td>STAINLESS STEEL BEARINGS</td>
                    <td>1</td>
                    <td>Item</td>
                    <td>R 61.12</td>
                    <td>-</td>
                    <td>-</td>
                    <td>R 125.62</td>
                    <td>R 19.03</td>
                    <td>
                      <a href="{{url('/inventory/1/')}}" class="btn btn-info" title="View Detail"><i class="fa fa-eye"></i> </a>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddStock" title="Add More Stock"><i class="fa fa-plus"></i></button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MinusStock" title="Less Stock"><i class="fa fa-minus"></i></button>    
                      <a href="{{url('/inventory/1/edit')}}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a  class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>  
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Inventory Name</th>
                    <th>Stock</th>
                    <th>Unit</th>
                    <th>Material Cost</th>
                    <th>Laser Cutting</th>
                    <th>Powder Coating</th>
                    <th>Rate / Length</th>
                    <th>Rate m/p</th>
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
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
<!-- modal creat inventory -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Inventory</h4>
          </div>
          <div class="modal-body">
              <form role="form">
                  <div class="box-body">
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Inventory Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name of Inventory">
                    </div>
                    <div class="form-group">
                      <label for="type_of_purchase">Type of Purchase</label>
                      <select onchange="changeTypeOfPurchase()" id="type_of_purchase" name="type_of_purchase" class="form-control">
                        <option value="" disabled selected>Select Option</option>
                        <option value="meter">Brought in meters</option>
                        <option value="pcs">Pcs in box</option>
                        <option value="single item">Single item</option>
                        <option value="kilogram">Calculated in kg</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="stock_length">Inventory Stock Length</label>
                      <input type="text" name="stock_length" class="form-control" id="stock_length" placeholder="Enter Stock Length of Inventory">
                    </div>
                    <div class="form-group">
                      <label for="laser_cutting">Inventory Laser Cutting</label>
                      <input onkeyup="calculateRatePerLength()" type="number" name="laser_cutting" class="form-control" id="laser_cutting" placeholder="Enter Laser Cutting Charges">
                    </div>
                   
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                      <label for="material_cost">Inventory Material Costs</label>
                      <input onkeyup="calculateRatePerLength()" type="number" name="material_cost" class="form-control" id="material_cost" placeholder="Enter Material Cost of Inventory">
                    </div>
                    <div class="form-group">
                      <label for="powder_coating">Inventory Powder Coating</label>
                      <input onkeyup="calculateRatePerLength()" type="number" name="powder_coating" class="form-control" id="powder_coating" placeholder="Enter Powder Coating Charges">
                    </div>
                    <div class="form-group">
                      <label for="rate_per_length">Rate per Length</label>
                      <input onkeyup="calculateRatePerUnit()" type="text" name="rate_per_length" class="form-control" id="rate_per_length" placeholder="Enter Price per Length">
                    </div>
                    <div class="form-group">
                      <label for="rate_per">Rate per <span id="type_of_purchase_text"></span></label>
                      <input type="text" name="rate_per" class="form-control" id="rate_per" placeholder="Enter Rate per Unit">
                    </div>
                    
                    
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="status">Select Products in which the component is used</label>
                        <select name="status" multiple class="form-control" id="productname">
                            <option value="0" disabled>Select Products </option>
                            <option value="1">Deluxe Trellis  </option>
                            <option value="2">Deluxe Fixture</option>
                            <option value="3">Econo Fixture</option>
                            <option value="3">Alu Trellis</option>
                            <option value="3">Alu Fixture</option>
                            <option value="3">Galv Trellis</option>
                            <option value="3">Galv Fixture</option>
                            <option value="3">DuPlus Fixture</option>
                            <option value="3">DuPlus Trellis</option>
                            <option value="3">Econo Burglar Bars</option>
                            <option value="3">Econo Burglar Bars</option>
                            <option value="3">Robo Clear Bars</option>
                        </select>
                    </div>
                  </div>
                  </div>
                  <!-- /.box-body -->
              
                 
                </form>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary" onclick="showsuccess()">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
    
      
    </div>
  </div>
</div>
<!-- model ends -->

<!-- modal more stock -->
<div class="modal fade" id="AddStock" tabindex="-1" role="dialog" aria-labelledby="AddStock" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add More Stock for 19MM STEEL UPRIGHT WHITE LC</h4>
          </div>
          <div class="modal-body">
              <form role="form">
                  <div class="box-body">
                    <div class="col-md-12">  
                      <div class="form-group">
                          <label for="stock_length">Select Reason</label>
                          <select name="reason" class="form-control" id="reason">
                            <option value="purchased">Purchased</option>
                            <option value="other">other</option>
                          </select>
                        </div>                 
                    <div class="form-group">
                      <label for="stock_length">Enter Stock Quantity</label>
                      <input type="text" name="stock_length" class="form-control" id="stock_length" placeholder="Enter Stock Quantity">
                    </div>
                    <div class="form-group">
                      <label for="laser_cutting">Description</label>
                      <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description">
                    </div>
                   
                  </div>
                  </div>
                  <!-- /.box-body -->
              
                 
                </form>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary" onclick="showsuccess()">Update</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
    
      
    </div>
  </div>
</div>
<!-- model ends -->




<!-- modal minus stock -->
<div class="modal fade" id="MinusStock" tabindex="-1" role="dialog" aria-labelledby="MinusStock" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Less Stock for 19MM STEEL UPRIGHT WHITE LC</h4>
          </div>
          <div class="modal-body">
              <form role="form">
                  <div class="box-body">
                    <div class="col-md-12">                   
                      <div class="form-group">
                        <label for="stock_length">Select Reason</label>
                        <select name="reason" class="form-control" id="reason">
                          <option value="damaged">Damaged</option>
                          <option value="useless">Useless</option>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="stock_length">Enter Stock Quantity</label>
                      <input type="text" name="stock_length" class="form-control" id="stock_length" placeholder="Enter Stock Quantity">
                    </div>
                    <div class="form-group">
                      <label for="laser_cutting">Description</label>
                      <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description">
                    </div>
                   
                  </div>
                  </div>
                  <!-- /.box-body -->
              
                 
                </form>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary" onclick="showsuccess()">Update</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
    
      
    </div>
  </div>
</div>
<!-- model ends -->

<script>
  //select 2 code for the popup styling
    $(window).on('load',function() {
        $('#productname').select2();
        $('.select2-container').attr('style', 'width:100%');
        
    });

function showsuccess(){
  swal("Success", "Record has been updated.", "success");
  $('.modal').modal('hide');
}
  function changeTypeOfPurchase(){
    var typeofpurchase = document.getElementById('type_of_purchase').value;
    document.getElementById('type_of_purchase_text').innerHTML = typeofpurchase;
  }

  function calculateRatePerLength(){
    var material_cost = document.getElementById('material_cost').value;
    var laser_cutting = document.getElementById('laser_cutting').value;
    var powder_coating = document.getElementById('powder_coating').value;

    var total = +material_cost + +laser_cutting + +powder_coating;

    document.getElementById('rate_per_length').value = total;
  }
  
  function calculateRatePerUnit(){
    var rate_per_length = document.getElementById('rate_per_length').value;
    var stock_length = document.getElementById('stock_length').value;
    var total = rate_per_length / stock_length ;

    document.getElementById('rate_per').value = total;
  }
</script>
@endsection


@endsection