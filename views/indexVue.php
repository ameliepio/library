<?php
  include("template/header.php")

 ?>

<div class="table-responsive">
  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
    <thead>
      <tr>
        <!-- <th style="width:5%">id_User</th>
        <th style="width:10%">Name_Books</th>
        <th style="width:10%" class="hidden-phone">Authors</th>
        <th style="width:10%" class="hidden-phone">Categories</th>
        <th style="width:10%" class="hidden-phone">Actions</th>
          <th style="width:10%" class="hidden-phone">Actions</th> -->
          <th >id_User</th>
          <th>Name_Books</th>
          <th  class="hidden-phone">Authors</th>
          <th class="hidden-phone">Categories</th>
          <th class="hidden-phone">Actions</th>
          <th class="hidden-phone">Actions</th>
            </tr>
    </thead>
    <tbody>
      <tr>
          <th scope="row">1</th>

        <td>
          <span class="name">blabla</span>
        </td>
        <td class="hidden-phone">jerry</td>
        <td class="hidden-phone">fiction</td>
        <td class="hidden-phone">
          <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-xs dropdown-toggle" data-original-title="" title="">
              Action
              <span class="caret">
              </span>
            </button>
            <ul class="dropdown-menu pull-right">
              <li>
                <a href="#">available</a>
              </li>
              <li>
                <a href="#">borrowed</a>
              </li>
            </ul>
          </div>
        </td>
        </td>
        <td>
     <button type="button" class="btn btn-primary">Primary</button>
  </td>
      </tr>
    </tbody>
  </table>
</div>
 <?php
   include("template/footer.php")
  ?>
