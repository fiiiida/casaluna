<?PHP
class Event{
    private $id_event;
	private $nome;
    private $lieu;
    private $img_event;
    private $dateexpo;

	
	function __construct($id_event,$nome,$lieu,$img_event,$dateexpo){
        $this->id_event=$id_event;
		$this->nome=$nome;
        $this->lieu=$lieu;
        $this->img_event=$img_event;
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
	function getimg_event(){
		return $this->img_event;
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
	    function setimg_event($img_event){
		$this->img_event=$img_event;
	}
	
}

?>