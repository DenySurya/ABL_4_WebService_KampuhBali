<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Kampuh Bali
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #1B2430 0%, #413F42 100%);
      }
    </style>
  </head>
  <body class="leading-normal tracking-normal text-white gradient " style="font-family: 'Source Sans Pro', sans-serif;" >
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        
        <div class="pl-4 flex items-center">
            
          <!-- <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">

            Kampuh Bali
          </a> -->
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-gray-100 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-gray-100 p-4 lg:p-0 z-20" id="nav-content">
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  
                   
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
          @auth
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-gray-100 font-bold no-underline" href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            @else
            <li class="mr-3">
              <a class="inline-block text-gray-100 no-underline hover:text-yellow-600 hover:text-underline py-2 px-4" href="{{ route('login') }}">Login</a>
            </li>
            @if (Route::has('register'))
            <li class="mr-3">
              <a class="inline-block text-gray-100 no-underline hover:text-yellow-600  hover:text-underline py-2 px-4" href="{{ route('register') }}">Register</a>
            </li>
            @endif
          </ul>
       
          @endauth
                </div>
            @endif
        </div>
      </div>
      <!-- <hr class="border-b border-gray-100 opacity-25 my-0 py-0" /> -->
    </nav>
    <!--Hero-->
    <div class="pt-20">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="pl-20 flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <!-- <p class="uppercase tracking-loose w-full">What business are you?</p> -->
          <h1 class="my-4 text-5xl font-bold  leading-tight ">
            Kampuh Bali
          </h1>
          <p class="leading-normal text-2xl mb-8">
            Tempatnya Menjual Segala Jenis Busana Adat Bali
          </p>
          <button class="mx-auto lg:mx-0 hover:underline bg-yellow-600 text-gray-100 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Ayoo
          </button>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-1/2 py-20 px-20 pl-40 text-center">
          <img class="w-full md:w-4/5 z-50" src="images/logo.png" />
        </div>
      </div>
    </div>
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>