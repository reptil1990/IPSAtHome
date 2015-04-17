<?PHP

/*

  PHP IPS Script
  APP in Beta!

  Created by DJ Reptile on 01.04.15.
  Copyright (c) 2015 reptile. All rights reserved.


 BEISPIEL URL bei ankommen: https://meine-inet-ip/state.php?name=MaxMustermann&state=true&s=123456789
 BEISPIEL URL bei verlassen: https://meine-inet-ip/state.php?name=MaxMustermann&state=false&s=123456789

 Die echo bitte nicht verändern, da die APP diese zur auswertung benutzt!

 Das Script in das ROOT-Verzeichnis des IPS-Servers legen.
 
 
*/


// Hier einen Sicherheitscode vergeben, der als parameter mit übergeben wird!
// Alle daten werden via Push von der App an IPS Übermittelt
$secureCode = "123456789";



if(isset($_GET['s']) && $_GET['s'] == $secureCode) 
{


				// Hier den Namen der Variablem eintragen
  if($_GET['name'] == 'MaxMustermann') 
	{
	if ($_GET['state'] == 'true')
		{
			// BOOL in IPS und ID eintragen
  			  SetValue(00000, true);	

			//OPTIONAL: Push über die IPS APP
		#    WFC_PushNotification(26497 /*[WebFront]*/, 'Home', 'NAME @Home', '', 0);
		echo('arrived');
		}
		
	else
		{
			 SetValue(0000, false);
    		echo 'leaved';
		}
		
	}


				// 2. Person möglich

if($_GET['name'] == 'WIE HEIßt DIE 2te PERSON?') 

{

	if ($_GET['state'] == 'true')
		{
		
			// BOOL in IPS und ID eintragen
    		SetValue(00000, true);

			//OPTIONAL: Push über die IPS APP
		#    WFC_PushNotification(26497 /*[WebFront]*/, 'Home', 'Ich @Home', '', 0);
			echo('arrived');
		}
	else
		{
			SetValue(00000, false);
    		echo 'leaved';
		}

}
}

?>
