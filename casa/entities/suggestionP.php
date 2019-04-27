<?PHP
class suggestionP{
	private $num;
	private $idUtilisateur;
	private $date;
	private $sujet;
	private $commentaire;
	
	function __construct($num,$idUtilisateur,$date,$sujet,$commentaire)
	{
		$this->num=$num;
		$this->idUtilisateur=$idUtilisateur;
		$this->date=$date;
		$this->sujet=$sujet;
		$this->commentaire=$commentaire;
		
	}
	
	function getNum(){
		return $this->num;
	}
	function getidUtilisateur(){
		return $this->idUtilisateur;
	}
	function getDate(){
		return $this->date;
	}
	function getSujet(){
		return $this->sujet;
	}
	function getCommentaire()
	{
		return $this->commentaire;
	}
}
