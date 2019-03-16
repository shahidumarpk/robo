
@extends('layouts.mainlayout')
@section('content')
<style>
.lds-hourglass {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 6px;
  box-sizing: border-box;
  border: 26px solid #000;
  border-color: #000 transparent #000 transparent;
  animation: lds-hourglass 1.2s infinite;
}
@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}
</style>
@if(session('success'))
    <script>


      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif

<div class="box box-info">
        <div class="box-header with-border">
        <div class="box-header">
          <h4 class="box-title">Edit Invoice</h4>
          
        </div>
        <div class="box-body">
            <form role="form">
                <div class="box-body ">
                    <section>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label for="product_name">Choose Customer</label>
                                <select  onchange="putCustomerName(this.value)" id="product_name" name="product_name" class="form-control form-control-sm">
                                    <option value="0" disabled selected>Select Option</option>
                                    <option value="1" data-price="200">Jhon Dicard</option>
                                    <option value="2" data-price="200">Noman Shah</option>
                                    <option value="3" data-price="200">Raheel khan</option>
                                    <option value="4" data-price="200">Murtaza Pakana</option>
                                  </select>
                                
                              </div>
                              <div class="form-group">
                                  <label for="firstname">First Name</label>
                                  <input type="text" name="firstname" class="form-control form-control-sm" id="firstname" placeholder="Enter First Name">
                              </div>
                          
                              <div class="form-group">
                                  <label for="lastname">Last Name</label>
                                  <input type="text"   name="lastname" class=" form-control form-control-sm" id="lastname" placeholder="Enter Last Name">
                              </div>
                        </div>
                        <div class="col-md-3 ">
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="Enter Customer Email">
                              </div>
                          
                           
                              <div class="form-group">
                                  <label for="companyname">Company Name</label>
                                  <input type="text"  name="companyname" class="form-control form-control-sm" id="companyname" placeholder="Enter Company Name">
                              </div>
                            
                              <div class="form-group">
                                  <label for="phone">Phone Number</label>
                                  <input type="text"  name="phone" class="form-control form-control-sm" id="phone" placeholder="Enter Phone Number">
                              </div>
                          </div>
                          <div class="col-md-4 pull-right">
                              <div class="invoice-col">
                                 <label> Sales Representative </label>
                                  
                                  <address>
                                      <strong>Micheal Elath</strong><br>
                                      <i>Robo Door, RBD</i><br>
                                      P O Box 926<br>
                                      CA, USA<br>
                                      Phone: +0123 4567<br>
                                      Email: jamesbond@abc.com
                                    </address>
                                </div>
                          </div>
                        </section>
                    <div class="col-md-3">
                    </div>
                    <div class="clearfix"></div>
                    <hr class="" style="border: 1px solid lightgrey;">
                    <div class="col-md-12">
                      <label>Products Details</label>
                        <table class="table table-bordered" id="product_info_table">
                            <thead>
                                <tr>
                                    <th style="width:35%">Choose Product</th>
                                    <th style="width:20%">View Details</th>
                                    <th style="width:10%">Qty</th>
                                    <th style="width:10%">Rate</th>
                                    <th style="width:15%">Amount</th>
                                    <th style="width:10%"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr id="row_1">
                                    <td>
                                        <select onchange="onProductChange(this.value)" class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="putPrice()" required>
                                            <option value=""  disabled>Select Product</option>
                                            <option value="1" >Deluxe Trellis</option>
                                            <option value="2">Deluxe Fixture</option>
                                            <option value="1" selected>Econo Trellis</option>
                                            <option value="2" >Econo Fixture</option>
                                            <option value="1">	Alu Trellis</option>
                                            <option value="2">	Alu Fixture</option>
                                            <option value="1">	Galv Trellis</option>
                                            <option value="2">Galv Fixture  </option>
                                            <option value="1">DuPlus Trellis </option>
                                            <option value="2">DuPlus Fixture </option>
                                            <option value="3">Econo Burglar Bars </option>
                                            <option value="4">Robo Clear Bars </option>
                                        </select>
                                    </td>
                                    <td>
                                      <a class="btn btn-primary" onclick="showProductDetails()"><i class="fa fa-eye"></i></a>
                                    </td>
                                    <td><input type="number" value="1" placeholder="Qty" name="qty[]" id="qty_1" class="form-control" required="" onkeyup="getTotal(1)"></td>
                                    <td>
                                        
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-zar"></i>
                                          </div>
                                          <input type="text" name="rate[]" id="rate_1" class="form-control" disabled="" autocomplete="off" value="200">
                                        </div>
                                        <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                                    </td>
                                    <td>
                                        
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-zar"></i>
                                          </div>
                                          <input type="text"  value="1502"  name="amount[]" id="amount_1" class="form-control" disabled="" autocomplete="off">
                                        </div>
                                        <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                                    </td>
                                    <td><button disabled  type="button" class="btn btn-danger" onclick="removeRow(1)"><i class="fa fa-close"></i></button></td>
                                </tr>
    
                                <tr id="row_2">
                                    <td>
                                        <select onchange="onProductChange(this.value)" class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="putPrice()" required>
                                            <option value="" disabled>Select Product</option>
                                            <option value="1" >Deluxe Trellis</option>
                                            <option value="2">Deluxe Fixture</option>
                                            <option value="1" >Econo Trellis</option>
                                            <option value="2" >Econo Fixture</option>
                                            <option value="1">	Alu Trellis</option>
                                            <option value="2">	Alu Fixture</option>
                                            <option value="1" selected>	Galv Trellis</option>
                                            <option value="2" >Galv Fixture  </option>
                                            <option value="1">DuPlus Trellis </option>
                                            <option value="2">DuPlus Fixture </option>
                                            <option value="3">Econo Burglar Bars </option>
                                            <option value="4">Robo Clear Bars </option>
                                              
                                              </select>
                                    </td>
                                    <td>
                                      <a class="btn btn-primary" onclick="showProductDetails()"><i class="fa fa-eye"></i></a>
                                    </td>
                                    <td><input type="number" value="1"  placeholder="Qty" name="qty[]" id="qty_1" class="form-control" required="" onkeyup="getTotal(1)"></td>
                                    <td>
                                        
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-zar"></i>
                                          </div>
                                          <input type="text" name="rate[]" id="rate_1" class="form-control" disabled="" autocomplete="off" value="200">
                                        </div>
                                        <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                                    </td>
                                    <td>
                                        
                                        <div class="input-group">
                                          <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-zar"></i>
                                          </div>
                                          <input type="text"  value="1200"  name="amount[]" id="amount_1" class="form-control" disabled="" autocomplete="off">
                                        </div>
                                        <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                                    </td>
                                    <td><button type="button" class="btn btn-danger" onclick="removeRow(2)"><i class="fa fa-close"></i></button></td>
                                </tr>
    
                                <tr id="row_3">
                                    <td>
                                        <select onchange="onProductChange(this.value)" class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="putPrice()" required>
                                            <option value="" selected disabled>Select Product</option>
                                            <option value="1">Deluxe Trellis</option>
                                            <option value="2">Deluxe Fixture</option>
                                            <option value="1">Econo Trellis</option>
                                            <option value="2">Econo Fixture</option>
                                            <option value="1">Alu Trellis</option>
                                            <option value="2">Alu Fixture</option>
                                            <option value="1">Galv Trellis</option>
                                            <option value="2">Galv Fixture  </option>
                                            <option value="1" selected>DuPlus Trellis </option>
                                            <option value="2">DuPlus Fixture </option>
                                            <option value="3">Econo Burglar Bars </option>
                                            <option value="4">Robo Clear Bars </option>
                                              
                                              </select>
                                    </td>
                                    <td>
                                      <a class="btn btn-primary" onclick="showProductDetails()"><i class="fa fa-eye"></i></a>
                                    </td>
                                    <td><input type="number" value="1"  placeholder="Qty" name="qty[]" id="qty_1" class="form-control" required="" onkeyup="getTotal(1)"></td>
                                    <td>
                                        
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-zar"></i>
                                          </div>
                                          <input type="text" name="rate[]" id="rate_1" class="form-control" disabled="" autocomplete="off" value="200">
                                        </div>
                                        <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                                    </td>
                                    <td>
                                        
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-zar"></i>
                                          </div>
                                          <input type="text" value="1000"  name="amount[]" id="amount_1" class="form-control" disabled="" autocomplete="off">
                                        </div>
                                        <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                                    </td>
                                    <td><button type="button" class="btn btn-danger" onclick="removeRow(3)"><i class="fa fa-close"></i></button></td>
                                </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                  <td><button type="button" id="addBtn_1" onclick="addNewRow()" class="btn btn-success"><i class="fa fa-plus"></i></button></td>
                                </tr>
                            </tbody>
                            </table>
                            
                    <div class="">
                        <div class="col-md-12">
                            <label id="additionalWorkLabel" style=""> Additional Work (if any)</label>
                            <div class="form-group row controlremove" style="margin-top:20px">
                                <div class="col-md-7">
                                  <input type="text" value="Locks for outdoor needs to change" name="addmore[]" class="form-control" placeholder="Enter Additional Work Here">
                                </div>
                                <div class="col-md-4">
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-zar"></i>
                                    </div>
                                    <input type="number" value="250" name="addmore[]" class="form-control" placeholder="Price"> 
                                  </div>
                                </div>
                                <div class="col-md-1">
                                  <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                                </div>
                              </div>
                              <div class="form-group row controlremove" style="margin-top:20px">
                                  <div class="col-md-7">
                                    <input type="text"  value="New Lock alike keys for outdoor needed"  name="addmore[]" class="form-control" placeholder="Enter Additional Work Here">
                                  </div>
                                  <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="input-group-addon">
                                        <i class="fa fa-zar"></i>
                                      </div>
                                      <input type="number"  value="250" name="addmore[]" class="form-control" placeholder="Price"> 
                                    </div>
                                  </div>
                                  <div class="col-md-1">
                                    <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                                  </div>
                                </div>
                            <div class=" row control-group after-add-more" id="after_additional_work_">
                                <div class="col-md-7">
                                    {{-- <label id="additionalWorkOldLabel"> Additional Work (if any)</label> --}}
                                    {{-- <input type="text" name="addmore[]" class="form-control" placeholder="Enter Additional Work Here"> --}}
                                  </div>
                                  <div class="col-md-4">
                                    {{-- <input type="number" name="addmore[]" class="form-control" placeholder="Price">  --}}
                                  </div>
                                  <div class="col-md-1">
                                    <div class="input-group-btn"> 
                                      <button class="btn btn-success add-more" type="button"><i class="fa fa-plus"></i></button>
                                    </div>
                                  </div>
                            </div>
                        </div>
                      </div>

                    <div class="col-md-6 col-xs-12 pull-right">
                              
                        <div class="">
                          <div class="form-group">
                            <label for="gross_amount" class="col-sm-5 ">Gross Amount</label>
                            <div class="col-sm-7">
                              <input type="text" value="45,003" class="form-control" id="gross_amount" name="gross_amount"  autocomplete="off" disabled>
                              <input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
                            </div>
                          </div>
                          <div class="" style="height:50px;"></div>
                          <div class="form-group">
                            <label for="discount" class="col-sm-5">Discount</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <span class="input-group-addon" style="padding: 0px;">
                                      <select name="type_amount" onchange="" class="">
                                        <option value="fixed">Fixed</option>
                                        <option value="percentage">Percentage</option>
                                      </select>
                                    </span>
                                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" autocomplete="off">
                                  </div>
                            </div>
                          </div>
                          <div class="" style="height:36px;"></div>
                          <div class="form-group">
                            <label for="vat_amount" class="col-sm-5">VAT</label>
                            <div class="col-sm-7">
                              <input type="text"  value="1.5%" class="form-control" id="vat_amount" name="vat_amount"  autocomplete="off">
                              <input type="hidden" class="form-control" id="vat_amount_value" name="vat_amount_value" autocomplete="off">
                            </div>
                          </div>
                          <div class="" style="height:36px;"></div>
                          <div class="form-group">
                            <label for="total_amount" class="col-sm-5">Total Amount</label>
                            <div class="col-sm-7">
                              <input type="text"  value="59,113" class="form-control" id="total_amount" name="total_amount"  autocomplete="off" disabled>
                              <input type="hidden" class="form-control" id="total_amount_value" name="total_amount_value" autocomplete="off">
                            </div>
                          </div>
            
                        </div>
                        </div>
              </div>
              <div class="copy hide ">
                  <div class="form-group row controlremove" style="margin-top:20px">
                    <div class="col-md-7">
                      <input type="text" name="addmore[]" class="form-control" placeholder="Enter Additional Work Here">
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-zar"></i>
                          </div>
                          <input type="number" name="addmore[]" class="form-control" placeholder="Price"> 
                        </div>
                    </div>
                    <div class="col-md-1">
                      <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                    </div>
                  </div>
                </div>
    
                  
                  
                  </div>
               
                
               
              </form>
        </div>
        <div class="box-footer">
         <div class="pull-right">
          <a href="{{url('/invoices')}}" class="btn btn-warning">Save as Draft</a>
          <a href="{{url('/invoices/1')}}" class="btn btn-primary">Save</a>
        </div>
        </div>
    </div>    
  </div>



  <div class="modal fade" id="ProductDetailsTrellis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <input type="text" class="form-control" id="tproduct_name" placeholder="Enter Name">
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">Position of Barrier</label>
                            <input type="text" class="form-control" id="tproduct_position" placeholder="">
                          </div>
                         
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="code">Heigth</label>
                          <input type="text" class="form-control" id="tproduct_height" placeholder="">
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label for="price">Width  </label>
                          <input type="text" class="form-control" id="tproduct_width" placeholder="Enter Length">
                        </div>
                  </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">Rows of Flights</label>
                            <input type="text" class="form-control" id="tproduct_flight" placeholder="">
                          </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 2 --}}
                    <div class="col-md-3">
                        <label for="status">Choose Color</label><br/>
                        <select class="form-control" id="tproduct_color">
                          <option selected disabled> Select</option>
                          <option value="1"> Green</option>
                          <option value="2"> White</option>
                          <option value="3"> Grey</option>
                          <option value="4"> Red</option>
                          <option value="5"> Blue</option>
                        </select>
                      </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">FITMENT AREA</label><br/>
                            <select name="status" class="form-control" id="tproduct_fitment">
                                <option disabled selected>Select Area </option>
                                <option value="0">INSIDE</option>
                                <option value="1">OUTSIDE </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">PROTECTION BARS</label><br/>
                            <select name="status" class="form-control" id="tproduct_protection">
                                <option value="0">NO</option>
                                <option value="1">MONKEY BARS </option>
                                <option value="2">DOGGY BARS </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">DOGGY DOOR</label><br/>
                            <select name="status" class="form-control" id="tproduct_doggydoor">
                                <option value="0">NO</option>
                                <option value="1">YES</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">Lock Type</label><br/>
                            <select name="status" class="form-control" id="tproduct_locktype">
                                <option value="0">DEADLOCK</option>
                                <option value="1">SLAM LOCK</option>
                                <option value="1">MAGNETIC LOCK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">LOCK BAR SIZE </label><br/>
                            <select name="status" class="form-control" id="tproduct_lockbar">
                                <option value="0">25</option>
                                <option value="1">50</option>
                                <option value="1">75</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">Key Alike </label><br/>
                            <select name="status" class="form-control" id="tproduct_keyalike">
                                <option value="0">NO</option>
                                <option value="1">YES</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">LOCK SIDE  </label><br/>
                            <select name="status" class="form-control" id="tproduct_lockside">
                                <option value="0">Left</option>
                                <option value="1">Right</option>
                                <option value="1">Central</option>
                                <option value="1">Both Sides</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">TOTAL LOCKS</label><br/>
                            <input type="text" class="form-control" id="tproduct_total_lock"/>
                        </div>
                    </div>
                    <br/> <br/>
                    <br/>
                    <hr>
                  
                    
  
                    {{-- 3--}}
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Top</label>
                              <select name="status" class="form-control" id="tproduct_top">
                                <option disabled selected>Select Lock Type </option>
                                <option value="0"  >NO</option>
                                <option value="1"  >50X50 </option>
                                <option value="2" >78X36 </option>
                                <option value="3" >75X25 </option>
                                <option value="4" >25X50 </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Left</label>
                              <select name="status" class="form-control" id="tproduct_left">
                                <option disabled selected>Select Lock Type </option>
                                <option va >NO</option>
                                <option value="1"  >50X50 </option>
                                <option value="2" >78X36 </option>
                                <option value="3" >75X25 </option>
                                <option value="4" >25X50 </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Bottom</label>
                              <select name="status" class="form-control" id="tproduct_bottom">
                                <option disabled selected>Select Lock Type </option>
                                <option  >NO</option>
                                <option value="1"  >50X50 </option>
                                <option value="2" >78X36 </option>
                                <option value="3" >75X25 </option>
                                <option value="4" >25X50 </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Right</label>
                              <select name="status" class="form-control" id="tproduct_right">
                                <option disabled selected>Select Lock Type </option>
                                <option  >NO</option>
                                <option value="1"  >50X50 </option>
                                <option value="2" >78X36 </option>
                                <option value="3" >75X25 </option>
                                <option value="4" >25X50 </option>
                              </select>
                            </div>
                    </div>
                    <hr>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">CORNER PLATES </label>
                              <select name="status" class="form-control" id="tproduct_cornerplates">
                                <option disabled selected>Select Corner Plates </option>
                                <option  >1</option>
                                <option  >2 </option>
                                <option  >3 </option>
                                <option  >4 </option>
                                <option  >5 </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">ANGLE BRAKETS</label>
                              <select name="status" class="form-control" id="tproduct_anglebrackets">
                                <option disabled selected>Select Angle Brackets </option>
                                <option  >1</option>
                                <option  >2 </option>
                                <option  >3 </option>
                                <option  >4 </option>
                                <option  >5 </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-12">
                      
                        <div class="form-group">
                            <label for="quantity">Comment</label>
                           <textarea rows="5" class="form-control"></textarea>
                          </div>
                        <div class="form-group">
                            <label for="quantity">Upload Photo</label>
                            <input type="file" class="form-control" id="quantity" placeholder="Enter Unit Cost">
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
  {{-- modal for the onChange Prodcut --}}
  <div class="modal fade" id="ProductDetailsFixture" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <input type="text" class="form-control" id="fproduct_name" placeholder="Enter Name">
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">Position of Barrier</label>
                            <input type="text" class="form-control" id="fproduct_position" placeholder="">
                          </div>
                         
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="code">Heigth</label>
                          <input type="text" class="form-control" id="fproduct_height" placeholder="">
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label for="price">Width  </label>
                          <input type="text" class="form-control" id="fproduct_width" placeholder="Enter Length">
                        </div>
                  </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">Rows of Flights</label>
                            <input type="text" class="form-control" id="fproduct_flights" placeholder="">
                          </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 2 --}}
                    <div class="col-md-3">
                        <label for="status">Choose Color</label><br/>
                        <select class="form-control" id="fproduct_color">
                          <option selected disabled> Select</option>
                          <option value="1"> Green</option>
                          <option value="2"> White</option>
                          <option value="3"> Grey</option>
                          <option value="4"> Red</option>
                          <option value="5"> Blue</option>
                        </select>
                      </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">FITMENT AREA</label><br/>
                            <select name="status" class="form-control" id="fproduct_fitment">
                                <option disabled selected>Select Area </option>
                                <option value="0">INSIDE</option>
                                <option value="1">OUTSIDE </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">PROTECTION BARS</label><br/>
                            <select name="status" class="form-control" id="fproduct_protection">
                                <option value="0">NO</option>
                                <option value="1">MONKEY BARS </option>
                                <option value="2">DOGGY BARS </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">DOGGY DOOR</label><br/>
                            <select name="status" class="form-control" id="fproduct_doggydoor">
                                <option value="0">NO</option>
                                <option value="1">YES</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 3--}}
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Top</label>
                              <select name="status" class="form-control" id="fproduct_top">
                                <option disabled selected>Select Lock Type </option>
                                <option  value="1" >NO</option>
                                <option  value="2" >50X50 </option>
                                <option  value="3" >78X36 </option>
                                <option  value="4" >75X25 </option>
                                <option  value="5" >25X50 </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Left</label>
                              <select name="status" class="form-control" id="fproduct_left">
                                <option disabled selected>Select Lock Type </option>
                                <option  >NO</option>
                                <option  value="2" >50X50 </option>
                                <option  value="3" >78X36 </option>
                                <option  value="4" >75X25 </option>
                                <option  value="5" >25X50 </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Bottom</label>
                              <select name="status" class="form-control" id="fproduct_bottom">
                                <option disabled selected>Select Lock Type </option>
                                <option  >NO</option>
                                <option  value="2" >50X50 </option>
                                <option  value="3" >78X36 </option>
                                <option  value="4" >75X25 </option>
                                <option  value="5" >25X50 </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">Right</label>
                              <select name="status" class="form-control" id="fproduct_right">
                                <option disabled selected>Select Lock Type </option>
                                <option  >NO</option>
                                <option  value="2" >50X50 </option>
                                <option  value="3" >78X36 </option>
                                <option  value="4" >75X25 </option>
                                <option  value="5" >25X50 </option>
                              </select>
                            </div>
                    </div>
                    <hr>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">CORNER PLATES </label>
                              <select name="status" class="form-control" id="fproduct_cornerplates">
                                <option disabled selected>Select Corner Plates </option>
                                <option value="1" >1</option>
                                <option value="2" >2 </option>
                                <option value="3" >3 </option>
                                <option value="4" >4 </option>
                                <option value="5" >5 </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-3">
                          <div class="form-group">
                              <label for="status">ANGLE BRAKETS</label>
                              <select name="status" class="form-control" id="fproduct_anglebrakets">
                                <option disabled selected>Select Angle Brackets </option>
                                <option  >1</option>
                                <option  >2 </option>
                                <option  >3 </option>
                                <option  >4 </option>
                                <option  >5 </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-12">
                      
                        <div class="form-group">
                            <label for="quantity">Comment</label>
                           <textarea rows="5" class="form-control"></textarea>
                          </div>
                        <div class="form-group">
                            <label for="quantity">Upload Photo</label>
                            <input type="file" class="form-control" id="quantity" placeholder="Enter Unit Cost">
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
  {{-- modal for the onChange Prodcut --}}
  <div class="modal fade" id="ProductDetailsClear" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Robo Clear</h4></h4>
    
              </div>
              
              <div class="modal-body" id="add_windows">
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="fproduct_name" placeholder="Enter Name">
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">Position of Barrier</label>
                            <input type="text" class="form-control" id="fproduct_position" placeholder="">
                          </div>
                         
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="code">Heigth</label>
                          <input type="text" class="form-control" id="fproduct_height" placeholder="">
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label for="price">Width  </label>
                          <input type="text" class="form-control" id="fproduct_width" placeholder="Enter Length">
                        </div>
                  </div>
                  <div class="col-md-3">
                      <label for="status">NUMBER OF MIDDLE BARS</label><br/>
                      <select class="form-control" id="fproduct_color">
                        <option selected disabled> Select</option>
                        <option value="0"> None</option>
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                        <option value="4"> 4</option>
                        <option value="5"> 5</option>
                      </select>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 2 --}}
                   
                    <div class="col-md-3">
                        <label for="status">SIDE BARS</label><br/>
                        <select class="form-control" id="fproduct_color">
                          <option selected disabled> Select</option>
                          <option value="1"> NO</option>
                          <option value="2"> YES</option>
                        </select>
                      </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">TYPE OF FITMENT</label><br/>
                            <select name="status" class="form-control" id="fproduct_fitment">
                                <option disabled selected>Select Area </option>
                                <option value="0">FRAME FIT</option>
                                <option value="1">TELESCOPIC </option>
                                <option value="1">T BRACKET </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="status">SIDE BARS COLOR</label><br/>
                        <select class="form-control" id="fproduct_color">
                          <option selected disabled> Select</option>
                          <option value="1"> Green</option>
                          <option value="2"> White</option>
                          <option value="3"> Grey</option>
                          <option value="4"> Red</option>
                          <option value="5"> Blue</option>
                          <option value="5"> Custom</option>
                        </select>
                      </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 3--}}
                    <div class="col-md-12">
                      
                        <div class="form-group">
                            <label for="quantity">Comment</label>
                           <textarea rows="5" class="form-control"></textarea>
                          </div>
                        <div class="form-group">
                            <label for="quantity">Upload Photo</label>
                            <input type="file" class="form-control" id="quantity" placeholder="Enter Unit Cost">
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
  {{-- modal for the onChange Prodcut --}}
  <div class="modal fade" id="ProductDetailsBurglar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Econo Burglar</h4></h4>
    
              </div>
              
              <div class="modal-body" id="add_windows">
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="fproduct_name" placeholder="Enter Name">
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">Position of Barrier</label>
                            <input type="text" class="form-control" id="fproduct_position" placeholder="">
                          </div>
                         
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label for="code">Heigth</label>
                          <input type="text" class="form-control" id="fproduct_height" placeholder="">
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label for="price">Width  </label>
                          <input type="text" class="form-control" id="fproduct_width" placeholder="Enter Length">
                        </div>
                  </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">TYPE OF BAR</label>
                            <select class="form-control" id="fproduct_color">
                                <option selected disabled> Select</option>
                                <option value="1"> 16MM ROUND</option>
                                <option value="2"> 12MM SQUARE</option>
                                <option value="3"> Grey</option>
                                <option value="4"> Red</option>
                                <option value="5"> Blue</option>
                              </select>
                          </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 2 --}}
                    <div class="col-md-3">
                        <label for="status">NUMBER OF MIDDLE BARS</label><br/>
                        <select class="form-control" id="fproduct_color">
                          <option selected disabled> Select</option>
                          <option value="0"> None</option>
                          <option value="1"> 1</option>
                          <option value="2"> 2</option>
                          <option value="3"> 3</option>
                          <option value="4"> 4</option>
                          <option value="5"> 5</option>
                        </select>
                      </div>
                    <div class="col-md-3">
                        <label for="status">Choose Color</label><br/>
                        <select class="form-control" id="fproduct_color">
                          <option selected disabled> Select</option>
                          <option value="1"> Green</option>
                          <option value="2"> White</option>
                          <option value="3"> Grey</option>
                          <option value="4"> Red</option>
                          <option value="5"> Blue</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="code">TOP HANDLE 1</label>
                              <input type="text" class="form-control" id="fproduct_height" placeholder="">
                            </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="code">TOP HANDLE 2</label>
                              <input type="text" class="form-control" id="fproduct_height" placeholder="">
                            </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="code">TOP HANDLE 3</label>
                              <input type="text" class="form-control" id="fproduct_height" placeholder="">
                            </div>
                      </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label for="status">TYPE OF FITMENT</label><br/>
                            <select name="status" class="form-control" id="fproduct_fitment">
                                <option disabled selected>Select Area </option>
                                <option value="0">FRAME FIT</option>
                                <option value="1">TELESCOPIC </option>
                                <option value="1">T BRACKET </option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 3--}}
                    <div class="col-md-12">
                      
                        <div class="form-group">
                            <label for="quantity">Comment</label>
                           <textarea rows="5" class="form-control"></textarea>
                          </div>
                        <div class="form-group">
                            <label for="quantity">Upload Photo</label>
                            <input type="file" class="form-control" id="quantity" placeholder="Enter Unit Cost">
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
  {{-- modal for the onChange Prodcut --}}
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
                        <input type="text" class="form-control" id="name" placeholder="Enter Name">
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">TRELLIS FIXTURE</label>
                            <input type="text" class="form-control" id="code" placeholder="">
                          </div>
                         
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="code">DOGGY BARS</label>
                            <input type="text" class="form-control" id="code" placeholder="">
                          </div>
                         
                    </div>
                   
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="code">TSWING GATE</label>
                            <input type="text" class="form-control" id="code" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="code">MONKEY BARS</label>
                            <input type="text" class="form-control" id="code" placeholder="">
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">SWING GATE</label>
                            <input type="text" class="form-control" id="code" placeholder="">
                          </div>
                      
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 2 --}}
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">Heigth</label>
                            <input type="text" class="form-control" id="code" placeholder="">
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="price">Width  </label>
                            <input type="text" class="form-control" id="price" placeholder="Enter Length">
                          </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">Inside/Outside</label><br/>
                            <select name="status" class="form-control" id="yes">
                                <option value="0">NO</option>
                                <option value="1">YES </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">Building Outside</label><br/>
                            <select name="status" class="form-control" id="yes">
                                <option value="0">NO</option>
                                <option value="1">YES </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">Face-On</label><br/>
                            <select name="status" class="form-control" id="yes">
                                <option value="0">NO</option>
                                <option value="1">YES </option>
                            </select>
                          </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 3--}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="code">Rows of Flights</label>
                            <input type="text" class="form-control" id="code" placeholder="">
                          </div>
                          <div class="form-group">
                              <label for="quantity">Key Alike</label>
                              <input type="text" class="form-control" id="quantity" placeholder="Enter Total Surface">
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="price">Lock Side</label>
                            <input type="text" class="form-control" id="price" placeholder="Enter Length">
                          </div>
                          <div class="form-group">
                              <label for="status">Lock Type</label>
                              <select name="status" class="form-control">
                                <option disabled selected>Select Lock Type </option>
                                <option  >Slaim </option>
                                <option  >Dead </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-4">
                      
                        <div class="form-group">
                            <label for="quantity">Number Locks</label>
                            <input type="text" class="form-control" id="quantity" placeholder="Enter Unit Cost">
                          </div>
                        <div class="form-group">
                            <label for="quantity">Lockbar size</label>
                            <input type="text" class="form-control" id="quantity" placeholder="Enter Unit Cost">
                          </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <br/>
                    <div class="row">
                      <div class="col-md-12">
                        
                          <label class="badge badge-primary">Beam Sections Required</label>
                          <br/>
                              <div class="col-md-1">
                                <label for="status">25x50</label><br/>
                                </div>
                              <div class="col-md-2">
                                <select name="status" class="form-control form-control-sm" id="yes">
                                  <option value="0">NO</option>
                                  <option value="1">YES </option>
                              </select>
                            </div>
                      
                   
                       
                            <div class="col-md-1"> 
                              <label for="status">50x50</label><br/>
                            </div>
                            <div class="col-md-2">
                               <select name="status" class="form-control form-control-sm" id="yes">
                                <option value="0">NO</option>
                                <option value="1">YES </option>
                            </select>
                            </div>
                        
                    
                       
                            <div class="col-md-1">  
                              <label for="status">76x38</label><br/> 
                            </div>
                              <div class="col-md-2">  
                                <select name="status" class="form-control form-control-sm" id="yes">
                                <option value="0">NO</option>
                                <option value="1">YES </option>
                            </select>
                              </div>
                        
                   
                       
                              <div class="col-md-1">
                                <label for="status">25x75</label><br/>
                              </div>
                              <div class="col-md-2">
                                <select name="status" class="form-control form-control-sm" id="yes">
                                <option value="0">NO</option>
                                <option value="1">YES </option>
                              </select>
                              </div>
                              <hr/>
                      </div>
                     
                      <div class="col-md-12">
                          <br/>
                          <br/>
                          <label class="badge badge-primary">Beam Required</label>
                          <br/>
                          
                                  <div class="col-md-2"> <label for="code">TOP BEAM</label></div>
                                  <div class="col-md-2"><input value="1" type="text" class="form-control" id="code" placeholder=""></div>
                            
                              <div class="col-md-2">
                                <label for="code">BOTTOM BEAM</label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="code" placeholder="">
                              </div>
                              <div class="col-md-2">
                                <label for="code">Total Meters</label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" value="23" class="form-control" id="code" placeholder="">
                              </div>
                              
                           <br/>
                           <br/>
                            <div class="col-md-2">
                                <label for="code">BACK CHANELL</label>
                            </div>
                            <div class="col-md-2"> 
                              <input type="text"  class="form-control" id="code" placeholder="">
                            </div>  
                            <div class="col-md-2">
                                <label for="code">LOCK BAR</label>
                            </div>
                            <div class="col-md-2">
                              <input type="text" value="1"  class="form-control" id="code" placeholder="">
                            </div>
                            <div class="col-md-2 ">
                                <label>Color</label>
                              </div>
                              <div class="col-md-2">
                                <select class="form-control">
                                  <option selected disabled> Select</option>
                                  <option> Green</option>
                                  <option > White</option>
                                  <option> Grey</option>
                                  <option> Red</option>
                                  <option> Blue</option>
                                </select>
                              </div>
                      </div>
                  
                </div>        
    
                  </div>
                  <!-- /.box-body -->
                </form>
              </div>
          
            <div class="modal-footer">
              <div class="col-md-2">
              <label> Total Amount</label> </div>
              <div class="col-md-3">
              <input type="text" disabled value="23,452" class="form-control"/></div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          
        </div>
      </div>
    </div>
  {{-- modal for the onChange Prodcut --}}
  <!-- modal  -->
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
                      <input type="text" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label for="code">TRELLIS FIXTURE</label>
                          <input type="text" class="form-control" id="code" placeholder="">
                        </div>
                       
                  </div>
                  <div class="col-md-2">
                      <div class="form-group">
                          <label for="code">DOGGY BARS</label>
                          <input type="text" class="form-control" id="code" placeholder="">
                        </div>
                       
                  </div>
                 
                  <div class="col-md-2">
                      <div class="form-group">
                          <label for="code">TSWING GATE</label>
                          <input type="text" class="form-control" id="code" placeholder="">
                      </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group">
                          <label for="code">MONKEY BARS</label>
                          <input type="text" class="form-control" id="code" placeholder="">
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label for="code">SWING GATE</label>
                          <input type="text" class="form-control" id="code" placeholder="">
                        </div>
                    
                  </div>
                  <div class="clearfix"></div>
                  <hr>
                  {{-- 2 --}}
                  <div class="col-md-3">
                      <div class="form-group">
                          <label for="code">Heigth</label>
                          <input type="text" class="form-control" id="code" placeholder="">
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label for="price">Width  </label>
                          <input type="text" class="form-control" id="price" placeholder="Enter Length">
                        </div>
                  </div>
                  <div class="col-md-2">
                      <div class="input-group">
                          <label for="status">Inside/Outside</label><br/>
                          <select name="status" class="form-control" id="yes">
                              <option value="0">NO</option>
                              <option value="1">YES </option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-2">
                      <div class="input-group">
                          <label for="status">Building Outside</label><br/>
                          <select name="status" class="form-control" id="yes">
                              <option value="0">NO</option>
                              <option value="1">YES </option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-2">
                      <div class="input-group">
                          <label for="status">Face-On</label><br/>
                          <select name="status" class="form-control" id="yes">
                              <option value="0">NO</option>
                              <option value="1">YES </option>
                          </select>
                        </div>
                  </div>
                  <div class="clearfix"></div>
                  <hr>
                  {{-- 3--}}
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="code">Rows of Flights</label>
                          <input type="text" class="form-control" id="code" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Key Alike</label>
                            <input type="text" class="form-control" id="quantity" placeholder="Enter Total Surface">
                        </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="price">Lock Side</label>
                          <input type="text" class="form-control" id="price" placeholder="Enter Length">
                        </div>
                        <div class="form-group">
                            <label for="status">Lock Type</label>
                            <select name="status" class="form-control">
                              <option disabled selected>Select Lock Type </option>
                              <option  >Slaim </option>
                              <option  >Dead </option>
                            </select>
                          </div>
                  </div>
                  <div class="col-md-4">
                    
                      <div class="form-group">
                          <label for="quantity">Number Locks</label>
                          <input type="text" class="form-control" id="quantity" placeholder="Enter Unit Cost">
                        </div>
                      <div class="form-group">
                          <label for="quantity">Lockbar size</label>
                          <input type="text" class="form-control" id="quantity" placeholder="Enter Unit Cost">
                        </div>
                  </div>
                  <div class="clearfix"></div>
                  <hr>
                  <br/>
                  <div class="row">
                    <div class="col-md-12">
                      
                        <label class="badge badge-primary">Beam Sections Required</label>
                        <br/>
                            <div class="col-md-1">
                              <label for="status">25x50</label><br/>
                              </div>
                            <div class="col-md-2">
                              <select name="status" class="form-control form-control-sm" id="yes">
                                <option value="0">NO</option>
                                <option value="1">YES </option>
                            </select>
                          </div>
                    
                 
                     
                          <div class="col-md-1"> 
                            <label for="status">50x50</label><br/>
                          </div>
                          <div class="col-md-2">
                             <select name="status" class="form-control form-control-sm" id="yes">
                              <option value="0">NO</option>
                              <option value="1">YES </option>
                          </select>
                          </div>
                      
                  
                     
                          <div class="col-md-1">  
                            <label for="status">76x38</label><br/> 
                          </div>
                            <div class="col-md-2">  
                              <select name="status" class="form-control form-control-sm" id="yes">
                              <option value="0">NO</option>
                              <option value="1">YES </option>
                          </select>
                            </div>
                      
                 
                     
                            <div class="col-md-1">
                              <label for="status">25x75</label><br/>
                            </div>
                            <div class="col-md-2">
                              <select name="status" class="form-control form-control-sm" id="yes">
                              <option value="0">NO</option>
                              <option value="1">YES </option>
                            </select>
                            </div>
                            <hr/>
                    </div>
                   
                    <div class="col-md-12">
                        <br/>
                        <br/>
                        <label class="badge badge-primary">Beam Required</label>
                        <br/>
                        
                                <div class="col-md-2"> <label for="code">TOP BEAM</label></div>
                                <div class="col-md-2"><input value="1" type="text" class="form-control" id="code" placeholder=""></div>
                          
                            <div class="col-md-2">
                              <label for="code">BOTTOM BEAM</label>
                            </div>
                            <div class="col-md-2">
                              <input type="text" class="form-control" id="code" placeholder="">
                            </div>
                            <div class="col-md-2">
                              <label for="code">Total Meters</label>
                            </div>
                            <div class="col-md-2">
                              <input type="text" value="23" class="form-control" id="code" placeholder="">
                            </div>
                            
                         <br/>
                         <br/>
                          <div class="col-md-2">
                              <label for="code">BACK CHANELL</label>
                          </div>
                          <div class="col-md-2"> 
                            <input type="text"  class="form-control" id="code" placeholder="">
                          </div>  
                          <div class="col-md-2">
                              <label for="code">LOCK BAR</label>
                          </div>
                          <div class="col-md-2">
                            <input type="text" value="1"  class="form-control" id="code" placeholder="">
                          </div>
                          <div class="col-md-2 ">
                              <label>Color</label>
                            </div>
                            <div class="col-md-2">
                              <select class="form-control">
                                <option selected disabled> Select</option>
                                <option> Green</option>
                                <option > White</option>
                                <option> Grey</option>
                                <option> Red</option>
                                <option> Blue</option>
                              </select>
                            </div>
                    </div>
                
              </div>        
  
                </div>
                <!-- /.box-body -->
              </form>
            </div>
        
          <div class="modal-footer">
            <div class="col-md-2">
            <label> Total Amount</label> </div>
            <div class="col-md-3">
            <input type="text" disabled value="23,452" class="form-control"/></div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        
      </div>
    </div>
  </div>
    {{-- modal for the product details  --}}
  {{-- modal for the onChange Prodcut --}}
  <!-- modal  -->
  <div class="modal fade" id="ProductDetailsShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <input type="text" class="form-control" id="name" placeholder="" value="Deluxe Fixture ">
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">TRELLIS FIXTURE</label>
                            <input type="text" class="form-control" id="code" placeholder="" value=" 1">
                          </div>
                         
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="code">DOGGY BARS</label>
                            <input type="text" class="form-control" id="code" placeholder="" value=" 1">
                          </div>
                         
                    </div>
                   
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="code">TSWING GATE</label>
                            <input type="text" class="form-control" id="code" placeholder="" value=" 1">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="code">MONKEY BARS</label>
                            <input type="text" class="form-control" id="code" placeholder="" value=" 1">
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">SWING GATE</label>
                            <input type="text" class="form-control" id="code" placeholder="" value="">
                          </div>
                      
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 2 --}}
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code">Heigth</label>
                            <input type="text" class="form-control" id="code" placeholder="" value="600">
                          </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="price">Width  </label>
                            <input type="text" class="form-control" id="price" placeholder="" value="1000">
                          </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">Inside/Outside</label><br/>
                            <select name="status" class="form-control" id="yes">
                                <option value="0">NO</option>
                                <option value="1" selected>YES </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">Building Outside</label><br/>
                            <select name="status" class="form-control" id="yes">
                                <option value="0">NO</option>
                                <option value="1" selected>YES </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <label for="status">Face-On</label><br/>
                            <select name="status" class="form-control" id="yes">
                                <option value="0">NO</option>
                                <option value="1">YES </option>
                            </select>
                          </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    {{-- 3--}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="code">Rows of Flights</label>
                            <input type="text" class="form-control" id="code" placeholder="" value="1">
                          </div>
                          <div class="form-group">
                              <label for="quantity">Key Alike</label>
                              <input type="text" class="form-control" id="quantity" placeholder="" value="5">
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="price">Lock Side</label>
                            <input type="text" class="form-control" id="price" placeholder=""  value="2">
                          </div>
                          <div class="form-group">
                              <label for="status">Lock Type</label>
                              <select name="status" class="form-control">
                                <option disabled selected>Select Lock Type </option>
                                <option  >Slaim </option>
                                <option selected >Dead </option>
                              </select>
                            </div>
                    </div>
                    <div class="col-md-4">
                      
                        <div class="form-group">
                            <label for="quantity">Number Locks</label>
                            <input type="text" class="form-control" id="quantity" placeholder="" value="1">
                          </div>
                        <div class="form-group">
                            <label for="quantity">Lockbar size</label>
                            <input type="text" class="form-control" id="quantity" placeholder="" value="1">
                          </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <br/>
                    <div class="row">
                      <div class="col-md-12">
                        
                          <label class="badge badge-primary">Beam Sections Required</label>
                          <br/>
                              <div class="col-md-1">
                                <label for="status">25x50</label><br/>
                                </div>
                              <div class="col-md-2">
                                <select name="status" class="form-control form-control-sm" id="yes">
                                  <option value="0">NO</option>
                                  <option value="1" selected>YES </option>
                              </select>
                            </div>
                      
                   
                       
                            <div class="col-md-1"> 
                              <label for="status">50x50</label><br/>
                            </div>
                            <div class="col-md-2">
                               <select name="status" class="form-control form-control-sm" id="yes">
                                <option value="0">NO</option>
                                <option value="1" selected>YES </option>
                            </select>
                            </div>
                        
                    
                       
                            <div class="col-md-1">  
                              <label for="status">76x38</label><br/> 
                            </div>
                              <div class="col-md-2">  
                                <select name="status" class="form-control form-control-sm" id="yes">
                                <option value="0">NO</option>
                                <option value="1">YES </option>
                            </select>
                              </div>
                        
                   
                       
                              <div class="col-md-1">
                                <label for="status">25x75</label><br/>
                              </div>
                              <div class="col-md-2">
                                <select name="status" class="form-control form-control-sm" id="yes">
                                <option value="0">NO</option>
                                <option value="1">YES </option>
                              </select>
                              </div>
                       
                      </div>
                      
                      <div class="col-md-12">
                          <br/>
                          <br/>
                          <label class="badge badge-primary">Beam Required</label>
                          <br/>
                          
                                  <div class="col-md-2"> <label for="code">TOP BEAM</label></div>
                                  <div class="col-md-2"><input value="1" type="text" class="form-control" id="code" placeholder=""></div>
                            
                              <div class="col-md-2">
                                <label for="code">BOTTOM BEAM</label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" class="form-control" id="code" placeholder="">
                              </div>
                              <div class="col-md-2">
                                <label for="code">Total Meters</label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" value="23" class="form-control" id="code" placeholder="">
                              </div>
                              
                           <br/>
                           <br/>
                            <div class="col-md-2">
                                <label for="code">BACK CHANELL</label>
                            </div>
                            <div class="col-md-2"> 
                              <input type="text"  class="form-control" id="code" placeholder="">
                            </div>  
                            <div class="col-md-2">
                                <label for="code">LOCK BAR</label>
                            </div>
                            <div class="col-md-2">
                              <input type="text" value="1"  class="form-control" id="code" placeholder="">
                            </div>
                            <div class="col-md-2 ">
                                <label>Color</label>
                              </div>
                              <div class="col-md-2">
                                <select class="form-control">
                                  <option disabled> Choose Color</option>
                                  <option> Green</option>
                                  <option selected> White</option>
                                  <option> Grey</option>
                                  <option> Red</option>
                                  <option> Blue</option>
                                </select>
                              </div>
                      </div>
                </div>        
    
                  </div>
                  <!-- /.box-body -->
                </form>
              </div>
          
            <div class="modal-footer">
                <div class="col-md-2">
                    <label> Total Amount</label> </div>
                    <div class="col-md-3">
                    <input type="text" disabled value="23,452" class="form-control"/></div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          
        </div>
      </div>
  </div>
  <script type="text/javascript">

      function onProductChange(value){
          if(value == '1'){
            $('#ProductDetailsTrellis').modal('show');
            document.getElementById('qty_1').value = "2";
          }
          else if(value == '2'){
            $('#ProductDetailsFixture').modal('show');
            document.getElementById('qty_1').value = "2";
          }
          
          else if(value == '3'){
            $('#ProductDetailsBurglar').modal('show');
            document.getElementById('qty_1').value = "2";
          }
          else if(value == '4'){
            $('#ProductDetailsClear').modal('show');
            document.getElementById('qty_1').value = "2";
          }
      }
      function showProductDetails(){
      var value = document.getElementById('product_1').value;
      console.log(value);
      if (value == ""){
        alert('select a product first');
      }
      else if (value == "1"){
        $('#ProductDetailsTrellis').modal('show');
        document.getElementById('tproduct_name').value = "Econo Trellis";
        document.getElementById('tproduct_position').value = "Backside";
        document.getElementById('tproduct_height').value = "1000";
        document.getElementById('tproduct_width').value = "1200";
        document.getElementById('tproduct_flight').value = "3";
        document.getElementById('tproduct_color').value = "2";
        document.getElementById('tproduct_fitment').value = "1";
        document.getElementById('tproduct_protection').value = "1";
        document.getElementById('tproduct_doggydoor').value = "1";
        document.getElementById('tproduct_locktype').value = "1";
        document.getElementById('tproduct_lockbar').value = "1";
        document.getElementById('tproduct_keyalike').value = "1";
        document.getElementById('tproduct_lockside').value = "1";
        document.getElementById('tproduct_total_lock').value = "1";
        document.getElementById('tproduct_top').value = "1";
        document.getElementById('tproduct_left').value = "2";
        document.getElementById('tproduct_bottom').value = "3";
        document.getElementById('tproduct_right').value = "2";
        document.getElementById('tproduct_cornerplates').value = "1";
        document.getElementById('tproduct_anglebrackets').value = "1";
        console.log('data populated');
      }
      else{
        $('#ProductDetailsFixture').modal('show');
        document.getElementById('fproduct_name').value = "Deluxe Fixture";
        document.getElementById('fproduct_position').value = "Front";
        document.getElementById('fproduct_height').value = "1000";
        document.getElementById('fproduct_width').value = "1200";
        document.getElementById('fproduct_flights').value = "3";
        document.getElementById('fproduct_color').value = "1";
        document.getElementById('fproduct_fitment').value = "1";
        document.getElementById('fproduct_protection').value = "1";
        document.getElementById('fproduct_doggydoor').value = "1";
        document.getElementById('fproduct_top').value = "1";
        document.getElementById('fproduct_left').value = "2";
        document.getElementById('fproduct_bottom').value = "3";
        document.getElementById('fproduct_right').value = "2";
        document.getElementById('fproduct_cornerplates').value = "1";
        document.getElementById('fproduct_anglebrakets').value = "1";
      }
      console.log('Product Details Clicked');
      
    }

//   select 2 code for the popup styling
    $(window).on('load',function() {
        document.getElementById('firstname').value = "Jhon";
        document.getElementById('lastname').value = "Dicard";
        document.getElementById('companyname').value = "Niku Solutions PTE LTD";
        document.getElementById('email').value = "customer@gmail.com";
        document.getElementById('phone').value = "+1 123 4567 890";
        $('#quotenumber').select2();
        $('.select2-container').attr('style', 'width:100%');
        $('.select2-selection--single').attr('style', 'height:32px;');
    });
    $(document).ready(function() {
    });  

    
    function putCustomerName(value){
      if(value == 1){
        document.getElementById('firstname').value = "Jhon";
        document.getElementById('lastname').value = "Dicard";
        document.getElementById('companyname').value = "Niku Solutions PTE LTD";
        document.getElementById('email').value = "customer@gmail.com";
        document.getElementById('phone').value = "+1 123 4567 890";
      }
      else if(value == 2){
        document.getElementById('firstname').value = "Noman ";
        document.getElementById('lastname').value = "Shah Khan";
        document.getElementById('companyname').value = "Google Solutions PTE LTD";
        document.getElementById('email').value = "nomihahah@gmail.com";
        document.getElementById('phone').value = "+1 456 8790 123";
      }
      else if(value == 3){
        document.getElementById('firstname').value = "Raheel ";
        document.getElementById('lastname').value = "Khan";
        document.getElementById('companyname').value = "Yahoo Solutions PTE LTD";
        document.getElementById('email').value = "khana123@gmail.com";
        document.getElementById('phone').value = "+1 963 8542 789";
      }
      else{
        document.getElementById('firstname').value = "Murtaza ";
        document.getElementById('lastname').value = "Pakana";
        document.getElementById('companyname').value = "Upwork Solutions PTE LTD";
        document.getElementById('email').value = "paki123@gmail.com";
        document.getElementById('phone').value = "+1 741 8502 354";
      }
        
      
    }
    function putSalesName(value){
      if(value == 1){
        document.getElementById('sfirstname').value = "Jhon";
        document.getElementById('slastname').value = "Dicard";
        document.getElementById('scompanyname').value = "Niku Solutions PTE LTD";
        document.getElementById('semail').value = "customer@gmail.com";
        document.getElementById('sphone').value = "+1 123 4567 890";
      }
      else if(value == 2){
        document.getElementById('sfirstname').value = "Noman ";
        document.getElementById('slastname').value = "Shah Khan";
        document.getElementById('scompanyname').value = "Google Solutions PTE LTD";
        document.getElementById('semail').value = "nomihahah@gmail.com";
        document.getElementById('sphone').value = "+1 456 8790 123";
      }
      else if(value == 3){
        document.getElementById('sfirstname').value = "Raheel ";
        document.getElementById('slastname').value = "Khan";
        document.getElementById('scompanyname').value = "Yahoo Solutions PTE LTD";
        document.getElementById('semail').value = "khana123@gmail.com";
        document.getElementById('sphone').value = "+1 963 8542 789";
      }
      else{
        document.getElementById('sfirstname').value = "Murtaza ";
        document.getElementById('slastname').value = "Pakana";
        document.getElementById('scompanyname').value = "Upwork Solutions PTE LTD";
        document.getElementById('semail').value = "paki123@gmail.com";
        document.getElementById('sphone').value = "+1 741 8502 354";
      }
    }

    $('.js-example-basic-multiple').select2({
      placeholder: 'Select an option'
    });
      $(document).ready(function() {
        $(".add-more").click(function(){ 
          $('#additionalWorkLabel').show();
         $('#additionalWorkOldLabel').hide();
            var html = $(".copy").html();
            $(".after-add-more").before(html);
        });
  
        $("body").on("click",".remove",function(){ 
            $(this).parents(".controlremove").remove();
        });
      });

      // add new row 
      //$("#add_row").unbind('click').bind('click', function() {
        function addNewRow(){
        var table = $("#product_info_table");
        var count_table_tbody_tr = $("#product_info_table tbody tr").length;
        var row_id = count_table_tbody_tr + 3;
        
        var html = '<tr id="row_'+row_id+'">'+      
            '<td>'+ 
            `<select onchange="onProductChange(this.value)" class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="putPrice()" required>
                                  <option value="" selected disabled>Select Product</option>
                                  <option value="1" >Deluxe Trellis</option>
                                  <option value="2">Deluxe Fixture</option>
                                  <option value="1" >Econo Trellis</option>
                                  <option value="2" >Econo Fixture</option>
                                  <option value="1">	Alu Trellis</option>
                                  <option value="2">	Alu Fixture</option>
                                  <option value="1">	Galv Trellis</option>
                                  <option value="2">Galv Fixture  </option>
                                  <option value="1">DuPlus Trellis </option>
                                  <option value="2">DuPlus Fixture </option>
                                  <option value="3">Econo Burglar Bars </option>
                                  <option value="4">Robo Clear Bars </option>`;
            html += '</select>'+
            '</td>'+ 
            ` <td>
            <a class="btn btn-primary" onclick="showProductDetails()">
            <i class="fa fa-eye"></i>
            </a>
            </td>` +
            '<td><input type="number" placeholder="Qty" name="qty[]" value="1" id="qty_1" class="form-control" onkeyup="getTotal(1)" ></td>'+
            '<td><div class="input-group"><div class="input-group-addon"><i class="fa fa-zar"></i></div><input type="text" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off" value="350"></div><input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control"></td>'+
            '<td><div class="input-group"><div class="input-group-addon"><i class="fa fa-zar"></i></div><input type="text" name="amount[]" id="amount_1" class="form-control" disabled></div><input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control"></td>'+
            '<td><button type="button" class="btn btn-danger" onclick="removeRow(' + row_id + ')"><i class="fa fa-close"></i></button>'+
            //'<button type="button" class="btn btn-success"  id="addBtn_'+row_id+'" onclick="addNewRow()"><i class="fa fa-plus"></i></button></td>'+
            '</tr>';
             // console.log(row_id);
              newid = row_id -1;
           //$('#addBtn_'+newid).remove();
         
       
        if(count_table_tbody_tr >= 1) {
          $('#firstRowRemoveButton').removeAttr('disabled');
        $("#product_info_table tbody tr:last").prev().after(html); 
        }
        row_id++;
      }
      var row_idd = 1;
      function removeRow(tr_id)
      {
        $("#product_info_table tbody tr#row_" + tr_id).remove();
        row_idd++;
      }

</script>
  <script>
        var num = 1;
        document.getElementById('add').addEventListener("click",addInput);
        function addInput(){
        var newInput = '<br/><br/><input class="form-control" placeholder="Enter Additional Work" type="text" name="input'+num+'"/> <input type="text"  class="form-control" style="width:30%" placeholder="Enter Price" name="additional_price' + num +'"/> ';
          document.getElementById('demo').innerHTML += newInput;  
          num++;
        }
      </script>
@endsection 