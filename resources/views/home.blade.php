<?php 
$id = Auth::user()->id;
if($id != ''){
	$client_id = '907492391618-sisr29fpepr75outbfu24run4hb74evr.apps.googleusercontent.com';
define('CLIENT_SECRET', 'BenQi81CeG3OTcKus2sKL6SM');
$url = 'http://easydatasearch.com/easydata2/education/public/home';
$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode($url) . '&response_type=code&client_id=' . $client_id . '&access_type=online'; 

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=yes" />
      <meta property="fb:pages" content="658783224252671,1499553353670220" />
      <meta name="theme-color" content="#45b97c" />
      <meta name="apple-mobile-web-app-title" content="Education" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-status-bar-style" content="#45b97c" />
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo asset('assets/css/home.css')?>" rel="stylesheet" />  
   </head>
   <body>
      <div id="__next">
         <header class="flex flex-column main-nav fixed top-0 left-0 w-100 z-10 transition-all">
            <div class="main-header">
               <div class="flex fixed-width-container items-center main-header-item">
                  <div class="main-header__logo flex">
                     <a class="main-header__logo-link flex" href="{{ url('/') . '/public/home' }}">
                        Education
                     </a>
                  </div>
                  <div class="main-header__all-exam-link">
                     <a class="header-menu-item__link flex flex-column items-center pointer  no-underline"> 
                     	<i class="glyphicon glyphicon-th-large"></i>	

                        <!--<svg class="db svg-fn svg-s-silver" viewBox="0 0 20.4 20.7" style="width:20px;height:25px"></svg> -->
                        <span class="anchor-label header_item_label all-exams gray f7 lh-solid mt1">All Exams</span>
                     </a>
                     <div class="main-header__all-exams__menu fixed-width-container js-sub-menu all-exams-container absolute center left-0 right-0 db o-0" style="max-height:none;visibility:hidden">
                        <nav class="flex box-shadow">
                           <ul class="all-exams-options flex flex-column list w-25 bg-white pa0 ma0">
                              <li data-section-id="section-0" class="all-exams-option bank">
                                 <a class="link gray pointer ma0 db"><span>Bank</span></a>
                              </li>
                              <li data-section-id="section-1" class="all-exams-option ssc"><a class="link gray pointer ma0 db"><span>SSC</span></a></li>
                              <li data-section-id="section-2" class="all-exams-option teaching"><a class="link gray pointer ma0 db"><span>Teaching</span></a></li>
                              <li data-section-id="section-3" class="all-exams-option jee_neet"><a class="link gray pointer ma0 db"><span>JEE/NEET</span></a></li>
                              <li data-section-id="section-4" class="all-exams-option gate"><a class="link gray pointer ma0 db"><span>GATE</span></a></li>
                              <li data-section-id="section-5" class="all-exams-option law_exams"><a class="link gray pointer ma0 db"><span>Law Exams</span></a></li>
                              <li data-section-id="section-6" class="all-exams-option upsc"><a class="link gray pointer ma0 db"><span>UPSC</span></a></li>
                              <li data-section-id="section-7" class="all-exams-option defense"><a class="link gray pointer ma0 db"><span>Defence</span></a></li>
                              <li data-section-id="section-8" class="all-exams-option state"><a class="link gray pointer ma0 db"><span>State Exams</span></a></li>
                              <li data-section-id="section-9" class="all-exams-option net"><a class="link gray pointer ma0 db"><span>NET</span></a></li>
                              <li data-section-id="section-10" class="all-exams-option test_series"><a class="link gray pointer ma0 db"><span>Test Series/Courses</span></a></li>
                           </ul>
                           <div class="all-exam-sections w-75 bank_next" data-section-id="section-0">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">IBPS</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance">Banking</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/ibps-po">IBPS PO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/ibps-clerk">IBPS Clerk</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/ibps-rrb">IBPS RRB</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/ibps-so">IBPS SO</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">SBI</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/sbi-po">SBI PO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/sbi-clerk">SBI Clerk</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/sbi-so">SBI SO</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Insurance</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/insurance-exams">Insurance Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/lic-assistant">LIC Assistant 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/lic-hfl">LIC HFL 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/lic-aao">LIC AAO 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/lic-ado">LIC ADO 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/niacl">NIACL Assistant</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/niacl-ao">NIACL AO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/nicl">NICL</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Other Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/fci-manager">FCI Manager</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/epfo">EPFO Assistant</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/idbi-assistant-manager">IDBI Bank Assistant Manager</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/rbi-officer-grade-b">RBI Grade B</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/rbi-assistant">RBI Assistant</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/bob-manipal-po">BOB Manipal PO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/indian-bank-po">Indian Bank PO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/canara-bank">Canara Bank PO</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Related Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance-l-daily-gk-update-i-ijh1viet">Daily GK Updates</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/practice/quiz/banking-insurance/current-affairs">Current Affairs Quiz 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/general-awareness/financial-awareness">Banking Awareness</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/quantitative-aptitude">Quantitative Aptitude</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/reasoning-ability">Reasoning Ability</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/notifications">Upcoming Bank Exams 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ibps-po-syllabus-exam-pattern-2019-i">IBPS PO Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ibps-rrb-syllabus-2019-i">IBPS RRB Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ibps-rrb-exam-pattern-2019-i">IBPS RRB Exam Pattern</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ibps-clerk-syllabus-exam-pattern-i">IBPS Clerk Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ibps-po-cut-off-i">IBPS PO Cut off</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ibps-clerk-cut-off-i">IBPS Clerk Cut off</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/lic-assistant-syllabus-exam-pattern-i">LIC Assistant Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/banking-insurance/lic-assistant-apply-online-2019">LIC Assistant Apply Online 2019</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 ssc_next dn" data-section-id="section-1">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">SSC &amp; Railway</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways">SSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/ssc-cgl">SSC CGL</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/ssc-chsl">SSC CHSL</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/ssc-mts">SSC MTS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/ssc-cpo-exam">SSC CPO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/ssc-steno-grade-c-d">SSC Stenographer</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/ssc-gd-constable">SSC GD Constable</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/rrb-group-d">RRB Group D</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/rrb-alp">RRB ALP</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/rrb-ntpc">RRB NTPC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/rpf">RPF</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Other Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/fci">FCI 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/ib-recruitment">IB Recruitment</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/railway-apprentice">Railway Apprentice</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Syllabus &amp; Cutoff</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-cgl-syllabus-exam-pattern-i">SSC CGL Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-chsl-syllabus-exam-pattern-i">SSC CHSL Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-gd-constable-syllabus-i">SSC GD Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-cpo-syllabus-exam-pattern-i">SSC CPO Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-mts-syllabus-exam-pattern-i">SSC MTS Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/rrb-ntpc-syllabus-exam-pattern-i">RRB NTPC Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/rrb-group-d-syllabus-exam-pattern-i">Railway Group D Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-cgl-cut-off-2018-i">SSC CGL Cut Off</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-chsl-cut-off-2018-i">SSC CHSL Cut Off</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/rrb-group-d-admit-card">RRB Group D Admit Card</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/rrb-ntpc-admit-card">RRB NTPC Admit Card</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-railways/ssc-cgl-study-material">SSC CGL Study Material</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-gd-constable-cut-off-2019-i">SSC GD Constable Cut Off</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-2">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">TET Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet">TET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/ctet">CTET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/uptet">UPTET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/htet">HTET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/utet">UTET</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">B. Ed Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/up-b-ed">UP B.Ed</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Other Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/up-tgt-pgt">UP TGT PGT 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/kvs-exams">KVS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/nvs-exams">NVS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/dsssb">DSSSB</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/up-lt-grade">UP LT Grade</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/up-btc-updeled">UP BTC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet/up-assistant-teacher">UP Assistant Teacher</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ctet-syllabus-i">CTET Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ctet-question-papers-i">CTET Question Paper</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-ctet">CTET Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/uptet-syllabus-i">UPTET Syllabus 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-kvs">KVS Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ctet-online-coaching">Best Course for CTET</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-3">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">JEE</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/engineering">Engineering Entrance Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/engineering/jee-main">JEE Main 2020</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/engineering/jee-main-registration">JEE Main Registration</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/jee-advanced-college-predictor-i">How to fill JEE Main Application Form</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/engineering/jee-advanced">JEE Advanced</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/engineering/exams">All Engg. Entrance Exams</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">NEET</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/medical">Medical Entrance Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/medical/neet-2020">NEET 2020</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/medical/aiims">AIIMS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/medical/jipmer">JIPMER</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Subjects</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/engineering/physics">Physics</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/engineering/chemistry">Chemistry</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/engineering/maths">Mathematics</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">NEET Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/neet-syllabus-i">NEET Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/neet-physics-syllabus-i">NEET Physics Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/neet-chemistry-syllabus-i">NEET Chemistry Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/neet-biology-syllabus-2020-i">NEET Biology Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/neet-question-papers-i">NEET Question Paper</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">JEE Resources</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/jee-main-eligibility-criteria-i">JEE Main Eligibility</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/engineering/jee-main-question-papers-2019">JEE Main Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/jee-main-books-i">JEE Main Books</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/best-books-for-iit-jee-advanced-i">IIT JEE Advanced Books</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/how-to-prepare-for-jee-main-without-coaching-i">JEE Main Preparation 2020</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Syllabus</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/jee-main-syllabus-i">JEE Main Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/jee-main-physics-syllabus-i">JEE Main Physics Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/jee-main-maths-syllabus-i">JEE Main Maths Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/jee-main-chemistry-syllabus-i">JEE Main Chemistry Syllabus</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-4">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">GATE Exam</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate">GATE 2020</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-syllabus-i">GATE Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-question-paper-i">GATE Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/computer-science-engineering/gate-cse">GATE CSE</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/civil-engineering/gate-ce">GATE Civil</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/mechanical-engineering/gate-me">GATE Mechanical</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/electronics-communication/gate-ece">GATE ECE</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/electrical-engineering/gate-ee">GATE Electrical</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-gate-mechanical">GATE Mechanical Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-gate-cse">GATE CSE Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-gate-civil-engineering">GATE Civil Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-gate-electrical">GATE EE Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-gate-ece">GATE ECE Mock Test</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">SSC JE Exam</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-je">SSC JE 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-je-syllabus-i">SSC JE Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-je-question-paper-i">SSC JE Question Papers</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Engineering</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/mechanical-engineering">Mechanical Engg</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/civil-engineering">Civil Engg</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/electrical-engineering">Electrical Engg</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/electronics-communication">Electronics &amp; Comm.</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/computer-science-engineering">Computer Science Engg.</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/civil-engineering/ese-ies-exam-ce">ESE IES Exam CE 2020</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ese-2020-notification-i">ESE 2020 Notification</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Important Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-me-syllabus-i">GATE ME Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-electrical-engineering-syllabus-i">GATE Electrical Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-syllabus-for-cse-i">GATE CSE Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-syllabus-for-ece-i">GATE ECE Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-civil-engineering-syllabus-i">GATE Civil Engineering Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/psu-recruitment-through-gate-i">PSU through GATE 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-me-question-papers-i">GATE Mechanical Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-ee-question-papers-i">GATE EE Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-cse-question-papers-i">GATE CSE Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-ece-question-papers-i">GATE ECE Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-ce-question-papers-i">GATE Civil Engineering Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-mock-test-series-gate">GATE Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-mock-test-series-ssc-je">SSC JE Test Series</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-5">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/law-entrance-exams">Law Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/law-entrance-exams/clat">CLAT 2020</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/clat-syllabus-exam-pattern-i">CLAT Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/clat-eligibility-criteria-i">CLAT Eligibility</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/clat-maths-preparation-i-d1953290-26a7-11e8-9fa3-2c59b57122cc">CLAT Maths Preparation</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/best-books-for-clat-exam-preparation-i">CLAT Books</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/how-to-prepare-logical-reasoning-for-clat-exam-i">CLAT Logical Reasoning Preparation</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-6">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services">UPSC Civil Services</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/ias-exam">IAS Exam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/uppsc-pcs">UPPSC PCS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/bpsc-pt-pre">BPSC PT Exam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/mppsc">MPPSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/ukpsc">UKPSC Exam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/haryana-psc">Haryana PSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/jpsc">JPSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/rpsc-ras">RPSC RAS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/mpsc">MPSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/cgpsc-2020">CGPSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-civil-services/exams">All Exams</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/yearly-current-affair-2019-pdf-i">Yearly Current Affairs 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/state-wise-current-affairs-i">State Wise Current Affairs</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/practice/quiz/upsc-civil-services/current-affairs">UPSC Current Affairs Quiz</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/mppsc-syllabus-i">MPPSC Syllabus 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-online-coaching">UPSC Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/bpsc-online-coaching">BPSC Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/uppsc-pcs-online-coaching">UPPSC PCS Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-uppsc">UPPSC Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-bpsc">BPSC Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/up-gk-in-hindi-i">UP GK in Hindi</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/mp-gk-in-hindi-i">MP GK in Hindi</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-7">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/defence-exams">Defence Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/defence-exams/cds">CDS Exam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/defence-exams/afcat">AFCAT Exam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/defence-exams/indian-air-force-x-y-group">Air Force Group X &amp; Y</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/defence-exams/nda">NDA 2 2019</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Important Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/defence-jobs-i">Defence Jobs</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/cds-2-2019-notification-i">CDS 2 2019 Notification </a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/cds-2-2019-application-form-i">CDS 2 2019 Applicaton Form</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/cds-syllabus-exam-pattern-i">CDS Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/cds-eligibility-i">CDS Eligibility</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/cds-salary-i">CDS Salary</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/cds-online-coaching">CDS Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/capf-admit-card-2019-i">CAPF Admit Card 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/nda-cut-off-i">NDA Cut Off 2018</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Other Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-afcat">AFCAT Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-cds">CDS Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-indian-airforce-xy">Indian Air Force Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/defence-online-coaching">Defence Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/cds-online-coaching">CDS Online Coaching</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-8">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment">State Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/up-lekhpal">UP Lekhpal</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/delhi-police">Delhi Police Constable 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/up-police">UP Police SI 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/bihar-police">Bihar Police SI 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/haryana-police">Haryana Police</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/rajasthan-police">Rajasthan Police</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/telangana-ts-police">TS Police </a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/ap-police">AP Police</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/up-gram-panchayat-adhikari-vdo">UP Gram Panchayat Adhikari/VDO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/ap-grama-sachivalayam">AP Grama Sachivalayam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/karnataka-police">Karnataka Police Recruitment</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Other Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/haryana-police">Haryana Police</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/upsssc-forest-guard">UPSSSC Forest Guard</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/hssc-clerk">HSSC Clerk</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/haryana-patwari">Haryana Patwari</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/haryana-gram-sachiv">Haryana Gram Sachiv</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ap-grama-volunteer-notification-2019-i">AP Grama Volunteer Notification 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/cisf-head-constable">CISF</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/haryana-canal-patwari">Haryana Canal Patwari</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/fssai">FSSAI</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/india-post-gramin-dak-sevak">India Post GDS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/mmrda-mumbai-metro">MMRDA Mumbai Metro</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/dsssb-fire-operator">DSSSB Fire Operator</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/bihar-police-si-syllabus-exam-pattern-i">Bihar Police SI Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/cisf-head-constable-syllabus-i">CISF Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/haryana-police-constable-si-syllabus-exam-pattern-i">Haryana Police Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ap-grama-sachivalayam-syllabus-i">AP Grama Sachivalayam Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/recruitment/up-vdo-result-2019">UP VDO Result 2019</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-9">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">About Exam</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/net-jrf/ugc-net">UGC NET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/net-jrf/csir-net">CSIR NET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ugc-net-eligibility-i">UGC NET Eligibility</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ugc-net-syllabus-i">UGC NET Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ugc-net-exam-pattern-i">UGC NET Exam Pattern</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ugc-net-question-papers-i">UGC NET Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ugc-net-selection-process-i">UGC NET Selection Process</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ugc-net-final-answer-key-2019-i">UGC NET Final Answer Key 2019</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-10">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Banking</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series/banking-insurance">Bank Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-sbi-po">SBI PO Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-sbi-clerk">SBI Clerk Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-ibps-rrb">IBPS RRB Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-ibps-po">IBPS PO Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-ibps-clerk">IBPS Clerk Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-rbi-grade-b">RBI Grade B Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-lic-assistant">LIC Assistant Test Series</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Courses</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/bank-online-coaching">Bank Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-online-coaching">SSC Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/tet-online-coaching">TET Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/defence-online-coaching">Defence Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/upsc-online-coaching">UPSC Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/civil-engineering-online-coaching">Civil Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/medical-online-coaching">Medical Exams Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/medical-online-coaching">Medical Exams Online Coaching</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">SSC &amp; Railway</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series/ssc-railways">SSC Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-ssc-cgl">SSC CGL Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-ssc-chsl">SSC CHSL Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-ssc-mts">SSC MTS Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-rrb-ntpc">RRB NTPC Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-ssc-cpo">SSC CPO Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-rrb-group-d">RRB Group D Test Series</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Courses</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/engineering-entrance-online-coaching">Engineering Exams Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/electrical-engineering-online-coaching">Electrical Exams Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ece-online-coaching">ECE Exams Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/computer-science-online-coaching">Computer Science Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/mechanical-engineering-online-coaching">Mechanical Exams Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/gate-me-online-coaching">GATE ME Online Coaching</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Others</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-ctet">CTET Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-up-tet">UPTET Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-bitsat">BITSAT Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-ugc-net">UGC NET Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-cds">CDS Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-bpsc">BPSC Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-afcat">AFCAT Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/online-test-series-dsssb">DSSSB Mock Test</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Upcoming Courses</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/jee-main-online-coaching">JEE Main Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/neet-online-coaching">NEET Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/uptet-online-coaching">UPTET Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ssc-cgl-online-coaching">SSC CGL Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/uppsc-pcs-online-coaching">UPPSC Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/cds-online-coaching">CDS Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="/ibps-clerk-online-coaching">IBPS Clerk Online Coaching</a></li>
                                 </ul>
                              </div>
                           </div>
                        </nav>
                     </div>
                  </div>
                  <div class="db dn-l ml-auto mr1 menu-click-cont">
                     <svg class="db svg-fn svg-s-silver" viewBox="0 0 30 30" style="width:32;height:32"></svg>
                  </div>
                  <div class="mr2 db dn-l menu-click-cont">
                     <svg class="db svg-fn svg-s-silver" viewBox="0 0 30 30" style="width:32;height:32"></svg>
                  </div>
                  <div class="main-header__search-box searchInputClosed">
                     <form id="searchBoxForm" action="/search" method="GET"><input type="search" required="" id="search" name="search" placeholder="Search here..." class="outline-0 nunito" value="" /></form>
                     <div class="search-overlay"></div>
                     <label for="search" class="flex flex-column items-center align-icon mt1">
                        <svg class="db svg-s-silver search-icon" viewBox="0 0 48 48" style="width:22;height:22"></svg>
                        

                     </label>
                  </div>
                  <div class="dn flex-l flex-auto-l"></div>
                  <div class="db-l dn header-menu-item main-header__store relative h-100 ml2 test-series">
                     <div class="header-menu-item main-header__store relative h-100">
                        <div class="dd-menu self-center relative dd-menu-center  ">
                           <a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 ts">
                              <span class="glyphicon glyphicon-list-alt"></span>
                              <div class="flex header_item_label">
                                 <span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Test Series</span>
                                 <div class="relative"><span class="db ml1 gray">▾</span></div>
                              </div>
                           </a>
                           <div class="dd-menu-items z-7">
                              <ul class="dd-items-center ts-ul" style="max-height:0px;border-width:0px">
                                 
                                 
                                 <li><a class="relative" href="/online-test-series/banking-insurance"><span class="absolute f6 green" style="left: 3%;">•</span><span class="f5">Bank &amp; Insurance</span></a></li><li><a class="relative" href="/online-test-series/ssc-railways"><span class="f5">SSC &amp; Govt Jobs</span></a></li><li><a class="relative" href="/online-test-series/tet"><span class="f5">CTET &amp; Teaching Exams</span></a></li><li><a class="relative" href="/online-test-series/mechanical-engineering"><span class="f5">GATE ME &amp; PSU</span></a></li><li><a class="relative" href="/online-test-series/computer-science-engineering"><span class="f5">GATE CS &amp; PSU</span></a></li><li><a class="relative" href="/online-test-series/electrical-engineering"><span class="f5">GATE EE &amp; PSU</span></a></li><li><a class="relative" href="/online-test-series/electronics-communication"><span class="f5">GATE ECE &amp; PSU</span></a></li><li><a class="relative" href="/online-test-series/civil-engineering"><span class="f5">GATE CE &amp; PSU</span></a></li><li><a class="relative" href="/online-test-series/engineering"><span class="f5">JEE &amp; BITSAT</span></a></li><li><a class="relative" href="/online-test-series/defence-exams"><span class="f5">CDS &amp; Defence Exams </span></a></li><li><a class="relative" href="/online-test-series/net-jrf"><span class="f5">NET</span></a></li><li><a class="relative" href="/online-test-series/medical"><span class="f5">NEET &amp; AIIMS</span></a></li><li><a class="relative" href="/online-test-series/upsc-civil-services"><span class="f5">UPSC &amp; State Services</span></a></li><li><a class="relative" href="/online-test-series/law-entrance-exams"><span class="f5">CLAT &amp; Law Exams</span></a></li><li><a class="no-underline relative f5" href="/online-test-series">All Exams</a></li>
                                 
                                 
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="db-l dn header-menu-item main-header__practice relative h-100 classroom">
                     <div class="header-menu-item main-header__store relative h-100">
                        <div class="dd-menu self-center relative dd-menu-center  ">
                           <a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 cr">
                              
                              <span class="glyphicon glyphicon-bullhorn"></span>
                              <div class="flex header_item_label">
                                 <span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Classroom</span>
                                 <div class="relative"><span class="db ml1 gray">▾</span></div>
                              </div>
                           </a>
                           <div class="dd-menu-items z-7">
                              <ul class="dd-items-center  cr-ul" style="max-height:0px;border-width:0px">
                                 <li><a class="relative" href="/bank-online-coaching"><span class="absolute f6 green" style="left: 3%;">•</span><span class="f5">Bank &amp; Insurance</span></a></li><li><a class="relative" href="/ssc-online-coaching"><span class="f5">SSC &amp; Govt Jobs</span></a></li><li><a class="relative" href="/engineering-entrance-online-coaching"><span class="f5">JEE &amp; BITSAT</span></a></li><li><a class="relative" href="/tet-online-coaching"><span class="f5">CTET &amp; Teaching Exams</span></a></li><li><a class="relative" href="/computer-science-online-coaching"><span class="f5">GATE CS &amp; PSU</span></a></li><li><a class="relative" href="/mechanical-engineering-online-coaching"><span class="f5">GATE ME &amp; PSU</span></a></li><li><a class="relative" href="/medical-online-coaching"><span class="f5">NEET &amp; AIIMS</span></a></li><li><a class="relative" href="/defence-online-coaching"><span class="f5">CDS &amp; Defence Exams </span></a></li><li><a class="relative" href="/civil-engineering-online-coaching"><span class="f5">GATE CE &amp; PSU</span></a></li><li><a class="relative" href="/upsc-online-coaching"><span class="f5">UPSC &amp; State Services</span></a></li><li><a class="relative" href="/electrical-engineering-online-coaching"><span class="f5">GATE EE &amp; PSU</span></a></li><li><a class="relative" href="/ece-online-coaching"><span class="f5">GATE ECE &amp; PSU</span></a></li><li><a class="relative" href="/class-10-online-coaching"><span class="f5">Class 10th</span></a></li><li><a class="no-underline relative f5" href="/online-coaching">All Exams</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="db-l dn header-menu-item main-header__practice relative h-100 free-videos">
                     <div class="header-menu-item main-header__store relative h-100">
                        <div class="dd-menu self-center relative dd-menu-center  ">
                           <a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 fv">
								<span class="glyphicon glyphicon-expand"></span>
                              <div class="flex header_item_label">
                                 <span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Free Videos</span>
                                 <div class="relative"><span class="db ml1 gray">▾</span></div>
                              </div>
                           </a>
                           <div class="dd-menu-items z-7">
                              <ul class="dd-items-center  fv-ul" style="max-height:0px;border-width:0px">
                                 <li><a class="relative" href="/bank-online-coaching"><span class="absolute f6 green" style="left: 3%;">•</span><span class="f5">Bank &amp; Insurance</span></a></li><li><a class="relative" href="/ssc-online-coaching"><span class="f5">SSC &amp; Govt Jobs</span></a></li><li><a class="relative" href="/engineering-entrance-online-coaching"><span class="f5">JEE &amp; BITSAT</span></a></li><li><a class="relative" href="/tet-online-coaching"><span class="f5">CTET &amp; Teaching Exams</span></a></li><li><a class="relative" href="/computer-science-online-coaching"><span class="f5">GATE CS &amp; PSU</span></a></li><li><a class="relative" href="/mechanical-engineering-online-coaching"><span class="f5">GATE ME &amp; PSU</span></a></li><li><a class="relative" href="/medical-online-coaching"><span class="f5">NEET &amp; AIIMS</span></a></li><li><a class="relative" href="/defence-online-coaching"><span class="f5">CDS &amp; Defence Exams </span></a></li><li><a class="relative" href="/civil-engineering-online-coaching"><span class="f5">GATE CE &amp; PSU</span></a></li><li><a class="relative" href="/upsc-online-coaching"><span class="f5">UPSC &amp; State Services</span></a></li><li><a class="relative" href="/electrical-engineering-online-coaching"><span class="f5">GATE EE &amp; PSU</span></a></li><li><a class="relative" href="/ece-online-coaching"><span class="f5">GATE ECE &amp; PSU</span></a></li><li><a class="relative" href="/class-10-online-coaching"><span class="f5">Class 10th</span></a></li><li><a class="no-underline relative f5" href="/online-coaching">All Exams</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="db-l dn header-menu-item main-header__practice relative h-100 quizzes">
                     <div class="header-menu-item main-header__store relative h-100">
                        <div class="dd-menu self-center relative dd-menu-center  ">
                           <a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 qz">
                              <span class="glyphicon glyphicon-list-alt"></span>
                              <div class="flex header_item_label">
                                 <span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Quizzes</span>
                                 <div class="relative"><span class="db ml1 gray">▾</span></div>
                              </div>
                           </a>
                           <div class="dd-menu-items z-7">
                              <ul class="dd-items-center  qz-ul" style="max-height:0px;border-width:0px">
                              	<li><a class="relative" href="/bank-online-coaching"><span class="absolute f6 green" style="left: 3%;">•</span><span class="f5">Bank &amp; Insurance</span></a></li><li><a class="relative" href="/ssc-online-coaching"><span class="f5">SSC &amp; Govt Jobs</span></a></li><li><a class="relative" href="/engineering-entrance-online-coaching"><span class="f5">JEE &amp; BITSAT</span></a></li><li><a class="relative" href="/tet-online-coaching"><span class="f5">CTET &amp; Teaching Exams</span></a></li><li><a class="relative" href="/computer-science-online-coaching"><span class="f5">GATE CS &amp; PSU</span></a></li><li><a class="relative" href="/mechanical-engineering-online-coaching"><span class="f5">GATE ME &amp; PSU</span></a></li><li><a class="relative" href="/medical-online-coaching"><span class="f5">NEET &amp; AIIMS</span></a></li><li><a class="relative" href="/defence-online-coaching"><span class="f5">CDS &amp; Defence Exams </span></a></li><li><a class="relative" href="/civil-engineering-online-coaching"><span class="f5">GATE CE &amp; PSU</span></a></li><li><a class="relative" href="/upsc-online-coaching"><span class="f5">UPSC &amp; State Services</span></a></li><li><a class="relative" href="/electrical-engineering-online-coaching"><span class="f5">GATE EE &amp; PSU</span></a></li><li><a class="relative" href="/ece-online-coaching"><span class="f5">GATE ECE &amp; PSU</span></a></li><li><a class="relative" href="/class-10-online-coaching"><span class="f5">Class 10th</span></a></li><li><a class="no-underline relative f5" href="/online-coaching">All Exams</a></li>
                              	
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="db-l dn header-menu-item main-header__practice relative h-100 prev-papers">
                     <div class="header-menu-item main-header__store relative h-100">
                        <div class="dd-menu self-center relative dd-menu-center  ">
                           <a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 pp">
                              <span class="glyphicon glyphicon-picture"></span>
                              <div class="flex header_item_label">
                                 <span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Prev. Papers</span>
                                 <div class="relative"><span class="db ml1 gray">▾</span></div>
                              </div>
                           </a>
                           <div class="dd-menu-items z-7">
                              <ul class="dd-items-center  pp-ul" style="max-height:0px;border-width:0px">
                                 <li><a class="relative" href="/bank-online-coaching"><span class="absolute f6 green" style="left: 3%;">•</span><span class="f5">Bank &amp; Insurance</span></a></li><li><a class="relative" href="/ssc-online-coaching"><span class="f5">SSC &amp; Govt Jobs</span></a></li><li><a class="relative" href="/engineering-entrance-online-coaching"><span class="f5">JEE &amp; BITSAT</span></a></li><li><a class="relative" href="/tet-online-coaching"><span class="f5">CTET &amp; Teaching Exams</span></a></li><li><a class="relative" href="/computer-science-online-coaching"><span class="f5">GATE CS &amp; PSU</span></a></li><li><a class="relative" href="/mechanical-engineering-online-coaching"><span class="f5">GATE ME &amp; PSU</span></a></li><li><a class="relative" href="/medical-online-coaching"><span class="f5">NEET &amp; AIIMS</span></a></li><li><a class="relative" href="/defence-online-coaching"><span class="f5">CDS &amp; Defence Exams </span></a></li><li><a class="relative" href="/civil-engineering-online-coaching"><span class="f5">GATE CE &amp; PSU</span></a></li><li><a class="relative" href="/upsc-online-coaching"><span class="f5">UPSC &amp; State Services</span></a></li><li><a class="relative" href="/electrical-engineering-online-coaching"><span class="f5">GATE EE &amp; PSU</span></a></li><li><a class="relative" href="/ece-online-coaching"><span class="f5">GATE ECE &amp; PSU</span></a></li><li><a class="relative" href="/class-10-online-coaching"><span class="f5">Class 10th</span></a></li><li><a class="no-underline relative f5" href="/online-coaching">All Exams</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <p class="bg-green br2 white tc bn ma0 pointer tracked-sm outline-0 b--solid flex items-center auth-btn">
                  	<a rel="noopener noreferrer" data-toggle="modal" data-target="#myModal" class="auth__login js-show-login link white no-hover-color f5">Login</a>
                  	<span class="mr1 ml1 white">/</span>
                  	<a rel="noopener noreferrer" class="auth__register js-show-register link white no-hover-color f5">Register</a>
                  </p>
               </div>
            </div>
         </header>
         <div class="header-spacer header-spacer--no-alert" style="height:63px"></div>
         <div class="flex flex-column">
            <section class="flex flex-grow-1 justify-around ehlr ph3 pv3 flex-column flex-row-l relative">
               <img class="lazyload absolute z-0 top-0 left-0 w-100 h-100 cover overflow-hidden" src="https://gs-post-images.grdp.co/2018/10/newbanner-img1540633596867-70.png-rs-high-webp.png" data-src="" alt="bg-banner-top-image" />
               <div class="fixed-width-container flex flex-row-l flex-column z-1">
                  <div class="flex flex-column w-60-l w-100">
                     <h1 class="white mb0 mt0">Prep Smart. Score Better.</h1>
                     <h2 class="white mt0">Welcome to India&#x27;s largest exam preparation destination.</h2>
                  </div>
                  <div class="flex w-40-l w-100">
                     <div class="auth__body flex-column auth__body--login br2 bg-white w-100 dn">
                        <section class="flex flex-shrink-0">
                           <header class="auth__header js-auth-login flex-grow-1 flex items-center justify-between">
                              <div class="flex flex-column">
                                 <p class="auth__header__heading b green mv0 f3">Login to Gradeup</p>
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
                           <form id="loginForm">
                              <div class="auth__form-group mb4 relative"><input type="email" required="" autoComplete="email" class="auth__field outline-0 f6 db w-100 pa2 ba b--black-10" name="email" value="" /><label class="green f5 b ph1 ph0-l">Email</label></div>
                              <div class="auth__form-group mb2 relative"><input type="password" required="" autoComplete="current-password" class="auth__field outline-0 f6 db w-100 pa2 ba b--black-10" name="password" value="" /><label class="green f5 b ph1 ph0-l">Password</label></div>
                              <input type="hidden" name="deviceType" value="web" />
                              <p class="auth__forgot-password flex justify-end mv3 silver fw1 f6"><a class="js-auth-forgot-psswd pointer red">Forgot Password?</a></p>
                              <input type="submit" value="LOGIN" class="btn auth__button js-auth-login bg-dlg-gradient white bn db f4 fw1 outline-0 w-100 tc"  />
                              <a class="auth__body__register-text js-auth-toggle homeregister pointer link green tc db mt3">Not a User? REGISTER using Email</a>
                           </form>
                        </section>
                     </div>
                     <div class="auth__body flex-column auth__body--login br2 bg-white w-100 flex">
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
                              <div class="auth__form-group mb4 relative homeloginemail"><input type="text" required="" name="name"  id="uname" autoComplete="name" class="auth__field outline-0  f6 db w-100 pa2 b--black-10 ba" value="" /><label class="green f5 ph1 ph0-l">Name</label></div>
                              <div class="auth__form-group mb4 relative"><input type="email" required="" name="email" id="uemail" autoComplete="email" class="auth__field outline-0 f6 db w-100 pa2 b--black-10 ba" value="" /><label class="green f5 ph1 ph0-l">Email</label></div>
                              <div class="auth__form-group mb4 relative"><input type="password" required="" autoComplete="new-password" id="upwd" name="password" class="auth__field outline-0 f6 pb1 db w-100 pa2 ba b--black-10" value="" /><label class="green f5 ph1 ph0-l">Password</label></div>
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
      					<img src="https://gs-post-images.grdp.co/2018/10/newbanner-img1540633596867-70.png-rs-high-webp.png" style="height: 280px;margin: 0 auto;border: 5px solid white;margin: 50px;width: 80%;" >	
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
      					<button class="btn btn-primary">Know More</button>
      				</div>
      			</div>
          	</section>
            
            
         </div>
         <footer class="ph1 pv2 relative z-3 bg-themed-blue-light">
            <nav class="flex mh4-l mh0 justify-between flex-wrap">
               <section class="flex items-center flex-wrap justify-center justify-start-l mv1 self-center"><a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="/about-us">About Us</a><a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="/contact-us">Contact Us</a><a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="/faqs">FAQs</a><a class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="/terms-and-condition">Terms and Conditions</a><a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="/privacy-policy">Privacy Policy</a><a target="_blank" rel="noopener noreferrer" class="no-underline white f6 mh3 no-hover-color fw4" href="https://gradeup.co/sitemap_index.xml">Sitemap</a></section>
               <section class="flex flex-row items-center w-100 w-auto-l flex-grow-1 justify-center justify-end-l self-center mv1 ml3-l ml0">
                  <p class="ma0 white f5">gradeup © 2019</p>
               </section>
            </nav>
         </footer>
      </div>
  </body>    
  </html>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".overflow-auto span:first-child").addClass('bb');
  $(".overflow-auto span:first-child").addClass('b--green');
  $(".overflow-auto span:first-child").addClass('bw2 ');
  $(".overflow-auto span:first-child").addClass('green');
  $(".pb2 .pt4:first").addClass('flex');
  $(".pb2 .pt4:first").removeClass('dn');
  
  
  
  
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
   
   
   
   $(".main-header__all-exam-link").mouseenter(function(){
   		$(".main-header__all-exams__menu").addClass('js-sub-me');
   		$(".main-header__all-exams__menu").removeClass('js-sub-menu');
   		$(".main-header__all-exams__menu").addClass('o-100');
   		$(".main-header__all-exams__menu").removeClass('o-0');
   		$(".main-header__all-exams__menu").css({"height": "0px", "visibility": "visible"});
   });	
   
   $(".main-header__all-exam-link").mouseleave(function(){
   		$(".main-header__all-exams__menu").removeClass('js-sub-me');
   		$(".main-header__all-exams__menu").addClass('js-sub-menu');
   		$(".main-header__all-exams__menu").removeClass('o-100');
   		$(".main-header__all-exams__menu").addClass('o-0');
   		$(".main-header__all-exams__menu").css({"height": "none", "visibility": "hidden"});
   });	
   
   $(".all-exams-options .bank").mouseenter(function(){
   		
   		$('.bank_next').addClass('flex');
   		$('.bank_next').addClass('active');
   		$('.bank_next').removeClass('dn');
   		$('.bank_next .w-third').show();
   		
   });	
   $(".all-exams-options .bank").mouseleave(function(){
   		
		$('.bank_next').removeClass('flex');
   		$('.bank_next').removeClass('active');   	
   		$('.bank_next').addClass('dn');
   		$('.bank_next .w-third').hide();
   });	
   
   
   $(".all-exams-options .ssc").mouseenter(function(){
   		$('.ssc_next').addClass('flex');
   		$('.ssc_next').addClass('active');
   		$('.ssc_next').removeClass('dn');
   		$('.ssc_next .w-third').show();
   });	
   $(".all-exams-options .ssc").mouseleave(function(){
   		$('.ssc_next').removeClass('flex');
   		$('.ssc_next').removeClass('active');   	
   		$('.bank_next').addClass('dn');
   		 $('.ssc_next .w-third').hide();
   });	
   
   
    $(".test-series").mouseenter(function(){
    	$('.ts-ul').show();
    	$('.ts-ul li').show();
		$('.ts-ul li').css('background-color','white');
    });
    $(".test-series").mouseleave(function(){
   		$('.ts-ul').hide();
   		$('.ts-ul li').hide();
   	});	
    $(".classroom").mouseenter(function(){
    	$('.cr-ul').show();
    	$('.cr-ul li').show();
    	$('.cr-ul li').css('background-color','white');
    });	
    $(".classroom").mouseleave(function(){
   		$('.cr-ul').hide();
   		$('.cr-ul li').hide();
   });	
   $(".free-videos").mouseenter(function(){
    	$('.fv-ul').show();
    	$('.fv-ul li').show();
    	$('.fv-ul li').css('background-color','white');
    });
    
    $(".free-videos").mouseleave(function(){
   		$('.fv-ul').hide();
   		$('.fv-ul li').hide();
   	});
    
    $(".quizzes").mouseenter(function(){
    	$('.qz-ul').show();
    	$('.qz-ul li').show();
    	$('.qz-ul li').css('background-color','white');
    });	
    
    $(".quizzes").mouseleave(function(){
   		$('.qz-ul').hide();
   		$('.qz-ul li').hide();
   	});
    
    $(".prev-papers").mouseenter(function(){
    	$('.pp-ul').show();
    	$('.pp-ul li').show();
    	$('.pp-ul li').css('background-color','white');
    });	
    $(".prev-papers").mouseleave(function(){
   		$('.pp-ul').hide();
   		$('.pp-ul li').hide();
   	});
});
</script>
<?php }else{ ?>
	
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=yes" />
<meta property="fb:pages" content="658783224252671,1499553353670220" />
<meta name="theme-color" content="#45b97c" />
<meta name="apple-mobile-web-app-title" content="Gradeup" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="#45b97c" />
<link rel="preconnect" href="https://gradeup-assets.grdp.co/website/" /><link rel="preconnect" href="https://gs-users-images.grdp.co" />
<link rel="preconnect" href="https://gs-post-images.grdp.co" /><link rel="preconnect" href="https://mule.gradeup.co" />
<link rel="preconnect" href="https://cdnjs.cloudflare.com" /><link rel="preconnect" href="https://fonts.gstatic.com" />
<style>article,aside,footer,header,main,nav,section{display:block}input{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;overflow:visible}.border-box,a,article,aside,body,div,footer,form,header,html,li,main,nav,p,section,ul{box-sizing:border-box}.bt{border-top-style:solid;border-top-width:1px}.b--very-light-gray{border-color:#d8d8d8}.flex-row{flex-direction:row}.fw2{font-weight:200}.fw4{font-weight:400}.fw5{font-weight:500}.fw6{font-weight:600}.h1{height:1rem}.h2{height:2rem}.h-25{height:25%}.h-50{height:50%}.w2{width:2rem}.w3{width:4rem}.w4{width:8rem}.w5{width:16rem}.w-40{width:40%}.w-50{width:50%}.dark-gray{color:#333}.bg-themed-blue-light{background-color:#101f38}.pv2{padding-top:.5rem;padding-bottom:.5rem}.ml0{margin-left:0}.mr3{margin-right:1rem}.mv1{margin-top:.25rem;margin-bottom:.25rem}.mh0{margin-left:0;margin-right:0}.ma-auto{margin:auto}.z-3{z-index:3}.white-space-pre-wrap{white-space:pre-wrap}.svg-f-silver{fill:#999}.fwc-2{width:100%;max-width:980px;margin-left:auto;margin-right:auto}.header-menu-item .dd-menu .dd-menu-items ul.dd-items-center li>*,.home-post-types .dd-menu .dd-menu-items ul.dd-items-center li>*{text-align:left;font-family:Nunito Sans;font-weight:400}.home-post-types .dd-menu-items .dd-items-center{background-color:#fff;box-shadow:none;border:1px solid rgba(0,0,0,.05)}.home-post-types .dd-menu-items .dd-items-center li a{color:#666!important}.home-post-types .dd-menu-items .dd-items-center li{margin-bottom:0!important}.home-post-types .dd-menu-items .dd-items-center li>*{display:flex!important;margin:0!important}.main-header__user{display:none}.shimmer{background:#eee;-webkit-filter:blur(2px);filter:blur(2px)}main{flex-basis:100%;max-width:100%;margin:0}aside{display:none}@media screen and (min-width:60em){.dn-l{display:none}.db-l{display:block}.flex-l{display:flex}.flex-auto-l{flex:1 1 auto;min-width:0;min-height:0}.justify-start-l{justify-content:flex-start}.justify-end-l{justify-content:flex-end}.w-auto-l{width:auto}.ph0-l{padding-left:0;padding-right:0}.ml3-l{margin-left:1rem}.mh4-l{margin-left:2rem;margin-right:2rem}main{flex-basis:67.62%;max-width:760px;margin:0}.fwc-2 main{max-width:660px}aside{display:flex;flex-direction:column;flex-basis:31%;max-width:350px}.main-header{padding:0;max-height:64px}.main-header__user-pic{width:22px;height:22px;margin-bottom:2px}.main-header>.main-header-item{height:64px}.main-header__all-exam-link,.main-header__user{display:block}.header-menu-item{margin-right:10px}.header-menu-item:last-child{margin-right:0}.header-menu-item.main-header__store{display:block}.header-menu-item .dd-menu-items{max-height:620px}.header-menu-item .dd-menu-items li{margin:0}.header-menu-item .dd-menu-items .dd-items-center{border:1px solid rgba(0,0,0,.05);background-color:#fff}.header-menu-item .dd-menu .dd-menu-items ul.dd-items-center li>*{text-align:left}.header-menu-item .dd-menu .dd-menu-items{margin-top:0}.header-menu-item .dd-menu .dd-menu-items ul li>:not(.dd-item-ignore){padding:.75em 1em}.main-header__search-box{order:0;max-width:300px;flex-grow:1;position:relative}.main-header__search-box svg.search-icon{width:20px;height:20px;left:20px;position:absolute;top:5px;stroke:#999}.main-header__search-box input[type=search]{position:static;-webkit-transform:translateY(0);transform:translateY(0);width:100%;border-radius:20px;border:1px solid #ccc;color:#999;padding:6px 36px 6px 60px}.search-overlay{display:none}.header-spacer.header-spacer--no-alert{max-height:none}#searchBoxForm{width:250px}.header-menu-item .dd-menu.dd-menu-center .dd-menu-items{left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}:root{font-size:16px}}.dd-menu .dd-menu-items.mt0{margin-top:0}.dd-menu.dd-menu-center .dd-menu-items.dd-sub-menu-items{top:0;left:100%;-webkit-transform:translateX(0);transform:translateX(0);margin-top:0}html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}a{background-color:transparent;-webkit-text-decoration-skip:objects}img{border-style:none}svg:not(:root){overflow:hidden}button,input{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;overflow:visible}button{text-transform:none}[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}a,body,div,form,h1,h2,h3,header,html,input[type=email],input[type=password],input[type=text],li,nav,p,section,ul{box-sizing:border-box}img{max-width:100%}.cover{background-size:cover!important}.outline-0{outline:0}.ba{border-style:solid;border-width:1px}.bb{border-bottom-style:solid;border-bottom-width:1px}.bn{border-style:none;border-width:0}.b--near-white{border-color:#f4f4f4}.b--black-10{border-color:rgba(0,0,0,.1)}.b--green{border-color:#50b167}.br2{border-radius:.25rem}.br-100{border-radius:100%}.b--solid{border-style:solid}.bw2{border-width:.25rem}.top-0{top:0}.right-0{right:0}.left-0{left:0}.dn{display:none}.db{display:block}.flex{display:flex}.flex-column{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.self-center{align-self:center}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-around{justify-content:space-around}.flex-grow-0{flex-grow:0}.flex-grow-1{flex-grow:1}.flex-shrink-0{flex-shrink:0}.nunito{font-family:nunito sans}.b{font-weight:700}.fw1{font-weight:100}.fw3{font-weight:300}.h2-5{height:3rem}.h3{height:4rem}.h3-5{height:6rem}.h5{height:16rem}.h6{height:27rem}.h-100{height:100%}.lh-solid{line-height:1}.link{text-decoration:none}.list{list-style-type:none}.w2-5{width:3rem}.w6{width:24rem}.w-25{width:25%}.w-31{width:31%}.w-75{width:75%}.w-80{width:80%}.w-100{width:100%}.w-third{width:33.33333%}.overflow-hidden{overflow:hidden}.overflow-auto{overflow:auto}.relative{position:relative}.absolute{position:absolute}.fixed{position:fixed}.o-0{opacity:0}.black{color:#000}.gray{color:#666}.silver{color:#999}.white{color:#fff}.red{color:#ed5b6c}.green{color:#50b167}.bg-white{background-color:#fff}.bg-green{background-color:#50b167}.bg-blue{background-color:#3c5a99}.pa0{padding:0}.pa2{padding:.5rem}.pa3{padding:1rem}.pa4{padding:2rem}.pb1{padding-bottom:.25rem}.pb2{padding-bottom:.5rem}.pb3{padding-bottom:1rem}.pt4{padding-top:2rem}.pv3{padding-top:1rem;padding-bottom:1rem}.ph1{padding-left:.25rem;padding-right:.25rem}.ph2{padding-left:.5rem;padding-right:.5rem}.ph3{padding-left:1rem;padding-right:1rem}.ph5{padding-left:4rem;padding-right:4rem}.ma0{margin:0}.ml1{margin-left:.25rem}.ml2{margin-left:.5rem}.ml4-5{margin-left:3.5rem}.mr1{margin-right:.25rem}.mr2{margin-right:.5rem}.mb0{margin-bottom:0}.mb2{margin-bottom:.5rem}.mb3{margin-bottom:1rem}.mb4{margin-bottom:2rem}.mt0{margin-top:0}.mt1{margin-top:.25rem}.mt3{margin-top:1rem}.mv0{margin-top:0;margin-bottom:0}.mv3{margin-top:1rem;margin-bottom:1rem}.mv4{margin-top:2rem;margin-bottom:2rem}.mh1{margin-left:.25rem;margin-right:.25rem}.mh3{margin-left:1rem;margin-right:1rem}.no-underline{text-decoration:none}.tc{text-align:center}.f3{font-size:1.5rem}.f4{font-size:1.25rem}.f5{font-size:1rem}.f6{font-size:.875rem}.f7{font-size:.75rem}.center{margin-right:auto}.center,.ml-auto{margin-left:auto}.z-0{z-index:0}.z-1{z-index:1}.z-7{z-index:7}.z-10{z-index:10}body{overflow-x:hidden}button{font-family:nunito sans,sans-serif}img{position:relative;overflow:hidden}#searchBoxForm{width:auto}input:-webkit-autofill{-webkit-box-shadow:0 0 0 30px #fff inset}input:disabled,input[disabled]{opacity:.6}.header-menu-item .dd-menu .dd-menu-items ul{min-width:170px}.svg-fn{fill:none}.svg-s-silver{stroke:#999}.tracked-sm{letter-spacing:.05rem}.bg-dlg-gradient{background:linear-gradient(90deg,#1a806c,#50b167)}.fixed-width-container{width:100%;max-width:1130px;margin-left:auto;margin-right:auto}.box-shadow{border:2px solid rgba(0,0,0,.05)}.header-menu-item .dd-menu.dd-menu-center .dd-menu-items{left:0;-webkit-transform:translateX(-60%);transform:translateX(-60%)}.header-menu-item .dd-menu .dd-menu-items ul.dd-items-center li>*{text-align:left;font-family:Nunito Sans;font-weight:400}.header-menu-item .dd-menu .dd-menu-items ul li>:not(.dd-item-ignore){padding:.75em 1.25em}.header-menu-item.main-header__store{display:none}.main-header{border-bottom:1px solid #f4f4f4;background:#fff;padding:0 14px}.header-spacer.header-spacer--no-alert{max-height:49px;min-height:49px}.main-header>.main-header-item{height:48px}.main-header__logo{margin-right:30px}.main-header__all-exam-link{margin:0 30px 0 0;display:none}.main-header__search-box{font-size:.833rem;order:2}.main-header__search-box.searchInputClosed input{position:fixed;border-radius:0;color:#999}.search-overlay{position:fixed;background:rgba(0,0,0,.4);height:100%;z-index:7}.main-header__search-box.searchInputClosed input,.search-overlay{-webkit-transform:translateY(-200%);transform:translateY(-200%);top:0;left:0;width:100%}.header-menu-item{margin-right:20px}.header-menu-item:last-child{margin-right:0}.main-header .auth-btn{display:none}#__next{display:flex;flex-direction:column;min-height:100vh}img:after{content:"";font-size:16px;font-family:FontAwesome;display:block;position:absolute;z-index:2;top:0;left:0;width:100%;height:100%;background-color:#c2c2c2}@font-face{font-family:Poppins;font-style:normal;font-weight:700;font-display:swap;src:local("Poppins Bold"),local("Poppins-Bold"),url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7Z11lFd2JQEl8qw.woff2) format("woff2");unicode-range:U+0900-097f,U+1cd0-1cf6,U+1cf8-1cf9,U+200c-200d,U+20a8,U+20b9,U+25cc,U+a830-a839,U+a8e0-a8fb}@font-face{font-family:Poppins;font-style:normal;font-weight:700;font-display:swap;src:local("Poppins Bold"),local("Poppins-Bold"),url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2) format("woff2");unicode-range:U+0100-024f,U+0259,U+1e??,U+2020,U+20a0-20ab,U+20ad-20cf,U+2113,U+2c60-2c7f,U+a720-a7ff}@font-face{font-family:Poppins;font-style:normal;font-weight:700;font-display:swap;src:local("Poppins Bold"),local("Poppins-Bold"),url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2) format("woff2");unicode-range:U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd}@font-face{font-family:Nunito Sans;font-style:italic;font-weight:300;font-display:swap;src:local("Nunito Sans Light Italic"),local("NunitoSans-LightItalic"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4G3JoY1wIUrt9w6fk2A.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1ea0-1ef9,U+20ab}@font-face{font-family:Nunito Sans;font-style:italic;font-weight:300;font-display:swap;src:local("Nunito Sans Light Italic"),local("NunitoSans-LightItalic"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4G3JoY10IUrt9w6fk2A.woff2) format("woff2");unicode-range:U+0100-024f,U+0259,U+1e??,U+2020,U+20a0-20ab,U+20ad-20cf,U+2113,U+2c60-2c7f,U+a720-a7ff}@font-face{font-family:Nunito Sans;font-style:italic;font-weight:300;font-display:swap;src:local("Nunito Sans Light Italic"),local("NunitoSans-LightItalic"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4G3JoY1MIUrt9w6c.woff2) format("woff2");unicode-range:U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:400;font-display:swap;src:local("Nunito Sans Regular"),local("NunitoSans-Regular"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe0qMImSLYBIv1o4X1M8cceyI9tAcVwob5A.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1ea0-1ef9,U+20ab}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:400;font-display:swap;src:local("Nunito Sans Regular"),local("NunitoSans-Regular"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe0qMImSLYBIv1o4X1M8ccezI9tAcVwob5A.woff2) format("woff2");unicode-range:U+0100-024f,U+0259,U+1e??,U+2020,U+20a0-20ab,U+20ad-20cf,U+2113,U+2c60-2c7f,U+a720-a7ff}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:400;font-display:swap;src:local("Nunito Sans Regular"),local("NunitoSans-Regular"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe0qMImSLYBIv1o4X1M8cce9I9tAcVwo.woff2) format("woff2");unicode-range:U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:600;font-display:swap;src:local("Nunito Sans SemiBold"),local("NunitoSans-SemiBold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc9iB85iU1ECVZl_86Y.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1ea0-1ef9,U+20ab}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:600;font-display:swap;src:local("Nunito Sans SemiBold"),local("NunitoSans-SemiBold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc9iB85jU1ECVZl_86Y.woff2) format("woff2");unicode-range:U+0100-024f,U+0259,U+1e??,U+2020,U+20a0-20ab,U+20ad-20cf,U+2113,U+2c60-2c7f,U+a720-a7ff}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:600;font-display:swap;src:local("Nunito Sans SemiBold"),local("NunitoSans-SemiBold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc9iB85tU1ECVZl_.woff2) format("woff2");unicode-range:U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:700;font-display:swap;src:local("Nunito Sans Bold"),local("NunitoSans-Bold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8GBs5iU1ECVZl_86Y.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1ea0-1ef9,U+20ab}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:700;font-display:swap;src:local("Nunito Sans Bold"),local("NunitoSans-Bold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8GBs5jU1ECVZl_86Y.woff2) format("woff2");unicode-range:U+0100-024f,U+0259,U+1e??,U+2020,U+20a0-20ab,U+20ad-20cf,U+2113,U+2c60-2c7f,U+a720-a7ff}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:700;font-display:swap;src:local("Nunito Sans Bold"),local("NunitoSans-Bold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8GBs5tU1ECVZl_.woff2) format("woff2");unicode-range:U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd}:root{font-size:14px}*,body,html{line-height:1.4}body{font-family:Nunito Sans,Poppins,sans-serif;font-size:1rem;color:#0b182f}h1{font-family:Poppins;font-size:1.8rem}h1,h2{font-weight:700;color:#0b182f}h2{font-size:1.5rem;margin-top:1.667em}h3{font-size:1.333rem;color:#0b182f;margin-bottom:.5em}.head,h3{font-weight:700}.head{font-family:Poppins;font-size:1.5rem}::-webkit-input-placeholder{font-size:.833rem;color:#999}::-moz-placeholder{font-size:.833rem;color:#999}:-ms-input-placeholder{font-size:.833rem;color:#999}:-moz-placeholder{font-size:.833rem;color:#999}a{color:#0072d6;font-weight:600}p{font-size:1.2rem;line-height:1.6;margin:1rem 0}li{margin-bottom:.5rem}@media screen and (min-width:60em){.du-l{display:unset}.dn-l{display:none}.db-l{display:block}.flex-l{display:flex}.flex-auto-l{flex:1 1 auto;min-width:0;min-height:0}.flex-row-l{flex-direction:row}.w-10-l{width:10%}.w-24-l{width:24%}.w-40-l{width:40%}.w-60-l{width:60%}.w-93-l{width:93%}.pa5-l{padding:4rem}.ph0-l{padding-left:0;padding-right:0}.ph5-l{padding-left:4rem;padding-right:4rem}.ml5-l{margin-left:4rem}.mv4-l{margin-top:2rem;margin-bottom:2rem}.main-header{padding:0;max-height:64px}.main-header .auth-btn{display:flex;padding:7.5px 10px}.main-header>.main-header-item{height:64px}.main-header__all-exam-link{display:block}.main-header__all-exams__menu{z-index:8;padding-top:20px;top:43px}.header-menu-item{margin-right:10px}.header-menu-item:last-child{margin-right:0}.header-menu-item.main-header__store{display:block}.header-menu-item .dd-menu-items{max-height:620px}.header-menu-item .dd-menu-items li{margin:0}.header-menu-item .dd-menu-items .dd-items-center{border:1px solid rgba(0,0,0,.05);background-color:#fff}.header-menu-item .dd-menu .dd-menu-items ul.dd-items-center li>*{text-align:left}.header-menu-item .dd-menu .dd-menu-items{margin-top:0}.header-menu-item .dd-menu .dd-menu-items ul li>:not(.dd-item-ignore){padding:.75em 1em}.all-exams-options .all-exams-option a.link{padding:13px 30px}.all-exam-sections .section a.list-anchor,.all-exam-sections .section p.section-p{padding:5px 30px}.all-exam-sections .section{background:#f4f4f4}.all-exam-sections .section:nth-child(2n),.all-exams-options .all-exams-option.active{background:#ededed}.main-header__search-box{order:0;max-width:300px;flex-grow:1;position:relative}.main-header__search-box svg.search-icon{width:20px;height:20px;left:20px;position:absolute;top:5px;stroke:#999}.main-header__search-box input[type=search]{position:static;-webkit-transform:translateY(0);transform:translateY(0);width:100%;border-radius:20px;border:1px solid #ccc;color:#999;padding:6px 36px 6px 60px}.search-overlay{display:none}.header-spacer.header-spacer--no-alert{max-height:none}#searchBoxForm{width:250px}.header-menu-item .dd-menu.dd-menu-center .dd-menu-items{left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}:root{font-size:16px}}.auth__body{padding:20px 14px}.auth__social>*{flex-basis:49%;display:flex;justify-content:center}.auth__field{border:none;border-bottom:1px solid #d8d8d8;padding:5px 2.5px}.auth__form-group label{position:absolute;left:0;top:8px;line-height:1}input.auth__field~label{-webkit-transform:translateY(-25px) scale3d(.9,.9,1);transform:translateY(-25px) scale3d(.9,.9,1)}input.auth__field[value=""]:not(:focus)~label{-webkit-transform:translate(0) scaleX(1);transform:translate(0) scaleX(1);color:rgba(0,0,0,.7);font-weight:400}.auth__button{padding:10px 5px}.auth__facebook:before{content:"";background:url(https://gs-post-images.grdp.co/2018/9/facebook_64px-img1536216724256-51.png-rs-high-webp.png) no-repeat;position:absolute;left:5%;height:40px;width:30px;background-size:30px 30px;bottom:0}.auth__google:before{content:"";background:url(https://gs-post-images.grdp.co/2018/9/google_64px-img1536216689631-26.png-rs-high-webp.png) no-repeat;position:absolute;left:10%;height:35px;width:35px;background-size:35px 35px}@media screen and (min-width:60em){.auth__body{padding:20px 35px}}.dd-menu{display:inline-block;position:relative}.dd-menu.dd-menu-center .dd-menu-items{left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.dd-menu .dd-menu-items{position:absolute;z-index:7;margin:.5em 0 0}.dd-menu .dd-menu-items ul{list-style:none;padding:0;margin:0;color:#000;background-color:#fefefe;box-shadow:0 0 4px rgba(0,0,0,.15),0 2px 4px rgba(0,0,0,.29)}.dd-menu .dd-menu-items ul.dd-items-center li>*{text-align:center}.dd-menu .dd-menu-items ul li>:not(.dd-item-ignore){display:flex;width:auto;min-width:100%;padding:1em 1.5em;font-family:Roboto,sans-serif;white-space:pre;color:inherit;text-decoration:none;font-size:inherit}.dd-menu-items ul.dd-items--inactive{opacity:0;visibility:hidden}
</style>
<link rel="shortcut icon" href="https://gs-post-images.grdp.co/2018/11/rocketfavicon-img1542202190449-91.png-rs-high-webp.png" type="image/x-icon" />
<link rel="manifest" href="/manifest.web.json" />
<script type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","name":"Gradeup","url":"https://gradeup.co/"}</script>
<script>
window.addEventListener('beforeinstallprompt', function(e){
// Prevent Chrome 67 and earlier from automatically showing the prompt
e.preventDefault();
});
</script>
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" class="next-head" />
<meta charSet="utf-8" class="next-head" />
<link rel="preload" as="style" href="https://gradeup-assets.grdp.co/website/_next/static/chunks/styles.9ac674eb.chunk.css?id=aMc2Im49SDQykw-c8Hipy" class="next-head" />
<meta name="description" content="Gradeup (Gradestack) - Exam preparation for GATE, JEE, NEET, BANK, SSC/Govt jobs, CTET. Get daily GK updates, notifications, previous years&#x27; papers &amp; free mock tests." class="next-head" />
<meta property="og:title" content="Gradeup: India&#x27;s Largest Exam Prep Site for BANK, SSC, GATE, JEE, NEET" class="next-head" />
<meta property="og:description" content="Gradeup (Gradestack) - Exam preparation for GATE, JEE, NEET, BANK, SSC/Govt jobs, CTET. Get daily GK updates, notifications, previous years&#x27; papers &amp; free mock tests." class="next-head" />
<meta property="og:image" content="" class="next-head" />
<meta property="twitter:card" content="summary_large_image" class="next-head" />
<meta property="twitter:site" content="@gradeupapp" class="next-head" />
<meta property="twitter:title" content="Gradeup: India&#x27;s Largest Exam Prep Site for BANK, SSC, GATE, JEE, NEET" class="next-head" />
<meta property="twitter:description" content="Gradeup (Gradestack) - Exam preparation for GATE, JEE, NEET, BANK, SSC/Govt jobs, CTET. Get daily GK updates, notifications, previous years&#x27; papers &amp; free mock tests." class="next-head" />
<meta property="twitter:image:src" content="" class="next-head" />
<meta name="ROBOTS" content="INDEX, FOLLOW" class="next-head" />
<title class="next-head">Gradeup: India&#x27;s Largest Exam Prep Site for BANK, SSC, GATE, JEE, NEET</title><link rel="canonical" href="https://gradeup.co" class="next-head" />
<script type="application/ld+json" class="next-head">{"@graph":[{"@context":"http://schema.org","@type":"WebSite","url":"https://gradeup.co/","potentialAction":{"@type":"SearchAction","target":"https://gradeup.co/search?search={search_term}","query-input":"required name=search_term"}}]}</script><script type="application/ld+json" class="next-head">{"@context":"http://schema.org","@type":"Corporation","name":"Gradeup ","url":"https://gradeup.co","logo":"https://gs-post-images.grdp.co/2017/8/gradeup-logo-img1503378653366-55-rs-low-webp.jpg","description":"Study Smart, Score Better! Join India's largest online learning community","telephone":"+919650053463","address":{"@type":"PostalAddress","addressCountry":"IN","addressLocality":"Sector 125,\tNoida","addressRegion":"Uttar Pradesh","postalCode":"201313","streetAddress":"Windsor IT Park, Tower - A, 2nd Floor, Sector 125"}}</script>
<script type="application/ld+json" class="next-head">{"@context":"http://schema.org","@type":"Organization","location":{"@type":"Place","address":"Windsor IT Park, Tower - A, 2nd Floor, Sector 125, Noida, Uttar Pradesh 201303"},"description":"Gradeup (Gradestack) - For IBPS, SSC/Gov jobs, CAT, Engineering, GATE exam preparation! Get daily dose of GK updates, current affairs & free mock test.","name":"Gradeup","email":"contact@gradeup.co","logo":{"@type":"ImageObject","url":"https://gs-post-images.grdp.co/2017/8/gradeup-logo-img1503378653366-55-rs-low-webp.jpg","width":"320","height":"181"},"url":"https://gradeup.co/","sameAs":["https://www.facebook.com/gradeup.learn/","https://twitter.com/gradeupapp","https://www.linkedin.com/company/gradeup-gradestack-learning-pvt-ltd-","https://plus.google.com/b/108065238358839044098/108065238358839044098","https://www.youtube.com/channel/UClyn4xufkVCSryKLc7-6c5Q","https://play.google.com/store/apps/developer?id=gradeup"],"founder":["Vibhu Bhushan","Sanjeev Kumar","Shobhit Bhatnagar"]}</script>
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/aMc2Im49SDQykw-c8Hipy/pages/home.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/aMc2Im49SDQykw-c8Hipy/pages/_app.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/chunks/commons.b7bb537347ffa3efa2ca.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/chunks/chunk-auth.cbe2701cb0c192a24933.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/chunks/commons.b7bb537347ffa3efa2ca.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/chunks/chunk-mobile-bottom-drawer.6143cbf30560cebebfac.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/chunks/commons.b7bb537347ffa3efa2ca.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/chunks/chunk-header-entity.aba64a87af351f53236a.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/runtime/webpack-1b592059327519b38dda.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/chunks/commons.b7bb537347ffa3efa2ca.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/chunks/styles.543be2f0b9841652d67e.js" as="script" crossorigin="anonymous" />
<link rel="preload" href="https://gradeup-assets.grdp.co/website/_next/static/runtime/main-82fc5e36d5ad3edb86b0.js" as="script" crossorigin="anonymous" />
</head>
<body>
<div id="__next">
<header class="flex flex-column main-nav fixed top-0 left-0 w-100 z-10 transition-all">
<div class="main-header">
<div class="flex fixed-width-container items-center main-header-item">
<div class="main-header__logo flex">
<a class="main-header__logo-link flex" href="/">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="31px" class="db" viewBox="0 0 383 105">
<path d="M47.7 35L47.7 29.4 61 29.4 61 75.9C61 92.1 50.5 102 33.9 102 25.9 102 17.5 99.9 11.9 95.9L16.8 84.8C21.8 88.1 27.4 90 33.4 90 41.8 90 47.7 85.3 47.7 76.6L47.7 73C44.3 77.2 39.1 79.8 32.2 79.8 19.9 79.8 9 69.5 9 53.9 9 38.3 19.9 28 32.2 28 39 28 44.2 30.7 47.7 35ZM22.8 53.9C22.8 61.2 27.8 67.3 35.4 67.3 43 67.3 48.1 61.5 48.1 53.9 48.1 46.3 43 40.6 35.4 40.6 27.7 40.6 22.8 46.5 22.8 53.9Z" style="fill:#0C192F"></path>
<path d="M103 29.1L101 42.6C98.8 41.6 95.4 41 92.6 41 86.2 41 81.8 44.9 81.8 52.4L81.8 80 68 80 68 29.4 81.4 29.4 81.4 34.9C84.6 30.1 89.4 28 95.8 28 98.8 28 101.1 28.5 103 29.1Z" style="fill:#0C192F"></path>
<path d="M154 79.7L140.7 79.7 140.7 74.1C137.4 78.2 132.5 81 125.5 81 111.6 81 101 69.6 101 54.5 101 39.4 111.6 28 125.5 28 132.5 28 137.4 30.8 140.7 34.9L140.7 29.3 154 29.3 154 79.7ZM114.9 54.5C114.9 62.2 120 68.3 128.1 68.3 135.9 68.3 141.2 62.4 141.2 54.5 141.2 46.5 135.9 40.7 128.1 40.7 120 40.6 114.9 46.7 114.9 54.5Z" style="fill:#0C192F"></path>
<path d="M198.4 35.1L198.4 5 212 5 212 80.7 198.7 80.7 198.7 75.1C195.4 79.2 190.5 82 183.5 82 169.6 82 159 70.5 159 55.2 159 39.9 169.6 28.5 183.5 28.5 190.3 28.4 195.1 31.1 198.4 35.1ZM172.9 55.2C172.9 63 178 69.2 186.1 69.2 193.9 69.2 199.2 63.2 199.2 55.2 199.2 47.2 193.9 41.2 186.1 41.2 177.9 41.1 172.9 47.4 172.9 55.2Z" style="fill:#0C192F"></path>
<path d="M268 54.5C268 56 267.9 57.8 267.7 59L232 59C233.5 66.3 238.6 69.5 244.9 69.5 249.3 69.5 254 67.7 257.7 64.6L265.6 73.3C259.9 78.6 252.6 81 244.1 81 228.7 81 218 70.5 218 54.6 218 38.8 228.3 28 243.4 28 258.1 28 267.9 38.7 268 54.5ZM232.1 49.8L254.4 49.8C253.1 43.3 249.2 39.7 243.4 39.7 237.1 39.7 233.3 43.6 232.1 49.8Z" style="fill:#0C192F">
</path>
<path d="M322 59.1C322 75.1 310.7 82 298.1 82 285.3 82 274 75.1 274 59.1L274 30 287.6 30 287.6 57.9C287.6 66 292 69.3 297.9 69.3 303.9 69.3 308.3 66 308.3 57.9L308.3 30 321.9 30 321.9 59.1 322 59.1Z" style="fill:#0C192F"></path><path d="M381 54.7C381 69.9 370.4 81.3 356.5 81.3 349.7 81.3 344.9 78.6 341.6 74.7L341.6 101 328 101 328 29.3 341.3 29.3 341.3 34.9C344.6 30.8 349.4 28 356.4 28 370.5 27.9 381 39.4 381 54.7ZM340.9 54.7C340.9 62.7 346.2 68.6 353.9 68.6 361.9 68.6 367 62.4 367 54.7 367 47 362 40.7 353.9 40.7 346.2 40.6 340.9 46.7 340.9 54.7Z" style="fill:#0C192F">
</path>
</svg>
</a>
</div>
<div class="main-header__all-exam-link"></div>
<div class="db dn-l ml-auto mr1 menu-click-cont">
<svg class="db svg-fn svg-s-silver" viewBox="0 0 30 30" style="width:32;height:32"></svg>
</div>
<div class="mr2 db dn-l menu-click-cont">
<svg class="db svg-fn svg-s-silver" viewBox="0 0 30 30" style="width:32;height:32"></svg>
</div>
<div class="main-header__search-box searchInputClosed">
<form id="searchBoxForm" action="/search" method="GET">
<input type="search" required="" id="search" name="search" placeholder="Search here..." class="outline-0 nunito" value="" />
</form>
<div class="search-overlay"></div>
<label for="search" class="flex flex-column items-center align-icon mt1">
<svg class="db svg-s-silver search-icon" viewBox="0 0 48 48" style="width:22;height:22"></svg>
</label>
</div>
<div class="dn flex-l flex-auto-l"></div>
<div class="db-l dn header-menu-item main-header__store relative h-100 ml2">
<div class="header-menu-item main-header__store relative h-100">
<div class="dd-menu self-center relative dd-menu-center  ">
<a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 ">
<svg class="db svg-fn svg-s-silver" viewBox="0 0 32 32" style="width:32;height:32"></svg>
<div class="flex header_item_label">
<span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Test Series</span>
<div class="relative">
<span class="db ml1 gray">▾</span>
</div>
</div></a>
<div class="dd-menu-items z-7">
<ul class="dd-items-center  dd-items--inactive" style="max-height:0px;border-width:0px"><li>
<div class="dd-menu self-center relative dd-menu-center w-100 dd-sub-menu-cont bt b--very-light-gray ">
<a class="flex items-center w-100"><span class="f5 fw4 silver">My Test Series</span>
<svg class="db svg-f-silver svg-s-silver ml-auto" viewBox="0 0 30 48" style="width:6;height:10"></svg></a>
<div class="dd-menu-items dd-sub-menu-items "><ul class="dd-items-center  dd-items--inactive" style="max-height:0px;border-width:0px">
<li class="flex dd-menu-no-hover"><span class="flex pa2 items-center justify-around border-box" style="width:300px">
<span class="f6 silver w-40 flex-wrap flex ma0 white-space-pre-wrap">Looks like you haven’t purchased any test series</span><img class="flex-shrink-0 w-50" src="https://gs-post-images.grdp.co/2019/8/course-2x-img1565776124498-17.png-rs-high-webp.png" style="height:105px" /></span></li>
<li class="bt b--very-light-gray"><a class="link relative flex items-center justify-center w-100" style="padding:.75em 1.25em" href="/online-test-series">
<span class="silver f5 fw2 mr2">View All</span>
<svg class="db svg-f-silver svg-s-silver" viewBox="0 0 30 48" style="width:6;height:10"></svg>
</a>
</li>
</ul>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="db-l dn header-menu-item main-header__practice relative h-100 ">
<div class="header-menu-item main-header__store relative h-100">
<div class="dd-menu self-center relative dd-menu-center  ">
<a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 ">
<svg class="db svg-fn svg-s-silver" viewBox="0 0 45 30" style="width:32;height:32"></svg>
<div class="flex header_item_label">
<span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Classroom</span>
<div class="relative">
<span class="db ml1 gray">▾</span>
</div>
</div>
</a>
<div class="dd-menu-items z-7">
<ul class="dd-items-center  dd-items--inactive" style="max-height:0px;border-width:0px">
<li>
<div class="dd-menu self-center relative dd-menu-center w-100 dd-sub-menu-cont bt b--very-light-gray ">
<a class="flex items-center w-100"><span class="f5 fw4 silver">My Courses</span> 
<svg class="db svg-f-silver svg-s-silver ml-auto" viewBox="0 0 30 48" style="width:6;height:10"></svg>
</a>
<div class="dd-menu-items dd-sub-menu-items ">
<ul class="dd-items-center  dd-items--inactive" style="max-height:0px;border-width:0px">
<li class="flex dd-menu-no-hover">
<span class="flex items-center pa2 justify-around border-box" style="width:300px">
<span class="f6 silver w-40 flex-wrap flex ma0 white-space-pre-wrap">Looks like you haven’t purchased any course</span>
<img class="flex-shrink-0 w-50" src="https://gs-post-images.grdp.co/2019/8/course-2x-img1565776124498-17.png-rs-high-webp.png" style="height:105px" />
</span>
</li>
<li class="bt b--very-light-gray">
<a class="link relative flex items-center w-100 justify-center" style="padding:.75em 1.25em" href="/online-coaching">
<span class="silver f5 fw2 mr2">View All</span>
<svg class="db svg-f-silver svg-s-silver" viewBox="0 0 30 48" style="width:6;height:10">
</svg>
</a>
</li>
</ul>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="db-l dn header-menu-item main-header__practice relative h-100 ">
<div class="header-menu-item main-header__store relative h-100">
<div class="dd-menu self-center relative dd-menu-center  ">
<a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 ">
<svg class="db svg-fn svg-s-silver" viewBox="0 0 32 32" style="width:32;height:32"></svg>
<div class="flex header_item_label">
<span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Free Videos</span>
<div class="relative">
<span class="db ml1 gray">▾</span>
</div>
</div>
</a>
<div class="dd-menu-items z-7">
<ul class="dd-items-center  dd-items--inactive" style="max-height:0px;border-width:0px">
<li><a class="flex items-center w-100" href="/free-video-lectures">
<span class="f5 fw6 dark-gray">All Exams</span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="db-l dn header-menu-item main-header__practice relative h-100 ">
<div class="header-menu-item main-header__store relative h-100">
<div class="dd-menu self-center relative dd-menu-center  ">
<a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 ">
<svg class="db svg-fn svg-s-silver" viewBox="0 0 30 30" style="width:32;height:32"></svg>
<div class="flex header_item_label"><span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Quizzes</span>
<div class="relative">
<span class="db ml1 gray">▾</span>
</div>
</div>
</a>
<div class="dd-menu-items z-7">
<ul class="dd-items-center  dd-items--inactive" style="max-height:0px;border-width:0px">
<li></li>
</ul>
</div>
</div>
</div>
</div>
<div class="db-l dn header-menu-item main-header__practice relative h-100 ">
<div class="header-menu-item main-header__store relative h-100">
<div class="dd-menu self-center relative dd-menu-center  ">
<a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 ">
<svg class="db svg-fn svg-s-silver" viewBox="0 0 30 30" style="width:32;height:32"></svg>
<div class="flex header_item_label">
<span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Prev. Papers</span>
<div class="relative"><span class="db ml1 gray">▾</span>
</div>
</div>
</a>
<div class="dd-menu-items z-7">
<ul class="dd-items-center  dd-items--inactive" style="max-height:0px;border-width:0px">
<li></li>
</ul>
</div>
</div>
</div>
</div>
<div class="header-menu-item main-header__user relative h-100">
<div class="dd-menu self-center relative dd-menu-center  ">
<a rel="noopener noreferrer" class="header-menu-item__link main-header__user__link js-sub-menu-link flex h-100 flex-column items-center pointer no-underline ph2 ">
<div class="main-header__user-pic ma-auto br-100 overflow-hidden" style="background-image:url(https://lh3.googleusercontent.com/-AEYLoBKHPHY/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rcsBUz2vCUGg-i3ZxUXNrLN4eA5NQ/s96-c/photo.jpg);background-repeat:no-repeat;background-position:center center;background-size:cover;background-color:#ededed;height:30px;width:30px;margin-top:5px">
</div>
<div class="anchor-label flex header_item_label">
<span class="gray f7 lh-solid mt1 fw3">Hi, Jignesh</span>
<div class="relative">
<span class="db ml1 gray">▾</span>
</div>
</div>
</a>
<div class="dd-menu-items ">
<ul class="dd-items-center  dd-items--inactive" style="max-height:0px;border-width:0px">
<li><a href="/me">My profile</a></li>
<li><a href="/settings">My Exams</a></li>
<li><a href="/my-purchases">My Purchases</a></li>
<li><a href="/payment-history">Payment History</a></li>
<li><a href="https://gradeup.co/faqs">Help &amp; Feedback</a></li>
<li><a rel="noopener noreferrer" class="pointer">Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</header>
<div class="header-spacer header-spacer--no-alert" style="height:63px"></div>
<div class="fwc-2 flex flex-grow-1 justify-between mt3">
<main>
<span class="flex items-center mb3 ba b--black-10 pa3 flex-grow-1">
<a class="mr3 items-center justify-between" href="/me">
<img src="https://lh3.googleusercontent.com/-AEYLoBKHPHY/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rcsBUz2vCUGg-i3ZxUXNrLN4eA5NQ/s96-c/photo.jpg" alt="Jignesh Desai" class="flex br-100 w3 h3 flex-shrink-0 overflow-hidden relative" /></a>
<a class="ba b--black-10 pa2 flex-grow-1 silver text pointer">Create a post...</a>
</span>
<div class="flex mb3 home-post-types">
<span class="fw5 gray mr2 ph2 ph0-l">Filter : </span>
<div class="dd-menu self-center relative dd-menu-center  ">
<a class="header-menu-item__link flex flex-column items-center pointer  no-underline">
<span class="lh-solid db-l silver">All Posts ▾</span></a>
<div class="dd-menu-items mt0">
<ul class="dd-items-center  dd-items--inactive" style="max-height:0px;border-width:0px">
<li><a class="lh-solid tc pv2 bw2 pointer link gray" data-feed-tab="all">All Posts</a></li>
<li><a class="lh-solid tc pv2 bw2 pointer link gray" data-feed-tab="mentor">Mentor Posts</a></li>
</ul>
</div>
</div>
</div>
<article class="flex flex-column mb3 ba b--black-10 pa3">
<div class="flex mb3">
<div class="w2 h2 br-100 mr2 shimmer"></div>
<div class="flex flex-column flex-grow-1 justify-center">
<div class="shimmer w5 h-25"></div>
<div class="flex h-50 items-center">
<div class="shimmer w4 h-50 mr3"></div>
</div>
</div>
</div>
<div class="flex flex-column h5">
<div class="shimmer w-100 h1 mb2"></div>
<div class="shimmer w-75 h1 mb3"></div>
<div class="shimmer w-100 h5 mb3"></div>
<div class="shimmer w-75 h1 mb2"></div></div>
</article>
</main>
<aside></aside>
</div>
<footer class="ph1 pv2 relative z-3 bg-themed-blue-light">
<nav class="flex mh4-l mh0 justify-between flex-wrap">
<section class="flex items-center flex-wrap justify-center justify-start-l mv1 self-center">
<a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="/about-us">About Us</a>
<a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="/contact-us">Contact Us</a>
<a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="/faqs">FAQs</a>
<a class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="/terms-and-condition">Terms and Conditions</a>
<a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="/privacy-policy">Privacy Policy</a>
<a target="_blank" rel="noopener noreferrer" class="no-underline white f6 mh3 no-hover-color fw4" href="https://gradeup.co/sitemap_index.xml">Sitemap</a></section><section class="flex flex-row items-center w-100 w-auto-l flex-grow-1 justify-center justify-end-l self-center mv1 ml3-l ml0">
<p class="ma0 white f5">gradeup © 2019</p>
</section>
</nav>
</footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.5/lazysizes.min.js"></script><script id="__NEXT_DATA__" type="application/json" crossorigin="anonymous">{"dataManager":"[]","props":{"pageProps":{"query":{}},"isGradeupDomain":true,"apolloState":{"User:351b7ef0-e33f-11e9-a5c3-ca01bd5ad223":{"id":"351b7ef0-e33f-11e9-a5c3-ca01bd5ad223","name":"Jignesh Desai","phone":"","emails":{"type":"json","json":["archirayan46@gmail.com"]},"exams":[{"type":"id","generated":false,"id":"Exam:72975611-4a5e-11e5-a83f-8b51c790d8b8","typename":"Exam"}],"groups":[{"type":"id","generated":false,"id":"Group:72975611-4a5e-11e5-a83f-8b51c790d8b8","typename":"Group"}],"isActive":true,"isMentor":false,"picture":"https://lh3.googleusercontent.com/-AEYLoBKHPHY/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rcsBUz2vCUGg-i3ZxUXNrLN4eA5NQ/s96-c/photo.jpg","loginType":"login","needsVerification":false,"verificationInfo":{"type":"id","generated":true,"id":"$User:351b7ef0-e33f-11e9-a5c3-ca01bd5ad223.verificationInfo","typename":"UserVerificationInfo"},"__typename":"User"},"Exam:72975611-4a5e-11e5-a83f-8b51c790d8b8":{"id":"72975611-4a5e-11e5-a83f-8b51c790d8b8","__typename":"Exam"},"Group:72975611-4a5e-11e5-a83f-8b51c790d8b8":{"id":"72975611-4a5e-11e5-a83f-8b51c790d8b8","__typename":"Group"},"$User:351b7ef0-e33f-11e9-a5c3-ca01bd5ad223.verificationInfo":{"isVerified":false,"__typename":"UserVerificationInfo"},"ROOT_QUERY":{"me":{"type":"id","generated":false,"id":"User:351b7ef0-e33f-11e9-a5c3-ca01bd5ad223","typename":"User"},"css":{"type":"json","json":["https://gradeup-assets.grdp.co/website/_next/static/chunks/styles.9ac674eb.chunk.css"]}}}},"page":"/home","query":{},"buildId":"aMc2Im49SDQykw-c8Hipy","dynamicBuildId":false,"assetPrefix":"https://gradeup-assets.grdp.co/website","dynamicIds":["+SFK","/W8u","+SFK","LJkV","+SFK","+07V"]}</script>
<script async="" id="__NEXT_PAGE__/home" src="https://gradeup-assets.grdp.co/website/_next/static/aMc2Im49SDQykw-c8Hipy/pages/home.js" crossorigin="anonymous"></script><script async="" id="__NEXT_PAGE__/_app" src="https://gradeup-assets.grdp.co/website/_next/static/aMc2Im49SDQykw-c8Hipy/pages/_app.js" crossorigin="anonymous"></script>
<script async="" src="https://gradeup-assets.grdp.co/website/_next/static/chunks/commons.b7bb537347ffa3efa2ca.js" crossorigin="anonymous"></script>
<script async="" src="https://gradeup-assets.grdp.co/website/_next/static/chunks/chunk-auth.cbe2701cb0c192a24933.js" crossorigin="anonymous"></script><script async="" src="https://gradeup-assets.grdp.co/website/_next/static/chunks/commons.b7bb537347ffa3efa2ca.js" crossorigin="anonymous"></script>
<script async="" src="https://gradeup-assets.grdp.co/website/_next/static/chunks/chunk-mobile-bottom-drawer.6143cbf30560cebebfac.js" crossorigin="anonymous"></script>
<script async="" src="https://gradeup-assets.grdp.co/website/_next/static/chunks/commons.b7bb537347ffa3efa2ca.js" crossorigin="anonymous"></script>
<script async="" src="https://gradeup-assets.grdp.co/website/_next/static/chunks/chunk-header-entity.aba64a87af351f53236a.js" crossorigin="anonymous"></script>
<script src="https://gradeup-assets.grdp.co/website/_next/static/runtime/webpack-1b592059327519b38dda.js" async="" crossorigin="anonymous"></script>
<script src="https://gradeup-assets.grdp.co/website/_next/static/chunks/commons.b7bb537347ffa3efa2ca.js" async="" crossorigin="anonymous"></script>
<script src="https://gradeup-assets.grdp.co/website/_next/static/chunks/styles.543be2f0b9841652d67e.js" async="" crossorigin="anonymous"></script>
<script src="https://gradeup-assets.grdp.co/website/_next/static/runtime/main-82fc5e36d5ad3edb86b0.js" async="" crossorigin="anonymous">
</script>
</body>
</html>	
	
<?php } ?>
<div id="myModal" class="modal fade elf" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
                        <section class="flex flex-shrink-0">
                           <header class="auth__header js-auth-login flex-grow-1 flex items-center justify-between">
                              <div class="flex flex-column">
                                 <p class="auth__header__heading b green mv0 le f3" style="display:none">Login to Education</p>
                                 <p class="auth__header__heading green b mv0 re f3">Create an Account</p>
                                 <p class="mv0 f6">To Score Better in your exam </p>
                              </div>
                              <span class="auth__close-button">
                             	<button type="button" class="close" data-dismiss="modal">&times;</button>
                              </span>
                           </header>
                        </section>
                        <section class="flex flex-shrink-0 auth__social justify-between mv3">
                        <span style="transition:opacity 0.5s;opacity:0.6">
                        <button type="button" class="auth__facebook relative auth__social__btn disabled ma0 tc pointer tracked-sm outline-0 b bg-blue white pa3 w-100 bn medium">Facebook</button>
                        </span>
                        <button type="button" class="auth__google flex items-center relative auth__social__btn disabled ma0 b tc pointer tracked-sm bg-white black ba b--near-white pa3">Google</button>
                        </section>
                        <p class="tc mt1 mb3">OR</p>
                        <section class="flex flex-column">
                           <form id="loginForm" >
                           	  <div class="auth__form-group mb4 relative loginemail"><input type="text" required="" name="name" id="name" autoComplete="name" class="auth__field outline-0 f6 db w-100 pa2 b--black-10 ba " value="" /><label class="green f5 ph1 ph0-l">Name</label></div>
                              <div class="auth__form-group mb4 relative"><input type="email" required="" autoComplete="email" class="auth__field outline-0 f6 db w-100 pa2 ba b--black-10" name="email" value="" /><label class="green f5 b ph1 ph0-l">Email</label></div>
                              <div class="auth__form-group mb2 relative"><input type="password" required="" autoComplete="current-password" class="auth__field outline-0 f6 db w-100 pa2 ba b--black-10" name="password" value="" /><label class="green f5 b ph1 ph0-l">Password</label></div>
                              <input type="hidden" name="deviceType" value="web"  />
                              <p class="auth__forgot-password flex justify-end mv3 silver fw1 f6"><a class="js-auth-forgot-psswd pointer red">Forgot Password?</a></p>
                              <input type="submit" value="LOGIN" class="btn auth__button js-auth-login bg-dlg-gradient white bn db f4 fw1 outline-0 w-100 tc"  />
                              <a class="auth__body__register-text js-auth-toggle pointer link green tc db mt3">Not a User? REGISTER using Email</a>
                              
                              <input type="hidden" name="deviceType" value="web" />
                              <input type="submit" value="REGISTER" class="btn auth__button js-auth-register bg-dlg-gradient white bn db f4 fw1 outline-0 w-100 tc"  />
                              <a class="auth__body__login-text js-auth-toggle pointer link green tc db mt3">Already Registered? LOGIN</a>
                           </form>
                        </section>
      </div>
    </div>
  </div>
</div>


<div id="myRegister" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
		<h4 class="modal-title">Which Exam you have prepared for ?</h4>      
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="exams_prepair" data-item="Bank & Insurance">
        		<input type="hidden" class="new_password" >
				<div class="col-md-2"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>
				<div class="col-md-10"><span>Bank & Insurance</span><br><small>IBPS,PO,RBI Assistant,SBI SO,NABARD</small></div>
			</div>

			<div class="exams_prepair " data-item="SSC & Govt Job Exams">
				<div class="col-md-2"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-10"><span>SSC & Govt Job Exams</span><br><small>SSC, CGL 2018,SSC,CHSL,SSC Steno,Railways Recuirment </small></div>			
			</div>	
        </div>
				
				
		<div class="row">		
			<div class=" exams_prepair" data-item="GATE and PSU Jobs">
				
				<div class="col-md-2"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-10"><span>GATE and PSU Jobs</span><br><small>GATE,BARC,SSC,IE,ISRO</small></div>
				</div>
				
				<div class=" exams_prepair"  data-item="JEE Main">
				
				<div class="col-md-2"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-10"><span>JEE</span><br><small>JEE Main,JEE Advanced,BITSAT,UPSEE,SRMEEE</small></div>
				</div>
		</div>		
				
				
		<div class="row">		
			<div class="exams_prepair " data-item="Medical Entrance">
				<div class="col-md-2"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-10"><span>Medical Entrance</span><br><small>NEET,LIG,AIMMS,JIPMER</small></div>
			</div>
				
				
			<div class="exams_prepair " data-item="UPSE">
				<div class="col-md-2"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-10"><span>UPSE & State Servuies</span><br><small>UPSC Pre,State PSE</small></div>
			</div>
		</div>				
				
				
		<div class="row">				
				
				<div class="exams_prepair " data-item="UPSC Pre">
				
				<div class="col-md-2"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-10"><span>UPSC Pre,State PSE</span><br><small>CAT, IIFT, XAT, NMAT, MAT, CMAT, General</small></div>
				</div>
				
				
				<div class="exams_prepair " data-item="Teaching Exams">
				
				<div class="col-md-2"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-10"><span>Teaching Exams</span><br><small>KVS,CTET,NVS,UPTET,Army teacher recruitment</small></div>
				</div>
	   	</div>							
				
		<div class="row">						
				<div class="exams_prepair " data-item="NET">
				
				<div class="col-md-2"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
				<div class="col-md-10"><span>NET</span><br><small>UGC,NET,CSIR,NET,MP,SET</small></div>
				</div>
				
				
				<div class="exams_prepair " data-item="Defence Exams">
				
				<div class="col-md-2"><img src="<?php echo asset('assets/img/apple-icon.png')?>"></div>	
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$(".elf .auth__body__login-text").hide();
		$(".elf .js-auth-register").hide();
		$(".elf .loginemail").hide();
		
		var loginpath = "<?php echo url('/'). '/loginresult'; ?>";
		var registerpath = "<?php echo url('/'). '/registerresult'; ?>";
		$(".elf .auth__body__register-text").click(function(){
			
			$(this).hide();
   			$(".elf .auth__body__login-text").show();
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
	   	
	   	
	   	$(".homeregister").click(function(){
			alert('register');
			$(this).hide();
   			$(".ehlr .auth__body__login-text").show();
			$(".ehlr .js-auth-register").show();
			$(".ehlr .homeloginemail").show();
			$(".ehlr .js-auth-login").hide();
			$(".ehlr .re").show();
			$(".ehlr .le").show();
			$(".js-auth-forgot-psswd").hide();
			
			//$("#loginForm").attr('action',loginpath);
	   	});
	   	$(".homelogin").click(function(){
	   		alert('login');
			$(this).hide();
   			$(".ehlr .auth__body__register-text").show();
			$(".ehlr .js-auth-register").show();
			$(".ehlr .homeloginemail").hide();
			$(".ehlr .js-auth-login").show();
			$(".ehlr p.le").show();
			$(".ehlr p.re").hide();
			//$("#loginForm").attr('action',loginpath);
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