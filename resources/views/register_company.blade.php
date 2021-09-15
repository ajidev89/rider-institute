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
    <script defer src="{{ asset('js/all.js') }}" ></script>
</head>
<body>
    <div class="err"></div>
    <div class="all">

        <form method="POST">
            <div class="form">
                <label class="content">
                    <span class="name">Company name</span>
                </label>
                <input type="text" name="name" class="username" placeholder="enter your full Company Name" autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">Company Address</span>
                </label>
                <input type="text" name="Address" class="Address" placeholder="enter your full Address"  autocomplete="off" required />
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">Phone Number</span>
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

</script>
</html>
