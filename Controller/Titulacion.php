<?php
class Titulacion extends Controller
{
    public function index()
    {
        $this->views->getView($this, 'index');
    }

    public function descripcion()
    {
        $this->views->getView($this, 'descripcion');
    }

}