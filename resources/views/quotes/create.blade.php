
@extends('layouts.mainlayout')
@section('content')
<style>
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    color: #000;
    font-size: 16px;
}
/* custom code for the checkboxes */



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
          <h4 class="box-title">Create Qoute</h4>
        </div>
        <div class="box-body">
            <form role="form">
                <div class="box-body ">
                  <section>
                    <div class="col-md-3 ">
                        <div class="form-group">
                            <label for="product_name">Choose Customer</label>
                            <select  onchange="putCustomerName(this.value)" id="product_name" name="product_name" class="form-control form-control-sm">
                                <option value="0" selected>New Customer</option>
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
                              <input type="text" name="lastname" class=" form-control form-control-sm" id="lastname" placeholder="Enter Last Name">
                          </div>
                          <div class="form-group">
                              <label for="address">Address</label>
                              <input type="text" name="address" class=" form-control form-control-sm" id="address" placeholder="Enter Address">
                          </div>

                    </div>
                    <div class="col-md-3 ">
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="Enter Customer Email">
                          </div>
                      
                       
                          <div class="form-group">
                              <label for="companyname">Company Name</label>
                              <input type="text" name="companyname" class="form-control form-control-sm" id="companyname" placeholder="Enter Company Name">
                          </div>
                        
                          <div class="form-group">
                              <label for="phone">Phone Number</label>
                              <input type="text" name="phone" class="form-control form-control-sm" id="phone" placeholder="Enter Phone Number">
                          </div>
                      </div>
                      <div class="col-md-4 pull-right">
                          <div class="invoice-col">
                              <img src="{{asset('img/logo.webp')}}" class="responsive"  style="display: block; width:200px;" />
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
                            <div class="form-group">
                                <label for="expirydateInitial">Expiry Date  </label>
                                <input type="text" name="expirydateInitial" class="form-control form-control-sm" id="expirydateInitial" placeholder="Enter First Name">
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
                                <select onchange="onProductChange()" class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="putPrice()" required>
                                  <option value="" selected disabled>Select Product</option>
                                  <option value="" >Econo Burglar Bars</option>
                                  <option value="">Robo Clear Bars</option>
                                  <option value="" >Deluxe Fixture</option>
                                  <option value="">	Econo Fixture</option>
                                    
                                    </select>
                                </td>
                                <td>
                                  <a class="btn btn-primary" onclick="showProductDetails()"><i class="fa fa-eye"></i></a>
                                </td>
                                <td><input type="number" placeholder="Qty"  name="qty[]" id="qty_1" class="form-control" required onkeyup="getTotal(1)"></td>
                                <td>
                                    <input type="text" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off" value="200">
                                    <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
                                    <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                                </td>
                                <td><button disabled type="button" class="btn btn-danger" onclick="removeRow(1)"><i class="fa fa-close"></i></button></td>
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
                        
                        
                        <label id="additionalWorkLabel" style="display:none"> Additional Work (if any)</label>
                        <div class=" row control-group after-add-more" id="after_additional_work_">
                              <div class="col-md-7">
                                  <label id="additionalWorkOldLabel"> Additional Work (if any)</label>
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
                    <div class="copy hide ">
                        <div class="form-group row controlremove" style="margin-top:20px">
                          <div class="col-md-7">
                            <input type="text" name="addmore[]" class="form-control" placeholder="Enter Additional Work Here">
                          </div>
                          <div class="col-md-4">
                            <input type="number" name="addmore[]" class="form-control" placeholder="Price"> 
                          </div>
                          <div class="col-md-1">
                            <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                          </div>
                        </div>
                      </div>
                  </div>
              </form>
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
        <div class="box-footer">
          <div class="pull-right">
            <a href="{{url('/quotes/1')}}" class="btn btn-warning ">Save as Draft</a>
            <a href="{{url('/quotes/1')}}" class="btn btn-primary ">Save</a>
          </div>
          
            
        </div>
    </div>    
  </div>
{{-- on load modal --}}
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
   $('#expirydateInitial').daterangepicker({
        singleDatePicker: true,
      });
    function putCustomerName(value){
      if(value == 1){
        document.getElementById('firstname').value = "Jhon";
        document.getElementById('lastname').value = "Dicard";
        document.getElementById('companyname').value = "Niku Solutions PTE LTD";
        document.getElementById('email').value = "customer@gmail.com";
        document.getElementById('phone').value = "+1 123 4567 890";
        document.getElementById('address').value = "Jhonsburg, 67 college Street, SA";
      }
      else if(value == 2){
        document.getElementById('firstname').value = "Noman ";
        document.getElementById('lastname').value = "Shah Khan";
        document.getElementById('companyname').value = "Google Solutions PTE LTD";
        document.getElementById('email').value = "nomihahah@gmail.com";
        document.getElementById('phone').value = "+1 456 8790 123";
        document.getElementById('address').value = "Jhonsburg, Rocket Plaza Street, SA";
      }
      else if(value == 3){
        document.getElementById('firstname').value = "Raheel ";
        document.getElementById('lastname').value = "Khan";
        document.getElementById('companyname').value = "Yahoo Solutions PTE LTD";
        document.getElementById('email').value = "khana123@gmail.com";
        document.getElementById('phone').value = "+1 963 8542 789";
        document.getElementById('address').value = "Jhonsburg, 12 Up Street, SA";
      }
      else if(value == 0){
        document.getElementById('firstname').value = "";
        document.getElementById('lastname').value = "";
        document.getElementById('companyname').value = "";
        document.getElementById('address').value = "";
        document.getElementById('email').value = "";
        document.getElementById('phone').value = "";
      }
      else{
        document.getElementById('firstname').value = "Murtaza ";
        document.getElementById('lastname').value = "Pakana";
        document.getElementById('companyname').value = "Upwork Solutions PTE LTD";
        document.getElementById('email').value = "paki123@gmail.com";
        document.getElementById('phone').value = "+1 741 8502 354";
        document.getElementById('address').value = "Jhonsburg, 81 Street, SA";
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


    function onProductChange(){
      $('#ProductDetails').modal('show');
      document.getElementById('qty_1').value = "2";
    }
    function showProductDetails(){
      console.log('Product Details Clicked');
      $('#ProductDetailsShow').modal('show');
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

      // add new row #############
      //$("#add_row").unbind('click').bind('click', function() {
        function addNewRow(){
        var table = $("#product_info_table");
        var count_table_tbody_tr = $("#product_info_table tbody tr").length;
        var row_id = count_table_tbody_tr + 1;
        
        var html = '<tr id="row_'+row_id+'">'+      
            '<td>'+ 
            '<select onchange="onProductChange()" class="form-control select_group product" data-row-id="2" id="product_'+row_id+'" name="product[]" style="width:100%;" onchange="getProductData('+row_id+')">'+
                `<option value="" selected disabled>Select Product</option>
                <option value="" >Econo Burglar Bars</option>
                      <option value="">Robo Clear Bars</option>
                      <option value="" >Deluxe Fixture</option>
                  <option value="">	Econo Fixture</option>`;
            html += '</select>'+
            '</td>'+ 
            ` <td>
            <a class="btn btn-primary" onclick="showProductDetails()">
            <i class="fa fa-eye"></i>
            </a>
            </td>` +
            '<td><input type="number" placeholder="Qty" name="qty[]" value="1" id="qty_1" class="form-control" onkeyup="getTotal(1)" ></td>'+
            '<td><input type="text" name="rate[]" id="rate_1" class="form-control" disabled value="350"><input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control"></td>'+
            '<td><input type="text" name="amount[]" id="amount_1" class="form-control" disabled><input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control"></td>'+
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


        var num = 1;
        document.getElementById('add').addEventListener("click",addInput);
        function addInput(){
        var newInput = '<br/><br/><input class="form-control" placeholder="Enter Additional Work" type="text" name="input'+num+'"/> <input type="text"  class="form-control" style="width:30%" placeholder="Enter Price" name="additional_price' + num +'"/> ';
          document.getElementById('demo').innerHTML += newInput;  
          num++;
        }
      </script>
@endsection 