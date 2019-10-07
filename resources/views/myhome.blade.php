<?php
$client_id = '907492391618-sisr29fpepr75outbfu24run4hb74evr.apps.googleusercontent.com';
define('CLIENT_SECRET', 'BenQi81CeG3OTcKus2sKL6SM');
$url = 'http://easydatasearch.com/easydata2/education/public/home';
$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode($url) . '&response_type=code&client_id=' . $client_id . '&access_type=online'; 
?>

@extends('layouts.masterhome')

@section('content')
   
   <div class="flex flex-column">
      <section class="flex flex-grow-1 justify-around ehlr ph3 pv3 flex-column flex-row-l relative">
	 <div class="fixed-width-container flex flex-row-l flex-column z-1">
	    <div class="flex flex-column w-60-l w-100" style="padding-top:90px">
	       <h1 class="white mb0 mt0">Why Exams21 ?</h1>
	       <br>
	       <h3 class="white"><li class="mar_left_3">Latest and most relevant study material</li></h3>
	       <h3 class="white mt0"><li class="mar_left_3">Test series based on latest exam pattern</li></h3>
	       <h3 class="white mt0"><li class="mar_left_3">Personalized training for students of all levels</li></h3>
	       <h3 class="white mt0"><li class="mar_left_3">Timely notification of exams, admit cards & results etc.</li></h3>
	       <h3 class="white mt0"><li class="mar_left_3">Detailed analysis of Test results to find key focus areas</li></h3>
	    </div>
	    <div class="flex w-40-l w-100">
	       <div class="auth__body loginform flex-column auth__body--login br2 bg-white w-100 dn">
		  <section class="flex flex-shrink-0">
		     <header class="auth__header js-auth-login flex-grow-1 flex items-center justify-between">
			<div class="flex flex-column">
			   <p class="auth__header__heading b green mv0 f3">Login to Education</p>
			   <p class="mv0 f6">To Score Better in your exam </p>
			</div>
		     </header>
		  </section>
		  <section class="flex flex-shrink-0 auth__social justify-between mv3">
		  <span style="transition:opacity 0.5s;opacity:0.6">
		  <!-- <button type="button" class="">Facebook</button> -->
		  <a href="facebook/fbconfig.php" class="auth__facebook relative auth__social__btn disabled ma0 tc pointer tracked-sm outline-0 b bg-blue white pa3 w-100 bn medium" >Facebook</a>
		  </span>
		  
		  <!-- <button type="button" class="">Google</button> -->
		  <a href="<?php echo $login_url ?>" class="auth__google flex items-center relative auth__social__btn disabled ma0 b tc pointer tracked-sm bg-white black ba b--near-white pa3" >Google</a>
		  </section>
		  <p class="tc mt1 mb3">OR</p>
		  <section class="flex flex-column">
		     <form id="loginForm" method="post" action="{{ url('/') . '/loginresult' }}">
		     @csrf
			<div class="auth__form-group mb4 relative"><input type="email" required="" autoComplete="email" class="auth__field outline-0 f6 db w-100 pa2 ba b--black-10" name="email" value="" placeholder="Email" /><!--<label class="green f5 b ph1 ph0-l">Email</label>--></div>
			<div class="auth__form-group mb2 relative"><input type="password" required="" autoComplete="current-password" class="auth__field outline-0 f6 db w-100 pa2 ba b--black-10" name="password" value="" Placeholder="Password" /><!--<label class="green f5 b ph1 ph0-l">Password</label>--></div>
			<input type="hidden" name="deviceType" value="web" />
			<p class="auth__forgot-password flex justify-end mv3 silver fw1 f6"><a class="js-auth-forgot-psswd pointer red">Forgot Password?</a></p>
			<input type="submit" value="LOGIN" class="btn auth__button js-auth-login bg-dlg-gradient white bn db f4 fw1 outline-0 w-100 tc"  />
			<a class="auth__body__register-text js-auth-toggle homeregister pointer link green tc db mt3">Not a User? REGISTER using Email</a>
		     </form>
		  </section>
	       </div>
	       <div class="auth__body registerform flex-column auth__body--login br2 bg-white w-100 flex">
		  <section class="flex flex-shrink-0">
		     <header class="auth__header js-auth-register flex-grow-1 flex items-center justify-between">
			<div class="flex flex-column">
			   <p class="auth__header__heading green b mv0 f3">Create an Account</p>
			   <p class="mv0 f6">To Score Better in your exam </p>
			</div>
		     </header>
		  </section>
		  <section class="flex flex-shrink-0 auth__social justify-between mv3">
		  <span style="transition:opacity 0.5s;opacity:0.6">
		 <!-- <button type="button" class="auth__facebook relative auth__social__btn disabled ma0 tc pointer tracked-sm outline-0 b bg-blue white pa3 w-100 bn medium">Facebook</button> -->
		 <a href="facebook/fbconfig.php" class="auth__facebook relative auth__social__btn disabled ma0 tc pointer tracked-sm outline-0 b bg-blue white pa3 w-100 bn medium" >Facebook</a>
		  </span>
		 <!-- <button type="button" class="auth__google flex items-center relative auth__social__btn disabled ma0 b tc pointer tracked-sm bg-white black ba b--near-white pa3">Google</button> -->
		 <a href="<?php echo $login_url ?>" class="auth__google flex items-center relative auth__social__btn disabled ma0 b tc pointer tracked-sm bg-white black ba b--near-white pa3" >Google</a>
		  </section>
		  <p class="tc mt1 mb3">OR</p>
		  <section class="flex flex-column">
		     <form id="signupForm">
		     @csrf
			<div class="auth__form-group mb4 relative homeloginemail"><input type="text" required="" name="name"  id="uname" autoComplete="name" class="auth__field outline-0  f6 db w-100 pa2 b--black-10 ba" value="" placeholder="Name" /><!--<label class="green f5 ph1 ph0-l">Name</label>--></div>
			<div class="auth__form-group mb4 relative"><input type="email" required="" name="email" id="uemail" autoComplete="email" class="auth__field outline-0 f6 db w-100 pa2 b--black-10 ba" value="" placeholder="Email" /><!--<label class="green f5 ph1 ph0-l">Email</label>--></div>
			<div class="auth__form-group mb4 relative"><input type="password" required="" autoComplete="new-password" id="upwd" name="password" class="auth__field outline-0 f6 pb1 db w-100 pa2 ba b--black-10" value="" placeholder="Password" /><!--<label class="green f5 ph1 ph0-l">Password</label>--></div>
			<input type="hidden" name="deviceType" value="web" /><input type="submit" value="REGISTER" class="btn auth__button js-auth-register bg-dlg-gradient white bn db f4 fw1 outline-0 w-100 tc" />
			<a class="auth__body__login-text homelogin js-auth-toggle pointer link green tc db mt3">Already Registered? LOGIN</a>
		     </form>
		  </section>
	       </div>
	    </div>
	 </div>
      </section>
            
            
      <section class="pb2">
	  <h3 class="green tc mv4 head">Select your exam</h3>
		  <div class="justify-around gray ph1 ph5-l bb b--black-10 overflow-hidden">
			  
			  <span class="flex overflow-auto">
				  <span class="flex pointer w-10-l justify-center hover-green pb3 ph2 flex-shrink-0 ph0-l upcoming" >Upcoming</span>
				  <span class="flex pointer w-10-l justify-center hover-green pb3 ph2 flex-shrink-0 ph0-l banking">Banking</span>
				  <span class="flex pointer w-10-l justify-center hover-green pb3 ph2 flex-shrink-0 ph0-l ssc">SSC</span>
				  <span class="flex pointer w-10-l justify-center hover-green pb3 ph2 flex-shrink-0 ph0-l teaching">Teaching</span>
				  <span class="flex pointer w-10-l justify-center hover-green pb3 ph2 flex-shrink-0 ph0-l jee">JEE</span>
				  <span class="flex pointer w-10-l justify-center hover-green pb3 ph2 flex-shrink-0 ph0-l gate">GATE</span>
				  <span class="flex pointer w-10-l justify-center hover-green pb3 ph2 flex-shrink-0 ph0-l medical">Medical</span>
				  <span class="flex pointer w-10-l justify-center hover-green pb3 ph2 flex-shrink-0 ph0-l upsc">UPSC</span>
				  <span class="flex pointer w-10-l justify-center hover-green pb3 ph2 flex-shrink-0 ph0-l state">State Exams</span>
				  <span class="flex pointer w-10-l justify-center hover-green pb3 ph2 flex-shrink-0 ph0-l defence">Defence</span>
			  </span>
			  
		  </div>
		  <div class="ph5-l ph2 flex-wrap pt4 dn upcoming-child">
			  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/ibps-po"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1470818818206-18.png" alt="IBPS PO" /></span><span>IBPS PO</span></a>
			  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/ibps-clerk"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1470818818206-18.png" alt="IBPS Clerk" /></span><span>IBPS Clerk</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/rrb-ntpc"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1523278131220-80.png" alt="RRB NTPC" /></span><span>RRB NTPC</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/ssc-cgl"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2016/8/img1470917301523-57-rs.png" alt="SSC CGL" /></span><span>SSC CGL</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/ssc-chsl"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1471410940440-15.png" alt="SSC CHSL" /></span><span>SSC CHSL</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-je"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2016/8/img1470917301523-57-rs.png" alt="SSC JE" /></span><span>SSC JE</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/rrb-group-d"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1523278131220-80.png" alt="RRB Group D" /></span><span>RRB Group D</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/ctet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1467094801126-40.png" data-src="" alt="CTET" /></span><span>CTET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/uptet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1464850251602-80.png" data-src="" alt="UPTET" /></span><span>UPTET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/gate"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/gate-img1529910709846-84.png-rs-high-webp.png" alt="GATE 2020" /></span><span>GATE 2020</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering/jee-main"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1473338023387-94.png" alt="JEE Main 2020" /></span><span>JEE Main 2020</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/medical/neet-2020"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2017/3/neet-img1490765337919-72-rs-high-webp.png" alt="NEET 2020" /></span><span>NEET 2020</span></a>
				  </div>
				  <div class="ph5-l ph2 flex-wrap pt4 dn banking-child">
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/all-banking-exam-img1529910452948-13.png-rs-high-webp.png" alt="All exams" /></span><span>All exams</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/indian-bank-po"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1481789568728-98.png" alt="Indian Bank PO" /></span><span>Indian Bank PO</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/all-banking-exam-img1529910452948-13.png-rs-high-webp.png" alt="All exams" /></span><span>All exams</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/indian-bank-po"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1481789568728-98.png" alt="Indian Bank PO" /></span><span>Indian Bank PO</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/sbi-po"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1440744531411-93.png" alt="SBI PO" /></span><span>SBI PO</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/sbi-clerk"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1459919512822-70.png" alt="SBI Clerk" /></span><span>SBI Clerk</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/ibps-po"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1470818818206-18.png" alt="IBPS PO" /></span><span>IBPS PO</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/ibps-clerk"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1470818818206-18.png" alt="IBPS Clerk" /></span><span>IBPS Clerk</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/ibps-rrb"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1470818818206-18.png" alt="IBPS RRB" /></span><span>IBPS RRB</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/rbi-assistant"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1470825202373-12.png" alt="RBI Assistant" /></span><span>RBI Assistant</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/rbi-officer-grade-b"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1470825202373-12.png" alt="RBI Grade B" /></span><span>RBI Grade B</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/niacl"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1478692099557-63.png" data-src="" alt="NIACL" /></span><span>NIACL</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/lic-aao"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1470825244991-73.png" alt="LIC AAO" /></span><span>LIC AAO</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/banking-insurance/bob-manipal-po"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1470829952601-32.png" alt="BOB Manipal" /></span><span>BOB Manipal</span></a>
				  </div>
				  <div class="ph5-l ph2 flex-wrap pt4 dn ssc-child">
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/ssc-img1529910608753-38.png-rs-high-webp.png" alt="SSC" /></span><span>SSC</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/ssc-img1529910608753-38.png-rs-high-webp.png" alt="SSC" /></span><span>SSC</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/ssc-cgl"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2016/8/img1470917301523-57-rs.png" alt="SSC CGL" /></span><span>SSC CGL</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/ssc-chsl"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1471410940440-15.png" alt="SSC CHSL" /></span><span>SSC CHSL</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/ssc-mts"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1471411357610-73.png" alt="SSC MTS" /></span><span>SSC MTS</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/ssc-cpo-exam"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1471411357610-73.png" alt="SSC CPO" /></span><span>SSC CPO</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/ssc-steno-grade-c-d"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2016/8/img1470917301523-57-rs.png" alt="SSC Steno" /></span><span>SSC Steno</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/rrb-group-d"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1523278131220-80.png" alt="RRB Group D" /></span><span>RRB Group D</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/rrb-alp"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1523278087921-87.png" alt="RRB ALP" /></span><span>RRB ALP</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/rpf"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1526898903566-62.png" alt="RPF" /></span><span>RPF</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-railways/ssc-gd-constable"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2016/8/img1470917301523-57-rs.png" alt="SSC GD" /></span><span>SSC GD</span></a>
				  </div>
				  <div class="ph5-l ph2 flex-wrap pt4 dn teaching-child">
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/teaching-img1529910640205-82.png-rs-high-webp.png" alt="TET" /></span><span>TET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/ctet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1467094801126-40.png" alt="CTET" /></span><span>CTET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/ctet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1467094801126-40.png" alt="CTET" /></span><span>CTET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/dsssb"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1502180500620-88.png" alt="DSSSB" /></span><span>DSSSB</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/kvs-exams"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2016/9/img1474540038099-31-rs.png" alt="KVS" /></span><span>KVS</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/nvs-exams"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1474538848229-84.png" alt="NVS" /></span><span>NVS</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/uptet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1464850251602-80.png" alt="UP TET" /></span><span>UP TET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/bihar-tet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1466425703922-70.png" alt="BTET" /></span><span>BTET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/htet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/12/screenshot-2018-12-21-at-3-img1545387500435-75.png-rs-high-webp.png" alt="HTET" /></span><span>HTET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/rajasthan-tet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1466504010416-51.png" alt="RTET" /></span><span>RTET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/hp-tet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1466669723964-11.png" alt="HPTET" /></span><span>HPTET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/tntet"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1489125997335-11.png" data-src="" alt="TNTET" /></span><span>TNTET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/tet/army-teacher-recruitment"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1472800592629-85.png" alt="Army" /></span><span>Army</span></a>
				  </div>	
				  <div class="ph5-l ph2 flex-wrap pt4 dn jee-child">
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/jee-img1529910665888-86.png-rs-high-webp.png" alt="All exams" /></span><span>All exams</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/jee-img1529910665888-86.png-rs-high-webp.png" alt="All exams" /></span><span>All exams</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering/jee-main"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1473338023387-94.png" alt="JEE Main 2020" /></span><span>JEE Main 2020</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering/jee-advanced"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1473315655432-43.png" alt="JEE Advanced" /></span><span>JEE Advanced</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering/bitsat"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1473312148930-96.png" alt="BITSAT" /></span><span>BITSAT</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering/viteee"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1478754723973-17.png" alt="VITEEE" /></span><span>VITEEE</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering/srmeee"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1478331987835-78.png" data-src="" alt="SRMEEE" /></span><span>SRMEEE</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering/upsee"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1478158838160-26.png" alt="UPSEE" /></span><span>UPSEE</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering/wbjee"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1478840727355-94.png" alt="WBJEE" /></span><span>WBJEE</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/engineering/kvpy"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1501914135050-61.png" alt="KVPY" /></span><span>KVPY</span></a>
   
				  </div>
				  <div class="ph5-l ph2 flex-wrap pt4 dn gate-child">
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/gate"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/gate-img1529910709846-84.png-rs-high-webp.png" alt="GATE 2020" /></span><span>GATE 2020</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/rrb-je"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1523278131220-80.png" alt="RRB JE" /></span><span>RRB JE</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/ssc-je"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2016/8/img1470917301523-57-rs.png" alt="SSC JE" /></span><span>SSC JE</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/computer-science-engineering"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/gate_cs_116px-01-img1529910818684-25.png-rs-high-webp.png" alt="Computer Science" /></span><span>Computer Science</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/mechanical-engineering"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/gate_me_116px-img1529910841272-66.png-rs-high-webp.png" alt="Mechanical" /></span><span>Mechanical</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/civil-engineering"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/gate_ce_116px-img1529910862143-23.png-rs-high-webp.png" alt="Civil" /></span><span>Civil</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/electronics-communication"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/gate_ec_116px-img1529910880307-16.png-rs-high-webp.png" alt="Electronics &amp; Communication" /></span><span>Electronics &amp; Communication</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/electrical-engineering"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/gate_ee_116px-img1529910896608-82.png-rs-high-webp.png" alt="Electrical" /></span><span>Electrical</span></a>
				  </div>
				  <div class="ph5-l ph2 flex-wrap pt4 dn medical-child">
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/medical"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/medicsl-img1529910922311-62.png-rs-high-webp.png" alt="All exams" /></span><span>All exams</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/medical"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/medicsl-img1529910922311-62.png-rs-high-webp.png" alt="All exams" /></span><span>All exams</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/medical/neet-2020"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2017/3/neet-img1490765337919-72-rs-high-webp.png" alt="NEET" /></span><span>NEET</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/medical/aiims"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1494850700853-69.png" alt="AIIMS" /></span><span>AIIMS</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/medical/jipmer"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1494851660614-45.png" alt="JIPMER" /></span><span>JIPMER</span></a>
				  </div>
				  <div class="ph5-l ph2 flex-wrap pt4 dn upsc-child">
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/upsc-civil-services"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/upsc-img1529910949203-72.png-rs-high-webp.png" alt="UPSC" /></span><span>UPSC</span></a>
				  </div>
				  <div class="ph5-l ph2 flex-wrap pt4 dn state-child">
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/all-state-exam-img1529919886124-75.png-rs-high-webp.png" alt="All exams" /></span><span>All exams</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/dfccil"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gradeup-question-images.grdp.co/liveData/f/2018/7/DFCCIL.jpg-93.jpg" alt="DFCCIL" /></span><span>DFCCIL</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/upsc-civil-services"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/upsc-img1529910949203-72.png-rs-high-webp.png" alt="UPSC" /></span><span>UPSC</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/upsc-civil-services/mppsc"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1496301768305-20.png" alt="MPPSC" /></span><span>MPPSC</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/upsc-civil-services/uppsc-pcs"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1464850287320-69.png" alt="UPPSC PCS" /></span><span>UPPSC PCS</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/upsc-civil-services/bpsc-pt-pre"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gradeup-question-images.grdp.co/liveData/f/2018/8/bpsc-pt.jpg-10.jpg" alt="BPSC PT" /></span><span>BPSC PT</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/upsc-civil-services/ias-exam"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1464249620352-92.png" alt="IAS" /></span><span>IAS</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/upsc-civil-services/ras-rpsc"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1522926221214-26.png" alt="RPSC" /></span><span>RPSC</span></a>
				  </div>
		      <div class="ph5-l ph2 flex-wrap pt4 dn defence-child">
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/defence-exams/nda"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-groups-images.grdp.co/grpimg1523605498592-38.png" data-src="" alt="NDA" /></span><span>NDA</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/all-state-exam-img1529919886124-75.png-rs-high-webp.png" alt="All exams" /></span><span>All exams</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/dfccil"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gradeup-question-images.grdp.co/liveData/f/2018/7/DFCCIL.jpg-93.jpg" alt="DFCCIL" /></span><span>DFCCIL</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/up-police"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/up-polic-img1529911036788-38.png-rs-high-webp.png" alt="UP Police" /></span><span>UP Police</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/bihar-police"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/group-3-img1529911054522-61.png-rs-high-webp.png" alt="Bihar Police" /></span><span>Bihar Police</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/rajasthan-police"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/12/screenshot-2018-12-21-at-3-img1545387500435-75.png-rs-high-webp.png" data-src="https://gs-post-images.grdp.co/2018/6/rp-img1529911073652-30.png-rs-high-webp.png" alt="Rajasthan Police" /></span><span>Rajasthan Police</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/telangana-ts-police"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/td-polic-img1529911188196-11.png-rs-high-webp.png" alt="TS Police" /></span><span>TS Police</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/cg-police"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/12/screenshot-2018-12-21-at-3-img1545387500435-75.png-rs-high-webp.png" data-src="https://gs-post-images.grdp.co/2018/6/cg-polic-img1529911214934-86.png-rs-high-webp.png" alt="CG Police" /></span><span>CG Police</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/mp-vyapam-group-2"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2017/10/madhya_pradesh_emblem-img1507878315490-55.jpg-rs-high-webp.jpg" alt="MP Vyapam Group 2" /></span><span>MP Vyapam Group 2</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/odisha-police"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gradeup-question-images.grdp.co/liveData/f/2018/7/odisha-police.jpg-16.jpg" data-src="" alt="Odisha Police" /></span><span>Odisha Police</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/uttarakhand-forest-guard"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/uksssc-img1529911279833-28.png-rs-high-webp.png" alt="UK Forest Guard" /></span><span>UK Forest Guard</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/up-gram-panchayat-adhikari-vdo"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/up-vdo-img1529911299962-45.png-rs-high-webp.png" alt="UP VDO" /></span><span>UP VDO</span></a>
					  <a class="pa2 no-underline gray flex box-hover box-shadow items-center w-24-l w-31 mb3 flex-grow-0 flex-column flex-row-l mh1" href="/recruitment/igcar"><span class="br-100 w2-5 h2-5 mh3 relative db overflow-hidden"><img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/6/igcar-img1529911340600-46.png-rs-high-webp.png" alt="IGCAR" /></span><span>IGCAR</span></a>
				  </div>
      </section>
            
            
      <section class="pa2 pa4-l relative flex mb0" style="background-color: rgb(240, 251, 250);">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
				  <h2><center>Success Stories</center></h2>
				  <ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				  <div class="item active">
					  <center>
						  <blockquote>"To achive any goal in life,you need motivateion. The <br>Bigger your dream the bigger is success"</blockquote>
						  <b>Pravin Kant, SSC CHSL Prelims 2017</b><br><b>Bharatpur, Rajesthan</b><br><br>
						  <small>Read More ></small><br>
					  </center>
				  </div>
				  <div class="item">
					  <center><blockquote>"To achive any goal in life,you need motivateion. The <br>Bigger your dream the bigger is success"</blockquote>
						  <b>Satyam Dubay, SSC CHSL Prelims 2017</b><br><b>Agra, Rajesthan</b><br><br>
						  <small>Read More ></small><br>
					  </center>
				  </div>
				  <div class="item">
					  <center>
						  <blockquote>"To achive any goal in life,you need motivateion. The <br>Bigger your dream the bigger is success"</blockquote>
						  <b>Vikas Sharm, SSC CHSL Prelims 2017</b><br><b>Jodhpur, Rajesthan</b><br><br>
						  <small>Read More ></small>
					  </center>
				  </div>
				  <br>
				  <div class="buttons">
					  <center>
						  <button style="background-color:orange;width: 250px;border: none;border-radius: 30px;color:white" class="forddm-control"><span class="fa fa-eye"></span>See All Stories</button>
						  <button class="form-codsdntrol" style="width: 250px;border: none;border-radius: 30px"><i class="fa fa-share-alt"></i>Share Your Videos</button>
					  </center>
				  </div>
				  </div>
				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Next</span>
				  </a>
			  </div>
      </section>
            
      <section class="pa2 pa4-l relative abc flex mb0" style="background-color: #E8F2F1;">  
	      <div class="row">
		      <div class="col-md-6">
			      <img src="{{ asset('images/coaching.jpg') }}" >	
		      </div>
		      <div class="col-md-6">
			      <h2>RUNNING A COACHING CENTRE ?</h2>
			      <br>
			      <p>Whatever Course You Teach, We have it!</p>
			      <div>
				      <span class="fa fa-book"></span>&nbsp;&nbsp;Comprehensive Courseware
			      </div>
			      <br>
			      <div>
				      <span class="fa fa-desktop"></span>&nbsp;&nbsp;Assessment as Per Real Exam
			      </div>
			      <br>
			      <div>
				      <span class="fa fa-users"></span>&nbsp;&nbsp;Advanced Center Management System
			      </div>
			      <br>
			      <input type="button" value="Know More" class="btn bg-dlg-gradient white bn f4">
		      </div>
	      </div>
      </section>
      </div>
   

   
