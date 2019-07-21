<?php 
    include('header and Nav.php');

?>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="fluid-search-slider">
    <!--search bar-->
    <div class="wrapper-search-bar" >
        <div class="container">
            <div class="search-bar">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="search-box">
                            <form class="search-box-home">
                                <div class="slider-search-left">
                                    <span>Search</span>
                                    <label for="search-slider">
                                        <input type="search" id="search-slider" placeholder="keyword">
                                    </label>
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                            <div class="search-option">
                                <span>or</span>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="wrapper-search-carousel">

                                <div class="search-carousel" id="search-carousel" style="width:700px;">
                                    <?php 
                                        $result=$obj->show_category();
                                    foreach($result as $items)
                                    {

                                        echo ' <div class="slide"><a href="recipe-listing.php?id='.$items['category_id'].'&cat_name='.$items['cat_name'].'""><span><svg version="1.1"  class="icon-container" 
                                         x="0px" y="0px"
                                         width="42px" height="48px" viewBox="0 0 42 48" enable-background="new 0 0 42 48" xml:space="preserve">
                                    <path class="icon-svg"><img src=images/categories/'.$items['icon_img'].' width="30px" style="margin-left:-40px">
                                    </path>
                                    </svg>
                                    </span>'.$items['cat_name'].'</a></div>';


                                    }

                                    ?>
                                   
                                   
                                </div>

                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--search bar ends-->


<!--slider main-->
<section class="wrapper-home-slider variation-two">
    <div class="fluid-slider-var2">
        <div>

            <img src="images/temp-images/full-slide-1.jpg" alt=""/>

            <div class="container custom-container-slide">
                <div class="slide-detail text-center">
                    <div class="slide-detail-inner">
                        <h2><a href="#">pasto pizza with cheesey dip</a></h2>

                        <div class="short-separator"></div>
                        <div class="rating-box">
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>

                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>

                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>

                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span><br>
                            <span class="rating-figure">(4.1 / 5)</span>
                        </div>
                        <p>
                            Nam ornare arcu turpis, nec congues with us
                            <br/>
                            Curabitur quis euismod mauris. Nulls
                            <br/>
                            eget semper vulputate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div>

            <img src="images/temp-images/full-slide-2.jpg" alt=""/>

            <div class="container custom-container-slide">
                <div class="slide-detail text-center">
                    <div class="slide-detail-inner">
                        <h2><a href="#">pasto pizza with juicy dip</a></h2>

                        <div class="short-separator"></div>
                        <div class="rating-box">
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                <g>
                                    <title>background</title>
                                    <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                </g>
                                <g>
                                    <title>Layer 1</title>
                                    <path class="icon-svg"
                                          d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                          clip-rule="evenodd" fill-rule="evenodd"/>
                                </g>
                            </svg>
                            </span>
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span><br>
                            <span class="rating-figure">(4.1 / 5)</span>
                        </div>
                        <p>
                            Nam ornare arcu turpis, nec congues with us
                            <br/>
                            Curabitur quis euismod mauris. Nulls
                            <br/>
                            eget semper vulputate.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img src="images/temp-images/full-slide-3.jpg" alt=""/>

            <div class="container custom-container-slide">
                <div class="slide-detail text-center">
                    <div class="slide-detail-inner">
                        <h2><a href="#">pasto pizza with extra topping</a></h2>

                        <div class="short-separator"></div>
                        <div class="rating-box">
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span>
                            <span class="rating-icons">
                                <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                                    <g>
                                        <title>background</title>
                                        <rect fill="none" height="21" width="27" y="-1" x="-1"/>
                                    </g>
                                    <g>
                                        <title>Layer 1</title>
                                        <path class="icon-svg"
                                              d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z"
                                              clip-rule="evenodd" fill-rule="evenodd"/>
                                    </g>
                                </svg>
                            </span><br>
                            <span class="rating-figure">(4.1 / 5)</span>
                        </div>
                        <p>
                            Nam ornare arcu turpis, nec congues with us
                            <br/>
                            Curabitur quis euismod mauris. Nulls
                            <br/>
                            eget semper vulputate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider main ends-->

