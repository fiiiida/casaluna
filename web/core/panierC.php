<?PHP

include "../config.php";
class panierC {
function affichercartt ($panier){
		echo "ip: ".$cart->getip()."<br>";
		echo "code produit: ".$coupon->getidprod()."<br>";
		echo "quantité: ".$coupon->getqte()."<br>";
		echo "price: ".$coupon->getprice()."<br>";
	}


	
	function ajoutercart($panier){
		$sql="insert into cart (id_prod,ip_add,qte,price) values (:id_prod,:ip_add,'1',:price)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_prod=$cart->getidprod();
        $ip_add=$cart->getip();
        $qte=$cart->getqte();
        $price=$cart->getprice();
		
		$req->bindValue(':id_prod',$id_prod);
		$req->bindValue(':ip_add',$ip_add);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':price',$price);
        $req->execute() ;
                 
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
        

	
	function affichercart(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From cart";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercart($id_prod){
		$sql="DELETE FROM cart where id_prod= :id_prod";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: cart.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function modifiercoupon($panier,$id_prod){
		$sql="UPDATE cart SET qte=:qte WHERE id_prod=:id_prod";

		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$code=$qte->getqte();

        $datas = array(':id_prod'=>$id_prod,':qte'=>$qte);
        
		$req->bindValue(':id_prod',$id_prod);
        $req->bindValue(':qte',$qte);
		
		
            $s=$req->execute();
			
           // header('Location: cart.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	
	function recuperercart($id_app){
		$sql="SELECT * from cart where ip_add=$ip_add";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecart($id_app){
		$sql="SELECT * from cart where =$id_app";
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