<div id="myModal" class="modal fade elf" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
	 <div class="auth__body popuploginform flex-column auth__body--login br2 bg-white w-100 dn" style="display:block;">
	    <section class="flex flex-shrink-0">
	       <header class="auth__header js-auth-login flex-grow-1 flex items-center justify-between">
		  <div class="flex flex-column">
		     <p class="auth__header__heading b green mv0 f3">Login to Register</p>
		     <p class="mv0 f6">To Score Better in your exam </p>
		  </div>
	       </header>
	    </section>
	   <span class="auth__close-button">
		    <button type="button" class="close" data-dismiss="modal">&times;</button>
		  </span>
	    <section class="flex flex-shrink-0 auth__social justify-between mv3">
	    <span style="transition:opacity 0.5s;opacity:0.6">
	    <!-- <button type="button" class="">Facebook</button> -->
	    <a href="facebook/fbconfig.php" class="auth__facebook relative auth__social__btn disabled ma0 tc pointer tracked-sm outline-0 b bg-blue white pa3 w-100 bn medium" >Facebook</a>
	    </span>
	    
	    <!-- <button type="button" class="">Google</button> -->
	    <a href="<?php echo $login_url ?>" class="auth__google flex items-center relative auth__social__btn disabled ma0 b tc pointer tracked-sm bg-white black ba b--near-white pa3" >Google</a>
	    </section>
	    <p class="tc mt1 mb3">OR</p>
	    <section class="flex flex-column">
	       <form id="loginForm" method="post" action="{{ url('/') . '/loginresult' }}">
	       @csrf
		  <div class="auth__form-group mb4 relative"><input type="email" required="" autoComplete="email" class="auth__field outline-0 f6 db w-100 pa2 ba b--black-10" name="email" value="" placeholder="Email" /><!--<label class="green f5 b ph1 ph0-l">Email</label>--></div>
		  <div class="auth__form-group mb2 relative"><input type="password" required="" autoComplete="current-password" class="auth__field outline-0 f6 db w-100 pa2 ba b--black-10" name="password" value="" placeholder="Password" /><!--<label class="green f5 b ph1 ph0-l">Password</label>--></div>
		  <input type="hidden" name="deviceType" value="web" />
		  <p class="auth__forgot-password flex justify-end mv3 silver fw1 f6"><a class="js-auth-forgot-psswd pointer red">Forgot Password?</a></p>
		  <input type="submit" value="LOGIN" class="btn auth__button js-auth-login bg-dlg-gradient white bn db f4 fw1 outline-0 w-100 tc"  />
		  <a class="auth__body__register-text js-auth-toggle popuphomeregister pointer link green tc db mt3">Not a User? REGISTER using Email</a>
	       </form>
	    </section>
	 </div>
      
	 <div class="auth__body popupregisterform flex-column auth__body--login br2 bg-white w-100 flex" style="display:none;">
	    <section class="flex flex-shrink-0">
	       <header class="auth__header js-auth-register flex-grow-1 flex items-center justify-between">
		  <div class="flex flex-column">
		     <p class="auth__header__heading green b mv0 f3">Create an Account</p>
		     <p class="mv0 f6">To Score Better in your exam </p>
		  </div>
	       </header>
	    </section>
	    <span class="auth__close-button">
		    <button type="button" class="close" data-dismiss="modal">&times;</button>
		  </span>
	    <section class="flex flex-shrink-0 auth__social justify-between mv3">
	    <span style="transition:opacity 0.5s;opacity:0.6">
	   <!-- <button type="button" class="auth__facebook relative auth__social__btn disabled ma0 tc pointer tracked-sm outline-0 b bg-blue white pa3 w-100 bn medium">Facebook</button> -->
	   <a href="facebook/fbconfig.php" class="auth__facebook relative auth__social__btn disabled ma0 tc pointer tracked-sm outline-0 b bg-blue white pa3 w-100 bn medium" >Facebook</a>
	    </span>
	   <!-- <button type="button" class="auth__google flex items-center relative auth__social__btn disabled ma0 b tc pointer tracked-sm bg-white black ba b--near-white pa3">Google</button> -->
	   <a href="<?php echo $login_url ?>" class="auth__google flex items-center relative auth__social__btn disabled ma0 b tc pointer tracked-sm bg-white black ba b--near-white pa3" >Google</a>
	    </section>
	    <p class="tc mt1 mb3">OR</p>
	    <section class="flex flex-column">
	       <form id="signupForm">
	       @csrf
		  <div class="auth__form-group mb4 relative homeloginemail"><input type="text" required="" name="name"  id="uname" autoComplete="name" class="auth__field outline-0  f6 db w-100 pa2 b--black-10 ba" value="" placeholder="Name" /><!--<label class="green f5 ph1 ph0-l">Name</label>--></div>
		  <div class="auth__form-group mb4 relative"><input type="email" required="" name="email" id="uemail" autoComplete="email" class="auth__field outline-0 f6 db w-100 pa2 b--black-10 ba" value="" placeholder="Email" /><!--<label class="green f5 ph1 ph0-l">Email</label>--></div>
		  <div class="auth__form-group mb4 relative"><input type="password" required="" autoComplete="new-password" id="upwd" name="password" class="auth__field outline-0 f6 pb1 db w-100 pa2 ba b--black-10" value="" placeholder="Password" /><!--<label class="green f5 ph1 ph0-l">Password</label>--></div>
		  <input type="hidden" name="deviceType" value="web" /><input type="submit" value="REGISTER" class="btn auth__button js-auth-register bg-dlg-gradient white bn db f4 fw1 outline-0 w-100 tc" />
		  <a class="auth__body__login-text popuphomelogin js-auth-toggle pointer link green tc db mt3">Already Registered? LOGIN</a>
	       </form>
	    </section>
	 </div>
      </div>
    </div>
  </div>
