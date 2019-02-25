
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
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
            <div class="row">
              <div class="col-md-4 text-center">
                  <div class="kv-avatar" style="margin: 10px 20px;">
                          <img src="{{ asset('img/logo.webp') }}" width="100%">
                  </div>
                  <br>
                  <center>
                  <span>Change Logo </span>
                  <br>
                  <br>
                  <input type="file">
                  </center>
              </div> 
              <div class="col-md-8">
              <table class="table table-striped">
                <tr>
                    <td><b>ERP Name</b></td>
                    <td><input type="text" value="Robo ERP"></td>
                </tr>
                <tr>
                    <td><b>ERP Title</b></td>
                    <td><input type="text" value="Robo Door ERP"></td>
                </tr>
                <tr>
                    <td><b>ERP Description</b></td>
                    <td><textarea rows="5" cols="40">Robo group of Company provide Security gates and doors services.</textarea></td>
                </tr>
                <tr>
                    <td><b>Currency</b></td>
                    <td><input type="text" value="USD"></td>
                </tr>
                <tr>
                    <td><b>Currency Symbol</b></td>
                    <td><input type="text" value="$"></td>
                </tr>

                <tr>
                    <td><b>Initial Tax</b></td>
                    <td><input type="text" value="4%"></td>
                </tr>
                <tr>
                    <td><b>Products Tax</b></td>
                    <td><input type="text" value="4%"></td>
                </tr>
                <tr>
                    <td><b>Service Tax</b></td>
                    <td><input type="text" value="5%"></td>
                </tr>
                <tr>
                    <td><b>Tax Markup</b></td>
                    <td><input type="text" value="2.5%"></td>
                </tr>
                <tr>
                    <td><b>Service Fee</b></td>
                    <td><input type="text" value="2.35%"></td>
                </tr>
                <tr>
                    <td><b>Initial Fee</b></td>
                    <td><input type="text" value="1.5%"></td>
                </tr>

                <tr>
                    <td><b>Contact Phone 1</b></td>
                    <td><input type="text" value="123123132"></td>
                </tr>
                <tr>
                    <td><b>Contact Phone 2</b></td>
                    <td><input type="text" value="123123123"></td>
                </tr>
                <tr>
                    <td><b>Contact Email</b></td>
                    <td><input type="text" value="contact@robodoor.com"></td>
                </tr>
              </table>
              </div>
            </div>

          </div>
          
              <!-- /.box-body -->
              <div class="box-footer pull-right">
              
                <a href="{!! url('/settings'); !!}" class="btn btn-default">Back</a>
                <a href="{!! url('/settings'); !!}" class="btn btn-primary">Save</a>
                
              </div>
              <!-- /.box-footer -->
</div>

@endsection