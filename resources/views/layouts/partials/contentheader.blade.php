<!-- Content Header (Page header) -->
<style>
.custom-form-control{
    display: initial;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
.custom-input-group {
    position: relative;
    display: inline-grid;
    border-collapse: separate;
}
</style>
<section class="content-header">
      <h1>
        Dashboard
        @if (\Request::is('dashboard'))
        <span class="pull-right">
          <div class="custom-input-group">
              <button type="button" class="btn btn-default" id="daterange-btndashboard">
                <span>{{date('F d, Y')}} - {{date('F d, Y')}}</span>
                <input type="hidden" name="dateFrom" id="dateFrom" value="{{date('Y-m-d')}}">
                <input type="hidden" name="dateTo" id="dateTo" value="{{date('Y-m-d')}}">
                <i class="fa fa-caret-down"></i>
              </button>
            </div>
          <script>
              
              $(document).ready(function() { 
                
                //Date range as a button
                $('#daterange-btndashboard').daterangepicker(
                  {
                    ranges   : {
                      'Today'       : [moment(), moment()],
                      'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                      'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                      'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                      'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                  },
                  function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    $('#dateFrom').val(start.format('YYYY-MM-DD'));
                    $('#dateTo').val(end.format('YYYY-MM-DD'));
                    var maintabledate = $('#table_data').DataTable();
                    maintabledate.column('6').search(
                    $('#dateFrom').val()+','+$('#dateTo').val()
                    ).draw();
                  }
                );
              
                  
                });

          </script>

          <select class="custom-form-control">
            <option value="0">Overall</option>
            <option value="1">Florin Ristea</option>
            <option value="2">Dave Miller</option>
            <option value="3">Dale Styne</option>
          </select>
          <button type="button" class="btn btn-primary"><li class="fa fa-search"></li></button>
        </span>
        @endif
      </h1>
</section>