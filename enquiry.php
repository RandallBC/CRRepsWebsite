<?php
switch($_POST["depa"])
{
	case "tp":
	$to = "sales@costaricareps.com"; //sales@costaricareps.com
	break;
	case "fi":
	$to = "finance@costaricareps.com";  //finance@costaricareps.com
	break;
	case "op":
	$to = "operations@costaricareps.com"; //operations@costaricareps.com
	break;
	case "mg":
	$to = "fabio.salas@costaricareps.com, diana.vargas@costaricareps.com"; //fabio.salas@costaricareps.com CC diana.vargas@costaricareps.com
	break;
	default:
	$to = "diana.vargas@costaricareps.com, system@costaricareps.com"; //diana.vargas@costaricareps.com, CC system@costaricareps.com
}

$subject = "Website Enquiry From " . $_POST["nombre"] . " " . $_POST["apellido"];
$from = "CostaRicaReps.Com";
$headers = "From:" . $from;
$line1 = "First Name: " . $_POST["nombre"] . "\n";
$line2 = "Last Name: " . $_POST["apellido"] . "\n";
$line3 = "Telephone: " . $_POST["telefono"] . "\n";
$line4 = "e-mail: " . $_POST["email"] . "\n";
$line5 = "Country: " . $_POST["pais"] . "\n";
$line6 = "State: " . $_POST["estado"] . "\n\n";
$line7 = "Comment: " . $_POST["comentario"] . "\n\n";
$msg = $line1 . $line2 . $line3 . $line4 . $line5 . $line6 . $line7;
$respuesta = (mail($to, $subject, $msg, $headers)) ? "sent" : "not";
echo $respuesta;
?>
