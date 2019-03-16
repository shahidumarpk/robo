
@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
<!-- some CSS styling changes and overrides -->
<style>
        .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
            margin: 0;
            padding: 0;
            border: none;
            box-shadow: none;
            text-align: center;
        }
        .kv-avatar {
            display: inline-block;
        }
        .kv-avatar .file-input {
            display: table-cell;
            width: 250px;
        }
        .kv-reqd {
            color: red;
            font-family: monospace;
            font-weight: normal;
        }
        </style>

    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Sales Representative</h3>
              <div class="box-tools pull-right">
                    
                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
            

              <div class="col-md-12">
                <h4></h4>
                <div class="" style="height:20px;"></div>

                <div class="col-md-12">
                        
                        
                  {{-- tier 1 --}}
                  <div class="form-group row controlremove" style="margin-top:20px">
                    <div class="col-md-2">
                        <h4>Tier 1</h4>
                    </div>
                    <div class="col-md-3">
                      <input type="number" name="addmore[]" class="form-control" placeholder="From Amount" value="0">
                    </div>
                    <div class="col-md-3">
                      <input type="number" name="addmore[]" class="form-control" placeholder="To Amount" value="100000"> 
                    </div>
                    <div class="col-md-3">
                      <div class="input-group">
                        <input type="text" value="7" class="form-control" placeholder="Commission Percentage" aria-label="Amount (rounded to the nearest dollar)">  
                        <span class="input-group-addon">%</span>	  
                      </div>
                    </div>
                    <div class="col-md-1">
                      <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                    </div>
                  </div>
                  {{-- tier 2 --}}
                  <div class="form-group row controlremove" style="margin-top:20px">
                    <div class="col-md-2">
                        <h4>Tier 2</h4>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="addmore[]" class="form-control" placeholder="From Amount" value="100001">
                    </div>
                    <div class="col-md-3">
                      <input type="number" name="addmore[]" class="form-control" placeholder="To Amount" value="200000"> 
                    </div>
                    <div class="col-md-3">
                      <div class="input-group">
                        <input type="text" value="10" class="form-control" placeholder="Commission Percentage" aria-label="Amount (rounded to the nearest dollar)">  
                        <span class="input-group-addon">%</span>	  
                      </div>
                    </div>
                    <div class="col-md-1">
                      <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                    </div>
                  </div>
                  {{-- tier 3 --}}
                  <div class="form-group row controlremove" style="margin-top:20px">
                    <div class="col-md-2">
                        <h4>Tier 3</h4>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="addmore[]" class="form-control" placeholder="From Amount" value="200001 +">
                    </div>
                    <div class="col-md-3">
                      <input type="number" name="addmore[]" class="form-control" placeholder="To Amount" value=""> 
                    </div>
                    <div class="col-md-3">
                      <div class="input-group">
                        <input type="text" value="13" class="form-control" placeholder="Commission Percentage" aria-label="Amount (rounded to the nearest dollar)">  
                        <span class="input-group-addon">%</span>	  
                      </div>
                    </div>
                    <div class="col-md-1">
                      <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                    </div>
                  </div>
                  <div class=" row control-group after-add-more" id="after_additional_work_">
                        <div class="col-md-7">
                            
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
                      <div class="col-md-2">
                          <h4>Tier </h4>
                      </div>
                      <div class="col-md-3">
                        <input type="text" name="addmore[]" class="form-control" placeholder="From Amount">
                      </div>
                      <div class="col-md-3">
                        <input type="number" name="addmore[]" class="form-control" placeholder="To Amount"> 
                      </div>
                      <div class="col-md-3">
                        <div class="input-group">
                          <input type="text" value="" class="form-control" placeholder="Commission Percentage" aria-label="Amount (rounded to the nearest dollar)">  
                          <span class="input-group-addon">%</span>	  
                        </div>
                      </div>
                      <div class="col-md-1">
                        <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                      </div>
                    </div>
                  </div>
                  

                  
              </div>
              {{-- removed the mark up details on the suggestion of Sir Shahid --}}
           

            
              <!-- /.box-body -->
              <div class="box-footer">
              
                
                <a href="{!! url('/settings'); !!}" class="btn btn-primary pull-right">Save</a>
                
              </div>
              <!-- /.box-footer -->

    </div>

