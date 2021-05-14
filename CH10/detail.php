<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail projet</title>
</head>

<body>
    <?php
    $id = $_REQUEST['id'];
    $token = "3FppAaNV33wNPsAcehAS";
    $url = "https://git.esi-bru.be/api/v4/projects/$id/?private_token=$token" ;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $curl_response = curl_exec($curl);
    curl_close($curl);
    $decoded = json_decode($curl_response);

    ?>

<h1><?= $decoded->name ?></h1>
<ul>
    <li>
        Création : <?= $decoded->created_at ?>
    </li>
    <li>
        URL HTTP : <?= $decoded->http_url_to_repo ?>
    </li>
    <li>
        URL SSH : <?= $decoded->ssh_url_to_repo ?>
    </li>
</ul>

</body>

</html>