<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind CSS</title>
  <?php if ($_ENV['ENV'] == 'production') : ?>
    <link rel="stylesheet" href="./assets/styles/main.min.css" />
  <?php else : ?>
    <link rel="stylesheet" href="./assets/styles/main.css" />
  <?php endif; ?>
</head>

<body class="text-gray-600 font-body ">
  <!-- start page wrapper -->
  <div class="grid sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4">
    <div class="sm:flex sm:justify-end">
      <nav class="text-right">
        <div class="flex justify-between items-center">
          <h1 class="text-mammoth font-bold uppercase text-green-500 sm:text-red-500 p-4">
            <a href="#" class="hover\:text-gray-200">Food recipes</a>
          </h1>
          <div class="px-4 cursor-pointer sm:hidden" id="menu-burger">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </div>
        </div>
        <ul class="mt-6 hidden sm:block" id="menu">
          <li class="text-gray-700 font-bold py-1 border-r-4 border-primary"><a href="#" class="flex justify-end px-4"><span>Home</span> <svg class="w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
              </svg></a></li>
          <li class="py-1"><a href="#" class="flex justify-end px-4 border-r-4 border-white"><span>About</span><svg class="w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
              </svg></a></li>
          <li class="py-1"><a href="#" class="flex justify-end px-4 border-r-4 border-white"><span>Contact</span><svg class="w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                </path>
              </svg></a></li>
        </ul>
      </nav>
    </div><!-- end nav -->
    <main class="px-16 py-6 bg-gray-100 sm:col-span-3 md:col-span-3 lg:col-span-3">
      <div>
        <div class="flex justify-center md:justify-end">
          <a href="#" class="btn text-primary border-primary md:border-2 hover:bg-primary hover:text-white transition ease-out duration-500">Sign
            up</a>
          <a class="btn ml-2 text-primary border-primary md:border-2 hover:bg-primary hover:text-white  transition ease-out duration-500" href="#">Login</a>
        </div>
        <div class="flex items-center justify-center mt-4">
          <div class="bg-red-500 h-4 w-2"></div>
          <div class="bg-yellow-500 h-5 w-3"></div>
          <div class="bg-green-500 h-6 w-4"></div>
        </div>
      </div>
      <header class="mt-6">
        <h2 class="text-gray-700 text-4xl font-bold ">Recipes</h2>
        <h3 class="text-3xl font-semibold">For Beginner</h3>
      </header>
      <div class="mt-12 ">
        <h4 class="text-gray-700 text-2xl font-bold border-b border-gray-600 py-3">Lastest Recipes</h4>
        <div class="mt-3 grid md:grid-cols-3 gap-3">

          <!-- cards should go here -->
          <div class="card hover:shadow-lg">
            <img src="./assets/images/food1.jpg" alt="food1" />
            <div class="title-wrap">
              <span class="title">5 Bean Chew Stew</span>
              <span class="sub-title">Recipe by admin</span>
            </div>
          </div>
          <div class="card hover:shadow-lg">
            <img src="./assets/images/food2.jpg" alt="food2" />
            <div class="title-wrap">
              <span class="title">5 Bean Chew Stew</span>
              <span class="sub-title">Recipe by admin</span>
            </div>
          </div>
          <div class="card hover:shadow-lg">
            <img src="./assets/images/food3.jpg" alt="food3" />
            <div class="title-wrap">
              <span class="title">5 Bean Chew Stew</span>
              <span class="sub-title">Recipe by admin</span>
            </div>
          </div>

        </div>

        <h3 class="text-gray-700 text-2xl font-bold mt-3">Most Popular</h3>
        <div class="mt-3">

          <!-- cards should go here -->
          <div class="card hover:shadow-lg">
            <img src="./assets/images/food1.jpg" alt="food1" />
            <div class="title-wrap">
              <span class="title">5 Bean Chew Stew</span>
              <span class="sub-title">Recipe by admin</span>
            </div>
          </div>
          <div class="card hover:shadow-lg">
            <img src="./assets/images/food2.jpg" alt="food2" />
            <div class="title-wrap">
              <span class="title">5 Bean Chew Stew</span>
              <span class="sub-title">Recipe by admin</span>
            </div>
          </div>
          <div class="card hover:shadow-lg">
            <img src="./assets/images/food3.jpg" alt="food3" />
            <div class="title-wrap">
              <span class="title">5 Bean Chew Stew</span>
              <span class="sub-title">Recipe by admin</span>
            </div>
          </div>

        </div>

        <div class="flex justify-center mt-4">
          <div class="btn bg-green-500 text-white hover:shadow-inner hover:scale-125 hover:bg-opacity-50 transition ease-in duration-500">
            <svg class="w-6 h-6 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
            </svg>
            Load more
          </div>
        </div>
      </div>
    </main><!-- end main -->
  </div><!-- end page wrapper -->
  <script defer type="text/javascript" src="./assets/js/index.js"></script>
</body>

</html>