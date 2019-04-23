<?PHP
class Livreur{
	private $idl;
	private $nom;
	private $prenom;
	private $cin;
	private $numass;
	private $num;
	private $numurg;
	private $mail;
	private $secteur;
	private $nombrelivraison;
	
	function __construct($idl,$nom,$prenom,$cin,$numass,$num,$numurg,$mail,$secteur,$disponibilite,$nombrelivraison){
		
		$this->idl=$idl;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->cin=$cin;
		$this->numass=$numass;
		$this->num=$num;
		$this->numurg=$numurg;
		$this->mail=$mail;
		$this->secteur=$secteur;
		$this->disponibilite=$disponibilite;
		$this->nombrelivraison=$nombrelivraison;
		
	}
	
	function getidl(){
		return $this->idl;
	}
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getnumass(){
		return $this->numass;
	}
	function getmail(){
		return $this->mail;
	}
	function getnum(){
		return $this->num;
	}
	function getnumurg(){
		return $this->numurg;
	}
	function getsecteur(){
		return $this->secteur;
	}
	function getdisponibilite(){
		return $this->disponibilite;
	}
	function getnombrelivraison(){
		return $this->nombrelivraison;
	}
	




	function setidl($idl){
		$this->idl=$idl;
	}
	function setCin($cin){
		$this->cin=$cin;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setnumass($numass){
		$this->numass=$numass;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function setnum($num){
		$this->num=$num;
	}
	function setnumurg($numurg){
		$this->numurg=$numurg;
	}
	function setsecteur($secteur){
		$this->secteur=$secteur;
	}
	function setdisponibilite($disponibilite){
		$this->disponibilite=$disponibilite;
	}
	function setnombrelivraison($nombrelivraison){
		$this->nombrelivraison=$nombrelivraison;
	}
	

	
}

?>