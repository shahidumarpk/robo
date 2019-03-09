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
<?php
function makeLinks($str) {
	$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	$urls = array();
	$urlsToReplace = array();
	if(preg_match_all($reg_exUrl, $str, $urls)) {
		$numOfMatches = count($urls[0]);
		$numOfUrlsToReplace = 0;
		for($i=0; $i<$numOfMatches; $i++) {
			$alreadyAdded = false;
			$numOfUrlsToReplace = count($urlsToReplace);
			for($j=0; $j<$numOfUrlsToReplace; $j++) {
				if($urlsToReplace[$j] == $urls[0][$i]) {
					$alreadyAdded = true;
				}
			}
			if(!$alreadyAdded) {
				array_push($urlsToReplace, $urls[0][$i]);
			}
		}
		$numOfUrlsToReplace = count($urlsToReplace);
		for($i=0; $i<$numOfUrlsToReplace; $i++) {
			$str = str_replace($urlsToReplace[$i], "<a target='_blank' href=\"".$urlsToReplace[$i]."\">".$urlsToReplace[$i]."</a> ", $str);
		}
		return $str;
	} else {
		return $str;
	}
}
?>
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lead Details of <b>Micheal Gak</b></h3>
            </div>
            <!-- /.box-header -->
				<div class="box-body" >
				  <div class="row">
					  <div class="col-md-12">
					  
						<table class="table table-striped">
						<tr>
							<td width="25%"><b>Name</b></td>
							<td width="75%">Micheal Gak	</td>
                        </tr>
                        <tr>
                            <td width="25%"><b>Address</b></td>
                            <td width="75%">Address Goes Here	</td>
                        </tr>
						<tr>
							<td><b>Phone Number </b></td>
							<td><a href="tel:+1123456789">+1 123 4567 89</a></td>
						</tr>
						<tr>
							<td><b>Email</b></td>
							<td><a href="mailto:email@robodoor.com	">email@robodoor.com</a></td>
                        </tr>
                        <tr>
                            <td><b>Assigned To</b></td>
                            <td><a href="#">Florin Ristea</a></td>
                        </tr>
                        <tr>
                            <td><b>Date</b></td>
                            <td>01-Jan-2019 11:15 AM</td>
                        </tr>
                        <tr>
                            <td><b>Description</b></td>
                            <td>He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. 
                                He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. 
                                He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. 
                                He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. 
                                He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. 
                                He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. 
                                He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. 
                                He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. 
                                He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. He is looking for TRELLIS DOOR & WINDOW FIXTURE. 
                            </td>
                        </tr>
                        <tr>
                                <td><b>Status</b></td>
                                <td><span class="label bg-green">Open</span></td>
                            </tr>
						</table>
						</div>
				  </div>
				</div>
			<!-- /.box-body -->
			<div class="box-footer">
				<a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
			</div>
			<!-- /.box-footer -->
</div>

<div id="btnNew" style="cursor:pointer;z-index:100;" class="pull-right">
    <span class="btn bg-orange btn-flat btn-lg margin" onclick="openNav()" id="btnNewMessage"><li class="fa fa-plus"></li> New Message</span>
</div>

<div class="row">
        <div class="col-md-12">
            <!-- The time line -->
            <ul class="timeline" id="timelinemore" data-next-page="https://erp.nsol.sg/projects/24?page=2">
                            <!-- timeline time label -->
                <li class="time-label">
                            <span class="bg-red">
                                29-Nov-2018
                            </span>
                </li>
                <!-- /.timeline-label -->
                            <!-- timeline item -->
                <li>
                    <i class="fa fa-envelope bg-blue"></i>
    
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 13:35 </span>
    
                        <h3 class="timeline-header"><a href="#">John Smith</a> posted with <span class="label bg-blue">STATUS</span> </h3>
    
                        <div class="timeline-body">
                            Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here 
                            Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here 
                            Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here 
                            Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here Detail Message Goes Here 
                        </div>
    
                    </div>
                </li>
            <!-- End timeline item -->
            
                                <!-- The time line -->
            <ul class="timeline" id="timelinemore" data-next-page="#">
                            <!-- timeline item -->
                <li>
                    <i class="fa fa-envelope bg-blue"></i>
    
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 13:35 </span>
    
                        <h3 class="timeline-header"><a href="#">John Smith</a> posted with <span class="label bg-yellow">STATUS</span> </h3>
    
                        <div class="timeline-body">
                            Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. 
                        </div>
    
                    </div>
                </li>
                <!-- END timeline item -->
                
                                <!-- The time line -->
            <ul class="timeline" id="timelinemore" data-next-page="#">
                            <!-- timeline item -->
                <li>
                    <i class="fa fa-envelope bg-blue"></i>
    
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 13:35 </span>
    
                        <h3 class="timeline-header"><a href="#">John Smith</a> posted with <span class="label bg-green">STATUS</span> </h3>
    
                        <div class="timeline-body">
                            Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. 
                            Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. Need Samples. 
                            <div class="clearfix"><br></div>
                        </div>
    
                    </div>
                </li>
                <!-- END timeline item -->
                
                                <!-- The time line -->
            <ul class="timeline" id="timelinemore" data-next-page="#">
                            <!-- timeline time label -->
                <li class="time-label">
                            <span class="bg-red">
                                28-Nov-2018
                            </span>
                </li>
                <!-- /.timeline-label -->
                            <!-- timeline item -->
                <li>
                    <i class="fa fa-envelope bg-blue"></i>
    
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 05:27 </span>
    
                        <h3 class="timeline-header"><a href="#">John Smith</a> posted with <span class="label bg-blue">STATUS</span> </h3>
    
                        <div class="timeline-body">
                            Qoute Sent to him my post and email. 
                        </div>
    
                    </div>
                </li>
                <!-- END timeline item -->
             
                
                        </ul>
        </ul></ul></ul>
    </div>
        <!-- /.col -->
    </div>

<div id="btnNew" style="cursor:pointer;z-index:100;" class="pull-right">
    <span class="btn bg-orange btn-flat btn-lg margin" onclick="openNav()" id="btnNewMessage"><li class="fa fa-plus"></li> New Message</span>
</div>
    <style>

            .sidenav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1050;
                top: 0;
                right: 0;
                background-color: #111;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }
            
            .sidenav a {
                padding: 4px 4px 4px 16px;
                text-decoration: none;
                color: #f1f1f1;
                display: block;
                transition: 0.3s;
            }
            
            .sidenav .closebtn {
                position: absolute;
                top: 0;
                left: 5px;
                font-size: 56px;
                    border-radius:100%;
            }
            @media screen and (max-height: 450px)
            {
                .sidenav
                {width:100%;}
            }
            @media screen and (max-height: 450px) {
              .sidenav {padding-top: 15px;}
              .sidenav a {font-size: 18px;}
            }
            </style>
            
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
                <div style="padding: 50px;">
                    <!-- form start -->
                    <form role="form" id="frmMessage" method="get" >
                    @csrf
                    <input type="hidden" name="project_id" value="1">
                        <div class="box-body">
                        <div class="form-group">
                            <textarea class="form-control" rows="12" name="message" id="message" placeholder="Enter your Message Here"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" id="MessageAssets" name="MessageAssets[]" class="btn btn-danger btn-lg" multiple>
                        </div>                
                        <div class="form-group">
                            <span id="errmessage"></span>
                            <button class="btn btn-danger btn-lg pull-right">Post Message</button>                  
                        </div>
                        </div>
                    </form>
                    <!-- form ends -->
                </div>              
            </div>
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "70%";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>
@endsection