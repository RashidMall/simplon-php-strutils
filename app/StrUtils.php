<?php 

class StrUtils{
    private $_str = "default text";

    public function __construct($str){
        $str = (string)$str;
        $this->_str = $str;
    }

    public function getStr(){
        return $this->_str;
    }

    public function bold(){
        if(!preg_match("^.*<strong>.*<\/strong>.*$", $this->_str)){
            $this->_str = '<strong>'. $this->_str .'</strong>';
        }
    }

    public function italic(){
        if(!preg_match("^.*<i>.*<\/i>.*$", $this->_str)){
            $this->_str = '<i>'. $this->_str .'</i>';
        }
    }

    public function underline(){
        if(!preg_match("^.*<u>.*<\/u>.*$", $this->_str)){
            $this->_str = '<u>'. $this->_str .'</u>';
        }
    }

    public function capitalize(){
        $this->_str = strtoupper($this->_str);
    }

    public function uglify(){
        $this->bold();
        $this->italic();
        $this->underline();
    }
}
?>