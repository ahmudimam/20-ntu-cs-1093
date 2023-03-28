<?php
class Loan
{
    protected $name;
    protected $loanNo;
    protected $amount;

    public function __construct($name,$loanNo,$amount)
    {
        $this->name = $name;
        $this->loanNo = $loanNo;
        $this->amount = $amount;
    }
    protected function display()
    {
        echo "Name:",$this->name;
        echo "<br>";
        echo "Loan Number:",$this->loanNo;
        echo "<br>";
        echo "Amount:",$this->amount;
        echo "<br>";
    }

}


class Autoloan extends Loan
{
    private $autoType;
    public function __construct($name,$loanNo,$amount,$autoType)
    {
        parent::__construct($name,$loanNo,$amount);
        $this->autoType = $autoType;
    }
    public function display()
    {
        parent::display();
        echo "Autotype:",$this->autoType;
    } 

}
class Homeloan extends Loan
{
    private $roomCount;
    private $floorCount;

    public function __construct($name,$loanNo,$amount,$roomCount,$floorCount)
    {
        parent::__construct($name,$loanNo,$amount);
        $this->roomCount = $roomCount;
        $this->floorCount = $floorCount;
    }
    public function display()
    {
        parent::display();
        echo "RoomCount:",$this->roomCount;
        echo "<br>";
        echo "FloorCount:",$this->floorCount;
    } 
}
echo "LAB-9 QUESTION-1<br>";
echo "<br>---Autoloan Object--- <br><br>";
$obj1 = new Autoloan('ali',1,100,'car');
$obj1->display();
echo "<br><br>---Homeloan Object--- <br><br>";
$obj2 = new Homeloan('ali',1,100,5,2);
$obj2->display();
?>