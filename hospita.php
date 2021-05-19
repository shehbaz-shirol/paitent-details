<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="hospital.js"></script>
</head>
<style>
  span{
    color: red;
  }
  
</style>
<body> 
  <div class="container">
  <h2>City Hospital</h2>
  <div class="card">
  <img class="card-img-top" src=" img.jpg" alt="Card image" style="width:100%">
  <div class="card-body">
  <h4 class="card-title">Paitent Details:</h4><hr/> 
  <form  id="form" action="" method="post">
    <div class="row">
<div class="col-lg-6">
        <div class="from-group">
             <input type="text" class="form-control Number" id="pid" placeholder="Paitent Uid" name="fname" > 
            <span id="pid_error"></span> 
    </div>
</div>    <!--pid div close-->

      <div class="col-md-6 ">
          <input type="text" class="form-control letters" id="rdr" placeholder="Reference Dr." name="fname">
           <span id="reference_error"></span>
 </div>       <!--refer Dr. div close-->

      <div class="col-md-4 mt-4">
            <div class="from-group">
           <input type="text" class="form-control letters" id="fname" placeholder="Paitent First Name" name="fname"> 
             <span id="ferror"></span> 
    </div>
</div>   <!--fname div close-->
        <div class="col-md-4 mt-4">
           <input type="text" class="form-control letters" id="mname" placeholder="Paitent Middle Name" name="mname"> 
            <span id="merror"></span>  
     </div> <!--Mname div close-->

        <div class="col-md-4 mt-4">
            <input type="text" class="form-control letters" id="lname" placeholder="Paitent Last Name" name="lname"> 
            <span id="lerror"></span>  
        </div> <!--Lname div close-->
    
       <div class="col-md-4 mt-4">
                  <div class="form-group " >
                  <select  id="gender" class="form-control">
                  <option value="">--Gender--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Others">Others</option>
                 </select>
                 <span id="gerror"></span> 
   </div>
</div> <!--Gender div close-->
    
<div class="col-md-4 mt-4">
  <div class="form-group">
  <select class="form-control" id="blood">
     <option>--BloodGroup--</option>
     <option>A+</option>
     <option>A-</option>
     <option>AB</option>
      <option>B+</option>
       <option>B-</option>
        <option>O+</option>
         <option>O-</option>
  </select>
  <span id="berror"></span> 
   </div>
</div>  <!--Bloodgroup div close-->

<div class="col-md-4 mt-4">
  <div class="form-group" >
  <select id="ms" class="form-control" >
     <option value="">--Mairtal status--</option>
     <option value="single">single</option>
     <option value="Married">Married</option>
     <option value="widows">widows</option> 
  </select>
  <span id="mserror"></span> 
   </div>
</div>  <!--Marital status div close-->

<div class="col-md-4 mt-4">
      <input type="text" class="form-control Number" maxlength="10" id="mobile" placeholder="Enter Mobile" name="mobile">
      <span id="mob_error"></span>   
        </div>  <!--Mobile div close-->

        <div class="col-md-4 mt-4">
      <input type="text" class="form-control Number" maxlength="15" id="phone" placeholder="Enter Phone" name="phone"> 
      <span id="perror"></span>  
        </div>  <!--Phone div close-->

         <div class="col-md-4 mt-4">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      <span id="eerror"></span>   
        </div>  <!--Email div close-->

<div class="col-md-4 mt-4">
      <input type="date" class="form-control" id="dob" placeholder="Enter DOB" name="dob">
      <span id="derror"></span>   
        </div> <!--DOB div close-->

      <div class="col-md-4 mt-4">
      <input type="text" class="form-control Number" id="age" placeholder="Enter Age" name="age"> 
      <span id="aerror"></span>  
        </div> <!--Age div close-->

      <div class="col-md-4 mt-4">
      <input type="text" class="form-control letters" id="ocupation" placeholder="Enter ocupation" name="oc"> 
      <span id="ocup_error"></span>  
        </div>  <!--Ocupation div close-->

        <div class="col-md-4 mt-4">
            <div class="form-group" >
              <select id="city" class="form-control" >
              <option value="">--City--</option>
             <option value="Bijapur">Bijapur</option>
            <option value="Banglore">Banglore</option>
            <option value="Mumbai">Mumbai</option> 
           </select>
          <span id="city_error"></span> 
    </div>
</div>   <!--City div close-->

