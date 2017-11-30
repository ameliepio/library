<?php
  include ("template/header.php")

 ?>

 <div id="main" class="container-fluid">
     <h3 class="page-header"></h3>

 <form class="" action="index.php" method="post" name: 'addBooks'>
         <div id="actions">
             <div class="col-md-3">
                 <a href="addBooks.php" class="btn btn-outline-success">Add Books</a>
             </div>
         </div>
         <div id="list" class="row">
     <div class="table-responsive col-xs-8 .col-sm-6  ">
         <table class="table table-striped" cellspacing="0" cellpadding="0">
             <thead>
                 <tr>
                     <th>NameBooks</th>
                     <th>Authors</th>
                     <th>Categories</th>
                     <th>Action</th>
                    <th >idUser</th>

                     </tr>
             </thead>
             <tbody>
                 <?php

                 foreach  ($books as $book)
                 {
                     ?>
                     <tr>
                         <td><?php echo $book->getNameBooks();?></td>
                         <td><?php echo $book->getAuthors();?></td>
                         <td><?php echo $book->getCategories();?></td>
                         <td><?php echo $book->getIdUser();?></td>
                         <td class="row .col-xs-4 .col-sm-6">


                              <!-- passe en GET l'id de l'objet (vehicle), le get est envoyé vers read.php -->
                              <!-- pass in GET the id of the object (vehicle), the get is sent to read.php -->
                             <!-- <a class="btn btn-outline-info" href="addBooks.php?id=<?php echo $books->getId()?>">read</a> -->

                             <!-- data-toggle="modal" data-target="#delete-modal" -->
                         </td>
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
