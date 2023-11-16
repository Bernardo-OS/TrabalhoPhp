<?php
 require_once 'ConexaoMysql.php';
class usuariosModel{             

    //Propriedades
    protected $id;
    protected $nome;
    protected $senha;
    
    //Métodos acessores e modificadores
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    //Método construtor da classe
    public function __construct() {
        
    }
     
    //Métodos especialistas
    public  function loadAll(){
        //require_once './model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM usuario';
        $result = $db->Consultar($sql);
        $db->Desconectar();
        return $result;
    }
    
    public  function loadById($id){
        //require_once './model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM usuario WHERE id = '.$id;
        $result = $db->Consultar($sql);
        if($db->total==1){
            foreach ($result as $data) {
                $this->id = $data['id']; //array que vem do bd
                $this->nome = $data['nome']; //array que vem do bd
                $this->senho = $data['senha']; //array que vem do bd
              }
        }
        $db->Desconectar();
        return $result;
    }
    
    public  function delete($id){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM usuario WHERE id = '.$id;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
    
     public  function insert(){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        //$sql = 'INSERT INTO usuario VALUES(0, "","",0,1)';
        $sql = 'INSERT INTO usuario VALUES(0, "'.$this->nome.'","",'.$this->senha.')';
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
    
    public  function update(){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        //$sql = 'UPDATE usuario SET(0,"","",0,1) WHERE id=1';
        $sql = 'UPDATE usuario SET(0, "'.$this->nome.'","",'.$this->senha.') WHERE id='.$this->id;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }

}
