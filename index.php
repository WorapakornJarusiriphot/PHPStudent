<?php
class StudentClass {
  // กำหนด properties ของ class
  public $Name; // ชื่อของนักเรียน
  public $Surname; // นามสกุลของนักเรียน
  public $StudentID; // เลขรหัสนักเรียน
  public $StudentBirthDate; // วันเกิดของนักเรียน
  public $Picture; // ภาพถ่ายของนักเรียน
  public $Faculty; // ชื่อคณะของนักเรียน
  public $Department; // ชื่อสาขาของนักเรียน
  public $UniversityName; // ชื่อมหาวิทยาลัย
  public $UniversityLogo;  // logoมหาวิทยาลัย

  public function __construct() {
    // กำหนดค่าเริ่มต้นให้ properties
    $this->Name = "Worapakorn";
    $this->Surname = "Jarusiriphot";
    $this->StudentID = "644259018";
    $this->StudentBirthDate = "2003-03-17";
    $this->Picture = "Worapakorn.jpg";
    $this->Faculty = "Faculty of Science and Technology";
    $this->Department = "Software Engineering";
    $this->UniversityName = "มหาวิทยาลัยราชภัฏนครปฐม";
    $this->UniversityLogo = "npru_logo.jpg";
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
    $class = $year - 62; // คำนวณหาชั้นปี
    if ($class >= 1 && $class <= 5) { // ถ้าชั้นปีอยู่ในช่วง 1-5
      return "ชั้นปี " . $class; // ส่งค่าชั้นปีกลับ
    } else { // ถ้าไม่อยู่ในช่วงนี้
      return "Unknown"; // ส่งค่า Unknown กลับ
    }
  }
  
  public function ShowCard() {
    // แสดงข้อมูลบัตรประจำตัวนักเรียน
    echo "<div style='border: 2px solid black; padding: 10px; margin: 20px;'>";
    echo "<img src='{$this->UniversityLogo}' width='100' height='100' style='float: left; margin-right: 10px;'><h2 style='margin-top: 0;'>{$this->UniversityName}</h2><hr>";
    echo "<div style='display: flex;'>";
    echo "<img src='{$this->Picture}' width='150' height='150' style='margin-right: 10px;'>";
    echo "<div>";
    echo "<p><strong>Name:</strong> {$this->Name} {$this->Surname}</p>";
    echo "<p><strong>Student ID:</strong> {$this->StudentID}</p>";
    echo "<p><strong>Date of Birth:</strong> {$this->StudentBirthDate}</p>";
    echo "<p><strong>Age:</strong> {$this->CalDateofBirthAge()}</p>";
    echo "<p><strong>Class Year:</strong> {$this->CalClassYear()}</p>";
    echo "<p><strong>Faculty:</strong> {$this->Faculty}</p>";
    echo "<p><strong>Department:</strong> {$this->Department}</p>";
    echo "<img src='{$this->Picture}' width='150' height='150' style='margin-right: 10px;'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    }
}
$student = new StudentClass(); // สร้าง object ของ class StudentClass
$student->ShowCard(); // เรียกใช้ method ShowCard() เพื่อแสดงข้อมูลบัตรประจำตัวของนักเรียน
?>    