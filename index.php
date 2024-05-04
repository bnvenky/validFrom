<!DOCTYPE html>
<html>
  <head>
    <title>Form Validations</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <h1 class="form-heading text-center">Add User</h1>
      <form id="myForm" action="connect.php" method="post">
        <div class="mb-3">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" required />
          <p id="nameErrMsg" class="error-message"></p>
        </div>
        <div class="mb-3">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" required/>
          <p id="emailErrMsg" class="error-message"></p>
        </div>
        <div class="mb-3">
          <label for="status">Working Status</label>
          <select id="status" name="working" class="form-control">
            <option  value="Active">Active</option>
            <option  value="Inactive">Inactive</option>
          </select>
        </div>
        <div class="mb-3">
          <h1 class="gender-field-heading">Gender</h1>
          <input type="radio" name="gender" id="genderMale" value="Male" checked />
          <label for="genderMale">Male</label>
          <input type="radio" name="gender" id="genderFemale" value="Female" class="ml-2"/>
          <label for="genderFemale">Female</label>
        </div>
        <input type="submit" class="btn btn-primary"></input>
      </form>
    </div>
  </body>
</html>