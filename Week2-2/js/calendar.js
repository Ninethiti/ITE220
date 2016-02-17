var i;
var k;
var hotelTable = document.getElementById("hotelCalendarTable");
var defaultData = hotelTable.innerHTML;
var stringHTML = "";

var numbers = [1,2,3,4,5,6,7];

for (i = 0; i<5;i++){
	stringHTML+="<tr>"
	for(k = 0; k<7;k++){
		if((numbers[k] + (7*i)) > 31){
			break;
			}
		stringHTML+="<td>" +(numbers[k] + (7*i))+ "</td>"
		
		
		}
	stringHTML+="<tr>"


}

hotelTable.innerHTML += stringHTML;