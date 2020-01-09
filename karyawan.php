<?php
    class company {

        private $nama;

        public function setCompany($nama) {
            $this->nama=$nama;
        }

        public function getCompany() {
            return $this->nama;
        }
    }

    class department extends company {

        private $nama;

        public function setDepartment($nama) {
            $this->nama=$nama;
        }

        public function getDepartment() {
            return $this->nama;
        }
    }

    class employee extends department {

        Private $name;
        Private $title = "Karyawan";
        Private $salary = 100000;

        public function setEmployee($name) {
            $this->name=$name;
        }

        public function getEmployeeTitle() {
            return $this->title;
        }

        public function getEmployeeProfile() {
            return $this->name;
        }

        public function getEmployeeMonthlySalary($day) {
            return $this->salary * $day;
        }
    }

    $company1 = new employee();

    echo "Informasi Karyawan";
    echo "</br></br>";

    echo "Nama Perusahaan : ";
    $company1->setCompany("DOT Indonesia");
    echo $company1->getCompany();
    
    echo "</br>";

    echo "Nama Departemen : ";
    $company1->setDepartment("Software Engineer");
    echo $company1->getDepartment();

    echo "</br>";

    echo "Nama : ";
    $company1->setEmployee("Len");
    echo $company1->getEmployeeProfile();

    echo "</br>";

    echo "Gelar : ";
    echo $company1->getEmployeeTitle();

    echo "</br>";

    echo "Gaji : ";
    echo $company1->getEmployeeMonthlySalary(30);
?>