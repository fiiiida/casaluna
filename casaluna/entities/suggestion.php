<?PHP
class Suggestion{
	private $numSuggestion;
	private $idUtilisateur;
	private $date;
	private $localisation;
	private $Service;
	private $noteService;
	private $serviceGlobal;

	function __construct($numSuggestion,$idUtilisateur,$date,$localisation,$Service,$noteService,$serviceGlobal)
	{
		$this->numSuggestion=$numSuggestion;
		$this->idUtilisateur=$idUtilisateur;
		$this->date=$date;
		$this->localisation=$localisation;
		$this->Service=$Service;
		$this->noteService=$noteService;
		$this->serviceGlobal=$serviceGlobal;
	}
	
	function getnumSuggestion(){
		return $this->numSuggestion;
	}
	function getidUtilisateur(){
		return $this->idUtilisateur;
	}
	function getDate(){
		return $this->date;
	}
	function getLocalisation(){
		return $this->localisation;
	}
	function getService()
	{
		return $this->Service;
	}
	function getNoteService(){
		return $this->noteService;
	}
	function getServiceGlobal(){
		return $this->serviceGlobal;
	}
}
