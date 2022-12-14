<?php
class Father
{
    public $pubpro = '父類別公開的屬性';
    protected $protecPro = '父類別受保護的屬性';
    private $priPro = '父類別私有的屬性';
    public function fatherPublicPut()
    {
        echo $this->pubpro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "<br>";
    }
    protected function fatherProtectPut()
    {
        echo $this->pubpro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "<br>";
    }
    private function fatherPrivatePut()
    {
        echo $this->pubpro . "<br>";
        echo $this->protecPro . "<br>";
        echo $this->priPro . "<br>";
    }

}
class Son extends Father
{
    public function SonselfPut()
    {
        echo $this->pubpro . "<br>";
        echo $this->protecPro . "<br>";
        // echo $this->priPro . "<br>";
    }
}
echo 'father' . "<br>";
$father = new Father;
echo $father->pubpro . "<br>"; //ok
// echo $father->protecPro . "<br>"; //NG
// echo $father->priPro . "<br>"; //NG

echo $father->fatherPublicPut() . "<br>"; //ok
// echo $father->fatherProtectPut() . "<br>"; //NG
// echo $father->fatherPrivatePut() . "<br>"; //NG
echo 'son' . "<br>";
$son = new Son;
echo $son->pubpro . "<br>"; //ok
// echo $son->protecPro . "<br>"; //NG
// echo $son->priPro . "<br>"; //NG

echo $son->fatherPublicPut() . "<br>"; //ok
// echo $son->fatherProtectPut() . "<br>"; //NG
// echo $son->fatherPrivatePut() . "<br>"; //NG
echo $son->SonselfPut() . "<br>"; //Public Ok Protect Ok  PrivateNG -> fun NG