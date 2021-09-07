<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Task 3</title>
</head>
<body>




<div class="container">

    <form action="action.php" method="POST" >

        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName4">Name</label>
            <input type="text" name="name" class="form-control" id="inputName4">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
        </div>


        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label" for="mailCheck">
                <input class="form-check-input" name="gender" type="radio" id="mailCheck" value="mail1">
                Mail
                </label>
                <label class="form-check-label ml-4" for="femailCheck">
                <input class="form-check-input" name="gender" type="radio" id="femailCheck" value="femail2">
                Femail
                </label>
            </div>
        </div>



        <label for="basic-url">linkedin URL</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Linkedin URL : </span>
            </div>
            <input type="url" name="linkedinUrl" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>


        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

</div>



</body>
</html>