<?PHP
class Packs{
	private $id_pack;
	private $Referencepa;
    private $Nomp;
    private $Contenu;
    private $Prixp;
    private $Pourcp;
	
	function __construct($id_pack,$Referencepa,$Nomp,$Contenu,$Prixp,$Pourcp){
		$this->id_pack=$id_pack;
		$this->Referencepa=$Referencepa;
        $this->Nomp=$Nomp;
        $this->Contenu=$Contenu;
        $this->Prixp=$Prixp;
        $this->Pourcp=$Pourcp;
		
	}
	
	function getid_pack(){
		return $this->id_pack;
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
	
	

	function setid_pack($id_pack){
		$this->id_pack=$id_pack;
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