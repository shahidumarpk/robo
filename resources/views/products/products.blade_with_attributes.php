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
                 <option value="1">DELUX Gate</option>
                 <option value="2">TRELLES Gate</option>
                </select>
                
              </div>
  
                <div class="col-md-6">
                  <label>Select Status</label>
                  <select name="status" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select Status" multiple style="width: 100%;" tabindex="-1" aria-hidden="true">
                   <option value="all">All</option>
                   <option value="1">Active</option>
                   <option value="0">Inactive</option>
                  </select>
                  
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
                  <th>Circumference</th>
                  <th>Length</th>
                  <th>Total Surface</th>
                  <th>Unit Cost</th>
                  <th>Rate per meter</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>T001</td>
                    <td  data-toggle="modal" data-target="#MarkupModal">Deluxe Trellis</td>
                    <td>5.5</td>
                    <td>2.5</td>
                    <td>5.1</td>
                    <td>R 25.50</td>
                    <td>R 30.25</td>
                     <!-- For Delete Form begin - ->
                    <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                    </form>
                    <!-- For Delete Form Ends -->
                    <td>
                      <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                      <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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

                  <tr>
                      <td>F002</td>
                      <td  data-toggle="modal" data-target="#MarkupModal">Deluxe Fixture </td>
                      <td>6.5</td>
                      <td>3.5</td>
                      <td>4.1</td>
                      <td>R 15.50</td>
                      <td>R 32.25</td>
                       <!-- For Delete Form begin - ->
                      <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                          @csrf
                          <input name="_method" type="hidden" value="DELETE">
                      </form>
                      <!-- For Delete Form Ends -->
                      <td>
                        <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                        <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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

                    <tr>
                        <td>T003</td>
                        <td data-toggle="modal" data-target="#MarkupModal">Econo Trellis </td>
                        <td>8.5</td>
                        <td>9.5</td>
                        <td>2.1</td>
                        <td>R 45.50</td>
                        <td>R 75.25</td>
                         <!-- For Delete Form begin - ->
                        <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                        </form>
                        <!-- For Delete Form Ends -->
                        <td>
                          <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                          <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                          <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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

                      <tr>
                          <td>F004</td>
                          <td data-toggle="modal" data-target="#MarkupModal">Econo Fixture </td>
                          <td>5.5</td>
                          <td>2.5</td>
                          <td>5.1</td>
                          <td>R 25.50</td>
                          <td>R 30.25</td>
                           <!-- For Delete Form begin - ->
                          <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                              @csrf
                              <input name="_method" type="hidden" value="DELETE">
                          </form>
                          <!-- For Delete Form Ends -->
                          <td>
                            <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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
                      <tr>
                          <td>T005</td>
                          <td data-toggle="modal" data-target="#MarkupModal">Alu Trellis </td>
                          <td>5.5</td>
                          <td>2.5</td>
                          <td>5.1</td>
                          <td>R 25.50</td>
                          <td>R 30.25</td>
                           <!-- For Delete Form begin - ->
                          <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                              @csrf
                              <input name="_method" type="hidden" value="DELETE">
                          </form>
                          <!-- For Delete Form Ends -->
                          <td>
                            <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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
                      <tr>
                          <td>F006</td>
                          <td data-toggle="modal" data-target="#MarkupModal">Alu Fixture  </td>
                          <td>5.5</td>
                          <td>2.5</td>
                          <td>5.1</td>
                          <td>R 25.50</td>
                          <td>R 30.25</td>
                           <!-- For Delete Form begin - ->
                          <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                              @csrf
                              <input name="_method" type="hidden" value="DELETE">
                          </form>
                          <!-- For Delete Form Ends -->
                          <td>
                            <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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
                      <tr>
                          <td>F007</td>
                          <td data-toggle="modal" data-target="#MarkupModal">Galv Fixture  </td>
                          <td>5.5</td>
                          <td>2.5</td>
                          <td>5.1</td>
                          <td>R 25.50</td>
                          <td>R 30.25</td>
                           <!-- For Delete Form begin - ->
                          <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                              @csrf
                              <input name="_method" type="hidden" value="DELETE">
                          </form>
                          <!-- For Delete Form Ends -->
                          <td>
                            <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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
                      <tr>
                          <td>T008</td>
                          <td data-toggle="modal" data-target="#MarkupModal">DuPlus Trellis  </td>
                          <td>5.5</td>
                          <td>2.5</td>
                          <td>5.1</td>
                          <td>R 25.50</td>
                          <td>R 30.25</td>
                           <!-- For Delete Form begin - ->
                          <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                              @csrf
                              <input name="_method" type="hidden" value="DELETE">
                          </form>
                          <!-- For Delete Form Ends -->
                          <td>
                            <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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
                      <tr>
                          <td>F009</td>
                          <td data-toggle="modal" data-target="#MarkupModal">DuPlus Fixture </td>
                          <td>5.5</td>
                          <td>2.5</td>
                          <td>5.1</td>
                          <td>R 25.50</td>
                          <td>R 30.25</td>
                           <!-- For Delete Form begin - ->
                          <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                              @csrf
                              <input name="_method" type="hidden" value="DELETE">
                          </form>
                          <!-- For Delete Form Ends -->
                          <td>
                            <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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
                      <tr>
                          <td>B010</td>
                          <td data-toggle="modal" data-target="#MarkupModal">Econo Burglar Bars   </td>
                          <td>5.5</td>
                          <td>2.5</td>
                          <td>5.1</td>
                          <td>R 25.50</td>
                          <td>R 30.25</td>
                           <!-- For Delete Form begin - ->
                          <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                              @csrf
                              <input name="_method" type="hidden" value="DELETE">
                          </form>
                          <!-- For Delete Form Ends -->
                          <td>
                            <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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
                      <tr>
                          <td>C011</td>
                          <td data-toggle="modal" data-target="#MarkupModal">Robo Clear Bars </td>
                          <td>5.5</td>
                          <td>2.5</td>
                          <td>5.1</td>
                          <td>R 25.50</td>
                          <td>R 30.25</td>
                           <!-- For Delete Form begin - ->
                          <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                              @csrf
                              <input name="_method" type="hidden" value="DELETE">
                          </form>
                          <!-- For Delete Form Ends -->
                          <td>
                            <a  data-toggle="modal" data-target="#exampleModalCenterShow" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                            <a  data-toggle="modal" data-target="#exampleModalCenterEdit"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
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
                    <th>Circumference</th>
                    <th>Length</th>
                    <th>Total Surface</th>
                    <th>Unit Cost</th>
                    <th>Rate per meter</th>
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
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Product</h4>
            <button type="button" id="windowsbtn" class="btn btn-primary" onclick="windows()">Windows</button>
            <button type="button"  id="doorsbtn" class="btn btn-primary" onclick="doors()">Doors</button>
          </div>
          <script>
            function doors(){
              $('#add_doors').show();
              $('#add_windows').hide();
              
              $('#doorsbtn').removeClass('btn-default');
              $('#doorsbtn').addClass('btn-primary');
              
              $('#windowsbtn').removeClass('btn-primary');
              $('#windowsbtn').addClass('btn-default');
            }
            function windows(){
              $('#add_doors').hide();
              $('#add_windows').show();
              
              $('#windowsbtn').removeClass('btn-default');
              $('#windowsbtn').addClass('btn-primary');
             
              $('#doorsbtn').removeClass('btn-primary');
              $('#doorsbtn').addClass('btn-default');
            }
          </script>
          <div class="modal-body" id="add_windows">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="col-md-12">
                <div class="form-group">
                  <label for="name">Product Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Name">
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label for="code">Height</label>
                  <input type="text" class="form-control" id="code" placeholder="Enter Circumference">
                </div>
                <div class="form-group">
                  <label for="price">Width</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter Length">
                </div>
               
                <div class="form-group">
                  <label for="quantity">Faceon beams</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Unit Cost">
                </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="quantity">Fitment</label>
                        <input type="text" class="form-control" id="quantity" placeholder="Enter Total Surface">
                      </div>
                <div class="form-group">
                  <label for="quantity">Color</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Unit Cost">
                </div>
                <div class="form-group">
                  <label for="quantity">Quantity</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Unit Cost">
                </div>
                
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label for="quantity">Rate</label>
                        <input type="text" class="form-control" id="quantity" placeholder="Enter Unit Cost">
                      </div>
                      <div class="form-group">
                        <label for="quantity">Amount</label>
                        <input type="text" class="form-control" id="quantity" placeholder="Enter Rate per meter">
                      </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                      <option disabled selected>Select Status </option>
                      <option  >Active </option>
                      <option  >Deactivate </option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                    <label for="status">Select Inventory which use in product</label>
                    <select name="status" multiple class="form-control" id="productname">
                        <option value="0" disabled>Select Inventory </option>
                        <option value="1">19MM STEEL </option>
                        <option value="2">19MM ALUMINIUM </option>
                        <option value="3">19MM STEEL</option>
                    </select>
                </div>
              </div>
                
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <div class="modal-body" style="display:none" id="add_doors">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="col-md-12">
                <div class="form-group">
                  <label for="name">Product Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Name">
                </div>
                  </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label for="code">Position of the barrier</label>
                  <input type="text" class="form-control" id="code" placeholder="Enter barrier position">
                </div>
                
                <div class="form-group">
                  <label for="price">Width</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter Width">
                </div>
                <div class="form-group">
                  <label for="price">Height</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter Height">
                </div>
                
                <div class="form-group">
                  <label for="quantity">Lock side</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Lock side">
                </div>
                <div class="form-group">
                  <label for="quantity">Lockbar size</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Lockbar size">
                </div>
                
                
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="quantity">Number of locks</label>
                      <input type="text" class="form-control" id="quantity" placeholder="Enter Number of locks">
                    </div>
                    <div class="form-group">
                      <label for="quantity">Key alike</label>
                      <input type="text" class="form-control" id="quantity" placeholder="Enter Key alike">
                    </div>
                <div class="form-group">
                  <label for="quantity">Lock type</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Lock type">
                </div>
              
                <div class="form-group">
                  <label for="quantity">Fitment</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Fitment">
                </div>
              
                <div class="form-group">
                  <label for="quantity">Faceon beams</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Faceon beams">
                </div>
               
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="quantity">Faceon size</label>
                      <input type="text" class="form-control" id="quantity" placeholder="Enter Faceon size">
                    </div>
                  <div class="form-group">
                      <label for="quantity">Color</label>
                      <input type="text" class="form-control" id="quantity" placeholder="Enter Color">
                    </div>
                    <div class="form-group">
                      <label for="quantity">Quantity</label>
                      <input type="text" class="form-control" id="quantity" placeholder="Enter Quantity">
                    </div>
                <div class="form-group">
                  <label for="quantity">Rate</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Rate">
                </div>
                
                  <div class="form-group">
                      <label for="quantity">Amount</label>
                      <input type="text" class="form-control" id="quantity" placeholder="Enter Amount">
                    </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="status">Status</label>
                      <select name="status" class="form-control">
                        <option disabled selected>Select Status </option>
                        <option  >Active </option>
                        <option  >Deactivate </option>
                      </select>
                    </div>
                <div class="form-group">
                    <label for="status">Select Inventory which use in product</label>
                    <select name="status" multiple class="form-control" id="productname1">
                        <option value="0" disabled>Select Inventory </option>
                        <option value="1">19MM STEEL </option>
                        <option value="2">19MM ALUMINIUM </option>
                        <option value="3">19MM STEEL</option>
                    </select>
                </div>
              </div>
                
                
                
              </div>
              <!-- /.box-body -->
            </form>
          </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenterShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Product Details</h4>
            </div>
            <div class="modal-body">
                <div class="row">
              
                    <div class="col-md-12">
                    <table class="table table-striped">
                      <tr>
                          <td><b>Product Name</b></td>
                          <td>Deluxe Fixture</td>
                      </tr>
                      <tr>
                              <td><b>Circumference</b></td>
                          <td>6.3</td>
                      </tr>
                      <tr>
                          <td><b>Length</b></td>
                          <td>7.25</td>
                      </tr>
                      <tr>
                          <td><b>Total Surface</b></td>
                          <td>4.5</td>
                      </tr>
                      <tr>
                          <td><b>Unit Cost</b></td>
                          <td>35.60</td>
                      </tr>
                      <tr>
                          <td><b>Rate per meter</b></td>
                          <td>75.82</td>
                      </tr>
                      <tr>
                        <td><b>Inventory Items</b></td>
                        <td>
                          <label class="label label-info margin">12MM STEEL LC	</label>
                          <label class="label  label-info margin"> 19MM STEEL LC	</label>
                          <label class="label  label-info margin">12MM ALLUMINIUM LC	</label>
                        </td>
                      </tr>
                      <tr>
                          <td><b>Markup</b></td>
                          <td>5.82</td>
                      </tr>
                      <tr>
                          <td><b>Factory Markup</b></td>
                          <td>4.12</td>
                      </tr>
                      <tr>
                          <td><b>Scrap Rate </b></td>
                          <td>2.52</td>
                      </tr>
                      <tr>
                          <td><b>Created At</b></td>
                          <td>09-10-2018</td>
                      </tr>
                      <tr>
                          <td><b>Updated At</b></td>
                          <td>09-10-2018</td>
                      </tr>
                      <tr>
                          <td><b>Status</b></td>
                          <td>
                              <span class="text-green"><b>Active</b></span>                        
                          </td>
                      </tr>
                    </table>
                    </div>
                    </div>
            </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        
      </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenterEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Product</h4>
              </div>
              <div class="modal-body">
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="name">Product Name</label>
                      <input type="text" value="Deluxe Fixture" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="code">Circumference</label>
                      <input name="" type="text" value="6.6" class="form-control" id="code" placeholder="Enter Circumference">
                    </div>
                    <div class="form-group">
                      <label for="length">Length</label>
                      <input name="" type="text" value="5.5" class="form-control" id="length" placeholder="Enter Length">
                    </div>
                    <div class="form-group">
                      <label for="surace">Total Surface</label>
                      <input name="surace" type="text"  value="2.3" class="form-control" id="surace" placeholder="Enter Total Surface">
                    </div>
                    <div class="form-group">
                      <label for="unit_cost">Unit Cost</label>
                      <input name="unit_cost" type="text"  value="25.36" class="form-control" id="unit_cost" placeholder="Enter Unit Cost">
                    </div>
                    <div class="form-group">
                      <label for="ratepermeter">Rate per meter</label>
                      <input name="v" type="text"  value="35.90" class="form-control" id="ratepermeter" placeholder="Enter Rate per meter">
                    </div>
                    <div class="form-group">
                      <label for="markup">Markup</label>
                      <input name="markup" type="text"  value="5.90" class="form-control" id="markup" placeholder="Enter Rate per meter">
                    </div>
                    <div class="form-group">
                      <label for="factory_markup">Factory Markup</label>
                      <input name="factory_markup" type="text"  value="15.90" class="form-control" id="factory_markup" placeholder="Enter Rate per meter">
                    </div>
                    <div class="form-group">
                      <label for="scrap_rate">Scrap Rate</label>
                      <input name="scrap_rate" type="text"  value="32.90" class="form-control" id="scrap_rate" placeholder="Enter Rate per meter">
                    </div>
    
                    <div class="form-group">
                        <label for="status">Select Inventory which use in product</label>
                        <select name="status" multiple class="form-control" id="productnameEdit">
                            <option value="0" disabled>Select Inventory </option>
                            <option value="1" selected>19MM STEEL </option>
                            <option value="2" selected>19MM ALUMINIUM </option>
                            <option value="3">19MM STEEL</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="status">Status</label>
                      <select name="status" class="form-control">
                        <option disabled selected>Select Status </option>
                        <option selected   >Active </option>
                        <option  >Deactivate </option>
                      </select>
                    </div>
                    
                  </div>
                  <!-- /.box-body -->
                </form>
              </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          
        </div>
      </div>
