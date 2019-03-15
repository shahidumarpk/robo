
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
              <h3 class="box-title">Robo Commissions Settings</h3>
              <div class="box-tools pull-right">
                    
                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
            

              <div class="col-md-8">
                <h3> General Setting</h3>
                <div class="" style="height:20px;"></div>
                <form class="form-horizontal ">
                  <div class="form-group">
                      <label for="" class="col-sm-5">Distributors Commission</label>
                      <div class="col-sm-5">
                      <div class="input-group">
                          <input type="text" value="15" class="form-control" aria-label="Amount (rounded to the nearest dollar)">  
                          <span class="input-group-addon">%</span>	  
                        </div>
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="" class="col-sm-5">Sales Representator Commission</label>
                    <div class="col-sm-5">
                        <div class="input-group">
                            <input type="text"  value="15" class="form-control" aria-label="Amount (rounded to the nearest dollar)">  
                            <span class="input-group-addon">%</span>	  
                          </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-5">Sales manager Commission</label>
                    <div class="col-sm-5">
                        <div class="input-group">
                            <input type="text"  value="10" class="form-control" aria-label="Amount (rounded to the nearest dollar)">  
                            <span class="input-group-addon">%</span>	  
                          </div>
                    </div>
                  </div>
                </form>
              </div>
              {{-- removed the mark up details on the suggestion of Sir Shahid --}}
            </div>
              <!-- /.box-body -->
              <div class="box-footer">
              
                
                <a href="{!! url('/settings'); !!}" class="btn btn-primary">Save</a>
                
              </div>
              <!-- /.box-footer -->
</div>

@endsection