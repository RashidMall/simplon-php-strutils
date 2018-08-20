<?php include './app/StrUtils.php' ?>

<?php
class StrUtilsTest extends \PHPUnit\Framework\TestCase{

    public function testThatConstructorCanSetString(){
        $mystring = 'Hello World';
        $strut = new StrUtils($mystring);

        $this->assertEquals($strut->getStr(), $mystring);

    }

    public function testThatBoldMethodDetectsBoldString(){
        $mystring = '<p><b>Hello World</B></p>';
        $strut = new StrUtils($mystring);
    }
} 
?>