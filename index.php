<?php
if(!isset($_GET['vmsisdn'])){
	include 'class/msisdn.php';
	$msisdn_obj= new msisdn();
	$vmsisdn =  $msisdn_obj->msisdnDetect();
}
else $vmsisdn = $_GET['vmsisdn'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Home | WAP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	 
	<link href="http://wap.chl-bd.com/main_css4.css" rel="stylesheet" type="text/css" media="screen">
	<style>
		ul.pagination {
			display: inline-block;
		}
		div.center {text-align: center;}
	</style>
</head>

<body oncontextmenu="return false">
<style>
#txtsearch{
	border-style: solid;
	border-color: #fe1a00;
	height:25px;
	color:black;
	border-radius: 5px 0px 0px 5px;
	padding-left: 5px;
}
#btnsearch{
	border-style: solid;
	border-color: #fe1a00;
	background-color:#fe1a00;
	color:white;
	height:30px;
	border-radius: 0px 5px 5px 0px;
}
.mySlides {display:none;}
</style>

<center> <img src="http://wap.chl-bd.com/images/banner.gif" width="100%" height="100%" > </center>
<!--Banner image
	<a href="index" > <img src="<br />
<b>Notice</b>:  Undefined variable: row_banner in <b>C:\xampp\htdocs\wap\header.php</b> on line <b>35</b><br />
" width="100%" height="100%" > </a>
	<iframe id="slider" width="100%" frameborder="0" height="auto" src="http://wap.chl-bd.com/slider/slide.php"> </iframe>

<center>
<div style="width:100%; height:70%">
  <img class="mySlides" src="/slider/in.jpg" style="width:100%; height:70%">
  <img class="mySlides" src="/slider/in1.jpg" style="width:100%; height:70%">
  <img class="mySlides" src="/slider/in2.jpg" style="width:100%; height:70%">
</div>
</center>
-->

<!--Menu buttons-->
<p style="margin-top:-2px;"></p>

	<table class="index_table" border="1" width="100%" style="background-color: ;">
		<tbody>
		   <tr>
				<td width="30%" height="30" align="center" bgcolor="">
					<a href="http://wap.chl-bd.com/index" class="myButton-group-justified">Home</a>
				</td>
				<td width="30%" height="30" align="center" bgcolor="#fe1a00">
					<a href="http://wap.chl-bd.com/TopDownloads" class="myButton-group-justified">Popular</a>
				</td>
				<td width="30%" height="30" align="center" bgcolor="#fe1a00">
					<a href="http://wap.chl-bd.com/RecentlyAdded" class="myButton-group-justified">New</a>
				</td>
		   </tr>
		</tbody>
	 </table>
	 
<!--Marquee text
Subscription charge TK. 2.44/day(autorenew) with daily 2 FREE downloads and after daily 2 free download charge will be Tk 2.44 for every next downloads. For Pay & Download each content price is 2.44 Tk and no daily subscription fee. To Unsubscribe send STOP WP to 16437-->
<!--Search box and button-->
<table width="100%">
		<tbody>
	
			<tr>
				<td width="95%">
					<input id='txtsearch' style="width:100%;" name='txtsearch' placeholder='Search' type='text'/>
				</td>
				<td width="5%">
					<button id='btnsearch' style="width:100%;" type='submit' onclick="search_content();">Search</button>
				</td>
			</tr>
		</tbody>

	</table>
	<center>
		<img id="ajax-loader" src="http://wap.chl-bd.com/images/ajax-loading.gif" style="display:none;" />
    <center>
<br/>
<!--Search results-->
 <div id="search-result"> </div>
 
 <script>
document.getElementById("txtsearch")
    .addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById("btnsearch").click();
    }
});
 </script>
<script>
// var myIndex = 0;
// carousel();

// function carousel() {
    // var i;
    // var x = document.getElementsByClassName("mySlides");
    // for (i = 0; i < x.length; i++) {
       // x[i].style.display = "none";
    // }
    // myIndex++;
    // if (myIndex > x.length) {myIndex = 1}
    // x[myIndex-1].style.display = "block";
    // setTimeout(carousel, 2000); // Change image every 2 seconds
// }
</script><table class="special_links" width="100%">
	<tbody>
		<tr>
			<td class="titlebar" width="100%">			
				<a href="http://wap.chl-bd.com/TopDownloads.php">Most Popular</a>
			</td>
		</tr>
	</tbody>
