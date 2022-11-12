
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
          <h4 class="modal-title" style="color:green;text-align:center;">SriNagar Details:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
<div>
     <p style="text-align:justify;"> Srinagar, is the largest city and the summer capital of the Indian-administered union territory of Jammu and Kashmir. It lies in the Kashmir Valley on the banks of the Jhelum River, a tributary of the Indus, and Dal and Anchar lakes. The city is known for its natural environment, gardens, waterfronts and houseboats. </p>

</div>
     <div class="container">
  <div class="gallery">
        <img src="sn1.jpeg" alt="Shimla1" style="width:550px;">
      
  </div>
  <div class="gallery">
      
        <img src="sn2.jpeg" alt="Shimla2">
      
   </div>

   <div class="gallery">
      
        <img src="sn3.jpeg" alt="Shimla3">
      
   </div>
  
</div>

<div>
     <pre style="text-align:justify;"><b>
Elevation: 1,585 m
Area: 294 km²
Weather: 26 °C, Wind S at 5 km/h, 60% Humidity weather.com
Population: 11.8 lakhs (2011)
Area code: 0194</b></pre>
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
