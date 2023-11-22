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

    public function getTitulo() {
        return $this->titulo;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function getDataLancamento() {
        return $this->data_lancamento;
    }

    public function getArtista() {
        return $this->artista;
    }


    public function setId($id): void {
        $this->id = $id;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setSImagem($imagem): void {
        $this->imagem = $imagem;
    }

    public function setDataLancamento($data_lancamento): void {
        $this->data_lancamento = $data_lancamento;
    }

    public function setArtista($artista): void {
        $this->artista = $artista;
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
                $this->titulo = $data['titulo']; //array que vem do bd
                $this->imagem = $data['imagem']; //array que vem do bd
                $this->data_lancamento = $data['data_lancamento']; //array que vem do bd
                $this->artista = $data['artista']; //array que vem do bd
            }
        }
        $db->Desconectar();
        return $result;
    }
    
    public  function delete($id){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM album WHERE id = '.$id;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
    
     public  function insert(){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        //$sql = 'INSERT INTO album VALUES(0, "","",0,1)';
        $sql = 'INSERT INTO album VALUES(0, "'.$this->titulo.'","",'.$this->imagem.','.$this->artista.')';
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
    
    public  function update(){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        //$sql = 'UPDATE album SET(0,"","",0,1) WHERE id=1';
        $sql = 'UPDATE album SET(0,"'.$this->titulo.'","",'.$this->imagem.','.$this->data_lancamento.','.$this->artista.') WHERE id='.$this->id;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }

}
