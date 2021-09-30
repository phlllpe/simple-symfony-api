<?php

namespace App\Entity;

class Cidade
{
    private int $id;
    private ?Estado $estado;
    private string $nome;

    public function __construct()
    {
        $this->estado = new Estado();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEstado(): Estado
    {
        return $this->estado;
    }

    public function setEstado(Estado $estado): void
    {
        $this->estado = $estado;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

}