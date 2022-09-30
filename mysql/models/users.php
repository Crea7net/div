<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 -2022.
 */

include_once 'models/cnx.php';

$sql = 'select * from users order by id';

try {
	$req = $connection->prepare($sql);
	$req->execute();
} catch (Exception $e) {
	echo 'Erreur : ' . $e->getMessage() . '<br />';
}

$users = $req->fetchAll(PDO::FETCH_ASSOC);

// aff($users);