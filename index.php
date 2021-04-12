<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Basic Banking System</title>

</head>

<body> 
    <?php
    include 'nav.php';
    ?>
     <div class="container-fluid">
        <div class="row intro py-1";>
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="color: green";>
                    <h1>Welcome to Royal Bank</h1>
                   
 </div>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            
            </div>
        </div>

        <div class="row activity text-center">
            <div class="col-md act">
                <br>
                <img src="user4.webp" alt="user" class="img-fluid"  width="400" height="150">
                <a href="createuser.php"><button style="background-color: #C86DFB;">Create User</button></a>
            </div>

            <div class="col-md act">
                <br>
                <img src="transfer.jpg" alt="transfer" class="img-fluid" width="500" height="150"> 
                <a href="transfermoney.php"><button style="background-color: #C86DFB;">Make Transaction</button></a>

               
            </div>

            <div class="col-md act">
                <br>
                <img src="transaction.jpg" alt="transaction" class="img-fluid" width="300" height="175">
                <a href="transactionhistory.php"><button style="background-color: #C86DFB;">Transaction History</button></a>
                
            </div>
          </div>
        </div>
    </div>
    <footer class="text-center mt-5 py-2" style="color: green">
        <p>&copy 2021. Made by <b>vyshnavi</b><br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
<style>
    body
        {
            background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('bg.jpg');
            background-size:cover;
            background-repeat:no-repeat;
        }
    </style>
</html>