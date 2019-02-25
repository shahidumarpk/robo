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
          <i class="fa fa-globe"></i> Order No.: 123
          <small class="pull-right">Date: 21-Feb-2019</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
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
        To
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
        <b>Order No.: RBD001</b><br>
        <br>
        <b>Status: <span class="text-green">New</span></b><br>
        <b>Total Amount:</b> $277.97<br>
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
            <th>Qty</th>
            <th>Unit Price</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>Security Gate Lock</td>
            <td>1</td>
            <td>$45.00</td>
            <td>$45.00</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Security Gate Chain</td>
            <td>1</td>
            <td>$87.90</td>
            <td>$87.90</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Security Gate Handle</td>
            <td>2</td>
            <td>$20.00</td>
            <td>$40.00</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Security Gate Key Cover</td>
            <td>1</td>
            <td>$60.00</td>
            <td>$60.00</td>
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
        
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <div class="table-responsive">
          <table class="table">
            <tbody><tr>
              <th style="width:50%">Subtotal:</th>
              <td>$232.90</td>
            </tr>
            <tr>
              <th>Delivery(1-7 business days):</th>
              <td>$19.80</td>
            </tr>
            <tr>
                <th></th>
                <td><b>$252.70</b></td>
                </tr>
            <tr>
                <th>GST (10%)</th>
                <td>$25.27</td>
                </tr>
            <tr>
              <th><b>Total:</b></th>
              <td><b>$277.97</b></td>
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
        <button type="button" class="btn btn-primary" style="margin-right: 5px;">
          <i class="fa fa-plane"></i> Track
        </button>
        <a href="{!! url('/orders/createticket'); !!}" class="btn btn-info"><i class="fa fa-support"></i> Create Complaint</a>
        </span>
      </div>
    </div>
  </section>

@endsection