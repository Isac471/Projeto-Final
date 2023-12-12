<?php

require_once "../../models/FutebolModel.php";

class FutebolController {

    private $model;

    function __construct()
    {
        $this->model = new FutebolModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Futebol $c) {
        return $this->model->create($c);
    }

    public function edit(Futebol $c) {
        return $this->model->update($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}