</div>


<div id="myRegister" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
	 <h4 class="modal-title">Which Exam you have prepared for ?</h4>      
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
	 
      <div class="modal-body">
        <div class="row">
               <div class="exams_prepair" data-item="Bank & Insurance">
		  <input type="hidden" class="new_password" >
			  <div class="col-md-2"><img src="{{ asset('assets/img/apple-icon.png') }}"></div>
			  <div class="col-md-10"><span>Bank & Insurance</span><br><small>IBPS,PO,RBI Assistant,SBI SO,NABARD</small></div>
	       </div>

	       <div class="exams_prepair " data-item="SSC & Govt Job Exams">
		       <div class="col-md-2"><img src="{{ asset('assets/img/apple-icon.png') }}"></div>	
		       <div class="col-md-10"><span>SSC & Govt Job Exams</span><br><small>SSC, CGL 2018,SSC,CHSL,SSC Steno,Railways Recuirment </small></div>			
	       </div>	
        </div>
						
	 <div class="row">		
		 <div class=" exams_prepair" data-item="GATE and PSU Jobs">
			 
			 <div class="col-md-2"><img src="{{ asset('assets/img/apple-icon.png') }}"></div>	
			 <div class="col-md-10"><span>GATE and PSU Jobs</span><br><small>GATE,BARC,SSC,IE,ISRO</small></div>
			 </div>
			 
			 <div class=" exams_prepair"  data-item="JEE Main">
			 
			 <div class="col-md-2"><img src="{{ asset('assets/img/apple-icon.png') }}"></div>	
			 <div class="col-md-10"><span>JEE</span><br><small>JEE Main,JEE Advanced,BITSAT,UPSEE,SRMEEE</small></div>
			 </div>
	 </div>		
				
	 <div class="row">		
		 <div class="exams_prepair " data-item="Medical Entrance">
			 <div class="col-md-2"><img src="{{ asset('assets/img/apple-icon.png') }}"></div>	
			 <div class="col-md-10"><span>Medical Entrance</span><br><small>NEET,LIG,AIMMS,JIPMER</small></div>
		 </div>
			 
			 
		 <div class="exams_prepair " data-item="UPSE">
			 <div class="col-md-2"><img src="{{ asset('assets/img/apple-icon.png') }}"></div>	
			 <div class="col-md-10"><span>UPSE & State Servuies</span><br><small>UPSC Pre,State PSE</small></div>
		 </div>
	 </div>				
				
	 <div class="row">				
			 
			 <div class="exams_prepair " data-item="UPSC Pre">
			 
			 <div class="col-md-2"><img src="{{ asset('assets/img/apple-icon.png') }}"></div>	
			 <div class="col-md-10"><span>UPSC Pre,State PSE</span><br><small>CAT, IIFT, XAT, NMAT, MAT, CMAT, General</small></div>
			 </div>
			 
			 
			 <div class="exams_prepair " data-item="Teaching Exams">
			 
			 <div class="col-md-2"><img src="{{ asset('assets/img/apple-icon.png') }}"></div>	
			 <div class="col-md-10"><span>Teaching Exams</span><br><small>KVS,CTET,NVS,UPTET,Army teacher recruitment</small></div>
			 </div>
	 </div>							
				
	 <div class="row">						
			 <div class="exams_prepair " data-item="NET">
			 
			 <div class="col-md-2"><img src="{{ asset('assets/img/apple-icon.png') }}"></div>	
			 <div class="col-md-10"><span>NET</span><br><small>UGC,NET,CSIR,NET,MP,SET</small></div>
			 </div>
			 
			 
			 <div class="exams_prepair " data-item="Defence Exams">
			 
			 <div class="col-md-2"><img src="{{ asset('assets/img/apple-icon.png') }}"></div>	
			 <div class="col-md-10"><span>Defence Exams</span><br><small>Combined Civil Services(CDS),AFCAT</small></div>
			 </div>
	 </div>		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
   
   
