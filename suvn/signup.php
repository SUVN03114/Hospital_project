
      
     <style>
       body{
         background-color:rebeccapurple;
       }
     
       .progress{
         width:50%;
         margin:0 auto;
         margin-top:20%;
       }
       
       @media only screen and (max-width:924px){
            .progress{
               width:70%;
               margin:0 auto;
               margin-top:60%;
             }
       }
    
     </style>
 
    
  
    
    <div class="container" id="content">
        
       
        <div class="row">
          <div class="col l3 m3 s12"></div>
          <div class="col l6 m6 s12">
            <form action="signup_action.php" method="POST">
                 <div class="card-panel z-depth-5">
                  <h5 class="center">Register</h5>
                  
                   <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="username">
                    <label>Enter username</label>
                  </div>
                  
                   <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" class="validate">
                    <label>Enter email</label>
                  </div>
                  
                   <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="pass1">
                    <label>Enter password</label>
                  </div>
                  
                    
                   <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="pass2">
                    <label>Confirm password</label>
                  </div>
                  <p class="right">Already have an account? <a href="loginm.php" class="modal-trigger">login</a></p>
                  <input type="submit" name="submit" value="register" class="btn left col s12">
                
                  <div class="clearfix"></div>
               </div>
            </form>
            
          </div>
            
          
          
        </div>
    </div>
    
     
            
           
          
    
    
   