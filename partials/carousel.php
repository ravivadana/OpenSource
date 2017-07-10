<style>
  #myCarousel{
    margin:20px;
    border-radius: 25px;
  }
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/more.gif" alt="Los Angeles" style="width:100%;height:500px;">
      </div>

      <div class="item">
        <img src="images/chicago.jpg" alt="Chicago" style="width:100%;height:500px;">
      </div>
    
      <div class="item">
        <img src="images/ny.jpg" alt="New york" style="width:100%;height:500px;">
      </div>

       <div class="item">
        <img src="images/satellite.png" alt="satellite.png" style="width:100%;height:500px;">
      </div>
     <div class="item">
        <img src="images/communication.gif" alt="communication.gif" style="width:100%;height:500px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>