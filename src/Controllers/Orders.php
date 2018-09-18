<?php
namespace App\Controllers;
use App\Models\Database;

/**
 * Orders Class
 * @property \App\Controller\Orders
 */
class Orders extends Database {
	/**
     * Construct method
     * @param
     * @return
     * @throws
     */
	function __construct() {
		parent::__construct();
	}

	/**
     * Order method
     * @param
     * @return
     * @throws
    */
	public function Order($id = null){
		if ($id) {
            return $this->GetOrder($id);
        } else if(isset($_POST)){
            return $this->SetOrder($_POST);
        } else {
            return null;
        }
	}

    /**
     * Order method
     * @param
     * @return
     * @throws
    */
    public function Orders($page = 0, $limit = 5){
        # code...
    }

	/**
     * SetOrder method
     * @param
     * @return
     * @throws
    */
	private function SetOrder(){
		# code...
	}

	/**
     * GetOrder method
     * @param
     * @return
     * @throws
    */
	private function GetOrder($id = null){
		$sql  = "SELECT * FROM orders WHERE id = {$id}";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
	}
}
?>