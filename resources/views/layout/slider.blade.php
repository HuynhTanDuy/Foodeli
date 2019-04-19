<div id="myCarousel" class="carousel slide border" data-ride="carousel"  data-interval="2000">
   <!-- Indicators -->
   <div class="container">
   <ol class="carousel-indicators">
    <?php $i=0; ?>
                      @foreach($slide as $sl)
      <li data-target="#myCarousel" data-slide-to="{{$i}}" 
      @if($i==0)
      class="active"
      @endif
      ></li>
    <?php $i++; ?>
    @endforeach
   </ol>
   <div class="carousel-inner">
    <?php $i=0; ?>
                @foreach($slide as $sl)
      <div @if($i==0)
        class="carousel-item active"
        @else class="carousel-item"
        @endif >
        <?php $i++; ?>
         <img class="d-block w-100" src="{{$sl->image}}" alt="{{$sl->caption}}">
      </div>
     @endforeach
   </div>
   <!-- Controls -->
   <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
</div>
  </div>