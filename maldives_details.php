
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $ids;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>
<style>
.container{
    max-width: 1300px;
    margin: auto;
    background: #f2f2f2;
    overflow: auto;
}
.gallery{
    margin: 15px;
    border: 1px solid #ccc;
    float: left;
    width: 250px;
}
.gallery img{
    width: 500px;
    height: 250px;
}

</style>
</head>
<body>

<div class="container">
  <!--<h2>Extra Large Modal</h2>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>-->

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background:yellow;">
          <h4 class="modal-title" style="color:green;text-align:center;">Maldives Details:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
<div>
     <p style="text-align:justify;"> Maldives, officially the Republic of Maldives, is a small archipelagic state in South Asia situated in the Indian Ocean. It lies southwest of Sri Lanka and India, about 700 kilometres from the Asian continent's mainland. Wikipedia.</p>

</div>
     <div class="container">
  <div class="gallery">
        <img src="m1.jpeg" alt="Shimla1" style="width:550px;">
      
  </div>
  <div class="gallery">
      
        <img src="m2.jpeg" alt="Shimla2">
      
   </div>

   <div class="gallery">
      
        <img src="m3.jpeg" alt="Shimla3">
      
   </div>
  
</div>

<div>
     <pre style="text-align:justify;"> <b>
Capital: Malé
Currency: Maldivian rufiyaa
Continent: Asia
Population: 5.31 lakhs (2019)</b></pre>
   </div>
        </div>

        
        <!-- Modal footer -->
        <div class="modal-footer" style="background:silver;">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.assign('frontend.php')">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>
