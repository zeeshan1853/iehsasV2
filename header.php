<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Note: Try to remove the following lines to see the effect of CSS positioning */
        .affix {
            top: 0;
            width: 100%;
        }

        .affix + .container-fluid {
            padding-top: 70px;
        }
        #uppder_head{
            /*Background image with layout*/
            background-image:
            linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url('images/upper_head.jpg');
            height:662px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        nav{
            z-index: 99;
            border-radius: 0px !important;
        }
        .navbar-inverse{
            background-color: #00726a !important;
            border-color: #008781 !important;
        }
        .color-white{
            color: white !important;
        }

        /*.upper_head_wrapper{*/
            /*position:absolute;*/
            /*bottom:0;*/
            /*/!*margin-bottom: 30px;*!/*/
            /*left: 50%;*/
            /*right: 50%;*/
        /*}*/
        /*#get_started_div{*/
            /*position: absolute;*/
            /*bottom: 0;*/
            /*left: 40%;*/
            /*right:45%;*/
            /*margin-bottom: 20px;*/
        /*}*/
        .upper_head_wrapper{
            position: absolute;
            bottom: 150px;
            margin-left: 36%;
        }
        #get_started_div{
            position: absolute;
            bottom: 20px;
            margin-left: 45%;
        }
        #get_started{
            background-color: transparent;
            border-color: gray;
            padding: 10px;
            font-size: large;
        }
        #get_started:hover{
            background-color: #5cb85c;
            border-color: #428bca;
            /*color: #cd3040  !important;*/
        }

        @media only screen and (max-device-width: 768px) {
            .upper_head_wrapper{
                position: relative;
                text-align: center;
                /*position: absolute;*/
                /*bottom: 150px;*/
                /*margin-left: 0%;*/
            }
            #get_started_div{
                position: relative;
                text-align: center;
                /*bottom: 20px;*/
                /*margin-left: 45%;*/
            }
        }
    </style>
</head>
<body>

<div class="container-fluid"  id="uppder_head" >
    <div class="upper_head_wrapper">
        <h1 class="text-center color-white">Welcome To IEHSAS</h1>
        <p class="text-center color-white">Tag Line of IEHSAS.</p>
    </div>
    <div class="text-center" id="get_started_div">
        <button class="btn text-center color-white" id="get_started">Get Started</button>
    </div>

</div>

<nav class="navbar navbar-inverse" id="nav" data-spy="affix" data-offset-top="655">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class=""><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid" style="height:1000px">
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
    <h1>Some text to enable scrolling</h1>
</div>
<script>
    $(document).ready(function () {
        // This is a functions that scrolls to #{blah}link
        function goToByScroll(id){
            // Remove "link" from the ID
            id = id.replace("link", "");
            // Scroll
            $('html,body').animate({
                    scrollTop: $(id).offset().top},
                'slow');
        }

        $('#get_started').on('click', function (e) {
            goToByScroll('#nav');
        })
    })
</script>
</body>
</html>
