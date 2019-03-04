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
              <h3 class="box-title">Security Gate Product Details</h3>
              <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
            <div class="row">
              
              <div class="col-md-8">
              <table class="table table-striped">
                <tr>
                    <td><b>Product Name</b></td>
                    <td>Security gate</td>
                </tr>
                <tr>
                        <td><b>Circumference</b></td>
                    <td>6.3</td>
                </tr>
                <tr>
                    <td><b>Length</b></td>
                    <td>7.25</td>
                </tr>
                <tr>
                    <td><b>Total Surface</b></td>
                    <td>4.5</td>
                </tr>
                <tr>
                    <td><b>Unit Cost</b></td>
                    <td>35.60</td>
                </tr>
                <tr>
                    <td><b>Rate per meter</b></td>
                    <td>75.82</td>
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

@endsection