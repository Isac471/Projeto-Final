<?php

class Futebol
{
    private $id;
    private $nome_time;
    private $fundacao;
    private $nome_jogador;
    private $titulos_liga;
    private $titulos_continentais;
    private $maior_jogador;
    private $maior_titulo;


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNomeTime()
    {
        return $this->nome_time;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNomeTime($nome_time)
    {
        $this->nome_time = $nome_time;

        return $this;
    }

    public function getFundacao()
    {
        return $this->fundacao;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setFundacao($fundacao)
    {
        $this->fundacao = $fundacao;

        return $this;
    }


    public function getNomeJogador()
    {
        return $this->nome_jogador;
    }

    public function setNomeJogador($nome_jogador)
    {
        $this->nome_jogador = $nome_jogador;

        return $this;
    }

    /**
     * Get the value of cpf
     */
    public function getTitulosLiga()
    {
        return $this->titulos_liga;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */
    public function setTitulosLiga($titulos_liga)
    {
        $this->titulos_liga = $titulos_liga;

        return $this;
    }

    /**
     * Get the value of sexo
     */
    public function getTitulosContinentais()
    {
        return $this->titulos_continentais;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */
    public function setTitulosContinentais($titulos_continentais)
    {
        $this->titulos_continentais = $titulos_continentais;

        return $this;
    }

    

    /**
     * Get the value of descricao
     */ 
    public function getMaiorJogador()
    {
        return $this->maior_jogador;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setMaiorJogador($maior_jogador)
    {
        $this->maior_jogador = $maior_jogador;

        return $this;
    }

    /**
     * Get the value of categoria_id
     */ 
    public function getMaiorTitulo()
    {
        return $this->maior_titulo;
    }

    /**
     * Set the value of categoria_id
     *
     * @return  self
     */ 
    public function setMaiorTitulo($maior_titulo)
    {
        $this->maior_titulo = $maior_titulo;

        return $this;
    }
}