<!--hottest recipes-->
<section class="hot-recipes-var2">
    <div class="container">
        <div class="wrapper-hot-recipe-var2">
            <div class="hot-recipes-bordered">
                <div class="heading-var1 text-center animated wow flipInX">
                    <h2><a href="#">Hottest Recipes at Food & Taste</a></h2>
                  <span class="heading-bell">
                       <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">
                           <g>
                               <title>background</title>
                               <rect fill="none"  height="21" width="27" y="-1" x="-1"/>
                           </g>
                           <g>
                               <title>Layer 1</title>
                               <path class="icon-svg"  d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z" clip-rule="evenodd" fill-rule="evenodd"/>
                           </g>
                       </svg>
                  </span>
                </div>

                <div class="hot-row">
                    <div class="split-images-var2 col-size text-center">
                        <div class="image-first inner-split">
                            <div class="image common-split animated wow flipInY animation-delay100ms">
                                <a href="#"><img src="images/temp-images/hot3-var1.jpg" alt="image"/></a>
                            </div>
                            <div class="intro common-split animated wow flipInY animation-delay200ms">
                                <div class="intro-inner ">
                                    <h3><a href="#">pasto pizza with fillas cheese toppings</a></h3>
                                    <div class="short-separator"></div>
                                    <p>
                                        Nam ornare arcu turpis, nec congu
                                        Curabitur quis euismod...
                                    </p>
                                    <a class="read-more" href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="split-images-var2 col-size text-center">
                        <div class="image-first inner-split">
                            <div class="image common-split animated wow flipInY animation-delay300ms">
                                <a href="#"><img src="images/temp-images/hot3-var2.jpg" alt="image"/></a>
                            </div>
                            <div class="intro common-split animated wow flipInY animation-delay400ms">
                                <div class="intro-inner">
                                    <h3><a href="#">pasto pizza with fillas cheese toppings</a></h3>
                                    <div class="short-separator"></div>
                                    <p>
                                        Nam ornare arcu turpis, nec congu
                                        Curabitur quis euismod...
                                    </p>
                                    <a class="read-more" href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="split-images-var2 col-size text-center">
                        <div class="intro-first inner-split">
                            <div class="image common-split animated wow flipInY animation-delay600ms">
                                <a href="#"><img src="images/temp-images/hot3-var3.jpg" alt="image"/></a>
                            </div>
                            <div class="intro common-split animated wow flipInY animation-delay500ms">
                                <div class="intro-inner">
                                    <h3><a href="#">pasto pizza with fillas cheese toppings</a></h3>
                                    <div class="short-separator"></div>
                                    <p>
                                        Nam ornare arcu turpis, nec congu
                                        Curabitur quis euismod...
                                    </p>
                                    <a class="read-more" href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="split-images-var2 col-size text-center">
                        <div class="intro-first inner-split">
                            <div class="image common-split animated wow flipInY animation-delay800ms">
                                <a href="#"><img src="images/temp-images/hot3-var4.jpg" alt="image"/></a>
                            </div>
                            <div class="intro common-split animated wow flipInY animation-delay700ms">
                                <div class="intro-inner">
                                    <h3><a href="#">pasto pizza with fillas cheese toppings</a></h3>
                                    <div class="short-separator"></div>
                                    <p>
                                        Nam ornare arcu turpis, nec congu
                                        Curabitur quis euismod...
                                    </p>
                                    <a class="read-more" href="#">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hottest recipes ends-->


<!--our chefs banner-->
<div class="chefs-banner">
    <div class="container">
        <div class="chefs-card text-center wow animated bounceInDown">
            <?php
            $contst=$obj->show_compition();
            foreach ($contst as $item) {

            echo'
            <div class="chefs-card-inner">
                <h1>CONTEST</h1>
                <h2>'.$item['contest_tittle'].'</h2>
                <div class="short-separator"></div>
                <img src="images/chefs-hat.png" alt="hat"/>
                <p>'.$item['contest_description'].'</p>
                <a class="read-more-bordered" href="submit-recipesss.php?id='.$item['contest_id'].'">Participate</a>
            </div>';

                
            }
            ?>
        </div>
    </div>
