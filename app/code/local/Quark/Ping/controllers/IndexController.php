<?php

class Quark_Ping_IndexController extends Mage_Core_Controller_Front_Action
{
    public function preDispatch()
    {
        $this->getLayout()->setArea($this->_currentArea);
        $this->setFlag('', self::FLAG_NO_START_SESSION, 1); // Do not start standard session
        $this->setFlag('', self::FLAG_NO_PRE_DISPATCH, 1);
        $this->setFlag('', self::FLAG_NO_POST_DISPATCH, 1);
        parent::preDispatch();
        return $this;
    }
    
    /**
     * Index action
     */
    public function indexAction()
    {
        die('Pong');
    }

}
