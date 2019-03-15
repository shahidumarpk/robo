@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
<section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Order No.: 123
          <small class="pull-right">Date: 21-Feb-2019</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        To Customer
        <address>
            <strong>James Bond</strong><br>
            {{-- P O Box 926<br>
            Lae, Morobe Province<br>
            Phone: 7100 0007<br>
            Email: james@bond.com --}}
          </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        Sales Representative
        
        <address>
            <strong>Micheal Kabit</strong><br>
            {{-- P O Box 926<br>
            CA, USA<br>
            Phone: +0123 4567<br>
            Email: jamesbond@abc.com --}}
          </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Order No.: RBD001</b><br>
        <br>
        <b>Status: <span class="text-green">New</span></b><br>
        {{-- <b>Total Amount:</b> $277.97<br> --}}
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Size</th>
            <th>Qty</th>
            
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td onclick=""><a href="{{url('/orders/1/product/1')}}">DELUXE TRELLIS <br/><small>This product needs to get ready 2 days before the deadline</small></a></td>
            <td>300 x 200</td>
            <td>1</td>
            
          </tr>
          <tr>
            <td>2</td>
            <td onclick=""><a href="{{url('/orders/1/product/1')}}">Alu TRELLIS <br/><small>Ask buyer for the color once again</small></a></td>
            <td>150 x 200</td>
            <td>1</td>
          </tr>
          <tr>
            <td>3</td>
            <td onclick=""><a href="{{url('/orders/1/product/1')}}">ECONO TRELLIS <br/><small>the installation is not yet confirmed</small></a></td>
            <td>900 x 200</td>
            <td>2</td>
          </tr>
          <tr>
            <td>4</td>
            <td onclick=""><a href="{{url('/orders/1/product/1')}}">Galv TRELLIS <br/><small>Deliver the product by salesperson</small></a></td>
            <td>900 x 200</td>  
            <td>1</td>
          </tr>
          <tr>
              <th colspan="6" ></th></th>
            </tr>
          <tr>
              <th colspan="5" style="">Additional Work</th>
            </tr>
            <tr>
                <td>1</td>
                <td colspan="3">Change Door Lock</td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td colspan="3">Door is very old, repair</td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td colspan="3">Blue paint for new door</td>
                <td></td>
            </tr>
          </tbody>
        </table>
     </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        
      </div>
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-xs-12">
        <span class="pull-right">
            <button type="button" class="btn btn-primary" style="margin-right: 5px;">
                <i class="fa fa-file"></i> Print
              </button>
              <button type="button" class="btn btn-info" style="margin-right: 5px;">
                <i class="fa fa-download"></i> PDF
              </button>
        </span>
      </div>
    </div>
  </section>

  {{-- modal goes here  --}}
