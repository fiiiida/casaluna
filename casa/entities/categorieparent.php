<?PHP
class Categorieparent{
	private $leb_cat1;
	private $id_cat;


	
	function __construct($leb_cat1,$id_cat){
		$this->leb_cat1=$leb_cat1;
		$this->id_cat=$id_cat;
	}
	
	function getLeb_cat1(){
		return $this->leb_cat1;
	}
	function getId_cat(){
		return $this->id_cat;
	}
	function setLeb_cat1($leb_cat1){
		$this->leb_cat1=$leb_cat1;
	}

	function setId_cat($id_cat){
		$this->id_cat=$id_cat;
	}
}

?>