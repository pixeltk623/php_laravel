<?php 
    
    // if (isset($_POST['submit'])) {
        
    //     $name = $_POST['name'];

    //     if (strlen($name)<=5) {
    //         $className =  "is-invalid";
    //     } else {
    //         $className =  "is-valid";
    //     }
    // }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-3">

        <form>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer01">First name</label>
      <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationServer02">Last name</label>
      <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationServer03">City</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
      <div id="validationServer03Feedback" class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer04">State</label>
      <select class="custom-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
      <div id="validationServer04Feedback" class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationServer05">Zip</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
      <div id="validationServer05Feedback" class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div  id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<!-- 
        <form>
            <div class="row">
                 <div class="col-sm-6">
                     <div class="form-group">
                         <label>Name</label>
                         <input type="text" name="" class="form-control" value="S Kumar">
                     </div>
                 </div>

                 <div class="col-sm-6">
                     <div class="form-group">
                         <label>Name</label>
                         <input type="text" name="" class="form-control" value="S Kumar">
                     </div>
                 </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                         <label>City</label>
                         <input type="text" name="" class="form-control" >
                     </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                         <label>City</label>
                         <input type="text" name="" class="form-control" >
                     </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                         <label>City</label>
                         <input type="text" name="" class="form-control" >
                     </div>
                </div>
            </div>
            <div class="form-group">
                 <div class="form-check">
            <input type="radio" name="" class="form-check-input">
            <label class="form-check-label" for="defaultCheck1">
            Default checkbox
          </label>
        </div>
            </div>

            <button class="btn btn-primary">Submit</button>
        </form> -->

     <!--    <form>
  <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputName">Name</label>
      <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
    </div>
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
      </div>
    </div>
    <div class="col-auto my-1">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
        <label class="form-check-label" for="autoSizingCheck2">
          Remember me
        </label>
      </div>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
 -->
<!-- 
        <form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
    </div>

    <div class="col-auto">

      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
      </div>

    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
          Remember me
        </label>
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form> -->

<!-- 
        <div class="row">
            <div class="col-sm-6">
                <input type="text" name="" placeholder="First name" class="form-control">     
            </div>
            <div class="col-sm-6">
                <input type="text" name="" placeholder="Last name" class="form-control">
            </div>
        </div> -->

        <!-- <form>
  <div class="form-row">
    <div class="col">

      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</form> -->


<!-- 
        <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
  <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
</div>


        <div class="form-check">
            <input type="radio" name="" class="form-check-input">
            <label class="form-check-label" for="defaultCheck1">
            Default checkbox
          </label>
        </div>

        <div class="form-check">
            <input type="radio" name="" class="form-check-input">
            <label class="form-check-label" for="defaultCheck1">
            Default checkbox
          </label>
        </div> -->

<!--         <form>
          <div class="form-group">
            <label for="formControlRange">Example Range input</label>
            <input type="range" class="form-control-range" id="formControlRange">
          </div>
        </form> -->
<!-- 
        <form class="form-inline">
          <div class="form-group mb-2">
            <label for="staticEmail2" class="sr-only">Email</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Password</label>
            <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
        </form> -->


        <!-- <form method="POST">

              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword">
                </div>
              </div>


            <div class="form-group">
                <label>Email Address</label>
                <input type="text"  class="form-control" name="name" placeholder="Enter Your Name" readonly>
            </div>

            <div class="form-group">
                <label>File</label>
                <input type="file" name="" class="form-control-file">
            </div>
            <div class="form-group">
                <label>Select</label>
                <select class="form-control">
                    <option>Test</option>
                    <option>Test</option>
                    <option>Test</option>
                    <option>Test</option>
                </select>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <textarea class="form-control"></textarea>
            </div>

            <input type="submit" name="submit" class="btn btn-primary"> 
        </form> -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>