<?php

require_once('../Controller/Conexao.php');
require_once('../Motocicletas.php');
require_once ('../Veiculo.php');

class DAOMotocicletas {
    
    private $conexao;
    
    function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function Inserir ($Motocicletas){

        $sql = "INSERT INTO `motocicleta` (`placa`, `cor`, `modelo`, `fabricante`, `datafabric`,`valordia`,`situacao`, `potencia`, `tipo`) VALUES ('";
        $sql = $sql . $Motocicletas->getPlaca()."','";
        $sql = $sql . $Motocicletas->getCor()."','";
        $sql = $sql . $Motocicletas->getModelo()."','";
        $sql = $sql . $Motocicletas->getFabricante()."','";
        $sql = $sql . $Motocicletas->getFabricacao()."','";
        $sql = $sql . $Motocicletas->getValordia()."','";
        $sql = $sql . $Motocicletas->getSituacao()."','";
        $sql = $sql . $Motocicletas->getPotencia()."','";
        $sql = $sql . $Motocicletas->getTipo()."');";
        
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
    }
    
    /*public function Alterar($Motocicletas){
        $sql = "update usuario set placa = ". $Motocicletas->getPlaca().
        ", cor = '".$Motocicletas->getCor().
        "', modelo = '".$Motocicletas->getModelo().
        ", cor = '".$Motocicletas->getCor().
        ", modelo = '".$Motocicletas->getModelo().
        ", fabricante = '".$Motocicletas->getFabricante().
        ", datafrabric = '".$Motocicletas->getFabricacao().
        ", situaca = '".$Motocicletas->getSituacao().
        ", potencia = '".$Motocicletas->getPotencia().
        ", tipo = '".$Motocicletas->getTipo().
        "' where id_Motocicletas = ".$Motocicletas->GetCodigo();
        
        $banco = $this->conexao->GetBanco();
        $banco->query($sql);
        $this->conexao->Desconectar();
        
    }*/
}
