@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Inventory Details</h3>
              <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddStock" title="Add More Stock"><i class="fa fa-plus"></i> Add More Stock</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#MinusStock" title="Less Stock"><i class="fa fa-minus"></i> Less Stock</button>
                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
                    <div class="row">
              
                            <div class="col-md-8">
                            <table class="table table-striped">
                              <tr>
                                  <td><b>Inventory Name</b></td>
                                  <td>12MM STEEL UPRIGHT BRONZE LC</td>
                              </tr>
                              <tr>
                                  <td><b>Type of Purchase</b></td>
                                  <td>7.25</td>
                              </tr>
                              <tr>
                                  <td><b>Total Stock </b></td>
                                  <td>4.5</td>
                              </tr>
                              <tr>
                                  <td><b>Stock Value</b></td>
                                  <td>4.5</td>
                              </tr>
                              <tr>
                                  <td><b>Material Costs</b></td>
                                  <td>75.82</td>
                              </tr>
                              <tr>
                                  <td><b>Laser Cutting</b></td>
                                  <td>75.82</td>
                              </tr>
                              <tr>
                                  <td><b>Powder Coating</b></td>
                                  <td>75.82</td>
                              </tr>
                              <tr>
                                  <td><b>Rate per Length</b></td>
                                  <td>75.82</td>
                              </tr>
                              <tr>
                                  <td><b>Used in Products</b></td>
                                  <td>
                                      <label class="label label-info margin">Galv Fixture	</label>
                                      <label class="label  label-info margin"> Deluxe Fixture	</label>
                                      <label class="label  label-info margin">Deluxe TRELLES	</label>
                                      
                                    </td>
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
          
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/products'); !!}" class="btn btn-default">Back</a>
              </div>
              <!-- /.box-footer -->
</div>

<!-- Stock Ledger Begins -->
<div class="row">
    <div class="col-md-12">
    <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Inventory Ledger</h3>
                <span class="pull-right">
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
                <div id="nofeaturesapp_wrapper" class="dataTables_wrapper no-footer">
                    <table id="nofeaturesapp" class="display responsive wrap dataTable no-footer dtr-inline" style="width:100%;" role="grid">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Reason</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        
                        <tbody>			  
                        <tr>
                            <td>01-Jan-2018</td>
                            <td>Purchased</td>
                            <td>Purhcased on Demannd of Factory</td>
                            <td><span class="text-green">ADD</span></td>
                            <td>5.00</td>
                        </tr>
                        <tr>
                            <td>02-Jan-2018</td>
                            <td>Damaged</td>
                            <td>Damaged while tranporting</td>
                            <td><span class="text-red">MINUS</span></td>
                            <td>1.5</td>
                        </tr>
                        <tr>
                            <td>05-Jan-2018</td>
                            <td>Useless</td>
                            <td>This quantity us useless</td>
                            <td><span class="text-red">MINUS</span></td>
                            <td>2.0</td>
                        </tr>
                        <tr>
                            <td>08-Jan-2018</td>
                            <td>Purchased</td>
                            <td>Purhcased on Demannd of Factory</td>
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
</div>
<!-- Stock Ledger ends -->

<!-- modal more stock -->
<div class="modal fade" id="AddStock" tabindex="-1" role="dialog" aria-labelledby="AddStock" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add More Stock for 19MM STEEL UPRIGHT WHITE LC</h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="box-body">
                          <div class="col-md-12">                   
                            <div class="form-group">
                            <label for="stock_length">Select Reason</label>
                            <select name="reason" class="form-control" id="reason">
                                <option value="purchased">Purchased</option>
                                <option value="other">other</option>
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
                  <h4 class="modal-title">Less Stock for 19MM STEEL UPRIGHT WHITE LC</h4>
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
      <script>
          function showsuccess(){
            swal("Success", "Record has been updated.", "success");
            $('.modal').modal('hide');
          }
      </script>
@endsection