<?php 
include 'dbconfig.php';
class User{
	private $login;
    private $pwd;
	private $id;
    public $conn;	

	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getid()
	{
		return $this->id;
		
	}

	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from client where email='$login' && mdp='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>