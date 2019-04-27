<?PHP
class reclamation{
	private $numReclamation;
	private $idUtilisateurr;
	private $sujetReclamation;
	private $commentaireReclamation;
	private $date;
	
	function __construct($numReclamation,$idUtilisateurr,$sujetReclamation,$commentaireReclamation,$date)
	{
		$this->numReclamation=$numReclamation;
		$this->idUtilisateurr=$idUtilisateurr;
		$this->sujetReclamation=$sujetReclamation;
		$this->commentaireReclamation=$commentaireReclamation;
		$this->date=$date;
		
	}
	
	function getnumReclamation(){
		return $this->numReclamation;
	}
	function getidUtilisateur(){
		return $this->idUtilisateurr;
	}
	function getSujetReclamation(){
		return $this->sujetReclamation;
	}
	function getCommentaireReclamation(){
		return $this->commentaireReclamation;
	}
	function getDate()
	{
		return $this->date;
	}
}
