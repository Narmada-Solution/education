@extends('admin.index2')
@section('content')
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
							<form method="post">
							<div class="modal-header">
							<h4 style="margin-top:0px" class="modal-title">Add Jobs</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								
							</div>
							<div class="modal-body">
								<div class="row form-group">
									<div class="col-md-3">Organization</div>
									<div class="col-md-9"><input type="text" name="organization" class="form-control"></div>
								</div>
								<div class="row form-group">
									<div class="col-md-3">Posts</div>
									<div class="col-md-9"><input type="text" name="organization" class="form-control"></div>
								</div>
								<div class="row form-group">
									<div class="col-md-3">Qualification</div>
									<div class="col-md-9"><input type="text" name="organization" class="form-control"></div>
								</div>
								<div class="row form-group">
									<div class="col-md-3">Last Date</div>
									<div class="col-md-9"><input type="text" name="date" class="form-control"></div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" >Submit</button>
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
						<tr>
							<td>24-09-2019</td>
							<td><a>Institute of Life Scienes</a></td>
							<td>4 Project Associate II / SRF and Research Associate</td>
							<td>Post Graduate</td>
							<td>27-9-2019</td>
						</tr>
						<tr>
							<td>24-09-2019</td>
							<td><a>Institute of Life Scienes</a></td>
							<td>4 Project Associate II / SRF and Research Associate</td>
							<td>Post Graduate</td>
							<td>27-9-2019</td>
						</tr>
					</tbody>
				</table>
              </div>
            </div>
          </div>
        </div>
@stop