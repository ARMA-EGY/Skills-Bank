<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Landing Page</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <link href="{{ asset('landing_assets/css/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('landing_assets/css/landing-page.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/edit.css') }}" rel="stylesheet"/>

        <!--     Fonts and icons     -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
        <link href="{{ asset('landing_assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
      <!-- Favicon -->
      <link rel="icon" href="{{ asset('public/images/favicon.png') }}" type="image/png">
        

    </head>
    <body class="landing-page landing-page1">
        <nav class="navbar navbar-transparent navbar-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                    </button>
                    <a href="#">
                        <div class="logo-container">
                            <div class="">
                                 <img src="{{ asset('public/storage/'.$logo->logo) }}" style="width: 150px;" alt="logo">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="example" >
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="https://www.facebook.com/EBE1.eg" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            Like
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/ebe-isanad/" target="_blank">
                            <i class="fa fa-linkedin"></i>
                            Linkedin
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="wrapper">
            <div class="parallax filter-gradient blue" data-color="blue">
                <div class="parallax-background">
                    <img class="parallax-background-image" src="{{asset('public/'.$header_components[2]->ElementsModel[0]->content)}}">
                    
                </div>
                <div class= "container">
                    <div class="row">
                        <div class="col-md-5 hidden-xs">
                            <div class="parallax-image">
                                <img class="phone" src="{{asset('public/'.$header_components[1]->ElementsModel[0]->content)}}" id="elt_{{$header_components[1]->ElementsModel[0]->id}}" style="margin-top: 50px"/>

                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <div class="description">

                                <h2>{{$header_components[0]->ElementsModel[0]->content}}</h2>
                                <br>
                                <h5>{{$header_components[0]->ElementsModel[1]->content}}</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-gray section-clients">
                <div class="container text-center">
                    <div class="">
    
                        <h4 class="header-text">{{$section_2_components[0]->ElementsModel[0]->content}}</h4>
                        <p>
                            {{$section_2_components[0]->ElementsModel[1]->content}}<br>
                        </p>
                    </div>
                    
                    
                    
                
                    
                    <div class="logos">
                        <ul class="list-unstyled section_2_landing">
                            
                         @foreach($section_2_landing_cards as $card)                   
                            <li  class="parent">
      
                                <img src="{{asset('public/'.$card->CardsElementsModel[0]->content)}}"/>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section section-presentation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="description">
                            
                                <h4  class="header-text">{{$section_3_components[1]->ElementsModel[0]->content}}</h4>
                                <p>{{$section_3_components[1]->ElementsModel[1]->content}}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 hidden-xs">
<img src="{{asset('public/'.$section_3_components[0]->ElementsModel[0]->content)}}"  >
  
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-demo">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div id="description-carousel" class="carousel fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="{{asset('public/'.$section_3_components[4]->ElementsModel[0]->content)}}" id="elt_{{$section_3_components[4]->ElementsModel[0]->id}}" >
                                    </div>
       
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            
         
                            
                            <h4 class="header-text">{{$section_3_components[2]->ElementsModel[0]->content}}</h4>
                            <p>
                                {{$section_3_components[2]->ElementsModel[1]->content}}
                            </p>
                            <a href="{{$section_3_components[2]->ElementsModel[3]->content}}"  class="btn btn-fill btn-info" data-button="info">{{$section_3_components[2]->ElementsModel[2]->content}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-features">
                <div class="container">
                    <div class="">
  
                        <h4 class="header-text text-center">{{$section_3_components[3]->ElementsModel[0]->content}}</h4>
                    </div>
                    
                <div class="p-4 text-right" style="position: relative;">
     
                </div>    
                    
                    
                    <div class="row">
                        
                        @foreach($section_3_landing_cards as $card)
                        
                        <div class="col-md-4" >
                            <div class="card card-blue">
                            
                                <div class="icon mt-2">
                                    <img  style="border-radius: 60px;" src="{{asset('public/'.$card->CardsElementsModel[2]->content)}}"/>
                                </div>
                                <div class="text">
                                    <h4>{{$card->CardsElementsModel[0]->content}}</h4>
                                    <p>{{$card->CardsElementsModel[1]->content}}</p>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
 
                    </div>
                    
                    
                </div>
            </div>

            <div class="section section-no-padding">
                <div class="parallax filter-gradient blue" data-color="blue">
                    <div class="parallax-background">
                        <img class ="parallax-background-image" src="{{asset('public/'.$section_4_components[1]->ElementsModel[0]->content)}}"/>
                        
 
                
                    </div>
                    <div class="info">
                   
                        <h1>{{$section_4_components[0]->ElementsModel[0]->content}}</h1>
                        <p>{{$section_4_components[0]->ElementsModel[1]->content}}</p>
                        <a href="{{$section_4_components[0]->ElementsModel[3]->content}}" class="btn btn-neutral btn-lg btn-fill">{{$section_4_components[0]->ElementsModel[2]->content}}</a>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="https://ebe-eg.net/">
                                Home
                                </a>
                            </li>
                            <li>
                                <a href="https://ebe-eg.net/about">
                                About
                                </a>
                            </li>
                            <li>
                                <a href="https://ebe-eg.net/clients">
                                Clients
                                </a>
                            </li>
                            <li>
                                <a href="https://ebe-eg.net/blog">
                                Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="social-area pull-right">
                        <a href="https://www.facebook.com/EBE1.eg" target="_blank" class="btn btn-social btn-facebook btn-simple">
                        <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/ebe-isanad/" target="_blank" class="btn btn-social btn-facebook btn-simple">
                        <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </footer>
        </div>












    </body>
    <script src="{{ asset('landing_assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    
    <script src="{{asset('js/addons.js')}}"></script>

    <script src="{{ asset('landing_assets/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing_assets/js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing_assets/js/awesome-landing-page.js') }}" type="text/javascript"></script>
</html>
