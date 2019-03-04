
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
          <h4 class="box-title">Add Order</h4>
        </div>
        <div class="box-body">
            <form role="form">
                <div class="box-body">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="product_name">Select Product</label>
                          <select id="product_name" name="product_name" class="form-control">
                            <option value="" disabled>Select Option</option>
                            <option value="product_id_1" data-price="200">DELUXE TRELLIS</option>
                            <option value="pproduct_id_2" data-price="200">DELUXE FIXTURE</option>
                            <option value="product_id_3 item" data-price="200">ECONO TRELLIS</option>
                            <option value="product_id_4" data-price="200">ECONO FIXTURE</option>
                            <option value="product_id_5" data-price="200">DUPLUS TRELLIS</option>
                          </select>
                        </div>
                  
                  <div class="form-group">
                    <label for="length">Product Length</label>
                    <input type="number" name="length" class="form-control" id="length" placeholder="Enter Product Length">
                  </div>
                  <div class="form-group">
                    <label for="height">Product Height</label>
                    <input  type="number" name="height" class="form-control" id="height" placeholder="Enter Product Height">
                  </div>
                  <div class="form-group">
                    <label for="quantity">Product Quantity</label>
                    <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter Product Quantity">
                  </div>
                  <div class="form-group">
                      <label for="price">Product Price</label>
                      <input type="number" name="price" class="form-control" id="price" placeholder="Enter Price">
                    </div>
                </div>
                <div class="col-md-6">
                    
                   
                  <div class="form-group">
                    
                    <label for="rate_per_length">Additional Work Required</label>
                    <input type="button" id="add" value="Add More"/>
                    <input  type="text" name="additional_work" class="form-control" id="additional_work" placeholder="Enter Additional Work">
                    <div id="demo">
                      </div>
                  </div>
                  
                </div>
                </div>
                <!-- /.box-body -->
            
               
              </form>
        </div>
        <div class="box-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {{-- <button type="submit" class="btn btn-primary pull-right">Review</button> --}}
            <a href="/orders/1" class="btn btn-primary pull-right">Review</a>
            
        </div>
    </div>    
  </div>

  <script>

        var num = 1;
        document.getElementById('add').addEventListener("click",addInput);
        function addInput(){
        var newInput = '<br/><br/><input class="form-control" placeholder="Enter Additional Work" type="text" name="input'+num+'"/> <input type="text" placeholder="Enter Price" name="additional_price' + num +'"/> ';
          document.getElementById('demo').innerHTML += newInput;  
          num++;
        }
      
        
      </script>
@endsection 