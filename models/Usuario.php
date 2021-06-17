
<?php 

Class Usuario{

	private int $id=0;
	private string $name="";
	private string $email="";
	private string $pass="";
	private string $phone = "";
	private string $profile ="user";

	public function getId():int{
		return $this->id;
	}
	public function setId(int $id){
		$this->id = $id;
	}
	public function getName():string {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function  getEmail():string  {
		return $this->email;
	}
	public function setEmail(string $email) {
		$this->email = $email;
	}
	public function getPass():string  {
		return $this->pass;
	}
	public function setPass(string $pass) {
		$this->pass = $pass;
	}
	public function  getPhone():string {
		return $this->phone;
	}
	public function setPhone(string $phone) {
		$this->phone = $phone;
	}
	public function getProfile():string  {
		return $this->profile;
	}
	public function setProfile(string $profile) {
		$this->profile = $profile;
	}


}

?>