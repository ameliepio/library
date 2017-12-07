<?php
  include ("template/header.php")

 ?>

 <div id="main" class="container-fluid">
     <h3 class="page-header"></h3>



             <form class="" action="user.php" method="post" name='user' >
                     <div id="actions">
                         <div class="col-md-3">

   </div>
         <div id="list" class="row">
     <div class="table-responsive col-xs-8 .col-sm-6  ">
         <table class="table table-striped" cellspacing="0" cellpadding="0">
             <thead>
                 <tr>
                     <th>idUser</th>
                     <th>NameUser</th>
                     <th >Mail</th>

 </div>

                     </tr>
             </thead>
             <tbody>
                 <?php

                 foreach($users as $user)
                 {
                     ?>
                     <tr>
                         <td><?php echo $user->getIdUser();?></td>
                         <td><?php echo $user->getNameUser();?></td>
                         <td><?php echo $user->getMail();?></td>
                       <td class="row .col-xs-4 .col-sm-6">

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
