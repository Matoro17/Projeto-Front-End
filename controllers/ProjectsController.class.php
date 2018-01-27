<?php
    require_once("../database/Connection.class.php");
    require_once("../model/Project.class.php");
    require_once("../controllers/MembersController.class.php");

    class ProjectsController {
        private $connection;
        
        public function __construct() {
            $this->connection = Connection::getInstance();
        }
    
        public function registerNewProject($project,$vector = array()) {
            
            $connection = Connection::getInstance();
            $query = "INSERT INTO project(`id`, `name`, `contratante`, `orcamento`, `workers`,`datainicio`, `dataentrega`) VALUES (null, 
                                                                                            '{$project->getName()}',
                                                                                            '{$project->getContratante()}', 
                                                                                            '{$project->getOrcamento()}',
                                                                                            '{$project->getWorkers()}', 
                                                                                            '{$project->getDataInicio()}',
                                                                                            '{$project->getDataEntrega()}'
                                                                                        )";
            $sql = $connection->query($query);
            $atual = $this->getProjectIdbyName($project->getName());
            
            $atual = $atual->getId();
            $mebrocontrol = new MembersController();

            foreach ($vector as $value) {
                $idM = $mebrocontrol->getIdMember($value)->getId();
                
                $query = "INSERT INTO `membroproject`(`ID_membroproject`, `idMembro`, `idProject`) VALUES (null,$idM,$atual)";

                $sql = $connection->query($query);
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                var_dump($row);
                die();
            }

            
        }


        public function updateProjectName($id, $name) {
            $connection = Connection::getInstance();
            $query = "UPDATE project SET name='{$name}' WHERE id= $id";
            $sql = $connection->query($query);
        }

        public function getProject($idProject) {
            $connection = Connection::getInstance();
            $query = "SELECT * FROM project WHERE id=$idProject";
            $sql = $connection->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
           
            if(isset($row)) {
                return new Project($row['id'],$row['name'],$row['contratante'], $row['orcamento'], $row['workers'],$row['datainicio'], $row['dataentrega']);
            } else {
                return null;
            }
        }

        public function getProjectIdbyName($palavra){
            $connection = Connection::getInstance();
            $query = "SELECT * FROM project WHERE name='".$palavra."'";
            $sql = $connection->query($query);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            
            if(isset($row)) {
                return new Project($row['id'],$row['name'],$row['contratante'], $row['orcamento'], $row['workers'],$row['datainicio'], $row['dataentrega']);
            } else {
                return null;
            }
        }



        public function getProjectsbyUser($idUser){
            $connection = Connection::getInstance();
            $query = "SELECT idProject FROM membroproject WHERE membroproject.idMembro=$idUser";
            $sql = $connection->query($query);
            $row = $sql->fetchAll(PDO::FETCH_ASSOC);
            $vetor = array();
            foreach ($row as $value) {
                $bilada = $value['idProject'];
                $chi = $bilada[0];
                array_push($vetor, $this->getProject($bilada));
            }
            if(isset($row)) {
                return $vetor;
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