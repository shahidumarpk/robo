
@extends('layouts.mainlayout')
@section('content')
<style>
.lds-hourglass {
  display: inline-block;
  position: relative;
  width: 64px;
  height: 64px;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 6px;
  box-sizing: border-box;
  border: 26px solid #000;
  border-color: #000 transparent #000 transparent;
  animation: lds-hourglass 1.2s infinite;
}
@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}
</style>
@if(session('success'))
    <script>


      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif

<div class="box box-info">
        <div class="box-header with-border">
        <div class="box-header">
          <h4 class="box-title">Create Invoice</h4>
          <span class="pull-right" id="expirydate" style="display:none">Expiry Date: 21-Feb-2019</span>
          
        </div>
        <div class="box-body">
            <form role="form">
                <div class="box-body ">
                    <section>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label for="product_name">Choose Customer</label>
                                <select  onchange="putCustomerName(this.value)" id="product_name" name="product_name" class="form-control form-control-sm">
                                    <option value="0" selected>New Customer</option>
                                    <option value="1">Jhon Dicard</option>
                                    <option value="2">Noman Shah</option>
                                    <option value="3">Raheel khan</option>
                                    <option value="4">Murtaza Pakana</option>
                                  </select>
                                
                              </div>
                              <div class="form-group">
                                  <label for="firstname">First Name</label>
                                  <input type="text" name="firstname" class="form-control form-control-sm" id="firstname" placeholder="Enter First Name">
                              </div>
                          
                              <div class="form-group">
                                  <label for="lastname">Last Name</label>
                                  <input type="text"   name="lastname" class=" form-control form-control-sm" id="lastname" placeholder="Enter Last Name">
                              </div>
                        </div>
                        <div class="col-md-3 ">
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="Enter Customer Email">
                              </div>
                          
                           
                              <div class="form-group">
                                  <label for="companyname">Company Name</label>
                                  <input type="text"  name="companyname" class="form-control form-control-sm" id="companyname" placeholder="Enter Company Name">
                              </div>
                            
                              <div class="form-group">
                                  <label for="phone">Phone Number</label>
                                  <input type="text"  name="phone" class="form-control form-control-sm" id="phone" placeholder="Enter Phone Number">
                              </div>
                          </div>
                          <div class="col-md-4 pull-right">
                              <div class="invoice-col">
                                 <label> Sales Representative </label>
                                  
                                  <address>
                                      <strong>Micheal Elath</strong><br>
                                      <i>Robo Door, RBD</i><br>
                                      P O Box 926<br>
                                      CA, USA<br>
                                      Phone: +0123 4567<br>
                                      Email: jamesbond@abc.com
                                    </address>
                                </div>
                                <div class="form-group">
                                  <label id="expirydatelabel">Expiry Date</label><br/>
                                  <input type="text" class="form-control" id="selectexpirydate" name="selectexpirydate"/>
                                </div>
                          </div>
                        </section>
                    <div class="col-md-3">
                    </div>
                    <div class="clearfix"></div>
                    <hr class="" style="border: 1px solid lightgrey;">
                    <div class="col-md-12">
                      <label>Products Details</label>
                        <table class="table table-bordered" id="product_info_table">
                            <thead>
                            <tr>
                                <th style="width:35%">Product Name</th>
                                <th style="width:20%">Size</th>
                                <th style="width:10%">Qty</th>
                                <th style="width:10%">Rate</th>
                                <th style="width:15%">Amount</th>
                                <th style="width:10%"></th>
                            </tr>
                            </thead>
                            
                            <tbody>
                              <tr id="row_1">
                                <td>
                                <select class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="putPrice()" required>
                                    <option value="">Security Chain Gate</option>
                                    <option value="">DELUX Gate</option>
                                    <option value="">TRELLES Gate</option>
                                    <option value="">Security Chain Gate</option>
                                    
                                    </select>
                                </td>
                                <td>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <input type="number" name="qty[]" id="qty_1" class="form-control  form-control-sm" required onkeyup="getTotal(1)" placeholder="Length">
                                    </div>
                                    <div class="col-md-6">
                                      <input type="number" name="qty[]" id="qty_1" class="form-control form-control-sm" required onkeyup="getTotal(1)" placeholder="Width">
                                    </div>
                                  </div>
                                </td>
                                <td><input type="number" placeholder="Qty"  name="qty[]" id="qty_1" class="form-control" required onkeyup="getTotal(1)"></td>
                                <td>
                                    <input type="text" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off" value="200">
                                    <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
                                    <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                                </td>
                                <td><button type="button" id="add_row" class="btn btn-success"><i class="fa fa-plus"></i></button></td>
                              </tr>

                              <tr id="row_11"  style="display:none">
                                  <td>
                                  <select class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="putPrice()" required>
                                      <option value="" selected>Security Chain Gate</option>
                                      <option value="">DELUX Gate</option>
                                      <option value="">TRELLES Gate</option>
                                      <option value="">Security Chain Gate</option>
                                      
                                      </select>
                                  </td>
                                  <td>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <input type="number" name="qty[]" id="length" value="200" class="form-control  form-control-sm" required onkeyup="getTotal(1)" placeholder="Length">
                                      </div>
                                      <div class="col-md-6">
                                        <input type="number" name="qty[]" id="width"  value="300" class="form-control form-control-sm" required onkeyup="getTotal(1)" placeholder="Width">
                                      </div>
                                    </div>
                                  </td>
                                  <td><input type="number" placeholder="Qty"  name="qty[]"  value="2" id="qty_1" class="form-control" required onkeyup="getTotal(1)"></td>
                                  <td>
                                      <input type="text"  value="200" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off" value="200">
                                      <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                                  </td>
                                  <td>
                                      <input type="text"  value="400" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
                                      <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                                  </td>
                                  <td><button type="button" class="btn btn-danger" onclick="removeRow('11')"><i class="fa fa-close"></i></button></td>
                                </tr>

                                <tr id="row_12"  style="display:none">
                                    <td>
                                    <select class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="putPrice()" required>
                                        <option value="">Security Chain Gate</option>
                                        <option value="" selected>DELUX Gate</option>
                                        <option value="">TRELLES Gate</option>
                                        <option value="">Security Chain Gate</option>
                                        
                                        </select>
                                    </td>
                                    <td>
                                      <div class="row">
                                        <div class="col-md-6">
                                          <input type="number"  value="200" name="qty[]" id="qty_1" class="form-control  form-control-sm" required onkeyup="getTotal(1)" placeholder="Length">
                                        </div>
                                        <div class="col-md-6">
                                          <input type="number"  value="400" name="qty[]" id="qty_1" class="form-control form-control-sm" required onkeyup="getTotal(1)" placeholder="Width">
                                        </div>
                                      </div>
                                    </td>
                                    <td><input type="number" placeholder="Qty"  value="1"  name="qty[]" id="qty_1" class="form-control" required onkeyup="getTotal(1)"></td>
                                    <td>
                                        <input type="text"  value="400" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off" value="200">
                                        <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                                    </td>
                                    <td>
                                        <input type="text"  value="400" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
                                        <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                                    </td>
                                    <td><button type="button" class="btn btn-danger" onclick="removeRow('12')"><i class="fa fa-close"></i></button></td>
                                  </tr>

                                  <tr id="row_13"  style="display:none" >
                                      <td>
                                      <select class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="putPrice()" required>
                                          <option value="">Security Chain Gate</option>
                                          <option value="">DELUX Gate</option>
                                          <option value="" selected>TRELLES Gate</option>
                                          <option value="">Security Chain Gate</option>
                                          
                                          </select>
                                      </td>
                                      <td>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <input type="number"  value="120" name="qty[]" id="qty_1" class="form-control  form-control-sm" required onkeyup="getTotal(1)" placeholder="Length">
                                          </div>
                                          <div class="col-md-6">
                                            <input type="number" name="qty[]"  value="120" id="qty_1" class="form-control form-control-sm" required onkeyup="getTotal(1)" placeholder="Width">
                                          </div>
                                        </div>
                                      </td>
                                      <td><input type="number"  value="4" placeholder="Qty"  name="qty[]" id="qty_1" class="form-control" required onkeyup="getTotal(1)"></td>
                                      <td>
                                          <input type="text" value="350" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off" value="200">
                                          <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                                      </td>
                                      <td>
                                          <input type="text"  value="1400" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
                                          <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                                      </td>
                                      <td><button type="button" class="btn btn-danger" onclick="removeRow('13')"><i class="fa fa-close"></i></button></td>
                                    </tr>
                            </tbody>
                            </table>
                            
                    <div class="">
                        
                      <div class="col-md-12">
                          <label> Additional Work (if any)</label>
                          <div class=" row control-group after-add-more" id="zeroAdditional">
                              <div class="col-md-7">
                                  <input type="text" name="addmore[]" class="form-control" placeholder="Enter Additional Work Here">
                                </div>
                                <div class="col-md-4">
                                  <input type="number" name="addmore[]" class="form-control" placeholder="Price"> 
                                </div>
                                <div class="col-md-1">
                                  <div class="input-group-btn"> 
                                    <button class="btn btn-success add-more" type="button"><i class="fa fa-plus"></i></button>
                                  </div>
                                </div>
                          </div>
                          <div class=" row control-group controlremove" id="additional1" style="display:none; margin-top:20px ">
                              <div class="col-md-7">
                                  <input type="text" value="change front door color" name="addmore[]" class="form-control" placeholder="Enter Additional Work Here">
                                </div>
                                <div class="col-md-4">
                                  <input type="number"  value="550" name="addmore[]" class="form-control" placeholder="Price"> 
                                </div>
                                <div class="col-md-1">
                                  <div class="input-group-btn"> 
                                      <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                                  </div>
                                </div>
                          </div>
                          <div class=" row control-group controlremove" id="additional2" style="display:none; margin-top:20px">
                              <div class="col-md-7">
                                  <input type="text"  value="door locks need to be change" name="addmore[]" class="form-control" placeholder="Enter Additional Work Here">
                                </div>
                                <div class="col-md-4">
                                  <input type="number"  value="350" name="addmore[]" class="form-control" placeholder="Price"> 
                                </div>
                                <div class="col-md-1">
                                  <div class="input-group-btn"> 
                                      <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                                  </div>
                                </div>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-xs-12 pull-right">
                              
                        <div class="">
                          <div class="form-group">
                            <label for="gross_amount" class="col-sm-5 ">Gross Amount</label>
                            <div class="col-sm-7">
                              <input type="text" value="22,00" class="form-control" id="gross_amount" name="gross_amount"  autocomplete="off" disabled>
                              <input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
                            </div>
                          </div>
                          <div class="" style="height:50px;"></div>
                          <div class="form-group">
                            <label for="discount" class="col-sm-5">Discount</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" autocomplete="off">
                            </div>
                          </div>
                          <div class="" style="height:50px;"></div>
                          <div class="form-group">
                            <label for="advance" class="col-sm-5">Advance</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" id="advance" name="advance" placeholder="Discount" onkeyup="subAmount()" autocomplete="off">
                            </div>
                          </div>
                          <div class="" style="height:36px;"></div>
                          <div class="form-group">
                            <label for="net_amount" class="col-sm-5">Net Amount</label>
                            <div class="col-sm-7">
                              <input type="text"  value="22,00" class="form-control" id="net_amount" name="net_amount"  autocomplete="off" disabled>
                              <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off">
                            </div>
                          </div>
                        </div>
                        </div>
              </div>
                    <div class="copy hide ">
                        <div class="form-group row controlremove" style="margin-top:20px">
                          <div class="col-md-7">
                            <input type="text" name="addmore[]" class="form-control" placeholder="Enter Additional Work Here">
                          </div>
                          <div class="col-md-4">
                            <input type="number" name="addmore[]" class="form-control" placeholder="Price"> 
                          </div>
                          <div class="col-md-1">
                            <button class="btn btn-danger remove" type="button"><i class="fa fa-close"></i></button>
                          </div>
                        </div>
                      </div>
    
                  
                  
                  </div>
               
                
               
              </form>
        </div>
        <div class="box-footer">
            <div class="pull-right">
                <a href="{{url('/invoices')}}" class="btn btn-warning">Save as Draft</a>
                <a href="{{url('/invoices/1')}}" class="btn btn-primary">Save</a>
              </div>
        </div>
    </div>    
  </div>


