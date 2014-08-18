<?php
class pessoalInstall extends classes\Classes\InstallPlugin{
    protected $dados = array(
        "pluglabel" => "Pessoal",
        "isdefault" => "n",
        "system"    => "n",
        "detalhes"  => "",
    );
     public function install(){return true;}
     public function unstall(){return true;}
}
