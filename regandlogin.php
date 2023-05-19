<!DOCTYPE html>
<html>

    <head>
      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
        </script>   

        
    <style>
        @media (min-width: 0px) {
            #slo{
        font-size: 2.5rem;
        }
        }
        @media (min-width: 576px) {
            #slo{
                     font-size: 3rem;
                }
         }
         @media (min-width: 768px) {
            #slo{
        font-size: 3.5rem;
    }
}
@media (min-width: 992px) {
    #slo{
        font-size: 4rem;
    }
}
    </style>
    </head>
    <body>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://github.com/Samee2004/img/blob/main/Green%20and%20Gray%20Grooming%20Expert%20Vintage%20Logo.png?raw=true" alt="" width="50" height="24" class="d-inline-block align-text-top">
                    TipToe
                  </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: end;">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Account</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

         <!--
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7">
                            <img src="https://raw.githubusercontent.com/Samee2004/img/main/shoot-b.jpg" >
                    </div>
                    <div class="col-lg-5">
                      <div class="row" style="margin-top: 5rem;">
                        <div class="col-lg-6">
                          <button style="width: 100%;height: 3rem;" id="signup">Sign up</button>
                        </div>
                        <div class="col-lg-6">
                          <button style="width: 100%;height: 3rem;" id="signin">Sign in</button>
                        </div>
                        <div class="row signin">
                          <div class="col-lg-4" style="margin-block: 1rem;">
                            <label for="email">Email</label>
                          </div>
                          <div class="col-lg-8" style="margin-block: 1rem;">
                            <input type="text" style="width: 100%;" id="email">
                          </div>
                          <div class="col-lg-4"  style="margin-block: 1rem;">
                            <label for="password">Password</label>
                          </div>
                          <div class="col-lg-8" style="margin-block: 1rem;">
                            <input type="text" style="width: 100%;" id="password">
                          </div>
                          <div class="col-lg-12" style="text-align: center;margin-block: 1rem;">
                            <input type="submit" value="submit" style="text-align: center;">
                          </div>
                        </div>
                        <div class="row signup">
                          <div class="col-lg-4" style="margin-block: 1rem;">
                            <label for="fname">First Name</label>
                          </div>
                          <div class="col-lg-8" style="margin-block: 1rem;">
                            <input type="text" style="width: 100%;" id="fname">
                          </div>
                          <div class="col-lg-4" style="margin-block: 1rem;">
                            <label for="lname">Last Name</label>
                          </div>
                          <div class="col-lg-8" style="margin-block: 1rem;">
                            <input type="text" style="width: 100%;" id="lname">
                          </div>
                          <div class="col-lg-4" style="margin-block: 1rem;">
                            <label for="email">Email</label>
                          </div>
                          <div class="col-lg-8" style="margin-block: 1rem;">
                            <input type="email" style="width: 100%;" id="email">
                          </div>
                          <div class="col-lg-4" style="margin-block: 1rem;">
                            <label for="phone">Phone No.</label>
                          </div>
                          <div class="col-lg-8" style="margin-block: 1rem;">
                            <input type="text" style="width: 100%;" id="phone">
                          </div>
                          <div class="col-lg-4"  style="margin-block: 1rem;">
                            <label for="password">Password</label>
                          </div>
                          <div class="col-lg-8" style="margin-block: 1rem;">
                            <input type="password" style="width: 100%;" id="password">
                          </div>
                          <div class="col-lg-4"  style="margin-block: 1rem;">
                            <label for="cpassword">Confirm Password</label>
                          </div>
                          <div class="col-lg-8" style="margin-block: 1rem;">
                            <input type="password" style="width: 100%;" id="cpassword">
                          </div>
                          <div class="col-lg-12" style="text-align: center;margin-block: 1rem;">
                            <input type="submit" value="submit" style="text-align: center;">
                          </div>
                        </div>
                        


                      </div>
                    </div>
                </div>
            </div>-->
    </body>
    <script>
       $(document).ready(function(){ 
        $('.signup').hide(); 
                $('.signin').hide();
              $('#signup').on('click',function(){
                $('.signup').show(); 
                $('.signin').hide();
              })
              $('#signin').on('click',function(){
                $('.signup').hide(); 
                $('.signin').show(); 
              })

         });  
    </script>
</html>