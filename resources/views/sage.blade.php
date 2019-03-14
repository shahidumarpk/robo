
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
              <h3 class="box-title">Sage API Settings</h3>
              <div class="box-tools pull-right">
                    
                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
            

              <div class="col-md-8">
                <h3> API Setting</h3>
                <div class="" style="height:20px;"></div>
                <form class="form-horizontal ">
                  <div class="form-group">
                      <label for="" class="col-sm-3">Username</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="" placeholder="" value="roboadmin">
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3">Email Address</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="" value="api@robodoor.co.za">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-3">API Key</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="" value="qwbnj2fg548d78f21n1j65g8r8r2sd1g1n5f45r8s2za2z1c2v3g9d8">
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