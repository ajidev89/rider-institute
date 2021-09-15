<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>

    <div class="whole">

        <section class="carrier">
            <div class="card">
                Login as Company

                <div>
                    <a href="{{ route('login') }}"><button type="button">Login</button></a>
                </div>


            </div>

            <div class="card">
                Login as delivery agent

                <div>
                 <a href="{{ route('login') }}">  <button type="button">Login</button></a>
                </div>


            </div>

        </section>


    </div>
    
</body>
</html>