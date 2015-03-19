$("#button1,#button2,#button3,#button4").button();
function ajaxFunction()
 {
 var xmlHttp; 
 try
    {
   // Firefox, Opera 8.0+, Safari
    xmlHttp=new XMLHttpRequest();
    }
 catch (e)
    {
  // Internet Explorer
   try
      {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
      }
   catch (e)
      {
      try
         {
         xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
         }
      catch (e)
         {
         alert("您的浏览器不支持AJAX！");
         return false;
         }
      }
    }	
    xmlHttp.onreadystatechange=function()
      {
      if(xmlHttp.readyState==4)
        {
         document.getElementById("display").innerHTML=xmlHttp.responseText;
         $( "#selectmenu" ).selectmenu();
        }
      }
    xmlHttp.open("GET","getInfo.php",true);
    xmlHttp.send(null);	
    
 }