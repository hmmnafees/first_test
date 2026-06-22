<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login System</title>
  <style>
    body{
        font-family: Arial;
        background: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .box{
        background: white;
        padding: 20px;
        width: 300px;
        border-radius: 10px;
        box-shadow:0px 0px 10px #ccc;
    }
    input{
        width: 100%;
        padding: 10px;
        margin: 10px 0; 
    }
    button{
        width: 100%;
        padding: 10px;
        background: black;
        color: white;
        border: none;
        cursor: pointer;
    }
    #msg{
        text-align: center;
        margin-top: 10px;
    }
  </style>
</head>
<body>
    <div class="box">
        <h2>Login</h2>
        <input type="text" id="username" placeholder="Username"><br><br>
        <input type="password" id="password" placeholder="Password"><br><br>
             <button onclick="login()" type="submit">Login</button>
             <p id="msg"></p>
    </div>
    <script>
        function login(){
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            var xhr = new XMLHttpRequest();
            xhr.open("POST","auth_action.php",true);
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");

            xhr.onload = function(){
                if(this.responseText.trim() == "success"){
                    document.getElementById("msg").innerHTML = "login success";

                    setTimeout(()=>{
                        window.location.href = "index.php";
                    }, 1000);
                }else{
                    document.getElementById("msg").innerHTML = "invailed login";
                }
            };
            xhr.send("action=login&username=" + username + "&password=" + password);
        }
    </script>
</body>
</html>