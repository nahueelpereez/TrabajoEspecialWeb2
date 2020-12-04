<?php
require_once('Model/ComentariosModel.php');
require_once('./api/ApiView.php');
require_once('./api/ComentariosApiController.php');

abstract class ApiController{
    protected $model;
    protected $view;
    private $data;

    public function __construct(){
        $this->model = new ComentariosModel();
        $this->view = new ApiView();
        $this->data = file_get_contents("php://input");
    }

    function getData(){
        return json_decode($this->data); 
    }
}