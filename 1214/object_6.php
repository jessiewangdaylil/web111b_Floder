<?php
class name
{
    // public $name = "Joe";
    public $name;
    public function getname()
    {
        return $this->name = "mick";
    }
    public function getnamebythis()
    {
        return $this->name;
    }
    public function getnamebyself()
    {
        return self::getname();
    }
}
class nameChild extends name
{
    public function getname()
    {
        return $this->name = "Jeff";
    }
}
$newname = new nameChild;
echo '1:' . $newname->getnamebythis() . '<br>';
echo '2:' . $newname->getnamebyself() . '<br>';
echo '3:' . $newname->getname() . '<br>';