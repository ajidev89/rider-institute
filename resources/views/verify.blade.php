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
    <div class="all">

        <form method="POST">

            <div class="form">
                <label class="content">
                    <span class="name">password</span>
                </label>
                <input type="password" name="password"  class="password" placeholder="enter your phone number" autocomplete="off" required />
            </div>



            <div class="form">
                <label class="content">
                    <span class="name">confirm password</span>
                </label>
                <input type="password" name="password_confirmation" class="password_confirmation" placeholder="enter your phone number" autocomplete="off" required />
            </div>


            <button type="submit" class="send" name="send">sign-up</button>
        </form>
    </div>
</body>
<script>
let pin  = "{{ $code }}";
let send = document.querySelector(".send");
let password_confirmation = document.querySelector(".password_confirmation");
let password = document.querySelector(".password")
let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
send.addEventListener("click", function(e){
    e.preventDefault();
    $.ajax({
        method:"post",
        url:"http://127.0.0.1:8000/check",
        data:{
            password:password.value,
            password_confirmation:password_confirmation.value,
            pin:pin,
             _token: token
        },
        success: function (res){
            if(res.equal){
                console.log(res.equal)
             window.location.href =`http://127.0.0.1:8000/register_${res.equal}`;
            }else if(res.sent && res.user){
                window.location.href = `http://127.0.0.1:8000/${res.sent}/${res.user}`;
            }
        },
        error:function(error){
            console.log(error)
        }
    })
})
</script>
</html>
