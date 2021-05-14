<?php
    $token = "3FppAaNV33wNPsAcehAS";
    $url ='https://git.esi-bru.be/api/v4/projects?private_token=' . $token;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
//var_dump($curl_response);
curl_close($curl);
$decoded = json_decode($curl_response);



foreach ($decoded as $project) : ?>
    <a href="detail.php?id=<?= $project->id; ?>"><?= $project->name; ?></a><br>
<?php endforeach; ?>
