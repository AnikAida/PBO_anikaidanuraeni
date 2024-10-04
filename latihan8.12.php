<?php
class employee
{
    private $firts_name;
    private $last_name;
    private $age;

    public function __construct($firts_name,$last_name,$age)
    {
        $this->firts_name=$firts_name;
        $this->last_name=$last_name;
        $this->age=$age;
    }
    public function getFisrtName()
    {
        return $this->firts_name;
    }
    public function getLastName()
    {
        return $this->last_name;
    }
    public function getAge()
    {
        return $this->age;
    }
}
?>

<?php
$objEmployeeOne=new employee('Bob','Smith',30);
echo $objEmployeeOne->getFisrtName();
echo $objEmployeeOne->getLastName();
echo $objEmployeeOne->getAge();

$objEmployeeTwo =new employee('Jhon', 'Smith',34);

echo $objEmployeeTwo->getFisrtName();
echo $objEmployeeTwo->getLastName();
echo $objEmployeeTwo->getAge();
?>