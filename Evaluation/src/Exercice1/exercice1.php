<?php

namespace Ipssi\Evaluation;

use Ipssi\Evaluation\Exercice1\Diviseur;
use Ipssi\Evaluation\Exercice1\Exception\ExceptionEmpty;
use Ipssi\Evaluation\Exercice1\Exception\ExceptionOutArray;
use Ipssi\Evaluation\Exercice1\Exception\ExceptionDivZero;
use Ipssi\Evaluation\Exercice1\Exception\ExceptionNoInt;

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;
$climate = new \League\CLImate\CLImate;

class Diviseur {
    public function division(int $index, int $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];
        while ($e !== 0) {
            $e = 0;
            return $valeurs[$index] / $diviseur;
        }
    }
    $input = $climate->input("Entrez l’indice de l’entier à diviser (entre 1 et 10) : ");
$index = $input->prompt();
$input = $climate->input("Entrez le diviseur : ");
$diviseur = $input->prompt();
try {
if ((1 > $index || 10 < $index) && is_numeric($index)) {
throw new ExceptionOutArray('Veuillez renseigner un indice entier compris entre 0 et 9', 1);
}
        if (is_numeric($diviseur) && $diviseur == 0) {
            throw new ExceptionDivZero('Le diviseur doit être différent de 0', 2);
        }
        if (empty($index) || empty($diviseur)) {
            throw new ExceptionEmpty('Veuillez renseigner tous les champs', 3);
        }
        if (!is_numeric($diviseur) || !is_numeric($index) || $index - intval($index) != 0) {
            throw new ExceptionNoInt('Les valeurs renseignées doivent être numériques et entière', 4);
        }

        $climate->output("Le résultat de la division est : " . (new diviseur())->division($index-1, $diviseur));
    } catch(ExceptionEmpty $e) {
        $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
        $index = $input->prompt();
        echo 'Erreur ' . $e->getCode() . ', ' . $e->getMessage() . PHP_EOL . PHP_EOL;
        $input = $climate->input("Entrez le diviseur : ");
        $diviseur = $input->prompt();
    } catch(ExceptionNoInt $e) {
        $climate->output("Le résultat de la division est : " . (new Diviseur())->division($index, $diviseur));
        echo 'Erreur ' . $e->getCode() . ', ' . $e->getMessage() . PHP_EOL . PHP_EOL;
    } catch(ExceptionOutArray $e) {
        echo 'Erreur ' . $e->getCode() . ', ' . $e->getMessage() . PHP_EOL . PHP_EOL;
    } catch(ExceptionDivZero $e) {
        echo 'Erreur ' . $e->getCode() . ', ' . $e->getMessage() . PHP_EOL . PHP_EOL;
    } catch(\Throwable $e) {
        echo 'Une erreur inconnue est survenue';
    }
}