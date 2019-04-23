<?PHP
class Categorie{
	private $idc;
	private $leb_cat1;
	private $id_cat;
	

	function __construct($idc,$leb_cat1,$id_cat){
		$this->idc=$idc;
		$this->leb_cat1=$leb_cat1;
		$this->id_cat=$id_cat;
		
	}
	function getIdc(){
		return $this->idc;
	}
	function getLeb_cat1(){
		return $this->leb_cat1;
	}
	function getId_cat(){
		return $this->id_cat;
	}

	function setIdc($idc){
		$this->idc;
	}
	function setLeb_cat1($leb_cat1){
		$this->leb_cat1=$leb_cat1;
	}
	function setId_cat($id_cat){
		$this->id_cat;
	}
	
}

?>