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
		
		function __construct($id , $name, $contratante,$orcamento, $workers,$datainicio,$dataentrega)
		{
			$this->id = $id;
			$this->name = $name;
			$this->contratante = $contratante;
			$this->orcamento = $orcamento;
			 
			$this->workers = $workers;
			$this->datainicio = $datainicio;
			$this->dataentrega = $dataentrega; 
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
