<?php
 require_once 'ConexaoMysql.php';
class usuariosModel{             

    //Propriedades
    protected $id;
    protected $titulo;
    protected $arquivo_audio;
    
    //Métodos acessores e modificadores
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getArquivoAudio() {
        return $this->arquivo_audio;
    }



    public function setId($id): void {
        $this->id = $id;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setArquivoAudio($arquivo_audio): void {
        $this->imagem = $arquivo_audio;
    }


    //Método construtor da classe
    public function __construct() {
        
    }
     
    //Métodos especialistas
    public  function loadAll(){
        //require_once './model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM musica';
        $result = $db->Consultar($sql);
        $db->Desconectar();
        return $result;
    }
    
    public  function loadById($id){
        //require_once './model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM musica WHERE id = '.$id;
        $result = $db->Consultar($sql);
        if($db->total==1){
            foreach ($result as $data) {
                $this->id = $data['id']; //array que vem do bd
                $this->titulo = $data['titulo']; //array que vem do bd
                $this->imagem = $data['arquivo_audio']; //array que vem do bd
            }
        }
        $db->Desconectar();
        return $result;
    }
    
    public  function delete($id){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM musica WHERE id = '.$id;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
    
     public  function insert(){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        //$sql = 'INSERT INTO musica VALUES(0, "","",0,1)';
        $sql = 'INSERT INTO musica VALUES(NULL, "'.$this->titulo.'","'.$this->arquivo_audio.'")';
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
    
    public  function update(){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        //$sql = 'UPDATE musica SET(0,"","",0,1) WHERE id=1';
        $sql = 'UPDATE musica SET(NULL, "'.$this->titulo.'","'.$this->arquivo_audio.'") WHERE id='.$this->id;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }

}