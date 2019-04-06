// JavaScript Document
var xmlRequest = false;
var updateID = "";

function iniXMLHttpRequest() {
  try {
    xmlRequest = new XMLHttpRequest();
  } catch (caseMS1) {
    try {
      xmlRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (caseMS2) {
      try {
        xmlRequest = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (failed) {
        xmlRequest = false;
      }
    }
  }
}

function getFileContent(fileURL, dispID) {
  if (!xmlRequest) iniXMLHttpRequest();
  if (!xmlRequest) {
    alert("Failed to initialize XMLHttpRequest.\nYou may need to upgrade your browser to a newer version.");
    return (false);
  } else {
    updateID = dispID;
    xmlRequest.open("GET", fileURL, false);
    xmlRequest.onreadystatechange = updatePage;
    xmlRequest.send(null);
  }
}

function updatePage() {
  if (xmlRequest.readyState == 4) {
    if (xmlRequest.status == 200) {
      document.getElementById(updateID).innerHTML = xmlRequest.responseText;
    }
  }
}

/*funciones para el menu principal*/

function loadcontents(menuopt) {
  var file = menuopt + ".php";
  $.ajax({
    url: file,
    success: function(data) {
      $("#izkierdo").html(data);
    }
  });
}

function loadSlider(slider) {
  var sliderActual = $("#slidActual").val();
  if ((sliderActual != slider) || (sliderActual == "" )){
    $("#rotator").html('<iframe src="banner/'+slider+'/slider.php" width="1020" height="310" scrolling="no" marginwidth="0px" marginheight="0px" frameborder="0" ></iframe>');
    $("#slidActual").val(slider);
  }
}

/*funciones para abrir y cerrar destinations y specialty */

function openDestSpec(MenOpc){
  document.getElementById(MenOpc).style.display = "block";
}

function closeDestSpec(MenOpc) {
  document.getElementById(MenOpc).style.display = "none";
}

/* inicio  funciones de los iconos rojos */

function func_destina() { document.getElementById('padre1').style.background = "#c0ba81 url('images/iconos_topmenu/destinations_red.png') no-repeat 4px center"; }
function func_stravel() { document.getElementById('padre2').style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center"; }
function func_tguide() { document.getElementById('padre3').style.background = "#c0ba81 url('images/iconos_topmenu/tguide_red.png') no-repeat 4px center"; }
function func_aboutcr() { document.getElementById('padre4').style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center"; }

function func_hijo1() { document.getElementById('hijo1').style.background = "#c0ba81 url('images/iconos_topmenu/tguide_red.png') no-repeat 4px center"; }
function func_hijo2() { document.getElementById('hijo2').style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center"; }
function func_hijo3() { document.getElementById('hijo3').style.background = "#c0ba81 url('images/iconos_topmenu/tguide_red.png') no-repeat 4px center"; }
function func_hijo4() { document.getElementById('hijo4').style.background = "#c0ba81 url('images/iconos_topmenu/tguide_red.png') no-repeat 4px center"; }
function func_hijo5() { document.getElementById('hijo5').style.background = "#c0ba81 url('images/iconos_topmenu/about_red.png') no-repeat 4px center"; }

function func_padre_out(padre) { document.getElementById(padre).style.background = ""; }
function func_hijo_out(hijo) { document.getElementById(hijo).style.background = ""; }

/* fin funciones de los iconos rojos */


function destinalert() {
  $.alert({
    title: 'Information',
    type: 'green',
    columnClass: 'small',
    content: 'The Full Information about Destinations, Regions & Sub-Regions, is in the Main Menu, Please Take a Look.',
    useBootstrap: false,
  });
}

function spectra() {
  $.alert({
    title: 'Information',
    type: 'green',
    columnClass: 'small',
    content: 'The Full Information about Specialty Travel, Activities & Sub-Activities is in the Main Menu, Please Take a Look.',
    useBootstrap: false,
  });
}

/****************************************************************************/

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function showModal(nam_modal) {
  document.getElementById(nam_modal).style.display = "block";
}

function closeModal(nam_modal) {
  document.getElementById(nam_modal).style.display = "none";
}

function forgotPassword() {
  closeModal('login');

  $.confirm({
    title: 'Password Recovery',
    type: 'green',
    columnClass: 'small',
    useBootstrap: false,
    content: '' +
    '<form action="" class="formName">' +
    '<div class="form-group">' +
    '<label>Please enter your Email Address</label><br/><br/>' +
    '<input type="email" placeholder="email" class="emailRec" style="width: 50%; height: 30px; padding: 5px;" required />' +
    '</div>' +
    '</form>',
    buttons: {
      formSubmit: {
        text: 'Recover',
        btnClass: 'btn-green',
        action: function () {
          var emailRec = this.$content.find('.emailRec').val();
          if(!emailRec){
            $.alert({
              title: 'Error',
              type: 'red',
              columnClass: 'small',
              content: 'Please digit your email',
              useBootstrap: false,
            });
            return false;
          } else if( !validateEmail(emailRec)) {
            $.alert({
              title: 'Error',
              type: 'red',
              columnClass: 'small',
              content: 'Invalid email',
              useBootstrap: false,
            });
          } else {
            var respForgotJS = "";
            $.ajax({
              type: "POST",
              url: "forgotpass.php",
              data:{email:emailRec},
              success: function(respforgot) {
                if (respforgot.search("successForgot") != -1) { respForgotJS = 'Your new password has been sent to <b>' + emailRec + '</b>'; }
                else if (respforgot.search("ErrorUpdatingForgot") != -1) { respForgotJS = 'System Error, please contact system admin';}
                else if (respforgot.search("notRegisteredForgot") != -1) { respForgotJS = 'This email is not registered.';}

                $.alert({
                  title: 'Information',
                  type: 'green',
                  columnClass: 'small',
                  content: respForgotJS,
                  useBootstrap: false,
                });
              }
            });
          }
        }
      },
      cancel: function () {
        //close
      },
    },
    onContentReady: function () {
      // bind to events
      var jc = this;
      this.$content.find('form').on('submit', function (e) {
        // if the user submits the form by pressing enter in the field.
        e.preventDefault();
        jc.$$formSubmit.trigger('click'); // reference the button and click it
      });
    }
  });

}

function regLogin(){
  closeModal('login');
  showModal('register');
}
