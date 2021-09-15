<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="err"></div>
    <div class="all">

        <form method="POST">
            <div class="form">
                <label class="content">
                    <span class="name">name</span>
                </label>
                <input type="text" name="name" class="username" placeholder="enter your full Company Name" autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">Address</span>
                </label>
                <input type="text" name="Address" class="Address" placeholder="enter your full Address"  autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">Phone</span>
                </label>
                <input type="tel" name="phone"  class="phone" placeholder="enter your phone number" autocomplete="off" required />
            </div>



            <div class="form">
                <label class="content">
                    <span class="name">Email</span>
                </label>
                <input type="text" name="Email" class="Email" placeholder="enter your Email" autocomplete="off" required />
            </div>


            <button type="submit" class="click" name="click">sign-up</button>
        </form>
    </div>
</body>
<script>
    let person = document.querySelector(".username");
    let Address = document.querySelector(".Address");
    let phone = document.querySelector(".phone");
    let Email = document.querySelector(".Email");
    let click = document.querySelector(".click");
    let err = document.querySelector(".err");
    let type_status = 'agent';
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    console.log(click)
    click.addEventListener("click", function(e){
    e.preventDefault();
        $.ajax({
            method:"post",
            url:"http://127.0.0.1:8000/send",
            data:{
                name:person.value,
                Address:Address.value,
                phone:phone.value,
                email:Email.value,
                type_status:type_status,
                 _token:token
            },
            success: function (res){
               console.log(res)
               if(res.sucess){
                   err.innerHTML=`<p class='success'>${res.sucess}</p>`;
               }
            },
            error:function(error){
             let mess = error.responseJSON.errors
             if(mess.email && mess.phone){
                 console.log(mess.email[0])
                 console.log(mess.phone[0])
                 err.innerHTML = `<p class='failed'>${mess.email[0]} & ${mess.phone[0]}</p>`;
             }else if(mess.phone){
                err.innerHTML = `<p class='failed' >${mess.phone[0]}</p>`;
             }else if(mess.email){
                err.innerHTML = `<p class='failed' >${mess.email[0]}</p>`;
             }

            }

    })
})
</script>
</html>
