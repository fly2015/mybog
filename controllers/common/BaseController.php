<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseController
 *
 * @author qu_hien
 */
abstract class BaseController {
    //put your code here
    abstract function invoke($action);
    
    abstract function view();
    
    abstract function add();
}
