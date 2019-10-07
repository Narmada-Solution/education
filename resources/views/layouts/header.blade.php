<?php
if (Auth::user()) { 
$id = Auth::user()->id;
$name = Auth::user()->name;
}
?>

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
                              <li data-section-id="section-0" class="all-exams-option bank"><a class="link gray pointer ma0 db"><span>Bank</span></a></li>
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
                           <div class="all-exam-sections w-75 bank_next" data-section-id="section-1">
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
                           <div class="all-exam-sections w-75 dn" data-section-id="section-1">
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
                    
                <?php
                if (!Auth::user()) { 
                ?>
                  <p class="bg-green br2 white tc bn ma0 pointer tracked-sm outline-0 b--solid flex items-center auth-btn">
                  	<a rel="noopener noreferrer" data-toggle="modal" data-target="#myModal" class="auth__login js-show-login link white no-hover-color f5">Login / Register</a>
                  	<!-- <span class="mr1 ml1 white">/</span>
                  	<a rel="noopener noreferrer" class="auth__register js-show-register link white no-hover-color f5">Register</a> -->
                  </p>
                <?php } else { ?>
                
                <div class="header-menu-item main-header__user relative h-100" id="useraccessmenu">
                     <div class="dd-menu self-center relative dd-menu-center  ">
                        <a rel="noopener noreferrer" class="header-menu-item__link main-header__user__link js-sub-menu-link flex h-100 flex-column items-center pointer no-underline ph2 ">
                           <div class="main-header__user-pic ma-auto br-100 overflow-hidden" style="background:indigo ; background-repeat: no-repeat; background-position: center center; background-size: cover;height: 30px; width: 30px; margin-top: 5px;padding-left: 10px;padding-top: 5px;color: white;">{{ substr($name,0,1) }}</div>
                           <div class="anchor-label flex header_item_label">
                              <span class="gray f7 lh-solid mt1 fw3">Hi, {{ $name }}</span>
                              <div class="relative"><span class="db ml1 gray">▾</span></div>
                           </div>
                        </a>
                        <div class="dd-menu-items ">
                           <ul class="dd-items-center  dd-items--inactive" id="useraccessulmenuitems" style="max-height: 0px; border-width: 0px;">
                              <li><a href="{{ URL::to('/logout')  }}">Logout</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                    
                <?php } ?>
               </div>
            </div>
         </header>
        <div class="header-spacer header-spacer--no-alert" style="height:63px"></div>