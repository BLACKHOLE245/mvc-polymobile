<?php
require_once "database.php"; 
class DatabaseQuery {
    protected $pdo;
    public function __construct() {
        $database = new Database();
        $this->pdo = $database->getConnection();

        if (!$this->pdo) {
            die('<div style="color: red; border: 1px solid red; display: inline-block; padding: 10px 12px">Kết nối cơ sở dữ liệu không thành công.</div>');
        }
    }

    public function getProductById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getProducts() {
        $sql = "SELECT p.*, GROUP_CONCAT(ps.product_price ORDER BY ps.size_id SEPARATOR ' - ') AS size_prices
                FROM products p
                LEFT JOIN product_sizes ps ON p.product_id = ps.product_id
                GROUP BY p.product_id
                ORDER BY p.create_time DESC
                LIMIT 8";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getSizesByProductId($productId) {
        $sql = "SELECT sizes.size_name FROM product_sizes 
                JOIN sizes ON product_sizes.size_id = sizes.size_id 
                WHERE product_sizes.product_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $productId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
