
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
        <div class="box-header">
          <h4 class="box-title">Add Inventory</h4>
        </div>
        <div class="box-body">
            <form role="form">
                <div class="box-body">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Inventory Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name of Inventory">
                  </div>
                  <div class="form-group">
                    <label for="type_of_purchase">Type of Purchase</label>
                    <select onchange="changeTypeOfPurchase()" id="type_of_purchase" name="type_of_purchase" class="form-control">
                      <option value="" disabled>Select Option</option>
                      <option value="meter">Brought in meters</option>
                      <option value="pcs">Pcs in box</option>
                      <option value="single item">Single item</option>
                      <option value="kilogram">Calculated in kg</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="stock_length">Inventory Stock Length</label>
                    <input type="text" name="stock_length" class="form-control" id="stock_length" placeholder="Enter Stock Length of Inventory">
                  </div>
                  <div class="form-group">
                    <label for="laser_cutting">Inventory Laser Cutting</label>
                    <input onkeyup="calculateRatePerLength()" type="number" name="laser_cutting" class="form-control" id="laser_cutting" placeholder="Enter Laser Cutting Charges">
                  </div>
                  <div class="form-group">
                    <label for="material_cost">Inventory Material Costs</label>
                    <input onkeyup="calculateRatePerLength()" type="number" name="material_cost" class="form-control" id="material_cost" placeholder="Enter Material Cost of Inventory">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="powder_coating">Inventory Powder Coating</label>
                    <input onkeyup="calculateRatePerLength()" type="number" name="powder_coating" class="form-control" id="powder_coating" placeholder="Enter Powder Coating Charges">
                  </div>
                  <div class="form-group">
                    <label for="rate_per_length">Rate per Length</label>
                    <input onkeyup="calculateRatePerUnit()" type="text" name="rate_per_length" class="form-control" id="rate_per_length" placeholder="Enter Price per Length">
                  </div>
                  <div class="form-group">
                    <label for="rate_per">Rate per <span id="type_of_purchase_text"></span></label>
                    <input type="text" name="rate_per" class="form-control" id="rate_per" placeholder="Enter Rate per Unit">
                  </div>
                </div>
                </div>
                <!-- /.box-body -->
            
               
              </form>
        </div>
        <div class="box-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
            
        </div>
    </div>    
  </div>

  <script>
        function changeTypeOfPurchase(){
          var typeofpurchase = document.getElementById('type_of_purchase').value;
          document.getElementById('type_of_purchase_text').innerHTML = typeofpurchase;
        }
      
        function calculateRatePerLength(){
          var material_cost = document.getElementById('material_cost').value;
          var laser_cutting = document.getElementById('laser_cutting').value;
          var powder_coating = document.getElementById('powder_coating').value;
      
          var total = +material_cost + +laser_cutting + +powder_coating;
      
          document.getElementById('rate_per_length').value = total;
        }
        
        function calculateRatePerUnit(){
          var rate_per_length = document.getElementById('rate_per_length').value;
          var stock_length = document.getElementById('stock_length').value;
          var total = rate_per_length / stock_length ;
      
          document.getElementById('rate_per').value = total;
        }
      </script>
@endsection