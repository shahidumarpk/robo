
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
              <h3 class="box-title">Robo ERP Settings</h3>
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
                      <label for="" class="col-sm-3">Currency</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="" placeholder="" value="ZAR">
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3">Currency Symbol</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="" value="R">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3">Bank Details 1</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="" value="ABSA BANK,  BOKSBURG BRANCH, SWIFT CODE ABSAZAJJ,  BRANCH CODE: 632005, ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3">Bank Details 2</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="" value="Bank 2">
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="" class="col-sm-3">Contact Phone 1</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="" placeholder="" value="123123132">
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3">Contact Phone 2</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="" value="123123123">
                    </div>
                  </div>

                  <div class="form-group">
                      <label for="" class="col-sm-3">Address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="" placeholder="" value="Abc, 123, ABC">
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3">Contact Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="" value="contact@robodoor.com">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3">Cost of Assembly</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3">Scrap Rate</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="" value="">
                    </div>
                  </div>
                 
                </form>
              </div>

              {{-- removed on the suggestion of Sir Shahid --}}
            </div>

          
          
              <!-- /.box-body -->
              <div class="box-footer">
              
                
                <a href="{!! url('/settings'); !!}" class="btn btn-primary">Save</a>
                
              </div>
              <!-- /.box-footer -->
</div>

@endsection