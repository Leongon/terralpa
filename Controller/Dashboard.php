<?php
class Dashboard extends Controller
{
    public function __construct()
    {
    Auth::noAuth();
      parent::__construct();
    }

    public function index()
    {   
        $data['page_name'] = "Dashboard";
        $data['function_js'] = "Dashboard.js";
        $this->views->getView($this, 'index', $data);
    }

    public function Contar_ventas()
    {

        $productos = DashboardModel::Contar_ventas();
        echo json_encode($productos);
    }
}
?>