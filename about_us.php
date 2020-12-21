<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <style>
        
            #footer {
                    position: relative;
                    bottom:0;
                    width:100%;
                    height:57px;  /* Height of the footer */
                }
            body {
              font-family: Arial, Helvetica, sans-serif;
              margin: 0;
            }

            * {
              box-sizing: border-box;
            }

            /* Style inputs */
            input[type=text], select, textarea {
              width: 100%;
              padding: 12px;
              border: 1px solid #ccc;
              margin-top: 6px;
              margin-bottom: 16px;
              resize: vertical;
            }

            input[type=submit] {
              background-color: #4CAF50;
              color: white;
              padding: 12px 20px;
              border: none;
              cursor: pointer;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            /* Style the container/contact section */
            .container {
              border-radius: 5px;
              background-color: #f2f2f2;
              padding: 10px;
            }

            /* Create two columns that float next to eachother */
            .column {
              float: left;
              width: 50%;
              margin-top: 6px;
              padding: 20px;
            }

            /* Clear floats after the columns */
            .row:after {
              content: "";
              display: table;
              clear: both;
            }

            .parallax {
                /* The image used */
                background-image: url("media/parallax2.jpg");

                /*Set a specific height */
                min-height: 500px; 

                /* Create the parallax scrolling effect */
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            /*transparent background*/

            div.background {
              background: url(media/parallax1.jpg) repeat;
              border: px solid #CACACA;
            }

            div.transbox {
              margin: 20px;
              background-color: #ffffff;
              border: 2px solid black;
              opacity: 0.4;
              filter: alpha(opacity=60); /* For IE8 and earlier */
            }

            div.transbox p {
              margin: 5%;
              font-weight: bold;
              color: #000000;
            }

            h2{
              padding:10px;
            }

            div.polaroid {
              width: 20%;
              background-color: white;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
              margin-bottom: 25px;
              padding:20px;
            }

            div.container {
              text-align: center;
              padding: 10px 20px;
            }

        </style>
        <script>
            $(function() {
                $(document).click(function (event) {
                    $('.navbar-collapse').collapse('hide');
                });
            });
        </script>
    </head>
    <body>

        <div class="container-fluid">
          <div style="text-align:center">
            <h2>About Us</h2>
          </div>

        </div>
        <!-- </div> -->
     
        <?php include 'header.php'; ?>

        <div class="parallax"></div>

        <div class="container-fluid">

            <div style="height:500px;background-color:lavender;font-size:20px">

                <div class="background">
                    <div class="transbox">

                    <p>
                    <br>
                     Hello!
                    </br>
                    <br>
                     This website was created for the purpose of Mini-Project of SEM V. This website allows users to register for few sports to avoid the offline queue.
                    </br> 
                    <br>
                        We have a ton of events yearly and intrested people can visit this website to know more about all the upcoming events as well as what events are currently taking place in the campus.
                    </br>
                    <br>
                        PCE has hosted more number of events than almost every other college in Navi-Mumbai. 
                    </br>
                    <br>
                       We test the fitness of players before they enter the sports, to make sure they are not under influence of anything else. Furthurmore we believe in the motto "Grind hard, Play Clean".
                    </br>
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 180px;">
            <h2 class="text-center">Team Members</h2>

            <div class="row">
                <div class="col-sm polaroid">
                    <img src="media/pro1.jpg" alt="SK" style="width:250px" style="=height:200px" >
                    <div class="container">
                        <p><b>Saurabh Khandke</b><i></br>The guy with the Idea, under tensed circumstances saurabh came up with this idea for the topic for our project. Apart from this saurabh is a national level volleyball player and a tech nerd. </i></p>
                    </div>
                </div>

                <div class="col-sm polaroid">
                    <img src="media/pro2.jpg" alt="ST" style="width:250px" >
                    <div class="container">
                        <p><b>Shubham Ture</b><i></br>Front End Designer. After careful planning of our roles for this project Shubham developed the front end and tried his best to have all the checklist points. Apart from college life, Shubham is ardent about current world affairs, Technology and psychology</i></p>
                    </div>
                </div>

                <div class="col-sm polaroid">
                    <img src="media/pro3.jpg" alt="YS" style="width:250px" >
                    <div class="container">
                        <p><b>Yash Singh</b><i></br>Yash Singh is the back end developer. He has interest in Database in general so he decided to do the backend for this project. Yash is also a fitness freak outside his college life</i></p>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>

    </body>

</html>

