<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    
<script>
    $(document).ready(function(){
            $(".overflow-auto span:first-child").addClass('bb');
            $(".overflow-auto span:first-child").addClass('b--green');
            $(".overflow-auto span:first-child").addClass('bw2 ');
            $(".overflow-auto span:first-child").addClass('green');
            $(".pb2 .pt4:first").addClass('flex');
            $(".pb2 .pt4:first").removeClass('dn');
              
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
		$(".ts-ul li").css({"background-color": "white", "cursor": "pointer"});
    });
    $(".test-series").mouseleave(function(){
   		$('.ts-ul').hide();
   		$('.ts-ul li').hide();
   		
   	});	
    $(".classroom").mouseenter(function(){
    	$('.cr-ul').show();
    	$('.cr-ul li').show();
    	$('.cr-ul li').css('background-color','white');
    	$(".cr-ul li").css({"background-color": "white", "cursor": "pointer"});
    });	
    $(".classroom").mouseleave(function(){
   		$('.cr-ul').hide();
   		$('.cr-ul li').hide();
   });	
   $(".free-videos").mouseenter(function(){
    	$('.fv-ul').show();
    	$('.fv-ul li').show();
    	
    	$(".fv-ul li").css({"background-color": "white", "cursor": "pointer"});
    	
    	
    });
    
    $(".free-videos").mouseleave(function(){
   		$('.fv-ul').hide();
   		$('.fv-ul li').hide();
   	});
    
    $(".quizzes").mouseenter(function(){
    	$('.qz-ul').show();
    	$('.qz-ul li').show();

    	$(".qz-ul li").css({"background-color": "white", "cursor": "pointer"});
    });	
    
    $(".quizzes").mouseleave(function(){
   		$('.qz-ul').hide();
   		$('.qz-ul li').hide();
   	});
    
    $(".prev-papers").mouseenter(function(){
    	$('.pp-ul').show();
    	$('.pp-ul li').show();
    	
    	$(".pp-ul li").css({"background-color": "white", "cursor": "pointer"});
    });	
    $(".prev-papers").mouseleave(function(){
   		$('.pp-ul').hide();
   		$('.pp-ul li').hide();
   	});
});
</script>    
    
    
<script>
    $('document').ready(function(){
    
    
    $('#useraccessmenu').on({
    'mouseenter':function(){
        $('#useraccessulmenuitems li').css('background-color', '#fff');
        $('#useraccessulmenuitems').removeClass("dd-items--inactive");
    },'mouseleave':function(){
        $('#useraccessulmenuitems').addClass("dd-items--inactive");
    }
})
    
    });
        
    
</script>   
    
@yield('script')