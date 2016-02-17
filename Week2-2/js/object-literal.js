var hotel={
	name: "STAMFORD HOTEL",
	rooms: 30,
	booked: 15,
	checkAvailability: function(){
    return this.rooms - this.booked;
}
};
	
var hotelname =document.getElementById("hotelname");
hotelname.textContent = hotel.name;

var roomsleft =document.getElementById("roomsleft");
roomsleft.innerHTML = hotel.checkAvailability();