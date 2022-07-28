<?php

    namespace App\Controllers;

    use App\Models\Customers;
    use App\Core\View;

    class CustomersController{

        public function __construct(){

            if (isset($_GET["action"]) && ($_GET["action"] =="delete")){
                $this->delete($_GET["id"]);
                return;
            }

            if (isset($_GET["action"]) && ($_GET["action"] =="create")){
                $this->create();
                return;
            }
            
            if (isset($_GET["action"]) && ($_GET["action"] =="store")){
                $this->store($_POST);
                return;
            }

            if (isset($_POST["sex"])){
                $sex = $_POST["sex"];
                return ;
            }
            
            

            $this->index();
        }


        public function index(){
             $customer = new Customers();

             $customers = $customer->all();
             new View("customerList",["customer"=> $customers]);
        }
  
         
        
             
        public function delete($id){
            $customerHelper = new Customers();
            $customer = $customerHelper->findById($id);
            $customer->destroy();

            $this->index();
        } 

        public function create(){
            new View("createCustomer");
        }

        public function store(array $request){
            $newCustomer = new Customers(Null, $request["name"], $request["age"], $request["phone"], $request["weight"],$request["height"], $request["shoes_size"],$request["sex"], null, $request["reason"] );
            $newCustomer-> save();
            $this->index();
        } 
        
        

    }
