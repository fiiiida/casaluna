<?PHP
include "../config.php";
class couponC {
function affichercoupon ($coupon){
		echo "id: ".$coupon->getid()."<br>";
		echo "code: ".$coupon->getcode()."<br>";
		echo "coupon used: ".$coupon->getcused()."<br>";
		echo "coupon limit: ".$coupon->getclimit()."<br>";
		echo "coupon discount: ".$coupon->getcdiscount()."<br>";
	}
	
	function ajoutercoupon($coupon){
		$sql="insert into coupon (code,cused,climit,cdiscount) values (:code,:cused,:climit,:cdiscount)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $code=$coupon->getcode();
        $cused=$coupon->getcused();
        $climit=$coupon->getclimit();
        $cdiscount=$coupon->getcdiscount();
		
		$req->bindValue(':code',$code);
		$req->bindValue(':cused',$cused);
		$req->bindValue(':climit',$climit);
		$req->bindValue(':cdiscount',$cdiscount);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercoupons(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From coupon";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercoupon($id){
		$sql="DELETE FROM coupon where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function modifiercoupon($coupon,$id){
		$sql="UPDATE coupon SET code=:code, cused=:cused,climit=:climit,cdiscount=:cdiscount WHERE id=:id";

		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$code=$coupon->getcode();
        $cused=$coupon->getcused();
        $climit=$coupon->getclimit();
        $cdiscount=$coupon->getcdiscount();

        $datas = array(':id'=>$id,':code'=>$code, ':cused'=>$cused,':climit'=>$climit,':cdiscount'=>$cdiscount);
        
		$req->bindValue(':id',$id);
        $req->bindValue(':code',$code);
        $req->bindValue(':cused',$cused);
        $req->bindValue(':climit',$climit);
        $req->bindValue(':cdiscount',$cdiscount);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	
	function recuperercoupon($id){
		$sql="SELECT * from coupon where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecoupon($cdiscount){
		$sql="SELECT * from coupon where =$cdiscount";
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