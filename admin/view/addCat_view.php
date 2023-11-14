<?php

include('./../Class/function.php')


?>

<main>
    <h2>Add New Category</h2>
    <form action="">

    <div class="my-3">
  <label for="categoryName" class="form-label">Category Name</label>
  <input type="text" class="form-control" id="categoryName"  placeholder="E.g: Sports">
</div>
    <div class="my-3">
  <label for="CategoryDescription" class="form-label">Category Description</label>
  <input type="text" class="form-control" id="CategoryDescription" placeholder="category description within 100 char">
</div>
    <div class="my-3">
  <input type="submit"  value="Add Category" class="btn btn-primary btn-block" >
</div>


    </form>
</main>