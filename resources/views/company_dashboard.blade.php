<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <nav>
        <ul>
          <a href="{{ route('logout') }}">  <li>Log out</li> </a>
        </ul>
    </nav>
   <section>
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


    <div class="all">
            <div class="form">
                <label class="content">
                    <span class="name">Job</span>
                </label>
                <select class="job">
                    <option>rider</option>
                    <option>driver</option>
                    <option>rider/driver</option>
                </select>
            </div>


            <div class="form">
                <label class="content">
                    <span class="name">price</span>
                </label>
                <select class="price">
                    <option data-price="700">&#8358;700 for 3day</option>
                    <option data-price="2000">&#8358;2000 for 1week</option>
                    <option data-price="2500">&#8358;2500 for 2week</option>
                </select>
            </div>

            <div class="form">
                <label class="content">
                    <span class="name">week</span>
                </label>
                <select  class="weeks">
                    <option class="week"></option>
                </select>
            </div>


            <div class="form">
                <label class="content">
                    <span>number of jobs</span>
                </label>
                <select  class="number">
                    <option class="num"></option>
                </select>
            </div>


            <button type="buttton" class="door" name="click">sign-up</button>
    </div>
    <div class="mess"></div>
    <center><a href="{{ route('applicant') }}"><button type="button">view applicant</button></a></center>
</section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    let email = "{{ Auth::user()->email }}"

    let click = document.querySelector(".click")
    let image = document.getElementById('input');
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let error = document.querySelector(".err")
    let form = document.querySelectorAll(".form");
    let week = document.querySelector(".week");
    let weeks = document.querySelector(".weeks");
    let number = document.querySelector(".number");
    let num = document.querySelector(".num");
    let mess = document.querySelector(".mess");
    week.textContent = 'select price'
    weeks.setAttribute('disabled', true);
    num.textContent = 'select price';
    number.setAttribute('disabled', true)
    console.log(form)
  let door = document.querySelector(".door");
  let price = document.querySelector(".price");
  let job = document.querySelector(".job")
  console.log(price)
  let amount ="";
  price.addEventListener('change', function(e){
   amount = e.target.options[event.target.selectedIndex].dataset.price

   if(amount == '700'){
     week.textContent = '3days'
     weeks.removeAttribute('disabled')
     num.textContent = '100 applicant';
     number.removeAttribute('disabled')
   }else if(amount == '2000'){
    week.textContent = '1 week';
    num.textContent = '200 applicant';
    number.removeAttribute('disabled')
    weeks.removeAttribute('disabled')
   }else if(amount == '2500'){
    week.textContent = '2 week'
    num.textContent = '300 applicant';
    weeks.removeAttribute('disabled')
    number.removeAttribute('disabled')
   }

  })

  door.addEventListener("click", function(e){
      e.preventDefault
      console.log(amount)
      console.log(weeks.value)
      console.log(job.value)


    let handler = PaystackPop.setup({
        key: 'pk_test_717211460dbb54580490c8c657c4b42e4e35da03', // Replace with your public key
        email: email,
        amount:amount* 100,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function(){
          alert('Window closed.');
        },
        callback: function(response){
            let ref = response.reference
            console.log(ref)

            $.ajax({
                method:"GET",
                url:"http://127.0.0.1:8000/money/"+ref,
                success:function(res){
                  let arr = JSON.parse(res);
                  console.log(arr);
                  if(arr.status = "true"){
                   let message = arr.message;
                   mess.innerText = message;
                      $.ajax({
                 method:"post",
          url:"http://127.0.0.1:8000/payment",
           data:{
             job:job.value,
             amount:amount,
               week:weeks.value,
              number:number.value,
              message:message,
              code:ref,
             _token:token
             },
            success:function(response){
            console.log(response)
              },
            error:function(err){
               console.log(err)
                 }
               })

                  }
                }
            })

      // Make an AJAX call to your server with the reference to verify the transaction
    },
    onClose: function() {
      alert('Transaction was not completed, window closed.');
    },
  });
  handler.openIframe();


  })


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

    $.ajax({
        method:"GET",
        url:"http://127.0.0.1:8000/lastofus",
        success:function(res){
            console.log(res)

        },
        error:function(err){
          console.log(err)
        }
    })



</script>
</html>
