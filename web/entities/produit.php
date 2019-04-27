<?PHP
class Produit{
	private $id_prod;
	private $lib_prod;
	private $prix;
	private $image;
	private $description;
    private $qte_prod;
    private $id;

	function __construct($id_prod,$lib_prod,$prix,$image,$description,$qte_prod,$id){
		$this->id_prod=$id_prod;
		$this->lib_prod=$lib_prod;
		$this->prix=$prix;
		$this->image=$image;
		$this->description=$description;
        $this->qte_prod=$qte_prod;
        $this->id=$id;
        
	}
	
	function getId(){
		return $this->id_prod;
	}
	function getLib(){
		return $this->lib_prod;
	}
	function getPrix(){
		return $this->prix;
	}
	function getImage(){
		return $this->image;
	}
	function getDescription(){
		return $this->description;
	}
    function getQte(){
		return $this->qte_prod;
	}
    function getIdC(){
		return $this->id;
	}

	function setId($id_prod){
		$this->id_prod=$id_prod;
	}
    function setLib($lib_prod){
		$this->lib_prod=$lib_prod;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setImage($image){
		$this->image=$image;
	}
	function setDescription($description){
		$this->description=$description;
	}
    
    function setQte($qte_prod){
		$this->qte_prod=$qte_prod;
	}
    function setIdC($id){
		$this->id=$id;
	}
	
}

?>