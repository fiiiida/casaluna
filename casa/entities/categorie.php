<?PHP
class Categorie{
	private $leb_cat;
	private $id_cat;
    private $parent;

	function __construct($id_cat,$leb_cat,$parent){
		$this->leb_cat=$leb_cat;
		$this->id_cat=$id_cat;
        $this->parent=$parent;
	}
	
	function getLeb_cat(){
		return $this->leb_cat;
	}
	function getId_cat(){
		return $this->id_cat;
	}
    function getParent(){
		return $this->parent;
	}
    
	function setLeb_cat($leb_cat){
		$this->leb_cat=$leb_cat;
	}
	function setId_cat($id_cat){
		$this->id_cat;
	}	
    function setParent($parent){
		$this->parent;
	}	
}

?>