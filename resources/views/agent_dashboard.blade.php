<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
          <a href="{{ route('logout') }}">  <li>Log out</li> </a>
        </ul>
    </nav>
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>address</th>
            <th>phone</th>
        </tr>
        <tr>
            <td>{{  Auth::user()->name }}</td>
            <td>{{  Auth::user()->email }}</td>
            <td>{{  Auth::user()->Address }}</td>
            <td>{{  Auth::user()->phone }}</td>
        </tr>
    </table>
    <form method="post" enctype="multipart/form-data">

        <input type="file" name="files[]" multiple/>
        <button type="submit" class="click">sumbit</button>
        <p class="err"></p>
    </form>
</section>
</body>
<script>
    let click = document.querySelector(".click")
    let image = document.getElementById('input');
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let error = document.querySelector(".err")


    click.addEventListener("click", function(e){
        e.preventDefault();
        let files = document.querySelector('[type=file]').files
       let url ="http://127.0.0.1:8000/info";
       if(files.length > 1){
        console.log("please select only one image")
         error.innerHTML = 'please select only one image';
         error.style.color = 'red';
       }else if (files.length == 1){


           let currentPic = files[0].type
        if (currentPic == "image/png" ||currentPic == "image/jpg" || currentPic == "image/jpeg") {

let formData = new FormData();
url = 'http://127.0.0.1:8000/info';
formData.append('image', files[0])
formData.append('_token', token)
fetch(url, {
    method: "POST",
    body: formData
}).then(Response => {
    return Response.json()
    //   console.log(Response)
}).then(res => {
    console.log(res)




}).catch(err => {
        console.log(err)
    })



        }else{
            error.innerHTML = 'please insert the right file formart';
            error.style.color = 'red';
        }

       }

        //let currentPic = files.type
       // console.log(currentPic)
     //for(let i = 0; i < files.length; i++){
     // let file = files[i]
      //console.log(file)
     //}

    })
</script>
</html>
