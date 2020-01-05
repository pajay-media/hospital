<!DOCTYPE html>
<html amp >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
 
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link href="assets/fonts/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <script type="text/javascript">
  	
  </script>
  
</head>

<body>
  <section class="header15 cid-rD6bDH0B57 mbr-fullscreen mbr-parallax-background" id="header15-0">

    

    <div class="mbr-overlay" style="opacity: 0.75; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Patient Manager1.0</h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5" style="font-size: 12px;">every life counts,one patient, one record...</p>
            </div>
 <div class="col-lg-4 col-md-5">
                <div class="form-container">
                    <div class="media-container-column" data-form-type="formoid">
                        <!---Formbuilder Form--->
                       
	<fieldset>
      <div class="dragArea row">
                                <div class="col-md-12 form-group">
			
				<label style="color: white;">Union</label>
				<select name="union"  style="width: 175px; border-radius:5px;" id="union">
					<option>PCN</option>
					<option>AMD</option>
				</select>
		
		</div>
		 <div class="col-md-12 form-group ">
		
		
				<label style="color: white;">Licence Number</label>
				<input id="licence" type="number" name="licence_num" class="licence_num"  class="form-control px-3 display-7"  style="width: 175px; border-radius:5px;">
	
		</div>
<div id="msg" style="color: white; float:right;" class="col-md-12 form-group ">

</div>

<input type="hidden" id="aut" value="">
		</div>
		<button id="submit"  onclick="check()" style="width: 175px; border-radius:5px;">Login</button>
			
				
			
		</fieldset>
</div>
<script>
document.getElementById('licence').onkeyup = function(){
	if ( document.getElementById('licence').value==="") {
		 document.getElementById('msg').innerHTML="no Licence number entered";
	}
	else{
		 document.getElementById('msg').innerHTML="";

		//console.log(_('.identity').innerHTML);
		var xml =  window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");

		var elem = new FormData;
		elem.append('union', document.getElementById('union').value);
		elem.append('licence_num', document.getElementById('licence').value);
		xml.onreadystatechange = function(){
			if (xml.readyState == 4) {
												 
				if (xml.responseText != 'false') {
					
					var element = xml.responseText;
					msg.innerHTML = element;
					document.getElementById('aut').value=element;
if(msg.innerHTML == 1){
msg.innerHTML='recognized';
}
				}
			}else{
				console.log('not working');
			}
		}		
		xml.open('POST', 'login.php', true);
		xml.send(elem);

	
			}
	}
function check(){
	var log=document.getElementById('aut').value;
 if(log == 1){
log.innerHTML='recognized';
window.location.href='admin.php';
 }

}

</script>
</body>
</html>