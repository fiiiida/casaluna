<?php
class Rating {
function save ($Sujet,$commentaire,$stars,$client){
    $sql ="Insert INTO `avis` (`id_user`,`jour`, `sujet`,`commentaire`, `rating`) VALUES (:id_user,:jour,:Sujet,:commentaire,:rating)";

      $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_user',$client);
        $req->bindValue(':jour',date("Y-m-d h:i:sa"));
        $req->bindValue(':Sujet',$Sujet);
        $req->bindValue(':commentaire',$commentaire);
        $req->bindValue(':rating',$stars);
        
        
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }


}
?>