@extends('admin.index2')
@section('content')
        
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Blogs</h5>
				<button style="float:right" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Blogs</button>
              </div>
			  
              <div class="card-body ">
				<!-- Trigger the modal with a button -->
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
				
				
				<div class="row">
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="post.html"><img src="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/blog-1.jpg" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Business</a></div>
              </div><a href="post.html">
                <h3 class="h4">Ways to remember your important ideas</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="post.html"><img src="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/blog-2.jpg" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Technology</a></div>
              </div><a href="post.html">
                <h3 class="h4">Diversity in Engineering: Effect on Questions</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
          <div class="post col-md-4">
            <div class="post-thumbnail"><a href="post.html"><img src="https://d19m59y37dris4.cloudfront.net/blog/1-2-1/img/blog-3.jpg" alt="..." class="img-fluid"></a></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date">20 May | 2016</div>
                <div class="category"><a href="#">Financial</a></div>
              </div><a href="post.html">
                <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
        </div>
				
                
              </div>
            </div>
          </div>
        

@stop