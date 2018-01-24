<?php
	/**
	* 
	*/
	class Project	{
		private $id;
		private $name;
		private $contratante;
		private $orcamento;
		private $developers[];
		
		function __construct($id = null, $name = null, $contratante = null,$orcamento, $developers[])
		{
			$this->name = $name;
			$this->contratante = $contratante;
			$this->orcamento = $orcamento;
			$this->developers = $developers; 
		}

		function getName() {
            return $this->name;
        }
	}
?>
