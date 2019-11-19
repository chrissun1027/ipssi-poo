<?php
namespace Ipssi\Evaluation;
require_once('vendor/autoload.php');
$climate = new \League\CLImate\CLImate;
use Ipssi\Evaluation\Exercice2\Nuage;
use Ipssi\Evaluation\Exercice2\Etoile;
use Ipssi\Evaluation\Exercice2\Text;
use Ipssi\Evaluation\Exercice2\Image;
use Ipssi\Evaluation\Exercice2\Bloc;
$document = new bloc(0,0,array(230,230,230));
$text = new text(250,1000,array(30,30,30));
$image = new image(50,100);
$etoile1 = new etoile(400,700,array(150,20,130));
$etoile2 = new etoile(600,700,array(150,20,130));
$nuage = new nuage(700,800,array(210,200,250));
use Ipssi\Evaluation\Useless;
foreach(element as $key) {
    $property = $this->getProperty();

}