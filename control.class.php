<?php
	require_once("db.class.php");
	require_once("order.class.php");
	
	/**
	 *类名：Order
	 *说明：义诊预约订单控制类
	 */
	class Control{
		public static function insert_order($order){
			if(is_a($order, 'Order')){
				echo "is a Order";
				$db = new DB();
	            $resultid = $db->insertData("orders",array(),array('', $order->name, $order->phone, $order->problem));
	            return true;
			}else{
				return false;
			}
		}
		public static function check_admin($admin){
            $db = new DB();
            $admins = $db->getDataByAtr("admin", "name", $admin->name);
            if($admins != NULL){
            	foreach ($admins as $one) {
            		//echo $admin->password;
            		if ($one->password == $admin->password)
            			return true;
            	}
            }
            return false;
        }
	}
?>