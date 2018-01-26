<?php
    require_once("../database/Connection.class.php");
    require_once("../model/Project.class.php");
    
    class ProjectController {
        private $connection;
        
        public function __construct() {
            $this->connection = Connection::getInstance();
        }
    
        public function registerNewProject($member) {
            $connection = Connection::getInstance();
            $query = "INSERT INTO project(`id`, `name`, `contratante`, `orcamento`, `workers`, `developers`) VALUES (null, 
                                                                                            '{$member->getName()}',
                                                                                            '{$member->getContratante()}', 
                                                                                            '{$member->getOrcamento()}',
                                                                                            '{$member->getWorkers()}', 
                                                                                            '{$member->getDevelopers()}'
                                                                                        )";
            $sql = $connection->query($query);
        }

        public function updateProjectName($id, $name) {
            $connection = Connection::getInstance();
            $query = "UPDATE project SET name='{$name}' WHERE id= $id";
            $sql = $connection->query($query);
        }

        public function getProject($id) {
            $connection = Connection::getInstance();
            $query = "SELECT * FROM project WHERE id= $id";
            $sql = $connection->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            
            if(isset($row)) {
                return new Project($row['id'],$row['name'],$row['contratante'], $row['orcamento'], $row['workers'],$row['developers']);
            } else {
                return null;
            }
        }

        public function removeProject($id) {
            $connection = Connection::getInstance();
            $query = "DELETE FROM membro WHERE id= $id";
            $sql = $connection->query($query);
        }

        public function getSize(){
            $connection = Connection::getInstance();
            $query = "SELECT MAX(id) FROM project";
            $sql = $connection->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
    }
?>