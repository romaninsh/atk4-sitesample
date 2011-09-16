<?php
class Application extends ApiFrontend {
    function init(){
        parent::init();

        $this->add('jUI');

        $this->add('Menu_Light',null,'LightMenu');
    }
}
