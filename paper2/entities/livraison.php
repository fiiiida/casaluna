<?PHP
class Livraison{
	
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
	
	function __construct( $numcom, $nomclient, $prenomc, $numclient, $numadress, $nomrue, $nomville, $nomgouv, $prixlivraison, $prixcomm, $cinlivreur,$prixtotal, $datelivraison){
		
		$this->numcom=$numcom;
		$this->nomclient=$nomclient;
		$this->prenomc=$prenomc;
		$this->numclient=$numclient;
		$this->numadress=$numadress;
		$this->nomville=$nomville;
		$this->nomrue=$nomrue;
		$this->nomgouv=$nomgouv;
		$this->prixlivraison=$prixlivraison;
		$this->prixcomm=$prixcomm;
		$this->prixtotal=$prixtotal;
		$this->cinlivreur=$cinlivreur;
		$this->datelivraison=$datelivraison;
		
	}
	
       
    
	
	function getnumcom(){
		return $this->numcom;
	}
	function getnomclient(){
		return $this->nomclient;
	}
	function getprenomc(){
		return $this->prenomc;
	}
	function getnumclient(){
		return $this->numclient;
	}
	function getnumadress(){
		return $this->numadress;
	}
	function getnomrue(){
		return $this->nomrue;
	}
	function getnomville(){
		return $this->nomville;
	}
	function getnomgouv(){
		return $this->getnomgouv;
	}
	function getprixlivraison(){
		return $this->prixlivraison;
	}
	function getprixcomm(){
		return $this->prixcomm;
	}
	function getprixtotal(){
		return $this->prixtotal;
	}
	
	function getcinlivreur(){
		return $this->cinlivreurn;
	}
	function getdatelivraison(){
		return $this->datelivraison;
	}
	
	
	function setnumcom($numcom){
		$this->numcom=$numcom;
	}

	function setNom($nomclient){
		$this->nomclient=$nomclient;
	}
	function setprenomc($prenomc){
		$this->prenomc=$prenomc;
	}
	function setnumadress($numadress){
		$this->numadress=$numadress;
	}
	function setnomrue($nomrue){
		$this->nomrue=$nomrue;
	}
	function setnomville($nomville){
		$this->nomville=$nomville;
	}
	function setprixlivraison($prixlivraison){
		$this->prixlivraison=$prixlivraison;
	}
	function setprixcomm($prixcomm){
		$this->prixcomm=$prixcomm;
	}
	function setprixtotal($prixtotal){
		$this->prixtotal=$prixtotal;
	}
	function setcinlivreur($cinlivreur){
		$this->cinlivreur=$cinlivreur;
	}
	function setnomgouv($nomgouv){
		$this->nomgouv=$nomgouv;
	}
	function setdatelivraison($datelivraison){
		$this->datelivraison=$datelivraison;
	}
	function setnumclient($numclient){
		$this->numclient=$numclient;
	}
	

	
}

?>