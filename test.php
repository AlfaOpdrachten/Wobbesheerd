<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$test= "";
if(isset($_POST['versturen']))
{
    $to = "reinderh@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['naam'];

    $subject = "Vraag van het contactformulier";
    $subject2 = "Kopie van uw vraag bij het Witte Paard";
    $message = $name . " schreef het volgende:" . "\n\n" . $_POST['bericht'];
    $message2 = "Hier is een kopie van uw vraag " . $name . "\n\n" . $_POST['bericht'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $test = "Mail verstuurd. Bedankt " . $name . ", we zullen zo spoedig mogelijk contact met u opnemen.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}

?>

<form method="post" action="">
    <ul>
        <li>Je voornaam *</li>
        <li><input type="text" name="naam" /></li>
        <li>Je e-mail adres *</li>
        <li><input type="text" name="email" /></li>
        <li>Je berichtje *</li>
        <li><textarea cols="50" rows="12" name="bericht"></textarea></li>
        <input type="submit" name="versturen" value="Verstuur bericht" /></li>
    </ul>
    <p>Alle velden gemarkeerd met een * zijn verplicht.</p>
</form>
<?php
if($test){
    echo $test;
}
?>
</body>
</html>