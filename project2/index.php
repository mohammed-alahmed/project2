<?php
require './inc/db.php';
require './inc/form.php';
require './inc/select.php';
require './inc/db_close.php';
require './jss/script.js';


// استعلام SQL لاسترداد البيانات

// عرض النتائج
/*foreach($users as $user){
    echo '<h1>'.htmlspecialchars($user['firstName']).'</h1>';
}*/ 


?>

<?php include './parts/header.php';
      include './jss/script.js';?>
    
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h3 class="display-4 fw-normal"> اربح مع محمد</h3>
      <p class="lead fw-normal">مشروع </p>
      <h3 id="demo"></h3>
      <p class="lead fw-normal">باقي على التسليم المشروع</p>    
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>
<div class="form-floating mb-3">
<!--
<ul class="list-group list-group-flush">
  <li class="list-group-item">تابعو كل جديد</li>
  <li class="list-group-item"> في تخصص البرمجة </li>
  <li class="list-group-item"> في الكلية </li>
  <li class="list-group-item"> الموسسة التقنية </li>
  <li class="list-group-item"> والمهنية </li>
</ul>
-->

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form class="mt-5"  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>
 
    <div class="mb-3">
    <label for="firstName" class="form-label"> الاسم الاول</label>
    <input type="Text" name="firstName" class="form-control" id="exampleInputEmail1" value="<?php echo  $firstName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError']; ?></div>
  </div>
 
  <div class="mb-3">
    <label for="lastName" class="form-label"> الاسم الاخير</label>
    <input type="Text" name="lastName" class="form-control" id="exampleInputEmail1" value="<?php echo  $lastName ?>" aria-describedby="emailHelp">
    <div id="email" class="form-text error"><?php echo $errors['lastNameError']; ?></div>
  </div> 

    <div class="mb-3"> 
    <label for="exampleInputEmail1" class="form-label">الايميل </label>
    <input type="Text" name="email"  class="form-control" id="exampleInputEmail1"  value="<?php echo  $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError']; ?></div>
  </div>
   
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>
  </div>



</div>
<div class="form-floating">
</div>
<div class="container">
    
  <!-- Content here -->
</div>
    <form action="index.php" method="POST">
        <input type="text" name="firstName" id="firstName" placeholder="First Name">
        <input type="text" name="lastName" id="lastName" placeholder="Last Name">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="submit" name="submit" value="Send">
    </form>
<button id="winner">اختيار الرابح</button>
    <?php foreach($users as $user): ?>
        <h3><?php echo htmlspecialchars($user['firstName']).'   '.
         htmlspecialchars($user['lastName']).' <br> '.
         htmlspecialchars($user['email'])
         ; ?><div class="d-md-flex "> 
         <div class=" me-md-3 ">
           <div class="my-3 p-3">
             <h2 class=""> </h2>

           </div>
            
         </div></h3>
    <?php endforeach; ?>
    
    <script src="." integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="./js/script.js"></script>
    <script src="./jss/script.js"></script>

</body>
</html>