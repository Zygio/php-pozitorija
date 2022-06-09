<?php
class User{
    public $name; //Objekto ypatybe
    public $email;
    public $role;
    public function showUserData(){ //Metodas, kuris grazina user masyva
        return[
            $this->name, //reference i konkretaus objekto savybe
            $this->email,
            $this->role
        ];
    }
    public function showName(){
        return $this->name;
    }
}
//Pirmas vartotojas
$userOne = new User(); //Sukuriame nauja objekta
$userOne->name = 'Jonas'; //Priskiriam obejkto ypatybei reiksme
$userOne->email = 'jonas@gmail.com'; //Priskiriam obejkto ypatybei reiksme
$userOne->role = 'Admin'; //Priskiriam obejkto ypatybei reiksme
echo "Vartotojo vardas yra:". $userOne->showName();
foreach($userOne->showUserData() as $data){
    echo "$data</br>";
}
//antras vartotojas
$userOne = new User(); //Sukuriame nauja objekta
$userOne->name = 'Petras'; //Priskiriam obejkto ypatybei reiksme
$userOne->email = 'petrass@gmail.com'; //Priskiriam obejkto ypatybei reiksme
$userOne->role = 'sale person'; //Priskiriam obejkto ypatybei reiksme
echo "Vartotojo vardas yra:". $userOne->showName();
foreach($userTwo->showUserData() as $data){
    echo "$data</br>";
}
//trecias vartotojas
$userOne = new User(); //Sukuriame nauja objekta
$userOne->name = 'Antanas'; //Priskiriam obejkto ypatybei reiksme
$userOne->email = 'Antanas@gmail.com'; //Priskiriam obejkto ypatybei reiksme
$userOne->role = 'sale person'; //Priskiriam obejkto ypatybei reiksme
echo "Vartotojo vardas yra:". $userOne->showName();
foreach($userThree->showUserData() as $data){
    echo "$data</br>";
}
