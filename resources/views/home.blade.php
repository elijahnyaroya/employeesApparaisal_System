@extends('master')
@section('content')

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/slider.jpg" alt="Teaches">
        <div class="carousel-caption">
            <h3 class="headerCaption">Teachers Appraisal</h3>
            <p>All that school management needs </p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="/images/slider2.jpg" alt="Schoo Management">
      <div class="carousel-caption">
            <h3 class="headerCaption">Use technology to tranform education</h3>
            <p>Use our systems</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="/images/slider3.jpg" alt="School Appraisal">
      <div class="carousel-caption">
            <h3 class="headerCaption">Help improve education sector</h3>
            <p>Evaluate teachers</p>
        </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div class="container ">
    <h2 class="section-title mb-2 h1 d-flex justify-content-center">What we do</h2>
    <p class="text-center text-muted h5">Having and managing a correct marketing strategy is crucial in a fast moving market.</p>
  
    <div class="row mt-5 ml-5  ">
    <div class="card col-md-3 mr-5 mt-4">
            <a href="#serviceDetail.php">
               <div class="card-content">
                <div class="card-body text-center"> <img class="rckImages img rck" src="/images/apps.png" />
                    <div class="card-title"> Mobile application development </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">Buying or selling a home is often the largest transaction anyone does in their life. we guide you through the process so that you can be confident in reaching your dream outcome.</small> </p>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="card col-md-3  mr-5 mt-4">
        <a href="#serviceDetail.php"> 
             <div class="card-content">
                <div class="card-body text-center"> <img class="rckImages img rck" src="/images/app2.png" />
                    <div class="card-title"> Web development </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">Buying or selling a home is often the largest transaction anyone does in their life. we guide you through the process so that you can be confident in reaching your dream outcome.</small> </p>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="card col-md-3  mr-5 mt-4">
        <a href="#serviceDetail.php">
        <div class="card-content">
                <div class="card-body text-center"> <img class="rckImages img rck" src="/images/app3.png" />
                    <div class="card-title"> Mobile application development </div>
                    <div class="card-subtitle">
                        <p> <small class="text-muted">Buying or selling a home is often the largest transaction anyone does in their life. we guide you through the process so that you can be confident in reaching your dream outcome.</small> </p>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
       
</div>

@endsection