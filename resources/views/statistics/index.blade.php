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
        <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
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
        <h5 class="widget-user-desc">Sales Agents</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
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
        <h5 class="widget-user-desc">Sales Agents</h5>
      </div>
      <div class="widget-user-image">
        <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
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
                  <th>Qoutes</th>
                  <th>Leads</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Florin Ristea</td>
                  <td>Agent</td>
                  <td>R5,000</td>
                  <td>R500</td>
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
                  <td>90</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Florin Ristea</td>
                  <td>Agent</td>
                  <td>R3,100</td>
                  <td>R500</td>
                  <td>30</td>
                  <td>80</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Florin Ristea</td>
                  <td>Agent</td>
                  <td>R2,000</td>
                  <td>R500</td>
                  <td>28</td>
                  <td>70</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Florin Ristea</td>
                  <td>Agent</td>
                  <td>R2,100</td>
                  <td>R500</td>
                  <td>25</td>
                  <td>65</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Florin Ristea</td>
                  <td>Agent</td>
                  <td>R2,100</td>
                  <td>R500</td>
                  <td>25</td>
                  <td>65</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Florin Ristea</td>
                  <td>Agent</td>
                  <td>R2,100</td>
                  <td>R500</td>
                  <td>25</td>
                  <td>65</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Florin Ristea</td>
                  <td>Agent</td>
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
                    <th>Qoutes</th>
                    <th>Leads</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Florin Ristea</td>
                    <td>R5,000</td>
                    <td>R500</td>
                    <td>48</td>
                    <td>100</td>
  
                  </tr>
  
                  <tr>
                    <td>2</td>
                    <td>Dave Miller</td>
                    <td>R3,200</td>
                    <td>R380</td>
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
                      <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
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
                      <input type="text" class="form-control" name="width" id="width" placeholder="Enter Width">
                  </div>
                  <div class="custom-input-group">
                      <input type="text" class="form-control" name="height" id="height" placeholder="Enter Height">
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
                      <input type="month" class="form-control" name="srcmonth" id="srcmonth" value="{{date('Y-m')}}">
                  </div>
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
  

<!-- ChartJS -->
<script src="{{ asset('bower_components/chart.js/Chart.js') }}"></script>
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */


var areaChartData = {
  labels  : ['Florin', 'Dave', 'Michael', 'Steve', 'David', 'Khan', 'Malik'],
  datasets: [
    {
      label               : 'Sales',
      fillColor           : 'rgba(210, 214, 222, 1)',
      strokeColor         : 'rgba(210, 214, 222, 1)',
      pointColor          : 'rgba(210, 214, 222, 1)',
      pointStrokeColor    : '#c1c7d1',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(220,220,220,1)',
      data                : [48, 35 , 30, 32, 20, 19, 25]
    }
  ]
}

 var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale               : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : false,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - Whether the line is curved between points
      bezierCurve             : true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension      : 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot                : false,
      //Number - Radius of each point dot in pixels
      pointDotRadius          : 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth     : 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke           : true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth      : 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill             : true,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio     : true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive              : true
    }


    //Create the line chart
    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    var lineChart                = new Chart(lineChartCanvas)
    var lineChartOptions         = areaChartOptions
    lineChartOptions.datasetFill = false
    lineChart.Line(areaChartData, lineChartOptions)



    //-------------
    //- BAR CHART - 0
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[0].fillColor   = '#00a65a'
    barChartData.datasets[0].strokeColor = '#00a65a'
    barChartData.datasets[0].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)

    

  })
</script>
@endsection


