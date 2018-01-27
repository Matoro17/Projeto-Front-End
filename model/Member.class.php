<?php
    class Member {
        private $id;
        private $name;
        private $password;
        private $age;
        private $email;
        private $birthDate;
        private $estadocivil;
        private $telefone;
        private $github;
        private $pontuacao;
        private $admin;



        function __construct($email, $password, $id = "", $name = "", $birthDate = "",$age = "", $estadocivil = "", $telefone = "", $github = "", $pontuacao = "", $admin = "") {
            
            $this->name = $name;
            $this->password = $password;
            $this->email = $email;
            $this->birthDate = $birthDate;
            $this->id = $id;    
            $this->age = $age;
            $this->estadocivil = $estadocivil;
            $this->telefone = $telefone;
            $this->github = $github;  
            $this->pontuacao = $pontuacao;  
            $this->admin = $admin;  
        }    
        
        function auth() {
            $conn = Connection::getInstance();
            $query = "SELECT * FROM membro WHERE email = '{$this->email}' AND password = '{$this->password}'";
            $sql = $conn->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            
            if($row) {
                $this->name = $row['name'];
                $this->id = $row['id'];
                $this->birthDate = $row['birthdate'];
                $this->email = $row['email'];
                $this->age = $row['age'];
                $this->estadocivil = $row['estadocivil'];
                $this->github = $row['github'];
                $this->admin = $row['admin'];
                $this->pontuacao = $row['pontuacao'];
                $this->telefone = $row['telefone'];
                return true;
            } else {
                return false;
            }
        }


        function setPontuacao($value)
        {
            $this->pontuacao = $value;
        }

        function getId() {
            return $this->id;
        }

        function getEmail() {
            return $this->email;
        }
        
        function getPassword() {
            return $this->password;
        }
        
        function getName() {
            return $this->name;
        }
        
        function getBirthDate() {
            return $this->birthDate;
        }

        function getAge(){
            return $this->age;
        }

        function getEstadoCivil(){
            return $this->estadocivil;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function getGithub(){
            return $this->github;
        }

        function getPontuacao(){
            return $this->pontuacao;
        }

        function isAdmin(){
            return $this->admin;
        }
    }

?>