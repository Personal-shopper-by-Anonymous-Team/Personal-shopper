<<<<<<< HEAD
<?php 
require_once ("Components/Layout.php"); 
require_once ("Components/Header.php");

?>                  
    <link rel="stylesheet" href="../Assets/createCustomer.css">
=======
<?php
require_once("Components/Layout.php");
require_once("Components/Header.php");
?>
>>>>>>> 5de1e037fe46ccac66f0d2bbda0a7a463df497f1

    <body>
    <div> 
        <h1 class="d-flex justify-content-center">Add shopper</h1>
    </div>    
    <a class="d-flex justify-content-end" href="?action=create"><input id="clearform" class="btn btn-primary clearform" type="reset" value="RESET"></a>
        <form>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Age</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Age">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Phone</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone">
        </div>

        <div class="row g-3">
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Weight</label>
                <input type="text" class="form-control" placeholder="Weight" aria-label="Weight">
            </div>
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Height</label>
                <input type="text" class="form-control" placeholder="Height" aria-label="Height">
            </div>
            <div class="col">
                <label for="formGroupExampleInput" class="form-label"> Shoes Size</label>
                <input type="text" class="form-control" placeholder="Shoes Size" aria-label="Shoes Size">
            </div>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Men</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            <label class="form-check-label" for="inlineRadio3">Non-Binary</label>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">appointment reason</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

<<<<<<< HEAD
        </form>
        <div class="d-grid gap-2 d-md-inline-block d-flex justify-items-center ">git 
  <button id="send" class="btn btn-outline-dark" type="button">Send</button>
  <button id="cancel" class="btn btn-outline-dark" type="button">Cancel</button>
</div>
=======
    </form>
    <div class="d-grid gap-2 d-md-inline-block">
        <button class="btn btn-outline-info" type="button">Send</button>
        <button class="btn btn-outline-danger" type="button">Cancel</button>
    </div>
>>>>>>> 5de1e037fe46ccac66f0d2bbda0a7a463df497f1

    <?php
    require_once("Components/Footer.php");
    ?>
</body>