<?PHP
class Promotion{
	private $id_promotion;
	private $Referencep;
    private $Pourcentage;
    private $Categoriesp;
    private $Debutpromos;
    private $Finpromos;
	
	function __construct($id_promotion,$Referencep,$Pourcentage,$Categoriesp,$Debutpromos,$Finpromos){
		$this->id_promotion=$id_promotion;
		$this->Referencep=$Referencep;
        $this->Pourcentage=$Pourcentage;
        $this->Categoriesp=$Categoriesp;
        $this->Debutpromos=$Debutpromos;
        $this->Finpromos=$Finpromos;
		
	}

	function getId_promotion(){
		return $this->id_promotion;
	}
	function getReferencep(){
		return $this->Referencep;
	}
    function getPourcentage(){
		return $this->Pourcentage;
	}
    function getCategoriesp(){
		return $this->Categoriesp;
	}
    function getDebutpromos(){
		return $this->Debutpromos;
	}
    function getFinpromos(){
		return $this->Finpromos;
	}

	
	
	function setId_promotion($id_promotion){
		$this->id_promotion=$id_promotion;
	}
	function setReferencep($Referencep){
		$this->Referencep=$Referencep;
	}
    function setPourcentage($Pourcentage){
		$this->Pourcentage=$Pourcentage;
	}
    function setCategoriesp($Categoriesp){
		$this->Categoriesp=$Categoriesp;
	}
    function setDebutpromos($Debutpromos){
		$this->Debutpromos=$Debutpromos;
	}
    function setFinpromos($Finpromos){
		$this->Finpromos=$Finpromos;
	}
	
}

?>