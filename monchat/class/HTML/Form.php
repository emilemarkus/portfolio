<?php

namespace  Chatbox\HTML;

class Form{

    public function __construct($datas){
        $this->data = $datas;
    }

    private function getData($index){        
        if ( isset( $this->data[$index] ) ) {
            return $this->data[$index];
        }
    }


    /* class open Formulare
       @param string,string,string(link),string
       return string
    */
    public static function openForm($id=null,$name="form",$action,$method="post",$enctype=null){
        echo $enctype;
        $line =  "<form ";
        if($id){$line.="id=\"".$id."\"";}
        $line.=" name=\"".$name."\" action=\"".$action."\" method=\"".$method."\"";
        if($enctype){$line.=" enctype=\"".$enctype."\">";}else {$line.=">";}
        return $line;
    }
    /* class close Formulare
       @param null
       return string
    */
    public static function closeForm(){
        return "</form>";
    }

    /* class input
       @param string/string/string
       return string
    */
    public  function input($id,$name,$type){
        $line = "<input ";
        if($id){$line.=" id=\"".$id."\"";}
        if($this->getData($name) && $type!=="password"){$line.=" value=\"".$this->getData($name)."\"";}
        $line.=" name=\"".$name."\" type=\"".$type."\">";       
        return $line;
    }

    /* class input
       @param string/string/string
       return string
    */
    public static function submit($id=null,$class=null,$text="submit"){
        $line="<button";
        if($id){$line.=" id=\"".$id."\"";}
        $line.=" type=\"submit\"";
        if($class){$line.=" class=\"".$class."\">".$text."</button>";}
        return $line;
    }

}