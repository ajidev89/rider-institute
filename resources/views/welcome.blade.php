<!DOCTYPE html>
    <html lang="en">
    <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
   <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
        <title>Rider Institute</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body class="font-raleway">
        <header >
        <section  class=" fixed visible z-10 bg-ash-500 w-full shadow-lg">
            <nav class="container flex items-center mx-auto p-5" >
                <div class="flex space-x-14 ">
                    <h5 class="font-semibold"> Riders Institute </h5>
                    <ul class="flex space-x-5 font-semibold capitalize">
                        <li>Home</li>
                        <li >Products & Services</li>
                        <li >Photo-gallery</li>
                        <li >Blogs</li>
                        <li >Contact Us</li>
                        <li >AboutUs</li>
                        <li>Online Chat</li>
                    <ul>
                </div>
                <div id="status" class="flex-grow flex items-center space-x-6 ">
                 <article class="flex items-center space-x-8  ml-12">
                    <button class="flex space-x-2" data-item="Login">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <p>Login</p>
                    </button>
                    <button data-item="Register" class="flex space-x-2 bg-blue-500 rounded-full px-4 py-2 text-gray-100 ">
                        <div class="flex items-center" >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <p class="">Register</p>
                    </button>
                    </article>
                </div>
            </nav>
            </section>
            <div class="relative flex justify-center items-center  ">
              <section id="img"  class="relative"  style="background:;">
                <img src="http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/img/banner/banner-2.jpg" id="head" class="w-full h-full" />
              </section>
               <div class="absolute text-center text-gray-100 w-full">
                   <h2 class="text-5xl font-semibold" >Find Your job</h2>
                   <h5 class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                   <div class="flex justify-center mt-5 text-gray-900">
                        <input type="type" class="p-4 w-96  focus:outline-none rounded-l" placeholder="Job title or Company name"/><input type="type" placeholder="Location" class="p-4 border-l-2 border-gray-300 w-96 focus:outline-none" /><button type="button" class="bg-blue-500 rounded-r px-4 font-semibold text-gray-100 ">Search</button>
                   </div>
                </div>
            </div>
        </header>
        <section class="w-full  grid place-items-center ">

        <div class="mt-20  grid place-items-center">
        <h1 class="text-5xl">Popular Categories</h1>
        <h5 class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
        </div>

        <aside class="container mx-auto grid grid-cols-4 place-items-center">

          <section class="grid place-items-center py-4">
            <div id="img" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h2>Accounting / Finance</h2>
            <h6>(2143)</h6>
          </section>
          <section class="grid place-items-center py-4">
            <div id="img" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h2>Accounting / Finance</h2>
            <h6>(2143)</h6>
          </section>
          <section class="grid place-items-center py-4">
            <div id="img" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h2>Accounting / Finance</h2>
            <h6>(2143)</h6>
          </section>


          <section class="grid place-items-center py-4">
            <div id="img" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
            </div>
         <h2>Accounting / Finance</h2>
           <h6>(2143)</h6>
          </section>


           <section class="grid place-items-center py-4">
            <div id="img" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
            </div>
         <h2>Accounting / Finance</h2>
           <h6>(2143)</h6>
          </section>

          <section class="grid place-items-center py-4">
            <div id="img" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
            </div>
         <h2>Accounting / Finance</h2>
           <h6>(2143)</h6>
          </section>

          <section class="grid place-items-center py-4">
            <div id="img" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
            </div>
         <h2>Accounting / Finance</h2>
           <h6>(2143)</h6>
          </section>

          <section class="grid place-items-center py-4">
            <div id="img" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
            </div>
         <h2>Accounting / Finance</h2>
           <h6>(2143)</h6>
          </section>

        </aside>



        </section>
        <div class="w-full  grid place-items-center ">
            <div class="mt-20  grid place-items-center">
                <h1 class="text-5xl">Recent Jobs</h1>
                <h5 class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                </div>
                <aside class="mt-6 w-4/5 border border-white-600 rounded ">
                   <ul>
                    <li class="py-5 px-5 border-b border-fuchsia-600 flex justify-between">
                        <section class=" space-x-2 flex ">
                       <div class="h-20 w-20 border border-white-600 rounded">
                         <img src="http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/img/company-logo/logo-1.png" class="h-20 w-20 rounded"/>
                      </div>
                      <aside class="">
                          <h2 class="">Restaurant General Manager</h2>
                           <ul class="text-xs flex space-x-2">
                               <li>Hotel</li>
                               <li>New York City</li>
                               <li>Full Time</li>
                           </ul>
                           <p class="text-xs">Deadline: Jan 31, 2019</p>
                      </aside>
                     </section>

                      <div class="w-3/12 flex justify-between">
                          <button class=" py-3 px-3 rounded-full h-12 w-12  border border-white-600 flex justify-center items-center">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
                                 <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                               </svg>
                          </button>
                          <button class=" py-3 px-3  h-12 w-48 border border-white-600 flex justify-center">Apply Now</button>
                      </div>
                     </li>

                        <li class="py-5 px-5 border-b border-fuchsia-600 flex justify-between">
                            <section class=" space-x-2 flex ">
                           <div class="h-20 w-20 border border-white-600 rounded">
                             <img src="	http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/img/company-logo/logo-3.png" class="h-20 w-20 rounded"/>
                          </div>
                          <aside class="">
                              <h2 class="">Marketing Dairector</h2>
                               <ul class="text-xs flex space-x-2">
                                   <li> Red</li>
                                   <li>New York City</li>
                                   <li>Part Time</li>
                               </ul>
                               <p class="text-xs">Deadline: Jan 31, 2019</p>
                          </aside>
                         </section>

                          <div class="w-3/12 flex justify-between">
                              <button class=" py-3 px-3 rounded-full h-12 w-12  border border-white-600 flex justify-center items-center">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
                                     <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                   </svg>
                              </button>
                              <button class=" py-3 px-3  h-12 w-48 border border-white-600 flex justify-center">Apply Now</button>
                          </div>
                         </li>

                         <li class="py-5 px-5 border-b border-fuchsia-600 flex justify-between">
                            <section class=" space-x-2 flex ">
                           <div class="h-20 w-20 border border-white-600 rounded">
                             <img src="http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/img/company-logo/logo-2.png" class="h-20 w-20 rounded"/>
                          </div>
                          <aside class="">
                              <h2 class="">Dhaka Event Support Specialist</h2>
                               <ul class="text-xs flex space-x-2">
                                   <li>Xero</li>
                                   <li>New York City</li>
                                   <li>Temporary</li>
                               </ul>
                               <p class="text-xs">Deadline: Jan 31, 2019</p>
                          </aside>
                         </section>

                          <div class="w-3/12 flex justify-between">
                              <button class=" py-3 px-3 rounded-full h-12 w-12  border border-white-600 flex justify-center items-center">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
                                     <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                   </svg>
                              </button>
                              <button class=" py-3 px-3  h-12 w-48 border border-white-600 flex justify-center">Apply Now</button>
                          </div>
                         </li>

                         <li class="py-5 px-5 border-b border-fuchsia-600 flex justify-between">
                            <section class=" space-x-2 flex ">
                           <div class="h-20 w-20 border border-white-600 rounded">
                             <img src="http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/img/company-logo/logo-4.png" class="h-20 w-20 rounded"/>
                          </div>
                          <aside class="">
                              <h2 class="">Restaurant General Manager</h2>
                               <ul class="text-xs flex space-x-2">
                                   <li>Zooms</li>
                                   <li>New York City</li>
                                   <li>Full Time</li>
                               </ul>
                               <p class="text-xs">Deadline: Jan 31, 2019</p>
                          </aside>
                         </section>

                          <div class="w-3/12 flex justify-between">
                              <button class=" py-3 px-3 rounded-full h-12 w-12  border border-white-600 flex justify-center items-center">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
                                     <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                   </svg>
                              </button>
                              <button class=" py-3 px-3  h-12 w-48 border border-white-600 flex justify-center">Apply Now</button>
                          </div>
                         </li>
                   </ul>

                </aside>

                <button class="mt-3 border border-white-600 w-44 h-18 py-3 px-1 rounded  shadow-lg ">Browser All Jobs </button>

        </div>
        <div class="w-full  grid place-items-center">
             <div class="mt-20  grid place-items-center">
                <h1 class="text-5xl">Companies We have Helped</h1>
                <h5 class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                </div>
                <aside class="container mx-auto grid grid-cols-4 place-items-center">
                    <section class="grid place-items-center py-4">
                        <div id="img" class="">
                            <img src="	http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/img/brand/brand-3.png" class=""/>
                        </div>
                      </section>

                      <section class="grid place-items-center py-4">
                        <div id="img" class="">
                            <img src="http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/img/brand/brand-4.png" class=""/>
                        </div>
                      </section>

                      <section class="grid place-items-center py-4">
                        <div id="img" class="">
                            <img src="http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/img/brand/brand-1.png" class=""/>
                        </div>

                      </section>

                      <section class="grid place-items-center py-4">
                        <div id="img" class="">
                            <img src="http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/jobb/img/brand/brand-2.png" class=""/>
                        </div>

                      </section>

                </aside>

        </div>



       <article class="w-full flex justify-center  bg-blue-900 mt-7">

        <div class="flex space-x-10 mt-20 text-white ">

            <ul>
                <li class="py-2"><h2>Riders Institute</h2></li>
                <li class="py-2">20/F Green Road, Dhanmondi, Dhaka</li>
                <li class="py-2">info@themevessel.com</li>
                <li class="py-2">+0477 85X6 552</li>
            </ul>

            <ul>
                <li class="py-2"><h2>Helpful Links</h2></li>
                <li class="py-2">About Us</li>
                <li class="py-2">Terms & Conditions</li>
                <li class="py-2">Privacy Policy</li>
                <li class="py-2">Blog</li>
            </ul>


            <ul>
                <li class="py-2"><h2>Job Seekers</h2></li>
                <li class="py-2">Create Account</li>
                <li class="py-2">Career Counseling</li>
                <li class="py-2">My Oficiona</li>
                <li class="py-2">FAQ</li>
            </ul>

            <ul>
                <li class="py-2"><h2>Employers</h2></li>
                <li class="py-2">Create Account</li>
                <li class="py-2">Products&Service</li>
                <li class="py-2">Post a Task</li>
                <li class="py-2">FAQ</li>
            </ul>

            <ul>
                <li class="py-2">Newsletter</li>
                <li class="py-2">Excepteur sint occaecat cupidatat non</li>
                <li class="py-2">proident, sunt in culpa qui officia</li>
                <li class="py-2">deserunt mollit</li>
                <li class="py-2">
                    <input type="text" /><button class="bg-blue-600 h-10  w-12"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </li>
            </ul>

        </div>
       </article>
       <aside class="submenu"></aside>
        {{-- </section>

        </section> --}}

    {{-- <nav class="w-full  border flex  ...">
     <section class="flex w-3/5 ml-10 space-x-11 px-8 py-8 ...">
    <span class="w-20px uppercase ...">Rider Institute</span>
     <ul class="flex space-x-5 capitalize ..." >
        <li>home</li>
        <li >Products & Services</li>
        <li >Photo-gallery</li>
        <li >Blogs</li>
        <li >Contact Us</li>
        <li >AboutUs</li>
        <li>Online Chat</li>
     </ul>
     </section>

      <aside class="w-1/6 flex space-x-7 items-center ...">
      <a href="">Login</a>
     <button type="button">Post a Job</button>
    </aside>
    </nav> --}}
    </body>
    <script>
  const sublinks = [
  {
    page:"register",
    links: [
      {
        label: "Company",
        icon: "fa fa-sign-up",
        url: "register_company",
      },
      {
        label: "Agent",
        icon: "fa fa-sign-up",
        url: "register_agent",
      },
    ],
  },
  {
    page:"login",
    links: [
      { label: "Company",
      icon: "fa fa-sign-in",
      url: "Login"
    },

      { label: "sign in",
      icon: "fa fa-sign-in",
      url: "Login"
    },
    ],
  },
];


     let status = document.querySelectorAll("#status button");
     let submenu = document.querySelector('.submenu');
     let head = document.getElementById('head');

     status.forEach((btn)=>{
        btn.addEventListener("mouseover", function (e) {
           let itemWord = e.currentTarget.dataset.item;
           let location = e.currentTarget.getBoundingClientRect();
             let rightPlace = location.right;
             let  leftPlace = location.left;
               let center = (rightPlace + leftPlace) / 2;
               let bottom = location.bottom - 3;
              
           let tempMatch = sublinks.find(({ page }) => page == itemWord.toLowerCase());
           if (tempMatch) {
           submenu.style.left = `${center}px`;
           submenu.style.top = `${bottom}px`;
              submenu.classList.add("show");
            let {page, links} = tempMatch;
              let column = "col-2";
            if (links.length === 3) {
           column = "col-3";
            }
          if (links.length > 3) {
          column = "col-4";
             }

               submenu.innerHTML = `
      <article>
      <h4>${page}<h4>
      <div class="sidebar-sublinks   ${column}" >
    ${links
      .map((link) => {
        return `<a href='${link.url}'>
        <i class=${link.icon}></i>${link.label}
        </a>`;
      })
      .join("")}
      </aside>
      </article>`;
           }
        })


     })

     head.addEventListener("mouseover", function (e) {
    submenu.classList.remove("show");
});
     
    </script>
    </html>



