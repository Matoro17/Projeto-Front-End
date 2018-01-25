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
    }
?>