<?php
    require_once("../database/Connection.class.php");
    require_once("../model/Member.class.php");
    
    class MembersController {
        private $connection;
        
        public function __construct() {
            $this->connection = Connection::getInstance();
        }
    
        public function registerNewMember($member) {
            $connection = Connection::getInstance();
            $query = "INSERT INTO membro(`id`, `name`, `password`, `age`, `email`, `birthdate`, `estadocivil`, `telefone`, `github`, `pontuacao`, `admin`) VALUES (null, 
                                                                                            '{$member->getName()}',
                                                                                            '{$member->getPassword()}', 
                                                                                            '{$member->getAge()}',
                                                                                            '{$member->getEmail()}', 
                                                                                            '{$member->getBirthDate()}',
                                                                                            '{$member->getEstadoCivil()}',
                                                                                            '{$member->getTelefone()}',
                                                                                            '{$member->getGithub()}',
                                                                                            '{$member->getPontuacao()}',
                                                                                            '{$member->isAdmin()}'
                                                                                        )";
            $sql = $connection->query($query);
        }

        public function updateMemberName($id, $name) {
            $connection = Connection::getInstance();
            $query = "UPDATE membro SET nome='{$name}' WHERE id= $id";
            $sql = $connection->query($query);
        }
        public function updateMemberAge($id, $age) {
            $connection = Connection::getInstance();
            $query = "UPDATE membro SET age='{$age}' WHERE id= $id";
            $sql = $connection->query($query);
        }
        public function updateMemberEmail($id, $email) {
            $connection = Connection::getInstance();
            $query = "UPDATE membro SET email='{$email}' WHERE id= $id";
            $sql = $connection->query($query);
        }
        public function updateMemberBirthdate($id, $birthdate) {
            $connection = Connection::getInstance();
            $query = "UPDATE membro SET birthdate='{$birthdate}' WHERE id= $id";
            $sql = $connection->query($query);
        }        
        public function updateMemberEstado($id, $estadocivil) {
            $connection = Connection::getInstance();
            $query = "UPDATE membro SET estadocivil='{$estadocivil}' WHERE id= $id";
            $sql = $connection->query($query);
        }
        public function updateMemberTel($id, $telefone) {
            $connection = Connection::getInstance();
            $query = "UPDATE membro SET telefone='{$telefone}' WHERE id= $id";
            $sql = $connection->query($query);
        }
        public function updateMemberGithub($id, $github) {
            $connection = Connection::getInstance();
            $query = "UPDATE membro SET github='{$github}' WHERE id= $id";
            $sql = $connection->query($query);
        }
        public function updateMemberPontuacao($id, $pontuacao) {
            $connection = Connection::getInstance();
            $query = "UPDATE membro SET pontuacao='{$pontuacao}' WHERE id= $id";
            $sql = $connection->query($query);
        }

        public function getIdMember($nome){
            $connection = Connection::getInstance();
            $query = "SELECT * FROM membro WHERE name= $nome";
            $sql = $connection->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            if(isset($row)) {
                return new Member($row['email'],$row['password'],$id,$row['name'], $row['birthdate'], $row['age'],$row['estadocivil'],$row['telefone'],$row['github'],$row['pontuacao'],$row['admin'] );
            } else {
                return null;
            }
        }

        public function getMember($id) {
            $connection = Connection::getInstance();
            $query = "SELECT * FROM membro WHERE id= $id";
            $sql = $connection->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            if(isset($row)) {
                return new Member($row['email'],$row['password'],$id,$row['name'], $row['birthdate'], $row['age'],$row['estadocivil'],$row['telefone'],$row['github'],$row['pontuacao'],$row['admin'] );
            } else {
                return null;
            }
        }

        public function removeMember($id) {
            $connection = Connection::getInstance();
            $query = "DELETE FROM membro WHERE id= $id";
            $sql = $connection->query($query);
        }

        public function getSize(){
            $connection = Connection::getInstance();
            $query = "SELECT MAX(id) FROM membro";
            $sql = $connection->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            return $row;
        }


    }
?>