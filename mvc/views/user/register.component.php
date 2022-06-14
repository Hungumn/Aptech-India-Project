<div class="overlay"></div>
<div class="login-container">
   <div>
      <div class="logo">
         <i class="fas fa-hat-wizard"></i>
         <span>Power Accessories Store</span>
      </div>
      <div class="register">
         <div>Don't have an account?</div>
         <p>Register to access all the features of our services. Manage your business in one place. It's free</p>
         <div class="social">
            <a data-toggle="tooltip" title="Facebook" href=""><i class="fab fa-facebook-f"></i></a>
            <a data-toggle="tooltip" title="Google" href=""><i class="fab fa-google"></i></a>
            <a data-toggle="tooltip" title="Pinterest" href=""><i class="fab fa-pinterest-p"></i></a>
            <a data-toggle="tooltip" title="Github" href=""><i class="fab fa-github"></i></a>
         </div>
      </div>
   </div>

   <div class="form-login">
      <form method="POST" class="form" id="form-2" onsubmit="return checkPwd()">
         <h3 class="heading">Register an account</h3>
         <div class="form-group">
            <label for="fullname" class="form-label">FullName</label>
            <input id="fullname" name="fullname" type="text" placeholder="Enter Fullname" class="form-control">
         </div>
         <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
         </div>
         <div class="account">
            <div class="form-group form-account">
               <label for="password" class="form-label">Password</label>
               <input type="password" class="form-control" id="password" name="pwd" placeholder="Enter Password">
            </div>
            <div class="form-group form-account">
               <label for="confirmPwd" class="form-label">Confirm Password</label>
               <input type="password" placeholder="Confirm Password" id="confirmPwd" class="form-control">
            </div>
         </div>
         <div id="error"></div>
         <div class="form-group">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input id="phone_number" name="phoneNo" type="number" placeholder="Enter Phone Number" class="form-control">
         </div>
         <div class="form-group">
            <label for="Address" class="form-label">Address</label>
            <input id="Address" name="address" type="text" placeholder="Enter Address" class="form-control">
         </div>
         <div class="sign-up">
            <div>
               <button class="form-submit">Register</button>
               <i class="fas fa-chevron-right"></i>
            </div>
         </div>
      </form>
   </div>
</div>
<script>
   checkPwd = ()=>{
      if($('#password').val() == $('#confirmPwd').val()){
         return true;
      }else{
         $('#error').html('Confirm password does not match!');
         return false;
      }
   }
</script>