<html>

<?php
require_once("Components/layout.php");
?>

<body>
  <?php
  require_once("Components/header/header.php");
  ?>

  <main>
    <div class="container-sm">
      <div class="head_group">
        <div class="head_btn_add">
          <div class="add">
            <a href="?action=create">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-lines-fill icon_btn_add" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
              </svg>
              <button type="button" class="btn_add">ADD</button>
            </a>
          </div>

        </div>
        <img src="src/img/image.png" alt="image_add" class="d-inline-block align-text-top img_add">
      </div>


      <?php
      foreach ($data["customer"] as $customer) {

        echo <<<TAG



                <div class="container_cards "> 
                  <div class="card border-danger mb-3 card_principal" style="max-width: 54rem;">
                    <div class="card text-bg-secondary mb-3 card_secondary  " style="">
                      <li class="list-group-item">Name: {$customer->getName()}</li>
                      <li class="list-group-item">Age: {$customer->getAge()}</li>
                      <li class="list-group-item">Phone: {$customer->getPhone()}</li>
                      <li class="list-group-item">Weight: {$customer->getWeight()}</li>
                      <li class="list-group-item">Height: {$customer->getHeight()}</li>
                      <li class="list-group-item">Shoe Size: {$customer->getShoes_Size()}</li>
                   </div>

                    <div class="card text-bg-secondary mb-3 card_secondary" style="width: 25rem;">
                       <li class="list-group-item">Sex: {$customer->getSex()}</li>
                       <li class="list-group-item">Date: {$customer->getDate()}</li>
                       <li class="list-group-item">Reason: {$customer->getReason()}</l
                    </div>
                </div>
                  <div class="buttons" style="max-width: 18rem;">
                      <a class="btn_delete" href= '?action=delete&id={$customer->getId()}'><i class="bi bi-person-dash icon_delete"></i></a>
                      <a class="btn_edit" href= '?action=edit&id={$customer->getId()}'><i class="bi bi-pencil-square icon_edit"></i></a>
                  </div>
                </div>
       TAG;
      }
      ?>
    </div>
  </main>


  <?php
  require_once("Components/footer/footer.php");
  ?>
</body>









</html>