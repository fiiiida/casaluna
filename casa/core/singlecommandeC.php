<?PHP

class SinglecommandeC {
function afficherSinglecommande ($Singlecommande){
		
		echo "Order ID: ".$Singlecommande->getorder_id()."<br>";
		echo "Product ID: ".$Singlecommande->getproduct_id()."<br>";
		echo "Quantity: ".$Singlecommande->getquantity()."<br>";
		
	}
	
	function ajouterSinglecommande($Singlecommande){
		$sql="insert into order_items (order_id,product_id,quantity) values ( :order_id,:product_id,:quantity)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
      
        $order_id=$Singlecommande->getorder_id();
        $product_id=$Singlecommande->getproduct_id();
        $quantity=$Singlecommande->getquantity();
        
       
		
		$req->bindValue(':order_id',$order_id);
		$req->bindValue(':product_id',$product_id);
		$req->bindValue(':quantity',$quantity);//bind value associe une valeur à un parametre
		
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherSinglecommandes(){
		
		$sql="SElECT * From order_items";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerSinglecommande($order_id){
		$sql="DELETE FROM order_items where order_id= :order_id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':order_id',$order_id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierSinglecommande($Singlecommande,$order_id){
		$sql="UPDATE order_items SET  quantity=:quantity WHERE order_id=:order_id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $order_id=$Singlecommande->getorder_id();
        $quantity=$Singlecommande->getquantity();
		$datas = array( ':order_id'=>$order_id,':quantity'=>$quantity  );
		
			
		$req->bindValue(':order_id',$order_id);
		$req->bindValue(':quantity',$quantity);		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererSinglecommande($order_id){
		$sql="SELECT * from order_items where order_id=$order_id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeSinglecommande($product_id){
		$sql="SELECT * from order_items where product_id=$product_id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>