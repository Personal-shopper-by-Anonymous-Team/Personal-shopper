<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Models\Customers;

class Test extends TestCase
{
    public function test_IfCreateNewCustomersCheckIfAllDateWorkCorrectly()
    {
        $newCustomer = new Customers(null, "CustomerTest", 0, 0, 0, 0, 0, "CustomerSex", "CustomerDate", "CustomerReason");

        $resultCustomerName = $newCustomer->getName();
        $resultCustomerAge = $newCustomer->getAge();
        $resultCustomerPhone = $newCustomer->getPhone();
        $resultCustomerWeight = $newCustomer->getWeight();
        $resultCustomerHeight = $newCustomer->getHeight();
        $resultCustomerShoes_Size = $newCustomer->getShoes_Size();
        $resultCustomerSex = $newCustomer->getSex();
        $resultCustomerDate = $newCustomer->getDate();
        $resultCustomerReason = $newCustomer->getReason();

        $this->assertEquals("CustomerTest", $resultCustomerName);
        $this->assertEquals(0, $resultCustomerAge);
        $this->assertEquals(0, $resultCustomerPhone);
        $this->assertEquals(0, $resultCustomerWeight);
        $this->assertEquals(0, $resultCustomerHeight);
        $this->assertEquals(0, $resultCustomerShoes_Size);
        $this->assertEquals("CustomerSex", $resultCustomerSex);
        $this->assertEquals("CustomerDate", $resultCustomerDate);
        $this->assertEquals("CustomerReason", $resultCustomerReason);
    }
}
