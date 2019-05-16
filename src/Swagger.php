<?php 
namespace Swagger;
class Swagger{
    private $config;
    public function __construct($config){
        $this->config = $config;
    }
    public function getJson($path){
        $openapi = \OpenApi\scan($path);
        return $openapi->toJSON();
    }
}
?>