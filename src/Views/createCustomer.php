<?php
require_once("Components/Layout.php");
require_once("Components/header/header_app.php");

?>

<body>
    <div class="add">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
        </svg>
        <h2>Add Shopper</h2>
    </div>



    <form action="?action=store" method="post">
        <a href="?action=create"><input class="btn btn-primary" type="reset" value="Reset"></a>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Name">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Age</label>
            <input type="text" name="age" class="form-control" id="formGroupExampleInput" placeholder="Age">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="formGroupExampleInput" placeholder="Phone">
        </div>

        <div class="row g-3">
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Weight</label>
                <input type="text" name="weight" class="form-control" placeholder="Weight" aria-label="Weight">
            </div>
            <div class="col">
                <label for="formGroupExampleInput" class="form-label">Height</label>
                <input type="text" name="height" class="form-control" placeholder="Height" aria-label="Height">
            </div>
            <div class="col">
                <label for="formGroupExampleInput" class="form-label"> Shoes Size</label>
                <input type="text" name="shoes_size" class="form-control" placeholder="Shoes Size" aria-label="Shoes Size">
            </div>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="men">
            <label class="form-check-label" for="inlineRadio1">Men</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex" id="inlineRadio3" value="non-binary">
            <label class="form-check-label" for="inlineRadio3">Non-Binary</label>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">appointment reason</label>
            <textarea class="form-control" name="reason" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="justify-content-center">
            <input id="send" class="btn btn-outline-dark" type="submit" value="Create" />
            <button onclick="window.location.href='/Personal-Shopper'" id="cancel" class="btn btn-outline-dark" type="button">Cancel</button>

        </div>




    </form>




    <?php
    require_once("Components/footer/footer_add.php");
    ?>
</body>