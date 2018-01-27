<?php
	/**
	* 
	*/
	class Project	{
		private $id;
		private $name;
		private $datainicio;
		private $dataentrega;
		private $contratante;
		private $orcamento;
		private $workers;
		private $developers = array();
		
		function __construct($id = null, $name, $contratante,$orcamento, $workers,$developers,$datainicio,$dataentrega)
		{
			$this->name = $name;
			$this->contratante = $contratante;
			$this->orcamento = $orcamento;
			$this->developers = $developers;		
			 
			$this->workers = $workers;
			$this->datainicio = $datainicio;
			$this->dataentrega = $dataentrega; 
		}

		function trabalhaNoProjeto($membername){
			foreach ($this->developers as $value) {
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

        function getDataInicio(){
        	return $this->datainicio;
        }

        function getDataEntrega(){
        	return $this->dataentrega;
        }
	}
?>