</table> 

<p class="white_spacer_divider"></p><br/>
<table border="0" width="100%">
	<tbody>
	   <tr>
			<td width="50%" align="center">
				<p>Videos</p>		
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/Video/Celebrity/ebb57f2b28579d0585bb1272d88db6.jpg" width="300" height="300"> </a>		
				<br/>
				<a href="fromweb.php" class="myButton">Download</a>	
				<br/><br/>
			</td>
			
			<td width="50%" align="center">
				<p>Wallpapers</p>
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/Wallpaper/Celebrity/8054a7c0950ace05df9733ceea73a7.jpg" width="300" height="300"> </a>		
				<br/>
				<a href="fromweb.php" class="myButton">Download</a>											
				<br/><br/>
			</td>
			
					
	   </tr>
	   
	   <tr>
			<td width="50%" align="center">
				<p>Animations</p>	
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/Animation/Model/5e294ffefd86c11b893067920aa069.gif" width="300" height="300"> </a>		
				<br/>
				<a href="fromweb.php" class="myButton">Download</a>	
				<br/><br/>
			</td>	
			<td width="50%" align="center">
				<p>Games & Apps</p>				
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/games/Puzzle/c64dde9b7df203ca9b13fb77952f82.gif" width="300" height="300"> </a>		
				<br/>
				<a href="fromweb.php" class="myButton">Download</a>	
				<br/><br/>
			</td>
	  </tr>
	  <tr>
			<td width="50%" align="center">
				<p>Music</p>				
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/Music/Bangla Music/288ea99dc90802037a233c27c55fe3.jpg" width="300" height="300"> </a>		
				<br/>
				<a href="fromweb.php" class="myButton">Download</a>	
				<br/>
			</td>
			<td width="50%" align="center">
				<p>Ringtones</p>				
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/Ringtone/Remix/dc12607ca86408682f463ee95b4f17.png" width="300" height="300"> </a>		
				<br/>
					<a href="fromweb.php" class="myButton">Download</a>	
				<br/>				
			</td>
	  </tr>
		<tr>
			<td colspan="3" align="right"> 
				<a href="http://wap.chl-bd.com/TopDownloads">  More...»</a>
			</td>
		</tr>
	  
	</tbody>
 </table><br/>
<p class="white_spacer_divider"></p>

 <table class="special_links" width="100%">
	<tbody>
		<tr>
			<td class="titlebar">			
				<a href="http://wap.chl-bd.com/RecentlyAdded.php">Recently Added</a>
			</td>
		</tr>
	</tbody>
</table> 
<br/>
<p class="white_spacer_divider"></p>
<table border="0" width="100%">
	<tbody>
	   <tr>
			<td width="50%" align="center">
				<p>Wallpapers</p>					
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/Wallpaper/Celebrity/ac8310c4f7029d4c42e79ab7da24c3.jpg" width="300" height="300"> </a>		
				<br/>
					<a href="fromweb.php" class="myButton">Download</a>	
				<br/><br/>	
			</td>
			<td width="50%" align="center">
				<p>Animations</p>	
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/Animation/21st February/8402b031ed4a68450f2eae644fc1ec.gif" width="300" height="300"> </a>		
				<br/>
					<a href="fromweb.php" class="myButton">Download</a>	
				<br/><br/>
			</td>
					
	   </tr>
	   <tr>
			<td width="50%" align="center">
				<p>Videos</p>				
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/Video/Love/44c92e4e3b355de7ebd0f43fea1676.PNG" width="300" height="300"> </a>		
				<br/>
				<a href="fromweb.php" class="myButton">Download</a>	
				<br/><br/>	
			</td>	
			<td width="50%" align="center">
				<p>Games & Apps</p>				
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/games/Runner/ef372b208f83537cc47e75c545ef38.gif" width="300" height="300"> </a>		
				<br/>
				<a href="fromweb.php" class="myButton">Download</a>	
				<br/><br/>
			</td>
		</tr>
		<tr>
			<td width="50%" align="center">
				<p>Music</p>				
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/Music/Bangla Music/6220b7b29d2253ac1fecf7d68b7f8a.JPG" width="300" height="300"> </a>		
				<br/>
				<a href="fromweb.php" class="myButton">Download</a>	
				<br/><br/>			
			</td>
			<td width="50%" align="center">
				<p>Ringtones</p>				
								<a href="fromweb.php"> <img src="http://wap.chl-bd.com/demo/Ringtone/Bangla Rington/dfe7bd6df9b1ed5d1432ff77802379.jpg" width="300" height="300"> </a>		
				<br/>
				<a href="fromweb.php" class="myButton">Download</a>	
				<br/><br/>			
			</td>							
	  </tr>
		<tr>
			<td colspan="3" align="right"> 
				<a href="RecentlyAdded">  More...»</a> 
			</td>
		</tr>
	  
	</tbody>
 </table>
