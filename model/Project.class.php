<?php
	/**
	* 
	*/
	class Project	{
		private $id;
		private $name;
		private $contratante;
		private $orcamento;
		private $workers;
		private $developers;
		
		function __construct($id = null, $name, $contratante,$orcamento, $workers,$developers)
		{
			$this->name = $name;
			$this->contratante = $contratante;
			$this->orcamento = $orcamento;
			$this->developers = $developers; 
			$this->workers = $workers;
		}

		function trabalhaNoProjeto($membername){
			foreach ($developers as $value) {
				if ($value == $membername) {
					return true;
				}
			}
			return false;
		}

		function getName() {
            return $this->name;
        }

        function getId(){
        	return $this->id;
        }

        function getContratante(){
        	return $this->contratante;
        }
        function getOrcamento(){
        	return $this->orcamento;
        }

        function getWorkers(){
        	return $this->workers;
        }

        function getDevelopers(){
        	return $this->developers;
        }
	}
?>
