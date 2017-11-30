
<?php
  include("template/header.php")
 ?>

    <form class="form1"  method='post'  action="index.php">

  <div class="form-group">
    <label for="exampleFormControlInput1">NameBooks<?php echo $book->getNameBooks();?></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NameBooks">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">author<?php echo $book->getAuthor();?></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="author">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">category<?php echo $book->getCategory();?></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="category">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">releaseDate<?php echo $book->getReleaseDate();?></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="releaseDate">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">idUser<?php echo $book->getIdUser();?></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="idUser">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">abstract<?php echo $book->getAbstract();?></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

    <button class="btn btn-primary"name="addBooks" type="submit">Send</button>
</form>

   <?php
     include("template/footer.php")
    ?>
