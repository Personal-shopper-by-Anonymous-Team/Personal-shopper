<?php

    namespace App\Models;
    use   App\Database;

    class Customers{

        private ?int $id;
        private string $name;  
        private int $age;
        private int $phone;
        private int $weight;
        private int $height;
        private int $shoes_size;
        private string $sex;
        private ?string $date;
        private string $reason;

        private $database;
        private $table="customers";

        public function __construct(int $id = null,string $name = "", int $age = 0, int $phone = 0,int $weight = 0,int $height = 0,int $shoes_size = 0,string $sex = "",string $date = null,string $reason = ""){

            $this->id = $id;
            $this->name = $name;    
            $this->age = $age;
            $this->phone = $phone;
            $this->weight = $weight;
            $this->height = $height;
            $this->shoes_size = $shoes_size;
            $this->sex = $sex;
            $this->date = $date;
            $this->reason = $reason;                 

            if(!$this->database)
            $this->database = new Database(); 

        }
        public  function all(){
            $query = $this->database->mysql->query("select * FROM {$this->table }");
            $customerArray = $query->fetchAll();      
            
            $customerList = [];
            foreach ($customerArray as $customer){
                $customerItem = new Customers($customer["id"],$customer["name"],$customer["age"],$customer["phone"],$customer["weight"],$customer["height"],$customer["shoes_size"],$customer["sex"],$customer["date"],$customer["reason"]);
                  array_push($customerList,$customerItem); 
    
            }

            return $customerList;


        }
        public function getId(){
            return $this->id;
         }
         public function getName(){
            return $this ->name;
         }
         public function getAge(){
            return $this->age;
         }
         public function getPhone(){
            return $this->phone;
            }
            public function getWeight(){
                return $this->weight;
             }
             public function getHeight(){
                return $this->height;
             }
             public function getShoes_Size(){
                return $this->shoes_size;
             }
             public function getSex(){
                return $this->sex;
             }
             public function getDate(){
                return $this->date;
             }
             public function getReason(){
                return $this->reason;
            }

            }


         
         
    