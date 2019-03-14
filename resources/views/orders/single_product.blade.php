@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
<style>
.badge {
    padding: 5px 10px;
    font-size: 14px;
}
</style>
<section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Job Card No.: 123
          <small class="pull-right">Date: 21-Feb-2019</small>
        </h2>
      </div>


      <div class="box-content">
            <div class="box-header">
                <div class="col-md-6"><h4 class="box-title">Product Details </h4><h4></div>
                <div class="col-md-6"><h4><label class="label label-warning pull-right">Progress</label></h4></div>
    
              </div>
              
              <div class="box-body" id="add_windows">
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                      <div class="col-md-4">
                            <div class="form-group">
                                    <label for="quantity">Uploaded Photo</label>
                                    <br/>
                                <label><img src="{{asset('img/doors/door1.jpeg')}}" style="width: 80%"/></label>
                                  </div>
                      </div>
                    <div class="col-md-8    ">
                      <div class="form-group">
                        <label for="name">Product Name</label>
                        <h4> Deluxe Trellis </h4>
                      </div>
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="form-group">
                            <label for="code">Position of Barrier</label>
                            <br/>
                            <label class="badge badge-primary"> Front Side </label>
                          </div>
                         
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="code">Heigth</label>
                          <br/>
                            <label class="badge badge-primary">1500 </label>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label for="price">Width  </label>
                          <br/>
                            <label class="badge badge-primary"> 2000 </label>
                        </div>
                  </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">Rows of Flights</label>
                            <br/>
                            <label class="badge badge-primary"> 2 </label>
                          </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 2 --}}
                    <div class="col-md-3">
                        <label for="status">Choose Color</label><br/>
                       
                        <label class="badge badge-primary"> White</label>
                      </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">FITMENT AREA</label><br/>
                           
                            <label class="badge badge-primary"> Inside </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">PROTECTION BARS</label><br/>
                           
                            <label class="badge badge-primary"> Monkey Bars </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">DOGGY DOOR</label><br/>
                           
                            <label class="badge badge-primary"> Yes </label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">Lock Type</label><br/>
                           
                            <label class="badge badge-primary"> Deadlock </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">LOCK BAR SIZE </label><br/>
                           
                            <label class="badge badge-primary"> 50 </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">Key Alike </label><br/>
                           
                            <label class="badge badge-primary"> Yes </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">LOCK SIDE  </label><br/>
                           
                            <label class="badge badge-primary"> Central </label>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <hr>
                  
                    
  
                    {{-- 3--}}
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Top</label>
                              <br/>
                            <label class="badge badge-primary"> 50x25 </label>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Left</label>
                              <br/>
                            <label class="badge badge-primary"> 75x25 </label>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Bottom</label>
                              <br/>
                            <label class="badge badge-primary"> 75x25 </label>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Right</label>
                              <br/>
                            <label class="badge badge-primary"> 78x36 </label>
                            </div>
                    </div>
                    <hr>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">CORNER PLATES </label>
                              <br/>
                            <label class="badge badge-primary"> 2 </label>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">ANGLE BRAKETS</label>
                              <br/>
                            <label class="badge badge-primary"> 1 </label>
                            </div>
                            
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">TOTAL LOCKS</label><br/>
                           
                            <label class="badge badge-primary"> 3 </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                      
                        <div class="form-group">
                            <label for="quantity">Comment</label>
                           <textarea rows="5" class="form-control">This product should be deliver before 3 days of the deadline because it has to be cleaned before installation. </textarea>
                          </div>
                      
                    </div>
                    <div class="clearfix"></div>
                            
    
                  </div>
                  <!-- /.box-body -->
                </form>
              </div>
          
            <div class="box-footer">
            
            </div>
          
        </div>
      <!-- /.col -->
    </div>


<!-- Stock Ledger Begins -->

