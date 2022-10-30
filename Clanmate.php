<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
var pop = new Audio();
pop.src = 'pop.mp4';
</script>


   <script language="JavaScript"> 

 

function disableCtrlKeyCombination(e) 

{ 

//list all CTRL + key combinations you want to disable 

var forbiddenKeys = new Array('a', 'n', 'u', 'x',  'j' , 'w','i'); 

var key; 

var isCtrl; 

if(window.event) 

{ 

key = window.event.keyCode; //IE 

if(window.event.ctrlKey) 

isCtrl = true; 

else 

isCtrl = false; 

} 

else 

{ 

key = e.which; //firefox 

if(e.ctrlKey) 

isCtrl = true; 

else 

isCtrl = false; 

} 



//if ctrl is pressed check if other key is in forbidenKeys array 

if(isCtrl) 

{ 

for(i=0; i<forbiddenKeys.length; i++) 

{ 

//case-insensitive comparation 

if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) 

{ 
window.location.assign("http://flamechargers.atwebpages.com/404.html")

/*
alert('Key combination CTRL + '+String.fromCharCode(key) +' has been disabled.'); 
*/
return false; 

} 

} 

} 

return true; 

} 

</script>
   <link rel="icon" href="./images/favicon.png">
<?php

 $clantag = "#JVUVCCLC";
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjQ2MjI2ZTExLTFmMGMtNDBiMi1hMTEwLWQyNDE4NTdjZGUzZiIsImlhdCI6MTYxMjM3NjQ5MCwic3ViIjoiZGV2ZWxvcGVyL2JjNWU1NDQ3LWM2OTctNzU0YS1hNjJhLTRiOGE2MTU3ZTc3MSIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjE4NS4yNy4xMzQuMTk4Il0sInR5cGUiOiJjbGllbnQifV19.BScEoJlrie2945xk_sIefEdoqgITjCe0ma4RMkqbuaqTElBmnDziFc0SkHwsLAR0OMBDzkJMDPrY9l1708OPbg";
$url = "https://api.clashofclans.com/v1/clans/" . urlencode($clantag);
$ch = curl_init($url);
$headr = array();
$headr[] = "Accept: application/json";
$headr[] = "Authorization: Bearer ".$token;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($ch);
$data = json_decode($res, true);
curl_close($ch);
if (isset($data["reason"])) {
  $errormsg = true;
}
$members = $data["memberList"];
$label = $data["labels"];
?>
  <title><?php echo $data["name"]; ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
    <link rel="stylesheet" href="Clanmate.css" />

</head>
<style>
    

.popup .overlay {
  position:fixed;
  top:0px;
  left:0px;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.8);
  z-index:100000;
  /*display:none;*/

}
 
.popup .content {
  position:fixed;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%) scale(0);
  background:#FFA500;
  width:70vw;
  height:90vh;
  z-index:100001;
  text-align:center;
  padding:20px;
  box-sizing:border-box;
  box-shadow: 0 3rem 89rem #000;
  animation: popup 3s;
  font-family:"Open Sans",sans-serif;
}
/*
@keyframes popup{
	0% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
	}

	70% {
		transform: scale(1);
		box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
	}

	100% {
		transform: scale(0.95);
		box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
	}
}*
@keyframes popup{
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(0.8) ;
  }
  100% {
    transform: scale(1) ;
  }
}
/*@keyframes popup{
  0% {
    transform: scale(1) rotate3d(-1, 1, 0, 0deg);
  }
  50% {
    transform: scale(0.8) rotate3d(-1, 1, 0, -90deg);
  }
  100% {
    transform: scale(1) rotate3d(-1, 1, 0, 0deg);
  }
}/*
@keyframes popup {
  0%{
    transform: scale(1);
  }
  50%{
    transform: scale(1.4);
  }
  60%{
    transform: scale(1.1);
  }
  70%{
    transform: scale(1.2);
  }
  80%{
    transform: scale(1);
  }
  90%{
    transform: scale(1.1);
  }
  100%{
    transform: scale(1);
  }
} */
.popup .close-btn {
  cursor:pointer;
  position:absolute;
  right:20px;
  top:20px;
  width:30px;
  height:30px;
  background:#222;
  color:#fff;
  font-size:25px;
  font-weight:600;
  line-height:30px;
  text-align:center;
  border-radius:50%;
}
 /*
.popup.active .overlay {
  display:block;
}
 */
 .popup .content {
  transition:all 300ms ease-in-out;
  transform:translate(-50%,-50%) scale(1);
}
 
