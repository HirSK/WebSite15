<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 7/25/2017
 * Time: 10:23 AM
 */
class Controller{

    public function model($model){
        require_once 'app/model/'.$model.'.php';
        return new $model();
    }

    public function view($view,$data=[]){
        require_once 'app/view/'.$view.'.php';
    }
}