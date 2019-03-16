@extends('layouts.mainlayout')
@section('content')
 <!-- First Line Stats Begins -->
 <div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>0</h3>
  
        <p>Leads</p>
      </div>
      <div class="icon">
        <i class="ion ion-clipboard"></i>
      </div>
    </div>
  </div>
  <!-- /.col -->
  
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-blue">
      <div class="inner">
        <h3>2</h3>

        <p>Quotes</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-copy"></i>
      </div>
    </div>
  </div>
<!-- /.col -->

<div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>2</h3>
  
        <p>Invoices</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-pricetags"></i>
      </div>
    </div>
  </div>
  <!-- /.col -->

<!-- fix for small devices only -->
<div class="clearfix visible-sm-block"></div>

<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
      <h3>0.00</h3>

      <p>Sales</p>
    </div>
    <div class="icon">
      <i class="ion ion-social-usd-outline"></i>
    </div>
  </div>
</div>
<!-- /.col -->




</div>
 <!-- First Line Stats Ends -->
<!-- Second Line Stats Begins -->
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="fa fa-object-group"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Orders</span>
        <span class="info-box-number">22</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-hourglass-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">In-Process</span>
        <span class="info-box-number">10</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="fa fa-info-circle"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Pending</span>
        <span class="info-box-number">4</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="fa fa-thumbs-up"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Completed</span>
        <span class="info-box-number">8</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<!-- Second Line Stats Ends -->
    <!-- Charts -->
    <div class="row">
      <div class="col-md-6">
         <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Orders in last 7 days</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height: 156px; width: 535px;" width="535" height="156"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-6">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Commission/Profit in last 7 days</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height: 151px; width: 476px;" width="476" height="151"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
</div>

 
 <div class="row">
   <!-- Inbox Widget begins -->
    <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Inbox</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-refresh"></i></button>
              <!-- <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-gear"></i></button> -->
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">5 mins ago</td>
                </tr>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                  <td class="mailbox-date">28 mins ago</td>
                </tr>
                <tr>                 
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                  <td class="mailbox-date">11 hours ago</td>
                </tr>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">15 hours ago</td>
                </tr>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                  <td class="mailbox-date">Yesterday</td>
                </tr>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"></td>
                  <td class="mailbox-date">2 days ago</td>
                </tr>
                <tr>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                  <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                  </td>
                  <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                  <td class="mailbox-date">15 days ago</td>
                </tr>
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
          <div class="pull-right"><a href="#" class="btn btn-success btn-sm">View All</a></div>
          </div>
        </div>
        <!-- /. box -->
      </div>
    <!-- Inbox Widget ends -->
    <!-- Quick Email Widget begins -->
    <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Quick Email</h3>
            <div class="pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="form-group">
              <input class="form-control" placeholder="To:">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Subject:">
            </div>
            <div class="form-group">
                  <textarea id="compose-textarea" class="form-control" style="height: 200px">
                    <h1><u>Heading Of Message</u></h1>
                    <h4>Subheading</h4>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                      was born and I will give you a complete account of the system, and expound the actual teachings
                      of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                      dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                      how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                      is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                      but because occasionally circumstances occur in which toil and pain can procure him some great
                      pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                      except to obtain some advantage from it? But who has any right to find fault with a man who
                      chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                      produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                      dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                      blinded by desire, that they cannot foresee</p>
                    <ul>
                      <li>List item one</li>
                      <li>List item two</li>
                      <li>List item three</li>
                      <li>List item four</li>
                    </ul>
                    <p>Thank you,</p>
                    <p>John Doe</p>
                  </textarea>
            </div>
            <div class="form-group">
              <div class="btn btn-default btn-file">
                <i class="fa fa-paperclip"></i> Attachment
                <input type="file" name="attachment">
              </div>
              <p class="help-block">Max. 32MB</p>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <div class="pull-right">
              <button type="submit" class="btn btn-primary"><i class="fa fa-send-o"></i> Send</button>
            </div>
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    <!-- Quick Email Widget ends-->

  </div> <!-- Row ends -->
    
  <div class="row">
    <!-- Lastest Orders -->
    <div class="col-md-6">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Recent Quotes</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Quote No</th>
                    <th>Date</th>
                    <th>To </th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="#">123</a></td>
                    <td>21-Feb-2019</td>
                    <td>Niku Solutions Pte. Ltd.</td>
                    <td>$800</td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td>
                      <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                      <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    </td>
                  </tr>

                  <tr>
                    <td><a href="#">124</a></td>
                    <td>21-Feb-2019</td>
                    <td>Robo Door</td>
                    <td>$850</td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td>
                      <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                      <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">125</a></td>
                    <td>21-Feb-2019</td>
                    <td>Niku Solutions Pte. Ltd.</td>
                    <td>$800</td>
                    <td><span class="label label-success">Invoiced</span></td>
                    <td>
                      <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                      <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">126</a></td>
                    <td>21-Feb-2019</td>
                    <td>Niku Solutions Pte. Ltd.</td>
                    <td>$800</td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td>
                      <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                      <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">127</a></td>
                    <td>21-Feb-2019</td>
                    <td>Niku Solutions Pte. Ltd.</td>
                    <td>$800</td>
                    <td><span class="label bg-red">Cancel</span></td>
                    <td>
                      <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                      <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    </td>
                  </tr>
                 
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-flat pull-left">New Quote</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Quotes</a>
            </div>
            <!-- /.box-footer -->
          </div>

    </div>
    <!-- Recent Added Products -->
    <div class="col-md-6">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Invoices</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table no-margin">
                    <thead>
                    <tr>
                      <th>Invoice No</th>
                      <th>Date</th>
                      <th>To </th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="#">123</a></td>
                      <td>21-Feb-2019</td>
                      <td>Niku Solutions Pte. Ltd.</td>
                      <td>$800</td>
                      <td><span class="label label-warning">Pending</span></td>
                      <td>
                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                      </td>
                    </tr>
  
                    <tr>
                      <td><a href="#">124</a></td>
                      <td>21-Feb-2019</td>
                      <td>Robo Door</td>
                      <td>$850</td>
                      <td><span class="label label-warning">Pending</span></td>
                      <td>
                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#">125</a></td>
                      <td>21-Feb-2019</td>
                      <td>Niku Solutions Pte. Ltd.</td>
                      <td>$800</td>
                      <td><span class="label label-success">Paid</span></td>
                      <td>
                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#">126</a></td>
                      <td>21-Feb-2019</td>
                      <td>Niku Solutions Pte. Ltd.</td>
                      <td>$800</td>
                      <td><span class="label label-warning">Pending</span></td>
                      <td>
                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#">127</a></td>
                      <td>21-Feb-2019</td>
                      <td>Niku Solutions Pte. Ltd.</td>
                      <td>$800</td>
                      <td><span class="label bg-red">Cancel</span></td>
                      <td>
                        <button type="button" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                      </td>
                    </tr>
                   
                    </tbody>
                  </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-flat pull-left">New Invoice</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Invoices</a>
            </div>
            <!-- /.box-footer -->
          </div>

    </div>
    </div>

    
    <!-- Calendar Begins-->
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
@endsection