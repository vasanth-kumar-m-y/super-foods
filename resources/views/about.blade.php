@extends('layout')
@section('title') Super Foods About Us @endsection
@section('keywords')   @endsection
@section('description') @endsection
@section('content')
 
<div align="center" style="background:#1CD5E8;padding:20px;">
<h3  class="black-text" style="font-weight:bold;margin-top:15px;">
THE SUPER FOODS STORY</h3>
<p class="white-text" style="font-weight:bold;">    JOURNEY OF SUPER FOODS FROM IDEATION TO STARTUP</p>
  

</div>

<div class="container-fluid" style="background:white;font-family: 'Balsamiq Sans', cursive;">
    <div class="row px-5"> 
        <div class="col-md-12 ">
            <div align="center">
               <p class="col-md-4">
                    <img src="{{url('assets/img/Logo.webp')}}" class="img-fluid">
                </p>
            </div>
              <p style="text-align: center;">
               Super Foods is a Natural and Healthy food product manufacturing company founded by a mom for a Super Living.
              </p>  
              <p style="text-align: center;">
               Super Foods porridge mixes are rich in protein and iron, made with pure quality of grains, pulses and nuts which gives an assurance and the feeling of contentment for the parents on their baby's health. We never compromise with the freshness and nutrients of the food. We have used all familiar ingredients to make it simple and easy to prepare.
              </p>
              <p style="text-align: center;">
               All our products are fresh, clean, made with best naturally available ingredients and completely free from preservatives, additives, artificial flavors, artificial colors, raising agents, milk powders, added salt, added sugar, artificial thickeners and maltodextrin.
              </p>
              <p style="text-align: center;">
               The ingredients are carefully chosen to boost your family’s immunity, by providing naturally enriched nutrition in every.
              </p>
              <p style="text-align: center;">
               It is just our effort to bring back the traditional food recipes with a mission of helping you to have better food option.
              </p>
              <p style="text-align: center;">
               All our "Products" are packed hygienically with "Love" and "Care" to help you make nourishing healthy everyday porridge.
              </p>
       </div>
  <div align="center" class="col-md-12">
    <div class="col-md-8">
     <h1 align="center" class="black-text" style="font-weight:bold;">GALLERY</h1>

        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
              <div class="carousel-inner" role="listbox">
                
                <div class="carousel-item active">
                  <div class="view">
                    <img class="d-block w-100" src="{{url('Img/Gallery/1.jpg')}}"
                      alt="First slide">
                    <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive"></h3>
                    <p></p>
                  </div>
                </div>
              
                <div class="carousel-item">
                <!--Mask color-->
                  <div class="view">
                    <img class="d-block w-100" src="{{url('Img/Gallery/2.jpg')}}"
                      alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive"> </h3>
                    <p> </p>
                  </div>
                </div>

                <div class="carousel-item">
                <!--Mask color-->
                  <div class="view">
                    <img class="d-block w-100" src="{{url('Img/Gallery/3.jpg')}}"
                      alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                  </div>
                  <div class="carousel-caption">
                    <h3 class="h3-responsive"> </h3>
                    <p> </p>
                  </div>
                </div>
              </div>

          <!--/.Slides -->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
        </div>
        </div>
        <div align="center" class="col-md-3"> </div>
         <div align="left"  class="col-md-6 mx-3">
              <br>    <br>
            <span class="black-text" style="font-weight:bold;font-size:25px;">Mission:</span> It is our effort to bring back the traditional food recipes with a mission of helping you to have better food option. <br>
        
            <span class="black-text" style="font-weight:bold;font-size:25px;">Vision:</span> All our "Products" are packed hygienically with "Love" and "Care" to help you make nourishing healthy everyday porridge.
             
        </div>
    </div>
 <br><br>
   
</div>


@endsection