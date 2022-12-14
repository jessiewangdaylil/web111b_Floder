<?php
class ParentClass
{
    protected $field1;
    public function __construct($value)
    {
        $this->field1 = $value;
        echo '建立物件成功時將field1 的值設定為' . $this->field1 . "<br>";
    }

    public function __destruct()
    {
        $this->field1 = 0;
        echo '釋放物件成功時將field1 的值設定為' . $this->field1 . "<br>";
    }

}
class ChildClass extends ParentClass
{
    protected $field2;
    public function __construct($value)
    {
        $this->field2 = $value;
        echo '建立物件成功時將field2 的值設定為' . $this->field2 . "<br>";
    }

    public function __destruct()
    {
        $this->field2 = 0;
        echo '釋放物件成功時將field2 的值設定為' . $this->field2 . "<br>";
    }
}
$myObject = new ChildClass(100);
$myObject = null;