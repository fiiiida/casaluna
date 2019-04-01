<?php
require_once  "config.php";








class stock
    {
        private $name;
        private $nb;
        

 
        
        public function __construct($name,$nb)
        {
            $this->name=$name;
            $this->nb=$nb;
            

        }
         function getname(){
            return $this->name;
        }    
    
        function getnb(){
            return $this->nb;
        }  


        
        function setname($name)
        {
            return $this->name=$name;
        }    
    
        function setnb($nb){
            return $this->nb=$nb;
        }  



function ajouterstock($stock){
            
            
                   $name=$stock->getname();
                    $nb=$stock->getnb();
                    
            
                     $sql="insert into stock (name,nbproduit) values (:name,:nb)";
                $db=config::getConnexion();
                try{        
                    
                        $req=$db->prepare($sql);

                        $req->bindValue(':name',$name);
                        $req->bindValue(':nb',$nb);
                        
                    

                        $req->execute();
                        }catch(Exception $e){
                                echo 'Erreur' .$e->getMessage();
                            }
        }





        function diminuerstock($stock,$name)
    {
        

                    $nb=$stock->getnb();
                 
            
                $sql="UPDATE stock SET name='$name',nbproduit='$nb' WHERE name='$name'";
       

                $db=config::getConnexion();
    
        
                if ($db->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    //echo "Error updating record: " . $conn->error;
                }

            }





}
















class panier
    {
        private $name;
        private $description;
        private $price;
        private $image;



        
        
        public function __construct($name,$description,$price,$image){
            $this->name=$name;
            $this->description=$description;
            $this->price=$price;
            $this->image=$image;

        }

    
    //getters
     
        function getName(){
            return $this->name;
        }    
    
        function getDescription(){
            return $this->description;
        }  
    
        function getPrice(){
                return $this->price;
            } 
    
        function getImage(){
                return $this->image;
            }  


    //setters
    
 
        
        function setName($name){
            return $this->name=$name;
        }    
    
        function setdecription($decription){
            return $this->decription=$decription;
        }  
    
        function setprice($price){
                return $this->price=$price;
            } 
    
        function setimage($image){
                return $this->image=$image;
            }  
  

        function ajouterpanier($panier)
        {
            
            
                   $name=$panier->getName();
                    $description=$panier->getDescription();
                    $price=$panier->getPrice();
                    $image=$panier->getImage();
            
                     $sql="insert into panier (name,description,price,image) values (:name,:description,:price,:image)";
                $db=config::getConnexion();
                try
                {        
                    
                        $req=$db->prepare($sql);

                        $req->bindValue(':name',$name);
                        $req->bindValue(':description',$description);
                        $req->bindValue(':price',$price);
                        $req->bindValue(':image',$image);
                    

                        $req->execute();
                    }
                        catch(Exception $e)
                       {
                            echo 'Erreur' .$e->getMessage();
          }                  }
        


function updatepanier($n,$name)
    {
        

             
            
            
                $sql="UPDATE panier SET nb ='$n' WHERE name='$name'";
       

                $db=config::getConnexion();
    
        
                if ($db->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    //echo "Error updating record: " . $conn->error;
                }

            }


}




?>