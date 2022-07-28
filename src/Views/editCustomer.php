<?php
require_once("Components/Layout.php");
require_once("Components/header/header_edit.php");
?>
<body>

    <main>
        <input class="btn-lg btn-outline-sucess go-add-task float"type="reset" value="Reset">
        <form class="justify-content-center" action='?action=update&id=<?php echo $data["customer"]->getId()?>'method="post">
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input class="form-control" type="text" name="name" required value='<?php echo $data["customer"]->getName() ?>'>
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Age</label>
            <input class="form-control" type="text" name="age" required value='<?php echo $data["customer"]->getAge() ?>'>
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Phone</label>
            <input class="form-control" type="text" name="phone" required value='<?php echo $data["customer"]->getPhone() ?>'>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Weight</label>
                    <input class="form-control" type="text" name="weight" required value='<?php echo $data["customer"]->getWeight() ?>'>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label">Height</label>
                    <input class="form-control" type="text" name="height" required value='<?php echo $data["customer"]->getHeight() ?>'>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput" class="form-label"> Shoes Size</label>
                    <input class="form-control" type="text" name="shoes_size" required value='<?php echo $data["customer"]->getShoes_Size() ?>'>
                </div>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" required value='<?php echo $data["customer"]->getSex() ?>'>
                <label class="form-check-label" for="inlineRadio1">Men</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" required value='<?php echo $data["customer"]->getSex() ?>'>
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sex" id="inlineRadio3" required value='<?php echo $data["customer"]->getSex() ?>'>
                <label class="form-check-label" for="inlineRadio3">Non-Binary</label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">appointment reason</label>
                <input class="form-control" type="text" name="reason" required value='<?php echo $data["customer"]->getReason() ?>'>
            </div class >
            <div class="justify-content-center">
                <button onclick="window.location.href='/Personal-Shopper'" id="cancel" class="btn btn-outline-dark" type="submit">Cancel</button>
                <input id="send" class="btn btn-outline-dark" type="submit" value="Edit" />
            <div>
        </form>
    </main>


</body>
<?php 
    require_once("Components/footer/footer_edit.php");
?>