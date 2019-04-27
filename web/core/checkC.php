<?PHP
include "../config.php";
class checkC {
function affichercheck ($check){
		echo "id: ".$check->getid()."<br>";
		echo "uid: ".$check->getuid()."<br>";
		echo "firstname: ".$check->getfirstname()."<br>";
		echo "lastname: ".$check->getlastname()."<br>";
		echo "adress: ".$check->getadress()."<br>";
		echo "country: ".$check->getcountry()."<br>";
		echo "zip: ".$check->getzip()."<br>";
		echo "email: ".$check->getemail()."<br>";
		echo "mobile: ".$check->getmobile()."<br>";

	}
	
	function ajoutercheck($check){
		$sql="insert into usersmeta (uid, firstname, lastname, address1,country, zip, email, mobile) values (:uid, :firstname, :lastname, :address1, :country,:zip, :email, :mobile)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$uid=$check->getuid();
		$firstname=$check->getfirstname();
		$lastname=$check->getlastname();
		$adress1=$check->getadress();
		$country=$check->getcountry();
		$zip=$check->getzip();
		$email=$check->getemail();
		$mobile=$check->getmobile();
		$req->bindValue(':uid',$uid);
		$req->bindValue(':firstname',$firstname);
		$req->bindValue(':lastname',$lastname);
		$req->bindValue(':adress1',$adress1);
		$req->bindValue(':country',$country);
		$req->bindValue(':zip',$zip);
		$req->bindValue(':email',$email);
		$req->bindValue(':mobile',$mobile);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercheckk(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From usersmeta";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercheck($uid){
		$sql="DELETE FROM usersmeta where uid= :uid";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':uid',$uid);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercheck($check,$uid){
		$sql="UPDATE usersmeta SET firstname=:firstname, lastname=:lastname,adress1=:adress1,country=:country,zip=:zip,email=:email,mobile=:mobile  WHERE uid=:uid";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$firstname=$check->getfirstname();
		$lastname=$check->getlastname();
		$adress1=$check->getadress();
		$country=$check->getcountry();
		$zip=$check->getzip();
		$email=$check->getemail();
		$mobile=$check->getmobile();
		$datas = array(':uid'=>$uid, ':firstname'=>$firstname, ':lastname'=>$lastname,':adress1'=>$adress1,':country'=>$country,':zip'=>$zip,':email'=>$email,':mobile'=>$mobile);
		
		$req->bindValue(':uid',$uid);
		$req->bindValue(':firstname',$firstname);
		$req->bindValue(':lastname',$lastname);
		$req->bindValue(':adress1',$adress1);
		$req->bindValue(':country',$country);
		$req->bindValue(':zip',$zip);
		$req->bindValue(':email',$email);
		$req->bindValue(':mobile',$mobile);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercheck($uid){
		$sql="SELECT * from usersmeta where uid=$uid";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function recherchercheck($adress1){
		$sql="SELECT * from usersmeta where adress1=$adress1";
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