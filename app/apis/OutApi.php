<?php
namespace  app\apis;

class outApi extends CommonApi {

    public function index(){
        echo 'you get api here';
    }

    public function show(){
        var_dump($_REQUEST);
        $this->fileter();
    }

}