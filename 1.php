<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1{
            text-align:center;
            color:greenyellow;
        }
        body{
            background-color: aqua;

        }
        #a
        {
            background-color: pink;
            align-self: auto;
            align-items: center;
            padding:30px 30px;
       }
        #b
        {
            background-color: yellow;
            padding:30px 30px;
        }
        #c
        {
            background:lightblue;
            padding:30px 30px;

        }
        #cc
        {
            padding:20px;
            line-height: 10px;
        }
        input[type="submit"]
        {
            text-align:center;
            padding:10px 10px;
        }
        #u
        {
            padding-right:15px;
            padding-left:10px;
            display: inline;
            line-height:20px;
        }
        #u a
        {
            text-decoration:none;
        }
        #u li
        {
            list-style-type:none;
            display:inline;
            padding-left:35px;
            padding-right:35px;
        }
        #view
        {
            display:none;
            position:absolute;
        }
        *
        {
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .dropdown
        {
            display:flex;
            justify-content:center;
            margin-top:10px;
            list-style-type:none;
        }
        a{
            display:block;
            width:200px;
            background-color:black;
            color:white;
            padding:10px 0;
            font-size:1.2em;
            text-decoration:none;
            text-align:center;
        }
        a:hover{
            background-color:skyblue;
        }
        .product
        {
            display:none;
            list-style-type:none;
        }
        .dropdown li:nth-child(3):hover .product
        {
            display:block;
            background-color:yellowgreen;
        }
        .a
        {
            display: flex;
            float: left;
            padding:15px;
            margin:20px;
            width:50px;
            height:50px;
        }
    </style>
</head>
<body>
    <h1>WELCOME TO ONLINE ADDRESS BOOK</h1>
    <div class="container">
    <ul class="dropdown">
    <li><a href="home.php">Home</a></li>
    <li><a href="2.php">Add a new user</a></li>
    <li><a href="#">View</a>
    <ul class="product">
    <li><a href="4.php">View USer</a></li>
    <li><a href="5.php">View all USers</a></li>
    </ul></li>
    <li><a href="6.php">Update user</a></li>
    <li><a href="7.php">Delete USer</a></li>
    <li><a href="regicstration.php">Logout</a></li>
    </ul>
    </div>
   
    </body>
</html>