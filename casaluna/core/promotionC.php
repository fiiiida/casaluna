<?PHP

class PromotionC {

    

	function afficherPromotion($promotion){
        echo "Referencep: ".$promotion->getReferencep()."<br>";
        echo "Pourcentage: ".$promotion->getPourcentage()."<br>";
        echo "Categoriesp: ".$promotion->getCategoriesp()."<br>";
        echo "Debutpromos: ".$promotion->getDebutpromos()."<br>";
        echo "Finpromos: ".$promotion->getFinpromos()."<br>";
        
    }
    
    function ajouterPromotion($promotion){
        $sql="insert into promotions (Referencep,Pourcentage,Categoriesp,Debutpromos,Finpromos) values (:Referencep,:Pourcentage,:Categoriesp,:Debutpromos,:Finpromos)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $Referencep=$promotion->getReferencep();
        $Pourcentage=$promotion->getPourcentage();
        $Categoriesp=$promotion->getCategoriesp();
        $Debutpromos=$promotion->getDebutpromos();
        $Finpromos=$promotion->getFinpromos();
        
        $req->bindValue(':Referencep',$Referencep);
        $req->bindValue(':Pourcentage',$Pourcentage);
        $req->bindValue(':Categoriesp',$Categoriesp);
        $req->bindValue(':Debutpromos',$Debutpromos);
        $req->bindValue(':Finpromos',$Finpromos);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    
    function afficherPromotions(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT produit.lib_prod,promotions.id_promotion,promotions.Referencep,promotions.Pourcentage,categories.leb_cat,promotions.Debutpromos,promotions.Finpromos From promotions,produit,categories where produit.idp=promotions.Referencep and promotions.Categoriesp=categories.id_cat";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
function afficherPromotionsFront(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT promotions.Pourcentage,produit.image,produit.lib_prod From promotions,produit,categories where produit.idp=promotions.Referencep and promotions.Categoriesp=categories.id_cat";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function supprimerPromotions($id_promotion){
        $sql="DELETE FROM promotions where id_promotion= :id_promotion";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_promotion',$id_promotion);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


        function modifierPromotion($promotion,$id_promotion){
        $sql="UPDATE promotions SET Referencep=:Referencep, Pourcentage=:Pourcentage,Categoriesp=:Categoriesp,Debutpromos=:Debutpromos,Finpromos=:Finpromos WHERE id_promotion=:id_promotion";

        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        
        $Referencep=$promotion->getReferencep();
        $Pourcentage=$promotion->getPourcentage();
        $Categoriesp=$promotion->getCategoriesp();
        $Debutpromos=$promotion->getDebutpromos();
        $Finpromos=$promotion->getFinpromos();

        $datas = array(':id_promotion'=>$id_promotion,':Referencep'=>$Referencep, ':Pourcentage'=>$Pourcentage,':Categoriesp'=>$Categoriesp,':Debutpromos'=>$Debutpromos,':Finpromos'=>$Finpromos);
        
        $req->bindValue(':id_promotion',$id_promotion);
        $req->bindValue(':Referencep',$Referencep);
        $req->bindValue(':Pourcentage',$Pourcentage);
        $req->bindValue(':Categoriesp',$Categoriesp);
        $req->bindValue(':Debutpromos',$Debutpromos);
        $req->bindValue(':Finpromos',$Finpromos);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }




        function recupererPromotion($id_promotion){
        $sql="SELECT * from promotions where id_promotion=$id_promotion";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function afficherProduit()
    {
$sql="SELECT * from produit ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

        function afficherCat()
    {
        $sql="SELECT * from categories ";
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