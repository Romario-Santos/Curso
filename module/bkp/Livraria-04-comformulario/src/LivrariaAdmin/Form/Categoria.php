<?php
namespace LivrariaAdmin\Form;
use Zend\Form\Form;
class Categoria  extends Form{
  public function __construct($name = null){
      parent::__construct('categoria');
      
      $this->setAttribute('method', 'post');
      $this->setInputFilter(new CategoriaFilter);
      
      $this->add(array(
          'name' =>'id',
          'attributes' => array(
              'tipe' => 'hidden'
          )
      ));
      
      $this->add(array(
          'name' => 'nome',
          'options' => array(
              'type' =>'text',
              'label' => 'Nome'
              
          ),
          'attributes' =>array(
              'id' => 'nome',
              'placeholder'=> 'Entre com o Nome'
          )
      ));
      $this->add(array(
          'name' => 'submit',
          'tipe' => 'end\Form\Element\Submit',
          'attributes' => array(
              'value' => 'Salvar',
              'class' => 'btn-success'
          )
      ));
  }
}
