<?php

class Estoque {

private $id;
private $codigo;
private $descricao;
private $quantidade;
private $valor;

public function getId(){
    return $this->id;
}
public function setId($id){
    $this->id = trim($id);
}

public function getCodigo(){
    return $this->codigo;
}
public function setCodigo($c){
    $this->codigo = trim($c);
}

public function getDescricao(){
    return $this->descricao;
}
public function setDescricao($d){
    $this->descricao = trim($d);
}

public function getQuantidade(){
    return $this->quantidade;
}
public function setQuantidade($q){
    $this->quantidade = trim($q); 
}

public function getValor(){
    return $this->valor;
}
public function setValor($v){
    $this->valor = trim($v);
    }
}

interface EstoqueDAO {
    public function add(Estoque $e);
    public function findAll();
    public function findByCodigo($c);
    public function findById($id);
    public function update(Estoque $e);
    public function delete($id);
}