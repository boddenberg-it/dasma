<?php

// URL to find main page of this web application (without ending slash)
$URL = 'https://datenschutz.boddenberg.it';

// db
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

//mail related texts
$from = "datenschutz@boddenberg.it";
$reply_to = "info@boddenberg.it";

$betreff_registration = "Registration confirmed, please continue the process";
$betreff_acceptance = "ullu";
$betreff_reminder = "ullu";

$msg_hash_invalid = <<<EOT

ERROR: somebody is tampering with the hash...
EOT;

// messages for registration mail has been sent page //
//
// top text shown for succes and failure (mail address)
$mail_send_header = <<<EOT
Vielen Dank $mail0.

Thanks $mail0.
EOT;

$msg_answer_saved_successfully = <<<EOT
Your answer has been saved! We will take actions accordingly.
EOT;

$msg_answer_saved_failed = <<<EOT
Something went wrong. Please contact it-support@membrapure.de by sending your registration links";
EOT;

// mail was valid
$mail_send_successfully = <<<EOT
Erfolgreich gesendet. Bitte schauen Sie in Ihrem E-Mail Postfach f&uuml;r die n&auml;chsten Schritte.

Successfully submitted. Please check your mailbox for further instructions.
EOT;

// mail was valid
$mail_send_failed = <<<EOT
Fehler: E-Mail ist ung&uuml;ltig! Bitter versuchen Sie es erneut.

Error: mail is not valid! Please go back and retype your mail address.
EOT;

// messages for answer links evaluation page

$msg_registration_header = <<<EOT
<h2>Vielen Dank f&uuml;r Ihre aktualisierte Einwilligung</h2>
<p>
Wir haben Ihre aktualisierte Einwilligung in unserem System registriert und
EOT;

$msg_answer_saved_successfully = <<<EOT
Sie sind nun berechtigt, personalisierte Informationen von membraPure &uml;ber Neuigkeiten, Tools, Produkte, Anwendungen, Veranstaltungen und Aktionen zu erhalten.

Beachten Sie, dass Sie Ihre Einwilligung jederzeit widerrufen k&ouml;nnen. Hierzu reicht ein Klick auf den bereits erhaltenen Link. Alternativ k&ouml;nnen Sie das Registrationsportal einfach erneut benutzen.
EOT;

$msg_answer_saved_failed = <<<EOT
Wir werden Ihre Kontaktdaten aus unserem System entfernen. Sie können sich jederzeit <a href="https://datenschutz.membrapure.de/>erneut registrieren</a>.
EOT;

$msg_registration_footer = <<<EOT
<br><br>
Weitere Informationen zu Ihren personenbezogenen Daten sowie zu Ihren Rechten finden Sie in unserer <a href="https://membrapure.de/datenschutz/">Datenschutzerkl&auml;rung</a>.
h<br><br>
Mit besten Gr&uuml;&szlig;en<br>
membraPure GmbH
</p>
<br>
<h2>Thank you for your updated consent</h2>
<p>
We have registered your updated consent to our system and you are now entitled to receive personalized information from membraPure about news, tools, products, applications, events and promotions.

Please note that you can revoke your consent at any time. Just click on the already received link. Alternatively, you can simply use the registration portal again.

Further information about your personal data and your rights can be found in our <a href="https://membrapure.de/en/privacy/">privacy policy</a>.

Best Regards
membraPure GmbH
</p>
EOT;

// registration email text
$msg_registration = <<<EOT
# english version below

Sehr geehrter Geschäftspartner,

diese E-Mail erhalten Sie, weil uns Ihre Rechte als Kunde am Herzen liegen. Mit Blick auf die Zukunft ist es uns wichtig, dass Sie nicht nur den bestmöglichen Kundenservice erhalten, sondern auch Ihre Privatsphäre geschützt bleibt.

Am 25. Mai 2018 wird EU-weit die Datenschutz-Grundverordnung („DSGVO“) in Kraft treten. Um sicherzustellen, dass wir DSGVO-konform sind, benötigen wir Ihre aktualisierte Einwilligung.

Wenn Sie zukünftig über Neuheiten und Aktuelles von Grundfos informiert werden möchten, müssen Sie dies mit einem Klick auf den untenstehenden Link bestätigen. Mehr Informationen über die Einwilligung, die Sie erteilen, finden Sie weiter unten.

<a href="$URL$link_registration_yes">Ich bin damit einverstanden, Informationen über Neuheiten und Aktuelles zu erhalten.<a>

Ja, ich möchte personalisierte Informationen über Neuigkeiten, Tools, Produkte, Anwendungen, Veranstaltungen und Werbeaktionen von Grundfos Holding A/S, Dänemark, und Grundfos GmbH, Schlüterstrasse 33, DE- 40699 Erkrath  (zusammen „Grundfos“) erhalten, und ich bin damit einverstanden, dass ich per E-Mail, SMS, Telefon, Push-Mitteilungen oder per Post für solche Zwecke kontaktiert werde. Zur Bereitstellung von personalisierten Informationen analysiert Grundfos mein Verhalten und erstellt ein Profil, das auf der Nutzung der verschiedenen Grundfos-Websites, -Anwendungen oder -Tools basiert. Ich willige in die Verarbeitung meiner personenbezogenen Daten ein, zu denen mein Vor- und Nachname, meine E-Mail-Adresse, meine Telefonnummer, mein Land, mein Unternehmen, die damit verbundenen Unternehmensinformationen, mein Interessengebiet und meine berufliche Tätigkeit sowie die Erstellung und Nutzung meines Profils für solche Zwecke gehören können.

Sie können Ihre Einwilligung jederzeit widerrufen. Der Widerruf hat keinen Einfluss auf die Rechtmäßigkeit der Verarbeitung vor dem Widerruf der Einwilligung. Sie haben ferner das Recht, einer Nutzung Ihrer personenbezogenen Daten für Direktmarketing einschließlich der Erstellung von Profilen zu widersprechen. Weitere Informationen zu Ihren personenbezogenen Daten sowie zu Ihren Rechten finden Sie in unserer Datenschutzerklärung.

Mit Ihrer Einwilligung erhalten Sie personalisierte Informationen über:

    Neuheiten und Aktuelles zu Produkten und Anwendungen
    Einladungen für Webinare und Veranstaltungen
    Anleitungen und Whitepapers
    Tools und allgemeine Werbeaktionen

Wenn Sie damit nicht einverstanden sind, klicken Sie bitte <a href="$URL$link_registration_no">hier</a>.

Wir freuen uns, von Ihnen zu hören.

Mit freundlichen Grüßen
membraPure GmbH


ENGLISH VERSION

Hello $mail,

Please tell us whether you accept.....

Accept:

$URL$link_registration_yes

Decline:

$URL$link_registration_no


Best Regards,
   boddenberg.it
EOT;


?>
