<html>
<body>

<p style="font-size:25px; margin:3px;padding-left:20px;">Subscription</p>
<div style="margin:2%;padding-top:10px;height:200px;width:96%;background-color:#00000010;">


<div style="margin-left:2%;height:50px;width:55%;background-color:#ffffffff;border-radius:5px;float:left;margin-right:10px;">

<?php


if($_SESSION["accounttype"] === "0"){
    echo "<p style=\"font-size:25px; margin:3px;padding-top:6px;padding-left:20px;float:left;\">Basic Memebership</p>";
}else if($_SESSION["accountType"] === "1"){
    echo "<p style=\"font-size:25px; margin:3px;padding-top:6px;padding-left:20px;float:left;\">Plus Memebership</p>";
}else if($_SESSION["accountType"] === "2"){
    echo "<p style=\"font-size:25px; margin:3px;padding-top:6px;padding-left:20px;float:left;\">Pro Memebership</p>";
}else{
    echo "<p style=\"font-size:25px; margin:3px;padding-top:6px;padding-left:20px;float:left;\">No Membership</p>";
}


?>

</div>

<a href="javascript:void(0);" id="accountPlusUpgrade-trigger" class="button medium icon fa-arrow-circle-up" style="height:50px;padding-left:10px;margin-right:10px;font-size:15px;">PLUS UPGRADE!</a>

<a href="javascript:void(0);" id="accountProUpgrade-trigger" class="button medium icon fa-arrow-circle-up" style="height:50px;padding-left:10px;margin-right:10px;font-size:15px;">GO PRO!</a>

</div>

<p style="font-size:25px; margin:3px;padding-left:20px;">Payment Methods</p>
<div style="margin:2%;height:100px;width:96%;background-color:#00000010;">


</div>

<p style="font-size:25px; margin:3px;padding-left:20px;">Advanced</p>
<div style="margin:2%;height:100px;width:96%;background-color:#00000010;">


</div>


</body>
</html>