<!-- Stock Ledger ends -->
</section>
<div class="">
  <div class="col-md-12" style="padding:22px;">
      <div class="box" style="display: none;">
          
          <div class="box-header">
            <h3 class="box-title">Inventory List</h3>
            <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#AddStock" >
              Add New Inventory
            </button>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <div class="table-responsive">
            <table id="example1" class="display nowrap" style="width:100%">
              <thead>
              <tr>
                <th>Inventory Name</th>
                <th>Size </th>
                
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>19MM STEEL UPRIGHT WHITE LC</td>
                  <td>6.6 cm </td>
                  
                </tr>
                
                <tr>
                  <td>19MM STEEL UPRIGHT CHARCOAL LC</td>
                  <td>6.6 cm</td>
                  
                </tr>

                <tr>
                  <td>12MM STEEL UPRIGHT BRONZE LC</td>
                  <td>6.6 cm</td>
                  
                </tr>

                <tr>
                  <td>19MM STEEL UPRIGHT CHARCOAL</td>
                  <td>6.6 cm</td>
                  
                </tr>

                <tr>
                  <td>20 MM ALUMINIUM UPRIGHTS WHITE LC</td>
                  <td>6.6 cm</td>
                  
                </tr>

                <tr>
                  <td>CARDBOARD</td>
                  <td>40.0 cm </td>
                  
                </tr>
                <tr>
                  <td>STAINLESS STEEL BEARINGS</td>
                  <td>1 cm</td>
                  
                </tr>
               
              </tbody>
              <tfoot>
              <tr>
                  <th>Inventory Name</th>
                  <th>Size</th>
                  
              </tr>
              </tfoot>
            </table>
          </div>
           

            
          </div>
          <!-- /.box-body -->
  </div>
  <div class="row">
      <div id="btnNew" style="cursor:pointer;z-index:100;" class="pull-right">
          <span class="btn bg-orange btn-flat btn-lg margin" onclick="openNav()" id="btnNewMessage"><li class="fa fa-plus"></li> Update Status</span>
      </div>
  <div class="col-md-6">
          <div class="box box-success">
                  <div class="box-header with-border">
                      <h3 class="box-title">Inventory Ledger</h3>
                      <div class=" pull-right">
                        
                        </div>
                      <span class="pull-right">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddStock" title="Add More Components"><i class="fa fa-plus"></i> Add </button>
                          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MinusStock" title="Remove Components"><i class="fa fa-minus"></i> Remove</button>
                          <input type="date" name="SrchDate" style="height:32px;">
                          <select name="type" style="height:32px;">
                              <option value="">All</option>
                              <option value="add">Add</option>
                              <option value="minus">Minus</option>
                          </select>
                          <button class="btn btn-primary"><li class="fa fa-search"></li></button>

                      </span>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body" style="">
                      <div id="nofeaturesapp_wrapper" class="dataTables_wrapper no-footer table-responsive">
                          <table id="nofeaturesapp" class="display responsive wrap dataTable no-footer dtr-inline" style="width:100%;" role="grid">
                              <thead>
                              <tr>
                                  <th>Date</th>
                                  <th>Items</th>
                                  <th>Reason</th>
                                  <th>Description</th>
                                  <th>Type</th>
                                  <th>Quantity</th>
                              </tr>
                              </thead>
                              
                              <tbody>			  
                              <tr>
                                  <td>01-Jan-2018</td>
                                  <td>12MM STEEL UPRIGHT BRONZE LC</td>
                                  <td>Default</td>
                                  <td>Initial compononet of Product</td>
                                  <td><span class="">Inital</span></td>
                                  <td>5.00</td>
                              </tr>
                              <tr>
                                  <td>02-Jan-2018</td>
                                  <td>19MM STEEL UPRIGHT CHARCOAL</td>
                                  <td>Default</td>
                                  <td>Initial compononet of Product</td>
                                  <td><span >Initial</span></td>
                                  <td>1.5</td>
                              </tr>
                              <tr>
                                  <td>02-Jan-2018</td>
                                  <td>19MM STEEL UPRIGHT CHARCOAL</td>
                                  <td>Default</td>
                                  <td>Initial compononet of Product</td>
                                  <td><span >Initial</span></td>
                                  <td>1.5</td>
                              </tr>
                              <tr>
                                  <td>02-Jan-2018</td>
                                  <td>19MM STEEL UPRIGHT CHARCOAL</td>
                                  <td>Default</td>
                                  <td>Initial compononet of Product</td>
                                  <td><span >Initial</span></td>
                                  <td>1.5</td>
                              </tr>
                              <tr>
                                  <td>02-Jan-2018</td>
                                  <td>19MM STEEL UPRIGHT CHARCOAL</td>
                                  <td>Default</td>
                                  <td>Initial compononet of Product</td>
                                  <td><span >Initial</span></td>
                                  <td>1.5</td>
                              </tr>
                              <tr>
                                  <td>02-Jan-2018</td>
                                  <td>19MM STEEL UPRIGHT CHARCOAL</td>
                                  <td>Default</td>
                                  <td>Initial compononet of Product</td>
                                  <td><span >Initial</span></td>
                                  <td>1.5</td>
                              </tr>
                              <tr>
                                  <td>05-Jan-2018</td>
                                  <td>20 MM ALUMINIUM UPRIGHTS WHITE LC</td>
                                  <td>Minus</td>
                                  <td>This quantity us useless</td>
                                  <td><span class="text-red" >Minus</span></td>
                                  <td>2.0</td>
                              </tr>
                              <tr>
                                  <td>08-Jan-2018</td>
                                  <td>20 MM ALUMINIUM UPRIGHTS WHITE LC</td>
                                  <td>Added</td>
                                  <td>Added on Demannd of Factory</td>
                                  <td><span class="text-green">ADD</span></td>
                                  <td>10.00</td>
                              </tr>
                              </tbody>
                              <tfoot>
                              </tfoot>
                          </table></div>
                              
              
                  </div>
            
                  
                  <!-- /.box-body -->
              </div>
  </div>
  <div class="col-md-6">

        
              <!-- The time line -->
              <ul class="timeline" id="timelinemore" data-next-page="https://erp.nsol.sg/projects/24?page=2">
                              <!-- timeline time label -->
                  <li class="time-label">
                              <span class="bg-red">
                                  29-Nov-2018
                              </span>
                  </li>
                  <!-- /.timeline-label -->
                              <!-- timeline item -->
                  <li>
                      <i class="fa fa-envelope bg-blue"></i>
      
                      <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 13:35 </span>
      
                          <h3 class="timeline-header"><a href="#">John Smith</a> posted with <span class="label bg-blue">STATUS</span> </h3>
      
                          <div class="timeline-body">
                              Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here 
                              Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here 
                              Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here 
                              Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here 
                          </div>
      
                      </div>
                  </li>
              <!-- End timeline item -->
              
                                  <!-- The time line -->
              <ul class="timeline" id="timelinemore" data-next-page="#">
                              <!-- timeline item -->
                  <li>
                      <i class="fa fa-envelope bg-blue"></i>
      
                      <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 13:35 </span>
      
                          <h3 class="timeline-header"><a href="#">John Smith</a> posted with <span class="label bg-yellow">STATUS</span> </h3>
      
                          <div class="timeline-body">
                              Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. 
                          </div>
      
                      </div>
                  </li>
                  <!-- END timeline item -->
                  
                                  <!-- The time line -->
              <ul class="timeline" id="timelinemore" data-next-page="#">
                              <!-- timeline item -->
                  <li>
                      <i class="fa fa-envelope bg-blue"></i>
      
                      <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 13:35 </span>
      
                          <h3 class="timeline-header"><a href="#">John Smith</a> posted with <span class="label bg-green">STATUS</span> </h3>
      
                          <div class="timeline-body">
                              Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. 
                              Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. 
                              <div class="clearfix"><br></div>
                          </div>
      
                      </div>
                  </li>
                  <!-- END timeline item -->
                  
                                  <!-- The time line -->
              <ul class="timeline" id="timelinemore" data-next-page="#">
                              <!-- timeline time label -->
                  <li class="time-label">
                              <span class="bg-red">
                                  28-Nov-2018
                              </span>
                  </li>
                  <!-- /.timeline-label -->
                              <!-- timeline item -->
                  <li>
                      <i class="fa fa-envelope bg-blue"></i>
      
                      <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 05:27 </span>
      
                          <h3 class="timeline-header"><a href="#">John Smith</a> posted with <span class="label bg-blue">STATUS</span> </h3>
      
                          <div class="timeline-body">
                              Qoute Sent to him my post and email. 
                          </div>
      
                      </div>
                  </li>
                  <!-- END timeline item -->
               
                  
                          </ul>
          </ul></ul></ul>
      </div>
          <!-- /.col -->
 
  </div>
