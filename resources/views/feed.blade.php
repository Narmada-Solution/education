<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<script src=<?php echo asset('assets/js/easySelectable.js')?>></script>
<script src="<?php echo asset('assets/js/index.js')?>"></script>
<link rel="stylesheet" href="<?php echo asset('assets/css/easySelectable.css')?>">
<link rel="stylesheet" href="<?php echo asset('assets/css/style.css')?>">
<link rel="stylesheet" href="<?php echo asset('assets/css/sunburst.css')?>">
<style type="text/css">
    .login-form {
       width: 700px;
        margin: 30px auto;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .login-form .hint-text {
        color: #777;
        padding-bottom: 15px;
        text-align: center;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .login-btn {        
        font-size: 15px;
        font-weight: bold;
    }
    .or-seperator {
        margin: 20px 0 10px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }
    .social-btn .btn {
        margin: 10px 0;
        font-size: 15px;
        text-align: left; 
        line-height: 24px;       
    }
    .social-btn .btn i {
        float: left;
        margin: 4px 15px  0 5px;
        min-width: 15px;
    }
    .input-group-addon .fa{
        font-size: 18px;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="<?php echo url('/'). '/registerresult'; ?>" method="post">
    @csrf
        <h2 class="text-center">Sign up</h2>        
        <div class="text-center social-btn">
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control fname" name="name" placeholder="Name" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="email" class="form-control femail" name="email" placeholder="Email" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="number" class="form-control fphone" name="phone" placeholder="Phone" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control fpassword" name="password" placeholder="Password" required="required">
            </div>
        </div>        
        <p>Which exam you are prepair for: Ask for the interest, give options to choose form </p>
        <ul id="easySelectable">
				<li class="exams_prepair" data-item="Bank & Insurance">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>
				<div class="col-md-9"><span>Bank & Insurance</span><br><small>IBPS,PO,RBI Assistant,SBI SO,NABARD</small></div>
				</li>
				
				<li class="exams_prepair" data-item="SSC & Govt Job Exams">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				
				<div class="col-md-9"><span>SSC & Govt Job Exams</span><br><small>SSC, CGL 2018,SSC,CHSL,SSC Steno,Railways Recuirment </small></div>
				
				
				<li class="exams_prepair" data-item="GATE and PSU Jobs">
				
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>GATE and PSU Jobs</span><br><small>GATE,BARC,SSC,IE,ISRO</small></div>
				</li>
				
				<li class="exams_prepair" data-item="JEE Main">
				
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span></span><br><small>JEE Main,JEE Advanced,BITSAT,UPSEE,SRMEEE</small></div>
				</li>
				
				
				<li class="exams_prepair" data-item="Medical Entrance">
				
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>Medical Entrance</span><br><small>NEET,LIG,AIMMS,JIPMER</small></div>
				</li>
				
				
				<li class="exams_prepair" data-item="UPSE">
				
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>UPSE & State Servuies</span><br><small>UPSC Pre,State PSE</small></div>
				</li>
				
				
				<li class="exams_prepair" data-item="UPSC Pre">
				
				<div class="col-md-3"><img src="<?php echo asset('assets/img/jan-sendereks.jpg')?>"></div>	
				<div class="col-md-9"><span>UPSC Pre,State PSE</span><br><small>CAT, IIFT, XAT, NMAT, MAT, CMAT, General</small></div>
				</li>
				
				
				<li class="exams_prepair" data-item="Teaching Exams">
				
				<div class="col-md-3"><img src="<?php echo asset('assets/img/damir-bosnjak.jpg')?>"></div>	
				<div class="col-md-9"><span>Teaching Exams</span><br><small>KVS,CTET,NVS,UPTET,Army teacher recruitment</small></div>
				</li>
				
				
				<li class="exams_prepair" data-item="NET">
				
				<div class="col-md-3"><img src="<?php echo asset('assets/img/default-avatar.png')?>"></div>	
				<div class="col-md-9"><span>NET</span><br><small>UGC,NET,CSIR,NET,MP,SET</small></div>
				</li>
				
				
				<li class="exams_prepair" data-item="Defence Exams">
				
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>Defence Exams</span><br><small>Combined Civil Services(CDS),AFCAT</small></div>
				</li>
				
				
			</ul>
			
        <div class="or-seperator"><i>or</i></div>
        <h3>My Exam Preference</h3>
        
        
        <ul id="easySelectable22">
				<li class="exam" data-item="Bank & Insurance">
				<input type="hidden" class="exams_prefer1" name="exams_prefer[]" value="Bank & Insurance">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>Bank & Insurance</span><br><small>IBPS,PO,RBI Assistant,SBI SO,NABARD</small></div></li>
				
				<li class="exam" data-item="SSC & Govt Job Exams">
				<input type="hidden" class="exams_prefer2" name="exams_prefer[]" value="SSC & Govt Job Exams">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>SSC & Govt Job Exams</span><br><small>SSC, CGL 2018,SSC,CHSL,SSC Steno,Railways Recuirment </small></div>
				
				
				<li class="exam" data-item="GATE and PSU Jobs">
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="GATE and PSU Jobs">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>GATE and PSU Jobs</span><br><small>GATE,BARC,SSC,IE,ISRO</small></div>
				</li>
				
				<li class="exam" data-item="JEE & BITSAT">
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="JEE & BITSAT">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>JEE & BITSAT</span><br><small>JEE Main,JEE Advanced,BITSAT,UPSEE,SRMEEE</small></div>
				</li>
				
				
				<li class="exam" data-item="Medical Entrance">
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="Medical Entrance">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>Medical Entrance</span><br><small>NEET,LIG,AIMMS,JIPMER</small></div>
				</li>
				
				
				<li class="exam" data-item="UPSE & State Services">
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="UPSE & State Services">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>UPSE & State Services</span><br><small>UPSC Pre,State PSE</small></div>
				</li>
				
				
				<li class="exam" data-item="UPSC Pre,State PSE">
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="UPSC Pre,State PSE">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/jan-sendereks.jpg')?>"></div>	
				<div class="col-md-9"><span>UPSC Pre,State PSE</span><br><small>CAT, IIFT, XAT, NMAT, MAT, CMAT, General</small></div>
				</li>
				
				
				<li class="exam" data-item="Teaching Exams">
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="Teaching Exams">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/damir-bosnjak.jpg')?>"></div>	
				<div class="col-md-9"><span>Teaching Exams</span><br><small>KVS,CTET,NVS,UPTET,Army teacher recruitment</small></div>
				</li>
				
				
				<li class="exam" data-item="NET">
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="NET">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/default-avatar.png')?>"></div>	
				<div class="col-md-9"><span>NET</span><br><small>UGC,NET,CSIR,NET,MP,SET</small></div>
				</li>
				
				
				<li class="exam" data-item="Defence Exams">
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="Defence Exams">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>Defence Exams</span><br><small>Combined Civil Services(CDS),AFCAT</small></div>
				</li>
				
				
			</ul>
        
        
       	 
        <div class="form-group">
        	<input type="hidden" name="examdata" class="examdata">
            <button type="submit" name="submit" class="btn btn-success btn-block login-btn">Sign in</button>
        </div>
        <div class="clearfix">
        </div>  
    </form>
</div>
</body>
</html> 
<script>

$(document).ready(function(){
	var exam_prefer = '';
	$(".exam").click(function(){
		exam_prefer += $(this).attr('data-item');
		exam_prefer = exam_prefer + ",";
	});	
	
	var exams_prepair = '';
	$(".exams_prepair").click(function(){
		exams_prepair += $(this).attr('data-item');
		exams_prepair = exams_prepair + ",";
	});
	
		
	$(".btn-success").click(function(){
		var exam = '';
		if(exam_prefer != ''){
			exam = exam_prefer;
		}else{
			exam = exams_prepair;
		}
		$(".examdata").val(exam);
	}); 	
}); 		
</script>      

