<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Sign in Form with Social Login Buttons</title>
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
    <form action="<?php // echo url('/'). '/registerresult'; ?>" method="post">
    @csrf
        <h2 class="text-center">Sign up</h2>        
        <div class="text-center social-btn">
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Name" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="number" class="form-control" name="phone" placeholder="Phone" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>        
        <p>Which exam you are prepair for: Ask for the interest, give options to choose form </p>
        <ul id="easySelectable">
				<li>
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>
				<input type="hidden" class="bank_insurance" name="exams_prepair[]" value="Bank & Insurance"> 	
				<div class="col-md-9"><span>Bank & Insurance</span><br><small>IBPS,PO,RBI Assistant,SBI SO,NABARD</small></div></li>
				
				<li>
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<input type="hidden" class="ssc_govt" name="exams_prepair[]" value="SSC & Govt Job Exams" > 	
				<div class="col-md-9"><span>SSC & Govt Job Exams</span><br><small>SSC, CGL 2018,SSC,CHSL,SSC Steno,Railways Recuirment </small></div>
				
				
				<li>
				<input type="hidden" class="gate_psu" name="exams_prepair[]" value="GATE and PSU Jobs"> 	
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>GATE and PSU Jobs</span><br><small>GATE,BARC,SSC,IE,ISRO</small></div>
				</li>
				
				<li>
				<input type="hidden" class="JEE_BITSAT" name="exams_prepair[]" value="JEE & BITSAT"> 	
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span></span><br><small>JEE Main,JEE Advanced,BITSAT,UPSEE,SRMEEE</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="medical" name="exams_prepair[]" value="Medical Entrance"> 	
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>Medical Entrance</span><br><small>NEET,LIG,AIMMS,JIPMER</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="upsc" name="exams_prepair[]" value="UPSE & State Services"> 	
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>UPSE & State Servuies</span><br><small>UPSC Pre,State PSE</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="upsc_pre" name="exams_prepair[]" value="UPSC Pre,State PSE">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/jan-sendereks.jpg')?>"></div>	
				<div class="col-md-9"><span>UPSC Pre,State PSE</span><br><small>CAT, IIFT, XAT, NMAT, MAT, CMAT, General</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="teaching" name="exams_prepair[]" value="Teaching Exams">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/damir-bosnjak.jpg')?>"></div>	
				<div class="col-md-9"><span>Teaching Exams</span><br><small>KVS,CTET,NVS,UPTET,Army teacher recruitment</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="NET" name="exams_prepair[]" value="NET">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/default-avatar.png')?>"></div>	
				<div class="col-md-9"><span>NET</span><br><small>UGC,NET,CSIR,NET,MP,SET</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="defence" name="exams_prepair[]" value="Defence Exams">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>Defence Exams</span><br><small>Combined Civil Services(CDS),AFCAT</small></div>
				</li>
				
				
			</ul>
			
        <div class="or-seperator"><i>or</i></div>
        <h3>My Exam Preference</h3>
        
        
        <ul id="easySelectable22">
				<li>
				<input type="hidden" class="exams_prefer1" name="exams_prefer[]" value="Bank & Insurance">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>Bank & Insurance</span><br><small>IBPS,PO,RBI Assistant,SBI SO,NABARD</small></div></li>
				
				<li>
				<input type="hidden" class="exams_prefer2" name="exams_prefer[]" value="SSC & Govt Job Exams">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>SSC & Govt Job Exams</span><br><small>SSC, CGL 2018,SSC,CHSL,SSC Steno,Railways Recuirment </small></div>
				
				
				<li>
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="GATE and PSU Jobs">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>GATE and PSU Jobs</span><br><small>GATE,BARC,SSC,IE,ISRO</small></div>
				</li>
				
				<li>
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="JEE & BITSAT">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>JEE & BITSAT</span><br><small>JEE Main,JEE Advanced,BITSAT,UPSEE,SRMEEE</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="Medical Entrance">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>Medical Entrance</span><br><small>NEET,LIG,AIMMS,JIPMER</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="UPSE & State Services">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>UPSE & State Services</span><br><small>UPSC Pre,State PSE</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="UPSC Pre,State PSE">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/jan-sendereks.jpg')?>"></div>	
				<div class="col-md-9"><span>UPSC Pre,State PSE</span><br><small>CAT, IIFT, XAT, NMAT, MAT, CMAT, General</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="Teaching Exams">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/damir-bosnjak.jpg')?>"></div>	
				<div class="col-md-9"><span>Teaching Exams</span><br><small>KVS,CTET,NVS,UPTET,Army teacher recruitment</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="NET">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/default-avatar.png')?>"></div>	
				<div class="col-md-9"><span>NET</span><br><small>UGC,NET,CSIR,NET,MP,SET</small></div>
				</li>
				
				
				<li>
				<input type="hidden" class="exams_prefer" name="exams_prefer[]" value="Defence Exams">
				<div class="col-md-3"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-9"><span>Defence Exams</span><br><small>Combined Civil Services(CDS),AFCAT</small></div>
				</li>
				
				
			</ul>
        
        
       	 
        <div class="form-group">
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
	$(".btn-success").click(function(){
					var item = [];
					$( ".es-selected" ).(function() {
						var hhhh = $( "li.es-selected").val();
    					var selimg = $('li.es-selected .exams_prepair').val();
    					item.push(selimg);
						alert(hhhh);						
  					});
					
					
					}); 	
					}); 	
</script>      