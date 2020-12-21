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


            body {
              font-family: Arial, Helvetica, sans-serif;
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
                background-color: #9b9898;
                color: white;
                padding: 12px 20px;
                border: black;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #373736;
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

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .column, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
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
        
        <?php include 'header.php'; ?>
        <div class="container">
            <div style="text-align:center">
                <h2>Contact Us</h2>
                <p>Leave us a message:</p>
            </div>
            <div class="row">
                <div class="column">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15090.77882313936!2d73.1290481!3d18.9890857!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1539149699688" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                          <!-- <a href="https://www.crocothemes.net"></a> -->
                        </div>
                    </div>
                </div>
                <div class="column">
                    <form action="contact_to_db.php" method="post">
                        <label for="fname">Name</label>
                        <input type="text" id="fname" name="name" placeholder="Your name..">
                        
                        <label for="lname">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email id..">
                        
                        <label for="subject">Subject</label>
                        <textarea id="subject" name="sub" placeholder="Write something.." style="height:170px"></textarea>
                        
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </body>
</html>

