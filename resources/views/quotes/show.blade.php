@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
<section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
              <p class="pull-left"> <i class="fa fa-globe"></i> Quotes No.: 123</p>
              <div class="col-md-2"></div>
            <img src="{{asset('img/logo_grey.png')}}" class="center"  style="margin:auto; width:200px; text-align:center; align-content:center" />
        
         <small class="pull-right">Expiry Date: 21-Feb-2019</small>
       
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        To Customer
        <address>
            <strong>James Bond</strong><br>
            P O Box 926<br>
            Lae, Morobe Province<br>
            Phone: 7100 0007<br>
            Email: james@bond.com
          </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
          
        Sales Representative
        
        <address>
            <strong>Robo Door, RBD</strong><br>
            P O Box 926<br>
            CA, USA<br>
            Phone: +0123 4567<br>
            Email: jamesbond@abc.com
          </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
         <span>  Date: 18-Feb-2019 </span><br>
        <b>Order No.: RBD001</b><br>
        <br>
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Size</th>
            <th>Qty</th>
            <th>Unit Price</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>DELUXE TRELLIS</td>
            <td>300 x 200</td>
            <td>1</td>
            <td>R 45.00</td>
            <td>R 45.00</td>
          </tr>
          <tr>
            <td>2</td>
            <td>DELUXE FIXTURE</td>
            <td>150 x 200</td>
            <td>1</td>
            <td>R 87.90</td>
            <td>R 87.90</td>
          </tr>
          <tr>
            <td>3</td>
            <td>ECONO TRELLIS</td>
            <td>900 x 200</td>
            <td>2</td>
            <td>R 20.00</td>
            <td>R 40.00</td>
          </tr>
          <tr>
            <td>4</td>
            <td>ECONO FIXTURE</td>
            <td>900 x 200</td>  
            <td>1</td>
            <td>R 60.00</td>
            <td>R 60.00</td>
          </tr>
          <tr>
              <th colspan="7" ></th></th>
            </tr>
          <tr>
              <th colspan="6" style="">Additional Work</th>
            </tr>
            <tr>
                <td>1</td>
                <td colspan="4">Change Door Lock</td>
                <td>R 45.00</td>
            </tr>
            <tr>
                <td>2</td>
                <td colspan="4">Door is very old, repair</td>
                <td>R 45.00</td>
            </tr>
            <tr>
                <td>3</td>
                <td colspan="4">Blue paint for new door</td>
                <td>R 45.00</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
          <div class="invoice-col">
            <br/>
            <br/>
            <br/>
            <br/>
              Bank Details  
              <address>
                  <label>ABSA BANK, </label>
                  BOKSBURG BRANCH,<br/> SWIFT CODE ABSAZAJJ, <br/>BRANCH CODE: 632005, <br/>
                  <label>ACCOUNT NUMBER: 4066184721 </label>
                </address>
            </div>
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <th style="width:64%">Subtotal:</th>
                <td>R 232.90</td>
            </tr>
            <tr>
                <th></th>
                <td><b>R 252.70</b></td>
                </tr>
            <tr>
                <th>GST (10%)</th>
                <td>R 25.27</td>
                </tr>
            <tr>
              <th><b>Total:</b></th>
              <td><b>R 277.97</b></td>
            </tr>
          </tbody></table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-xs-12">
        <span class="pull-right">
        
        <button type="button" class="btn btn-warning" style="">
          <i class="fa fa-download"></i> PDF
        </button>
        <a href="{{url('/quotes/1')}}" class="btn btn-primary"><i class="fa fa-envelope"></i> Email</a>
          <a href="{{url('/quotes/1')}}" class="btn btn-info"><i class="fa fa-print"></i> Print</a>
          
        </span>
      </div>
    </div>
  </section>

@endsection