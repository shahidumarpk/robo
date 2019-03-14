@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
<style>
/*    --------------------------------------------------
	:: General
	-------------------------------------------------- */
.content h1 {
	text-align: center;
}
.content .content-footer p {
	color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
.content .content-footer p a {
	color: inherit;
	font-weight: bold;
}

/*	--------------------------------------------------
	:: Table Filter
	-------------------------------------------------- */
.panel {
	border: 1px solid #ddd;
	background-color: #fcfcfc;
}
.panel .btn-group {
	margin: 15px 0 30px;
}
.panel .btn-group .btn {
	transition: background-color .3s ease;
}
.table-filter {
	background-color: #fff;
	border-bottom: 1px solid #eee;
}
.table-filter tbody tr:hover {
	cursor: pointer;
	background-color: #eee;
}
.table-filter tbody tr td {
	padding: 10px;
	vertical-align: middle;
	border-top-color: #d8d8d8;
}
.table-filter tbody tr.selected td {
	background-color: #f7f7f7;
}
.table-filter tr td:first-child {
	width: 38px;
}
.table-filter tr td:nth-child(2) {
	width: 35px;
}
.ckbox {
	position: relative;
}
.ckbox input[type="checkbox"] {
	opacity: 0;
}
.ckbox label {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.ckbox label:before {
	content: '';
	top: 1px;
	left: 0;
	width: 18px;
	height: 18px;
	display: block;
	position: absolute;
	border-radius: 2px;
	border: 1px solid #bbb;
	background-color: #fff;
}
.ckbox input[type="checkbox"]:checked + label:before {
	border-color: #2BBCDE;
	background-color: #2BBCDE;
}
.ckbox input[type="checkbox"]:checked + label:after {
	top: 3px;
	left: 3.5px;
	content: '\e013';
	color: #fff;
	font-size: 11px;
	font-family: 'Glyphicons Halflings';
	position: absolute;
}
.table-filter .star {
	color: #ccc;
	text-align: center;
	display: block;
}
.table-filter .star.star-checked {
	color: #F0AD4E;
}
.table-filter .star:hover {
	color: #ccc;
}
.table-filter .star.star-checked:hover {
	color: #F0AD4E;
}
.table-filter .media-photo {
	width: 35px;
}
.table-filter .media-body {
    display: block;
    width:100%;
    /* Had to use this style to force the div to expand (wasn't necessary with my bootstrap version 3.3.6) */
}
.table-filter .media-meta {
	font-size: 14px;
	color: #999;
}
.table-filter .media .title {
	color: #565353;
	font-size: 14px;
	font-weight: bold;
	line-height: normal;
	margin: 0;
}
.table-filter .media .unread{
	color: #00c0ef;
}
.table-filter .media .title span {
	font-size: .8em;
	margin-right: 20px;
}
.table-filter .media .title span.pagado {
	color: #5cb85c;
}
.table-filter .media .title span.pendiente {
	color: #f0ad4e;
}
.table-filter .media .title span.cancelado {
	color: #d9534f;
}
.table-filter .media .summary {
	font-size: 14px;
}</style>


			<h1>Notifications</h1>
			<div class="">
				<div class="panel panel-default">
					<div class="panel-body">
						
						<div class="">
							<table class="table table-filter">
								<tbody>
									<tr data-status="pagado" class="selected">
										
										
										<td>
											<div class="media">
												
												<div class="media-body">
													<span class="media-meta pull-right"><label class="" style="margin: 0px 10px;">by Jhon Nagit </label>March 13, 2019</span>
													<h4 class="title unread">
                                                        New Quote has been created  <label class="badge label label-info"> Unread</label>
													</h4>
													<p class="summary">A new quote has been generated against Michal to.....</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="pendiente" class="selected">
										<td>
											<div class="media">
												
												<div class="media-body">
													<span class="media-meta pull-right"><label class="" style="margin: 0px 10px;">by System </label>March 13, 2019</span>
													<h4 class="title unread">
                                                        Deadline for the Order No# RBD13245 is tomorrow  <label class="badge label label-info"> Unread</label>
													</h4>
													<p class="summary">Deadline for the order is tomorrow, collect the product from...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="cancelado" class="selected">
										
										
										<td>
											<div class="media">
												
												<div class="media-body">
													<span class="media-meta pull-right"><label class="" style="margin: 0px 10px;">by Hareas Murt </label>March 13, 2019</span>
													<h4 class="title unread">
                                                        New Invoice has been created  <label class="badge label label-info"> Unread</label>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="pagado">
										
										
										<td>
											<div class="media">
												
												<div class="media-body">
													<span class="media-meta pull-right"><label class="" style="margin: 0px 10px;">by Kabi Eer </label>March 13, 2019</span>
													<h4 class="title">
														Invoice is modified by Kabi Eer 
													</h4>
													<p class="summary">2 more items were added to the invoice no #RBD123123...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="pendiente">
                                            
                                            
                                            <td>
                                                <div class="media">
                                                    
                                                    <div class="media-body">
                                                        <span class="media-meta pull-right"><label class="" style="margin: 0px 10px;">by System </label>March 13, 2019</span>
                                                        <h4 class="title">
                                                            Deadline for the Order No# RBD13245 is tomorrow
                                                        </h4>
                                                        <p class="summary">Deadline for the order is tomorrow, collect the product from...</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-status="pagado">
                                                
                                                <td>
                                                    <div class="media">
                                                        
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right"><label class="" style="margin: 0px 10px;">by Rahul David </label> March 13, 2019</span>
                                                            <h4 class="title">
                                                                New Quote has been created
                                                            </h4>
                                                            <p class="summary">A new quote has been generated against Michal to.....</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-status="pendiente">
                                                
                                                <td>
                                                    <div class="media">
                                                        
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right"><label class="" style="margin: 0px 10px;">by System </label>March 13, 2019</span>
                                                            <h4 class="title">
                                                                Deadline for the Order No# RBD13245 is tomorrow
                                                            </h4>
                                                            <p class="summary">Deadline for the order is tomorrow, collect the product from...</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-status="cancelado">
                                                
                                                <td>
                                                    <div class="media">
                                                        
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right"><label class="" style="margin: 0px 10px;">by Jhon Doe </label>March 13, 2019</span>
                                                            <h4 class="title">
                                                                New Invoice has been created by Jhon Doe
                                                            </h4>
                                                            <p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-status="pagado" class="">
                                                
                                                <td>
                                                    <div class="media">
                                                        
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right"><label class="" style="margin: 0px 10px;">by Jack Mirth </label>March 13, 2019</span>
                                                            <h4 class="title">
                                                                Invoice is modified by Jack Mirth
                                                            </h4>
                                                            <p class="summary">2 more items were added to the invoice no #RBD123123...</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr data-status="pendiente">
                                                    
                                                    <td>
                                                        <div class="media">
                                                            
                                                            <div class="media-body">
                                                                <span class="media-meta pull-right"><label class="" style="margin: 0px 10px;">by System </label>March 13, 2019</span>
                                                                <h4 class="title">
                                                                    Deadline for the Order No# RBD13245 is tomorrow
                                                                </h4>
                                                                <p class="summary">Deadline for the order is tomorrow, collect the product from...</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                        
                                    </tbody>
							</table>
						</div>
					</div>
				</div>
				{{-- <div class="content-footer">
					<p>
						Page © - 2019 <br>
						Powered By <a href="https://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a>
					</p>
				</div> --}}
			</div>

<script>
$(document).ready(function () {

$('.star').on('click', function () {
  $(this).toggleClass('star-checked');
});

$('.ckbox label').on('click', function () {
  $(this).parents('tr').toggleClass('selected');
});

$('.btn-filter').on('click', function () {
  var $target = $(this).data('target');
  if ($target != 'all') {
    $('.table tr').css('display', 'none');
    $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
  } else {
    $('.table tr').css('display', 'none').fadeIn('slow');
  }
});

});</script>
@endsection