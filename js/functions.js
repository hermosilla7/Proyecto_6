function myFunction(){

var n=document.getElementById('bus').value;

if(n==''){

 document.getElementById("myDiv").innerHTML="";
 document.getElementById("myDiv").style.border="0px";

 document.getElementById("pers").innerHTML="";

 return;
}

loadDoc("q="+n,"ajax_busq.php",function(){

  if (xmlhttp.readyState==4 && xmlhttp.status==200){

    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    document.getElementById("myDiv").style.border="1px solid #A5ACB2";

    }else{ document.getElementById("myDiv").innerHTML='<img src="img/load.gif" width="50" height="50" />'; }

  });
}

//-------------------------------

function myFunction2(cod){

document.getElementById("myDiv").innerHTML="";
document.getElementById("myDiv").style.border="0px";

loadDoc("vcod="+cod,"ajax_result.php",function(){

  if (xmlhttp.readyState==4 && xmlhttp.status==200){

    document.getElementById("pers").innerHTML=xmlhttp.responseText;
    
    $("#myImg").click(function() {
    	$(this).removeClass("small").addClass("big");
    }).mouseleave(function() {
    	$(this).removeClass("big").addClass("small");
    });
    
    }else{ document.getElementById("pers").innerHTML='<img src="img/load.gif" width="50" height="50" />'; }

  });
}