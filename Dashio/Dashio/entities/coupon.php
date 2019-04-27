<?PHP
class coupon{
	private $id;
	private $code;
	private $cused;
	private $climit;
	private $cdiscount;
	function __construct($id,$code,$cused,$climit,$cdiscount){
		$this->id=$id;
		$this->code=$code;
		$this->cused=$cused;
		$this->climit=$climit;
		$this->cdiscount=$cdiscount;
	}
	
	function getid(){
		return $this->id;
	}
	function getcode(){
		return $this->code;
	}
	function getcused(){
		return $this->cused;
	}
	function getclimit(){
		return $this->climit;
	}
	function getcdiscount(){
		return $this->cdiscount;
	}

	function setcode($code){
		$this->code=$code;
	}
	function setcused($prenom){
		$this->cused=$cused;
	}
	function setclimit($nbHeures){
		$this->climit=$climit;
	}
	function setcdiscount($tarifHoraire){
		$this->cdiscount=$cdiscount;
	}
	
}

?>