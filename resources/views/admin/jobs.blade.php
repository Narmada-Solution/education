@extends('admin.index2')
@section('content')
<link href="<?php echo asset('assets/css/datepicker.css')?>" rel="stylesheet" />
<div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Jobs</h5>
                
              </div>
              <div class="card-body ">
				<!-- Trigger the modal with a button -->
				<button style="float:right" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Jobs</button>
				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<form method="post" >
							@csrf
							<div class="modal-header">
							<h4 style="margin-top:0px" class="modal-title">Add Jobs</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<div class="row form-group">
									<div class="col-md-3">Organization</div>
									<div class="col-md-9"><input type="text" name="organization" class="form-control organization"></div>
								</div>
								<div class="row form-group">
									<div class="col-md-3">Posts</div>
									<div class="col-md-9"><input type="text" name="posts" class="form-control posts"></div>
								</div>
								<div class="row form-group">
									<div class="col-md-3">Qualification</div>
									<div class="col-md-9"><input type="text" name="qualification" class="form-control qualification"></div>
								</div>
								<div class="row form-group">
									<div class="col-md-3">Last Date</div>
									<div class="col-md-9"><input type="text" name="last_date" class="form-control datepicker last_date"></div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary btnsubmit" >Submit</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				
                <table class="table table-bordered table-striped table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Post Date</th>
							<th>Organization</th>
							<th>Posts</th>
							<th>Qualification</th>
							<th>Last Date</th>
						</tr>
					</thead>
					<tbody>
					@foreach($userdata as $user)
						<tr>
							<td>{{ $user->post_date }}</td>
							<td>{{ $user->organization }}</a></td>
							<td>{{ $user->posts }}</td>
							<td>{{ $user->qualification }}</td>
							<td>{{ date('Y-m-d',strtotime($user->last_date)) }}</td>
						</tr>
					@endforeach	
					</tbody>
				</table>
              </div>
            </div>
          </div>
        </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         
          <script src="<?php echo asset('assets/js/bootstrap-datepicker.js')?>"></script>
        <script>
        
        	$('.datepicker').datepicker()
        
        	$(document).ready(function () {
            	$(".btnsubmit").click(function(){
            		
            		var organization = $(".organization").val();
            		var posts = $(".posts").val();
            		var qualification = $(".qualification").val();
            		var last_date = $(".last_date").val();
            		var _token =  "{{ csrf_token() }}";
        			$.ajax({
                    	type: "POST",
                        url: "<?php echo url('/'). '/admin/jobsresult'; ?>",
                        data: "organization="+organization+"&posts="+posts+"&qualification="+qualification+"&last_date="+last_date+"&_token="+_token,
                        success: function (response) {
                        	alert(response);
						}
					});
				});
			});		
        </script>
        

@stop