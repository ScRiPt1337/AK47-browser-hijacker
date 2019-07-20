<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DATA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./jquery.js"></script>

    <link rel="stylesheet" href="./showfetch.css">


</head>

<body>

    <div class="container">
        <table>
            <tr class="heading">
                <th>IP</th>
                <th>DATA</th>
            </tr>
            <tr class="heading">
            <?php 
include_once 'sql.php';
include 'auth.php';

$sql = "SELECT * FROM `data`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["IP"] . "</td>     <td>" .  $row["DATA"] . " </br></td></tr>";

    }

}

else { echo "0 results"; }
$conn->close();
?>

            <tr>
        </table>
    </div>

</body>
    
        <script>
        $(document).ready(function() {
            setInterval(function() {
                $('#data').load('fetchdata.php')
            }, 3000);
        });

    </script>

</html>
