<?php

    namespace App\Controllers;

    use App\Models\Customers;
    use App\Core\View;

    class CustomersController{

        public function __construct(){
            $this->index();
        }


        public function index(){
             $customer = new Customers();

             $customers = $customer->all();
             new View("customerList",["customer"=> $customers]);
        
         }


    }