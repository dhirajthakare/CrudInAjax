<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


</head>

<body class="container offset-1">
    <h1>CRUD Operation Using AJAX</h1>

    <form id="myform"  method="post">

        <div class="form-group col-8">
            <label for="username">Username</label>
            <input type="hidden" name="id" id="id" class="form-control"><br>

            <input type="text" name="username" id="username" class="form-control" >

        </div>

        <div class=" form-group col-8">
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" class="form-control" >

        </div>

        <div class=" form-group col-8">
            <button type="submit" id="submit" name="submit" class="btn btn-success form-control">Save</button>

        </div>
        <div class=" form-group col-8">
            <input style="display:none" type="button" id="Update" name="Update" value="Ubdate" class="btn btn-warning form-control">

        </div>


    </form>
    <div>

        <input type="text" id="searchstring" placeholder="Search string here" class="form-control">

    </div>


    <h1>Display data Using Ajax</h1><br>

    <!-- <button class="btn btn-danger" id="displaydata" type="button" >GETData</button> -->
    <table class="table table-striped text-center table-hover table-bordered ">

        <thead>

            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Delete</th>
            <th>Edit</th>

        </thead>

        <tbody id="responce">

        </tbody>
    </table>


<script src="CrudAjax.js">

</script>
</body>

</html>