button {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  padding:15px;
  font-size:18px;
  border:2px solid #222;
  color:#222;
  text-transform:uppercase;
  font-weight:600;
  background:#fff;
}
.h{
  padding-top: 25px; padding-bottom: 25px; font-size: 25px;
    color: white;text-shadow: 0 6px rgba(0, 0, 0, 0.3);
}  
.p{
  font-size:15px;
  color: white;
   line-height: 1.6; 
   text-shadow: 0 3px rgba(0, 0, 0, 0.2);

}  	
.img{
  width:43vw; 
  height :75%;
  right:15%;
  top:25vh;
   margin-top:5px;
    position : absolute; 
    filter:drop-shadow(-.5rem .5rem 1.5rem black);
}
@media(max-width: 767px){
  .popup .close-btn{
    
    cursor: pointer;
    position: absolute;
    right: 5px;
    top: 5px;
    width: 25px;
    height: 25px;
    background: #222;
    color: #fff;
    font-size: 15px;
    font-weight: 200;
    line-height: 25px;
    text-align: center;
    border-radius: 50%;
  }
  .h{
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 22px;
    color: white;    line-height: 1.2;

    text-shadow: 0 4px rgb(0 0 0 / 30%);
  }
  
.p{
  font-size: 15px;
    color: white;
    line-height: 1.4;
    text-shadow: 0 3px rgb(0 0 0 / 20%);
}	  
.img{
    height: 55%;
    margin-top: 5px;
    position: absolute;
    right: -15vw;
    top: 32vh;
    WIDTH: 90vw;
    }  
.popup .content {
    height:75vh;
}
}
	          	

</style>
<body onload="myfunction()" oncontextmenu="return false" 
onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);">
   
<?php
  if (isset($errormsg)) {
    echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
    exit;
  }
?>
<div class="hcoin">
   <table class="clantable">
   <tr>
      <td rowspan="11"><br/><img src=" <?php echo $data["badgeUrls"]["medium"]; ?>" alt="<?php echo $data["name"]; ?>"/></td>
      <td><?php echo $data["name"]; ?></td><td style="text-shadow: 0 3px rgba(0, 0, 0, 0.3);"><?php echo $data["tag"]; ?>  <a href="whatsapp://send?text=<?php echo urlencode ('https://link.clashofclans.com/en?action=OpenPlayerProfile&tag='. substr($data['tag'],1)); ?>)" data-action="share/whatsapp/share"><i class="fa fa-share-alt" style="color: #48dbfb;
    font-size: 1.5em;
    font-weight: bold;" aria-hidden="true"></i> </a></td>
      <td rowspan="11"><?php echo $data["description"]; ?><br>
      <br>
      
      <?php 
          foreach ($label  as $row ) {
           ?>
            <img src=" <?php echo $row['iconUrls']['small']; ?>" alt="<?php echo $row['name']; ?>"<br><?php
          }
        ?>
      </td>
    </tr>
    <tr>
      <td>Total points</td><td><?php echo $data["clanPoints"]; ?></td>
    </tr>
    <tr>
      <td>Wars won</td><td><?php echo $data["warWins"]; ?></td>
    </tr>
    <tr>
      <td>War league</td><td><?php echo $data["warLeague"]["name"]; ?></td>
    </td>
    <!--<tr>
      <td>Wars drawn</td><td><?php echo $data["warTies"]; ?></td>
    </tr>
     -->
    <tr>
      <td>Members</td><td><?php echo $data["members"]; ?>/50</td>
    </tr>
    <tr>
      <td>Type</td><td><?php echo $data["type"]; ?></td>
    </tr>
    <tr>
      <td>Required trophies</td><td><?php echo $data["requiredTrophies"]; ?></td>
    </tr>
    <tr>
      <td>War frequency</td><td><?php echo $data["warFrequency"]; ?></td>
    </tr>
    <tr>
      <td>Clan location</td><td><?php echo $data["location"]["name"]; ?></td>
     <!-- <tr>

      <td>Labels</td>
      <td>
      <?php 
