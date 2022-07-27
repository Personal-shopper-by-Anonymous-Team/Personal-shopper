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

            $this->index();
        }


        public function index(){
             $customer = new Customers();

             $customers = $customer->all();
             new View("customerList",["customer"=> $customers]);
        
  
         

        public function delete($id){
            $customerHelper = new Customers();
            $customer = $customerHelper->findById($id);
            $customer->destroy();

            $this->index();
        } 

        public function create(){
            new View("createCustomer");
        }


    }
}