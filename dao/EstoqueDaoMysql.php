<?php
require_once '../models/Estoque.php';

class EstoqueDaoMysql implements EstoqueDAO {
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Estoque $e){
        $sql = $this->pdo->prepare("INSERT INTO estoque (codigo, descricao, quantidade, valor) 
        VALUES (:codigo, :descricao, :quantidade, :valor)");
        $sql->bindValue(':codigo', $e->getCodigo());
        $sql->bindValue(':descricao', $e->getDescricao());
        $sql->bindValue(':quantidade', $e->getQuantidade());
        $sql->bindValue(':valor', $e->getValor());
        $sql->execute();

        $e->setId($this->pdo->lastInsertId() );
        return $e;
    }

    public function findAll(){
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM estoque");
        if($sql->rowCount() >= 0){
            $data = $sql->fetchAll();

            foreach($data as $valor){
                $e = new Estoque();
                $e->setId($valor['id']);
                $e->setCodigo($valor['codigo']);
                $e->setDescricao($valor['descricao']);
                $e->setQuantidade($valor['quantidade']);
                $e->setValor($valor['valor']);

                $array[] = $e; 
            }
        }       
        return $array;
    }
    
    public function findBYCodigo($c){

        $sql = $this->pdo->prepare("SELECT * FROM estoque WHERE codigo = :codigo");
        $sql->bindValue(':codigo', $codigo);
        $sql->execute();

        if($sql->rowCount() >= 0){
            $data = $sql->fetch();
            
            $e = new Estoque();
            $e->setId($data['id']);
            $e->setCodigo($data['codigo']);
            $e->setDescricao($data['descricao']);
            $e->setQuantidade($data['quantidade']);
            $e->setValor($data['valor']);

            return $e;
        }else{
            return false;
        }
    }

    public function findById($id){
        $sql = $this->pdo->prepare("SELECT * FROM estoque WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() >= 0){
            $data = $sql->fetch();
            
            $e = new Estoque();
            $e->setId($data['id']);
            $e->setCodigo($data['codigo']);
            $e->setDescricao($data['descricao']);
            $e->setQuantidade($data['quantidade']);
            $e->setValor($data['valor']);

            return $e;
        }else{
            return false;
        }
    }

    public function update(Estoque $e){
        $sql = $this->pdo->prepare("UPDATE estoque SET valor = :valor, descricao = :descricao WHERE id = :id");
        $sql->bindValue(':valor', $e->getValor());
        $sql->bindValue(':descricao', $e->getDescricao());
        $sql->bindValue(':id', $e->getId());
        $sql->execute();

        return true;
    }

    public function delete($id){
      $sql = $this->pdo->prepare("DELETE FROM estoque WHERE id = :id");
      $sql->bindValue(':id', $id);
      $sql->execute();
    }
}
