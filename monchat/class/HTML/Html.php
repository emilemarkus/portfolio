<?php

namespace Chatbox\HTML ;


class Html{

    /* function warpping line with tag
    @param string(tag) - string (strline) line to warp
    */
    public static function warp($tag,$strline){
        return "<{$tag}>".$strline."<{$tag}>";
    }

    /* function create div tag
    @param string(id) and string(class) and array(attributs)
    */


    private function returnArray($arrayOptions){
        $options="";
        foreach ($arrayOptions as $key => $value) {
            $options.=$key."=\"".$value."\"";
        }
        return $options;
    }

    public function openDiv($id=null,$class=null,$attr=null){
        $line = "<div ";
        if($id){$line.=" id=\"".$id."\"";}
        if($class){$line.=" class=\"".$class."\"";}
        if($attr){
            $line.=$this->returnArray($attr);
        }
        $line.=">";
        return $line;
    }
    public static function closeDiv(){
        return "</div>";
    }

    public static function h($size=4,$class=null,$text){
        $line="<h".$size." ";
        if($class){$line.=" class=\"".$class."\"";}
        $line.=">".$text."</h".$size.">";
        return $line;
    }

    public static function label($id,$texte){
        return "<label for=\"".$id."\">".$texte."</label>";
    }

}
?>