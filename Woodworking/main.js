function main(){
	
	$('.dropcontent').hide();
	
	$('nav ul li.dropdown').hover(function(){
		
		$(this).children('ul').stop().slideToggle(200)
	});
		
};

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 8000); // Change image every 8 seconds
}
$(document).ready(main);