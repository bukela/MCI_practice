<?php
const P = '<pre>';
const PP = '</pre>';
function pre ($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
const BR = '</br>';
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach ($ceu as $key=>$value) {
    echo "Country is {$key}, and capital is {$value}</br>";
}
$rang = array(range (10,200,10));
echo P;
print_r ($rang);
echo PP;

pre($rang);
?>