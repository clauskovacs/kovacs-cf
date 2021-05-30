function contact() {
var xmlhttp;
if (window.XMLHttpRequest)
{
xmlhttp=new XMLHttpRequest();
}
else
{
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("Col_1").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","PHP/AJAX/contact.php",true); xmlhttp.send();
}