<?php

require './lib/autoload.php';

$smarty = new Template();

Rotas::get_Pagina();


echo Rotas::get_SiteRAIZ();

$smarty->display('index.tpl');
