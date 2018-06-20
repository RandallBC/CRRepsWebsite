<?php

require_once 'plantilla.php';

	if(isset($_POST["firstName"]))
	{
       switch($_POST["dep"])
		{
			case "tp":
				$to = "sales@costaricareps.com"; /*sales@costaricareps.com*/
				break;
			case "fi":
				$to = "finance@costaricareps.com";  /*finance@costaricareps.com*/
				break;
			case "op":
				$to = "operations@costaricareps.com"; /*operations@costaricareps.com*/
				break;
			case "mg":
				$to = "fabio.salas@costaricareps.com, diana.vargas@costaricareps.com"; /*fabio.salas@costaricareps.com CC diana.vargas@costaricareps.com*/
				break;
			default:
				$to = "diana.vargas@costaricareps.com, system@costaricareps.com"; /*diana.vargas@costaricareps.com, CC system@costaricareps.com*/

		}
        /*$correo = $_POST["emailAdr"];*/
		$sub = "website enquiry from " . $_POST["firstName"] . " " . $_POST["lastName"];
		$line1 = "First Name: " . $_POST["firstName"] . "\n";
		$line2 = "Last Name: " . $_POST["lastName"] . "\n";
		$line3 = "Telephone: " . $_POST["tel"] . "\n";
		$line4 = "e-mail: " . $_POST["emailAdr"] . "\n";
		$line5 = "Country: " . $_POST["country"] . "\n";
		$line6 = "State: " . $_POST["state"] . "\n\n";
		$line7 = "Comment: " . $_POST["comment"] . "\n\n";
		$msg = $line1 . $line2 . $line3 . $line4 . $line5 . $line6 . $line7;


        if (mail($to, $sub, $msg))
        {
            $error = 1;
            echo "<script language='javascript'>";
            echo "alert('Enquiry Sent, Thank you.');";
            /*echo "document.location.href='index.php';";*/
            echo "</script>";
        }
        else {
            $error = 0;
            echo "<script language='javascript'>";
            echo "alert('Sorry, Enquiry Not Sent.');";
            /*echo "document.location.href='index.php';";*/
            echo "</script>";
        }          /*mail($to, $sub, $msg, "From: " . $_POST["emailAdr"] . "\r\n" . "CC: randall_bc@yahoo.com");*/
	}


exit();
?>
