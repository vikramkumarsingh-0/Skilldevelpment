<div id='bodyleft'>
  <h3>Categories Management</h3>
  <ul> <li><a href="index.php"><i class="fa-solid fa-house"></i>  Dashboard</a></li>
     <li><a href="index.php?cat"><i class="fa-solid fa-table-cells"></i>  View Categories</a></li>
     <li><a href="index.php?sub_cat"><i class="fa-solid fa-table-cells-large"></i>  View Sub Categories</a></li>
     <li><a href="index.php?lang"><i class="fa-solid fa-language"></i>  View Languages</a></li>
  </ul>
    
  <h3>Course Management</h3>
  <ul>
     <li><a href="#">Active Courses</a></li>
     <li><a href="#">Pending Courses</a></li>
     <li><a href="#">Unpublish Courses</a></li>
     <li><a href="#">Advance Course Searching</a></li>
  </ul>

  <h3>User Management</h3>
  <ul> <li><a href="#">View All Students</a></li>
     <li><a href="#">View All Teachers</a></li>
     <li><a href="#">Advance User Search</a></li>
  </ul>

  <h3>Payment Management</h3>
  <ul> <li><a href="#">Pay To Teachers</a></li>
     <li><a href="#">Complete Payment</a></li>
     <li><a href="#">Advance Payment Searching</a></li>
  </ul>

  <h3>Pages Management</h3>
  <ul> <li><a href="index.php?terms">Terms & Conditions Page</a></li>
     <li><a href="index.php?contact">Contact Us Page</a></li>
     <li><a href="index.php?about">About Us Page</a></li>
     <li><a href="index.php?faqs">FAQs Page </a></li>
     <li><a href="#">Edit Slider </a></li>

  </ul>
</div>

<?php
if(isset($_GET['cat'])){
    @include("cat.php");
}
if(isset($_GET['lang'])){
   @include("lang.php");
}
if(isset($_GET['sub_cat'])){
   @include("sub_cat.php");
}
if(isset($_GET['terms'])){
   @include("terms.php");
}
if(isset($_GET['contact'])){
   @include("contact.php");
}
if(isset($_GET['faqs'])){
   @include("faqs.php");
}
if(isset($_GET['about'])){
   @include("about.php");
}
?>  