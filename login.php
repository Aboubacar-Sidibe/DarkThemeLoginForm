<!DOCTYPE html>

<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Achat en ligne, Online shopping"/>
<meta name="keywords"
      content="Achat, shopping, electronic"/>
<meta name="author" content="Sidibe"/>
<link rel="shortcut icon" href="img/HGC.jpeg">
<link rel="stylesheet" href="css/w3.css"/>
<link rel="stylesheet" href="css/admin.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>HGC</title>


<style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .bg {
        /* The image used */
        background-image: url("img/dark_bg.jpg");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    fieldset {
        border: none;
    }

    input:focus {
        outline: solid 1px teal;
    }

    hr.style-seven {
        overflow: visible; /* For IE */
        height: 30px;
        border-style: solid;
        border-color: white;
        border-width: 1px 0 0 0;
        border-radius: 20px;
        width: 50%;
        margin-left: 25%;
    }

    hr.style-seven:before { /* Not really supposed to work, but does */
        display: block;
        content: "";
        height: 30px;
        margin-top: -31px;
        border-style: solid;
        border-color: white;
        border-width: 0 0 1px 0;
        border-radius: 20px;
    }

    #fileToUpload {
        opacity: 0;
        position: absolute;
        z-index: -1;
    }


</style>


</head>
<body class="bg">


<!--Get message-->
<?php if(!empty($_GET['message'])) {
    $message = $_GET['message'];

    echo "<p class='w3-text-red w3-center'>" . $message . "</p>";
}

?>
<div id="signup" class="w3-card-4 w3-display-middle w3-animate-bottom">
    <div class="w3-modal-content w3-theme-dark" style="overflow:scroll;-webkit-overflow-scrolling:touch;">

                <span onclick="document.getElementById('signup').style.display = 'none'"
                      class="w3-button w3-display-topright w3-theme-dark w3-text-white">&times;</span>


        <div class="w3-container w3-theme-dark">
            <h2 class="w3-center">Administrator</h2>

        </div>

        <div class="w3-row">
            <a href="javascript:void(0)" onclick="openCity(event, 'ajouter');">
                <div class="w3-third tablink w3-bottombar w3-hover-theme w3-padding w3-center">Add new admin <i class="fa fa-plus"></i></div>
            </a>
            <a href="javascript:void(0)" onclick="openCity(event, 'identifier');">
                <div class="w3-third tablink w3-bottombar w3-hover-theme w3-padding w3-right w3-border-bottom w3-border-red w3-center">Login <i class="fa fa-unlock"></i></div>
            </a>
        </div>

        <form id="ajouter" class="w3-container w3-card-4 city modal w3-margin-bottom w3-animate-zoom" enctype="multipart/form-data" action="db/insert.php" method="GET" style="overflow:scroll;
                          -webkit-overflow-scrolling:touch;display: none">

            <!-- sign up form-->
            <fieldset>

                    <fieldset>
                        <p>
                            <input class="w3-input w3-theme-d1" name="nom"
                                   type="text" placeholder="Username" required="">
                        </p>
                        <p>
                            <input class="w3-input w3-theme-d1" name="motdepasse"
                                   type="password" placeholder="password" required="">
                        </p>
                        <p>
                            <input class="w3-input w3-theme-d1" name="phone"
                                   type="text" placeholder="Phone number" required="">
                        </p>


                    </fieldset>


                    <hr class="style-seven">


                    <fieldset class="w3-card" style="border:1px solid teal">
                        <legend class="w3-text-teal">Upload photo</legend>

                        <p class="w3-center">
                            <input class="inputfile" data-multiple-caption="{count} files selected" type="file"
                                   value="photo" name="fileToUpload" id="fileToUpload"
                                   placeholder="Télecharger le scan de votre photo" required="">
                            <label class="w3-btn w3-teal" for="fileToUpload"><i class="fa fa-upload"></i> <span> Choose  Photo </span></label>

                        </p>
                    </fieldset>

            </fieldset>

            <fieldset style="border: 1px solid  teal">
                <legend class="w3-text-white w3-center">
                    Click here to register
                </legend>
                <p class="w3-margin-bottom">
                <div class="w3-center">
                    <input class="w3-blue w3-btn w3-card-4" type="submit" value="Save" name="submit">

                </div>

                </p>
            </fieldset>

        </form>
        <!-- end of sign up form-->


        <!-- login form-->
        <form id="identifier" class="w3-container city w3-animate-opacity" action="db/CheckAdmin.php" method="get">

            <fieldset>
                <p>
                    <input class="w3-input w3-theme-d1" name="nom"
                           type="text" placeholder="Type your user name" required="">
                </p>
                <p>
                    <input class="w3-input w3-theme-d1" name="motdepasse"
                           type="password" placeholder="Enter password" required="">
                </p>
            </fieldset>
            <hr class="style-seven">


            <fieldset style="border: 4px solid  teal">
                    <legend class="w3-text-white w3-center">Click to longin
                    </legend>
                    <p class="w3-margin-bottom">
                    <div class="w3-center">

                        <input class="w3-blue w3-btn w3-card-4" type="submit" value="Login" name="submit">

                    </div>

                    </p>
                </fieldset>


            </fieldset>

        </form>
        <!--end login form-->
    </div>
</div>


<!--------------------------------------Javascript------------------------------------------------------------------------------------------------------------------------>

<script>

    function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-border-red";
    }
</script>



</body>
</html>