<?php

require ('nuagemot-floptwo.class.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="en">

	<head>
		<meta http-equiv="Content-Language" content="fr" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Nuage de mots (ou tag cloud) - floptwo</title>
	</head>

	<body>
		<div style="margin : auto ; width : 800px ; text-align : center">
<?php
// On d�clare la classe classe_nuagemot
$classe_nuagemot = new classe_nuagemot();

// Ici tu saisi toutes les donn�es que tu veux :
// s'il s'agit d'une liste de visites par membres
// $classe_nuagemot -> element_ajout (nom du membres, nombre de visites)
$classe_nuagemot -> element_ajout ('ju', 50);
$classe_nuagemot -> element_ajout ('je', 100);
$classe_nuagemot -> element_ajout ('tu', 4);
$classe_nuagemot -> element_ajout ('il', 50);
$classe_nuagemot -> element_ajout ('nous', 35);
$classe_nuagemot -> element_ajout ('vous', 20);
$classe_nuagemot -> element_ajout ('ils', 2);
// (Il faut faire attention a ce que deux elements ne portes pas le meme nom
// Sinon c'est la valeur du dernier entr� qui sera prise en compte.)

// On execute les calculs
$element_liste_result = $classe_nuagemot -> execute ();

// On parcours la liste de r�sultat des don�es entr�es
foreach ($element_liste_result as $element_nom => $element_result)
{
	//	$element_nom : Nom de la donn�e 
	// $element_liste_result[$element_nom][0] : Score
	// $element_liste_result[$element_nom][1] : Taille de la police
	echo '<span style="font-size:' , $element_liste_result[$element_nom][1] , 'pt;">';
	echo $element_nom , ', visites : ' ,  $element_liste_result[$element_nom][0] , ' (' , $element_liste_result[$element_nom][1] , 'pt)';
	echo '</span>';
	echo '<br/>';
}

?>
		</div>
	</body>

</html>