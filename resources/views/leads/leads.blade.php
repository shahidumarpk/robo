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
              <h3 class="box-title">Leads List</h3>
              <span class="pull-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddModalCenter">
                  Add New Leads
                </button>
              </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(count($users) > 0)
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone No.</th>
                  <th>Email</th>
                  <th>Assigned To</th>
                  <th>At</th>
                  <th>Type</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php 
                $id=0;
                @endphp
                @for ($i = 0; $i <= 9; $i++)
                @php 
                $id++;
                @endphp
                  <tr>
                    <td>{{$id}}</td>
                    <td>Micheal Gak</td>
                    <td>Address goes here</td>
                    <td>+1 123 4567 89</td>
                    <td>email@robodoor.com</td>
                    <td>Florista Rean</td>
                    <td>01-Jan-2019 11:15 AM</td>
                    <td class="text-primary">WebLead</td>
                    <td><span class="label label-success">Assigned</span></td>
                    <td>
                      <a href="{{url('lead')}}/1" class="btn btn-primary" title="View Detail"><i class="fa fa-eye"></i> </a>    
                      <button  class="btn btn-success" title="Edit" data-toggle="modal" data-target="#EditModalCenter"><i class="fa fa-edit"></i> </button>
                      <button  class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </button>
                    </td>
                   
                    

                  </tr>
                  @endfor
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone No.</th>
                  <th>Email</th>
                  <th>Assigned To</th>
                  <th>At</th>
                  <th>Type</th>
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
<!-- add modal  -->
<div class="modal fade" id="AddModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">New Lead Information</h4>
          </div>
          <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="code">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Address">
                 </div>
                <div class="form-group">
                    <label for="price">Phone</label>
                    <input type="text" class="form-control" id="phoneno" placeholder="Enter Phone">
                </div>
                <div class="form-group">
                    <label for="price">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="5"> </textarea>
                </div>
                <div class="form-group">
                  <label for="status">Assigned To</label>
                  <select name="status" class="form-control">
                    <option disabled selected>Select Agent/Distributor </option>
                    <option value="0">None </option>
                    <option value="1">Florin Ristea(Agent)</option>
                    <option value="2">John SMith (Agent)</option>
                    <option value="3">Shahid (Distributor)</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="status">Type</label>
                  <select name="status" class="form-control">
                    <option disabled selected>Select Type of Lead </option>
                    <option value="1">Cold Lead</option>
                    <option value="2">Web Lead</option>
                    <option value="3">Call-in Lead</option>
                  </select>
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


<!-- Edit modal  -->
<div class="modal fade" id="EditModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Lead Information</h4>
            </div>
            <div class="modal-body">
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" value="Micheal Gak">
                  </div>
                  <div class="form-group">
                      <label for="code">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="Enter Address" value="Address goes here	">
                   </div>
                  <div class="form-group">
                      <label for="price">Phone</label>
                      <input type="text" class="form-control" id="phoneno" placeholder="Enter Phone" value="+1 123 4567 89	">
                  </div>
                  <div class="form-group">
                      <label for="price">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter Email" value="email@robodoor.com	">
                  </div>
                  <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" class="form-control" rows="5">Looking for Gates and much more</textarea>
                  </div>
                  <div class="form-group">
                    <label for="status">Assigned To</label>
                    <select name="status" class="form-control">
                      <option disabled selected>Select Agent/Distributor </option>
                      <option value="1" selected>Florin Ristea(Agent)</option>
                      <option value="2">John SMith (Agent)</option>
                      <option value="3">Shahid (Distributor)</option>
                    </select>
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