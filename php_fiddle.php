<?php
const P = '<pre>';
const PP = '</pre>';
function pre ($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
const BR = "</br>";

$img_dir = 'images';

class User {
    const BR = "</br>";
    protected $name;
    protected $age;
    protected $dir = 'images/';
    protected $photo;
    public function print_user(){
        echo "User : ".$this->name.self::BR;
        echo "Age : ".$this->age.self::BR;
        echo "User image : <img src = '{$this->dir}{$this->photo}' />".self::BR;
    }
    public function set_user($name,$age,$photo) {
        $this->name=$name;
        $this->age=$age;
        $this->photo=$photo;
    }

}

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach ($ceu as $key=>$value) {
    echo "Country is {$key}, and capital is {$value}".BR;
}

$rang = array (range(10,200,10));

pre($rang);

$boo = new User;

$boo->set_user('mire',44,'info.png');
echo $boo->print_user();
$boo->set_user('daniel',43,'folder.png');
echo $boo->print_user();
$boo->set_user('biki',24,'add.png');
echo $boo->print_user();
$boo->set_user('loodii',121,'clock.png');
echo $boo->print_user();
?>