</div>

<!--our chefs banner ends-->

<!--latest news-->
<section class="homo-4-col news-variation2 common-mb">
    <div class="container">
        <div class="heading-var1 text-center animated wow fadeInUp">
            <h1>Latest News</h1>
            <span class="heading-bell"><svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">


                <g>
                    <title>background</title>
                    <rect fill="none"  height="21" width="27" y="-1" x="-1"/>
                </g>

                <g>
                    <title>Layer 1</title>
                    <path class="icon-svg"  d="m24.671816,17.625433c0,0.438 -0.286999,0.801001 -0.681,0.935001c-0.095001,0.036999 -0.198002,0.064999 -0.318001,0.064999l-16.000998,0c-0.553,0 -1,-0.448 -1,-1c0,-0.553999 0.447,-1 1,-1l14.950999,0c-0.500999,-5.053999 -4.764997,-9 -9.950999,-9c-5.523,0 -10,4.477001 -10,10c0,0 0.063,1 -1,1c-1.062,0 -1,-1 -1,-1c0,-5.769999 4.071,-10.581999 9.495001,-11.734999c-0.306002,-0.52 -0.495001,-1.117001 -0.495001,-1.765001c0,-1.933999 1.566999,-3.499999 3.5,-3.499999c1.931999,0 3.499,1.567 3.499,3.499999c0,0.739 -0.232998,1.423 -0.624998,1.989c4.984999,1.459 8.625998,6.056 8.625998,11.511l0,0zm-11.499,-15c-0.828999,0 -1.500999,0.670001 -1.500999,1.499001c0,0.827999 0.672001,1.5 1.500999,1.5c0.828001,0 1.499001,-0.672001 1.499001,-1.5c0,-0.829 -0.671,-1.499001 -1.499001,-1.499001l0,0z" clip-rule="evenodd" fill-rule="evenodd"/>
                </g>
            </svg></span>
            <h2>COMPITITION WINNER</h2>
        </div>







<section class="wrapper-home-slider variation-one">
    <div class="container">
        <div class="home-slider">
            <div class="slider-box">
                <!--left slider-->
                <div class="slider-left">
                    <div class="custom-margin" >
                        <div>
                            <a href="#"><img src="images/temp-images/slide1.jpg" alt="slide"/></a>
                        </div>
                        
                    </div>
                    
                    <span class="featured">WINNER RECIPIE</span>
                </div>
                <!--left slider ends-->

                <!--right slider-->
                <div class="slider-right">
                    <div class="custom-margin" id="sync2">
                        <div>
                            <div class="slide-detail fbox">
                                <div class="box1 box">
                                    <h2><a href="#">Chocolate Earl Gray Pots de Creme Recipe</a></h2>

                                    <ul class="post-meta slider-rating">
                                        <li class="author"><a href="#">Johan Doe</a></li>
                                        <li class="type"><a href="#">Easy</a></li>
                                        <li class="time">2 Hours</li>
                                    </ul>
                                    <p>
                                        Nam ornare arcu turpis, nec congue nibh tempor at.
                                        Curabitur quis euismod mauris. Nulla porttitor orci
                                        eget semper vulputate.
                                    </p>
                                    
                                    

                            </div>
                        </div>

                        <div>
                            
                        </div>

                    </div>
                </div>
                <!--right slider ends-->
            </div>

        </div>
    </div>

</section>








    </div>
