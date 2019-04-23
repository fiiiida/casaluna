<?PHP
class Livraison{
	private $id_liv;
	private $numcom;
	private $nomclient;
	private $prenomc;
	private $numclient;
	private $numadress;
	private $nomrue;
	private $nomville;
	private $nomgouv;
	private $prixlivraison;
	private $prixcomm;
	private $prixtotal;
	private $cinlivreur;
	private $datelivraison;

	function __construct($id_liv,$numcom,$nomclient,$prenomc,$numclient,$numadress,$nomrue,$nomville,$nomgouv,$prixlivraison,$prixcomm,$prixtotal,$cinlivreur,$datelivraison){

		$this->id_liv=$id_liv;
		$this->numcom=$numcom;
		$this->nomclient=$nomclient;
		$this->prenomc=$prenomc;
		$this->numclient=$numclient;
		$this->numadress=$numadress;
		$this->nomrue=$nomrue;
		$this->nomville=$nomville;
		$this->nomgouv=$nomgouv;
		$this->prixlivraison=$prixlivraison;
		$this->prixcomm=$prixcomm;
		$this->prixtotal=$prixtotal;
		$this->cinlivreur=$cinlivreur;
		$this->datelivraison=$datelivraison;
	}
	
	function getid_liv(){
		return $this->id_liv;
	}
	function getNumcom(){
		return $this->numcom;
	}
	function getNomclient(){
		return $this->nomclient;
	}
	function getPrenomc(){
		return $this->prenomc;
	}
	function getNumclient(){
		return $this->numclient;
	}
	function getnumadress(){
		return $this->numadress;
	}
	function getNomrue(){
		return $this->nomrue;
	}
	function getNomville(){
		return $this->nomville;
	}
	function getNomgouv(){
		return $this->nomgouv;
	}
	function getPrixlivraison(){
		return $this->prixlivraison;
	}
	function getPrixcomm(){
		return $this->prixcomm;
	}
	function getPrixtotal(){
		return $this->prixtotal;
	}
	function getCinlivreur(){
		return $this->cinlivreur;
	}
	function getDatelivraison(){
		return $this->datelivraison;
	}



	function setid_liv($id_liv){
		$this->id_liv=$id_liv;
	}
	function setNomclient($nomclient){
		$this->nomclient=$nomclient;
	}
	function setPrenomc($prenomc){
		$this->prenomc=$prenomc;
	}
	function setNumclient($numclient){
		$this->numclient=$numclient;
	}
	function setNumadress($numadress){
		$this->numadress=$numadress;
	}
	function setNomrue($nomrue){
		$this->nomrue=$nomrue;
	}
	function setNomville($nomville){
		$this->nomville=$nomville;
	}
	function setNomgouv($nomgouv){
		$this->nomgouv=$nomgouv;
	}
	function setPrixlivraison($prixlivraison){
		$this->prixlivraison=$prixlivraison;
	}
	function setPrixcomm($prixcomm){
		$this->prixcomm=$prixcomm;
	}
	function setPrixtotal($prixtotal){
		$this->prixtotal=$prixtotal;
	}
	function setCinlivreur($cinlivreur){
		$this->cinlivreur=$cinlivreur;
	}
	function setdatelivraison($datelivraison){
		$this->datelivraison=$datelivraison;
	}



	
}

?>