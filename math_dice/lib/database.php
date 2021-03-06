<?php 
class Database {
    private $host='localhost';
    private $user='littletimmy';
    private $pass='';
    private $db='math_dice';
    private $conexion;
    
    function __construct($_host=null, $_user=null, $_pass=null, $_db=null){
        /*$this->host=$_host;
        $this->user=$_user;
        $this->pass=$_pass;
        $shit->db=$_db;*/
        $this->conexion=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    function consulta($sqlQuery){
        $res=$this->conexion->query($sqlQuery);
        $objeto=array();
        while($r=$res->fetch_assoc()){
           $objeto[]=$r;
        }
        return $objeto;
    }
    
    function getDatosUsuario($nombre){
        return $this->consulta('SELECT * FROM usuario WHERE nombre="'.$nombre.'"')[0];
    }
    
    function insertarUsuario($nombre, $apellidos, $edad, $sexo, $password){
        // retorna 1 si todo ha ido bien
        return $this->conexion->query('INSERT INTO usuario (id, nombre, apellidos, edad, sexo, puntos, password) 
        VALUES (NULL, "'.$nombre.'", "'.$apellidos.'", "'.$edad.'", "'.$sexo.'", 0,"'.sha1($password).'")');
    }
    
    function sumarPuntos($id, $punt){
        $res=$this->consulta('select puntos from usuario where id= "'.$id.'"');
        $puntosBase=$res[0]['puntos'];
        $puntos=$puntosBase+$punt;
        // retorna 1 si todo ha ido bien
        return $this->conexion->query('UPDATE usuario SET puntos ='.$puntos.' WHERE id = "'.$id.'";');
    }
    
    function actualizarDatosUsuario($id){
        $jug = $_SESSION['jugador'];
        return $this->conexion->query('UPDATE usuario SET nombre ="'.$jug->nombre.'", apellidos="'.$jug->apellidos.'", edad='.$jug->edad.', sexo="'.$jug->sexo.'", password="'.$jug->password.'" WHERE id = "'.$id.'";');
    }
    
}

?>