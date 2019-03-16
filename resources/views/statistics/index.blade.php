@extends('layouts.mainlayout')
@section('content')
<!-- User Row Begins-->
<div class="row">
  <!-- User Card Begins -->
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-aqua">
        <h3 class="widget-user-username">Dave Miller</h3>
        <h5 class="widget-user-desc">Distributor</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar">
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">3,200</h5>
              <span class="description-text">SALES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h3>2nd</h3>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">35</h5>
              <span class="description-text">QUOTES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- User Card Ends -->


  <!-- User Card Begins -->
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-green-active">
        <h3 class="widget-user-username">Florin Ristea</h3>
        <h5 class="widget-user-desc">Sales Representative</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar">
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">5,000</h5>
              <span class="description-text">SALES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h3>1st</h3>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">48</h5>
              <span class="description-text">QUOTES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- User Card Ends -->



  <!-- User Card Begins -->
  <div class="col-md-4">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-gray">
        <h3 class="widget-user-username">Florin Ristea</h3>
        <h5 class="widget-user-desc">Sales Representative</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar">
      </div>
      <div class="box-footer">
        <div class="row">
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h5 class="description-header">3,100</h5>
              <span class="description-text">SALES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4 border-right">
            <div class="description-block">
              <h3>3rd</h3>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
          <div class="col-sm-4">
            <div class="description-block">
              <h5 class="description-header">30</h5>
              <span class="description-text">QUOTES</span>
            </div>
            <!-- /.description-block -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.widget-user -->
  </div>
  <!-- User Card Ends -->


</div>
<!-- User Row Ends -->

