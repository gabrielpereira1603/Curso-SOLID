<?php

namespace Alura\Solid\Model\Interfaces;

interface Pontuavel
{
    public function recuperarPontuacao(): int;
    public function assistir(): void;
}