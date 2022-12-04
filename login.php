<!DOCTYPE html>
<head>
    <style>
    body, html {   
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        display:table;
    }
    body {
        display:table-cell;
        vertical-align:middle;
    }
    .forms{
        display:table;
        margin:auto;
        border: 3px solid green;
    }
    h1{
        color : red;text-align: center
    }
    </style>
</head>
<body>
<div class="forms">
    <h1>Welcome<h1>
    <form method="GET" action="acceuil.php">
        <label >Login</label>
        <input name="Input1" type="text" placeholder="login"><br>
        <label >Password</label>
        <input type="password" name="Input2" placeholder="Password"><br>
        <button type="submit">Submit</button>
    </form>
</div>
    <?php
       
    ?>  
</body>
</html>