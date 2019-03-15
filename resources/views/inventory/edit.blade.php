
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
              <h3 class="box-title"> Product Details</h3>
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
                    <td><b>Inventory Name</b></td>
                    <td><input type="text" class="form-control" value="12MM STEEL UPRIGHT BRONZE LC "></td>
                </tr>
                <tr>
                    <td><b>Total Stock</b></td>
                    <td><input type="text" class="form-control"  value="3.5" readonly></td>
                </tr>
                <tr>
                    <td><b>Stock Value</b></td>
                    <td><input type="text" class="form-control"  value="3.5" readonly></td>
                </tr>
                <tr>
                    <td><b>Material Cost</b></td>
                    <td><input type="text" class="form-control"  value="10.05 "></td>
                </tr>
                <tr>
                    <td><b>Laser Cutting</b></td>
                    <td><input type="text" class="form-control"  value="4"></td>
                </tr>
                <tr>
                    <td><b>Powder Coating</b></td>
                    <td><input type="text" class="form-control"  value="20"></td>
                </tr>
                <tr>
                    <td><b>Rate / Length</b></td>
                    <td><input type="text" class="form-control"  value="40.2"></td>
                </tr>
                <tr>
                    <td><b>Rate per meter / pcs</b></td>
                    <td><input type="text" class="form-control"  value="40.2"></td>
                </tr>

                <tr>
                    <td><b>Used in Products </b></td>
                    <td>
                        <div class="">
                            
                            <select name="status" multiple class="form-control" id="productname">
                                <option value="0" disabled>Select Quote </option>
                                <option value="1" selected>Galv Fixture </option>
                                <option value="2" selected>Galv Trellis </option>
                                <option value="3">Deluxe Fixture</option>
                            </select>
                        </div>
                    </td>
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
              <a href="{!! url('/inventory'); !!}" class="btn btn-primary">Save</a>
                <a href="{!! url('/inventory'); !!}" class="btn btn-default">Back</a>
                
              </div>
              <!-- /.box-footer -->
</div>
<script>
        //select 2 code for the popup styling
          $(window).on('load',function() {
              $('#productname').select2();
              $('.select2-container').attr('style', 'width:100%');
              
          });
</script>
@endsection