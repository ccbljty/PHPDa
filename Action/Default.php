<?php
/**
 * Author: changchunboeisr@163.com
 * Date: 17-1-13
 * Time: 下午4:01
 */
class Action_Default extends Library_Interface_Action {

    protected function checkParams($params)
    {
        // TODO: Implement checkParams() method.
        return true;
    }

    public function execute()
    {
        $msg = array(
            'welcome' => 'Welcome to PHPDa',
            'description' => 'PHPDa is a server-side framework that is very lightweight and simple',
            'author' => 'changchunboeisr@163.com',
        );
        $this->put($msg);
    }
}