<div class="row">
  <!-- Lastest Orders -->
  <div class="col-md-12">
  <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Summary</h3>  
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table class="table no-margin">
                <thead>
                <tr>
                  <th>Position</th>
                  <th>Name</th>
                  <th>Agent/Distributor</th>
                  <th>Amount</th>
                  <th>Commission/Profit</th>
                  <th>Sales</th>
                  <th>Conversion Rate</th>
                  <th>Quotes</th>
                  <th>Leads</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Florin Ristea</td>
                  <td>Sales Representative</td>
                  <td>R5,000</td>
                  <td>R500</td>
                  <td>35</td>
                  <td>58%</td>
                  <td>48</td>
                  <td>100</td>

                </tr>

                <tr>
                  <td>2</td>
                  <td>Dave Miller</td>
                  <td>Distributor</td>
                  <td>R3,200</td>
                  <td>R380</td>
                  <td>35</td>
                  <td>58%</td>
                  <td>35</td>
                  <td>90</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Florin Ristea</td>
                  <td>Sales Representative</td>
                  <td>R3,100</td>
                  <td>R500</td>
                  <td>35</td>
                  <td>58%</td>
                  <td>30</td>
                  <td>80</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Florin Ristea</td>
                  <td>Sales Representative</td>
                  <td>R2,000</td>
                  <td>R500</td>
                  <td>35</td>
                  <td>58%</td>
                  <td>28</td>
                  <td>70</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Florin Ristea</td>
                  <td>Sales Representative</td>
                  <td>R2,100</td>
                  <td>R500</td>
                  <td>35</td>
                  <td>58%</td>
                  <td>25</td>
                  <td>65</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Florin Ristea</td>
                  <td>Sales Representative</td>
                  <td>R2,100</td>
                  <td>R500</td>
                  <td>35</td>
                  <td>58%</td>
                  <td>25</td>
                  <td>65</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Florin Ristea</td>
                  <td>Sales Representative</td>
                  <td>R2,100</td>
                  <td>R500</td>
                  <td>35</td>
                  <td>58%</td>
                  <td>25</td>
                  <td>65</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Florin Ristea</td>
                  <td>Sales Representative</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>55</td>
                </tr>
               
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
        </div>

  </div>

  </div> <!-- end row  -->

  <div class="row">
    <!-- Lastest Orders -->
    <div class="col-md-12">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Summary Sales Manager</h3>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Commission/Profit</th>
                    <th>Sales</th>
                    <th>Conversion Rate</th>
                    <th>Quotes</th>
                    <th>Leads</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Florin Ristea</td>
                    <td>R5,000</td>
                    <td>R500</td>
                    <td>35</td>
                    <td>58%</td>
                    <td>48</td>
                    <td>100</td>
  
                  </tr>
  
                  <tr>
                    <td>2</td>
                    <td>Dave Miller</td>
                    <td>R3,200</td>
                    <td>R380</td>
                    <td>35</td>
                    <td>58%</td>
                    <td>35</td>
                    <td>90</td>
                  </tr>
                
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          </div>
  
    </div>
  
    </div> <!-- end row  -->


  <div class="row">
    <!-- Lastest Orders -->
    <div class="col-md-12">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Products</h3>  
              <span class="pull-right">
                  <div class="custom-input-group">
                      <select class="custom-form-control" name="country" id="country">
                          <option value="0">All Country</option>
                          <option value="1" selected>South Africa</option>
                          <option value="2">Australia</option>
                          <option value="3">USA</option>
                      </select>
                  </div>  
                  <div class="custom-input-group">
                      <select class="custom-form-control" name="city" id="city">
                          <option value="0">All City</option>
                          <option value="1" selected>Johannesburg</option>
                          <option value="2">Cape Town</option>
                          <option value="3">Port Elizabeth</option>
                      </select>
                  </div>
                  <div class="custom-input-group">
                      <select class="form-control select_group">
                          <option value="" selected="" disabled="">Select Product</option>
                          <option value="1">Deluxe Trellis</option>
                          <option value="2">Deluxe Fixture</option>
                          <option value="1">Econo Trellis</option>
                          <option value="2">Econo Fixture</option>
                          <option value="1">Alu Trellis</option>
                          <option value="2">Alu Fixture</option>
                          <option value="1">Galv Trellis</option>
                          <option value="2">Galv Fixture </option>
                          <option value="1">DuPlus Trellis</option>
                          <option value="2">DuPlus Fixture</option>
                          <option value="3">Econo Burglar Bars</option>
                          <option value="4">Robo Clear Bars</option>
                       </select>
                  </div>
                  <div class="custom-input-group">
                      <input type="text" class="form-control" id="width" name="width" placeholder="Enter Width Range" data-inputmask="'mask': ['9999-9999']" data-mask=""  autocomplete="off">
                  </div>
                  <div class="custom-input-group">
                      <input type="text" class="form-control" name="height" id="height" placeholder="Enter Height Range" data-inputmask="'mask': ['9999-9999']" data-mask=""  autocomplete="off">
                  </div>
                  <div class="custom-input-group">
                      <select class="form-control" id="fproduct_color">
                          <option selected>Color</option>
                          <option value="1"> Bronze</option>
                          <option value="2"> White</option>
                          <option value="3"> Charcoal</option>
                          <option value="4"> Special</option>
                        </select>
                  </div>

                  <div class="custom-input-group">
                      <button type="button" class="btn btn-default" id="daterange-btnstats">
                        <span>{{date('F d, Y')}} - {{date('F d, Y')}}</span>
                        <input type="hidden" name="dateFrom" id="dateFrom" value="{{date('Y-m-d')}}">
                        <input type="hidden" name="dateTo" id="dateTo" value="{{date('Y-m-d')}}">
                        <i class="fa fa-caret-down"></i>
                      </button>
                    </div>
                  <script>
                      
                      $(document).ready(function() { 
                        
                        //Date range as a button
                        $('#daterange-btnstats').daterangepicker(
                          {
                            ranges   : {
                              'Today'       : [moment(), moment()],
                              'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                              'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                              'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                              'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                            },
                            startDate: moment().subtract(29, 'days'),
                            endDate  : moment()
                          },
                          function (start, end) {
                            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                            $('#dateFrom').val(start.format('YYYY-MM-DD'));
                            $('#dateTo').val(end.format('YYYY-MM-DD'));
                            var maintabledate = $('#table_data').DataTable();
                            maintabledate.column('6').search(
                            $('#dateFrom').val()+','+$('#dateTo').val()
                            ).draw();
                          }
                        );
                      
                          
                        });
        
                  </script>
      
      
                
                <button type="button" class="btn btn-primary"><li class="fa fa-search"></li></button>
              </span>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Sr. No</th>
                    <th>Product Name</th>
                    <th>Qty Sold</th>
                    <th>Amount</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Deluxe Trellis</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Deluxe Fixture</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Econo Trellis</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Econo Fixture</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Alu Trellis</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Alu Fixture</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Galv Trellis</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Galv Fixture</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>DuPlus Trellis</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>DuPlus Fixture</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Econo Burglar Bars</td>
                    <td>5</td>
                    <td>R8,000</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Robo Clear Bars</td>
                    <td>4</td>
                    <td>R4,000</td>
                  </tr>

  
                 
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          </div>
  
    </div>
  
    </div> <!-- /.row end -->

<!-- InputMask -->
<script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script>
$(document).ready(function(){
    $('[data-mask]').inputmask();
});
</script>



@endsection


