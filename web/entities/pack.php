<?PHP
class Pack{
	private $Referencepa;
    private $Nomp;
    private $Contenu;
    private $Prixp;
    private $Pourcp;
	
	function __construct($Referencepa,$Nomp,$Contenu,$Prixp,$Pourcp){
		$this->Referencepa=$Referencepa;
        $this->Nomp=$Nomp;
        $this->Contenu=$Contenu;
        $this->Prixp=$Prixp;
        $this->Pourcp=$Pourcp;
		
	}
	
	function getReferencepa(){
		return $this->Referencepa;
	}
    function getNomp(){
		return $this->Nomp;
	}
    function getContenu(){
		return $this->Contenu;
	}
    function getPrixp(){
		return $this->Prixp;
	}
    function getPourcp(){
		return $this->Pourcp;
	}
	
	


	function setReferencepa($Referencepa){
		$this->Referencepa=$Referencepa;
	}
    function setNomp($Nomp){
		$this->Nomp=$Nomp;
	}
    function setContenu($Contenu){
		$this->Contenu=$Contenu;
	}
    function setPrixp($Prixp){
		$this->Prixp=$Prixp;
	}
    function setPourcp($Pourcp){
		$this->Pourcp=$Pourcp;
	}
	
}

?>