<?php
namespace  app\apis;
use Pheasant;
use Aura\Filter\FilterFactory;

class CommonApi{

    private $config;

    public function __construct()
    {
        $this->LoadConfig();
        $this->initDb();
    }

    public function LoadConfig(){
        $this->config = require  APP_ROOT . '/config/base.php';
    }

    public function initDb(){
        Pheasant::setup($this->config['dsn']);
    }

    public function fileter(){
        $filter_factory = new FilterFactory();

        $filter = $filter_factory->newSubjectFilter();

        $result = $filter->validate($_REQUEST)->getArgs();
        var_dump($result);
    }

}