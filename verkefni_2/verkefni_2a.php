<<?php  

class Book
{
	public $title;
	public $price;

    setPrice(int x) {
          return x*x;
	} 

	getPrice() {
          return  $this->price;
	} 

	setTitle(int x) {
          return x*x;
	} 

	getTitle(int x) {
          return  $this->title;
	} 

	function __construct()
	{
		$this->title = $this->('jón')
		$this->price = $this->('1200')
	}
}

class extra extends Book
{
	public publisher;

	setPublisher(int x) {
          return x*x;
	} 

    getPublisher() {
          return  $this->publisher ;
	}
}

$efnafraedi = new extra;
$staerfraedi = new extra;
$islenska = new extra;

$efnafraedi->title = 'Efnfræðibók';
$efnafraedi->price = '5000';
$efnafraedi->publisher = 'BókaBækur';

$staerfraedi->title = 'Stærfræðibók';
$staerfraedi->price = '4999';
$staerfraedi->publisher = 'BókaBækur';

$efnafraedi->title = 'Íslenksubók';
$efnafraedi->price = '5500';
$efnafraedi->publisher = 'BestuBækur';

echo $efnafraedi->getPrice;
?>