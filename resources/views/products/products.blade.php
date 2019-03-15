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
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            @if(count($users) > 0)
              <table id="example1" class="display responsive nowrap" style="width:100%">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Product Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>01</td>
                    <td  data-toggle="modal" data-target="#MarkupModal">Deluxe Trellis</td>
                  </tr>

                  <tr>
                      <td>02</td>
                      <td  data-toggle="modal" data-target="#MarkupModal">Deluxe Fixture </td>
                  </tr>
                    <tr>
                      <td>03</td>
                      <td data-toggle="modal" data-target="#MarkupModal">Econo Trellis </td>
                    </tr>
                      <tr>
                        <td>04</td>
                        <td data-toggle="modal" data-target="#MarkupModal">Econo Fixture </td>
                      </tr>
                      <tr>
                        <td>05</td>
                        <td data-toggle="modal" data-target="#MarkupModal">Alu Trellis </td>
                      </tr>
                      <tr>
                        <td>06</td>
                        <td data-toggle="modal" data-target="#MarkupModal">Alu Fixture  </td>
                      </tr>
                      <tr>
                        <td>07</td>
                        <td data-toggle="modal" data-target="#MarkupModal">Galv Trellis  </td>
                      </tr>
                      <tr>
                        <td>08</td>
                        <td data-toggle="modal" data-target="#MarkupModal">Galv Fixture  </td>
                      </tr>
                      <tr>
                        <td>09</td>
                        <td data-toggle="modal" data-target="#MarkupModal">DuPlus Trellis  </td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td data-toggle="modal" data-target="#MarkupModal">DuPlus Fixture </td>     
                      </tr>
                      <tr>
                        <td>11</td>
                        <td data-toggle="modal" data-target="#MarkupModal">Econo Burglar Bars   </td>
                      </tr>
                      <tr>
                        <td>12</td>
                        <td data-toggle="modal" data-target="#MarkupModal">Robo Clear Bars </td>
                      </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Code</th>
                  <th>Product Name</th>
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
                      <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" value="Deluxe Fixture" class="form-control" id="name" placeholder="Enter Name">
                      </div>
                        </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label for="code">Position of the barrier</label>
                        <input type="text" value="front" class="form-control" id="code" placeholder="Enter barrier position">
                      </div>
                      
                      <div class="form-group">
                        <label for="price">Width</label>
                        <input type="text" value="2000" class="form-control" id="price" placeholder="Enter Width">
                      </div>
                      <div class="form-group">
                        <label for="price">Height</label>
                        <input type="text" value="1500" class="form-control" id="price" placeholder="Enter Height">
                      </div>
                      
                      <div class="form-group">
                        <label for="quantity">Lock side</label>
                        <input type="text" value="right" class="form-control" id="quantity" placeholder="Enter Lock side">
                      </div>
                      <div class="form-group">
                        <label for="quantity">Lockbar size</label>
                        <input type="text"  value="1.2" class="form-control" id="quantity" placeholder="Enter Lockbar size">
                      </div>
                      
                      
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="quantity">Number of locks</label>
                            <input type="text" value="1" class="form-control" id="quantity" placeholder="Enter Number of locks">
                          </div>
                          <div class="form-group">
                            <label for="quantity">Key alike</label>
                            <input type="text" value="2" class="form-control" id="quantity" placeholder="Enter Key alike">
                          </div>
                      <div class="form-group">
                        <label for="quantity">Lock type</label>
                        <input type="text" value="straight" class="form-control" id="quantity" placeholder="Enter Lock type">
                      </div>
                    
                      <div class="form-group">
                        <label for="quantity">Fitment</label>
                        <input type="text" value="2.2" class="form-control" id="quantity" placeholder="Enter Fitment">
                      </div>
                    
                      <div class="form-group">
                        <label for="quantity">Faceon beams</label>
                        <input type="text" value="1.3" class="form-control" id="quantity" placeholder="Enter Faceon beams">
                      </div>
                     
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="quantity">Faceon size</label>
                            <input type="text"  value="5.3" class="form-control" id="quantity" placeholder="Enter Faceon size">
                          </div>
                        <div class="form-group">
                            <label for="quantity">Color</label>
                            <input type="text" value="green" class="form-control" id="quantity" placeholder="Enter Color">
                          </div>
                          <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="text" value="6.6" class="form-control" id="quantity" placeholder="Enter Quantity">
                          </div>
                      <div class="form-group">
                        <label for="quantity">Rate</label>
                        <input type="text" value="42.2" class="form-control" id="quantity" placeholder="Enter Rate">
                      </div>
                      
                        <div class="form-group">
                            <label for="quantity">Amount</label>
                            <input type="text" value="15,000" class="form-control" id="quantity" placeholder="Enter Amount">
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
                          <select name="status" multiple class="form-control" id="productnameEdit">
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
                          <input type="text" name="productname" class="form-control" id="name" value="Delux Fixture" readonly>
                        </div>
                      
                        <div class="form-group">
                            <label for="" class=""> Mark Up</label>
                              <input type="text" class="form-control" id="" placeholder="" value="10">
                          </div>
                        <div class="form-group">
                          <label for="" class="">Factory Mark up</label>
                            <input type="text" class="form-control" id="" placeholder="" value="15">
                        </div>
                        <div class="form-group">
                          <label for="" class="">Additional Mark up</label>
                            <input type="text" class="form-control" id="" placeholder="" value="15">
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