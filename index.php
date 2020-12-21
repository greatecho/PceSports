<!DOCTYPE html>
<html lang="en">

    <head>

        <title>PCE Sports</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <style type="text/css">
            
            .brand_logo {
                background-color: #abaeb2;
            }
      
            #footer {
                position: relative;
                bottom:0;
                width:100%;
                height:57px;  /* Height of the footer */
            }

    </style>

        <!-- <script type="text/javascript">
            $(function() {
              $(document).click(function (event) {
                $('.navbar-collapse').collapse('hide');
              });
            });
        </script> -->

    </head>

    <body>
        <div class="container-fluid brand_logo" style="width: 100%">
            <img class="img-fluid mx-auto d-block" src="media/logo.png" width="1000" alt="logo" />
            <h3 class="font-weight-light text-center">PCE SPORTS</h3>
            <br/>
        </div>
            
        <?php include 'header.php';  ?>

        <!-- content body -->
        <div class="container px-5">

            <div class="row mt-5">
                <div class="col-sm">
                    <h2 class="mt-5">Cricket</h2>
                    <p class="font-weight-light font-italic">"India's most watched sport, even after some other sport being the official sport. Join us for the local tournaments and win prizes. Better yet, judges are from domestic cricket commitee so your game might impress them. Good Luck"</p>
                </div>
                <div class="col-sm">
                    <img class="img-fluid mx-auto d-block rounded" src="media/11.jpg" width="400px">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm">
                    <img class="img-fluid mx-auto d-block rounded" src="media/22.jpg" width="450px">
                </div>
                <div class="col-sm">
                    <h2 class="mt-5">Basketball</h2>
                    <p class="font-weight-light font-italic">"Break the stereotypical image that only people who are 6' and above can play the game well. Showcase your skills and win exciting prizes, regardless of your height. <b>Registrations open till 20/20/20. Limited slots available</b></p>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-sm">
                    <h2 class="mt-5">Volleyball</h2>
                    <p class="font-weight-light font-italic">Volleyball is a team sport in which two teams of six players are separated by a net. Each team tries to score points by grounding a ball on the other team's court under organized rules. <b>Prize awaits the winner</b></p>
                </div>
                <div class="col-sm">
                    <img class="img-fluid mx-auto d-block rounded" src="media/33.jpg" width="450px">
                </div>
            </div>

        </div>  

        <?php include 'footer.php';  ?>

    </body>

</html>