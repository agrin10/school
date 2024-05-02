<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #bfbfbf;
            background-image: url("");
        }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 5px;
      overflow: hidden;
      background-color: #333;
      border-radius: 20px;
    }
    
    li {
      float: left;
      margin-left:20px ;
      font-size: 15px;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover{
      background-color: #111;
      border-radius: 20px;
    }
    
    .active:hover {
      background-color: #bfbfbf;
      color: black;
      border-radius: 20px;
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .right:nth-child(1){
        background-color: red;
        height: max-content;
        width: max-content;

    }
    .lef:nth-child(2){
        background-color: red;
        height: max-content;
        width: max-content;

    }
    </style>
</head>
<body>
    <div class="header">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
            <li style="float:right"><a class="active" href="signup.html">register</a></li>
            <li style="float: right;"><a class="active" href="login.html">log in </a></li>
        </ul>
    </div>
    <div class="container">
        <div class="right">
            <img src="" alt="">
        </div>
        <div class="left">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus temporibus ipsa at. Nulla ab consequatur dolores consequuntur sequi eos libero in possimus tenetur, repellat magni porro ex odio ut cum.</p>
        </div>
    </div>
   
    
</body>
</html>