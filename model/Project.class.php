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
		private $developers[];
		
		function __construct($id = null, $name = null, $contratante = null,$orcamento, $workers,$developers[])
		{
			$this->name = $name;
			$this->contratante = $contratante;
			$this->orcamento = $orcamento;
			$this->developers = $developers; 
			$this->workers = $workers;
		}

		function getName() {
            return $this->name;
        }
	}
?>
