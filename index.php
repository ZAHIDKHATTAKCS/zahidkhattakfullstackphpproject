<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tour</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        /* background: url("images/bg2.jpg"); */
        background-size: cover;
        background-repeat: no-repeat;
    }

    header {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        backdrop-filter: blur(2px);
        /* border: 2px solid red; */
    }

    ul {
        /* border: 3px solid red; */
        width: 100%;
        height: 70px;
        display: flex;
        justify-content: space-evenly;
        backdrop-filter: blur(2px);
    }

    ul li {
        display: inline;
        margin-top: 8px;
    }

    ul li a {
        text-decoration: none;
        font-size: 30px;
        color: white;
        padding: 3px;
    }

    /* ul li a:hover {
        background-color: red;
        border: 2px solid black;
        border-radius: 10px;
        color: white;
      } */
    .container-fluid {
        color: white;
        /* border: 2px solid red; */
        height: 100px;
    }

    .btn {
        font-size: 18px;
    }

    .btn:hover {
        background-color: red;
    }

    main {
        backdrop-filter: blur(2px);
    }

    video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }

    /* Media Queries */
 @media screen and (min-width: 375px) {
    marquee{
        position: relative;
        /* background-color:green; */
        width:100%;
        padding-left:20px;
    }
    h4{
        padding-right:50px;
    }
}
    </style>
</head>

<body>
    <video autoplay muted loop>
        <source src="videos/6.mp4" />
    </video>
    <header>
        <ul>
            <li>
                <a href="adminlogin.php"><button class="btn btn-success">Admin</button></a>
            </li>
            <li>
                <a href="signup.php"><button class="btn btn-success">User</button></a>
            </li>
        </ul>
    </header>

    <main>
        <div class="container-fluid">
            <div>
                <h4 style="text-align: center">
                    Hi Please Register Yourself click on user button to register
                    Yourself for Tour
                </h4>
                <div style="display: flex; justify-content: center; align-items: center;">
                    <h5>Note:-</h5>
                    <h6>Admin Button is only for Organizers</h6>
                </div>
            </div>
        </div>


    </main>
    <div style="position: relative; margin-top: 200px">
        <marquee behavior="alternate" direction="">
            <h4 style="color: white" class="text-capitalize">
                We are organizing a tour if you want to explore nature please click on
                user and Register Yourself
            </h4>
        </marquee>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>