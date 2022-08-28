//working on the animation countdown part
let counters=document.querySelectorAll(".counter");
let speed=200;
counters.forEach(counter=>{
	const updateCounter=()=>{
		let target=+counter.getAttribute("data-target");
		let count=+counter.innerText;
		let increment=target/speed;
		(count<target)?counter.innerText=Math.ceil(count+increment):counter.innerText=target
		setTimeout(updateCounter,1);
		/*if (count<target) {
			counter.innerText=Math.ceil(count + increment);
			setTimeout(updateCounter,1);
		}else{
			counter.innerText=target;
		}*/
	}
	updateCounter();
})

//page scroll indicator
/*$(document).ready(function(){
	$(window).scroll(function(){
		let windowTop=$(window).scrollTop(),
		documentHeight=$(document).height()
		windowHeight=$(window).height();
		let scroll=(windowTop / (documentHeight - windowHeight))*100;
		$(".scroll-line").css("width",(scroll + "%"));
	})
})*/
$(document).ready(function(){
	$(window).scroll(()=>{
		let windowTop=$(window).scrollTop();
		let documentHeight=$(document).height();
		let windowHeight=$(window).height();
		let scroll=(windowTop/(documentHeight - windowHeight))*100;
		$(".scroll-line").css("width",(scroll + "%"));
	});
	$("#toggle-btn").click(function(){
		//change background to black
		$("body").toggleClass("change-background")
		$(".card").toggleClass("change-background");
		$(".fixed-top").toggleClass("change-background");
		$(".navbar-brand").toggleClass("change-background");
		$(this).css("border","1px solid white");
		$(".span_change").text($(".span_change").text()=="Light Mood"?"Dark Mode":"Light Mood")
	})
})