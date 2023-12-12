<?php

require_once "Conexao.php";
require_once "Futebol.php";

class FutebolModel
{

    public $tabela = "Futebol";

    public function create(Futebol $c)
    {
        try {
            $sql = "insert into $this->tabela (nome_time, fundacao, nome_jogador, titulos_liga, titulos_continentais, maior_jogador, maior_titulo) 
                values (?, ?, ?, ?, ?, ?, ?)";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeTime());
            $stmt->bindValue(2, $c->getFundacao());
            $stmt->bindValue(3, $c->getNomeJogador());
            $stmt->bindValue(4, $c->getTitulosLiga());
            $stmt->bindValue(5, $c->getTitulosContinentais());
            $stmt->bindValue(6, $c->getMaiorJogador());
            $stmt->bindValue(7, $c->getMaiorTitulo());

            return $stmt->execute();
        } catch (PDOException $Exception) {
            // Note The Typecast To An Integer!
            //throw new PDOException($Exception->getMessage(), (int)$Exception->getCode());
            echo "Erro: " . $Exception->getMessage();
            echo "Número: " . (int)$Exception->getCode();
        }
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Futebol');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Futebol');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Futebol $c)
    {
        try {
            $sql = "update $this->tabela set nome_time=?, fundacao=?, nome_jogador=?, titulos_liga=?, titulos_continentais=?, maior_jogador=?, maior_titulo=? where id=?";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNomeTime());
            $stmt->bindValue(2, $c->getFundacao());
            $stmt->bindValue(3, $c->getNomeJogador());
            $stmt->bindValue(4, $c->getTitulosLiga());
            $stmt->bindValue(5, $c->getTitulosContinentais());
            $stmt->bindValue(6, $c->getMaiorJogador());
            $stmt->bindValue(7, $c->getMaiorTitulo());
            $stmt->bindValue(8, $c->getId());

            return $stmt->execute();
        } catch (PDOException $Exception) {
            // Note The Typecast To An Integer!
            throw new PDOException($Exception->getMessage(), (int)$Exception->getCode());
            echo "Erro: " . $Exception->getMessage();
            echo "Número: " . (int)$Exception->getCode();
        }
    }
    public function delete($id)
    {
        try {
            $sql = "delete from $this->tabela where id=?";

            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);

            return $stmt->execute();
        } catch (PDOException $Exception) {
            // Note The Typecast To An Integer!
            throw new PDOException($Exception->getMessage(), (int)$Exception->getCode());
            echo "Erro: " . $Exception->getMessage();
            echo "Número: " . (int)$Exception->getCode();
        }
    }
}
