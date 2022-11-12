
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
          <h4 class="modal-title" style="color:green;text-align:center;">Shilong Details:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
<div>
     <p style="text-align:justify;"> Shillong is a hill station in the northeastern part of India and the capital of Meghalaya, which means "The Abode of Clouds". It is the headquarters of the East Khasi Hills district. Shillong is the 330th most populous city in India with a population of 143,229 according to the 2011 census.</p>

</div>
     <div class="container">
  <div class="gallery">
        <img src="s2.jpeg" alt="Shimla1" style="width:550px;">
      
  </div>
  <div class="gallery">
      
        <img src="s1.jpeg" alt="Shimla2">
      
   </div>

   <div class="gallery">
      
        <img src="s4.jpeg" alt="Shimla3">
      
   </div>
  
</div>

<div>
     <p style="text-align:justify;"> Shimla also known as Simla, is the capital and the largest city of the Indian state of Himachal Pradesh. In 1864, Shimla was declared as the summer capital of British India. After independence, the city became the capital of Punjab and was later made the capital of Himachal Pradesh. It is the principal commercial, cultural and educational centre of the state. It was the capital city in exile of British Burma (present-day Myanmar) from 1942 to 1945.</p>
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
