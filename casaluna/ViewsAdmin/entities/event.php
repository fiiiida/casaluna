<?PHP
class Event{
    private $id_event;
	private $nome;
    private $lieu;
    private $dateexpo;

	
	function __construct($id_event,$nome,$lieu,$dateexpo){
        $this->id_event=$id_event;
		$this->nome=$nome;
        $this->lieu=$lieu;
        $this->dateexpo=$dateexpo;

		
	}
    function getid_event(){
		return $this->id_event;
	}
	
	function getnome(){
		return $this->nome;
	}
    function getlieu(){
		return $this->lieu;
	}
    function getdateexpo(){
		return $this->dateexpo;
	}
    
	
function setid_event($id_event){
		$this->id_event=$id_event;
	}
	function setnome($nome){
		$this->nome=$nome;
	}
    function setlieu($lieu){
		$this->lieu=$lieu;
	}
    function setdateexpo($dateexpo){
		$this->dateexpo=$dateexpo;
	}
	
}

?>