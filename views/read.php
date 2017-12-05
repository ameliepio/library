<?php
  include ("template/header.php")

 ?>

 <div id="main" class="container-fluid">
     <h3 class="page-header"></h3>

 <form class="" action="read.php" method="post" name='read' >
         <div id="actions">
             <div class="col-md-3">


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

                     <tr>
                         <td><?php echo $book->getNameBooks();?></td>
                         <td><?php echo $book->getAuthors();?></td>
                         <td><?php echo $book->getCategories();?></td>
                         <td><?php echo $book->getIdUser();?></td>

                         </div>
                         <td class="row .col-xs-4 .col-sm-6">

<textarea class="form-control" id="exampleDescription" rows="3"><?php echo $book->getAbstract();?></textarea>


                     </tr>




             </tbody>
          </table>
  </div>
  </form>
  </div>

 <?php
   include("template/footer.php")
  ?>
