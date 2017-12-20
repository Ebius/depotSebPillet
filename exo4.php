<?php
$nbPhoto=31;
if ($nbPhoto<=10){
    $price=$nbPhoto*0.1;
}elseif ($nbPhoto<=30){
    $price=1+(($nbPhoto-10)*0.08);
}elseif ($nbPhoto>=31){
    $price=2.6+(($nbPhoto-30)*0.05);
}
echo ("le prix est de " .$price. "€");