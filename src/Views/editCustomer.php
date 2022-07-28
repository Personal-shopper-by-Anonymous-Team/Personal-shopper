<?php
require_once("Components/Layout.php")
?>
<body>
<div class="edit row justify-content-center">
    <main class="card" style="width: 80%; height:27rem; display:flex; justify-content:center">
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
        <div class="input-group-text" style="margin-bottom: 2rem; width:90%; margin-left:5%;">
            <label for="formGroupExampleInput" class="form-label"> Sex</label>
            <input class="form-control" type="text" name="sex" required value='<?php echo $data["customer"]->getSex() ?>'>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">appointment reason</label>
            <input class="form-control" type="text" name="reason" required value='<?php echo $data["customer"]->getReason() ?>'>
        </div class >
        <div class="justify-content-center">
            <a href="./index.php"><button type="button" id="button-cancel" class="btn btn-outline-dark">Cancel</button></a>
            <button id="edit" class="btn btn-outline-dark" type="submit" value="Edit">Edit</button>
        <div>
    </form>
    </main>
<div>


</body>
<?php
?>