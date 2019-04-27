<?php
include_once "../config.php";
session_start();

class commandeC {

    function insertnewcommande($commande)
    {
        $db=Database::getConnexion();
        $item_total=0;
        foreach($_SESSION["cart_item"] as $item) {
            $item_total += ($item["prix"]*$item["quantite"]);
        }
        $sql="insert into commande (montant,id_client) values (:montant,:nomclient)";
        try{
            $req=$db->prepare($sql);
            $nom=$_SESSION["Username"];
            $montant=$commande->getPrixTOT();
            $req->bindValue(':nomclient',$nom);
            $req->bindValue(':montant',$montant);
            $req->execute();
            $last_id = $db->lastInsertId();

            foreach($_SESSION["cart_item"] as $item)
            { if (!in_array($_SESSION["cart_item"],array()))
            { if(!empty($item['reference']))
            {
                $prixtotal=($item["prix"]*$item["quantite"]);
                $req = $db->query("insert into ligne (id_comm,id_prod,quantite) Values ('".$last_id."','".$item["reference"]."','".$item["quantite"]."')");
                $req2 = $db->query("UPDATE `produit` SET `stock`=(`stock`-'".$item["quantite"]."') WHERE `id_prod`='".$item["reference"]."'");

            }}
            unset($_SESSION["cart_item"]);
            //echo"<script>document.location.href ='checkout.php';</script>";
        }
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
      }


    function listingproductdetail($id)
    {
        $db = Database::getConnexion();
        $req1= $db->query("SELECT * FROM produit WHERE id_prod = $id ");
      return $req1->fetchAll();
    }


    public function addpanier($id)
    {

        $db = config::getConnexion();
        $req1= $db->query("SELECT * FROM produit WHERE id_prod = $id ");
        $prods=$req1->fetchAll();

        foreach ($prods as $prod)
        {
            $prix=$prod['prix'] ;
            $image=$prod['image'] ;
            $description=$prod['description'] ;
            $nom=$prod['nom_prod'] ;
            $exist=0 ;
            if(!empty($_SESSION["cart_item"]))
            {
                foreach($_SESSION["cart_item"] as $k => $v)
                {
                    if($_GET['id']==$_SESSION["cart_item"][$k]['reference'])
                    {
                        $_SESSION["cart_item"][$k]["quantite"] += $_POST["quantite"];

                        $exist=1 ;
                    }
                }
                if($exist==0)
                {

                    array_push($_SESSION["cart_item"], array( 'reference'=>$_GET["id"],'nom'=>$nom,'image'=>$image, 'description'=>$description  , 'prix'=>$prix ,'quantite'=>$_POST["quantite"]));
                }

            }else {

                array_push($_SESSION["cart_item"], array( 'reference'=>$_GET["id"],'nom'=>$nom,'image'=>$image, 'description'=>$description  , 'prix'=>$prix ,'quantite'=>$_POST["quantite"]));
            }
        }

    }

    public function getProductFrompanier($id)
    {
        $db = Database::getConnexion();
        $req1= $db->query("SELECT * FROM Panier_favoris WHERE ID_Produit= $id ");
        return $req1->fetchAll();
    }


    public function InsertProductTopanier($id)
    {
        $db = Database::getConnexion();
        $req = $db->query("insert into Panier_favoris (Nom_Client,ID_Produit) Values ('".$_SESSION["Username"]."','".$id."')");

    }


    public  function GetListFavoris()
    {
        $db = Database::getConnexion();
        $req = $db->query("SELECT * FROM Panier_favoris INNER JOIN products ON Panier_favoris.ID_Produit=Products.ID_Product WHERE Nom_Client = '".$_SESSION["Username"]."'");
        return $req->fetchAll();
    }

    public  function deletefromFavoris($id)
    {
        $db = Database::getConnexion();
        $req=$db->query("DELETE FROM Panier_Favoris WHERE ID_Produit=$id");
    }



}
?>