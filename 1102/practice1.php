<?php
namespace MyProject;

$a = __LINE__;
$b = __FILE__;
$c = __DIR__;
$g =__NAMESPACE__;

echo "取得運行程式的行號 {$a}    <br>";
echo "取得文件在本機的路徑與檔名 {$a}    <br>";
echo "取得文件在本機的路徑(目錄) {$a}    <br>";

class test
{
    public function fun()
    {
      $d = __FUNCTION__;
      echo "取得的函數名稱{$d}    <br>";
    }
    public function meth()
    {
      $e = __CLASS__;
      $f = __METHOD__;
      echo "取得類別的名稱 {$e}    <br>";
      echo "取得類別方法的名稱 {$f}    <br>";

    }

}
$obj = new test;
$obj ->fun();
$obj ->meth();

echo "取得區分大小的命名空間名稱";
?>