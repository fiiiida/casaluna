<?PHP
class check{
	private $id;
	private $uid;
	private $firstname;
	private $lastname;
	private $address1;
	private $country;
	private $zip;
	private $email;
	private $mobile;
	function __construct($id,$uid,$firstname,$lastname,$address1,$country,$zip,$email,$mobile){
		$this->id=$id;
		$this->uid=$uid;
		$this->firstname=$firstname;
		$this->lastnamee=$lastname;
		$this->address1=$address1;
		$this->country=$country;
		$this->zip=$zip;
		$this->email=$email;
		$this->mobile=$mobile;
	}
	
	function getid(){
		return $this->id;
	}
	function getuid(){
		return $this->uid;
	}
	function getfirstname(){
		return $this->firstname;
	}
	function getlastname(){
		return $this->lastname;
	}
	function getadress(){
		return $this->address1;
	}
    function getcountry(){
		return $this->country;
	}
	function getzip(){
		return $this->zip;
	}
	function getemail(){
		return $this->email;
	}
	function getmobile(){
		return $this->mobile;
	}
	function setid(){
		return $this->id;
	}
	function setuid(){
		return $this->uid;
	}
	function setfirstname(){
		return $this->firstname;
	}
	function setlastname(){
		return $this->lastname;
	}
	function setadress(){
		return $this->address1;
	}
    function setcountry(){
		return $this->country;
	}
	function setzip(){
		return $this->zip;
	}
	function setemail(){
		return $this->email;
	}
	function setmobile(){
		return $this->mobile;
	}
	
}

?>