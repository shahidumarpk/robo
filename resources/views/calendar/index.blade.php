@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
@if(session('failed'))
    <script>
      $( document ).ready(function() {
        swal("Failed", "{{session('failed')}}", "error");
      });
      
    </script>
@endif
<!-- Calendar Begins-->
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-body">
                <span class="pull-right">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#NewEvent" title="Create New Event/Schedule"><li class="fa fa-plus"></li> New Event/Schedule</button>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
        <div class="box-body no-padding">
            <!-- THE CALENDAR -->
            <div id="calendar"></div>
            </div>
        <!-- /.box-body -->
        </div>
    <!-- /. box -->
    </div>
</div>
<!-- Calendar Ends -->

<!-- modal add event -->
<div class="modal fade" id="NewEvent" tabindex="-1" role="dialog" aria-labelledby="NewEvent" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create New Event</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="box-body">
                        <div class="col-md-12"> 
                        <div class="form-group">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text' class="form-control" name="eventtime" autocomplete="off" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div> 
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                        </div>                                 
                        <div class="form-group">
                            <label for="orderno">Enter Order No</label>
                            <input type="text" name="orderno" class="form-control" id="orderno" placeholder="Enter Order No">
                        </div>
                        <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="10" name="description" class="form-control" id="description" placeholder="Enter Description"></textarea>
                        </div>
                        
                    </div>
                    </div>
                    <!-- /.box-body -->
                
                    
                    </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" onclick="showsuccess()">Created</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        
        
        </div>
    </div>
    </div>
    <!-- model ends -->
<script>
    function showsuccess(){
        swal("Success", "New Event/Schedule Created.", "success");
        $('.modal').modal('hide');
    }
    $(function () {
        $('#datetimepicker1').datetimepicker({
            sideBySide: true,
            minDate: new Date(<?php echo date('Y')?>, <?php echo date('m')?> - 1, <?php echo date('d')?>),
        });
    });
</script>
@endsection