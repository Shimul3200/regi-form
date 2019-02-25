<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=full-width, initial-scale=1">
    <style>

        body {font-family: Arial, Helvetica, sans-serif;
        }
        form {
            width:80%;
            display:inline-block;
            border: 3px solid aquamarine;
            text-align: left;
        }

        input[type=text], input[type=password], input[type=email] {
            width:100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #57b4fc;
            color: white;
            font-size: 18px;
            padding: 12px 10px;

            border: none;
            cursor: pointer;
            width: 15%;
            text-align: center;
            display: inline-block;
            margin-top: 15px;
        }

        button:hover {
            opacity: 0.8;
            color:#000;
        }
        a.bt2:hover {
            opacity: 0.8;
            color:#000;
        }

        .page{
            margin:0 auto;
            width:80%;
            text-align: center;
        }

        .bt1 {

            margin-left: 278px;
            margin-right: 16px;

        }

        .container {
            padding: 16px;
        }
        .header{
            width:80%;
            text-align:center;
            font-size:16px;
            padding:1px 3px;
            margin: 0 auto;
            background-color: aquamarine;
        }
        .footer{
            width:80%;
            height: 50px;
            padding:1px 3px;
            margin: 0 auto;
            background-color: aquamarine;
        }
        a.bt2{
            background-color: #57b4fc;
            color: white;
            font-size: 18px;
            padding: 12px 10px;
            border: none;
            cursor: pointer;
            width: 15%;
            text-align: center;
            display: inline-block;
            margin-top: 15px;
        }




    </style>
</head>
<body>
<div class="page">
    <div class="header"><h2>Registration Form</h2></div>

    <form action="regi.php" method="POST">

        <div class="container ">
            <label for="firstname"><b>First Name</b></label>
            <input type="text" placeholder="Enter your first name" name="firstname">

            <label for="lastname"><b>Last Name</b></label>
            <input type="text" placeholder="Enter your last name" name="lastname">


            <label for="username"><b>User Name</b></label>
            <input type="text" placeholder="Enter your user name" name="username">

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter your email" name="email">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter your Password" name="pass">



            <button class="bt1" type="submit" name="register"><b>Register</b></button>
            <a href="index2.php" class="bt2"><b>LogIn</b></a>
        </div>
    </form>

        <div class="footer"></div>



</div>
</body>
</html>
