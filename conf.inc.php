<?php

define("APP_URL", "http://localhost/projet-esgi/");
define("DS", DIRECTORY_SEPARATOR);
define("DATABASE", "blog");
define("USER", "root");
define("PWD", "root");
define("HOST", "localhost");
define("PORT", "3306");

$listOfErrors = [
	1=>"L'email n'est pas valide",
	2=>"Le mot de passe doit faire entre 8 et 16 caractères",
	3=>"Le mot de passe de confirmation ne correspond pas",
	4=>"Le genre n'existe pas",
	5=>"Le prénom doit faire au minimum 2 caractères",
	6=>"Le nom doit faire au minimum 2 caractères",
	7=>"Le pays n'existe pas",
	8=>"La date d'anniversaire n'est pas valide",
	9=>"Vous devez avoir entre 10 et 110 ans",
	10=>"Veuillez accepter les CGUs",
	11=>"Erreur upload server",
	12=>"Mauvaise extension pour l'avatar",
	13=>"L'avatar est trop lourd",
	14=>"Dossier d'upload contenant une erreur",
	15=>"Captcha incorrect",
];

$listOfCountries = [
		"fr"=>"France",
		"en"=>"Angleterre",
		"pl"=>"Pologne"
];
$defaultCountry = "pl";

$listOfGenders=[
			"mr" => "Mr",
			"mme" => "Mme",
			"autre" => "Autre"
];
$defaultGender = "mr";

$avatarExtensionAuthorized = ["png","jpg","jpeg","gif"];
$avatarMaxSize = 10000000;












