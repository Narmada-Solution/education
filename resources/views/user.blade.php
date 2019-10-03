<?php
if(isset(Auth::user()->id) && Auth::user()->id != ''){
	$id = Auth::user()->id;
	$name = Auth::user()->name;
?>
<!DOCTYPE html>
<html class="" lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=yes">
      <meta property="fb:pages" content="658783224252671,1499553353670220">
      <meta name="theme-color" content="#45b97c">
      <meta name="apple-mobile-web-app-title" content="Gradeup">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="#45b97c">
      <link rel="preconnect" href="https://gradeup-assets.grdp.co/website/">
      <link rel="preconnect" href="https://gs-users-images.grdp.co/">
      <link rel="preconnect" href="https://gs-post-images.grdp.co/">
      <link rel="preconnect" href="https://mule.gradeup.co/">
      <link rel="preconnect" href="https://cdnjs.cloudflare.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/">
      <style>article,aside,footer,header,main,nav,section{display:block}input{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;overflow:visible}.border-box,a,article,aside,body,div,footer,form,header,html,li,main,nav,p,section,ul{box-sizing:border-box}.bt{border-top-style:solid;border-top-width:1px}.b--very-light-gray{border-color:#d8d8d8}.flex-row{flex-direction:row}.fw2{font-weight:200}.fw4{font-weight:400}.fw5{font-weight:500}.fw6{font-weight:600}.h1{height:1rem}.h2{height:2rem}.h-25{height:25%}.h-50{height:50%}.w2{width:2rem}.w3{width:4rem}.w4{width:8rem}.w5{width:16rem}.w-40{width:40%}.w-50{width:50%}.dark-gray{color:#333}.bg-themed-blue-light{background-color:#101f38}.pv2{padding-top:.5rem;padding-bottom:.5rem}.ml0{margin-left:0}.mr3{margin-right:1rem}.mv1{margin-top:.25rem;margin-bottom:.25rem}.mh0{margin-left:0;margin-right:0}.ma-auto{margin:auto}.z-3{z-index:3}.white-space-pre-wrap{white-space:pre-wrap}.svg-f-silver{fill:#999}.fwc-2{width:100%;max-width:980px;margin-left:auto;margin-right:auto}.header-menu-item .dd-menu .dd-menu-items ul.dd-items-center li>*,.home-post-types .dd-menu .dd-menu-items ul.dd-items-center li>*{text-align:left;font-family:Nunito Sans;font-weight:400}.home-post-types .dd-menu-items .dd-items-center{background-color:#fff;box-shadow:none;border:1px solid rgba(0,0,0,.05)}.home-post-types .dd-menu-items .dd-items-center li a{color:#666!important}.home-post-types .dd-menu-items .dd-items-center li{margin-bottom:0!important}.home-post-types .dd-menu-items .dd-items-center li>*{display:flex!important;margin:0!important}.main-header__user{display:none}.shimmer{background:#eee;-webkit-filter:blur(2px);filter:blur(2px)}main{flex-basis:100%;max-width:100%;margin:0}aside{display:none}@media screen and (min-width:60em){.dn-l{display:none}.db-l{display:block}.flex-l{display:flex}.flex-auto-l{flex:1 1 auto;min-width:0;min-height:0}.justify-start-l{justify-content:flex-start}.justify-end-l{justify-content:flex-end}.w-auto-l{width:auto}.ph0-l{padding-left:0;padding-right:0}.ml3-l{margin-left:1rem}.mh4-l{margin-left:2rem;margin-right:2rem}main{flex-basis:67.62%;max-width:760px;margin:0}.fwc-2 main{max-width:660px}aside{display:flex;flex-direction:column;flex-basis:31%;max-width:350px}.main-header{padding:0;max-height:64px}.main-header__user-pic{width:22px;height:22px;margin-bottom:2px}.main-header>.main-header-item{height:64px}.main-header__all-exam-link,.main-header__user{display:block}.header-menu-item{margin-right:10px}.header-menu-item:last-child{margin-right:0}.header-menu-item.main-header__store{display:block}.header-menu-item .dd-menu-items{max-height:620px}.header-menu-item .dd-menu-items li{margin:0}.header-menu-item .dd-menu-items .dd-items-center{border:1px solid rgba(0,0,0,.05);background-color:#fff}.header-menu-item .dd-menu .dd-menu-items ul.dd-items-center li>*{text-align:left}.header-menu-item .dd-menu .dd-menu-items{margin-top:0}.header-menu-item .dd-menu .dd-menu-items ul li>:not(.dd-item-ignore){padding:.75em 1em}.main-header__search-box{order:0;max-width:300px;flex-grow:1;position:relative}.main-header__search-box svg.search-icon{width:20px;height:20px;left:20px;position:absolute;top:5px;stroke:#999}.main-header__search-box input[type=search]{position:static;-webkit-transform:translateY(0);transform:translateY(0);width:100%;border-radius:20px;border:1px solid #ccc;color:#999;padding:6px 36px 6px 60px}.search-overlay{display:none}.header-spacer.header-spacer--no-alert{max-height:none}#searchBoxForm{width:250px}.header-menu-item .dd-menu.dd-menu-center .dd-menu-items{left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}:root{font-size:16px}}.dd-menu .dd-menu-items.mt0{margin-top:0}.dd-menu.dd-menu-center .dd-menu-items.dd-sub-menu-items{top:0;left:100%;-webkit-transform:translateX(0);transform:translateX(0);margin-top:0}html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}a{background-color:transparent;-webkit-text-decoration-skip:objects}img{border-style:none}svg:not(:root){overflow:hidden}button,input{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;overflow:visible}button{text-transform:none}[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}a,body,div,form,h1,h2,h3,header,html,input[type=email],input[type=password],input[type=text],li,nav,p,section,ul{box-sizing:border-box}img{max-width:100%}.cover{background-size:cover!important}.outline-0{outline:0}.ba{border-style:solid;border-width:1px}.bb{border-bottom-style:solid;border-bottom-width:1px}.bn{border-style:none;border-width:0}.b--near-white{border-color:#f4f4f4}.b--black-10{border-color:rgba(0,0,0,.1)}.b--green{border-color:#50b167}.br2{border-radius:.25rem}.br-100{border-radius:100%}.b--solid{border-style:solid}.bw2{border-width:.25rem}.top-0{top:0}.right-0{right:0}.left-0{left:0}.dn{display:none}.db{display:block}.flex{display:flex}.flex-column{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.self-center{align-self:center}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-around{justify-content:space-around}.flex-grow-0{flex-grow:0}.flex-grow-1{flex-grow:1}.flex-shrink-0{flex-shrink:0}.nunito{font-family:nunito sans}.b{font-weight:700}.fw1{font-weight:100}.fw3{font-weight:300}.h2-5{height:3rem}.h3{height:4rem}.h3-5{height:6rem}.h5{height:16rem}.h6{height:27rem}.h-100{height:100%}.lh-solid{line-height:1}.link{text-decoration:none}.list{list-style-type:none}.w2-5{width:3rem}.w6{width:24rem}.w-25{width:25%}.w-31{width:31%}.w-75{width:75%}.w-80{width:80%}.w-100{width:100%}.w-third{width:33.33333%}.overflow-hidden{overflow:hidden}.overflow-auto{overflow:auto}.relative{position:relative}.absolute{position:absolute}.fixed{position:fixed}.o-0{opacity:0}.black{color:#000}.gray{color:#666}.silver{color:#999}.white{color:#fff}.red{color:#ed5b6c}.green{color:#50b167}.bg-white{background-color:#fff}.bg-green{background-color:#50b167}.bg-blue{background-color:#3c5a99}.pa0{padding:0}.pa2{padding:.5rem}.pa3{padding:1rem}.pa4{padding:2rem}.pb1{padding-bottom:.25rem}.pb2{padding-bottom:.5rem}.pb3{padding-bottom:1rem}.pt4{padding-top:2rem}.pv3{padding-top:1rem;padding-bottom:1rem}.ph1{padding-left:.25rem;padding-right:.25rem}.ph2{padding-left:.5rem;padding-right:.5rem}.ph3{padding-left:1rem;padding-right:1rem}.ph5{padding-left:4rem;padding-right:4rem}.ma0{margin:0}.ml1{margin-left:.25rem}.ml2{margin-left:.5rem}.ml4-5{margin-left:3.5rem}.mr1{margin-right:.25rem}.mr2{margin-right:.5rem}.mb0{margin-bottom:0}.mb2{margin-bottom:.5rem}.mb3{margin-bottom:1rem}.mb4{margin-bottom:2rem}.mt0{margin-top:0}.mt1{margin-top:.25rem}.mt3{margin-top:1rem}.mv0{margin-top:0;margin-bottom:0}.mv3{margin-top:1rem;margin-bottom:1rem}.mv4{margin-top:2rem;margin-bottom:2rem}.mh1{margin-left:.25rem;margin-right:.25rem}.mh3{margin-left:1rem;margin-right:1rem}.no-underline{text-decoration:none}.tc{text-align:center}.f3{font-size:1.5rem}.f4{font-size:1.25rem}.f5{font-size:1rem}.f6{font-size:.875rem}.f7{font-size:.75rem}.center{margin-right:auto}.center,.ml-auto{margin-left:auto}.z-0{z-index:0}.z-1{z-index:1}.z-7{z-index:7}.z-10{z-index:10}body{overflow-x:hidden}button{font-family:nunito sans,sans-serif}img{position:relative;overflow:hidden}#searchBoxForm{width:auto}input:-webkit-autofill{-webkit-box-shadow:0 0 0 30px #fff inset}input:disabled,input[disabled]{opacity:.6}.header-menu-item .dd-menu .dd-menu-items ul{min-width:170px}.svg-fn{fill:none}.svg-s-silver{stroke:#999}.tracked-sm{letter-spacing:.05rem}.bg-dlg-gradient{background:linear-gradient(90deg,#1a806c,#50b167)}.fixed-width-container{width:100%;max-width:1130px;margin-left:auto;margin-right:auto}.box-shadow{border:2px solid rgba(0,0,0,.05)}.header-menu-item .dd-menu.dd-menu-center .dd-menu-items{left:0;-webkit-transform:translateX(-60%);transform:translateX(-60%)}.header-menu-item .dd-menu .dd-menu-items ul.dd-items-center li>*{text-align:left;font-family:Nunito Sans;font-weight:400}.header-menu-item .dd-menu .dd-menu-items ul li>:not(.dd-item-ignore){padding:.75em 1.25em}.header-menu-item.main-header__store{display:none}.main-header{border-bottom:1px solid #f4f4f4;background:#fff;padding:0 14px}.header-spacer.header-spacer--no-alert{max-height:49px;min-height:49px}.main-header>.main-header-item{height:48px}.main-header__logo{margin-right:30px}.main-header__all-exam-link{margin:0 30px 0 0;display:none}.main-header__search-box{font-size:.833rem;order:2}.main-header__search-box.searchInputClosed input{position:fixed;border-radius:0;color:#999}.search-overlay{position:fixed;background:rgba(0,0,0,.4);height:100%;z-index:7}.main-header__search-box.searchInputClosed input,.search-overlay{-webkit-transform:translateY(-200%);transform:translateY(-200%);top:0;left:0;width:100%}.header-menu-item{margin-right:20px}.header-menu-item:last-child{margin-right:0}.main-header .auth-btn{display:none}#__next{display:flex;flex-direction:column;min-height:100vh}img:after{content:"";font-size:16px;font-family:FontAwesome;display:block;position:absolute;z-index:2;top:0;left:0;width:100%;height:100%;background-color:#c2c2c2}@font-face{font-family:Poppins;font-style:normal;font-weight:700;font-display:swap;src:local("Poppins Bold"),local("Poppins-Bold"),url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7Z11lFd2JQEl8qw.woff2) format("woff2");unicode-range:U+0900-097f,U+1cd0-1cf6,U+1cf8-1cf9,U+200c-200d,U+20a8,U+20b9,U+25cc,U+a830-a839,U+a8e0-a8fb}@font-face{font-family:Poppins;font-style:normal;font-weight:700;font-display:swap;src:local("Poppins Bold"),local("Poppins-Bold"),url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2) format("woff2");unicode-range:U+0100-024f,U+0259,U+1e??,U+2020,U+20a0-20ab,U+20ad-20cf,U+2113,U+2c60-2c7f,U+a720-a7ff}@font-face{font-family:Poppins;font-style:normal;font-weight:700;font-display:swap;src:local("Poppins Bold"),local("Poppins-Bold"),url(https://fonts.gstatic.com/s/poppins/v5/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2) format("woff2");unicode-range:U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd}@font-face{font-family:Nunito Sans;font-style:italic;font-weight:300;font-display:swap;src:local("Nunito Sans Light Italic"),local("NunitoSans-LightItalic"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4G3JoY1wIUrt9w6fk2A.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1ea0-1ef9,U+20ab}@font-face{font-family:Nunito Sans;font-style:italic;font-weight:300;font-display:swap;src:local("Nunito Sans Light Italic"),local("NunitoSans-LightItalic"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4G3JoY10IUrt9w6fk2A.woff2) format("woff2");unicode-range:U+0100-024f,U+0259,U+1e??,U+2020,U+20a0-20ab,U+20ad-20cf,U+2113,U+2c60-2c7f,U+a720-a7ff}@font-face{font-family:Nunito Sans;font-style:italic;font-weight:300;font-display:swap;src:local("Nunito Sans Light Italic"),local("NunitoSans-LightItalic"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe01MImSLYBIv1o4X1M8cce4G3JoY1MIUrt9w6c.woff2) format("woff2");unicode-range:U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:400;font-display:swap;src:local("Nunito Sans Regular"),local("NunitoSans-Regular"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe0qMImSLYBIv1o4X1M8cceyI9tAcVwob5A.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1ea0-1ef9,U+20ab}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:400;font-display:swap;src:local("Nunito Sans Regular"),local("NunitoSans-Regular"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe0qMImSLYBIv1o4X1M8ccezI9tAcVwob5A.woff2) format("woff2");unicode-range:U+0100-024f,U+0259,U+1e??,U+2020,U+20a0-20ab,U+20ad-20cf,U+2113,U+2c60-2c7f,U+a720-a7ff}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:400;font-display:swap;src:local("Nunito Sans Regular"),local("NunitoSans-Regular"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe0qMImSLYBIv1o4X1M8cce9I9tAcVwo.woff2) format("woff2");unicode-range:U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:600;font-display:swap;src:local("Nunito Sans SemiBold"),local("NunitoSans-SemiBold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc9iB85iU1ECVZl_86Y.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1ea0-1ef9,U+20ab}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:600;font-display:swap;src:local("Nunito Sans SemiBold"),local("NunitoSans-SemiBold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc9iB85jU1ECVZl_86Y.woff2) format("woff2");unicode-range:U+0100-024f,U+0259,U+1e??,U+2020,U+20a0-20ab,U+20ad-20cf,U+2113,U+2c60-2c7f,U+a720-a7ff}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:600;font-display:swap;src:local("Nunito Sans SemiBold"),local("NunitoSans-SemiBold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc9iB85tU1ECVZl_.woff2) format("woff2");unicode-range:U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:700;font-display:swap;src:local("Nunito Sans Bold"),local("NunitoSans-Bold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8GBs5iU1ECVZl_86Y.woff2) format("woff2");unicode-range:U+0102-0103,U+0110-0111,U+1ea0-1ef9,U+20ab}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:700;font-display:swap;src:local("Nunito Sans Bold"),local("NunitoSans-Bold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8GBs5jU1ECVZl_86Y.woff2) format("woff2");unicode-range:U+0100-024f,U+0259,U+1e??,U+2020,U+20a0-20ab,U+20ad-20cf,U+2113,U+2c60-2c7f,U+a720-a7ff}@font-face{font-family:Nunito Sans;font-style:normal;font-weight:700;font-display:swap;src:local("Nunito Sans Bold"),local("NunitoSans-Bold"),url(https://fonts.gstatic.com/s/nunitosans/v3/pe03MImSLYBIv1o4X1M8cc8GBs5tU1ECVZl_.woff2) format("woff2");unicode-range:U+00??,U+0131,U+0152-0153,U+02bb-02bc,U+02c6,U+02da,U+02dc,U+2000-206f,U+2074,U+20ac,U+2122,U+2191,U+2193,U+2212,U+2215,U+feff,U+fffd}:root{font-size:14px}*,body,html{line-height:1.4}body{font-family:Nunito Sans,Poppins,sans-serif;font-size:1rem;color:#0b182f}h1{font-family:Poppins;font-size:1.8rem}h1,h2{font-weight:700;color:#0b182f}h2{font-size:1.5rem;margin-top:1.667em}h3{font-size:1.333rem;color:#0b182f;margin-bottom:.5em}.head,h3{font-weight:700}.head{font-family:Poppins;font-size:1.5rem}::-webkit-input-placeholder{font-size:.833rem;color:#999}::-moz-placeholder{font-size:.833rem;color:#999}:-ms-input-placeholder{font-size:.833rem;color:#999}:-moz-placeholder{font-size:.833rem;color:#999}a{color:#0072d6;font-weight:600}p{font-size:1.2rem;line-height:1.6;margin:1rem 0}li{margin-bottom:.5rem}@media screen and (min-width:60em){.du-l{display:unset}.dn-l{display:none}.db-l{display:block}.flex-l{display:flex}.flex-auto-l{flex:1 1 auto;min-width:0;min-height:0}.flex-row-l{flex-direction:row}.w-10-l{width:10%}.w-24-l{width:24%}.w-40-l{width:40%}.w-60-l{width:60%}.w-93-l{width:93%}.pa5-l{padding:4rem}.ph0-l{padding-left:0;padding-right:0}.ph5-l{padding-left:4rem;padding-right:4rem}.ml5-l{margin-left:4rem}.mv4-l{margin-top:2rem;margin-bottom:2rem}.main-header{padding:0;max-height:64px}.main-header .auth-btn{display:flex;padding:7.5px 10px}.main-header>.main-header-item{height:64px}.main-header__all-exam-link{display:block}.main-header__all-exams__menu{z-index:8;padding-top:20px;top:43px}.header-menu-item{margin-right:10px}.header-menu-item:last-child{margin-right:0}.header-menu-item.main-header__store{display:block}.header-menu-item .dd-menu-items{max-height:620px}.header-menu-item .dd-menu-items li{margin:0}.header-menu-item .dd-menu-items .dd-items-center{border:1px solid rgba(0,0,0,.05);background-color:#fff}.header-menu-item .dd-menu .dd-menu-items ul.dd-items-center li>*{text-align:left}.header-menu-item .dd-menu .dd-menu-items{margin-top:0}.header-menu-item .dd-menu .dd-menu-items ul li>:not(.dd-item-ignore){padding:.75em 1em}.all-exams-options .all-exams-option a.link{padding:13px 30px}.all-exam-sections .section a.list-anchor,.all-exam-sections .section p.section-p{padding:5px 30px}.all-exam-sections .section{background:#f4f4f4}.all-exam-sections .section:nth-child(2n),.all-exams-options .all-exams-option.active{background:#ededed}.main-header__search-box{order:0;max-width:300px;flex-grow:1;position:relative}.main-header__search-box svg.search-icon{width:20px;height:20px;left:20px;position:absolute;top:5px;stroke:#999}.main-header__search-box input[type=search]{position:static;-webkit-transform:translateY(0);transform:translateY(0);width:100%;border-radius:20px;border:1px solid #ccc;color:#999;padding:6px 36px 6px 60px}.search-overlay{display:none}.header-spacer.header-spacer--no-alert{max-height:none}#searchBoxForm{width:250px}.header-menu-item .dd-menu.dd-menu-center .dd-menu-items{left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}:root{font-size:16px}}.auth__body{padding:20px 14px}.auth__social>*{flex-basis:49%;display:flex;justify-content:center}.auth__field{border:none;border-bottom:1px solid #d8d8d8;padding:5px 2.5px}.auth__form-group label{position:absolute;left:0;top:8px;line-height:1}input.auth__field~label{-webkit-transform:translateY(-25px) scale3d(.9,.9,1);transform:translateY(-25px) scale3d(.9,.9,1)}input.auth__field[value=""]:not(:focus)~label{-webkit-transform:translate(0) scaleX(1);transform:translate(0) scaleX(1);color:rgba(0,0,0,.7);font-weight:400}.auth__button{padding:10px 5px}.auth__facebook:before{content:"";background:url(https://gs-post-images.grdp.co/2018/9/facebook_64px-img1536216724256-51.png-rs-high-webp.png) no-repeat;position:absolute;left:5%;height:40px;width:30px;background-size:30px 30px;bottom:0}.auth__google:before{content:"";background:url(https://gs-post-images.grdp.co/2018/9/google_64px-img1536216689631-26.png-rs-high-webp.png) no-repeat;position:absolute;left:10%;height:35px;width:35px;background-size:35px 35px}@media screen and (min-width:60em){.auth__body{padding:20px 35px}}.dd-menu{display:inline-block;position:relative}.dd-menu.dd-menu-center .dd-menu-items{left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.dd-menu .dd-menu-items{position:absolute;z-index:7;margin:.5em 0 0}.dd-menu .dd-menu-items ul{list-style:none;padding:0;margin:0;color:#000;background-color:#fefefe;box-shadow:0 0 4px rgba(0,0,0,.15),0 2px 4px rgba(0,0,0,.29)}.dd-menu .dd-menu-items ul.dd-items-center li>*{text-align:center}.dd-menu .dd-menu-items ul li>:not(.dd-item-ignore){display:flex;width:auto;min-width:100%;padding:1em 1.5em;font-family:Roboto,sans-serif;white-space:pre;color:inherit;text-decoration:none;font-size:inherit}.dd-menu-items ul.dd-items--inactive{opacity:0;visibility:hidden}</style>
      <link rel="shortcut icon" href="https://gs-post-images.grdp.co/2018/11/rocketfavicon-img1542202190449-91.png-rs-high-webp.png" type="image/x-icon">
      <link rel="manifest" href="https://gradeup.co/manifest.web.json">
      <script type="text/javascript" async="" src="<?php echo asset('assets/user/js/analytics.js');?>">
      	
      	//<?php echo asset('assets/user/js/home.js')?>
      	
      </script><script type="text/javascript" async="" src="<?php echo asset('assets/user/js/js_002')?>"></script>
      <script type="text/javascript" async="" src="<?php echo asset('assets/user/js/js')?>"></script>
      <script type="text/javascript" async="" src="<?php echo asset('assets/user/js/ec.js')?>"></script>
      
      <script src="<?php echo asset('assets/user/js/990336904319800.js')?>" async=""></script>
      <script async="" src="<?php echo asset('assets/user/js/fbevents.js')?>"></script>
      <script type="text/javascript" async="" src="<?php echo asset('assets/user/js/conversion_async.js')?>"></script>
      <script type="text/javascript" async="" src="<?php echo asset('assets/user/js/analytics.js')?>"></script>
      <script async="" src="<?php echo asset('assets/user/js/gtm.js')?>"></script>
      <script src="<?php echo asset('assets/user/js/sdk.js')?>" async="" crossorigin="anonymous"></script>
      <script type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","name":"Gradeup","url":"https://gradeup.co/"}</script><script>
         window.addEventListener('beforeinstallprompt', function(e){
         	// Prevent Chrome 67 and earlier from automatically showing the prompt
         	e.preventDefault();
         }); 
      </script>
      <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" class="next-head">
      <meta charset="utf-8" class="next-head">
      <link rel="preload" as="style" href="<?php echo asset('assets/user/css/styles_002.css')?>" class="next-head">
      <title class="next-head">User: India's Largest Exam Prep Site for BANK, SSC, GATE, JEE, NEET</title>
      <link rel="preload" href="<?php echo asset('assets/user/js/home.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/_app.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/commons.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/chunk-auth.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/commons.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/chunk-mobile-bottom-drawer.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/commons.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/chunk-header-entity.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/webpack-68cb825bc42890b3f68a.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/commons.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/styles.js')?>" as="script" crossorigin="anonymous">
      <link rel="preload" href="<?php echo asset('assets/user/js/main-82fc5e36d5ad3edb86b0.js')?>" as="script" crossorigin="anonymous">
      <script charset="utf-8" src="<?php echo asset('assets/user/css/chunk-createpost-modal.js')?>" crossorigin="anonymous"></script>
      <meta name="description" content="User - Exam preparation for GATE, JEE, NEET, BANK, SSC/Govt jobs, CTET. Get daily GK updates, notifications, previous years' papers &amp; free mock tests." class="next-head">
      <meta property="og:title" content="User: India's Largest Exam Prep Site for BANK, SSC, GATE, JEE, NEET" class="next-head">
      <meta property="og:description" content="User - Exam preparation for GATE, JEE, NEET, BANK, SSC/Govt jobs, CTET. Get daily GK updates, notifications, previous years' papers &amp; free mock tests." class="next-head">
      <meta property="og:image" content="" class="next-head">
      <meta property="twitter:card" content="summary_large_image" class="next-head">
      <meta property="twitter:site" content="@gradeupapp" class="next-head">
      <meta property="twitter:title" content="User: India's Largest Exam Prep Site for BANK, SSC, GATE, JEE, NEET" class="next-head">
      <meta property="twitter:description" content="User - Exam preparation for GATE, JEE, NEET, BANK, SSC/Govt jobs, CTET. Get daily GK updates, notifications, previous years' papers &amp; free mock tests." class="next-head">
      <meta property="twitter:image:src" content="" class="next-head">
      <meta name="ROBOTS" content="INDEX, FOLLOW" class="next-head">
      <link rel="canonical" href="https://gradeup.co/" class="next-head">
      <script type="application/ld+json" class="next-head">{"@graph":[{"@context":"http://schema.org","@type":"WebSite","url":"https://gradeup.co/","potentialAction":{"@type":"SearchAction","target":"https://gradeup.co/search?search={search_term}","query-input":"required name=search_term"}}]}</script><script type="application/ld+json" class="next-head">{"@context":"http://schema.org","@type":"Corporation","name":"Gradeup ","url":"https://gradeup.co","logo":"https://gs-post-images.grdp.co/2017/8/gradeup-logo-img1503378653366-55-rs-low-webp.jpg","description":"Study Smart, Score Better! Join India's largest online learning community","telephone":"+919650053463","address":{"@type":"PostalAddress","addressCountry":"IN","addressLocality":"Sector 125,\tNoida","addressRegion":"Uttar Pradesh","postalCode":"201313","streetAddress":"Windsor IT Park, Tower - A, 2nd Floor, Sector 125"}}</script><script type="application/ld+json" class="next-head">{"@context":"http://schema.org","@type":"Organization","location":{"@type":"Place","address":"Windsor IT Park, Tower - A, 2nd Floor, Sector 125, Noida, Uttar Pradesh 201303"},"description":"Gradeup (Gradestack) - For IBPS, SSC/Gov jobs, CAT, Engineering, GATE exam preparation! Get daily dose of GK updates, current affairs & free mock test.","name":"Gradeup","email":"contact@gradeup.co","logo":{"@type":"ImageObject","url":"https://gs-post-images.grdp.co/2017/8/gradeup-logo-img1503378653366-55-rs-low-webp.jpg","width":"320","height":"181"},"url":"https://gradeup.co/","sameAs":["https://www.facebook.com/gradeup.learn/","https://twitter.com/gradeupapp","https://www.linkedin.com/company/gradeup-gradestack-learning-pvt-ltd-","https://plus.google.com/b/108065238358839044098/108065238358839044098","https://www.youtube.com/channel/UClyn4xufkVCSryKLc7-6c5Q","https://play.google.com/store/apps/developer?id=gradeup"],"founder":["Vibhu Bhushan","Sanjeev Kumar","Shobhit Bhatnagar"]}</script><script charset="utf-8" src="<?php echo asset('assets/user/css//chunk-bookmark.js')?>" crossorigin="anonymous"></script><script charset="utf-8" src="<?php echo asset('assets/user/css/chunk-other-actions.js')?>" crossorigin="anonymous"></script><script charset="utf-8" src="<?php echo asset('assets/user/js/chunk-post-actions.js')?>" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo asset('assets/user/css/styles.css')?>" crossorigin="anonymous">
      <script charset="utf-8" src="<?php echo asset('assets/user/js/chunk-comments.js')?>" crossorigin="anonymous"></script><script charset="utf-8" src="<?php echo asset('assets/user/js/chunk-action-modal.js');?>" crossorigin="anonymous"></script><script>
         (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js',  });var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl+'';f.parentNode.insertBefore(j,f); })(window,document, 'script', 'dataLayer', 'GTM-NMTPMSD');
      </script><script src="<?php echo asset('assets/user/js/a_004.js')?>"></script>
      <script type="text/javascript" src="<?php echo asset('assets/user/js/a_005.js')?>" rel="nofollow" async=""></script>
      <script type="text/javascript" src="<?php echo asset('assets/user/js/a_002.js')?>" rel="nofollow" async=""></script>
      <script type="text/javascript" src="<?php echo asset('assets/user/js/a_006.js')?>" rel="nofollow" async=""></script>
      <script type="text/javascript" src="<?php echo asset('assets/user/js/a_007.js')?>" rel="nofollow" async=""></script>
      <script type="text/javascript" src="<?php echo asset('assets/user/js/a.js')?>" rel="nofollow" async=""></script>
      <script type="text/javascript" src="<?php echo asset('assets/user/js/a_003.js')?>" rel="nofollow" async=""></script>
   </head>
   <body class="">
      <div id="__next"> 
         <header class="flex flex-column main-nav fixed top-0 left-0 w-100 z-10 transition-all">
            <div class="main-header">
               <div class="flex fixed-width-container items-center main-header-item">
                  <div class="main-header__logo flex">
                     <a class="main-header__logo-link flex" href="https://gradeup.co/">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="31px" class="db" viewBox="0 0 383 105">
                           <path d="M47.7 35L47.7 29.4 61 29.4 61 75.9C61 92.1 50.5 102 33.9 102 25.9 102 17.5 99.9 11.9 95.9L16.8 84.8C21.8 88.1 27.4 90 33.4 90 41.8 90 47.7 85.3 47.7 76.6L47.7 73C44.3 77.2 39.1 79.8 32.2 79.8 19.9 79.8 9 69.5 9 53.9 9 38.3 19.9 28 32.2 28 39 28 44.2 30.7 47.7 35ZM22.8 53.9C22.8 61.2 27.8 67.3 35.4 67.3 43 67.3 48.1 61.5 48.1 53.9 48.1 46.3 43 40.6 35.4 40.6 27.7 40.6 22.8 46.5 22.8 53.9Z" style="fill: rgb(12, 25, 47);"></path>
                           <path d="M103 29.1L101 42.6C98.8 41.6 95.4 41 92.6 41 86.2 41 81.8 44.9 81.8 52.4L81.8 80 68 80 68 29.4 81.4 29.4 81.4 34.9C84.6 30.1 89.4 28 95.8 28 98.8 28 101.1 28.5 103 29.1Z" style="fill: rgb(12, 25, 47);"></path>
                           <path d="M154 79.7L140.7 79.7 140.7 74.1C137.4 78.2 132.5 81 125.5 81 111.6 81 101 69.6 101 54.5 101 39.4 111.6 28 125.5 28 132.5 28 137.4 30.8 140.7 34.9L140.7 29.3 154 29.3 154 79.7ZM114.9 54.5C114.9 62.2 120 68.3 128.1 68.3 135.9 68.3 141.2 62.4 141.2 54.5 141.2 46.5 135.9 40.7 128.1 40.7 120 40.6 114.9 46.7 114.9 54.5Z" style="fill: rgb(12, 25, 47);"></path>
                           <path d="M198.4 35.1L198.4 5 212 5 212 80.7 198.7 80.7 198.7 75.1C195.4 79.2 190.5 82 183.5 82 169.6 82 159 70.5 159 55.2 159 39.9 169.6 28.5 183.5 28.5 190.3 28.4 195.1 31.1 198.4 35.1ZM172.9 55.2C172.9 63 178 69.2 186.1 69.2 193.9 69.2 199.2 63.2 199.2 55.2 199.2 47.2 193.9 41.2 186.1 41.2 177.9 41.1 172.9 47.4 172.9 55.2Z" style="fill: rgb(12, 25, 47);"></path>
                           <path d="M268 54.5C268 56 267.9 57.8 267.7 59L232 59C233.5 66.3 238.6 69.5 244.9 69.5 249.3 69.5 254 67.7 257.7 64.6L265.6 73.3C259.9 78.6 252.6 81 244.1 81 228.7 81 218 70.5 218 54.6 218 38.8 228.3 28 243.4 28 258.1 28 267.9 38.7 268 54.5ZM232.1 49.8L254.4 49.8C253.1 43.3 249.2 39.7 243.4 39.7 237.1 39.7 233.3 43.6 232.1 49.8Z" style="fill: rgb(12, 25, 47);"></path>
                           <path d="M322 59.1C322 75.1 310.7 82 298.1 82 285.3 82 274 75.1 274 59.1L274 30 287.6 30 287.6 57.9C287.6 66 292 69.3 297.9 69.3 303.9 69.3 308.3 66 308.3 57.9L308.3 30 321.9 30 321.9 59.1 322 59.1Z" style="fill: rgb(12, 25, 47);"></path>
                           <path d="M381 54.7C381 69.9 370.4 81.3 356.5 81.3 349.7 81.3 344.9 78.6 341.6 74.7L341.6 101 328 101 328 29.3 341.3 29.3 341.3 34.9C344.6 30.8 349.4 28 356.4 28 370.5 27.9 381 39.4 381 54.7ZM340.9 54.7C340.9 62.7 346.2 68.6 353.9 68.6 361.9 68.6 367 62.4 367 54.7 367 47 362 40.7 353.9 40.7 346.2 40.6 340.9 46.7 340.9 54.7Z" style="fill: rgb(12, 25, 47);"></path>
                        </svg>
                     </a>
                  </div>
                  <div class="main-header__all-exam-link">
                     <a class="header-menu-item__link flex flex-column items-center pointer  no-underline">
                        <svg class="db svg-fn svg-s-silver" viewBox="0 0 20.4 20.7" style="" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="25px">
                           <path d="M1.6,8.5h6.7V1.8H1.6V8.5z M1.6,18.6h6.7v-6.7H1.6V18.6z M11.7,18.6h6.7v-6.7h-6.7V18.6z   M11.7,8.5h6.7V1.8h-6.7V8.5z"></path>
                        </svg>
                        <span class="anchor-label header_item_label gray f7 lh-solid mt1">All Exams</span>
                     </a>
                     <div class="main-header__all-exams__menu fixed-width-container js-sub-menu all-exams-container absolute center left-0 right-0 db o-0" style="max-height: none; visibility: hidden;">
                        <nav class="flex box-shadow">
                           <ul class="all-exams-options flex flex-column list w-25 bg-white pa0 ma0">
                              <li data-section-id="section-0" class="all-exams-option active"><a class="link gray pointer ma0 db"><span>Bank</span></a></li>
                              <li data-section-id="section-1" class="all-exams-option "><a class="link gray pointer ma0 db"><span>SSC</span></a></li>
                              <li data-section-id="section-2" class="all-exams-option "><a class="link gray pointer ma0 db"><span>Teaching</span></a></li>
                              <li data-section-id="section-3" class="all-exams-option "><a class="link gray pointer ma0 db"><span>JEE/NEET</span></a></li>
                              <li data-section-id="section-4" class="all-exams-option "><a class="link gray pointer ma0 db"><span>GATE</span></a></li>
                              <li data-section-id="section-5" class="all-exams-option "><a class="link gray pointer ma0 db"><span>Law Exams</span></a></li>
                              <li data-section-id="section-6" class="all-exams-option "><a class="link gray pointer ma0 db"><span>UPSC</span></a></li>
                              <li data-section-id="section-7" class="all-exams-option "><a class="link gray pointer ma0 db"><span>Defence</span></a></li>
                              <li data-section-id="section-8" class="all-exams-option "><a class="link gray pointer ma0 db"><span>State Exams</span></a></li>
                              <li data-section-id="section-9" class="all-exams-option "><a class="link gray pointer ma0 db"><span>NET</span></a></li>
                              <li data-section-id="section-10" class="all-exams-option "><a class="link gray pointer ma0 db"><span>Test Series/Courses</span></a></li>
                           </ul>
                           <div class="all-exam-sections w-75 active flex" data-section-id="section-0">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">IBPS</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance">Banking</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/ibps-po">IBPS PO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/ibps-clerk">IBPS Clerk</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/ibps-rrb">IBPS RRB</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/ibps-so">IBPS SO</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">SBI</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/sbi-po">SBI PO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/sbi-clerk">SBI Clerk</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/sbi-so">SBI SO</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Insurance</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/insurance-exams">Insurance Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/lic-assistant">LIC Assistant 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/lic-hfl">LIC HFL 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/lic-aao">LIC AAO 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/lic-ado">LIC ADO 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/niacl">NIACL Assistant</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/niacl-ao">NIACL AO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/nicl">NICL</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Other Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/fci-manager">FCI Manager</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/epfo">EPFO Assistant</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/idbi-assistant-manager">IDBI Bank Assistant Manager</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/rbi-officer-grade-b">RBI Grade B</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/rbi-assistant">RBI Assistant</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/bob-manipal-po">BOB Manipal PO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/indian-bank-po">Indian Bank PO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/canara-bank">Canara Bank PO</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Related Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance-l-daily-gk-update-i-ijh1viet">Daily GK Updates</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/practice/quiz/banking-insurance/current-affairs">Current Affairs Quiz 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/general-awareness/financial-awareness">Banking Awareness</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/quantitative-aptitude">Quantitative Aptitude</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/reasoning-ability">Reasoning Ability</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/banking-insurance/notifications">Upcoming Bank Exams 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ibps-po-syllabus-exam-pattern-2019-i">IBPS PO Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ibps-rrb-syllabus-2019-i">IBPS RRB Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ibps-rrb-exam-pattern-2019-i">IBPS RRB Exam Pattern</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ibps-clerk-syllabus-exam-pattern-2019-i">IBPS Clerk Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ibps-po-cut-off-i">IBPS PO Cut off</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ibps-clerk-cut-off-i">IBPS Clerk Cut off</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/lic-assistant-syllabus-exam-pattern-i">LIC Assistant Syllabus</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-1">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">SSC &amp; Railway</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways">SSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/ssc-cgl">SSC CGL</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/ssc-chsl">SSC CHSL</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/ssc-mts">SSC MTS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/ssc-cpo-exam">SSC CPO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/ssc-steno-grade-c-d">SSC Stenographer</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/ssc-gd-constable">SSC GD Constable</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/rrb-group-d">RRB Group D</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/rrb-alp">RRB ALP</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/rrb-ntpc">RRB NTPC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/rpf">RPF</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Other Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/fci">FCI 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/ib-recruitment">IB Recruitment</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/railway-apprentice">Railway Apprentice</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Syllabus &amp; Cutoff</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-cgl-syllabus-exam-pattern-i">SSC CGL Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-chsl-syllabus-exam-pattern-i">SSC CHSL Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-gd-constable-syllabus-i">SSC GD Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-cpo-syllabus-exam-pattern-i">SSC CPO Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-mts-syllabus-exam-pattern-i">SSC MTS Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/rrb-ntpc-syllabus-exam-pattern-i">RRB NTPC Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/rrb-group-d-syllabus-exam-pattern-i">Railway Group D Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-cgl-cut-off-2018-i">SSC CGL Cut Off</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-chsl-cut-off-2018-i">SSC CHSL Cut Off</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/rrb-group-d-admit-card">RRB Group D Admit Card</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/rrb-ntpc-admit-card">RRB NTPC Admit Card</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-railways/ssc-cgl-study-material">SSC CGL Study Material</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-gd-constable-cut-off-2019-i">SSC GD Constable Cut Off</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-2">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">TET Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet">TET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/ctet">CTET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/uptet">UPTET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/htet">HTET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/utet">UTET</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">B. Ed Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/up-b-ed">UP B.Ed</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Other Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/up-tgt-pgt">UP TGT PGT 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/kvs-exams">KVS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/nvs-exams">NVS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/dsssb">DSSSB</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/up-lt-grade">UP LT Grade</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/up-btc-updeled">UP BTC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet/up-assistant-teacher">UP Assistant Teacher</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ctet-syllabus-i">CTET Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ctet-question-papers-i">CTET Question Paper</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-ctet">CTET Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/uptet-syllabus-i">UPTET Syllabus 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-kvs">KVS Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ctet-online-coaching">Best Course for CTET</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-3">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">JEE</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/engineering">Engineering Entrance Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/engineering/jee-main">JEE Main 2020</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/engineering/jee-main-registration">JEE Main Registration</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/jee-advanced-college-predictor-i">How to fill JEE Main Application Form</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/engineering/jee-advanced">JEE Advanced</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/engineering/exams">All Engg. Entrance Exams</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">NEET</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/medical">Medical Entrance Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/medical/neet-2020">NEET 2020</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/medical/aiims">AIIMS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/medical/jipmer">JIPMER</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Subjects</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/engineering/physics">Physics</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/engineering/chemistry">Chemistry</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/engineering/maths">Mathematics</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">NEET Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/neet-syllabus-i">NEET Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/neet-physics-syllabus-i">NEET Physics Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/neet-chemistry-syllabus-i">NEET Chemistry Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/neet-biology-syllabus-2020-i">NEET Biology Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/neet-question-papers-i">NEET Question Paper</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">JEE Resources</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/jee-main-eligibility-criteria-i">JEE Main Eligibility</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/engineering/jee-main-question-papers-2019">JEE Main Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/jee-main-books-i">JEE Main Books</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/best-books-for-iit-jee-advanced-i">IIT JEE Advanced Books</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/how-to-prepare-for-jee-main-without-coaching-i">JEE Main Preparation 2020</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Syllabus</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/jee-main-syllabus-i">JEE Main Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/jee-main-physics-syllabus-i">JEE Main Physics Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/jee-main-maths-syllabus-i">JEE Main Maths Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/jee-main-chemistry-syllabus-i">JEE Main Chemistry Syllabus</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-4">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">GATE Exam</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate">GATE 2020</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-syllabus-i">GATE Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-question-paper-i">GATE Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/computer-science-engineering/gate-cse">GATE CSE</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/civil-engineering/gate-ce">GATE Civil</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/mechanical-engineering/gate-me">GATE Mechanical</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/electronics-communication/gate-ece">GATE ECE</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/electrical-engineering/gate-ee">GATE Electrical</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-gate-mechanical">GATE Mechanical Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-gate-cse">GATE CSE Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-gate-civil-engineering">GATE Civil Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-gate-electrical">GATE EE Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-gate-ece">GATE ECE Mock Test</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">SSC JE Exam</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-je">SSC JE 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-je-syllabus-i">SSC JE Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-je-question-paper-i">SSC JE Question Papers</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Engineering</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/mechanical-engineering">Mechanical Engg</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/civil-engineering">Civil Engg</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/electrical-engineering">Electrical Engg</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/electronics-communication">Electronics &amp; Comm.</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/computer-science-engineering">Computer Science Engg.</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/civil-engineering/ese-ies-exam-ce">ESE IES Exam CE 2020</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ese-2020-notification-i">ESE 2020 Notification</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Important Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-me-syllabus-i">GATE ME Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-electrical-engineering-syllabus-i">GATE Electrical Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-syllabus-for-cse-i">GATE CSE Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-syllabus-for-ece-i">GATE ECE Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-civil-engineering-syllabus-i">GATE Civil Engineering Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/psu-recruitment-through-gate-i">PSU through GATE 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-me-question-papers-i">GATE Mechanical Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-ee-question-papers-i">GATE EE Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-cse-question-papers-i">GATE CSE Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-ece-question-papers-i">GATE ECE Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-ce-question-papers-i">GATE Civil Engineering Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-mock-test-series-gate">GATE Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-mock-test-series-ssc-je">SSC JE Test Series</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-5">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/law-entrance-exams">Law Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/law-entrance-exams/clat">CLAT 2020</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/clat-syllabus-exam-pattern-i">CLAT Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/clat-eligibility-criteria-i">CLAT Eligibility</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/clat-maths-preparation-i-d1953290-26a7-11e8-9fa3-2c59b57122cc">CLAT Maths Preparation</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/best-books-for-clat-exam-preparation-i">CLAT Books</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/how-to-prepare-logical-reasoning-for-clat-exam-i">CLAT Logical Reasoning Preparation</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-6">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services">UPSC Civil Services</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/ias-exam">IAS Exam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/uppsc-pcs">UPPSC PCS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/bpsc-pt-pre">BPSC PT Exam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/mppsc">MPPSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/ukpsc">UKPSC Exam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/haryana-psc">Haryana PSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/jpsc">JPSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/rpsc-ras">RPSC RAS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/mpsc">MPSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/cgpsc-2020">CGPSC</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-civil-services/exams">All Exams</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/yearly-current-affair-2019-pdf-i">Yearly Current Affairs 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/state-wise-current-affairs-i">State Wise Current Affairs</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/practice/quiz/upsc-civil-services/current-affairs">UPSC Current Affairs Quiz</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/mppsc-syllabus-i">MPPSC Syllabus 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-online-coaching">UPSC Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/bpsc-online-coaching">BPSC Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/uppsc-pcs-online-coaching">UPPSC PCS Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-uppsc">UPPSC Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-bpsc">BPSC Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/up-gk-in-hindi-i">UP GK in Hindi</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/mp-gk-in-hindi-i">MP GK in Hindi</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-7">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/defence-exams">Defence Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/defence-exams/cds">CDS Exam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/defence-exams/afcat">AFCAT Exam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/defence-exams/indian-air-force-x-y-group">Air Force Group X &amp; Y</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/defence-exams/nda">NDA 2 2019</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Important Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/defence-jobs-i">Defence Jobs</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/cds-2-2019-notification-i">CDS 2 2019 Notification </a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/cds-2-2019-application-form-i">CDS 2 2019 Applicaton Form</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/cds-syllabus-exam-pattern-i">CDS Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/cds-eligibility-i">CDS Eligibility</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/cds-salary-i">CDS Salary</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/cds-online-coaching">CDS Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/capf-admit-card-2019-i">CAPF Admit Card 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/nda-cut-off-i">NDA Cut Off 2018</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Other Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-afcat">AFCAT Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-cds">CDS Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-indian-airforce-xy">Indian Air Force Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/defence-online-coaching">Defence Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/cds-online-coaching">CDS Online Coaching</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-8">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment">State Exams</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/up-lekhpal">UP Lekhpal</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/delhi-police">Delhi Police Constable 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/up-police">UP Police SI 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/bihar-police">Bihar Police SI 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/haryana-police">Haryana Police</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/rajasthan-police">Rajasthan Police</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/telangana-ts-police">TS Police </a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/ap-police">AP Police</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/up-gram-panchayat-adhikari-vdo">UP Gram Panchayat Adhikari/VDO</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/ap-grama-sachivalayam">AP Grama Sachivalayam</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/karnataka-police">Karnataka Police Recruitment</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Other Exams</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/haryana-police">Haryana Police</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/upsssc-forest-guard">UPSSSC Forest Guard</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/hssc-clerk">HSSC Clerk</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/haryana-patwari">Haryana Patwari</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/haryana-gram-sachiv">Haryana Gram Sachiv</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ap-grama-volunteer-notification-2019-i">AP Grama Volunteer Notification 2019</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/cisf-head-constable">CISF</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/haryana-canal-patwari">Haryana Canal Patwari</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/fssai">FSSAI</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/india-post-gramin-dak-sevak">India Post GDS</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/mmrda-mumbai-metro">MMRDA Mumbai Metro</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/dsssb-fire-operator">DSSSB Fire Operator</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Quick Links</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/bihar-police-si-syllabus-exam-pattern-i">Bihar Police SI Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/cisf-head-constable-syllabus-i">CISF Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/haryana-police-constable-si-syllabus-exam-pattern-i">Haryana Police Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ap-grama-sachivalayam-syllabus-i">AP Grama Sachivalayam Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/recruitment/up-vdo-result-2019">UP VDO Result 2019</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-9">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">About Exam</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/net-jrf/ugc-net">UGC NET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/net-jrf/csir-net">CSIR NET</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ugc-net-eligibility-i">UGC NET Eligibility</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ugc-net-syllabus-i">UGC NET Syllabus</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ugc-net-exam-pattern-i">UGC NET Exam Pattern</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ugc-net-question-papers-i">UGC NET Question Papers</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ugc-net-selection-process-i">UGC NET Selection Process</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ugc-net-final-answer-key-2019-i">UGC NET Final Answer Key 2019</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="all-exam-sections w-75 dn" data-section-id="section-10">
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Banking</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series/banking-insurance">Bank Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-sbi-po">SBI PO Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-sbi-clerk">SBI Clerk Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-ibps-rrb">IBPS RRB Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-ibps-po">IBPS PO Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-ibps-clerk">IBPS Clerk Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-rbi-grade-b">RBI Grade B Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-lic-assistant">LIC Assistant Test Series</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Courses</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/bank-online-coaching">Bank Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-online-coaching">SSC Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/tet-online-coaching">TET Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/defence-online-coaching">Defence Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/upsc-online-coaching">UPSC Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/civil-engineering-online-coaching">Civil Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/medical-online-coaching">Medical Exams Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/medical-online-coaching">Medical Exams Online Coaching</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">SSC &amp; Railway</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series/ssc-railways">SSC Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-ssc-cgl">SSC CGL Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-ssc-chsl">SSC CHSL Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-ssc-mts">SSC MTS Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-rrb-ntpc">RRB NTPC Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-ssc-cpo">SSC CPO Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-rrb-group-d">RRB Group D Test Series</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Courses</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/engineering-entrance-online-coaching">Engineering Exams Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/electrical-engineering-online-coaching">Electrical Exams Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ece-online-coaching">ECE Exams Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/computer-science-online-coaching">Computer Science Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/mechanical-engineering-online-coaching">Mechanical Exams Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/gate-me-online-coaching">GATE ME Online Coaching</a></li>
                                 </ul>
                              </div>
                              <div class="section w-third">
                                 <p class="green ma0 section-p">Others</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-ctet">CTET Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-up-tet">UPTET Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-bitsat">BITSAT Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-ugc-net">UGC NET Test Series</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-cds">CDS Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-bpsc">BPSC Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-afcat">AFCAT Mock Test</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/online-test-series-dsssb">DSSSB Mock Test</a></li>
                                 </ul>
                                 <p class="green ma0 section-p">Upcoming Courses</p>
                                 <ul class="list pa0 ma0">
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/jee-main-online-coaching">JEE Main Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/neet-online-coaching">NEET Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/uptet-online-coaching">UPTET Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ssc-cgl-online-coaching">SSC CGL Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/uppsc-pcs-online-coaching">UPPSC Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/cds-online-coaching">CDS Online Coaching</a></li>
                                    <li><a class="db gray ma0 list-anchor no-underline f6" href="https://gradeup.co/ibps-clerk-online-coaching">IBPS Clerk Online Coaching</a></li>
                                 </ul>
                              </div>
                           </div>
                        </nav>
                     </div>
                  </div>
                  <div class="db dn-l ml-auto mr1 menu-click-cont">
                     <svg class="db svg-fn svg-s-silver" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" style="margin-top: 5px;">
                        <g transform="translate(5 4)">
                           <ellipse cx="10.769" cy="11.031" opacity=".99" rx="8.615" ry="8.624"></ellipse>
                           <path d="M4.148 16.488l.775.888 1.013.882-2.615 2.6a.96.96 0 0 1-1.307.044l-.404-.35a.96.96 0 0 1-.058-1.394l2.596-2.67zM17.432 16.488l-.775.888-1.013.882 2.616 2.6a.96.96 0 0 0 1.307.044l.403-.35a.96.96 0 0 0 .058-1.394l-2.596-2.67zM13.614 2.564C14.49.764 15.769-.037 17.45.161c.02.06 3.502.193 3.502 4.023.003.005-.021 1.844-2.077 3.21M7.767 2.564C6.891.764 5.612-.037 3.93.161 3.91.221.428.354.428 4.184c-.003.005.021 1.844 2.077 3.21" opacity=".99"></path>
                           <path d="M9.34 13.212l2.929-1.898a.24.24 0 0 0 .007-.398l-2.93-2.043a.24.24 0 0 0-.377.197v3.94a.24.24 0 0 0 .37.202z"></path>
                        </g>
                     </svg>
                  </div>
                  <div class="mr2 db dn-l menu-click-cont">
                     <svg class="db svg-fn svg-s-silver" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" style="margin-top: 5px;">
                        <g fill="none" fill-rule="evenodd" class="pysp-icon-v2">
                           <path stroke-width=".792" d="M23.597 6.42h.43c.5 0 .906.418.906.935v17.386c0 .517-.405.936-.905.936H11c-.5 0-.904-.42-.904-.936v-.556"></path>
                           <path stroke-width=".838" d="M7.843 4.217h13.944c.8 0 1.448.67 1.448 1.498v16.733c0 .827-.648 1.498-1.448 1.498H7.843c-.8 0-1.448-.67-1.448-1.498V5.715c0-.827.649-1.498 1.448-1.498z"></path>
                           <path stroke-linecap="round" stroke-width=".838" d="M17.716 7.629l.5 2.736a.047.047 0 0 1-.036.055l-2.442.515m1.978-1.05c-1.826-.787-5.864-1.311-7.406 2.888-.592 1.96-.609 6.088 4.058 6.928 1.1.228 3.683.042 5.225-2.52"></path>
                           <path fill="#999" stroke-width="0" class="pysp-icon-v2-text" d="M13.935 15.573h-1.322v-.272l.624-.688c.086-.097.149-.181.19-.254a.415.415 0 0 0 .062-.205.31.31 0 0 0-.065-.209.23.23 0 0 0-.186-.077.25.25 0 0 0-.205.094.374.374 0 0 0-.074.242h-.385c0-.121.028-.232.084-.333.056-.1.136-.18.238-.236a.7.7 0 0 1 .349-.086c.199 0 .353.05.462.148.11.099.166.238.166.418a.69.69 0 0 1-.074.302c-.05.102-.134.222-.255.358l-.438.478h.83v.32zm1.535-.826c0 .276-.055.488-.165.634-.11.146-.273.22-.486.22-.21 0-.37-.072-.482-.216-.111-.143-.168-.35-.17-.617V14.4c0-.278.055-.49.166-.634.112-.145.274-.217.484-.217.21 0 .37.072.482.215.112.143.169.348.171.616v.367zm-.383-.403c0-.165-.022-.285-.066-.36a.218.218 0 0 0-.204-.114.217.217 0 0 0-.2.108c-.043.071-.065.183-.068.336v.486c0 .162.021.283.064.363a.219.219 0 0 0 .206.118c.094 0 .162-.038.203-.114a.77.77 0 0 0 .065-.348v-.475zm1.375-.08l.361-.688h.458l-.562.99.576 1.007h-.462l-.371-.7-.372.7h-.462l.576-1.007-.562-.99h.458l.362.689zm1.725 0l.362-.688h.457l-.562.99.577 1.007h-.463l-.37-.7-.372.7h-.463l.577-1.007-.562-.99h.457l.362.689z"></path>
                        </g>
                     </svg>
                  </div>
                  <div class="main-header__search-box searchInputClosed">
                     <form id="searchBoxForm" action="/search" method="GET"><input required="" id="search" type="search" name="search" placeholder="Search here..." class="outline-0 nunito"></form>
                     <div class="search-overlay"></div>
                     <label for="search" class="flex flex-column items-center align-icon mt1">
                        <svg class="db svg-s-silver search-icon" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" style="stroke-width: 3px; stroke-linecap: round; stroke-linejoin: round; fill: none;">
                           <circle cx="21.6" cy="20" r="17.5"></circle>
                           <line x1="46.1" y1="45.5" x2="34.1" y2="33.5"></line>
                        </svg>
                     </label>
                  </div>
                  <div class="dn flex-l flex-auto-l"></div>
                  <div class="db-l dn header-menu-item main-header__store relative h-100 test-series ml2">
                     <div class="header-menu-item main-header__store relative h-100">
                        <div class="dd-menu self-center relative dd-menu-center  ">
                           <a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 ts">
                              <svg class="db svg-fn svg-s-silver" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" style="margin-top: 5px;">
                                 <path d="M21.246 6.347H7V27h16.947C25.316 26.71 26 25.814 26 24.312V6.347l-.013-1.316A2.05 2.05 0 0 0 23.94 3c-1.121 0-2.03.91-2.033 2.032l-.004 1.315h-.657z"></path>
                                 <path d="M21.947 6.2v18.4m0-.767c.497-.832 1.203-1.248 2.117-1.248.914 0 1.558.48 1.936 1.439M10.167 10.816h8.643m-8.643 2.608h8.643m-8.643 2.609h8.643"></path>
                              </svg>
                              <div class="flex header_item_label">
                                 <span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Test Series</span>
                                 <div class="relative"><span class="db ml1 gray">▾</span></div>
                              </div>
                           </a>
                           <div class="dd-menu-items z-7">
                              <ul class="dd-items-center ts-ul" style="max-height: 0px; border-width: 0px;">
                                 <li class="dd-menu-no-hover">
                                    <span class="flex relative border-box">
                                       <span class="mr-auto f5 silver">My Exams</span>
                                       <a class="link flex items-center relative" href="https://gradeup.co/settings">
                                          <span class="silver f5 fw2 f6">Add</span>
                                          <svg class="db svg-f-silver svg-s-silver ml2" viewBox="0 0 512 512" style="stroke-width: 8px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9px" height="9px">
                                             <path d="M492 236H276V20c0-11-9-20-20-20 -11 0-20 9-20 20v216H20c-11 0-20 9-20 20s9 20 20 20h216v216c0 11 9 20 20 20s20-9 20-20V276h216c11 0 20-9 20-20C512 245 503 236 492 236z"></path>
                                          </svg>
                                       </a>
                                    </span>
                                 </li>
                                 <li><a class="relative" href="https://gradeup.co/online-test-series/banking-insurance"><span class="f5">Bank &amp; Insurance</span></a></li>
                                 <li><a class="relative" href="https://gradeup.co/online-test-series/ssc-railways"><span class="f5">SSC &amp; Govt Jobs</span></a></li>
                                 <li>
                                    <div class="dd-menu self-center relative dd-menu-center w-100 dd-sub-menu-cont bt b--very-light-gray ">
                                       <a class="flex items-center w-100">
                                          <span class="f5 fw4 silver">My Test Series</span>
                                          <svg class="db svg-f-silver svg-s-silver ml-auto" viewBox="0 0 30 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6" height="10">
                                             <path d="M0 4.7C6.4 11.1 12.8 17.5 19.4 24 12.9 30.4 6.5 36.7 0.1 43.1c1.7 1.7 3.3 3.3 4.7 4.7 8-8 16.1-16 24.2-24 -8.1-8-16.1-16-24.2-24C3.4 1.3 1.8 2.9 0 4.7z"></path>
                                             <path d="M0 4.7c1.8-1.8 3.4-3.4 4.9-4.9 8 8 16.1 16 24.2 24 -8.1 8-16.1 16-24.2 24 -1.5-1.5-3.1-3.1-4.7-4.7C6.5 36.7 12.9 30.4 19.4 24 12.8 17.5 6.4 11.1 0 4.7z"></path>
                                          </svg>
                                       </a>
                                       <div class="dd-menu-items dd-sub-menu-items ">
                                          <ul class="dd-items-center  dd-items--inactive" style="max-height: 0px; border-width: 0px;">
                                             <li class="flex dd-menu-no-hover"><span class="flex pa2 items-center justify-around border-box" style="width: 300px;"><span class="f6 silver w-40 flex-wrap flex ma0 white-space-pre-wrap">Looks like you haven’t purchased any test series</span><img class="flex-shrink-0 w-50" src="<?php echo asset('assets/user/image/course-2x-img1565776124498-17.png')?>" style="height: 105px;"></span></li>
                                             <li class="bt b--very-light-gray">
                                                <a class="link relative flex items-center justify-center w-100" style="padding: 0.75em 1.25em;" href="https://gradeup.co/online-test-series">
                                                   <span class="silver f5 fw2 mr2">View All</span>
                                                   <svg class="db svg-f-silver svg-s-silver" viewBox="0 0 30 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6" height="10">
                                                      <path d="M0 4.7C6.4 11.1 12.8 17.5 19.4 24 12.9 30.4 6.5 36.7 0.1 43.1c1.7 1.7 3.3 3.3 4.7 4.7 8-8 16.1-16 24.2-24 -8.1-8-16.1-16-24.2-24C3.4 1.3 1.8 2.9 0 4.7z"></path>
                                                      <path d="M0 4.7c1.8-1.8 3.4-3.4 4.9-4.9 8 8 16.1 16 24.2 24 -8.1 8-16.1 16-24.2 24 -1.5-1.5-3.1-3.1-4.7-4.7C6.5 36.7 12.9 30.4 19.4 24 12.8 17.5 6.4 11.1 0 4.7z"></path>
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
                  <div class="db-l dn header-menu-item main-header__practice relative h-100 classroom">
                     <div class="header-menu-item main-header__store relative h-100">
                        <div class="dd-menu self-center relative dd-menu-center  ">
                           <a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 cr">
                              <svg class="db svg-fn svg-s-silver" viewBox="0 0 45 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" style="margin-top: 5px;">
                                 <path d="M29.342 24H7.675C6.199 23.997 5.002 23.07 5 21.926V8.072C5 6.929 6.2 6 7.675 6h21.667c1.475 0 2.674.93 2.674 2.072v13.857c0 1.142-1.2 2.071-2.674 2.071zm11.3-1.953a.363.363 0 0 1-.216-.072l-8.359-3.837c0-1.346-.09-5.14 0-5.207l8.357-4.908a.361.361 0 0 1 .574.287L41 21.689a.355.355 0 0 1-.36.358h.002z"></path>
                              </svg>
                              <div class="flex header_item_label">
                                 <span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Classroom</span>
                                 <div class="relative"><span class="db ml1 gray">▾</span></div>
                              </div>
                           </a>
                           <div class="dd-menu-items z-7">
                              <ul class="dd-items-center  cr-ul" style="max-height: 0px; border-width: 0px;">
                                 <li class="dd-menu-no-hover">
                                    <span class="flex relative border-box">
                                       <span class="mr-auto f5 silver">My Exams</span>
                                       <a class="link flex items-center relative" href="https://gradeup.co/settings">
                                          <span class="silver f5 fw2 f6">Add</span>
                                          <svg class="db svg-f-silver svg-s-silver ml2" viewBox="0 0 512 512" style="stroke-width: 8px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9px" height="9px">
                                             <path d="M492 236H276V20c0-11-9-20-20-20 -11 0-20 9-20 20v216H20c-11 0-20 9-20 20s9 20 20 20h216v216c0 11 9 20 20 20s20-9 20-20V276h216c11 0 20-9 20-20C512 245 503 236 492 236z"></path>
                                          </svg>
                                       </a>
                                    </span>
                                 </li>
                                 <li><a class="relative" href="https://gradeup.co/bank-online-coaching"><span class="f5">Bank &amp; Insurance</span></a></li>
                                 <li><a class="relative" href="https://gradeup.co/ssc-online-coaching"><span class="f5">SSC &amp; Govt Jobs</span></a></li>
                                 <li>
                                    <div class="dd-menu self-center relative dd-menu-center w-100 dd-sub-menu-cont bt b--very-light-gray ">
                                       <a class="flex items-center w-100">
                                          <span class="f5 fw4 silver">My Courses</span> 
                                          <svg class="db svg-f-silver svg-s-silver ml-auto" viewBox="0 0 30 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6" height="10">
                                             <path d="M0 4.7C6.4 11.1 12.8 17.5 19.4 24 12.9 30.4 6.5 36.7 0.1 43.1c1.7 1.7 3.3 3.3 4.7 4.7 8-8 16.1-16 24.2-24 -8.1-8-16.1-16-24.2-24C3.4 1.3 1.8 2.9 0 4.7z"></path>
                                             <path d="M0 4.7c1.8-1.8 3.4-3.4 4.9-4.9 8 8 16.1 16 24.2 24 -8.1 8-16.1 16-24.2 24 -1.5-1.5-3.1-3.1-4.7-4.7C6.5 36.7 12.9 30.4 19.4 24 12.8 17.5 6.4 11.1 0 4.7z"></path>
                                          </svg>
                                       </a>
                                       <div class="dd-menu-items dd-sub-menu-items ">
                                          <ul class="dd-items-center  dd-items--inactive" style="max-height: 0px; border-width: 0px;">
                                             <li class="flex dd-menu-no-hover"><span class="flex items-center pa2 justify-around border-box" style="width: 300px;"><span class="f6 silver w-40 flex-wrap flex ma0 white-space-pre-wrap">Looks like you haven’t purchased any course</span><img class="flex-shrink-0 w-50" src="<?php echo asset('assets/user/image/course-2x-img1565776124498-17.png')?>" style="height: 105px;"></span></li>
                                             <li class="bt b--very-light-gray">
                                                <a class="link relative flex items-center w-100 justify-center" style="padding: 0.75em 1.25em;" href="https://gradeup.co/online-coaching">
                                                   <span class="silver f5 fw2 mr2">View All</span>
                                                   <svg class="db svg-f-silver svg-s-silver" viewBox="0 0 30 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6" height="10">
                                                      <path d="M0 4.7C6.4 11.1 12.8 17.5 19.4 24 12.9 30.4 6.5 36.7 0.1 43.1c1.7 1.7 3.3 3.3 4.7 4.7 8-8 16.1-16 24.2-24 -8.1-8-16.1-16-24.2-24C3.4 1.3 1.8 2.9 0 4.7z"></path>
                                                      <path d="M0 4.7c1.8-1.8 3.4-3.4 4.9-4.9 8 8 16.1 16 24.2 24 -8.1 8-16.1 16-24.2 24 -1.5-1.5-3.1-3.1-4.7-4.7C6.5 36.7 12.9 30.4 19.4 24 12.8 17.5 6.4 11.1 0 4.7z"></path>
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
                  <div class="db-l dn header-menu-item main-header__practice relative h-100 free-videos">
                     <div class="header-menu-item main-header__store relative h-100">
                        <div class="dd-menu self-center relative dd-menu-center  ">
                           <a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 fv">
                              <svg class="db svg-fn svg-s-silver" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" style="margin-top: 5px;">
                                 <g fill="none" fill-rule="evenodd" transform="translate(4.4 4)">
                                    <rect width="22.12" height="15.888" x=".625" y="7.002" stroke="" rx="1.5"></rect>
                                    <path fill="#999" d="M9.358 11.746v6.4l4.654-2.91z"></path>
                                    <path stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25" d="M2.715 3.583h17.879M5.321.242h12.7"></path>
                                 </g>
                              </svg>
                              <div class="flex header_item_label">
                                 <span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Free Videos</span>
                                 <div class="relative"><span class="db ml1 gray">▾</span></div>
                              </div>
                           </a>
                           <div class="dd-menu-items z-7">
                              <ul class="dd-items-center  fv-ul" style="max-height: 0px; border-width: 0px;">
                                 <li class="dd-menu-no-hover">
                                    <span class="flex relative border-box">
                                       <span class="mr-auto f5 silver">My Exams</span>
                                       <a class="link flex items-center relative" href="https://gradeup.co/settings">
                                          <span class="silver f5 fw2 f6">Add</span>
                                          <svg class="db svg-f-silver svg-s-silver ml2" viewBox="0 0 512 512" style="stroke-width: 8px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9px" height="9px">
                                             <path d="M492 236H276V20c0-11-9-20-20-20 -11 0-20 9-20 20v216H20c-11 0-20 9-20 20s9 20 20 20h216v216c0 11 9 20 20 20s20-9 20-20V276h216c11 0 20-9 20-20C512 245 503 236 492 236z"></path>
                                          </svg>
                                       </a>
                                    </span>
                                 </li>
                                 <li><a class="relative" href="https://gradeup.co/free-video-lectures/banking-insurance"><span class="f5">Bank &amp; Insurance</span></a></li>
                                 <li><a class="relative" href="https://gradeup.co/free-video-lectures/ssc-railways"><span class="f5">SSC &amp; Govt Jobs</span></a></li>
                                 <li><a class="flex items-center w-100" href="https://gradeup.co/free-video-lectures"><span class="f5 fw6 dark-gray">All Exams</span></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="db-l dn header-menu-item main-header__practice relative h-100 prev-papers">
                     <div class="header-menu-item main-header__store relative h-100">
                        <div class="dd-menu self-center relative dd-menu-center  ">
                           <a class="header-menu-item__link h-100 flex flex-column items-center pointer no-underline ph2 pp">
                              <svg class="db svg-fn svg-s-silver" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" style="margin-top: 5px;">
                                 <g transform="translate(5 4)">
                                    <ellipse cx="10.769" cy="11.031" opacity=".99" rx="8.615" ry="8.624"></ellipse>
                                    <path d="M4.148 16.488l.775.888 1.013.882-2.615 2.6a.96.96 0 0 1-1.307.044l-.404-.35a.96.96 0 0 1-.058-1.394l2.596-2.67zM17.432 16.488l-.775.888-1.013.882 2.616 2.6a.96.96 0 0 0 1.307.044l.403-.35a.96.96 0 0 0 .058-1.394l-2.596-2.67zM13.614 2.564C14.49.764 15.769-.037 17.45.161c.02.06 3.502.193 3.502 4.023.003.005-.021 1.844-2.077 3.21M7.767 2.564C6.891.764 5.612-.037 3.93.161 3.91.221.428.354.428 4.184c-.003.005.021 1.844 2.077 3.21" opacity=".99"></path>
                                    <path d="M9.34 13.212l2.929-1.898a.24.24 0 0 0 .007-.398l-2.93-2.043a.24.24 0 0 0-.377.197v3.94a.24.24 0 0 0 .37.202z"></path>
                                 </g>
                              </svg>
                              <div class="flex header_item_label">
                                 <span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Quizzes</span>
                                 <div class="relative"><span class="db ml1 gray">▾</span></div>
                              </div>
                           </a>
                           <div class="dd-menu-items z-7">
                              <ul class="dd-items-center  pp-ul" style="max-height: 0px; border-width: 0px;">
                                 <li class="dd-menu-no-hover">
                                    <span class="flex relative border-box">
                                       <span class="mr-auto f5 silver">My Exams</span>
                                       <a class="link flex items-center relative" href="https://gradeup.co/settings">
                                          <span class="silver f5 fw2 f6">Add</span>
                                          <svg class="db svg-f-silver svg-s-silver ml2" viewBox="0 0 512 512" style="stroke-width: 8px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9px" height="9px">
                                             <path d="M492 236H276V20c0-11-9-20-20-20 -11 0-20 9-20 20v216H20c-11 0-20 9-20 20s9 20 20 20h216v216c0 11 9 20 20 20s20-9 20-20V276h216c11 0 20-9 20-20C512 245 503 236 492 236z"></path>
                                          </svg>
                                       </a>
                                    </span>
                                 </li>
                                 <li><a class="relative" href="https://gradeup.co/practice/quiz/banking-insurance"><span class="f5">Bank &amp; Insurance</span></a></li>
                                 <li><a class="relative" href="https://gradeup.co/practice/quiz/ssc-railways"><span class="f5">SSC &amp; Govt Jobs</span></a></li>
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
                              <svg class="db svg-fn svg-s-silver" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" style="margin-top: 5px;">
                                 <g fill="none" fill-rule="evenodd" class="pysp-icon-v2">
                                    <path stroke-width=".792" d="M23.597 6.42h.43c.5 0 .906.418.906.935v17.386c0 .517-.405.936-.905.936H11c-.5 0-.904-.42-.904-.936v-.556"></path>
                                    <path stroke-width=".838" d="M7.843 4.217h13.944c.8 0 1.448.67 1.448 1.498v16.733c0 .827-.648 1.498-1.448 1.498H7.843c-.8 0-1.448-.67-1.448-1.498V5.715c0-.827.649-1.498 1.448-1.498z"></path>
                                    <path stroke-linecap="round" stroke-width=".838" d="M17.716 7.629l.5 2.736a.047.047 0 0 1-.036.055l-2.442.515m1.978-1.05c-1.826-.787-5.864-1.311-7.406 2.888-.592 1.96-.609 6.088 4.058 6.928 1.1.228 3.683.042 5.225-2.52"></path>
                                    <path fill="#999" stroke-width="0" class="pysp-icon-v2-text" d="M13.935 15.573h-1.322v-.272l.624-.688c.086-.097.149-.181.19-.254a.415.415 0 0 0 .062-.205.31.31 0 0 0-.065-.209.23.23 0 0 0-.186-.077.25.25 0 0 0-.205.094.374.374 0 0 0-.074.242h-.385c0-.121.028-.232.084-.333.056-.1.136-.18.238-.236a.7.7 0 0 1 .349-.086c.199 0 .353.05.462.148.11.099.166.238.166.418a.69.69 0 0 1-.074.302c-.05.102-.134.222-.255.358l-.438.478h.83v.32zm1.535-.826c0 .276-.055.488-.165.634-.11.146-.273.22-.486.22-.21 0-.37-.072-.482-.216-.111-.143-.168-.35-.17-.617V14.4c0-.278.055-.49.166-.634.112-.145.274-.217.484-.217.21 0 .37.072.482.215.112.143.169.348.171.616v.367zm-.383-.403c0-.165-.022-.285-.066-.36a.218.218 0 0 0-.204-.114.217.217 0 0 0-.2.108c-.043.071-.065.183-.068.336v.486c0 .162.021.283.064.363a.219.219 0 0 0 .206.118c.094 0 .162-.038.203-.114a.77.77 0 0 0 .065-.348v-.475zm1.375-.08l.361-.688h.458l-.562.99.576 1.007h-.462l-.371-.7-.372.7h-.462l.576-1.007-.562-.99h.458l.362.689zm1.725 0l.362-.688h.457l-.562.99.577 1.007h-.463l-.37-.7-.372.7h-.463l.577-1.007-.562-.99h.457l.362.689z"></path>
                                 </g>
                              </svg>
                              <div class="flex header_item_label">
                                 <span class="anchor-label gray f7 lh-solid mt1 db-l fw3">Prev. Papers</span>
                                 <div class="relative"><span class="db ml1 gray">▾</span></div>
                              </div>
                           </a>
                           <div class="dd-menu-items z-7">
                              <ul class="dd-items-center  dd-items--inactive" style="max-height: 0px; border-width: 0px;">
                                 <li class="dd-menu-no-hover">
                                    <span class="flex relative border-box">
                                       <span class="mr-auto f5 silver">My Exams</span>
                                       <a class="link flex items-center relative" href="https://gradeup.co/settings">
                                          <span class="silver f5 fw2 f6">Add</span>
                                          <svg class="db svg-f-silver svg-s-silver ml2" viewBox="0 0 512 512" style="stroke-width: 8px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9px" height="9px">
                                             <path d="M492 236H276V20c0-11-9-20-20-20 -11 0-20 9-20 20v216H20c-11 0-20 9-20 20s9 20 20 20h216v216c0 11 9 20 20 20s20-9 20-20V276h216c11 0 20-9 20-20C512 245 503 236 492 236z"></path>
                                          </svg>
                                       </a>
                                    </span>
                                 </li>
                                 <li><a class="relative" href="https://gradeup.co/practice/previous-year-papers/banking-insurance"><span class="f5">Bank &amp; Insurance</span></a></li>
                                 <li><a class="relative" href="https://gradeup.co/practice/previous-year-papers/ssc-railways"><span class="f5">SSC &amp; Govt Jobs</span></a></li>
                                 <li></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="header-menu-item main-header__user relative h-100">
                     <div class="dd-menu self-center relative dd-menu-center  ">
                        <a rel="noopener noreferrer" class="header-menu-item__link main-header__user__link js-sub-menu-link flex h-100 flex-column items-center pointer no-underline ph2 ">
                           <div class="main-header__user-pic ma-auto br-100 overflow-hidden" style="background:indigo ; background-repeat: no-repeat; background-position: center center; background-size: cover;height: 30px; width: 30px; margin-top: 5px;padding-left: 10px;padding-top: 5px;color: white;">{{ substr($name,0,1) }}</div>
                           <div class="anchor-label flex header_item_label">
                              <span class="gray f7 lh-solid mt1 fw3">Hi, {{ $name }}</span>
                              <div class="relative"><span class="db ml1 gray">▾</span></div>
                           </div>
                        </a>
                        <div class="dd-menu-items ">
                           <ul class="dd-items-center  dd-items--inactive" style="max-height: 0px; border-width: 0px;">
                              <li><a href="https://gradeup.co/me">My Profile</a></li>
                              <li><a href="https://gradeup.co/settings">My Exams</a></li>
                              <li><a href="https://gradeup.co/my-purchases">My Purchases</a></li>
                              <li><a href="https://gradeup.co/payment-history">Payment History</a></li>
                              <li><a href="https://gradeup.co/faqs">Help &amp; Feedback</a></li>
                              <li><a rel="noopener noreferrer" class="pointer">Logout</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="header-spacer header-spacer--no-alert" style="height: 63px;"></div>
         <div class="fwc-2 flex flex-grow-1 justify-between mt3">
         	<main>
            	<span class="flex items-center mb3 ba b--black-10 pa3 flex-grow-1">
              		<span alt="Jignesh Desai" class="flex br-100 w3 h3 flex-shrink-0 overflow-hidden relative" style="background-color: indigo;
    color: white !important;
    padding-left: 13px;
    font-size: 34px;
    width: 45px;
    height: 45px;
    background-repeat: no-repeat;
    margin-right: 5px;
    padding-top: 5px;">{{ substr($name,0,1) }}</span>
               		<a class="ba b--black-10 pa2 flex-grow-1 silver text pointer" data-toggle="modal" data-target="#myModal" >Create a post...</a>
               	</span>
               <div class="flex mb3 home-post-types">
                  <span class="fw5 gray mr2 ph2 ph0-l">Filter : </span>
                  <div class="dd-menu self-center relative dd-menu-center  ">
                     <a class="header-menu-item__link flex flex-column items-center pointer  no-underline">
                     <span class="lh-solid db-l silver">All Posts ▾</span></a>
                     <div class="dd-menu-items mt0">
                        <ul class="dd-items-center  dd-items--inactive" style="max-height: 0px; border-width: 0px;">
                           <li><a class="lh-solid tc pv2 bw2 pointer link gray" data-feed-tab="all">All Posts</a></li>
                           <li><a class="lh-solid tc pv2 bw2 pointer link gray" data-feed-tab="mentor">Mentor Posts</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <article class="post flex flex-column mb3 bt bl br b--black-10 post--shared-info">
                  <div class="flex pa3">
                     <a class="w2 h2 br-100 overflow-hidden mr2 relative" href="https://gradeup.co/user/akash-mishra-i-0950b310-9bcf-11e9-8200-80710a926e8d"><img id="2f5a5d20-e43d-11e9-a815-55b02d3b3d8f-author-0950b310-9bcf-11e9-8200-80710a926e8d" class="absolute z-0 top-0 left-0 w-100 h-100 cover lazyloaded" src="https://gs-post-images.grdp.co/2019/7/4218ebefcd101f10e8afae3822870ade26009d84edb490db3a52347f8e531f80-high-s.jpg" data-src="https://gs-post-images.grdp.co/2019/7/4218ebefcd101f10e8afae3822870ade26009d84edb490db3a52347f8e531f80-high-s.jpg" alt="Akash Mishra"></a>
                     <div class="flex flex-column flex-grow-1 mr2">
                        <p class="flex ma0 mb1">
                           <a class="author mr2 link lh-solid dark-gray" href="https://gradeup.co/user/akash-mishra-i-0950b310-9bcf-11e9-8200-80710a926e8d">Akash Mishra</a>
                           <span class="bg-green br-100 pa1 db">
                              <svg class="db svg-fn svg-s-white" viewBox="0 0 32 24" style="stroke-width: 5px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="8px">
                                 <polyline points="2.6 13.4 11.3 21.4 29.7 2.9"></polyline>
                              </svg>
                           </span>
                        </p>
                        <p class="flex silver mv0 f6"><span class="nowrap">Shared Info</span><span class="ml3 dotted-point relative nowrap">1 hour ago</span></p>
                     </div>
                     <svg class="dib svg-fn pointer mr2 svg-s-dark-gray" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" style="stroke-width: 2px;">
                        <polygon points="24.7 14.1 22.5 17.5 18.5 18.4 21.3 21.5 21 25.5 24.7 23.7 28.4 25.5 28.1 21.5 30.5 18.4 26.8 17.5 "></polygon>
                        <path d="M40 44L24.3 33.6 9 44V8c0-1.7 1.3-3 3-3h24.9C38.6 5 40 6.3 40 8V44z"></path>
                     </svg>
                     <div class="post__head-actions flex fr">
                        <div class="relative pointer post__other-action--head">
                           <div class="post__other-action--menu post__other-action--menu-head">
                              <div class="dd-menu self-center relative dd-menu-right  ">
                                 <a class="">
                                    <svg class="db svg-f-gray svg-sn rotate-90" viewBox="0 0 48 48" style="" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="100%">
                                       <circle cx="9.5" cy="23.9" r="4"></circle>
                                       <circle cx="24.2" cy="23.9" r="4"></circle>
                                       <circle cx="39" cy="23.9" r="4"></circle>
                                    </svg>
                                 </a>
                                 <div class="dd-menu-items mt0">
                                    <ul class="dd-items-center  dd-items--inactive" style="max-height: 0px; border-width: 0px;">
                                       <li class="flex">
                                          <a class="ma0 flex items-center" data-url="/champion-youtube-series-for-ibps-and-lic-2019-exams-i">
                                             <svg class="dib svg-fn svg-s-gray ma0 mr3" viewBox="0 0 48 48" style="stroke-width: 3px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="100%">
                                                <line x1="31.1" y1="16.9" x2="16.9" y2="31.1"></line>
                                                <path d="M41 15.5c1.6-1.6 1.6-4.1 0-5.7L38.1 7c-1.6-1.6-4.1-1.6-5.7 0l-7.1 7.1c-1.6 1.6-1.6 4.1 0 5.7l2.8 2.8c1.6 1.6 4.1 1.6 5.7 0L41 15.5z"></path>
                                                <path d="M22.6 33.9c1.6-1.6 1.6-4.1 0-5.7l-2.8-2.8c-1.6-1.6-4.1-1.6-5.7 0L7 32.5c-1.6 1.6-1.6 4.1 0 5.7L9.9 41c1.6 1.6 4.1 1.6 5.7 0L22.6 33.9z"></path>
                                             </svg>
                                             <span class="f5 flex-grow-1 ma0 tl gray">Copy Link</span>
                                          </a>
                                       </li>
                                       <li class="flex">
                                          <a class="ma0 flex items-center">
                                             <svg class="dib svg-fn svg-s-gray ma0 mr3" viewBox="0 0 48 48" style="stroke-width: 3px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="100%">
                                                <circle cx="24.2" cy="24" r="15"></circle>
                                                <line x1="34.7" y1="13.3" x2="13.5" y2="34.5"></line>
                                             </svg>
                                             <span class="f5 flex-grow-1 ma0 tl gray">Report</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="word-wrap ph3 flex flex-column">
                     <div class="mw-100 bg-near-white mb2 maint-media-ratio" style="width: 620px; height: 325px;"><a class="db"><img id="2f5a5d20-e43d-11e9-a815-55b02d3b3d8f-image" style="width: 620px; height: 325px;" src="https://gs-post-images.grdp.co/2019/10/blog-3-img1569928701518-98.png-rs-high-webp.jpg" class="maint-media-ratio db cover relative overflow-hidden lazyloaded" data-src="https://gs-post-images.grdp.co/2019/10/blog-3-img1569928701518-98.png-rs-high-webp.jpg" alt="Champion YouTube Series for IBPS And LIC 2019 Exams" width="620" height="325"></a></div>
                     <h4 class="ma0 pt3"><a class="no-underline dark-gray f4" href="https://gradeup.co/champion-youtube-series-for-ibps-and-lic-2019-exams-i">Champion YouTube Series for IBPS And LIC 2019 Exams</a></h4>
                  </div>
                  <ul class="flex list pa0 ma0 f6 silver ph3 mv2">
                     <li class="">27 upvotes</li>
                     <li class="relative divider-line ml3">0 comments</li>
                  </ul>
                  <div class="flex justify-between ph3 bt bb b--black-10">
                     <a class="ma0 tc pointer tracked-sm outline-0 b--solid no-user-select flex items-center flex-shrink-0 bn pa3 bg-white no-hover-color overflow-hidden gray hover-dark-gray hover-ssdg">
                        <svg class="db mr2 svg-fn w1-5 h1-5 svg-s-gray" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300" height="100" style="stroke-width: 2px;">
                           <path d="M18.8 38.7c0 1.5-1.2 2.7-2.7 2.7H7c-1.5 0-2.7-1.2-2.7-2.7V20.8c0-1.5 1.2-2.7 2.7-2.7h9.1c1.5 0 2.7 1.2 2.7 2.7V38.7zM18.8 36.6c0 0 0.7 2.7 4.4 2.7h14.3c0 0 3.4-0.4 3.3-4.3 0 0 2.5-1.8 1.9-5.2 0 0 2.1-2.3 0.7-4.7 0 0 3.7-4.6-3.5-6.8h-8.5c0 0 3-10.7-4-11.8 0 0-2.3-0.5-1.8 2.6l0.2 2.3c0 0-1.5 8.6-6.6 10.7"></path>
                        </svg>
                        <span class="flex-l dn">UPVOTE</span>
                     </a>
                     <a class="ma0 tc pointer tracked-sm outline-0 b--solid no-user-select flex items-center justify-center flex-shrink-0 bn pa3 overflow-hidden bg-white gray hover-dark-gray no-hover-color hover-ssdg">
                        <svg class="db mr2 svg-fn svg-s-gray w1-5 h1-5" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300" height="100" style="stroke-width: 2px;">
                           <path d="M38 10.2H2.6c-0.5 0-1 0.4-1 1v25c0 0.5 0.4 1 1 1h6.5v9.4l10-9.4H38c0.5 0 1-0.4 1-1v-25C38.9 10.7 38.5 10.2 38 10.2zM39.5 30.4H45c0.5 0 1-0.4 1-1v-25c0-0.5-0.4-1-1-1H9.7c-0.5 0-1 0.4-1 1V10"></path>
                        </svg>
                        <span class="flex-l dn">COMMENT</span>
                     </a>
                     <a class="ma0 tc pointer tracked-sm outline-0 b--solid no-user-select flex items-center justify-end flex-shrink-0 bn pa3 overflow-hidden bg-white gray hover-dark-gray no-hover-color hover-ssdg">
                        <svg class="db mr2 svg-fn svg-s-gray w1-5 h1-5" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300" height="100" style="stroke-width: 2px;">
                           <circle cx="9.5" cy="23.8" r="5.2"></circle>
                           <circle cx="39" cy="11" r="5.2"></circle>
                           <circle cx="39" cy="36.8" r="5.2"></circle>
                           <line x1="14.7" y1="21.2" x2="34.3" y2="13.2"></line>
                           <line x1="14.7" y1="26.8" x2="34.3" y2="34.6"></line>
                        </svg>
                        <span class="flex-l dn">SHARE</span>
                     </a>
                  </div>
               </article>
               <div id="gtm-feed-widget-1">
                  <div id="opt-in-card-wrapper" class="mv2">
                     <div class="flex flex-column pv2 ph3-l ph2 bn bg-near-white-l bg-white ">
                        <p class="mv1 mh2 f4 fw7"> Upcoming Exams </p>
                        <div class="flex overflow-x-auto mv2" id="opt-in-carousal">
                           <div class="mt2 mb3 mh2 flex flex-column items-center bg-white w-33-l w-48 flex-shrink-0 ba bw1 br1 b--mid-light-gray pa0-l pa1 relative"><span class="mt3 tc opt-card-text darkest-blue"> Are you preparing for </span><img class="h3 w3 mt3 mb2" src="<?php echo asset('assets/user/image/grpimg1502881522531-80.png')?>"><span class="tc gray fw7 h2-5 w-60 overflow-hidden mb2 opt-carousal-card-exam-name darkest-blue"> FCI Manager </span><span class="flex items-center justify-center w-100 mt2 mb1"><button class="white bg-green ba b--green br1 pv1 opt-card-text w-two-thirds ml1 mr2 pointer" type="button">YES</button><button class="mr1 silver ba bg-transparent pv1 opt-card-text br1 b--black-20 w-third pointer" type="button">NO</button></span></div>
                           <div class="mt2 mb3 mh2 flex flex-column items-center bg-white w-33-l w-48 flex-shrink-0 ba bw1 br1 b--mid-light-gray pa0-l pa1 relative"><span class="mt3 tc opt-card-text darkest-blue"> Are you preparing for </span><img class="h3 w3 mt3 mb2" src="<?php echo asset('assets/user/image/grpimg1470818818206-18.webp')?>"><span class="tc gray fw7 h2-5 w-60 overflow-hidden mb2 opt-carousal-card-exam-name darkest-blue"> IBPS PO </span><span class="flex items-center justify-center w-100 mt2 mb1"><button class="white bg-green ba b--green br1 pv1 opt-card-text w-two-thirds ml1 mr2 pointer" type="button">YES</button><button class="mr1 silver ba bg-transparent pv1 opt-card-text br1 b--black-20 w-third pointer" type="button">NO</button></span></div>
                           <div class="mt2 mb3 mh2 flex flex-column items-center bg-white w-33-l w-48 flex-shrink-0 ba bw1 br1 b--mid-light-gray pa0-l pa1 relative"><span class="mt3 tc opt-card-text darkest-blue"> Are you preparing for </span><img class="h3 w3 mt3 mb2" src="<?php echo asset('assets/user/image/grpimg1470825202373-12.webp')?>"><span class="tc gray fw7 h2-5 w-60 overflow-hidden mb2 opt-carousal-card-exam-name darkest-blue"> RBI Officer Grade B </span><span class="flex items-center justify-center w-100 mt2 mb1"><button class="white bg-green ba b--green br1 pv1 opt-card-text w-two-thirds ml1 mr2 pointer" type="button">YES</button><button class="mr1 silver ba bg-transparent pv1 opt-card-text br1 b--black-20 w-third pointer" type="button">NO</button></span></div>
                           <div class="mt2 mb3 mh2 flex flex-column items-center bg-white w-33-l w-48 flex-shrink-0 ba bw1 br1 b--mid-light-gray pa0-l pa1 relative"><span class="mt3 tc opt-card-text darkest-blue"> Are you preparing for </span><img class="h3 w3 mt3 mb2" src="<?php echo asset('assets/user/image/grpimg1470818818206-18.webp')?>"><span class="tc gray fw7 h2-5 w-60 overflow-hidden mb2 opt-carousal-card-exam-name darkest-blue"> IBPS Clerk </span><span class="flex items-center justify-center w-100 mt2 mb1"><button class="white bg-green ba b--green br1 pv1 opt-card-text w-two-thirds ml1 mr2 pointer" type="button">YES</button><button class="mr1 silver ba bg-transparent pv1 opt-card-text br1 b--black-20 w-third pointer" type="button">NO</button></span></div>
                           <div class="mt2 mb3 mh2 flex flex-column items-center bg-white w-33-l w-48 flex-shrink-0 ba bw1 br1 b--mid-light-gray pa0-l pa1 relative"><span class="mt3 tc opt-card-text darkest-blue"> Are you preparing for </span><img class="h3 w3 mt3 mb2" src="<?php echo asset('assets/user/image/grpimg1470825244991-73.webp')?>"><span class="tc gray fw7 h2-5 w-60 overflow-hidden mb2 opt-carousal-card-exam-name darkest-blue"> LIC Assistant </span><span class="flex items-center justify-center w-100 mt2 mb1"><button class="white bg-green ba b--green br1 pv1 opt-card-text w-two-thirds ml1 mr2 pointer" type="button">YES</button><button class="mr1 silver ba bg-transparent pv1 opt-card-text br1 b--black-20 w-third pointer" type="button">NO</button></span></div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </main>
            <aside>
               <div class="static-widget-container">
                  <div id="createPostWidget" class="w-100 mb3 ba b--black-20 pa3 gtm-widget"><span class="f4 db mb3">Having any Doubts or Queries?</span><button type="button" id="open-create-post-widget-button" class="bn bg-green white pa3 w-100 outline-0 pointer">ASK NOW</button></div>
                  <div class="w-100 gtm-widget mb3 gtm-widget" data-creative="Ace_IBPS_Clerk_SFT" id="Ace_IBPS Clerk_SFT" data-sticky="false"><a class="w-100 db" target="_blank" href="https://courses.gradeup.co/batch/a2a863f2-d8a9-11e9-a21b-0a99e0cf8f3a?utm_medium=Ace_IBPS_Clerk&amp;utm_campaign=widget"><img alt="Ace_IBPS Clerk_SFT" class="db w-100" src="<?php echo asset('assets/user/image/widget-img1568876307658-57.png')?>"></a></div>
                  <div class="w-100 gtm-widget mb3 gtm-widget" data-creative="Bank_IBPS_Plus" id="Bank_IBPS_Plus_teaser" data-sticky="true"><a class="w-100 db" target="_blank" href="https://gradeup.co/online-test-series/banking-insurance/ibps-2019-plus-pack-zjxk6evwn"><img alt="Bank_IBPS_Plus_teaser" class="db w-100" src="<?php echo asset('assets/user/image/side_widget_ts3-2-img1564203306400-98.png')?>"></a></div>
                  <div class="w-100 gtm-widget mb3 gtm-widget" data-creative="RRBNTPC_Home_Widget1" id="RRBNTPC_Home_Widget1" data-sticky="false"><a class="w-100 db" target="_blank" href="https://gradeup.co/online-test-series/ssc-railways/rrb-ntpc-2019-test-series-zjsbhi4x3"><img alt="RRBNTPC_Home_Widget1" class="db w-100" src="<?php echo asset('assets/user/image/wb1-img1551073880816-49.webp')?>"></a></div>
               </div>
               <div class="sticky-widget-container sticky-container" style="position: sticky; top: 80px;">
                  <div class="w-100 gtm-widget mb3 gtm-widget" data-creative="Ensure_LIC_SFT" id="Ensure_LIC_SFT" data-sticky="true"><a class="w-100 db" target="_blank" href="https://courses.gradeup.co/batch/0c00130c-db04-11e9-a21b-0a99e0cf8f3a?utm_campaign=widget&amp;utm_medium=ensure_lic&amp;utm_source=gradeup"><img alt="Ensure_LIC_SFT" class="db w-100" src="<?php echo asset('assets/user/image/ensure_lic_side_widget-img1569418297034-11.png')?>"></a></div>
               </div>
            </aside>
         </div>
         <footer class="ph1 pv2 relative z-3 bg-themed-blue-light">
            <nav class="flex mh4-l mh0 justify-between flex-wrap">
               <section class="flex items-center flex-wrap justify-center justify-start-l mv1 self-center"><a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="https://gradeup.co/about-us">About Us</a><a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="https://gradeup.co/contact-us">Contact Us</a><a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="https://gradeup.co/faqs">FAQs</a><a class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="https://gradeup.co/terms-and-condition">Terms and Conditions</a><a target="_blank" class="no-underline white f6 mh3 no-hover-color fw4" rel="nofollow" href="https://gradeup.co/privacy-policy">Privacy Policy</a><a target="_blank" rel="noopener noreferrer" class="no-underline white f6 mh3 no-hover-color fw4" href="https://gradeup.co/sitemap_index.xml">Sitemap</a></section>
               <section class="flex flex-row items-center w-100 w-auto-l flex-grow-1 justify-center justify-end-l self-center mv1 ml3-l ml0">
                  <p class="ma0 white f5">Education © 2019</p>
               </section>
            </nav>
         </footer>
      </div>
      <script src="<?php echo asset('assets/user/js/lazysizes.js')?>"></script>
      <script id="__NEXT_DATA__" type="application/json" crossorigin="anonymous">{"dataManager":"[]","props":{"pageProps":{"query":{}},"isGradeupDomain":true,"apolloState":{"User:351b7ef0-e33f-11e9-a5c3-ca01bd5ad223":{"id":"351b7ef0-e33f-11e9-a5c3-ca01bd5ad223","name":"Jignesh Desai","phone":"","emails":{"type":"json","json":["archirayan46@gmail.com"]},"exams":[{"type":"id","generated":false,"id":"Exam:72975611-4a5e-11e5-a83f-8b51c790d8b8","typename":"Exam"},{"type":"id","generated":false,"id":"Exam:e9c196a1-4ae6-11e5-bc68-8620ffdeb79c","typename":"Exam"}],"groups":[{"type":"id","generated":false,"id":"Group:72975611-4a5e-11e5-a83f-8b51c790d8b8","typename":"Group"},{"type":"id","generated":false,"id":"Group:e9c196a1-4ae6-11e5-bc68-8620ffdeb79c","typename":"Group"}],"isActive":true,"isMentor":false,"picture":"https://lh3.googleusercontent.com/-AEYLoBKHPHY/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rcsBUz2vCUGg-i3ZxUXNrLN4eA5NQ/s96-c/photo.jpg","loginType":"login","needsVerification":false,"verificationInfo":{"type":"id","generated":true,"id":"$User:351b7ef0-e33f-11e9-a5c3-ca01bd5ad223.verificationInfo","typename":"UserVerificationInfo"},"__typename":"User"},"Exam:72975611-4a5e-11e5-a83f-8b51c790d8b8":{"id":"72975611-4a5e-11e5-a83f-8b51c790d8b8","__typename":"Exam"},"Exam:e9c196a1-4ae6-11e5-bc68-8620ffdeb79c":{"id":"e9c196a1-4ae6-11e5-bc68-8620ffdeb79c","__typename":"Exam"},"Group:72975611-4a5e-11e5-a83f-8b51c790d8b8":{"id":"72975611-4a5e-11e5-a83f-8b51c790d8b8","__typename":"Group"},"Group:e9c196a1-4ae6-11e5-bc68-8620ffdeb79c":{"id":"e9c196a1-4ae6-11e5-bc68-8620ffdeb79c","__typename":"Group"},"$User:351b7ef0-e33f-11e9-a5c3-ca01bd5ad223.verificationInfo":{"isVerified":false,"__typename":"UserVerificationInfo"},
      "ROOT_QUERY":{"me":{"type":"id","generated":false,"id":"User:351b7ef0-e33f-11e9-a5c3-ca01bd5ad223","typename":"User"},
      "css":{"type":"json","json":["https://gradeup-assets.grdp.co/website/_next/static/chunks/styles.e14b78c1.chunk.css"]}}}}
      ,"page":"/home","query":{},"buildId":"zca439eqSaATEc8nFdpFe","dynamicBuildId":false,"assetPrefix":"https://gradeup-assets.grdp.co/website",
      "dynamicIds":["+SFK","/W8u","+SFK","LJkV","+SFK","+07V"]}</script>
      <script async="" id="__NEXT_PAGE__/home" src="<?php echo asset('assets/user/js/home.js')?>" crossorigin="anonymous"></script>
      <script async="" id="__NEXT_PAGE__/_app" src="<?php echo asset('assets/user/js/_app.js')?>" crossorigin="anonymous"></script>
      <script async="" src="<?php echo asset('assets/user/js/commons.js')?>" crossorigin="anonymous"></script>
      <script async="" src="<?php echo asset('assets/user/js/chunk-auth.js')?>" crossorigin="anonymous"></script>
      <script async="" src="<?php echo asset('assets/user/js/commons.js')?>" crossorigin="anonymous"></script>
      <script async="" src="<?php echo asset('assets/user/js/chunk-mobile-bottom-drawer.js')?>" crossorigin="anonymous"></script>
      <script async="" src="<?php echo asset('assets/user/js/commons.js')?>" crossorigin="anonymous"></script>
      <script async="" src="<?php echo asset('assets/user/js/chunk-header-entity.js')?>" crossorigin="anonymous"></script>
      <script src="<?php echo asset('assets/user/js/commons.js')?>" async="" crossorigin="anonymous"></script>
      <script src="<?php echo asset('assets/user/js/styles.js')?>" async="" crossorigin="anonymous"></script>
      <script src="<?php echo asset('assets/user/js/main-82fc5e36d5ad3edb86b0.js')?>" async="" crossorigin="anonymous"></script>
      <script src="<?php echo asset('assets/user/js/sdk_002.js')?>" defer="defer"></script>
      <link rel="stylesheet" href="<?php echo asset('assets/user/css/styles_002.css')?>">
      <div id="toast-container"></div>
      <div class="ReactModalPortal"></div>
      <noscript>
         <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8KR6SS" height="0" width="0" style="display:none;visibility:hidden"></iframe>
      </noscript>
      <script type="text/javascript" id="">(function(){function d(b){console.log("loadError",b)}function e(b,c){if(!document.querySelector('[src\x3d"'+b+'"]')){var a=document.createElement("script");a.async=!0;a.type="text/javascript";a.onerror=d;c&&(a.onload=c);a.src=b;document.body.appendChild(a)}}window.ga&&(ga("create","UA-80480423-1"),ga("require","ec"));e("https://gradeup-assets.grdp.co/gtm-scripts/dist/desktop-widgets-6efe67a591189579b4e2.js?v\x3d6efe67a591189579b4e2",function(){dataLayer.push({event:"DLChanged",widgetsLoaded:!0})})})();</script><script async="" type="text/javascript" src="<?php echo asset('assets/user/js/desktop-widgets-6efe67a591189579b4e2.js')?>"></script><script type="text/javascript" id="">(function(){function d(b){console.log("loadError",b)}function e(b,c){if(!document.querySelector('[src\x3d"'+b+'"]')){var a=document.createElement("script");a.onerror=d;a.type="text/javascript";c&&(a.onload=c);a.src=b;document.body.appendChild(a)}}window.ga&&(ga("create","UA-80480423-1"),ga("require","ec"));window.clevertap={event:[],profile:[],account:[],onUserLogin:[],notifications:[]};window.clevertap.account.push({id:"RZZ-649-9W5Z"});e("https://d2r1yp2w7bby2u.cloudfront.net/js/a.js?v\x3dd2r1yp2w7bby2u",
         function(){dataLayer.push({event:"DLChanged",clevertapLoaded:!0});dataLayer.push({event:"ClevertapLoaded"})})})();
      </script>
      <script type="<?php echo asset('assets/user/js/a_008.js')?>"></script>
      <script type="text/javascript" id="">(function(){for(var b=document.querySelectorAll(".header-menu-item__link"),a=0;a<b.length;a++){var c=b.item(a);c.addEventListener("click",function(a){a.currentTarget&&ga&&a.currentTarget.querySelector(".anchor-label")&&ga("send","event","header_menu","click",a.currentTarget.querySelector(".anchor-label").innerText)})}})();</script>
      <script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","990336904319800");fbq("track","PageView");</script>
   </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="flex flex-column pl3">
          <div class="row">
          <span alt="Jignesh Desai" class="flex br-100 w3 h3 flex-shrink-0 overflow-hidden relative" style="background-color: indigo;
    color: white !important;
    padding-left: 13px;
    font-size: 34px;
    width: 45px;
    height: 45px;
    background-repeat: no-repeat;
    margin-right: 5px;
    padding-top: 5px;">{{ substr($name,0,1) }}</span>
          <h3 class="gray mv0">Create Post</h3>		
          	<p class="f4 gray mv0">Select what you would like to post</p></div>
        </div>
        <div class="modal-body">
          <div class="flex-column bg-white ma-auto w-90-l w-100 h-auto-l h-100 pa4  flex">
          	
          		<div class="flex flex-row-l flex-column justify-between items-center">
          		<a class="flex justify-center-l justify-start items-center ba b--black-10 w-30-l w-100 pa2 mv0-l mv1 b--animate text-animate " id="createPost_query">
          		<div class="br-100 bg-light-silver flex items-center justify-center mr3 pa2 ">
          		<svg class="db svg-s-white svg-fn ml-auto" viewBox="0 0 32 32" style="stroke-width: 3px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px">
          		<path d="M4 8c0-2.2 2-3 4.2-3h17C27.4 5 29 5.8 29 8v12c0 2.2-1.6 5-3.8 5H9.1h0.1H9.1L4 28V8zM14.5 12.2c0 0 0.4-2.7 2.6-2.4 0.5 0.1 1.4 0.7 1.7 1.3 0 0 0.9 2.1-1.8 3.2 0 0-1.4 0.6-0.7 1.8"></path>
          		<circle cx="16.4" cy="18.8" r="1.1"></circle>
          		</svg>
          		</div>
          		<span class="f4 gray ">Ask A Query</span></a>
          		<a class="flex justify-center-l justify-start items-center ba b--black-10 w-30-l w-100 pa2 mv0-l mv1 b--animate text-animate " id="createPost_mcq">
          		<div class="br-100 bg-light-silver flex items-center justify-center mr3 pa2 ">
          		<svg class="db svg-s-white ml-auto svg-fn" viewBox="0 0 42.3 36" style="stroke-width: 3px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px">
          		<rect x="1.8" y="2.3" width="27" height="8"></rect>
          		<rect x="1.8" y="14.3" width="39" height="8"></rect>
          		<rect x="1.8" y="26.3" width="19" height="8"></rect>
          		</svg>
          		</div>
          		<span class="f4 gray " data-toggle="collapse" data-target="#demo">Post Job</span>
          		<div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
          		</a>
          		<a class="flex justify-center-l justify-start items-center ba b--black-10 w-30-l w-100 pa2 mv0-l mv1 b--animate text-animate " id="createPost_shareInfo">
          		<div class="br-100 bg-light-silver flex items-center justify-center mr3 pa2 ">
          		<svg class="db svg-s-white ml-auto svg-fn" viewBox="0 0 32 32" style="stroke-width: 3px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px">
          		<g>
          		<path class="st3" d="M13.5 26.2"></path>
          		<rect x="14" y="10" class="st3" width="8" height="8"></rect>
          		<line class="st3" x1="6" y1="22" x2="22" y2="22"></line>
          		<line class="st3" x1="6" y1="18" x2="10" y2="18"></line>
          		<line class="st3" x1="6" y1="14" x2="10" y2="14"></line>
          		<line class="st3" x1="6" y1="10" x2="10" y2="10"></line>
          		<path class="st3" d="M26 24.9c0 1.1-0.6 1.1-1.7 1.1h-20C3.2 26 2 24.9 2 23.8v-16C2 6.7 3.2 6 4.3 6h20C25.4 6 26 6.7 26 7.8V24.9z"></path>
          		</g>
          		<path id="XMLID_1_" class="st3" d="M27 9L27 9h1.3c1.1 0 1.7 0.3 1.7 1.4v13.5c0 1.1-0.6 2.1-1.7 2.1h-2H25"></path>
          		</svg>
          		</div>
          		<span class="f4 gray ">Share Info</span>
          		</a>
          		</div>
          		</div>		
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>



<script>
$(document).ready(function(){
	$(".createpost").click(function(){
		alert('test');
		$('#myModal').modal('show');
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
		$(".ts-ul li").css({"background-color": "white", "cursor": "pointer","box-shadow":"0 5px 4px 0 rgba(0, 0, 0, .1)"});
    });
    $(".test-series").mouseleave(function(){
   		$('.ts-ul').hide();
   		$('.ts-ul li').hide();
   		
   	});	
    $(".classroom").mouseenter(function(){
    	$('.cr-ul').show();
    	$('.cr-ul li').show();
    	$('.cr-ul li').css('background-color','white');
    	$(".cr-ul li").css({"background-color": "white", "cursor": "pointer","box-shadow":"0 5px 4px 0 rgba(0, 0, 0, .1)"});
    });	
    $(".classroom").mouseleave(function(){
   		$('.cr-ul').hide();
   		$('.cr-ul li').hide();
   });	
   $(".free-videos").mouseenter(function(){
    	$('.fv-ul').show();
    	$('.fv-ul li').show();
    	
    	$(".fv-ul li").css({"background-color": "white", "cursor": "pointer","box-shadow":"0 5px 4px 0 rgba(0, 0, 0, .1)"});
    	
    	
    });
    
    $(".free-videos").mouseleave(function(){
   		$('.fv-ul').hide();
   		$('.fv-ul li').hide();
   	});
    
    $(".quizzes").mouseenter(function(){
    	$('.qz-ul').show();
    	$('.qz-ul li').show();

    	$(".qz-ul li").css({"background-color": "white", "cursor": "pointer","box-shadow":"0 5px 4px 0 rgba(0, 0, 0, .1)"});
    });	
    
    $(".quizzes").mouseleave(function(){
   		$('.qz-ul').hide();
   		$('.qz-ul li').hide();
   	});
    
    $(".prev-papers").mouseenter(function(){
    	$('.pp-ul').show();
    	$('.pp-ul li').show();
    	
    	$(".pp-ul li").css({"background-color": "white", "cursor": "pointer","box-shadow":"0 5px 4px 0 rgba(0, 0, 0, .1)"});
    });	
    $(".prev-papers").mouseleave(function(){
   		$('.pp-ul').hide();
   		$('.pp-ul li').hide();
   	});
});
</script>

  
  
<?php }else{ ?>
	<p>Please Login First</p>
<?php } ?>
