<?php
Class Form {
    var $fields=Array();
    var $action;
    var $submit=" ";
    var $jumfield=0;

    function __construct($action,$submit){
        $this->action=$action;
        $this->submit=$submit;
    }

    function DisplayForm(){
        echo"<form action='".$this->action."'method='post'>";
        echo"<table width = '100%'>";
        for ($i=0;$i<$this->jumfield;$i++)
        {
        echo"<tr>
           <td align='right'>".$this->fields[$i]['label']."</td>";
        echo"<td><input type='text' name='".$this->fields[$i]['name']."'></td>
             </tr>";
        }
        echo"<tr>
            <td><input type='submit' name='tombol' value='".$this->submit."'></td>
            </tr>";
        echo"</table>";
    }

    function Addfield($name,$label){
        $this->fields[$this->jumfield]['name']=$name;
        $this->fields[$this->jumfield]['label']=$label;
        $this->jumfield++;
    }

    function GetData(){
        for ($i=0;$i<$this->jumField;$i++)
    {
       $data[$i]=$_POST[$this->fields[$i]['name']];
    }
    return $data;
}
}
?>