@endsection
  
  
@section('script')
<script>
$(document).ready(function(){
  
  $(".upcoming").click(function(){
  	$(this).addClass('b--green bb bw2 green');
  	$('.banking').removeClass('b--green bb bw2 green');
  	$('.ssc').removeClass('b--green bb bw2 green');
  	$('.teaching').removeClass('b--green bb bw2 green');
  	$('.jee').removeClass('b--green bb bw2 green');
  	$('.gate').removeClass('b--green bb bw2 green');
  	$('.medical').removeClass('b--green bb bw2 green');
  	$('.upsc').removeClass('b--green bb bw2 green');
  	$('.state').removeClass('b--green bb bw2 green');
  	$('.defence').removeClass('b--green bb bw2 green');
  	$('.upcoming-child').addClass('flex');  
  	$('.banking-child').removeClass('flex');  
  	$('.banking-child').addClass('dn');  
  	$('.ssc-child').removeClass('flex');  
  	$('.ssc-child').addClass('dn');  
  	$('.teaching-child').removeClass('flex');  
  	$('.teaching-child').addClass('dn');  
  	$('.jee-child').removeClass('flex');  
  	$('.jee-child').addClass('dn');  
  	$('.gate-child').removeClass('flex');  
  	$('.gate-child').addClass('dn');  
  	$('.medical-child').removeClass('flex');  
  	$('.medical-child').addClass('dn');  
  	$('.upsc-child').removeClass('flex');  
  	$('.upsc-child').addClass('dn');  
  	$('.state-child').removeClass('flex');  
  	$('.state-child').addClass('dn');  
  	$('.defence-child').removeClass('flex');  
  	$('.defence-child').addClass('dn');  
  });
  
  
  $(".banking").click(function(){
  	$(this).addClass('b--green bb bw2 green');
  	$('.upcoming').removeClass('b--green bb bw2 green');
  	$('.ssc').removeClass('b--green bb bw2 green');
  	$('.teaching').removeClass('b--green bb bw2 green');
  	$('.jee').removeClass('b--green bb bw2 green');
  	$('.gate').removeClass('b--green bb bw2 green');
  	$('.medical').removeClass('b--green bb bw2 green');
  	$('.upsc').removeClass('b--green bb bw2 green');
  	$('.state').removeClass('b--green bb bw2 green');
  	$('.defence').removeClass('b--green bb bw2 green');
  	$('.banking-child').addClass('flex');  
  	$('.upcoming-child').removeClass('flex');  
  	$('.upcoming-child').addClass('dn');  
  	$('.ssc-child').removeClass('flex');  
  	$('.ssc-child').addClass('dn');  
  	$('.teaching-child').removeClass('flex');  
  	$('.teaching-child').addClass('dn');  
  	$('.jee-child').removeClass('flex');  
  	$('.jee-child').addClass('dn');  
  	$('.gate-child').removeClass('flex');  
  	$('.gate-child').addClass('dn');  
  	$('.medical-child').removeClass('flex');  
  	$('.medical-child').addClass('dn');  
  	$('.upsc-child').removeClass('flex');  
  	$('.upsc-child').addClass('dn');  
  	$('.state-child').removeClass('flex');  
  	$('.state-child').addClass('dn');  
  	$('.defence-child').removeClass('flex');  
  	$('.defence-child').addClass('dn');  
  });
  
  
  $(".ssc").click(function(){
  	$(this).addClass('b--green bb bw2 green');
  	$('.upcoming').removeClass('b--green bb bw2 green');
  	$('.banking').removeClass('b--green bb bw2 green');
  	$('.teaching').removeClass('b--green bb bw2 green');
  	$('.jee').removeClass('b--green bb bw2 green');
  	$('.gate').removeClass('b--green bb bw2 green');
  	$('.medical').removeClass('b--green bb bw2 green');
  	$('.upsc').removeClass('b--green bb bw2 green');
  	$('.state').removeClass('b--green bb bw2 green');
  	$('.defence').removeClass('b--green bb bw2 green');
  	$('.ssc-child').addClass('flex');  
  	$('.upcoming-child').removeClass('flex');  
  	$('.upcoming-child').addClass('dn');  
  	$('.banking-child').removeClass('flex');  
  	$('.banking-child').addClass('dn');  
  	$('.teaching-child').removeClass('flex');  
  	$('.teaching-child').addClass('dn');  
  	$('.jee-child').removeClass('flex');  
  	$('.jee-child').addClass('dn');  
  	$('.gate-child').removeClass('flex');  
  	$('.gate-child').addClass('dn');  
  	$('.medical-child').removeClass('flex');  
  	$('.medical-child').addClass('dn');  
  	$('.upsc-child').removeClass('flex');  
  	$('.upsc-child').addClass('dn');  
  	$('.state-child').removeClass('flex');  
  	$('.state-child').addClass('dn');  
  	$('.defence-child').removeClass('flex');  
  	$('.defence-child').addClass('dn');  
  });
  
  
  $(".teaching").click(function(){
  	$(this).addClass('b--green bb bw2 green');
  	$('.upcoming').removeClass('b--green bb bw2 green');
  	$('.ssc').removeClass('b--green bb bw2 green');
  	$('.banking').removeClass('b--green bb bw2 green');
  	$('.jee').removeClass('b--green bb bw2 green');
  	$('.gate').removeClass('b--green bb bw2 green');
  	$('.medical').removeClass('b--green bb bw2 green');
  	$('.upsc').removeClass('b--green bb bw2 green');
  	$('.state').removeClass('b--green bb bw2 green');
  	$('.defence').removeClass('b--green bb bw2 green');
  	$('.teaching-child').addClass('flex');  
  	$('.upcoming-child').removeClass('flex');  
  	$('.upcoming-child').addClass('dn');  
  	$('.ssc-child').removeClass('flex');  
  	$('.ssc-child').addClass('dn');  
  	$('.banking-child').removeClass('flex');  
  	$('.banking-child').addClass('dn');  
  	$('.jee-child').removeClass('flex');  
  	$('.jee-child').addClass('dn');  
  	$('.gate-child').removeClass('flex');  
  	$('.gate-child').addClass('dn');  
  	$('.medical-child').removeClass('flex');  
  	$('.medical-child').addClass('dn');  
  	$('.upsc-child').removeClass('flex');  
  	$('.upsc-child').addClass('dn');  
  	$('.state-child').removeClass('flex');  
  	$('.state-child').addClass('dn');  
  	$('.defence-child').removeClass('flex');  
  	$('.defence-child').addClass('dn');  
  });
  
  $(".jee").click(function(){
  	$(this).addClass('b--green bb bw2 green');
  	$('.upcoming').removeClass('b--green bb bw2 green');
  	$('.ssc').removeClass('b--green bb bw2 green');
  	$('.teaching').removeClass('b--green bb bw2 green');
  	$('.banking').removeClass('b--green bb bw2 green');
  	$('.gate').removeClass('b--green bb bw2 green');
  	$('.medical').removeClass('b--green bb bw2 green');
  	$('.upsc').removeClass('b--green bb bw2 green');
  	$('.state').removeClass('b--green bb bw2 green');
  	$('.defence').removeClass('b--green bb bw2 green');
  	$('.jee-child').addClass('flex');  
  	$('.upcoming-child').removeClass('flex');  
  	$('.upcoming-child').addClass('dn');  
  	$('.ssc-child').removeClass('flex');  
  	$('.ssc-child').addClass('dn');  
  	$('.teaching-child').removeClass('flex');  
  	$('.teaching-child').addClass('dn');  
  	$('.banking-child').removeClass('flex');  
  	$('.banking-child').addClass('dn');  
  	$('.gate-child').removeClass('flex');  
  	$('.gate-child').addClass('dn');  
  	$('.medical-child').removeClass('flex');  
  	$('.medical-child').addClass('dn');  
  	$('.upsc-child').removeClass('flex');  
  	$('.upsc-child').addClass('dn');  
  	$('.state-child').removeClass('flex');  
  	$('.state-child').addClass('dn');  
  	$('.defence-child').removeClass('flex');  
  	$('.defence-child').addClass('dn');  
  });
  
  $(".gate").click(function(){
  	$(this).addClass('b--green bb bw2 green');
  	$('.upcoming').removeClass('b--green bb bw2 green');
  	$('.ssc').removeClass('b--green bb bw2 green');
  	$('.teaching').removeClass('b--green bb bw2 green');
  	$('.jee').removeClass('b--green bb bw2 green');
  	$('.banking').removeClass('b--green bb bw2 green');
  	$('.medical').removeClass('b--green bb bw2 green');
  	$('.upsc').removeClass('b--green bb bw2 green');
  	$('.state').removeClass('b--green bb bw2 green');
  	$('.defence').removeClass('b--green bb bw2 green');
  	$('.gate-child').addClass('flex');  
  	$('.upcoming-child').removeClass('flex');  
  	$('.upcoming-child').addClass('dn');  
  	$('.ssc-child').removeClass('flex');  
  	$('.ssc-child').addClass('dn');  
  	$('.teaching-child').removeClass('flex');  
  	$('.teaching-child').addClass('dn');  
  	$('.jee-child').removeClass('flex');  
  	$('.jee-child').addClass('dn');  
  	$('.banking-child').removeClass('flex');  
  	$('.banking-child').addClass('dn');  
  	$('.medical-child').removeClass('flex');  
  	$('.medical-child').addClass('dn');  
  	$('.upsc-child').removeClass('flex');  
  	$('.upsc-child').addClass('dn');  
  	$('.state-child').removeClass('flex');  
  	$('.state-child').addClass('dn');  
  	$('.defence-child').removeClass('flex');  
  	$('.defence-child').addClass('dn');  
  });
  
  $(".medical").click(function(){
  	$(this).addClass('b--green bb bw2 green');
  	$('.upcoming').removeClass('b--green bb bw2 green');
  	$('.ssc').removeClass('b--green bb bw2 green');
  	$('.teaching').removeClass('b--green bb bw2 green');
  	$('.jee').removeClass('b--green bb bw2 green');
  	$('.gate').removeClass('b--green bb bw2 green');
  	$('.banking').removeClass('b--green bb bw2 green');
  	$('.upsc').removeClass('b--green bb bw2 green');
  	$('.state').removeClass('b--green bb bw2 green');
  	$('.defence').removeClass('b--green bb bw2 green');
  	$('.medical-child').addClass('flex');  
  	$('.upcoming-child').removeClass('flex');  
  	$('.upcoming-child').addClass('dn');  
  	$('.ssc-child').removeClass('flex');  
  	$('.ssc-child').addClass('dn');  
  	$('.teaching-child').removeClass('flex');  
  	$('.teaching-child').addClass('dn');  
  	$('.jee-child').removeClass('flex');  
  	$('.jee-child').addClass('dn');  
  	$('.gate-child').removeClass('flex');  
  	$('.gate-child').addClass('dn');  
  	$('.banking-child').removeClass('flex');  
  	$('.banking-child').addClass('dn');  
  	$('.upsc-child').removeClass('flex');  
  	$('.upsc-child').addClass('dn');  
  	$('.state-child').removeClass('flex');  
  	$('.state-child').addClass('dn');  
  	$('.defence-child').removeClass('flex');  
  	$('.defence-child').addClass('dn');  
  });
  
  $(".upsc").click(function(){
  	$(this).addClass('b--green bb bw2 green');
  	$('.upcoming').removeClass('b--green bb bw2 green');
  	$('.ssc').removeClass('b--green bb bw2 green');
  	$('.teaching').removeClass('b--green bb bw2 green');
  	$('.jee').removeClass('b--green bb bw2 green');
  	$('.gate').removeClass('b--green bb bw2 green');
  	$('.medical').removeClass('b--green bb bw2 green');
  	$('.upsc').removeClass('b--green bb bw2 green');
  	$('.state').removeClass('b--green bb bw2 green');
  	$('.defence').removeClass('b--green bb bw2 green');
  	$('.upsc-child').addClass('flex');  
  	$('.upcoming-child').removeClass('flex');  
  	$('.upcoming-child').addClass('dn');  
  	$('.ssc-child').removeClass('flex');  
  	$('.ssc-child').addClass('dn');  
  	$('.teaching-child').removeClass('flex');  
  	$('.teaching-child').addClass('dn');  
  	$('.jee-child').removeClass('flex');  
  	$('.jee-child').addClass('dn');  
  	$('.gate-child').removeClass('flex');  
  	$('.gate-child').addClass('dn');  
  	$('.medical-child').removeClass('flex');  
  	$('.medical-child').addClass('dn');  
  	$('.banking-child').removeClass('flex');  
  	$('.banking-child').addClass('dn');  
  	$('.state-child').removeClass('flex');  
  	$('.state-child').addClass('dn');  
  	$('.defence-child').removeClass('flex');  
  	$('.defence-child').addClass('dn');  
  });
  
  $(".state").click(function(){
  	$(this).addClass('b--green bb bw2 green');
  	$('.upcoming').removeClass('b--green bb bw2 green');
  	$('.ssc').removeClass('b--green bb bw2 green');
  	$('.teaching').removeClass('b--green bb bw2 green');
  	$('.jee').removeClass('b--green bb bw2 green');
  	$('.gate').removeClass('b--green bb bw2 green');
  	$('.medical').removeClass('b--green bb bw2 green');
  	$('.upsc').removeClass('b--green bb bw2 green');
  	$('.banking').removeClass('b--green bb bw2 green');
  	$('.defence').removeClass('b--green bb bw2 green');
  	$('.state-child').addClass('flex');  
  	$('.upcoming-child').removeClass('flex');  
  	$('.upcoming-child').addClass('dn');  
  	$('.ssc-child').removeClass('flex');  
  	$('.ssc-child').addClass('dn');  
  	$('.teaching-child').removeClass('flex');  
  	$('.teaching-child').addClass('dn');  
  	$('.jee-child').removeClass('flex');  
  	$('.jee-child').addClass('dn');  
  	$('.gate-child').removeClass('flex');  
  	$('.gate-child').addClass('dn');  
  	$('.medical-child').removeClass('flex');  
  	$('.medical-child').addClass('dn');  
  	$('.upsc-child').removeClass('flex');  
  	$('.upsc-child').addClass('dn');  
  	$('.banking-child').removeClass('flex');  
  	$('.banking-child').addClass('dn');  
  	$('.defence-child').removeClass('flex');  
  	$('.defence-child').addClass('dn');  
  });
  
  $(".defence").click(function(){
  	$(this).addClass('b--green bb bw2 green');
  	$('.upcoming').removeClass('b--green bb bw2 green');
  	$('.ssc').removeClass('b--green bb bw2 green');
  	$('.teaching').removeClass('b--green bb bw2 green');
  	$('.jee').removeClass('b--green bb bw2 green');
  	$('.gate').removeClass('b--green bb bw2 green');
  	$('.medical').removeClass('b--green bb bw2 green');
  	$('.upsc').removeClass('b--green bb bw2 green');
  	$('.state').removeClass('b--green bb bw2 green');
  	$('.banking').removeClass('b--green bb bw2 green');
  	$('.defence-child').addClass('flex');  
  	$('.upcoming-child').removeClass('flex');  
  	$('.upcoming-child').addClass('dn');  
  	$('.ssc-child').removeClass('flex');  
  	$('.ssc-child').addClass('dn');  
  	$('.teaching-child').removeClass('flex');  
  	$('.teaching-child').addClass('dn');  
  	$('.jee-child').removeClass('flex');  
  	$('.jee-child').addClass('dn');  
  	$('.gate-child').removeClass('flex');  
  	$('.gate-child').addClass('dn');  
  	$('.medical-child').removeClass('flex');  
  	$('.medical-child').addClass('dn');  
  	$('.upsc-child').removeClass('flex');  
  	$('.upsc-child').addClass('dn');  
  	$('.state-child').removeClass('flex');  
  	$('.state-child').addClass('dn');  
  	$('.banking-child').removeClass('flex');  
  	$('.banking-child').addClass('dn');  
  });
   
});
   
