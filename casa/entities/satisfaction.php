<?PHP
class Satisfaction{
	
	private $cin_livreur;
	private $num_com;
	private $Satisfaction;
	private $score;
	
	
	function __construct($cin_livreur,$num_com,$satisfaction,$score){
		
		$this->cin_livreur=$satisfaction_livreur;
		$this->num_com=$num_com;
		$this->satisfaction=$satisfaction;
		$this->score=$score;
		
		
	}
	
	function getsatisfaction(){
		return $this->satisfaction;
	}
	function getcin_livreur(){
		return $this->satisfaction_livreur;
	}
	function getnum_com(){
		return $this->num_com;
	}
	function getscore(){
		return $this->score;
	}
	
	
	function setsatisfaction($satisfaction){
		$this->satisfaction=$satisfaction;
	}

	function setcin_livreur(cin_livreur){
		$this->cin_livreur=$cin_livreur;
	}
	function setnum_com($num_com){
		$this->num_com;
	}
	function setscore($score){
		$this->score=$score;
	}
	
	

	
}

?>