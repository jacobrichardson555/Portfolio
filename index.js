$(".modal").hide();
$('.dropMenu').hide();
$(document).ready(function(){
	setTimeout(function(){
		$(".paragraph").removeClass("hidden");
	},window.innerWidth > 800 ? 3500 : 500);

	$('nav ul li.dropLi').hover(function(){

		$(this).children("ul").stop().slideToggle(200)
	});

	$(".content img").hover(function(){
		$(this).attr({
			width: "250",
			height: "150"});
	}, function(){
		$(this).attr({
			width: "240",
			height: "140"});
	})
	$(".oneBtn").click(function(){
		$(".one").show();
	})
	$(".twoBtn").click(function(){
		$(".two").show();
	})
	$(".threeBtn").click(function(){
		$(".three").show();
	})
	$(".fourBtn").click(function(){
		$(".four").show();
	})
	$(".fiveBtn").click(function(){
		$(".five").show();
	})
	$(".sixBtn").click(function(){
		$(".six").show();
	})
	$(".sevenBtn").click(function(){
		$(".seven").show();
	})
	$(".eightBtn").click(function(){
		$(".eight").show();
	})
	$(".close").on("click", function(){
		$(".modal").hide();
	})
	$(".logo").hover(function(){
		$(this).addClass("bounce");
	},function(){
		$(this).removeClass("bounce");
	});

	$(function(){
	setTimeout(function(){
		$('.fly-text').removeClass('hidden');
	}, 500)
	setTimeout(function(){
		$('.fly-text').fadeOut();
	}, 4500)
})();

});
