

<div style="width: 1000px; padding-left:50px; padding-top:50px">
    <h1>Register As A Delivery Agent</h1>
    <!-- Registration form for customer-->
    
    <form id="deliveryRegForm" > 
        
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">First Name</label>
        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="your first name">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Last Name</label>
        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="your last name">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="email@email.com">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address line1</label>
        <input type="text" name="address1" class="form-control" id="addressline1" placeholder="Apartment">

        <label for="inputAddress2">Address line2</label>
        <input type="text" name="address2" class="form-control" id="addressline2" placeholder="street">

        <label for="inputAddress2">City</label>
        <input type="text" name="city" class="form-control" id="city" placeholder="city">

       
        
        <label for="inputCitys">Contact Number</label>
        <input type="text" name="contactNumber" class="form-control" id="contactNumber" placeholder="0770000000">
    
        
    </div>
   

    <div class="form-group">
        <div class="form-group ">
        <label for="inputEmail4">Driving License Number</label>
        <input type="text" name="licenseNumber" class="form-control" id="driverLicenseNum" placeholder="your license number">
        </div>
        
   
    <!-- <div class="form-group">
        <label for="inputAddress">email</label>
        <input type="email" name="email" class="form-control" id="inputAddress" placeholder="email@email.com">
    </div> -->
   
        <label for="inputAddress2">Vehicle Type</label>
        <input type="text" name="vehicleType" class="form-control" id="vehicleType" placeholder="your vehicle type">

        <label for="inputAddress2">Vehicle Model</label>
        <input type="text" name="vehicleModel" class="form-control" id="vehicleModel" placeholder="your vehicle model">
      
        <label for="inputAddress2">Vehicle Register Number</label>
        <input type="text" name="vehicleRegNumber" class="form-control" id="vehicleRegNumber" placeholder="your vehicle register number">

    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity0">password</label>
        <input type="password" class="form-control" id="password">
        </div>
        <div class="form-group col-md-6">
        <label for="inputCity1">retype password</label>
        <input type="password" name="passwordRetype" class="form-control" id="passwordRetype">
        </div>
        
        
    </div>
    <!-- <form action="RegisterForm/RegisterDeliveryAgent" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputCitys">Photo of Driving License</label><br/>
                <input type="file" name="imageLicense" id="imageLicense" >
            </div>
            <div class="form-group">
                <label for="inputCitys">Photo of Vehicle Registration Book</label><br/>
                <input type="file" name="imageRegBook" id="imageBook" >
            </div>
            <button type="submit" id="DeliverRegImages" class="btn btn-primary">Add images</button>
    </form> -->
    
    
    <button type="submit" id="DeliverRegSubmit" class="btn btn-primary">Register</button>
    <a class="btn btn-primary" href="javascript:window.history.go(-1);">Back</a>
    </form>
    
   
    <!--End of Registration form for customer-->

    

 

<script>
    $(document).ready(function(){
        $("#DeliverRegSubmit").click(function(){
           $.ajax({
               url: base_url + "index.php/RegisterForm/RegisterDeliveryAgent",
               data: $("#deliveryRegForm").serialize(),
               method: "post",
               dataType:"json",
               success: function(response){
                //console.log(response);
                  if(response){
                       
                            alert("success! now you can login");
                            location.href = base_url; //this line will redirect to this link on success
                      
                   }
                  
                },
               error: function(response) {
                        alert("error");
             
                }
           
           });
        });

    });


</script>