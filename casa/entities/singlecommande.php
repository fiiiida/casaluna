<?PHP
class Singlecommande{
	
	private $order_id;
	private $product_id;
	private $quantity;
	
	
	function __construct($order_id,$product_id,$quantity){
		
		$this->order_id=$order_id;
		$this->product_id=$product_id;
		$this->quantity=$quantity;
		
		
	}
	
	
	function getproduct_id(){
		return $this->product_id;
	}
	function getorder_id(){
		return $this->order_id;
	}
	function getquantity(){
		return $this->quantity;
	}
	
	
	

	function setproduct_id($product_id){
		$this->product_id=$product_id;
	}
	function setorder_id($order_id){
		$this->order_id=$order_id;
	}
	function setquantity($quantity){
		$this->quantity=$quantity;
	}
	
	

	
}

?>