
<!DOCTYPE html>
<html lang="en">
<!--- This is the head tag -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Link to our stylesheets make sure you're connected to wifi as the stlesheets are in the cloud-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
  <title>Simple login app</title>
</head>

<!-- Body -->
<body>
    <h2 id="topg"> Hey there, kindly register to continue</h2>
    <div id="top-page">
    <!-- start of the form element -->
    <form name="regdata" method="post" action="account.php" id="form" autocomplete="off">
    <div class="form-row align-items-center">
         <!-- name -->
          <div class="col-auto">
                <label class="sr-only" for="inlineFormInput">Name</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" required name="name" placeholder="Name">
          </div>
          <!-- address -->
          <div class="col-auto">
                <label class="sr-only" for="inlineFormInput">Address</label>
                <input type="text" class="form-control mb-2" id="inlineFormInput" name="address" placeholder="Address">
          </div>
          <!-- username -->
          <div class="col-auto">
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" name="username" placeholder="Username">
                </div>
          </div>
          <!-- Hobby -->
          <div class="col-auto">
              <label class="sr-only" for="inlineFormInputGroup">Hobby</label>
              <div class="input-group mb-2">
                <input  type="text" name="hobby" class="form-control" placeholder="Enter your hobby here...">
              </div>
      </div>

      <!-- Login information -->
          </div>
          <p> Login information</p>
          <div class="form-row align-items-center">
            <div class="col-auto">
              <label class="sr-only" for="inlineFormInputGroup">Email</label>
              <div class="input-group mb-2">
                <input type="email" class="form-control" id="inlineFormInputGroup" name="email" placeholder="Email">
              </div>
            </div>
            <div class="col-auto">
              <label class="sr-only" for="inlineFormInputGroup">Password</label>
              <div class="input-group mb-2">
                <input type="password" class="form-control" id="inlineFormInputGroup" name="pass" placeholder="Choose a password">
              </div>
            </div>
            <input type="hidden" name="hobby" value="I love making new friends">

            <div class="col-auto">

              <button type="submit" class="btn btn-primary mb-2">Submit</button>

          </div>
        </div>
  </form>
</div>
</body>
</html>
