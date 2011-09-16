<?php
class Application extends ApiFrontend {
    function init(){
        parent::init();
        $this->add('Menu_Light',null,'LightMenu');
    }
}
