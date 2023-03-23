<?php
class StudentClass {
  // กำหนด properties ของ class
  public $Name; // ชื่อของนักเรียน
  public $Surname; // นามสกุลของนักเรียน
  public $StudentID; // เลขรหัสนักเรียน
  public $StudentBirthDate; // วันเกิดของนักเรียน
  public $Picture; // ภาพถ่ายของนักเรียน
  
  public function __construct() {
    // กำหนดค่าเริ่มต้นให้ properties
    $this->Name = "Worapakorn";
    $this->Surname = "Jarusiriphot";
    $this->StudentID = "644259018";
    $this->StudentBirthDate = "2003-03-17";
    $this->Picture = "Worapakorn.jpg";
  }
  
  public function CalDateofBirthAge() {
    // คำนวณอายุจากวันเกิด
    $now = new DateTime(); // วันปัจจุบัน
    $dob = new DateTime($this->StudentBirthDate); // วันเกิดของนักเรียน
    $diff = $now->diff($dob); // คำนวณวันที่ต่างๆ
    $age = $diff->y; // ดึงค่าอายุออกมา
    return $age; // ส่งค่าอายุกลับ
  }
  
  public function CalClassYear() {
    // คำนวณชั้นปีของนักเรียน
    $year = substr($this->StudentID, 0, 2); // เลขปีของรหัสนักเรียน
    $class = $year - 63; // คำนวณหาชั้นปี
    if ($class >= 1 && $class <= 5) { // ถ้าชั้นปีอยู่ในช่วง 1-5
      return "ชั้นปี " . $class; // ส่งค่าชั้นปีกลับ
    } else { // ถ้าไม่อยู่ในช่วงนี้
      return "Unknown"; // ส่งค่า Unknown กลับ
    }
  }
  
  public function ShowCard() {
    // แสดงข้อมูลบัตรประจำตัวนักเรียน
echo "<div style='border: 1px solid black; padding: 10px;'>";
echo "<img src='{$this->Picture}' width='100' height='100'><br>";
echo "Name: {$this->Name} {$this->Surname}<br>"; // แสดงชื่อและนามสกุลของนักเรียน
echo "Student ID: {$this->StudentID}<br>"; // แสดงรหัสนักเรียน
echo "Date of Birth: {$this->StudentBirthDate}<br>"; // แสดงวันเกิดของนักเรียน
echo "Age: {$this->CalDateofBirthAge()}<br>"; // แสดงอายุของนักเรียน
echo "Class Year: {$this->CalClassYear()}<br>"; // แสดงชั้นปีของนักเรียน
echo "</div>"; // ปิด div tag
}
}
?>