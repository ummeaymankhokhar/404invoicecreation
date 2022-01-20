
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Bitkraft</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Photo-Gallery.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="background-color: #37434d;color: #ffffff;">
            <div class="container-fluid"><a class="navbar-brand" href="#">&nbsp;Bitkraft</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tooltip" data-bs-tooltip="" style="color:#ffffff;" href="index.html"><i class="fas fa-paperclip"></i>&nbsp;Invoice Creation</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>
    <br>
    <br>
    <br>
    <form class="search-form" action="" method=post >
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" style="filter: blur(0px);"><i class="fas fa-search"></i></span></div>
			<input class="form-control" type="text" placeholder="Enter Invoice no." name=search>
            <div class="input-group-append"></div><input class="btn btn-info mt-2" type="submit" name=submit value=search style="display:none">
        </div>
    </form><div class="photo-gallery">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function searched(val){
$.post('searchcode.php',{search:val},function(data){alert(data);});

}
</script>	
<div class="container-fluid">
  <div class="px-lg-5">
  </div>
  <?php
  session_start();
include 'dbconnection.php';
if(isset($_SESSION['User']))
{
if(isset($_POST['submit'])){
$search = mysqli_real_escape_string($con,trim($_POST['search']));
$result = mysqli_query($con, "SELECT * FROM images WHERE tags LIKE '%$search%'");
function bold($result, $search) {
  return preg_replace("/$search/", "<strong>$search</strong>", $result);
}
while ($row=mysqli_fetch_array($result)) {
    $tags = $row['tags'];
    
    echo "<div class='col-xl-3 col-lg-4 col-md-6 mb-4'>   
    <a href='info.php?id=".$row['ID']."&tags=".bold($tags,$search)."' class='text-dark' type=submit><div class='bg-white rounded shadow-sm'><img src='images/".$row['image']."' alt='' class='img-fluid card-img-top'></a>
              <div class='p-4'>
          
         
                </div>
              </div>
            </div>
        </div>";
}
}
}
else
    {
        //header("location:index.html");
    }
?>
</body>
</html>

</div>
</div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
</body>

</html>
