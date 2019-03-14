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
              <h3 class="box-title">Distributors List</h3>
              <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalCenter">
                Add New Distributors
              </button>

              <span class="pull-right">
              <!-- <a href="{!! url('/sellers/create'); !!}" class="btn btn-info"><span class="fa fa-plus"></span> Add Seller</a> -->
              </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(count($users) > 0)
            <div class="table-responsive">
              <table id="example1" class="display  nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Distributors Name</th>
                  <th>Phone </th>
                  <th>Email</th>
                  <th>City</th>
                  <th>Country</th>
                  <th>Address</th>
                  <th>Company Name</th>
                  <th>VAT Number</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $index = 1; ?>
                @foreach($users as $user)
                  <tr>
                    <td>{{$index++}}</td>
                    <td>{{$user->fname}} {{$user->lname}}</td>
                    <td>{{$user->phonenumber}}</td>
                    <td>{{$user->email}}</td>
                    <td>Jhonesburg</td>
                    <td>SA</td>
                    <td>21, West, Barg Town,</td>
                    <td>Niku Solution PTE LTD</td>
                    <td>NK123456</td>
                    <td>{{$user->status == 1 ? "active" : 'Not active'}}</td>
                     <!-- For Delete Form begin - ->
                    <form id="form{{$user['id']}}" action="{{action('ProductController@destroy', $user['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                    </form>
                    <!-- For Delete Form Ends -->
                    <td>
                      <a href="{!! url('/distributors/'.$user['id']); !!}" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <a href="{!! url('/distributors/'.$user['id'].'/edit'); !!}"  class="btn btn-success" title="Edit"><i class="fa fa-edit"></i> </a>                      
                      <button   class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </button>                      
                      
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
                  <th>Distributors Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>City</th>
                  <th>Country</th>
                  <th>Address</th>
                  <th>Company Name</th>
                  <th>VAT Number</th>
                  <th>Status</th>
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
<!-- modal  -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Distributor</h4>
          </div>
          <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">First Name</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                  <label for="name">Last Name</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                  <label for="code">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="code">City</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter City">
                </div>
                <div class="form-group">
                  <label for="code">Country</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter Country">
                </div>
                <div class="form-group">
                  <label for="code">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                </div>
                <div class="form-group">
                  <label for="code">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label for="code">Company Name</label>
                  <input type="text" name="company" class="form-control" id="company" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label for="code">VAT Number</label>
                    <input type="text" class="form-control" id="vat_number" name="vat_number" placeholder="Enter VAT Number">
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
                  <label for="images">Profile Picture</label>
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