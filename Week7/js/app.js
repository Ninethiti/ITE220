//Thiti and Muhammad
//got the clesius and farenheign button from alvin
$(function(){

selectedUnit = "";

$("a.city").hide();

$(".button1").on("click", function(){ //fahrenheit button
var reqUnit = $(".button1").html().toLowerCase();
selectedUnit = '&units=imperial';
$("a.city").fadeIn(1600);
}); 

$(".button2").on("click", function(){//celcius button
var reqUnit2 = $(".button2").html().toLowerCase();
selectedUnit = '&units=metric';
$("a.city").fadeIn(1600);
});

$("a.city").on("click", function(e){ 
e.preventDefault();
// NOT NEEDED --> alert("hello user");
var city = this.text.toLowerCase();
$.ajax({
type: 'GET',
url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + selectedUnit + '&appid=2de143494c0b295cca9337e1e96b00e0',
beforeSend: function(){ 
} ,
error: function(){
}, 
success: function(data){ 
console.log(data.name);
$("#container").html(data.name + ": " + data.main.temp);
},
complete: function(){ 
} 
}); 
});
}); 