foreach ($label  as $row ) {
  

 ?>
 <img src=" <?php echo $row['iconUrls']['small']; ?>" alt="<?php echo $row['name']; ?>"<?php
}
?>
      </td>
    </tr>-->
    </tr>
  </table>
  <table class="memberstable" >
<?php
  foreach($members as $member) {

    $link2 = $member["tag"];?>
    <tr>
 
      <td style=" text-align: center;"><ul><span class="ater" >Position:</span><li>&nbsp;</li><li><?php echo $member["clanRank"];?></li></ul></td>
      <td style=" text-align: center;"><ul><span class="ater" >League:</span><li>&nbsp;</li><li><img src="<?php echo $member["league"]["iconUrls"]["tiny"]; ?>" alt="<?php echo $member["league"]["name"]; ?>"/></li></ul></td>
      <td style="color: #48dbfb; text-align: center; "><ul><span class="ater" style="color:#000;" >Exp Level:</span><li>&nbsp;</li><li style="justify-items:center;"><?php echo $member["expLevel"]; ?><span class="ater" ><img src="images/exp-star.png" style="width:5vw; height:20%;" alt="expStar"/></span></li></ul></td>
      <td style="color: #B9BBB6; text-align: center;"><ul><span style="color: black;"><?php echo $member["name"]; ?></span><li>&nbsp;</li><li><?php echo $member["role"]; ?></li></ul></td>

      <td style="color: #B9BBB6; text-align: center;"><ul><span style="color: black;">Donated:</span><li>&nbsp;</li><li><?php echo $member["donations"]; ?></li></ul></td>
      <td style="color: #B9BBB6; text-align: center;"><ul><span style="color: black;">Received:</span><li>&nbsp;</li><li><?php echo $member["donationsReceived"]; ?></li><ul></td>
      <td style="color: #B9BBB6; text-align: center;"><ul><span style="color: black;">Trophies:</span><li>&nbsp;</li><li><?php echo $member["trophies"]; ?></li></ul></td>
      <td><ul><span class="ater" >More info:</span><li>&nbsp;</li><li>
                 <?php 
                  $ef =  $member['tag']; 
                   $hr = "https://link.clashofclans.com/en?action=OpenPlayerProfile&tag=".urlencode($ef);
                  

                 ?>                           <a href="<?php echo $hr; ?>"><i class="fa fa-info-circle" style="color : #63c76a;" aria-hidden="true"   onmousedown="pop.play()" ></i></a>
          </li></ul></td>

   </tr>
<?php
  }

  
  ?>
  

  </table>



<img class="build" src="images/Bilder.png" alt=""/>


  <div class="couche1" onclick=window.location.href="http://flamechargers.atwebpages.com/index.html" id="green1"  onmousedown="pop.play()" >
    
  <div class="couche2"  id="green2">

      <div class="couche23"  id="green23">
  
          <div class="couche3"  id="green3">
      
              <div class="couche4"  id="green4">

                  <span class="battle"  id="battle_green"><a href="http://flamechargers.atwebpages.com/index.html" style="text-decoration: none; color: white;"   onmousedown="pop.play()" >Back</a></span>
                  
                  <div class="couche5"  id="green5">
                  
                  </div>
      
              </div>

          </div>

      </div>
  
  </div>
  </div>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="popup" id="pop" style="display:none;">
  <div class="overlay"></div>
  <div class="content">
    <div class="close-btn"  onmousedown="pop.play()" ><i class="fa fa-times" aria-hidden="true"></i></div>
    <h1 class="h" >Member's Details</h1>
    <p class="p" >We are still working on member's details part. While clicking on member it will popup a card which contain the details of that respective member. Keep calm and thanks for visiting...
</p>

<img src="app.png" class="img" alt="bilder"/>


  </div>
</div>
<script>
setTimeout(function(){
        $('#pop').css('display','block');
      }, 2500);
 $(".close-btn").click(function(){
     $('#pop').css('display','none');
  });

</script>
<script>
   function myFunction(x) {
  if (x.matches) { // If media query matches
    
  document.document.clantable.style.backgroundImage = "url('images/loon.jpeg')";
  } 
}

var x = window.matchMedia("(max-width: 767px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

</script>


</body>
</html>