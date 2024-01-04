<?php
	include "models/ProductsModel.php";
	require "Classes/PHPExcel.php";
	class StatisticController extends Controller{
		use ProductsModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//ham ceil la ham lay tran. VD: ceil(2.1) = 3
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//lay danh sach cac ban ghi co phan trang
			$data = $this->modelRead($recordPerPage);
			foreach ($data as $key => $value) {
				$data[$key]->sold = $this->getSold($value->id);
				$data[$key]->money = $this->getMoney($value->id);
			}
			usort($data, array($this, "comparator"));
			//load view
			$this->loadView("StatisticView.php",["data"=>$data,"numPage"=>$numPage]);
		}

		public function getSold($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orderdetails where product_id=$id");
			$record = $query->fetchAll();
			$total = 0;
			foreach ($record as $key => $value) {
				$total += intval($value->number);
			}
			return $total;
		}


		public function getMoney($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orderdetails where product_id=$id");
			$record = $query->fetchAll();
			$total = 0;
			foreach ($record as $key => $value) {
				$total += intval($value->number) * $value->price;
			}
			return $total;
		}

		public function comparator($object1, $object2) {
			return $object1->money < $object2->money;
		}
	}
 ?>
