// JavaScript Document
var xmlRequest = false;
var updateID = "";

function iniXMLHttpRequest()
{
 try
 {
  xmlRequest = new XMLHttpRequest();
 }
 catch(caseMS1)
 {
  try
  {
   xmlRequest = new ActiveXObject("Msxml2.XMLHTTP");
  }
  catch(caseMS2)
  {
   try
   {
    xmlRequest = new ActiveXObject("Microsoft.XMLHTTP");
   }
   catch(failed)
   {
    xmlRequest = false;
   }
  }
 }
}

function getFileContent(fileURL, dispID)
{
 if(!xmlRequest) iniXMLHttpRequest();
 if(!xmlRequest)
 {
  alert("Failed to initialize XMLHttpRequest.\nYou may need to upgrade your browser to a newer version.");
  return(false);
 }
 else
 {
  updateID = dispID;
  xmlRequest.open("GET", fileURL, false);
  xmlRequest.onreadystatechange = updatePage;
  xmlRequest.send(null);
 }
}

function updatePage()
{
 if(xmlRequest.readyState == 4)
 {
  if(xmlRequest.status == 200)
  {
   document.getElementById(updateID).innerHTML = xmlRequest.responseText;
  }
 }
}

/*funciones para el menu principal*/

function loadcontents(menuopt) {
  var file = menuopt + ".php";
  $.ajax({
    url: file,
    success: function(data){
      $("#izkierdo").html(data);
    }
  });
}

/*----------------------------------------------------------------------------------------------------------------------------------------------------*/
function dale() {
  /*alert("Don't you forget to visit the full information for more details.");*/
  $('#destina').slideUp("fast");
  $('#destina').slideDown("fast");
}

function dale2() {
  /*alert("Don't you forget to visit the full information for more details.");*/
  $('#spetravel').slideUp("fast");
  $('#spetravel').slideDown("fast");
}

/* inicio  funciones de los iconos rojos */

function func_destina() {
  var elemento = document.getElementById('padre1');
  elemento.style.background = "#c0ba81 url('images/iconos_topmenu/destinations_red.png') no-repeat 4px center";
}

function func_destina_out() {
  var elemento = document.getElementById('padre1');
  elemento.style.background = "";
}


/*-----------------*/

function func_stravel() {
  var elemento = document.getElementById('padre2');
  elemento.style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center";
}

function func_stravel_out() {
  var elemento = document.getElementById('padre2');
  elemento.style.background = "";
}

/*------------------*/

function func_tguide() {
  var elemento = document.getElementById('padre3');
  elemento.style.background = "#c0ba81 url('images/iconos_topmenu/tguide_red.png') no-repeat 4px center";
}

function func_tguide_out() {
  var elemento = document.getElementById('padre3');
  elemento.style.background = "";
}

/*------------------*/

function func_aboutcr() {
  var elemento = document.getElementById('padre4');
  elemento.style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center";
}

function func_aboutcr_out() {
  var elemento = document.getElementById('padre4');
  elemento.style.background = "";
}

/*______________________________________________________Hijos_____________________________________________________*/

function func_hijo1() {
  var elemento = document.getElementById('hijo1');
  elemento.style.background = "#c0ba81 url('images/iconos_topmenu/tguide_red.png') no-repeat 4px center";
}

function func_hijo1_out() {
  var elemento = document.getElementById('hijo1');
  elemento.style.background = "";
}

/*------------------*/

function func_hijo2() {
  var elemento = document.getElementById('hijo2');
  elemento.style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center";
}

function func_hijo2_out() {
  var elemento = document.getElementById('hijo2');
  elemento.style.background = "";
}

/*----------------*/

function func_hijo3() {
  var elemento = document.getElementById('hijo3');
  elemento.style.background = "#c0ba81 url('images/iconos_topmenu/tguide_red.png') no-repeat 4px center";
}

function func_hijo3_out() {
  var elemento = document.getElementById('hijo3');
  elemento.style.background = "";
}

/*----------------*/

function func_hijo4() {
  var elemento = document.getElementById('hijo4');
  elemento.style.background = "#c0ba81 url('images/iconos_topmenu/tguide_red.png') no-repeat 4px center";
}

function func_hijo4_out() {
  var elemento = document.getElementById('hijo4');
  elemento.style.background = "";
}

/*----------------*/

function func_hijo5() {
  var elemento = document.getElementById('hijo5');
  elemento.style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center";
}

function func_hijo5_out() {
  var elemento = document.getElementById('hijo5');
  elemento.style.background = "";
}

/*___________________________________________________Fin Hijos_________________________________________________________*/

/* fin funciones de los iconos rojos */
