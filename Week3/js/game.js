var game = {
	answer:Math.floor(Math.random()*101), 
	
	init: function() {
		var self = this;
		
		var ele = document.getElementById("one");
		ele.addEventListener("click", function(){
			self.click(1);
		}, false);

		
		var ele = document.getElementById("two");
		ele.addEventListener("click", function(){
			self.click(2);
		}, false);
		
		
		var ele = document.getElementById("three");
		ele.addEventListener("click", function(){
			self.click(3);
		}, false);
		
	
		var ele = document.getElementById("four");
		ele.addEventListener("click", function(){
			self.click(4);
		}, false);
		
		
		var ele = document.getElementById("five");
		ele.addEventListener("click", function(){
			self.click(5);
		}, false);
		
		
		var ele = document.getElementById("six");
		ele.addEventListener("click", function(){
			self.click(6);
		}, false);
		
	
		var ele = document.getElementById("seven");
		ele.addEventListener("click", function(){
			self.click(7);
		}, false);
		
	
		var ele = document.getElementById("eight");
		ele.addEventListener("click", function(){
			self.click(8);
		}, false);
		
		
		var ele = document.getElementById("nine");
		ele.addEventListener("click", function(){
			self.click(9);
		}, false);
		
		
		var ele = document.getElementById("zero");
		ele.addEventListener("click", function(){
			self.click(0);
		}, false);

		var ele = document.getElementById("guess");
		ele.addEventListener("click",function(){
			self.checkAnswer(self);
			}, false);  
	},
	click: function(value) {
		console.log(value + " clicked.");
		var userValueEle = document.getElementById("userValue");
		userValueEle.value += value;
	},
	
	clear:function(){
		var userValueEle = document.getElementById("userValue");
		userValueEle.value="";
		},
		
	checkAnswer: function(self) {
		var userValueEle = document.getElementById("userValue");
		if(self.answer == userValueEle.value){
			alert("Correct!" + "\n" +"Refresh to try a new number!");			
		} else{
				
			if(self.answer > userValueEle.value){
				alert("Guessing number is less than the correct number");
			} else{
				alert("Guessing number is more than the correct number");
			}
		}
		userValueEle.value="";
	}
	
};

game.init();