</div>

{{-- modal for markups --}}
<div class="modal fade" id="MarkupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Apply Markup's</h4>
            </div>
            <div class="modal-body">
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <form class="form-horizontal ">
                        <div class="form-group">
                          <label for="name">Product Name</label>
                          <input type="text" name="productname" class="form-control" id="name" value="Delux Fixture" placeholder="Enter Name">
                        </div>
                      
                        <div class="form-group">
                            <label for="" class=""> Mark Up</label>
                            
                              <input type="text" class="form-control" id="" placeholder="" value="">
                            
                          </div>
                        <div class="form-group">
                          <label for="" class="">Factory Mark up</label>
                          
                            <input type="text" class="form-control" id="" placeholder="" value="">
                         
                        </div>
                        <div class="form-group">
                            <label for="" class="">Scrap Rate</label>
                            
                              <input type="text" class="form-control" id="" placeholder="" value="">
                           
                          </div>
                        <div class="form-group">
                          <label for="" class="">Cost of Assembly</label>
                          
                            <input type="text" class="form-control" id="" placeholder="" value="">
                         
                        </div>
                  
                </div>
                <!-- /.box-body -->
              </form>
            </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        
      </div>
    </div>
  </div>


<script>
    //select 2 code for the popup styling
      $(window).on('load',function() {
          $('#productname').select2();
          $('#productnameEdit').select2();
          $('#productname1').select2();
          $('.select2-container').attr('style', 'width:100%');
          
      });
</script>

@endsection