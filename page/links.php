<?php
class page_Links extends Page {
    function init(){
        parent::init();

        $links=array(
                array('domain'=>'www.yahoo.com','name'=>'Yahoo'),
                array('domain'=>'www.google.com','name'=>'Google'),
                array('domain'=>'www.agiletoolkit.org','name'=>'Agile Toolkit'),
                );

        $this->add('Lister',null,'Links','Links')
            ->setStaticSource($links);
    }
    function defaultTemplate(){
        return array('page/Links');
    }
}
