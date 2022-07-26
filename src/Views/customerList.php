<html>

    <?php
    require_once("Components/layout.php"); 
    ?>
    
    <body>
       <?php
        require_once("Components/header.php.");
       ?>
    <main>
            <h1>Personal Shopper </h1>

            <div class="card-header py-3 mb-5">
                <a href="?action=create">
                    <button type="button" class="btn btn-outline-dark">ADD</button>
                </a>
            </div>

        

        <table class="table">
    <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Phone</th>
            <th scope="col">Weight</th>
            <th scope="col">Height</th>
            <th scope="col">Shoe Size</th>
            <th scope="col">Sex</th>
            <th scope="col">Date</th>
            <th scope="col">Reason</th>
            </tr>
     </thead>
    <tbody>
        <?php 
             foreach ($data ["customer"] as $customer){

              echo "
                 <tr>
                    <td>{$customer->getId()}</td>
                    <td>{$customer->getName()}</td> 
                    <td>{$customer->getAge()}</td> 
                    <td>{$customer->getPhone()}</td>
                    <td>{$customer->getWeight()}</td>
                    <td>{$customer->getHeight()}</td>
                    <td>{$customer->getShoes_Size()}</td>
                    <td>{$customer->getSex()}</td>
                    <td>{$customer->getDate()}</td>
                    <td>{$customer->getReason()}</td>
                    <td>
                        <a href= '?action=delete&id={$customer->getId()}'>🗑️</a>
                        <td>
                        <a href= '?action=edit&id={$customer->getId()}'>🗑️</a>
                    </td>
                    </td>
                 </tr>
                 ";

                
             

             }
         ?>
   
  </tbody>
</table>
 







    </main>
           
           <?php
            require_once("Components/footer.php");
            ?>
    </body>









</html>