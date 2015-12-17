<?php

namespace app\controllers;

use mako\http\routing\Controller;
use mako\view\ViewFactory;

/**
 * Welcome controller.
 */

class Home extends Controller
{
    /**
     * Welcome route.
     *
     * @access  public
     * @param   \mako\view\ViewFactory  $view  View factory
     * @return  string
     */

    public function index(ViewFactory $view)
    {
        return $view->create('home/index');
    }
}