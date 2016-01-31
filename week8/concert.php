<html>
<head>
<title>GIRLS' GENERATION 4TH TOUR - PHANTASIA - IN BANGKOK </title>
<link rel="stylesheet" href="css/styles.css">
<link rel="icon" href="images/favicon.jpg" type="image/gif" sizes="16*16">
<body>
<div class="gnimage" align="center"/>
<img src="images/gnbackground.jpg"/>
 <span class="consertname">GIRLS' GENERATION 4TH TOUR - PHANTASIA - IN BANGKOK </span>
</div>

</body>
</head>
</html>

<?php
//ECHO "HELLO WORLD";	
 $seats= ['A-1','A-2','A-3','A-4','A-5', 'B-1','B-2','B-3','B-4','B-5','C-1','C-2','C-3','C-4','C-5'];
 $counter =1;

echo "<form action='concertResult.php' method='post'>";
 
 foreach($seats as $seat) {
	 echo("<div id='spaceContainer'></div>");
	 echo "<input type='checkbox' name='seats[]' value='".$seat."'></input>";
	 echo ($seat);
	 
	 
	 
if($counter%5==0){
		 echo"<br>";
	 }
	 ++$counter;
 }

 echo("<div id='spaceContainer'></div>");
 echo "<input type='submit' value='Buy now!' class='button'/>";
?>