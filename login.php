<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <style>
        .user{
              font-size: 14px;
              font-family: 'Times New Roman';
              padding: auto;
              margin-bottom: 20px;
              margin-top: 20px;
              
        }
        .btn
        {
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            color:mediumspringgreen;
        }
        h1{
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            
            
        }
        .container
        {
            
            align-content: center;        
            align-items:center;
            border: 3px solid black;
            border-radius:10px ;
            width: 604px;
            height: 300px;
            padding-top: 12px;
        
        }
        body{
            background-color: blanchedalmond;
        }
        .l1
        {
            
            font-size: 22px;
            font-family: 'Times New Roman', Times, serif;
			
        }
        
    </style>
</head>
<body>
    <h1>Login Page</h1>
    <div class="container  col-md-6">
        <div class="col">
            <div class="col-md-6 offset-2 user col-lg-8">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">Enter Username : </span>
                  <input type="text" class="form-control" id="Email" aria-describedby="inputGroupPrepend" required>
                  
                </div>
            </div>
    
            <div class="col-md-4 offset-2 user col-lg-8">
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend" >Enter Password : </span>
                  <input type="text"  class="form-control" id="Password" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>
			  
              <div class="btn offset-4">
                <div class="col">
                    <button type="button" class="btn btn-primary" onclick = "clickMe()" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Submit
                  </button></div>
            </div>
			
			<div class = "forget offset-4 l1">
			   <a href = "fpass.html">Forget password??</a>
			</div>
        
        <div class="l1 offset-2">
		    <p>Don't have an account?
            <a href="register.html">Register Here.</a>
			</p>
        </div>

<!-- Modal 
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LoggedIn</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">	
                    You Have Successfully Logging
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                
                </div>
            </div>
            </div>
        </div>-->


    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"
     integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
	 
	<script>
	  function clickMe()
	  {
	     var name = document.getElementById("Email");
	var pass = document.getElementById("Password");

	if(name.value == "")
	{
		alert("Email is Empty");
		return false;
	}
	if(pass.value == "")
	{
		alert("Password is Empty");
		return false;
	}
	  if(name.value != "" && pass.value!= "")
	  {
	      alert("Login Successfully");
	  }
	  }
</script>	
</body>
</html>