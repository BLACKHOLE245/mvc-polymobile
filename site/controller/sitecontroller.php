<?php
require_once "./site/model/database.php";
require_once "./site/model/select.php";   
class SiteController {
    private $model;
    protected $db;
    public function __construct() {
        $database = new Database(); 
        $this->db = $database->getConnection(); 
        $this->model = new DatabaseQuery(); 
        if (session_status() === PHP_SESSION_NONE) {
            session_start(); 
        }
    }
    protected function redirect($page) {
        header("Location: index.php?page=$page");
        exit();
    }
    // Trang chủ
    public function home() {
        $products = $this->model->getProducts();
        foreach ($products as &$product) {
            $product['sizes'] = $this->model->getSizesByProductId($product['product_id']);
        }
        ob_start();
        include './public/new-item.php'; 
        return ob_get_clean(); 
    }
 
    public function contact() {
        include "./site/views/lienhe.php";
    }
}
?>
