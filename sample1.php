<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sample</title>
    <link href="design.css" rel="stylesheet" type="text/css">

</head>

<body>
    <?php
    include_once('header.php');
    ?>
<?php
    include_once('nav.php');
    ?>

    </div>
    <div class=" container-md w-50 text-white">
        <form onsubmit="return verifyPasswords()">
    
        <div class="input-group">
                <span class="  input-group-text ">Name </span>
                <input type="text" placeholder="Eg : Thesara" class="form-control">
            </div>
            <div class=" input-group mt-4">
                <span class="input-group-text">Email </span>
                <input type="email" name="email" placeholder="Eg : Someone@mail.com" id="email" class="form-control">
            </div>
            <div class="  input-group mt-4">
                <span class="input-group-text">Password</span>
                <input type="password" name="password" id="pass1" class="form-control" onkeyup="hideError()">
                <span class="input-group-text"> Re-typePassword</span>
                <input type="password" name="password" id="pass2" class="form-control" onkeyup="hideError()">
            </div>

            <center>
                <div class="alert text-dark text-center alert-dark w-50  mt-3" role="alert" id="alert" style="visibility:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                    </svg>
                    Password field doesn't match with the Re-type Password field
                </div>
            </center>
            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <div class="text-center ">
                <button type="submit" class="btn btn-fluid text-white">Forogotten password</button>
            </div>
        </form>
        <script>
            function verifyPasswords() {
                var p1 = document.getElementById("pass1").value;
                var p2 = document.getElementById("pass2").value;
                if (p1 != p2) {
                    document.getElementById("alert").style.visibility = "visible";
                    return false;
                } else {
                    alert('Passwords verified');
                    return true;
                }

            }
        </script>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="text-white">
        <footer>All rights reserved 2021®. Designed by Thesara Subasinghe</footer>
    </div>
</body>

</html>