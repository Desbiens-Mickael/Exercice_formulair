<?php
$errors = [
    ["nothing" => "Veuillez remplir tous les champs !"],
    ["email" => "Veuillez entrer une adresse valide !"],
];

foreach ($_POST as $key => $value) {
    if (!empty($value) && isset($value)) {
        if (filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
            $data = trim($value);
            $message = true;
        } else {
            $message = false;
            $messageError = $errors[1]["email"];
            break;
        }  
    } else {
        $message = false;
        $messageError = $errors[0]["nothing"];
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($message) { ?>
        <p>Merci <?= htmlentities($_POST["user_prénom"]) . " " . htmlentities($_POST["user_name"]) ?> de nous avoir contacté à propos de “<?= htmlentities($_POST["user_thém"]) ?>”
        <div class="br"></div>

        Un de nos conseiller vous contactera soit à l’adresse <?= htmlentities($_POST["user_email"]) ?> <br><br>

        ou par téléphone au <?= htmlentities($_POST["user_tel"]) ?> dans les plus brefs délais pour traiter votre demande :

        <?= htmlentities($_POST["user_message"]) ?></p>
    <?php } else {
        echo $messageError;
    } ?>
</body>

</html>