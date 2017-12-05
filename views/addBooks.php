
<?php
  include("template/header.php")
 ?>

    <form class="form1"  method='post' action="" >

    <div class="form-group">
      <label for="exampleFormControlInput1">NameBooks</label>
      <input type="text" class="form-control" name='NameBooks' placeholder="NameBooks">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">author</label>
      <input type="text" class="form-control" name='author' placeholder="author">
    </div>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      statut
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">borrow</a>
        <a class="dropdown-item" href="#">available</a>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">category</label>
      <input type="text" class="form-control" name='category'  placeholder="category">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">releaseDate</label>
      <input type="date" class="form-control" name='releaseDate'id="exampleFormControlInput1" placeholder="releaseDate">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">idUser</label>
      <input type="text" class="form-control" name='idUser' id="exampleFormControlInput1" placeholder="idUser">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1" >abstract</label>
      <textarea class="form-control" name='abstract'id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <input class="btn btn-primary" name="addBooks" type="submit" value="send">
</form>

   <?php
     include("template/footer.php")
    ?>
