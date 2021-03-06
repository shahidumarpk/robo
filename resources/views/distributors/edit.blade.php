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
              <h3 class="box-title">Edit Distributor {{$user->fname}} {{$user->lname}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div id="kv-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
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
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" autocomplete="off" value="{{ $user->fname }}" require >
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
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="{{ $user->lname }}" autocomplete="off" require>
                    @if ($errors->has('lname'))
                          <span class="text-red">
                              <strong>{{ $errors->first('lname') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="company" class="col-sm-3 control-label">Company Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company Name" value="Robo Door" autocomplete="off" require>
                    @if ($errors->has('company'))
                          <span class="text-red">
                              <strong>{{ $errors->first('company') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="vatnumber" class="col-sm-3 control-label">VAT Number</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="vatnumber" name="vatnumber" placeholder="VAT Number" value="RB123123" autocomplete="off" require>
                    @if ($errors->has('vatnumber'))
                          <span class="text-red">
                              <strong>{{ $errors->first('vatnumber') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Email</label>

                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}" autocomplete="off" require>
                    @if ($errors->has('email'))
                          <span class="text-red">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>


                <div class="form-group">
                  <label for="phonenumber" class="col-sm-3 control-label">Phone Number</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number" value="{{ $user->phonenumber }}" autocomplete="off" require>
                    @if ($errors->has('phonenumber'))
                          <span class="text-red">
                              <strong>{{ $errors->first('phonenumber') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="mobilenumber" class="col-sm-3 control-label">Mobile Number</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" value="+1 123 123 9870 " autocomplete="off" require>
                    @if ($errors->has('mobilenumber'))
                          <span class="text-red">
                              <strong>{{ $errors->first('mobilenumber') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="address" class="col-sm-3 control-label">Address</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="21 West, Barg Town, CA" autocomplete="off" require>
                    @if ($errors->has('address'))
                          <span class="text-red">
                              <strong>{{ $errors->first('address') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="phonenumber" class="col-sm-3 control-label">City</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number" value="Cape Town" autocomplete="off" require>
                    @if ($errors->has('phonenumber'))
                          <span class="text-red">
                              <strong>{{ $errors->first('phonenumber') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="phonenumber" class="col-sm-3 control-label">Country</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number" value="South Africa" autocomplete="off" require>
                    @if ($errors->has('phonenumber'))
                          <span class="text-red">
                              <strong>{{ $errors->first('phonenumber') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                
                
               
                <div class="form-group">
                  <label for="status" class="col-sm-3 control-label">Status</label>

                  <div class="col-sm-9">
                    
                    <select name="status" class="form-control">
                        <option value="1" <?php echo ($user->status==1) ? "selected" : ""; ?>>Active</option>
                        <option value="2" <?php echo ($user->status==2) ? "selected" : ""; ?>>Deactivate</option>
                    </select>
                  </div>
                </div>


              </div>
              </div>

          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{!! url('/distributors'); !!}" class="btn btn-default">Cancel</a>
                <button type="submit" disabled class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
</div>
@endsection