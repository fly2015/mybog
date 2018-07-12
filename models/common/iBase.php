<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author qu_hien
 */
interface iBase {
    //put your code here
    function getByNumberPage($page);
    function getAll();
    
    function getById($id);

    function getBySlug($slug);

    function getByName($name);
    function delete($id);
}
