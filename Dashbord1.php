<html>
<head>
<style>
@mixin glassmorphism() {
     background: rgba(255,255,255,0.05);
    backdrop-filter: blur(10px);
    border-top: 1px solid rgba(255,255,255,0.2);
    border-left: 1px solid rgba(255,255,255,0.2);
    box-shadow: 5px 5px 30px rgba(0,0,0,0.2);
}
html,
body {
  height: 100%;
}

.bg {
  position:absolute;
  z-index:-1;
  top:0;
  right:0;
  bottom:0;
  left:0;
  
background-image: radial-gradient(circle at 30% 86%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 8%,transparent 8%, transparent 92%),radial-gradient(circle at 55% 100%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 8%,transparent 8%, transparent 92%),radial-gradient(circle at 40% 75%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 7% 99%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 69% 76%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 2% 35%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 14% 48%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 28% 87%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 65% 14%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 51% 36%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 6% 93%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),linear-gradient(135deg, rgb(23, 233, 173),rgb(29, 24, 208));
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
	width: 100%;
	max-width: 330px;
	margin: auto;
  
  @include glassmorphism();
  border-radius: 3px;
  
  h1 {
    @include glassmorphism();
    margin-top: 0px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
    color:#fff;
    padding:15px;
    text-align:center;
  }
  
  form {
    padding:15px;
    
    .btn {
      @include glassmorphism;
      color:#fff;
      
      &:hover, &:focus {
        background: rgba(255,255,255,0.1);
        box-shadow:none;
      }
    }
    
    .form-control:focus {
      border-color:#ced4da;
      box-shadow: 5px 5px 30px rgba(0,0,0,0.2);
    }
  }
  
   .copyright {
     text-align:center;
      color:rgba(255,255,255,0.65);
    }
  
  .form-control {
    background:rgba(255,255,255,0.9);
  }
  
  .form-check {
    display:flex;
    align-items:center;
     color:rgba(255,255,255,0.65);
    label {
      font-size:0.9em;
    }
    
    input {
      margin-right:0.5em;
      
      &:checked {
        background-color:#9ce060;
        border-color: #81c63f;
      }
    }
  }
  
	.form-floating {
		&:focus-within {
			z-index: 2;
		}
	}
  
	input[type="email"] {
		margin-bottom: -1px;
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0;
	}
	input[type="password"] {
		margin-bottom: 10px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}
}

</style>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<div class="bg">


</div>

  <main class="form-signin">
    
      <h1 class="h3"> COLLEGE_FORM</h1>
    
    <form action="homepage.php" method="get">


      <div class="form-floating">
        <input type="type" class="form-control" id="floatingfnm" placeholder="firstnm" required name="fnm">
        <label for="floatingfnm">First Name</label>
      </div>
	  <div class="form-floating">
        <input type="type" class="form-control" id="floatinglnm" placeholder="lastnm" required name="lnm">
        <label for="floatinglnm">Last Name</label>
      </div>
      <div class="form-floating">
        <input type="type" class="form-control" id="floatingprojectdetail" placeholder="project detail" required name="project">
        <label for="floatingprojectdetail">Project Detail</label>
      </div>
	 

  
        
      </div>
      <button class="w-100 btn btn-lg" type="submit">SUBMIT</button>

    </form>
  </main>
  </body>
  </html>