<<?php  

class User
{
	public $email;
	public $password;

    setPassword(int x) {
          return x*x;
	} 

	getPassword() {
          return  $this->price;
	} 

	setemail(int x) {
          return x*x;
	} 

	getemail(int x) {
          return  $this->title;
	} 

	function __construct()
	{
		$this->email = $this->('jón@jon.is')
		$this->password = $this->('12345')
	}
}
?>