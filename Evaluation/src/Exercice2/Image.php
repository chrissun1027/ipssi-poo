<?php
namespace Ipssi\Evaluation\Exercice2;
use Ipssi\Evaluation\Exercice2\Element;
class Image extends element
{
    public function __construct(int $x, int $y) {
        parent:: __construct($x, $y);
        $this->type = 'image';
    }
}