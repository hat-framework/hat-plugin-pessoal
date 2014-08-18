<?php 
class pessoal_tipotelefoneData extends \classes\Model\DataModel{
    public $dados  = array(
         'cod' => array(
	    'name'     => 'Código',
	    'type'     => 'int',
	    'pkey'    => true,
	    'ai'      => true,
	    'grid'    => true,
	    'display' => true,
	    'private' => true
        ),
         'tipo' => array(
	    'name'     => 'Tipo',
	    'type'     => 'varchar',
	    'size'     => '32',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Tipotelefone'),);
}