
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>    
</head>
<body>

<form name="myForm" action="action.page.php" onsubmit="return validateForm()" method="post">
<section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>
               
<!-- First Name-->
                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" id="form3Examplev2" name="fname" placeholder="First Name" class="form-control form-control-lg"  />
                        <label class="form-label" for="form3Examplev2">First name</label>
                        
                      </div>
                    </div>
<!-- Last Name-->
                    <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                        <input type="text" id="form3Examplev3" name="lname" placeholder="Last Name" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev3">Last name</label> 
                        
                      </div>
                    </div>
                  </div>
<!-- Password-->
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="password" id="form3Examplev4" name="pass" placeholder="Password" class="form-control form-control-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                      <label class="form-label" for="form3Examplev4">Password</label>
                    </div>
                  </div>
<!-- Education Dropdown-->
                  <div class="mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="form3Examplev8">Education:</label>
                    <select name="edu" class="select">
                      <option value="HSC">HSC</option>
                      <option value="Diploma">Diploma</option>
                      <option value="Degree">Degree</option>
                      <option value="Masters">Masters</option>
                    </select>
                </div>
                  </div>

<!-- University Name-->                  
                  <div class="mb-4 pb-2 ">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev5" name="uname" placeholder="University Name" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplev5">University Name</label>
                      </div>
                    <br><br>
<!-- Profile Image-->                    
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                    <input type="file" name="img" id="upload" multiple accept=".jpeg,.jpg,.png">
                    <br>
                    <label for="file">
                    Upload the profile image  
                    </label>
                    <br>
                    </div>
                  </div>
                  <br>
 <!-- Hobbie-->                 
                  <div class="col-mb-4 pb-2 ">
                    <div class="form-outline">
                        <label class="form-label" for="myCheck">Hobbies</label><br>
                        <input type="checkbox" id="myCheck" name="hobbies" value="Travelling" >
                        <label for="1"> Travelling</label><br>
                        <input type="checkbox" id="myCheck" name="hobbies" value="Gaming"  >
                        <label for="2"> Gaming</label><br>
                        <input type="checkbox" id="myCheck" name="hobbies" value="Others" >
                        <label for="3"> Others</label><br><br>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- Contact Detail--> 
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>
                  
<!-- Street-->
                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea2" name="street" placeholder="Street + Nr"  class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea2">Street + Nr</label>
                    </div>
                  </div>
<!-- Land Mark-->
                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea3" name="landmark" placeholder="Land Mark"  class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea3">Land Mark</label>
                    </div>
                  </div>
<!--Zip Code-->
                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea4" name="zcode" placeholder="Zip Code" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                      </div>
                    </div>
<!-- Place-->
                    <div class="col-md-7 mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea5" name="place" placeholder="Place" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea5">Place</label>
                      </div>
                    </div>
                  </div>
<!-- Country-->
                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea6" name="country" placeholder="Country"  class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea6">Country</label>
                    </div>
                  </div>
<!-- Code-->
                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea7" name="code" placeholder="Code +" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea7">Code +</label>
                      </div>
                    </div>
<!-- Phone Number-->
                    <div class="col-md-7 mb-4 pb-2">
                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea8" name="phone" placeholder="Phone" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                      </div>
                    </div>
                  </div>
<!-- Your Email -->
                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea9" name="email" placeholder="Your Email" class="form-control form-control-lg"  />
                      <label class="form-label" for="form3Examplea9">Your Email</label>
                      
                    </div>
                  </div>
<!--Term n Condition-->
                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input
                      class="form-check-input me-3" type="checkbox" value="" id="form2Example3c"
                    />
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                    </label>
                  </div>
<!-- Registration button-->
                  <button type="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark" name="submit" >Register</button>

                </div>
              </div>
            </div>
</div>
</form>
</body>

<script src="validate.js">
</script>
</html>                                          
