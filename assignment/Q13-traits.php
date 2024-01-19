<?php

trait  A
{
    function t1()
    {
        echo"t1<br>";
    }
}

trait  B
{
    function t2()
    {
        echo"t2<br>";
    }
}

class C
{
    use A,B;

    function t3()
    {
        echo"t3<br>";
    }
}
$ob=new c;
$ob->t3();
$ob->t2();
$ob->t1();

?>