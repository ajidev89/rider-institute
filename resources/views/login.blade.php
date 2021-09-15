<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="err"></div>
    <div class="all">

        <form method="POST">
           
            <div class="form">
                <label class="content">
                    <span class="name">Email</span>
                </label>
                <input type="text" name="email"  class="email" placeholder="enter your email" autocomplete="off" required />
            </div>



            <div class="form">
                <label class="content">
                    <span class="name">password</span>
                </label>
                <input type="password" name="password" class="password" placeholder="enter your phone number" autocomplete="off" required />
            </div>


            <button type="submit" class="send" name="send">sign-up</button>
        </form>
    </div>
</body>
<script>
let err = document.querySelector(".err");
let send = document.querySelector(".send");
let email = document.querySelector(".email");
let password = document.querySelector(".password")
let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
send.addEventListener("click", function(e){
    e.preventDefault();
    $.ajax({
        method:"post",
        url:"http://127.0.0.1:8000/log",
        data:{
            email:email.value,
            password:password.value,
            _token: token
        },
        success: function (res){
           if(res.status && res.user){
             window.location.href = `http://127.0.0.1:8000/${res.status}/${res.user}`;
           }else if(res.errors){
            err.innerHTML = `<p class='failed'> ${res.errors}</p>`;
           }
        },
        error:function(error){
            console.log(error)
        }
    })
})
</script>
</html>