<div class="col-md-4 mt-4">
  <div class="form-group" >
  <select id="Country"  class="form-control">
     <option value="">--Country--</option>
     <option value="single">single</option>
     <option value="Married">Married</option>
     <option value="widows">widows</option> 
  </select>
  <span id="country_error"></span> 
   </div>
</div>  <!--Country div close-->

<div class="col-md-4 mt-4">
  <div class="form-group" >
  <select id="State" class="form-control">
     <option value="">--State--</option>
     <option value="Karnataka">Karnataka</option>
     <option value="Maharashtra">Maharashtra</option>
     <option value="Andhra">Andhra </option> 
  </select>
  <span id="serror"></span> 
   </div>
</div>  <!--State div close-->

<div class="col-md-4 mt-4">
  <textarea id="Current" class="sm-textarea form-control" placeholder="Current address"></textarea>
  <span id="cadderror"></span>
        </div> <!--Current div close-->

        <div class="col-md-4 mt-4">
  <textarea id="Parmenet" class="sm-textarea form-control" placeholder="Parmenet address"></textarea>
  <span id="padderror"></span>
        </div>  <!--Parmnent div close-->


<div class="col-md-12 mt-2"><h5>Medical History:</h5><hr></div>
  <div class="col-md-4 ">
  <div class="form-group" >
  <select id="Disease" class="form-control" >
     <option value="">--Any Disease--</option>
     <option value="Heart Disease">Heart Disease</option>
     <option value="Blood pressure">Blood pressure</option>
     <option value="Dibeties">Dibeties</option> 
     <option value="Kidney Problems">Kidney Problems</option>
     <option value="Others">Others</option>
     <option value="none">none</option>
  </select>
  <span id="D_error"></span> 
   </div>
</div>  <!--Medical history div close-->

 <div class="col-md-4">
  <div class="form-group" >
  <select id="Habits" class="form-control" >
     <option value="">--Any Habits--</option>
     <option value="Alcohol">Alcohol</option>
     <option value="Smoking">Smoking</option>
     <option value="Others">Others</option>
     <option value="none">none</option>
  </select>
  <span id="h_error"></span> 
   </div>
</div> <!--Habits div close-->

<div class="col-md-4">
  <div class="form-group">
    <textarea id="reason" class="sm-textarea form-control" placeholder="Reason for seeing the doctor"></textarea>
      <span id="reason_error"></span>
</div>
</div> <!--reason div close-->

<div class="col-md-4">
  <div class="form-group">
    <textarea id="Medications" class="sm-textarea form-control" placeholder="Please list your Current Medications"></textarea>
      <span id="medi_error"></span>
</div>
</div>  <!--Medicen div close-->

<div class="col-md-12 mt-2"><h5> In case of Emergency:</h5><hr></div>
<div class="col-md-4 mt-4">
        <div class="from-group">
     <label>Emergency contact:</label><span>*</span>
   </div>
 </div>  <!--Emergency div close-->

<div class="col-md-4 mt-4">
        <div class="from-group">
      <input type="text" class="form-control letters" id="Efname" placeholder="Paitent First Name" name="fname"> 
      <span id="E_fname"></span> 
        </div>
      </div>  <!--Pfname div close-->

        <div class="col-md-4 mt-4">
          <div class="from-group">
      <input type="text" class="form-control letters" id="Elname" placeholder="Paitent Last Name" name="mname"> 
      <span id="E_lname"></span>  
        </div> 
      </div>  <!--Plname div close-->

   <div class="col-md-4 mt-4">
    <div class="from-group">
   <label>Relationship:</label><span>*</span>  
</div>
</div>  <!--Relative div close-->

       <div class="col-md-4 mt-4">
        <div class="from-group">
      <input type="text" class="form-control letters" id="relation" placeholder="Paitent Relationship" name="relation">
      <span id="e_relation"></span> 
        </div>
      </div>  <!--Prealtion div close-->


<div class="col-md-4 mt-4">
        <div class="from-group">
      <input type="text" class="form-control Number" maxlength="10" id="Emobile" placeholder="Mobile Number" name="fname">
      <span id="E_mobile"></span> 
        </div>
      </div>  <!--Emobile div close-->

      <div class="col-md-12 text-center pt-5" >
<button  onclick="fun()" type= "submit" value="submit" id="submit" class="btn btn-danger">Submit</button>
<button type="submit" value="submit" id="cancel" class="btn btn-primary">Cancel</button>
</div>   <!--buttons div close-->

    </div> <!--Row div close-->
  </form>   
   </div>    <!--card-body div close-->
  </div>      <!--Card div close-->
  </div>     <!--Container div close-->   
  
</body>
</html>
