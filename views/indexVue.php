<?php
  include ("template/header.php")

 ?>

 <div id="main" class="container-fluid">
     <h3 class="page-header"></h3>

 <form class="" action="index.php" method="post" name='addBooks'>
         <div id="actions">
             <div class="col-md-3">


                 <a href="controllers/addBooks.php" class="btn btn-outline-success">addBooks</a>
             </div>
         </div>
         <div id="list" class="row">
     <div class="table-responsive col-xs-8 .col-sm-6  ">
         <table class="table table-striped" cellspacing="0" cellpadding="0">
             <thead>
                 <tr>
                     <th>NameBooks</th>
                     <th>Authors</th>
                     <th>

 <form action="index.php" method="post">
 <div class="dropdown" >

 <select class="form-control" name="sortCategories">
   <option value="autobiography">Autobiography</option>
   <option value="action">Action</option>
   <option value="policy">Policy</option>
   <option value="Manga">Manga</option>
   <option value="History">History</option>
   <option value="blabla">blabla</option>
 </select>

 </div>

  <input type="submit" name ="send"/>

 </form>
                </th>
                     <th>Action</th>
                    <th >idUser</th>

                     </tr>
             </thead>
             <tbody>
                 <?php

                 foreach($books as $book)
                 {
                     ?>
                     <tr>
                         <td><?php echo $book->getNameBooks();?></td>
                         <td><?php echo $book->getAuthors();?></td>
                         <td><?php echo $book->getCategories();?></td>
                         <td><?php echo $book->getIdUser();?></td>



                         <td class="row .col-xs-4 .col-sm-6">



<a class="btn btn-outline-info" href="controllers/read.php?id=<?php echo $book->getId()?>">read</a>

                     </tr>


                     <?php
                 }
                 ?>


             </tbody>
          </table>
  </div>
  </form>
  </div>

 <?php
   include("template/footer.php")
  ?>
