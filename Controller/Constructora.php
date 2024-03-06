<?php
class Constructora extends Controller
{
    public function index()
    {
        $this->views->getView($this, 'index');
    }
    public function Campo()
    {
        $this->views->getView($this, 'Campo');
    }
    public function Comerciales()
    {
        $this->views->getView($this, 'Comerciales');
    }
    public function Condominios()
    {
        $this->views->getView($this, 'Condominios');
    }
    public function Departamentos()
    {
        $this->views->getView($this, 'Departamentos');
    }
    public function Instituciones()
    {
        $this->views->getView($this, 'Instituciones');
    }
    public function Interiores()
    {
        $this->views->getView($this, 'Interiores');
    }
    public function Multifamiliares()
    {
        $this->views->getView($this, 'Multifamiliares');
    }
    public function Unifamiliares()
    {
        $this->views->getView($this, 'Unifamiliares');
    }
    public function salacocina()
    {
        $this->views->getView($this, 'salacocina');
    }
    public function Cocina()
    {
        $this->views->getView($this, 'Cocina');
    }
    public function SSHH()
    {
        $this->views->getView($this, 'SSHH');
    }
    public function Oficina()
    {
        $this->views->getView($this, 'Oficina');
    }
    public function Dormitorio()
    {
        $this->views->getView($this, 'Dormitorio');
    }
    public function Terraza()
    {
        $this->views->getView($this, 'Terraza');
    }
    public function Escalera()
    {
        $this->views->getView($this, 'Escalera');
    }
    public function Picinas()
    {
        $this->views->getView($this, 'Picinas');
    }
}