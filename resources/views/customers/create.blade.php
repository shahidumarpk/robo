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
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}
</style>
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Customers</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
            <form class="form-horizontal" action="{!! url('/customers'); !!}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body" >
            <div class="row">
              <div class="col-md-4 text-center">
                  <div class="kv-avatar">
                      <div class="file-loading">
                          
                          <input id="avatar-1" name="avatar-1" type="file">
                      </div>
                  </div>
                  <div class="kv-avatar-hint"><small>Select file < 1000 KB</small></div>
              </div> 
              <div class="col-md-8">
                <div class="form-group">
                  <label for="fname" class="col-sm-3 control-label">First Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" autocomplete="off" value="{{ old('fname') }}" require >
                    @if ($errors->has('fname'))
                          <span class="text-red">
                              <strong>{{ $errors->first('fname') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="lname" class="col-sm-3 control-label">Last Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="{{ old('lname') }}" autocomplete="off" require>
                    @if ($errors->has('lname'))
                          <span class="text-red">
                              <strong>{{ $errors->first('lname') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="off" require>
                    @if ($errors->has('email'))
                          <span class="text-red">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>

               

                <div class="form-group">
                  <label for="company" class="col-sm-3 control-label">Company Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Phone Number" value="{{ old('company') }}" autocomplete="off" require>
                    @if ($errors->has('company'))
                          <span class="text-red">
                              <strong>{{ $errors->first('company') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="company" class="col-sm-3 control-label">City</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="city " name="city " placeholder="Enter City" value="{{ old('company') }}" autocomplete="off" require>
                    @if ($errors->has('company'))
                          <span class="text-red">
                              <strong>{{ $errors->first('company') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="company" class="col-sm-3 control-label">Country</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" value="{{ old('company') }}" autocomplete="off" require>
                    @if ($errors->has('company'))
                          <span class="text-red">
                              <strong>{{ $errors->first('company') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="phonenumber" class="col-sm-3 control-label">Phone Number</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number" value="{{ old('phonenumber') }}" autocomplete="off" require>
                    @if ($errors->has('phonenumber'))
                          <span class="text-red">
                              <strong>{{ $errors->first('phonenumber') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="address" class="col-sm-3 control-label">Address 1</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address 1" value="{{ old('address') }}" autocomplete="off" require>
                    @if ($errors->has('address'))
                          <span class="text-red">
                              <strong>{{ $errors->first('address') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="address2" class="col-sm-3 control-label">Address 2</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="address2" name="address2" placeholder="Address 2" value="{{ old('address2') }}" autocomplete="off" require>
                    @if ($errors->has('address2'))
                          <span class="text-red">
                              <strong>{{ $errors->first('address2') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                

              </div>
              </div>
              
          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/customers'); !!}" class="btn btn-default">Cancel</a>
                <a href="{!! url('/customers'); !!}" class="btn btn-info pull-right">Add</a>
              </div>
              <!-- /.box-footer -->
            </form>
</div>
@endsection