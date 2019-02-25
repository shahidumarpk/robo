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
                    <td>G001</td>
                    <td>Security Chain Gate</td>
                    <td>$10.00</td>
                    <td>Door</td>
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
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Product</h4>
          </div>
          <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Product Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="code">Product Code</label>
                  <input type="text" class="form-control" id="code" placeholder="Enter Code">
                </div>
                <div class="form-group">
                  <label for="price">Product Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter Price">
                </div>
                <div class="form-group">
                  <label for="quantity">Available Qty</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter Quantity">
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
            </form>
          </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      
    </div>
  </div>
</div>

@endsection