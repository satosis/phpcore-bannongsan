<?php
	include "models/OrdersModel.php";
	require "Classes/PHPExcel.php";
	class OrdersController extends Controller{
		use OrdersModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$listRecord = $this->modelRead($recordPerPage);
			//load view
			$this->loadView("OrdersView.php",["listRecord"=>$listRecord,"numPage"=>$numPage]);
		}
		//xac nhan da giao hang
		public function delivery(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de thuc hien
			$this->modelDelivery($id);
			//di chuyen den trang danh sach cac ban ghi
			echo "<script>location.href='index.php?controller=orders';</script>";
		}
		//chi tiet don hang
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de thuc hien
			$data = $this->modelListOrderDetails($id);
			//load view
			$this->loadView("OrderDetailView.php",["data"=>$data,"id"=>$id]);
		}

		public function export(){
			//---
			$recordPerPage = 25;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$data = $this->modelRead($recordPerPage);
			//Khởi tạo đối tượng

			$excel = new PHPExcel();

			//Chọn trang cần ghi (là số từ 0->n)

			$excel->setActiveSheetIndex(0);

			//Tạo tiêu đề cho trang. (có thể không cần)

			$excel->getActiveSheet()->setTitle('demo ghi dữ liệu');

			//Xét chiều rộng cho từng, nếu muốn set height thì dùng setRowHeight()

			$excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);

			$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);

			$excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);

			//Xét in đậm cho khoảng cột

			$excel->getActiveSheet()->getStyle('A1:C1')->getFont()->setBold(true);
			$excel->getActiveSheet()->setCellValue('A1', 'Tên');

			$excel->getActiveSheet()->setCellValue('B1', 'Số điện thoại');

			$excel->getActiveSheet()->setCellValue('C1', 'Ngày đặt');

			$excel->getActiveSheet()->setCellValue('D1', 'Trạng thái');

			// thực hiện thêm dữ liệu vào từng ô bằng vòng lặp

			// dòng bắt đầu = 2

			$numRow = 2;

			foreach ($data as $rows) {
				$customer = $this->modelGetCustomers($rows->customer_id);
				$date = Date_create($rows->create_at);
				$textGiaoHang = 'Chưa giao hàng';
				if($rows->status == 1) {
					$textGiaoHang = 'Đã giao hàng';
				}

				$excel->getActiveSheet()->setCellValue('A' . $numRow, $customer->name);

				$excel->getActiveSheet()->setCellValue('B' . $numRow, $customer->phone);

				$excel->getActiveSheet()->setCellValue('C' . $numRow, Date_format($date, "d/m/Y"));

				$excel->getActiveSheet()->setCellValue('D' . $numRow, $textGiaoHang);

				$numRow++;

			}

			// Khởi tạo đối tượng PHPExcel_IOFactory để thực hiện ghi file

			// ở đây mình lưu file dưới dạng excel2007

			PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('data.xlsx');

			header('Content-type: application/vnd.ms-excel');

			header("Content-Disposition: attachment; filename=data.xlsx");
			PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');

			//load view
			header("location:index.php?controller=orders");

			//---
		}
	}
 ?>
