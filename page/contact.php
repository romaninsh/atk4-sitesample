<?php
class page_Contact extends Page {
    function init(){
        parent::init();

        $form = $this->add('Form');
        $form->setFormClass('vertical');
        $form->addField('line','name');
        $form->addField('line','surname');
        $form->addField('text','message');
        $form->addSubmit();

        if($form->isSubmitted()){
            $form->js()->html('Thank You')->execute();
        }
    }
    function defaultTemplate(){
        return array('page/Contact');
    }
}