</script>
   
  
<script>
	$(document).ready(function(){
	//	$(".elf .auth__body__login-text").hide();
		$(".popuploginlink").hide();
		$(".popuploginbutton").hide();
		
		$(".elf .loginemail").hide();
		
		var loginpath = "<?php echo url('/'). '/loginresult'; ?>";
		var registerpath = "<?php echo url('/'). '/registerresult'; ?>";
		$(".elf .auth__body__register-text").click(function(){
			
			$(this).hide();
   			$(".popuploginlink").show();
   			$(".popuploginbutton").show();
			$(".elf .js-auth-register").show();
			$(".elf .loginemail").show();
			$(".elf .js-auth-login").hide();
			$(".elf .re").show();
			$(".elf .le").show();
			$(".js-auth-forgot-psswd").hide();
			
			//$("#loginForm").attr('action',loginpath);
	   	});
	   	$(".elf .auth__body__login-text").click(function(){
			$(this).hide();
   			$(".elf .auth__body__register-text").show();
			$(".elf .js-auth-register").hide();
			$(".elf .loginemail").hide();
			$(".elf .js-auth-login").show();
			$(".elf p.le").show();
			$(".elf p.re").hide();
			//$("#loginForm").attr('action',loginpath);
	   	});		
	   	
	   	
	   	$(".homelogin").click(function(){
			$(".loginform").show();
			$(".registerform").hide();
	   	});
	   	$(".homeregister").click(function(){
	   		$(".loginform").hide();
			$(".registerform").show();
	   	});	
	   	
	   	$(".popuphomelogin").click(function(){
			$(".popuploginform").show();
			$(".popupregisterform").hide();
	   	});
	   	$(".popuphomeregister").click(function(){
	   		$(".popuploginform").hide();
			$(".popupregisterform").show();
			$(".popuphomelogin").show();
	   	});	
	   	
	   	
   	});	
   	
   	$(".exams_prepair").click(function(){
   		$(this).css('border','1px solid red');
   		var exam = $(this).attr('data-item');
   		var _token =  "<?php echo csrf_token() ?>";
   		var new_password = $(".new_password").val();
   		var url = "<?php echo url('/'). '/registerresult'; ?>";
   		$.ajax({
   			method: 'post',
			url: url,
			data: "exam="+exam+"&_token="+_token+"&new_password="+new_password+"+&status=exam",
		}).done(function(response) {
			alert(response);
		});
   		
   	});	
   	
   	$(".js-auth-register").click(function(e){
   		e.preventDefault();
   		var uname = $("#uname").val();
   		var uemail = $("#uemail").val();
   		var upwd = $("#upwd").val();
   		var _token =  "<?php echo csrf_token() ?>";
   		var url = "<?php echo url('/'). '/registerresult'; ?>";
   		
   		$.ajax({
			method: 'post',
			url: url,
			data: "name="+uname+"&email="+uemail+"&password="+upwd+"&_token="+_token,
		}).done(function(response) {
			
			$('.new_password').val(upwd);
			$('#myRegister').modal('show');
		}); 
   	});	
   	
</script>
@endsection 