<!-- Modal -->
<div class="modal fade"  data-backdrop="static" data-keyboard="false" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Import Quote</h4>
          </div>
          <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="" style="text-align: center;">
                  <div class="lds-hourglass" id="loader" style="display:none"></div>
                </div>
                <div class="form-group">
                    <label for="status">Select Quote</label>
                    <select name="status" class="form-control" id="quotenumber">
                        <option value="0" disabled selected>Select Quote </option>
                        <option value="1">RB13123 - Micheal Doe  </option>
                        <option value="2">RB85421 - Jhon Mark</option>
                        <option value="3">RB83421 - Raheel Khan</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                  <label for="name">Advance Payment</label>
                  <input  type="number" class="form-control" id="advance" placeholder="Enter Advance Amount">
                </div> --}}
               
              </div>
              <!-- /.box-body -->

              
            </form>
          </div>
          <div class="modal-footer">
              <button type="submit" onclick="importQuote()" class="btn btn-primary">Create</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Skip</button>
          </div>

      
    </div>
  </div>
</div>


  <script type="text/javascript">
//   select 2 code for the popup styling
    $(window).on('load',function() {
        $('#exampleModalCenter').modal('show');
        $('#quotenumber').select2();
        $('.select2-container').attr('style', 'width:100%');
        $('.select2-selection--single').attr('style', 'height:32px;');
        $(function() {
              $('#selectexpirydate').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 1901,
                maxYear: parseInt(moment().format('YYYY'),10)
              });
            });
    });
    $(document).ready(function() {
    });  

    function importQuote(){ 
      var advance = $('#advance').val();
      var quotenumber =  $('#quotenumber').val();
      if( !quotenumber){
        alert('Select Qoute or Skip');
      }
      else{
        $('#loader').show();
        $('.modal-content').attr('style', 'background: #f9f9f9;');
        setTimeout(function(){

          $('#exampleModalCenter').modal('hide');
          $('#expirydate').show();
          $('#selectexpirydate').hide();
          $('#expirydatelabel').hide();
          $('#row_11').show();
          $('#row_12').show();
          $('#row_13').show();
          $('#additional1').show();
          $('#additional2').show();
          document.getElementById('firstname').value = "Jhon";
          document.getElementById('lastname').value = "Dicard";
          document.getElementById('companyname').value = "Niku Solutions PTE LTD";
          document.getElementById('email').value = "customer@gmail.com";
          document.getElementById('phone').value = "+1 123 4567 890";
          $('#product_name').attr("disabled", true);
          $('#firstname').attr("disabled", true);
          $('#lastname').attr("disabled", true);
          $('#companyname').attr("disabled", true);
          $('#email').attr("disabled", true);
          $('#phone').attr("disabled", true);
        }, 2500);

      }
    }
    function putCustomerName(value){
      
      if(value == 1){
        document.getElementById('firstname').value = "Jhon D";
        document.getElementById('lastname').value = "Dicard";
        document.getElementById('companyname').value = "Niku Solutions PTE LTD";
        document.getElementById('email').value = "customer@gmail.com";
        document.getElementById('phone').value = "+1 123 4567 890";
      }
      else if(value == 2){
        document.getElementById('firstname').value = "Noman ";
        document.getElementById('lastname').value = "Shah Khan";
        document.getElementById('companyname').value = "Google Solutions PTE LTD";
        document.getElementById('email').value = "nomihahah@gmail.com";
        document.getElementById('phone').value = "+1 456 8790 123";
      }
      else if(value == 3){
        document.getElementById('firstname').value = "Raheel ";
        document.getElementById('lastname').value = "Khan";
        document.getElementById('companyname').value = "Yahoo Solutions PTE LTD";
        document.getElementById('email').value = "khana123@gmail.com";
        document.getElementById('phone').value = "+1 963 8542 789";
      }
      else if(value == 4){
        document.getElementById('firstname').value = "Murtaza ";
        document.getElementById('lastname').value = "Pakana";
        document.getElementById('companyname').value = "Upwork Solutions PTE LTD";
        document.getElementById('email').value = "paki123@gmail.com";
        document.getElementById('phone').value = "+1 741 8502 354"; 
      }
      else{
        document.getElementById('firstname').value = "";
        document.getElementById('lastname').value = "";
        document.getElementById('companyname').value = "";
        document.getElementById('email').value = "";
        document.getElementById('phone').value = "";
        
      }
    }

    $('.js-example-basic-multiple').select2({
      placeholder: 'Select an option'
    });
      $(document).ready(function() {
        $(".add-more").click(function(){ 
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });
  
        $("body").on("click",".remove",function(){ 
            $(this).parents(".controlremove").remove();
        });
      });

      // add new row 
      $("#add_row").unbind('click').bind('click', function() {
        var table = $("#product_info_table");
        var count_table_tbody_tr = $("#product_info_table tbody tr").length;
        var row_id = count_table_tbody_tr + 2;
        var html = '<tr id="row_'+row_id+'">'+        
            '<td>'+ 
            '<select class="form-control select_group product" data-row-id="2" id="product_'+row_id+'" name="product[]" style="width:100%;" onchange="getProductData('+row_id+')">'+
                '<option value="">Security Chain Gate</option>'+
                '<option value="">DELUX Gate</option>'+
                '<option value="">TRELLES Gate</option>'+
                '<option value="">Security Chain Gate</option>';  
              html += '</select>'+
            '</td>'+ 
            `<td>
              <div class="row">
                <div class="col-md-6">
                  <input type="number" name="qty[]" id="qty_1" class="form-control  form-control-sm" required onkeyup="getTotal(1)" placeholder="Length">
                </div>
                <div class="col-md-6">
                  <input type="number" name="qty[]" id="qty_1" class="form-control form-control-sm" required onkeyup="getTotal(1)" placeholder="Width">
                </div>
                </div>
              </td>` +
            '<td><input type="number" placeholder="Qty" name="qty[]" id="qty_1" class="form-control" onkeyup="getTotal(1)" ></td>'+
            '<td><input type="text" name="rate[]" id="rate_1" class="form-control" disabled value="350"><input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control"></td>'+
            '<td><input type="text" name="amount[]" id="amount_1" class="form-control" disabled><input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control"></td>'+
            '<td><button type="button" class="btn btn-danger" onclick="removeRow(' + row_id + ')"><i class="fa fa-close"></i></button></td>'+
            '</tr>';

        if(count_table_tbody_tr >= 1) {
        $("#product_info_table tbody tr:last").before(html); 
        }
        row_id++;
      });
      var row_idd = 1;
      function removeRow(tr_id)
      {
        $("#product_info_table tbody tr#row_" + tr_id).remove();
        row_idd++;
      }

        var num = 1;
        document.getElementById('add').addEventListener("click",addInput);
        function addInput(){
        var newInput = '<br/><br/><input class="form-control" placeholder="Enter Additional Work" type="text" name="input'+num+'"/> <input type="text"  class="form-control" style="width:30%" placeholder="Enter Price" name="additional_price' + num +'"/> ';
          document.getElementById('demo').innerHTML += newInput;  
          num++;
        }
      </script>
@endsection 