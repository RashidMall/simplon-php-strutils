<?php include './app/StrUtils.php' ?>

<?php
class StrUtilsTest extends \PHPUnit\Framework\TestCase{

    public function testThatConstructorCanSetString(){
        $mystring = 'Hello World';
        $strut = new StrUtils($mystring);

        $this->assertEquals($strut->getStr(), $mystring);

    }

    // bold()
    public function testThatBoldMethodDetectsBoldString(){
        $mystring = '<p><STRONG>Hello World</STRONG></p>';
        $strut = new StrUtils($mystring);
        $strut->bold();

        $this->assertContains('<strong>', $strut->getStr(), '', true);
    }

    public function testThatStringHasStrongTags(){
        $mystring = 'Hello World!';
        $strut = new StrUtils($mystring);
        $strut->bold();

        $this->assertEquals('<strong>Hello World!</strong>', $strut->getStr());
    }

    // italic()
    public function testThatItalicMethodDetectsItalicString(){
        $mystring = '<p><I>Hello World</I></p>';
        $strut = new StrUtils($mystring);
        $strut->italic();

        $this->assertContains('<i>', $strut->getStr(), '', true);
    }

    public function testThatStringHasITags(){
        $mystring = 'Hello World!';
        $strut = new StrUtils($mystring);
        $strut->italic();

        $this->assertEquals('<i>Hello World!</i>', $strut->getStr());
    }

    // underline()
    public function testThatUnderlineMethodDetectsUnderlineString(){
        $mystring = '<p><U>Hello World</U></p>';
        $strut = new StrUtils($mystring);
        $strut->underline();

        $this->assertContains('<u>', $strut->getStr(), '', true);
    }

    public function testThatStringHasUTags(){
        $mystring = 'Hello World!';
        $strut = new StrUtils($mystring);
        $strut->underline();

        $this->assertEquals('<u>Hello World!</u>', $strut->getStr());
    }

    // capitalize()
    public function testThatAllCharactersInStringAreUppercase(){
        $mystring = 'hello world!';
        $strut = new StrUtils($mystring);
        $strut->capitalize();

        $this->assertEquals('HELLO WORLD!', $strut->getStr());
    }

    // uglify()
    public function test_that_string_has_strong_i_u_tags(){
        $mystring = 'Hello World!';
        $strut = new StrUtils($mystring);
        $strut->uglify();

        $this->assertEquals('<u><i><strong>Hello World!</strong></i></u>', $strut->getStr());
    }
} 
?>