</div>
<div class="modal fade" id="AddStock" tabindex="-1" role="dialog" aria-labelledby="AddStock" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add More Inventory</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="box-body">
                      <div class="col-md-12">                   
                        <div class="form-group">
                        <label for="stock_length">Select Reason</label>
                        <select name="reason" class="form-control" id="reason">
                            <option value="purchased">Added</option>
                            <option value="other">other</option>
                        </select>
                        </div>
                      <div class="form-group">
                        <label for="stock_length">Enter Quantity</label>
                        <input type="text" name="stock_length" class="form-control" id="stock_length" placeholder="Enter Stock Quantity">
                      </div>
                      <div class="form-group">
                        <label for="laser_cutting">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description">
                      </div>
                      <div class="form-group">
                        <label>Select Inventory/Component</label>
                        <select class="form-control">
                          <option>12MM STEEL UPRIGHT BRONZE LC</option>
                          <option>19MM STEEL UPRIGHT CHARCOAL</option>
                          <option>19MM STEEL UPRIGHT CHARCOAL LC</option>
                          <option>19MM STEEL UPRIGHT WHITE LC</option>
                          <option>20 MM ALUMINIUM UPRIGHTS WHITE LC</option>
                          <option>CARDBOARD</option>
                          <option>STAINLESS STEEL BEARINGS</option>
                        </select>
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
              <h4 class="modal-title">Remove Component</h4>
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
                      <div class="form-group">
                        <label>Select Inventory/Component</label>
                        <select class="form-control">
                          <option>12MM STEEL UPRIGHT BRONZE LC</option>
                          <option>19MM STEEL UPRIGHT CHARCOAL</option>
                          <option>19MM STEEL UPRIGHT CHARCOAL LC</option>
                          <option>19MM STEEL UPRIGHT WHITE LC</option>
                          <option>20 MM ALUMINIUM UPRIGHTS WHITE LC</option>
                          <option>CARDBOARD</option>
                          <option>STAINLESS STEEL BEARINGS</option>
                        </select>
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

  {{-- right status menu --}}
  <style>
    
      .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1050;
          top: 0;
          right: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
      }
      
      .sidenav a {
          padding: 4px 4px 4px 16px;
          text-decoration: none;
          color: #f1f1f1;
          display: block;
          transition: 0.3s;
      }
      
      .sidenav .closebtn {
          position: absolute;
          top: 0;
          left: 5px;
          font-size: 56px;
              border-radius:100%;
      }
      @media screen and (max-height: 450px)
      {
          .sidenav
          {width:100%;}
      }
      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
      </style>
      
      <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          
          <div style="padding: 50px;">
              <!-- form start -->
              <form role="form" id="frmMessage" method="get" >
              @csrf
              <input type="hidden" name="project_id" value="1">
                  <div class="box-body">
                  <div class="form-group">
                      <textarea class="form-control" rows="12" name="message" id="message" placeholder="Enter your Message Here"></textarea>
                  </div>
                  <div class="form-group">
                      <select class="form-control">
                        <option selected disabled>Select Status</option>
                        <option>Progress</option>
                        <option>Completed</option>
                        <option> Delivered</option>
                      </select>
                  </div>                
                  <div class="form-group">
                      <span id="errmessage"></span>
                      <button class="btn btn-danger btn-lg pull-right">Update Status</button>                  
                  </div>
                  </div>
              </form>
              <!-- form ends -->
          </div>              
      </div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "70%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
  <script>
      function showsuccess(){
        swal("Success", "Record has been updated.", "success");
        $('.modal').modal('hide');
      }
  </script>
@endsection