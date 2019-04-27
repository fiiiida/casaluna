<?PHP
class client{
	private $cin;
	private $nom;
	private $prenom;
	private $sexe;
	private $email;
	private $date_naissance;
	private $tel_portable;
	private $adresse;
	private $code_postal;
	private $password;
	private $image;
	private $etat;
	function __construct($cin, $nom, $prenom, $sexe, $email, $date_naissance, $tel_portable, $adresse, $code_postal, $password,
	 $image, $etat){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->sexe=$sexe;
		$this->email=$email;
		$this->date_naissance=$date_naissance;
		$this->tel_portable=$tel_portable;
		$this->adresse=$adresse;
		$this->code_postal=$code_postal;
		$this->password=$password;
		$this->image=$image;
		$this->etat=$etat;
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
	function getsexe(){
		return $this->sexe;
	}
	function getemail(){
		return $this->email;
	}
	function getdate_naissance(){
		return $this->date_naissance;
	}
	function gettel_portable(){
		return $this->tel_portable;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getcode_postal(){
		return $this->code_postal;
	}
	function getpassword(){
		return $this->password;
	}
	function getimage(){
		return $this->image;
	}
	function getetat(){
		return $this->etat;
	}
	function setCin($cin){
		$this->nom=$nom;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setsexe($sexe){
		$this->sexe=$sexe;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setdate_naissance($date_naissance){
		$this->date_naissance=$date_naissance;
	}
	function settel_portable($tel_portable){
		$this->tel_portable=$tel_portable;
	}
	function setadresse($adresse){
		$this->adresse=$adresse;
	}
	function setcode_postal($code_postal){
		$this->code_postal=$code_postal;
	}
	function setpassword($password){
		$this->password=$password;
	}
	function setimage($image){
		$this->image=$image;
	}
	function setetat($etat){
		$this->etat=$etat;
	}

	
}

?>