</section>
<!--latest news ends-->
<!--food tabs-->
<div class="food-tabs wow animated fadeIn">
    <div class="container">
        <div class="container-food-tabs">
        <!--food tabs-->
        <section class="row custom-row-food-tabs">
        <div class="col-md-7 col-lg-8">
            <div class="recipe-of-day animated wow fadeInLeft">
                <a href="#"><img src="images/temp-images/recipe-of-the-day.jpg" alt="Recipe of the day"/></a>
                <div class="recipe-contents-outer">
                    <div class="recipe-contents text-center">
                        <div class="recipe-content-inner">
                            <span class="tag">Recipe of the Day</span>
                            <h6><a name="description">Pasto Pizza With Fillas Cheese Topping</a></h6>
                            <div class="short-separator"></div>
                            <p>
                                Nam ornare arcu turpis, nec congu
                                Curabitur quis euismod...
                            </p>
                            <a class="read-more" href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-lg-4 custom-col-food-tabs">
        <!--tabs start-->
        <div class="tab-container">
        
            <div class="recipe-contents-outer">
                    <div class="recipe-contents text-center">
                        <div class="recipe-content-inner">
                            <h2>Tips</h2>
                            <div class="short-separator"></div>
                            <button><a href="" class="default-btn min-width-button theme-color" data-toggle="modal" data-target="#myModals" name="title">Add Tips</a></button>
                        </div>
                    </div>
                </div>




        <div class="tabs-container" style="overflow: auto; height: 370px">
        <div class="tab-content">
            
            <?php

$tips=$obj->tip();
foreach ($tips as $item) 
{
echo'
        



            <div class="content-inner">
                <div class="left-side">
                    <a  href="" data-toggle="modal" data-target="#myModal'.$item['tips_id'].'" name="pic"><img src="images/'.$item['tips_img'] .'" style="height: 50px;width: 50px" alt="image"/></a>
                </div>
                <div class="right-side">
                    <h3><a href="" data-toggle="modal" data-target="#myModal'.$item['tips_id'].'" name="title">'.$item['tips_title'].'</a></h3>
                    
                </div>
        </div>
';
}


?>
        </div>
        </div>
        </div>

        <!--tabs end-->
        </div>
        </section>

        <div class="corner-image bg-corner-tabs wow animated zoomIn">
            <img src="images/bg-corner-tomato.png" alt="image"/>
        </div>
        </div>
    </div>
</div>

<!--food tabs ends-->
<?php include('Footer.php') ?>

<?php 


$tips=$obj->tip();
foreach ($tips as $item) 
{

 echo '

<div id="myModal'.$item['tips_id'].'" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
      <div class="left-side">
                    <a  href="" name="pic"><img src="images/'.$item['tips_img'] .'" style="height: 50px;width: 50px" alt="image"/></a>
                </div>
      <h3 name="title">'.$item['tips_title'].'</h3>
        <h5 name="title">'.$item['tips_desspcription'].'</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>';
}

?>
<div id="myModals" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="overflow: auto;">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div class="recipe-set submit-recipe-set">
        <h2>Submit Tips</h2>
        <div class="submit-recipe-form">
            <form action="" id="" method="POST" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-12">
                    <label for="title">Tips Title</label>
                    <input class="required" title="*Enter Recipe Title" type="text" name="txt_title"/>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                <label for="recipe-content">Tip Description</label>
                <textarea class="required" title="*Enter Recipe Description" name="txt_recipe_description" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <label for="upload-image">Upload Tip Image</label>
                <input class="required" title="*Please Upload Recipe Images" type="file" name="fileUpload"/>
             </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="default-btn min-width-button theme-color" name="btnsubmit" value="Submit">Submit Your Tip</button>
                    </div>
                    
                
            </form>
        </div>
    </div>
</div>
</div>
      </div>
      
    </div>
<?php 

 if(isset($_POST['btnsubmit']))
    {

        $recipe_title = $_POST['txt_title'];
        $recipe_description = $_POST['txt_recipe_description'];
        $recipies_pic = $_FILES['fileUpload']['name'];


        $obj->sp_AddTip($recipe_title,$recipe_description,$recipies_pic);
            
            echo"<script>alert('Error')</script>";
            
                      echo '<script> 
                      alert("Your Recipe Has Been Sucessfully Submitted...!!!");
                      window.location.assign("index.php");
                       </script>';
        
                }

?>
  </div>
</div>