<div class="modal fade" id="ProductDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Components</h4></h4>
    
              </div>
              
              <div class="modal-body" id="add_windows">
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="col-md-12">
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
                        <br/>
                        <label class="badge badge-primary"> White</label>
                      </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">FITMENT AREA</label><br/>
                            <br/>
                            <label class="badge badge-primary"> Inside </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">PROTECTION BARS</label><br/>
                            <br/>
                            <label class="badge badge-primary"> Monkey Bars </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">DOGGY DOOR</label><br/>
                            <br/>
                            <label class="badge badge-primary"> Yes </label>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">Lock Type</label><br/>
                            <br/>
                            <label class="badge badge-primary"> Deadlock </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">LOCK BAR SIZE </label><br/>
                            <br/>
                            <label class="badge badge-primary"> 50 </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">Key Alike </label><br/>
                            <br/>
                            <label class="badge badge-primary"> Yes </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">LOCK SIDE  </label><br/>
                            <br/>
                            <label class="badge badge-primary"> Central </label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">TOTAL LOCKS</label><br/>
                            <br/>
                            <label class="badge badge-primary"> 3 </label>
                        </div>
                    </div>
                    <br/> <br/>
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
                    <div class="col-md-12">
                      
                        <div class="form-group">
                            <label for="quantity">Comment</label>
                           <textarea rows="5" class="form-control">This product should be deliver before 3 days of the deadline because it has to be cleaned before installation. </textarea>
                          </div>
                        <div class="form-group">
                            <label for="quantity">Uploaded Photo</label>
                            <br/>
                        <label><img src="{{asset('img/doors/door1.jpeg')}}" style="width: 50%"/></label>
                          </div>
                    </div>
                    <div class="clearfix"></div>
                            
    
                  </div>
                  <!-- /.box-body -->
                </form>
              </div>
          
            <div class="modal-footer">
              {{-- <div class="col-md-2">
              <label> Total Amount</label> </div>
              <div class="col-md-3">
              <input type="text" disabled value="23,452" class="form-control"/></div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          
        </div>
      </div>
</div>

    <div id="btnNew" style="cursor:pointer;z-index:100;" class="pull-right">
        <span class="btn bg-orange btn-flat btn-lg margin" onclick="openNav()" id="btnNewMessage"><li class="fa fa-plus"></li> New Status</span>
    </div>
    
    <div class="row">
            <div class="col-md-12">
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
    
    <div id="btnNew" style="cursor:pointer;z-index:100;" class="pull-right">
        <span class="btn bg-orange btn-flat btn-lg margin" onclick="openNav()" id="btnNewMessage"><li class="fa fa-plus"></li> New Status</span>
    </div>
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
                                  <option>In Progress</option>
                                  <option>Completed</option>
                                  <option> Pending</option>
                                  <option> Delayed</option>
                                  <option> Booked</option>
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
    function popUpProductDetails(){
      $('#ProductDetails').modal('show');
    }
  </script>
@endsection

<div class="modal fade" id="ProductDetails11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Details</h4></h4>
  
            </div>
            
            <div class="modal-body" id="add_windows">
              <!-- /.box-header -->
              <!-- form start -->
              <table class="table table-striped">
                  <tr>
                      <td colspan="2"><b>Product Name</b></td>
                      <td colspan="2">Deluxe Fixture</td>
                  </tr>
                  <tr>
                      <td><b>Position of Barrier</b></td>
                      <td>7.25</td>
                      <td><b>PROTECTION BARS</b></td>
                      <td>Doggy bars</td>
                  </tr>
                  <tr>
                      <td><b>Width</b></td>
                      <td>75.82</td>
                      <td><b>Height</b></td>
                      <td>75.82</td>
                  </tr>
                  <tr>
                      <td><b>Lock Type  </b></td>
                      <td>Deadlock</td>
                      <td><b>LOCK BAR SIZE</b></td>
                      <td>25</td>
                  </tr>
                  <tr>
                      <td><b>Key Alike  </b></td>
                      <td>YES</td>
                      <td><b>LOCK SIDE</b></td>
                      <td>Left</td>
                  </tr>
                  <tr>
                      <td><b>TOTAL LOCKS</b></td>
                      <td>3</td>
                  </tr>
                  <tr>
                      <td><b>Top  </b></td>
                      <td>50x50</td>
                      <td><b>Left</b></td>
                      <td>50x50</td>
                  </tr>
                  <tr>
                      <td><b>Bottom</b></td>
                      <td>50x50</td>
                      <td><b>Right</b></td>
                      <td>50x50</td>
                  </tr>
                  <tr>
                      <td><b>CORNER PLATES</b></td>
                      <td>1</td>
                      <td><b>ANGLE BRAKETS</b></td>
                      <td>2</td>
                  </tr>
                  
                  <tr>
                    <td><b>Choosen Color</b></td>
                    <td>White</td>
                    <td><b>FITMENT AREA</b></td>
                    <td>inside</td>
                  </tr>
                  
                  <tr>
                      <td><b>Comment</b></td>
                      <td>This product needs to get ready <br/> 2 days before the deadline</td>
                      <td><b>Rows of Flights</b></td>
                      <td>75.82</td>
                  </tr>
                  <tr>
                      <td><b>Created At</b></td>
                      <td>09-10-2018</td>
                      <td><b>Updated At</b></td>
                      <td>09-10-2018</td>
                  </tr>
                  <tr>
                      <td><b>Status</b></td>
                      <td>
                          <span class="text-green"><b>Ready</b></span> 
                                         
                      </td>
                      <td>
                          <select class="form-control">
                              <option value="1">Ready</option>  
                              <option value="1">Not Started</option>  
                              <option value="1">Progress</option>  
                            </select>       
                      </td>
                  </tr>
                
                </table>
            </div>
        
          <div class="modal-footer">
           
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        
      </div>
    </div>
</div>