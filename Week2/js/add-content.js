var products = ["Stamford T-Shirt", "Stamford Notebook",  "Stamford Wristband"];
var price = [10, 5, 1];
var total = 0;

var productList = document.getElementById("productList");
productList.innerHTML +="<li>" +products[0]+ ":$" + price[0] + "</li>";
total = price[0];

var productList = document.getElementById("productList");
productList.innerHTML +="<li>" +products[1]+ ":$" + price[1] + "</li>";
total = price[1];

var productList = document.getElementById("productList");
productList.innerHTML +="<li>" +products[2]+ ":$" + price[2] + "</li>";


total = (price[0]+price[1]+price[2])*(80/100);

var totalPriceEle = document.getElementById("totalPrice");
totalPriceEle.textContent = "$" + total;