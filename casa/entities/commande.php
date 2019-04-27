<?PHP
class commande{
	private $client_id;
	private $total_price;
    private $created;
    private $modified;
    private $status;
	
	function __construct($client_id,$total_price,$created,$modified,$status){
		$this->client_id=$client_id;
		$this->total_price=$total_price;
        $this->created=$created;
        $this->modified=$modified;
        $this->status=$status;
		
	}

	function getclient_id(){
		return $this->client_id;
	}
	function gettotal_price(){
		return $this->total_price;
	}
    function getcreated(){
		return $this->created;
	}
    function getmodified(){
		return $this->modified;
	}
    function getstatus(){
		return $this->status;
	}
    

	
	
	function setclient_id($client_id){
		$this->client_id=$client_id;
	}
	function settotal_price($total_price){
		$this->total_price=$total_price;
	}
    function setcreated($created){
		$this->created=$created;
	}
    function setmodified($modified){
		$this->modified=$modified;
	}
    function setstatus($status){
		$this->status=$status;
	}
  
	
}

?>