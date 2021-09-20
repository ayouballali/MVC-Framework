<?php // contient tout les requires

// load config
require_once 'config/config.php';


// fonction qui fait l'appel a tout les class neccessaire
spl_autoload_register(function ($classname){require_once 'libraries/'.$classname.'.php';});
?> 