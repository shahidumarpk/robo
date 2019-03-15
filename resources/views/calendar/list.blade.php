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
              <h3 class="box-title">Events/Schedule List</h3>
              <span class="pull-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#NewEvent" title="Create New Event/Schedule"><li class="fa fa-plus"></li> New Event/Schedule</button>
              </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Event Id</th>
                  <th>Order No</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>At</th>
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
                    <td>123{{$i}}</td>
                    <td>Event Title {{$i}}</td>
                    <td>Event Description goes here</td>
                    <td>01-Jan-2019 11:15 AM</td>
                    <td>
                      <button  class="btn btn-success" title="Edit" data-toggle="modal" data-target="#EditModalCenter"><i class="fa fa-edit"></i> </button>
                      <button  class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i> </button>
                    </td>
                   
                    

                  </tr>
                  @endfor
                </tbody>
                <tfoot>
                <tr>
                    <th>Event Id</th>
                    <th>Order No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>At</th>
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
                    <option value="1">Florin Ristea(Agent)</option>
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


<!-- Edit modal  -->
<div class="modal fade" id="EditModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create New Event</h4>
            </div>
            <div class="modal-body">
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
                          <option value="1">Florin Ristea(Agent)</option>
                          <option value="2">John SMith (Agent)</option>
                          <option value="3">Shahid (Distributor)</option>
                        </select>
                      </div>
                      
                    </div>
                    <!-- /.box-body -->
      
                      
                  </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" onclick="showsuccess()">Created</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        
        
        </div>
    </div>
  </div>


  
<!-- modal add event -->
<div class="modal fade" id="NewEvent" tabindex="-1" role="dialog" aria-labelledby="NewEvent" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Event Details</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name="eventtime" autocomplete="off" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                          <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                          </div>                 
                        <div class="form-group">
                            <label for="orderno">Enter Order No</label>
                            <input type="text" name="orderno" class="form-control" id="orderno" placeholder="Enter Order No">
                        </div>
                        <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="10" name="description" class="form-control" id="description" placeholder="Enter Description"></textarea>
                        </div>
                        
                    </div>
                    </div>
                    <!-- /.box-body -->
                
                    
                    </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" onclick="showsuccess()">Created</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        
        
        </div>
    </div>
    </div>
    <!-- model ends -->

 <script type="text/javascript">
    function showsuccess(){
        swal("Success", "New Event/Schedule Created.", "success");
        $('.modal').modal('hide');
    }
    $(function () {
        $('#datetimepicker1').datetimepicker({
            sideBySide: true,
            minDate: new Date(<?php echo date('Y')?>, <?php echo date('m')?> - 1, <?php echo date('d')?>),
        });
        $('#datetimepicker2').datetimepicker({
            sideBySide: true,
            minDate: new Date(<?php echo date('Y')?>, <?php echo date('m')?> - 1, <?php echo date('d')?>),
        });
        var d = new Date();
        var month = d.getMonth()+1;
        var day = d.getDate();

        var output = d.getFullYear() + '/' +
        (month<10 ? '0' : '') + month + '/' +
        (day<10 ? '0' : '') + day;
        $("#eventtime").val(output + " 00:01:00");
    });
</script>


@endsection