<?php

class hinhanh{
public $width;
public $src;
public $alt;
public $height;
public $id;
public $class;
// phương thức khởi tạo class
// chú ý __ là 2 shift- liên tiếp 
// khi chúng ta khởi tạo đối tượng từ class bằng từ khóa new
public function__construct($src_param,$alt_param,$width_param,$height_param,$id_param,$class_param)
{
	// bên trong hàm khởi tạo
	// truyền các giá trị của tham số cho các thuộc tính class
	$this->src=$src_param;
	$this->alt=$alt_param;
	$this->width=$width_param;
	$this->height=$height_param;
	$this->id=$id_param;
	$this->class=$class_param;
	
}

// tạo ra phương thức trong class
// phương thức gần giống hàm function trong php
// sử dụng từ khóa public khai báo giới hạn truy cập trước tên của phương thức
// phương thức thường dùng trong class để tạo 1 hành động cho đối tượng
public function html() {
	// đưa các  thuộc tính của class hinhanh vào trong phương thức html
	// để truy cập vào thuộc tính trong class ở trong nội bộ
	// phương thức của nó thì sử dụng $this->ten_thuoc_tinh
	//$this->src
        $html= "<img src='$this->src' alt'$this->alt' width='$this->width' id='$this->id' class='$this->class'/>";
        return $html;
 }
}

// tạo ra đối tượng object từ class Hinhanh
$img= new Hinhanh(src_param: 'https://kenh14cdn.com/zoom/460_289/2020/6/13/landscape-avatar-copy-14-15920100665691525992016-crop-15920100930101534410919.png',alt_param='demo hình ảnh', width_param=200, height_param=300, id_param='img1', class_param'image');	
// gọi đến phương thức trong class từ object đối tượng cụ thể
    echo $img1->html();
?>
