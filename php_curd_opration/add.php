<html>
<head>
    <title>ADD USERS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="add-db.php" onsubmit="return validation()">
            <div class="row">
                <div class="col-md-12 mt-4">
                   <label for="name">NAME :-</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                <span id="uname" class="text-warning font-weight-bold"></span>
                </div>
</div>
           <div class="row">
                <div class="col-md-12 mt-4">
                    <label for="name">LAST NAME :-</label>
                 <input type="text" class="form-control" id="last_name" name="last_name"placeholder="Enter Your Last Name">
                 <span id="lname" class="text-warning font-weight-bold"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-4">
                    <label for="name">EMAIL :-</label>
                  <input type="text" class="form-control" id="email" name="email"placeholder="Enter Your Email">
                  <span id="emailid" class="text-warning font-weight-bold"></span>
                </div>
</div>
            <div class="row">
                <div class="col-md-12 mt-4">
                    <label for="name">MOBILE NUMBER :-</label>
                 <input type="text" class="form-control " id="mobile_no"  name="mobile_number"placeholder="Enter Your Mobile Number">
                 <span id="mobileid" class="text-warning font-weight-bold"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-5">
                    <input type="submit" onclick="validation()" class="btn btn-dark" nane="done">
                </div>
            </div>
        </form>
    </div>

<!-- 
    <script>
 function validation() {
    var name = document.getElementById("name").value;
    var last_name = document.getElementById("last_name").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile_no").value;

    if(name ==""){
      document.getElementById("uname").innerHTML =" ** please fill the name field";
      return false
    }if((name.length<=5) || (name.length>20)){
      document.getElementById("uname").innerHTML =" ** name length must be between 5 and 20";
      return false;
    }if(!isNaN(name)){
      document.getElementById("uname").innerHTML =" ** only chaeactors are allowed";
      return false;
    }

    if(last_name ==""){
      document.getElementById("lname").innerHTML =" ** please fill the last_name field";
      return false
    }if((last_name.length<=5) || (last_name.length>10)){
      document.getElementById("lname").innerHTML =" ** last_name length must be between 5 and 10";
      return false;
    }if(!isNaN(last_name)){
      document.getElementById("lname").innerHTML =" ** only chaeactors are allowed";
      return false;
    }

    if(email ==""){
      document.getElementById("emailid").innerHTML =" ** please fill the email field";
      return false;
    }if(email.indexOf('@') <= 0){
      document.getElementById("emailid").innerHTML =" ** Invalid @ position";
      return false;
    }if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
      document.getElementById("emailid").innerHTML =" ** Invalid . position ";
      return false;
    }if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
      document.getElementById("emailid").innerHTML =" ** Invalid . position ";
      return false;
    }

    if(mobile ==""){
      document.getElementById("mobileid").innerHTML =" ** please fill the mobile_number field";
      return false;
    }if(mobile.length!=10){
      document.getElementById("mobileid").innerHTML =" ** mobile number must be 10 digits only";
      return false;
    }
  }
</script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>