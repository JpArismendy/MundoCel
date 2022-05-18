<?php

    class Conexion{
        private $host;
        private $driver;
        private $base;
        private $user;
        private $pass;
        private $url;
        private $charSet;

        public function __construct()
        {
            $this-> host    ="localhost";
            $this-> driver  ="mysql";
            $this-> base    ="julin";
            $this-> user    ="root";
            $this-> pass    ="";
            $this-> url     =$this-> driver. ":host="
                            .$this-> host.";dbname="
                            .$this-> base;
            $this-> charSet ="UTF8";
        }
        public function getConnect(){
            try {
                $con = new PDO($this->url, $this->user, $this->pass);

            } catch (Exception $e) {
                echo "Error al conectarme" . $e->getMessage();
            }
            return $con;
        }
    }

    //$objcon = new Conexion();
    //$objcon ->getConnect();

?>