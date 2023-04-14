<!doctype html>
<html>
<head>
<title>Schools</title>
<link rel="stylesheet" href="style.css"/>
<header>
<div class="container">
<nav>
        <ul>
            <li><a href="home.php">Home</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
</nav>
</div>
</header>
</head>
<body>
<div class="form">
<?php
if(isset($_POST['city'])){
require_once('vendor/autoload.php');
$apiKey = "fsq3mPNFmiLd+01xNIAy4XJJ5D1HTGjvE4cJ90k6JkprScY=";
$city = stripslashes($_REQUEST['city']);
$client = new \GuzzleHttp\Client();
$ApiUrl = "https://api.foursquare.com/v3/places/search?&categories=12009&near=".$city."&limit=10&v=20190425";
$response = $client->request('GET', $ApiUrl, [
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'fsq3mPNFmiLd+01xNIAy4XJJ5D1HTGjvE4cJ90k6JkprScY=',
  ],
]);

$res=$response->getBody();
$data = json_decode($res);

echo "<table border='1'> 
<tr>
<th>School</th>
<th>Address</th>
<th>Add</th>
</tr>";
for($i=0;$i<10;$i++){
echo "<tr>";
echo "<td>".$data->results[$i]->name."</td>";
echo "<td>".$data->results[$i]->location->formatted_address."</td>";?>
<td><a href="addWishList.php?name=<?php echo $data->results[$i]->name?>">Add</a></td>
<?php
echo "</tr>";
}
} 

?>

<title style="font-size:50px;text-align:center;color:#000000">Neighbourhood Guide</title>
    <form method="post" name="search">
        <h1 class="login-title">Schools</h1>
        <input type="text" class="login-input" name="city" placeholder="City" autofocus="true"/>
        <input type="submit" value="Search" name="search" class="login-button"/>
  </form>
</div>
</body>
</html>