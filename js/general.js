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
