<?php
class Inmobiliaria extends Controller
{
    public function index()
    {
        $this->views->getView($this, 'index');
    }
    public function Detalles()
    {
        $this->views->getView($this, 'Detalles');
    }

}