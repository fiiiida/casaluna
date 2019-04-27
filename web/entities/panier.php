<?PHP
class panier{
	private $id_prod;
	private $ip_add;
	private $qte;
	private $price;
	function __construct($id_prod,$ip_add,$qte,$price){
		$this->id_prod=$id_prod;
                $this->ip_add=$ip_add;
		$this->qte=$qte;
		$this->price=$price;
	}
	
	function getip(){
		return $this->ip_add;
	}
	function getidprod(){
		return $this->id_prod;
	}
	function getqte(){
		return $this->qte;
	}
	function getprice(){
		return $this->price;
	}
	
	function setip($ip_add){
		$this->ip_add=$ip_add;
	}
	function setidprod($id_prod){
		$this->id_prod=$id_prod;
	}
	function setqte($qte){
		$this->qte=$qte;
	}
	function setc($price){
		$this->price=$price;
	}
	function ajouterpanier($panier)
        {
            
        $ip_add=$panier->getip();
        $id_prod=$panier->getidprod();
        $qte=$panier->getqte();
        $price=$panier->getprice();

            
        $req ="insert into cart (ip_add,id_prod,qte,price) values (:ip_add,:id_prod,:qte,:price)";
                $db=config::getConnexion();
                try
                {        
        $req->bindValue(':ip_add',$ip_add);
        $req->bindValue(':id_prod',$id_prod);
        $req->bindValue(':qte',$qte);
        $req->bindValue(':price',$price);
                    

                        $req->execute();
                    }
                        catch(Exception $e)
                       {
                            echo 'Erreur' .$e->getMessage();
          }                  }
        
}
 


?>