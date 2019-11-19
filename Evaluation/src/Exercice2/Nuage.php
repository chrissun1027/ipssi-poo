<?php
namespace Ipssi\Evaluation\Exercice2;
use Ipssi\Evaluation\Exercice2\Forme;
class Nuage extends Forme
{
    public function __construct(int $x, int $y, array $color) {
        parent:: __construct($x, $y, $color);
        $this->type = 'nuage';
    }
}