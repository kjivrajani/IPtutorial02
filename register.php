<?php
      
   $email = isset($_POST['email']) ? $_POST['email'] : "";
//echo "Email: ".$email;
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registation Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

<div class="container offset-12">
        
      <div class="drag-area offset-5">
        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
        <button>Browse File</button>
        <input  type="file" hidden>
      </div>

  <div class="col offset-4 ">
            <div class="col-md-7 user">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">Email: </span>
                  <input type="email" class="form-control" id="Email" aria-describedby="inputGroupPrepend" required>
                  
                </div>
            </div>
    
            <div class="col-md-7 user">
                <div class="input-group has-validation">
                  <span class="input-group-text"  id="inputGroupPrepend" for = "inputpassword">Password : </span>
                  <input type ="password" class="form-control" id="repassword" aria-describedby="inputGroupPrepend" required>
                  <span id = "message" style="color:red"> 
                </div>
              </div>

              

              <div class="col-md-7 user">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">re-Password : </span>
                  <input type="password" class="form-control"  id="Password" aria-describedby="inputGroupPrepend" required>
                 
                </div>
              </div>

              <div class="col-md-7 user">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">DOB : </span>
                  <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                  
                </div>
              </div>

              <div class="col-md-7 user">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">Age: </span>
                  <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>

                </div>
              </div>

              <div class="col-md-7 cont">
                <label for="validationCustom04" class="form-label">country</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose</option>
                  <option>Albania</option>
                  <option>Bhutan</option>
                  <option>Cannda</option>
                  <option>Denmark</option>
                  <option>India</option>
                  <option>Nepal</option>
                </select>
                
              </div>

              <div class="col-md-7 cont">
                <label for="validationCustom04" class="form-label">State</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose</option>
                  <option>Bihar</option>
                  <option>Gujrat</option>
                  <option>Karnataka</option>
                  <option>Odisha</option>
                  <option>Punjab</option>
                  <option>Uttarakhand</option>
                </select>
                
              </div>
			  
			  <div class="col-mb-7">
				<label class="form-label">Nots:</label>
				<textarea class="form-control"  rows="3" ></textarea>
			  </div>

            <div class="btn col-md-2 offset-2">
                <div class="col">
                    <button type="button" class="btn btn-primary" onclick="clickMe()" >
                    Submit
                  </button></div>
            </div>
			
			<div class="l1  col-md-9 offset-1">
		    <p>Have an account?
            <a href="index.html">Login Here.</a>
			</p>
        </div>
		
    </div>
</div>
    <script src="script.js"></script>
</body>
</html>