{{-- <div class="" style="height:10px;"></div> --}}
              {{-- sales manager ##### --}}
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Sales Manager</h3>
      <div class="box-tools pull-right">
            
          </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body" >

          <div class="col-md-12">
              <div class="copySM hide ">
                  <div class="form-group row controlremove" style="margin-top:20px">
                    <div class="col-md-2">
                        <h4>Tier </h4>
                    </div>
                    <div class="col-md-3">
                      <input type="text" name="addmore[]" class="form-control" placeholder="From Amount">
                    </div>
                    <div class="col-md-3">
                      <input type="number" name="addmore[]" class="form-control" placeholder="To Amount"> 
                    </div>
                    <div class="col-md-3">
                      <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Commission Percentage" aria-label="Amount (rounded to the nearest dollar)">  
                        <span class="input-group-addon">%</span>	  
                      </div>
                    </div>
                    <div class="col-md-1">
                      <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                    </div>
                  </div>
                </div>
            <h4> </h4>
            <div class="" style="height:20px;"></div>

            <div class="col-md-12">
                    
                    
              {{-- tier 1 --}}
              <div class="form-group row controlremove" style="margin-top:20px">
                <div class="col-md-2">
                    <h4>Tier 1</h4>
                </div>
                <div class="col-md-3">
                  <input type="number" name="addmore[]" class="form-control" placeholder="From Amount" value="0">
                </div>
                <div class="col-md-3">
                  <input type="number" name="addmore[]" class="form-control" placeholder="To Amount" value="100000"> 
                </div>
                <div class="col-md-3">
                  <div class="input-group">
                    <input type="text" value="7" class="form-control" placeholder="Commission Percentage" aria-label="Amount (rounded to the nearest dollar)">  
                    <span class="input-group-addon">%</span>	  
                  </div>
                </div>
                <div class="col-md-1">
                  <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                </div>
              </div>
              {{-- tier 2 --}}
              <div class="form-group row controlremove" style="margin-top:20px">
                <div class="col-md-2">
                    <h4>Tier 2</h4>
                </div>
                <div class="col-md-3">
                  <input type="text" name="addmore[]" class="form-control" placeholder="From Amount" value="100001">
                </div>
                <div class="col-md-3">
                  <input type="number" name="addmore[]" class="form-control" placeholder="To Amount" value="200000"> 
                </div>
                <div class="col-md-3">
                  <div class="input-group">
                    <input type="text" value="10" class="form-control" placeholder="Commission Percentage" aria-label="Amount (rounded to the nearest dollar)">  
                    <span class="input-group-addon">%</span>	  
                  </div>
                </div>
                <div class="col-md-1">
                  <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                </div>
              </div>
              {{-- tier 3 --}}
              <div class="form-group row controlremove" style="margin-top:20px">
                <div class="col-md-2">
                    <h4>Tier 3</h4>
                </div>
                <div class="col-md-3">
                  <input type="text" name="addmore[]" class="form-control" placeholder="From Amount" value="200001 +">
                </div>
                <div class="col-md-3">
                  <input type="number" name="addmore[]" class="form-control" placeholder="To Amount" value=""> 
                </div>
                <div class="col-md-3">
                  <div class="input-group">
                    <input type="text" value="13" class="form-control" placeholder="Commission Percentage" aria-label="Amount (rounded to the nearest dollar)">  
                    <span class="input-group-addon">%</span>	  
                  </div>
                </div>
                <div class="col-md-1">
                  <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                </div>
              </div>
              <div class=" row control-group after-add-moreSM" id="after_additional_work_">
                    <div class="col-md-7">
                        
                        {{-- <input type="text" name="addmore[]" class="form-control" placeholder="Enter Additional Work Here"> --}}
                      </div>
                      <div class="col-md-4">
                        {{-- <input type="number" name="addmore[]" class="form-control" placeholder="Price">  --}}
                      </div>
                      <div class="col-md-1">
                        <div class="input-group-btn"> 
                          <button class="btn btn-success add-moreSM" type="button"><i class="fa fa-plus"></i></button>
                        </div>
                      </div>
                </div>
            </div>
          </div>

        </div>
        {{-- removed the mark up details on the suggestion of Sir Shahid --}}
      
      
        <!-- /.box-body -->
        <div class="box-footer">
        
          
          <a href="{!! url('/settings'); !!}" class="btn btn-primary pull-right">Save</a>
          
        </div>
        <!-- /.box-footer -->
</div>

<script>
$(document).ready(function() {
        
        $(".add-more").click(function(){ 
            var html = $(".copy").html();
            $(".after-add-more").before(html);
        });

        $(".add-moreSM").click(function(){ 
          var html = $(".copySM").html();
          $(".after-add-moreSM").before(html);
        });
  
        $("body").on("click",".remove",function(){ 
            $(this).parents(".controlremove").remove();
        });
      });
      </script>
@endsection