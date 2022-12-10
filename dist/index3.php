<!DOCTYPE html>
<html>

<head>
    <title>
        Project Overseer
    </title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="output.css" rel="stylesheet">
</head>
<style>
    /* Add a black background color to the top navigation */
    .topnav {
        background-color: #fff;
        overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: right;
        color: #383838;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
        font-size: 16px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
        color: #303030;
        font-weight: bold;
    }

    #logo {
        float: left;
        font-weight: bold;
        margin-left: 26px;
    }

    .logindiv {
        width: auto;
        height: 100%;
        background: linear-gradient(to bottom, #D4FCCC 0%,  #8cecc4 100%);     
    }

</style>

<body>
    <!--Navigation Bar-->
    <div class="topnav font-inter bg-gray-800 p-0 mt-0 pl-24 fixed w-full z-10 top-0 shadow-md">
        <a href="index.html" id="logo">Overseer</a>
        <a href="#">Subscribe</a>
        <a href="https://github.com/irritatingtyper/Project-Overseer">Github</a>
        <a href="about-us.html">About Us</a>
        <a href="gallery.html">Features</a>
        <a href="./documentation-pages/documentation-main.html">Documentation</a>
        <a class="active" href="#home">Home</a>
    </div>
    <!--Hero--><!--Added font "Inter Bold"-->
    <div class=" bg-gradient-to-r from-cyan-500 to-blue-500 font-inter-bold h-screen">
        <h1 class="text-white text-8xl pl-32 pb-5" id="heading-phrase" style="width: 80%; font-weight: bold; padding-top: 20%;">Open-Source 
           <br> Smart Farming Toolkit</h1>
           <!--Added Button-->
           <button class="bg-salem-500 hover:bg-salem-600 text-white font-bold py-3 px-20 border shadow-lg border-salem-500 ml-32" >
            Discover More
          </button>
          
    </div>
    <!--Section 1-->
    <div class="font-inter logindiv">
        <p class="text-5xl pt-20 pb-14 text-center font-poppins font-bold text-mild-black-500 tracking-wide">Hello World</p>
        <div class="flex flex-grid">
            <div class="basis-1/4 text-center text-xl text-mild-black-500 font-bold">
                <br>
                <p>feature</p>
                <br><br>
                <p>feature</p>
                <br><br>
                <p>feature</p>
                <br><br>
                <p>feature</p>
            </div>
            <div class="basis-1/2">
                <img src="./assets/images/bg-sample-1.png" class="h-96 w-auto rounded-3xl content-center shadow-2xl"
                    style="margin-left: auto; margin-right: auto;">
            </div>
            <div class="basis-1/4 text-center text-xl font-bold">
                <br>
                <p>feature</p>
                <br><br>
                <p>feature</p>
                <br><br>
                <p>feature</p>
                <br><br>
                <p>feature</p>
            </div>
        </div>
        <div>
            <p class="px-40 py-14 text-md text-center font-light text-mild-black-500" style="width: 85vw; margin:auto">If you're visiting this page, you're likely here
                because you're searching for a random sentence. Sometimes a random word just isn't enough, and that is
                where the random sentence generator comes into play. By inputting the desired number, you can make a
                list of as many random sentences as you want or need. Producing random sentences can be helpful.</p>
        </div>
    </div>
    <!--Section 2-->
    <div class="bg-dark-green-500 flex flex-row" >
        <div class="pl-36 pt-2 text-white-gray-500" style="margin-top: auto; margin-bottom: auto;">
            <p class="text-5xl font-poppins font-bold tracking-wide">Hello World</p>
            <br>
            <p class="text-justify pt-2 leading-5 max-w-screen-md">If you're visiting this page, you're likely here because you're searching for a
                random sentence. Sometimes a random word just isn't enough, and that is where the random sentence
                generator comes into play. By inputting the desired number, you can make a list of as many random
                sentences as you want or need. Producing random sentences can be helpful
        </div>
        <div class="basis-2/3 py-5">
            <img src="./assets/images/bg-sample-1.png" class="h-72 w-auto rounded-l-3xl mt-16 float-right" style="width: 75%;" >
        </div>
    </div>
    <!--Section 3-->
    <div class="bg-dark-green-500 flex flex-row">
        <div class="basis-2/3 py-5">
            <img src="./assets/images/bg-sample-1.png" class="h-72 w-auto rounded-r-3xl float-left my-14" style="width: 75%;">
        </div>
        <div class="basis-2/3 px-20 text-white text-white-gray-500" style="margin-top: auto; margin-bottom: auto;">
            <p class="text-5xl font-poppins font-bold pr-10 text-right tracking-wide">Hello World</p>
            <br>
            <p class="x text-justify pr-10">If you're visiting this page, you're likely here because you're searching for a
                random sentence. Sometimes a random word just isn't enough, and that is where the random sentence
                generator comes into play. By inputting the desired number, you can make a list of as many random
                sentences as you want or need. Producing random sentences can be helpful in a number of different ways.
            </p>
        </div>
    </div>
    <!--Email Newsletter-->
    <div class="font-inter logindiv flex flex-row text-mild-black-500 ">
        <div class="w-7/12 my-14 bg-white-gray-100 m-auto rounded-3xl shadow-xl" style="height: fit-content;">
            <div class="w-2/5 mx-auto mt-6 bg-white-gray-50" style="height: 8rem">
            </div>
            <div class="m-auto text-center mt-7 w-2/5 ">
                <h1 class="font-bold text-3xl">Let's stay in touch!</h1>
                <p>Subscribe to our newsletter to get updates directly in your inbox</p> 
                <input type="email" id="email" aria-describedby="helper-text-explanation" class="h-9 mt-7 bg-white-gray-100 border text-center border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " placeholder="example@email.com">
                <button class="bg-salem-700 hover:bg-salem-500 text-white tracking-wide font-bold py-3 mx-auto rounded-xl mb-5 w-3/6 border-salem-500 mt-3">
                    Subscribe
                  </button>
            </div> 

        </div>
    </div>
    <!--Footer-->
    <footer>
        <div class="bg-mild-black-500 text-white font-inter">
            <h3 class="pt-20 pl-20 font-inter text-xl font-bold">Project Overseer</h3>
            <div class="flex flex-grid">
                <div class="basis-1/4 pt-10 pl-20 pb-3 text-sm">
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                </div>
                <div class="basis-1/4 pt-10 pl-20 pb-3 text-sm">
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                </div>
                <div class="basis-1/4 pt-10 pl-20 pb-3 text-sm">
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                </div>
                <div class="basis-1/4 pt-10 pl-20 pb-3 text-sm">
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                    <a href="#">Menu Item</a><br>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>