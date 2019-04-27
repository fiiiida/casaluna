<?php


/*include "service_client.php";

$cli = new client();
$ser = new service_client();
$cli->setId(2);
$cli->setNom("slimen");
$cli->setPrenom("ramzi");
$cli->setAge(24);
$cli->setSexe("Homme");
$cli->setAdresse("mourouj");
$cli->setEmail("slimen.ramzi@esprit.tn");
$cli->setFidelite("oui");
$cli->setMdp("1234");
//$ser->ajouter($cli);
$ser->rechercher(5);
//$ser->afficher();*/


include "service_carteF.php";

$car = new carte();
$ser = new service_carteF();
$car->setPts(15);
$car->setId(10);
$ser->ajouter($car);
$ser->afficher();


?>