<br/>
<p class="white_spacer_divider"></p> 

<table class="special_links" width="100%">
	<tbody>
		<tr>
			<td class="titlebar">			
				<a href="#">All Category</a>
			</td>
		</tr>
	</tbody>
</table> 
<br/>
<p class="white_spacer_divider"></p>
<table class="index_table" border="0" width="100%">
  <tbody>
   <tr>	
		<td width="50%" align="center"><a href="http://wap.chl-bd.com/wallpaper"><img src="http://wap.chl-bd.com/images/wallpaper-icon.jpg" alt="Wallpapers" width="170" height="170"><br>Wallpapers</a> <br/><br/></td>        
		<td width="50%" align="center"><a href="http://wap.chl-bd.com/animation"><img src="http://wap.chl-bd.com/images/animation-icon.gif" alt="Animations" width="170" height="170"><br>Animations</a><br/><br/></td>
   </tr>
   <tr>
		<td width="50%" align="center"><a href="http://wap.chl-bd.com/video"><img src="http://wap.chl-bd.com/images/videos-icon.jpg" alt="Videos" width="170" height="170"><br>Videos</a><br/><br/></td>	   
		<td width="50%" align="center"><a href="http://wap.chl-bd.com/games"><img src="http://wap.chl-bd.com/images/games-icon.jpg" alt="Games & Apps" width="170" height="170"><br>Games & Apps</a><br/><br/></td>        
    </tr>
	<tr>
		<td width="50%" align="center"><a href="http://wap.chl-bd.com/music"><img src="http://wap.chl-bd.com/images/music-icon.jpg" alt="Music" width="170" height="170"><br>Music</a><br/><br/></td>
		<td width="50%" align="center"><a href="http://wap.chl-bd.com/ringtone"><img src="http://wap.chl-bd.com/images/ringtone-icon.jpg" alt="Ringtones" width="170" height="170"><br>Ringtones</a><br/><br/></td>	
	</tr>
 </tbody>
 </table>
 

<!-- footer -->

<br/><br/>
<footer>
	
	<p align="center" style="font-size:17px; background-color:grey; font-weight:bold;"><a href="index" style="color:#de1a00;">Home</a> | <a href="faq" style="color:#de1a00;">FAQ</a> | <a href="tel:+8801787659321" style="color:#de1a00;">Helpline</a></p>
	<p style="background-color:grey;"> <b>To stop send STOP WP to 16437</b></p>
	
			
	
	<p class="footerP"> <b>© Content House 2017 - All rights reserved.</b></p>
</footer>


<!--Detect visitor's device and save to visitor counter-->
<script type="text/javascript" src="//wurfl.io/wurfl.js"></script>
<script type="text/javascript">
function search_content() {
	document.getElementById('ajax-loader').style.display = 'block';
	var txt = document.getElementById("txtsearch").value;
	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('ajax-loader').style.display = 'none';
			document.getElementById("search-result").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajax/search_content.php?page=/index.php&txt="+txt,true);
	xmlhttp.send();
}

if(WURFL.form_factor != "Smartphone"){
		
   document.getElementById("slider").style.height = "450px";  
 }
else if(WURFL.form_factor == "Smartphone"){
   document.getElementById("slider").style.height = "200px";  
 }

</script>	   
</body>
</html>

<script type="text/javascript">
	var device = WURFL.form_factor + " | " + WURFL.complete_device_name;
	// if(WURFL.form_factor != "Smartphone"){
		
	   // document.getElementById("slider").style.height = "450px";  
	 // }
	// else if(WURFL.form_factor == "Smartphone"){
	   // document.getElementById("slider").style.height = "200px";  
	 // }
	 
	 
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			;
			//document.getElementById("txtHint").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajax/savevisitorinfo.php?device="+device+"&msisdn=Undefined Number&ip=182.160.118.50&page=/",true);
	xmlhttp.send();	
</script>