<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">


<!-- To control the page's dimensions and scaling -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fixups</title>

<!-- Link to the bootstrap and css page -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">

  
</head>
<body>
<nav>
    <a href="index.php"><img src="images/logo.png"></a>
  </nav>
  
  <div class="con">
    <div class="row content">
      <div class="col-md-6 mb-3">
        <img src="images/pros.jpg" class="img-fluid" alt="image">
      </div>
      <div class="col-md-6">
        <h3 class="signin-text mb-3"> Register </h3>
        <p> Sign up for email updates and we'll notify you about further details.</p>

        <!-- Link to the php database -->
        <!-- Create the form -->
        <form action="insert_register.php" method="post">
      

          <div class="form-group">
           <label for="name">Full name</label>
            <input type="name" placeholder="First and last name" name="name" id="name" class="form-control" onchange="name_validation(this)" required>
          </div>


          <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" placeholder="ex: your_email@example.com" name="email" id="email" class="form-control" required>
        </div> 
        <br>

        <div class="form-group">
           <label for="contact">Contact number</label>
            <input type="contact" name="contact" id="hp" class="form-control" onchange="contact_validation(this)" required>
          </div>
  
        <br>

        <label for ="servi">Service that you provide: </label>
          <input type="text" name="service" id="servi" list="serviList" required>
          <datalist id="serviList">
              <option>A/C Service</option>
              <option>Cleaning Service</option>
              <option>Electrical & Wiring</option>
              <option>Handyman</option>
              <option>Home Disinfection</option>
              <option>Lawn Mowing</option>
              <option>Painting Service</option>
              <option>Pest Control</option>
              <option>Plumbing Service</option>
          </datalist>
          <br><br>

    <div class="form-group">
      <label for="summary">Summary about your business. (Minimum 50 words)</label>
      <textarea type="summary" name="summary" id="summary" class="form-control" onchange="wordLimit(this)" required></textarea>  
    </div>
  <br>
    <div class="form-group form-check">
      <input type="checkbox" name="input" class="form-check-input" id="checkbox" required>
      <label class="form-check-label" for="checkbox">I agree to Fixups Terms of Service, Privacy Policy and to receive emails that I can opt out of at any time.</label>
  </div> 


<button class="btn btn-class">Submit</button>
</form>
</div>
</div>
</div>

<script>
  
// Minimum word length for textarea
   var wordLen = 50; 
     function wordLimit(obj)
     {
      var len = obj.value.split(/[\s]+/);
       if(len.length < wordLen){
           alert("You cannot write less than "+wordLen+" words in this text area.");
           obj.oldValue = obj.value!=obj.oldValue?obj.value:obj.oldValue;
           obj.value = obj.oldValue?obj.oldValue:"";
           return false;
       }else{
     return true;
   }

     event.preventDefault();
   }

document.getElementById('form').addEventListener('submit', wordLimit);

  // Phone number validation

   function validatePhoneNumber(input_str) {
    var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    return re.test(input_str);
}

function contact_validation(event) {
    var phone = document.getElementById('hp').value;
    if (!validatePhoneNumber(phone)) {
        alert("Please enter a valid phone number");
        return false;

    } else {
      return true;
        
    }
    event.preventDefault();
}

// Name validation

function validateName(input_str) {
    var letters = /^[A-Za-z]+$/;
    return letters.test(input_str);
  }

// This function will validate Name.
function name_validation(event){ 
  var name = document.getElementById('name').value; 
  if(validateName(name)){
  return true;
  }
  else {
  alert('Full name must have alphabet characters only');
  return false;
  }
  event.preventDefault();
}

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  

</body>
</html>
