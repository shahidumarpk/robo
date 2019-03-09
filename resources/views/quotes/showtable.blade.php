@extends('layouts.export')
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
          <i class="fa fa-globe"></i> Quotes No.: 123
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
          <img src="{{asset('img/logo.webp')}}" class="responsive"  style="display: block; width:200px;" />
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
        <b>Status: <span class="text-green">New</span></b><br>
        <b>Total Amount:</b> $277.97<br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <style>
        #quotefilledtable td{
            padding: 2px;
            text-align: center;
            font-size: 11px;
        }
        .td_vertical{
            writing-mode: tb-rl !important;
        transform: rotate(-90deg) !important;
        }
       
        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    border-top: 1px solid #000000;}
    </style>


    <div class="" style="height:100px;"></div>
    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table" border="2" id="quotefilledtable">
          <tr>
          <td rowspan="6" colspan="4" ><img src="{{asset('img/logo.webp')}}" width="100px;"></td>
          <td rowspan="5" colspan="4"><h1>OUTSOURCE</h1></td>        
          <td rowspan="5" colspan="8">Head Office
              Tel: 011 824 0517   Fax 011 824 0518
              National Network Number 086 0104 957
              www. robodoor.co.za   info@robodoor.co.za
              PO Box 15412, Lambton 1414       </td>  
              <td colspan="8">QUOTE NUMBER</td>
              <td colspan="6"></td>

          </tr>
          <tr>
            <td colspan="10">OFFICIAL QUOTATION DATE</td>
            <td colspan="5"></td>
          </tr>
          <tr>
            
            <td colspan="10">SALES PERSON</td>
            <td colspan="5"></td>
          </tr>
          <tr>
            
            <td colspan="10">SALES PERSON CELL NO </td>
            <td colspan="5">'+27-73-869-3092</td>
          </tr>
          <tr>
            
            <td colspan="10">SALES PERSON EMAIL </td>
            <td colspan="5">FLORIN@ROBODOOR.CO.ZA</td>
          </tr>
          <tr>
              <td colspan="12">DELUXE : The Strongest Single 19MM Upright Steel Trellis Door</td>
            <td colspan="10">OFFICIAL QUOTATION DATE </td>
            <td colspan="5">02/02/2019</td>
          </tr>
          <tr>
              <td colspan="5">CLIENT NAME</td>
              <td colspan="5"> </td>
              <td colspan="2">TEL </td>
              <td colspan="3"> </td>
              <td colspan="2">CELL</td>
              <td colspan="4"> </td>
              <td colspan="4">EMAIL</td>
              <td colspan="5"> </td>
          </tr>
          <tr>
              <td colspan="5"> COMPANY VAT NUMBER:</td>
              <td colspan="3"> </td>
              <td colspan="2">ADDRESS</td>
              <td colspan="14"></td>
              <td colspan="2">INVOICE NUMBER</td>
              <td colspan="4"></td>
          </tr>
          <tr>
            <td colspan="2">NOTES</td>  
            <td colspan="28"></td>
          </tr>
         <tr >
            <td colspan="2"  rowspan="3" style="vertical-align: middle;">POSITION OF THE BARRIER</td>
            <td colspan="5" rowspan="2" style="vertical-align: middle;" >19MM Product Selection</td>
            <td colspan="2" rowspan="2" style="vertical-align: middle;">Size</td>
            <td colspan="" rowspan="3" style="vertical-align: middle;" class="td_vertical">Rows of Flight</td>
            <td colspan="6" rowspan="1" style="vertical-align: middle;">Lock Detail</td>
            <td colspan="3" rowspan="2" style="vertical-align: middle;">Type of Fitment</td>
            <td colspan="9" >Face On Material</td>
            <td >EXTERIOR FINISH</td>
            <td rowspan="3" style="vertical-align: middle;" >FACTORY PRICE VAT-EXCLUDED </td>
          </tr> 
          <tr>
              <td colspan="4"></td>
              <td colspan="2">Lock Type</td>
              <td colspan="4">Beam Sections Required</td>
              <td colspan="5">BEAMS REQUIRED</td>
              <td rowspan="2" style="vertical-align: middle">STANDARD COLOUR</td>
          </tr>
         <tr style="">
           
            <td class="">TRELLIS <br/> FIXTURE</td>
            <td class="">TRELLIS<br/> DOOR</td>
            <td class="">DOGGY <br/>BARS</td>
            <td class="">MONKEY <br/>BARS</td>
            <td class="">SWING <br/>GATE</td>
            <td class="">Width mm</td>
            <td class="">Height mm </td>
            <td class="">Lock Side   </td>
            <td class="">Lockbar Size </td>
            <td class="">Number Locks </td>
            <td class="">Key Alike</td>
            <td class="">Slam </td>
            <td class="">Dead </td>
            <td class="">Inside/ <br/>Outside </td>
            <td class="">Outside <br/>Building </td>
            <td class="">Face-On </td>
            <td class="">25 x 50 </td>
            <td class="">50 X 50 </td>
            <td class="">76 X 38 </td>
            <td class="">25 X 75 </td>
            <td class="">TOP BEAM </td>
            <td class="">BOTTOM BEAM </td>
            <td class="">BACK CHANELL </td>
            <td class="">LOCK BAR</td>
            <td class="">TOTAL METERS</td>
          </tr> 
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>DELUXE TRELLIS</td>
            <td>300 x 200</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1000</td>
            <td>1000</td>
            <td>3</td>
            <td></td>
            <td></td>
            <td>1</td>
            <td></td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>5</td>
            <td>5</td>
            <td>10</td>
            <td>Bronze, Sand, White or Charcoal</td>
            <td>R - 36,805</td>
          </tr>
          <tr>
            <td>1</td>
            <td>DELUXE TRELLIS</td>
            <td>300 x 200</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1000</td>
            <td>1000</td>
            <td>3</td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
            <td>2</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
            <td>5</td>
            <td>Bronze, Sand, White or Charcoal</td>
            <td>R - 15,960</td>
          </tr>
          <tr>
            <td>1</td>
            <td>DELUXE TRELLIS</td>
            <td>300 x 200</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1000</td>
            <td>1000</td>
            <td>3</td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
            <td>2</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
            <td>5</td>
            <td>Bronze, Sand, White or Charcoal</td>
            <td>R - 15,960</td>
          </tr>
          <tr>
            <td>1</td>
            <td>DELUXE TRELLIS</td>
            <td>300 x 200</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1000</td>
            <td>1000</td>
            <td>3</td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
            <td>2</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
            <td>5</td>
            <td>Bronze, Sand, White or Charcoal</td>
            <td>R - 15,960</td>
          </tr>
          <tr>
            <td>1</td>
            <td>DELUXE TRELLIS</td>
            <td>300 x 200</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1000</td>
            <td>1000</td>
            <td>3</td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
            <td>2</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
            <td>5</td>
            <td>Bronze, Sand, White or Charcoal</td>
            <td>R - 15,960</td>
          </tr>
          <tr>
            <td>1</td>
            <td>DELUXE TRELLIS</td>
            <td>300 x 200</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1000</td>
            <td>1000</td>
            <td>3</td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
            <td>2</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
            <td>5</td>
            <td>Bronze, Sand, White or Charcoal</td>
            <td>R - 15,960</td>
          </tr>
          <tr>
            <td>1</td>
            <td>DELUXE TRELLIS</td>
            <td>300 x 200</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1000</td>
            <td>1000</td>
            <td>3</td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
            <td>2</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
            <td>5</td>
            <td>Bronze, Sand, White or Charcoal</td>
            <td>R - 15,960</td>
          </tr>
          <tr>
            <td>1</td>
            <td>DELUXE TRELLIS</td>
            <td>300 x 200</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1000</td>
            <td>1000</td>
            <td>3</td>
            <td></td>
            <td></td>
            <td>1</td>
            <td></td>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>5</td>
            <td>5</td>
            <td>10</td>
            <td>Bronze, Sand, White or Charcoal</td>
            <td>R - 36,805</td>
          </tr>
        {{-- additional work  --}}
        <tr>
            <td colspan="7" rowspan="3"  style="vertical-align: middle">Additional Work</td>
            <td colspan="2">Center Lock Provision</td>
            <td colspan="2">R 285.00</td>
            <td colspan="2">R 0.00</td>
            <td colspan="2">R 0.00</td>
            <td colspan="9" style="vertical-align: middle">Angle Brackets for Beams (R15)</td>
            <td colspan="">0</td>
            <td colspan="2">R 100</td>
            <td colspan="2" rowspan="3" style="vertical-align: middle">ADDITIONAL WORK SUB TOTAL</td>
            <td colspan="2" rowspan="3" style="vertical-align: middle">R 5000.56</td>
        </tr>
        <tr>
                <td colspan="2" rowspan="">Keyed Alike</td>
                <td colspan="2">R 285.00</td>
                <td colspan="2">R 0.00</td>
                <td colspan="2">R 0.00</td>
                <td colspan="9">Corner Cover Plate for Face-on Beams  (R25)</td>
                <td colspan="">0</td>
                <td colspan="2">R 100</td>
        </tr>
        <tr>
                <td colspan="2" rowspan="">Keyed Alike</td>
                <td colspan="2">R 285.00</td>
                <td colspan="2">R 0.00</td>
                <td colspan="2">R 0.00</td>
                <td colspan="9">Corner Cover Plate for Face-on Beams  (R25)</td>
                <td colspan="">0</td>
                <td colspan="2">R 100</td>
        </tr>
        <tr>
          <td colspan="8" rowspan="4"  style="vertical-align: middle">This offer is valid for 7 days from Date of Quotation </td>
          <td colspan="7" rowspan="4"  style="vertical-align: middle">Break-in Product Guarantee
             ROBO DOOR offers a 60 months NO BULL Break-in REPAIR Guarantee to the original owner of the product, all parts replaced free of charge. The onus will vest on the owner to prove that he is the rightful owner of the product and that the break-in was registered with the SAP. 
            
             Manufacturing Guarantee
             ROBO DOOR offers a 60 month no fuss warranty against defective materials and workmanship. We will replace all defective parts or barrier pending the nature of defective product.
            
             Rust free Guarantee
             Any ROBO DOOR Aluminium Products is rust free as Aluminium is highly resistant to most forms of corrosion, ensuring you a life long rust free product, unlike any other similar Steel Product.
            </td>
            <td colspan="10" >CLIENT ACCEPTANCE OF ORDER</td>
            <td colspan="4" >Total</td>
            <td colspan="" >45,850</td>
        </tr>
        <tr>
          <td colspan="3">Signature</td>
          <td colspan="7"></td>
          <td colspan="3"> Deposit Payable on Placement of Order</td>
          <td colspan=""> 50%</td>
          <td colspan="" >45,850</td>
        </tr>
        <tr>
          <td colspan="3">Signature</td>
          <td colspan="7"></td>
          <td colspan="4">Balance Payable on/before collection</td>
          <td colspan="" >45,850</td>
        </tr>
        <tr>
          <td colspan="3">DELIVERY</td>
          <td colspan="8">STANDARD 7-10 WORK DAYS</td>
          <td colspan="5">ABSA BANK, BOKSBURG BRANCH, SWIFT CODE ABSAZAJJ, BRANCH CODE: 632005, ACCOUNT NUMBER: 4066184721  </td>
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
            <tbody>
              <tr>
                <th style="width:64%">Subtotal:</th>
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