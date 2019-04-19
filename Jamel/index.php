<?php

$pdo = new PDO('mysql:host=localhost;dbname=jamel', 'root', '');

$query = $pdo->prepare('SELECT ID, LIBELLE FROM foo');

try {
	$query->execute();
} catch (Exception $e) { /** Un genre de if else qui captures des erreurs. On peut ensuite faire un traitement particulier avec ces erreurs *
*/
	echo "Error :" + $e;
	die();
}

if (isset($_GET['idElement']))
{
	$query = $pdo->prepare('DELETE FROM foo WHERE foo.ID = :monId');

	$query->bindParam(":monId", $_GET['idElement']);

	try {		
		$query->execute();
		header("location: " . $_SERVER['PHP_SELF']);
	} catch ( $e) {
		
		echo "Error " . $e;
	}
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	while($data = $query->fetch())
	{
		?>


		<div>
			<h1><?= $data['LIBELLE'] ?></h1>
			<p><?= $data['ID'] ?></p>
			<a href="<?= $_SERVER['PHP_SELF'] ?>?idElement=<?= $data['ID'] ?>">Supprimer cet élément</a>
		</div>

		<?php
	}

	?>
</body>
</html>