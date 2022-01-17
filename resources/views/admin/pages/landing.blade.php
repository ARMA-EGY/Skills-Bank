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
    
    <style>
        .input-group {
    position: relative;
    display: flow-root;
    border-collapse: separate;
    margin-bottom: 15px;
}

.modal-header .close {
    margin-top: -25px;
}

textarea
{
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


    </style>
    
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
            <div class="parallax filter-gradient blue cover" data-color="blue">
                <label for="upload_photoh" class="update-slider">
                                <i class="fa fa-camera"></i>
                                Update Photos
                </label>
                <form class="update_component_form"  enctype="multipart/form-data">
                    @csrf
                    <input class="hidden-input change_photo" id="upload_photoh" type="file" name="{{$header_components[2]->ElementsModel[0]->id}}">
                </form> 
                
                <div class="parallax-background">
                    <img class="parallax-background-image" src="{{asset('public/'.$header_components[2]->ElementsModel[0]->content)}}">
                      
                </div>
                <div class= "container">
                    <div class="row">
                        <div class="col-md-5 hidden-xs">
                            <div class="parallax-image">
                                <img class="phone" src="{{asset('public/'.$header_components[1]->ElementsModel[0]->content)}}" id="elt_{{$header_components[1]->ElementsModel[0]->id}}" style="margin-top: 50px"/>
                                <form class="update_component_form"  enctype="multipart/form-data">
                                    @csrf
                                <label for="upload_photom" class="update-photo about-img">
                                <i class="fa fa-camera"></i>
                                </label>
                                <input class="hidden-input change_photo" id="upload_photom" type="file" name="{{$header_components[1]->ElementsModel[0]->id}}">
                            </form> 
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-1">
                            <div class="description edit-section">
                                <i class="fa fa-edit edit" data-componentId="{{$header_components[0]->id}}" data-edit="header" data-target=""></i>
                                <h2 id="elt_{{$header_components[0]->ElementsModel[0]->id}}">{{$header_components[0]->ElementsModel[0]->content}}</h2>
                                <br>
                                <h5  id="elt_{{$header_components[0]->ElementsModel[1]->id}}">{{$header_components[0]->ElementsModel[1]->content}}</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-gray section-clients">
                <div class="container text-center">
                    <div class="edit-section">
                        <i class="fa fa-edit edit" data-componentId="{{$section_2_components[0]->id}}" data-edit="header" data-target=""></i>
                        <h4 class="header-text" id="elt_{{$section_2_components[0]->ElementsModel[0]->id}}">{{$section_2_components[0]->ElementsModel[0]->content}}</h4>
                        <p id="elt_{{$section_2_components[0]->ElementsModel[1]->id}}">
                            {{$section_2_components[0]->ElementsModel[1]->content}}<br>
                        </p>
                    </div>
                    
                    
                    
                <div class="p-4 text-right" style="position: relative;">
                    <button class="btn add_card" data-cardName="section_2_landing">
                        <i class="fa fa-plus"></i> 
                    </button>
                </div>                    
                    
                    <div class="logos">
                        <ul class="list-unstyled section_2_landing">
                            
                         @foreach($section_2_landing_cards as $card)                   
                            <li id="{{$card->id}}_card" class="edit-section parent">
                                <i class="fa fa-times-circle edit2 text-danger card_remove" data-cardId="{{$card->id}}"></i>
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
                            <div class="description edit-section">
                           <i class="fa fa-edit edit" data-componentId="{{$section_3_components[1]->id}}" data-edit="header" data-target=""></i>                            
                                <h4 id="elt_{{$section_3_components[1]->ElementsModel[0]->id}}" class="header-text">{{$section_3_components[1]->ElementsModel[0]->content}}</h4>
                                <p id="elt_{{$section_3_components[1]->ElementsModel[1]->id}}">{{$section_3_components[1]->ElementsModel[1]->content}}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 hidden-xs">
<img src="{{asset('public/'.$section_3_components[0]->ElementsModel[0]->content)}}" id="elt_{{$section_3_components[0]->ElementsModel[0]->id}}" >
                            <form class="update_component_form"  enctype="multipart/form-data" style="margin-top: -29px;
">
                                    @csrf
                                <label for="upload_photos3" class="update-photo about-img">
                                <i class="fa fa-camera"></i>
                                </label>
                                <input class="hidden-input change_photo" id="upload_photos3" type="file" name="{{$section_3_components[0]->ElementsModel[0]->id}}" >
                            </form> 
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
                            <form class="update_component_form"  enctype="multipart/form-data" style="margin-top: -29px;
">
                                    @csrf
                                <label for="upload_photos7" class="update-photo about-img">
                                <i class="fa fa-camera"></i>
                                </label>
                                <input class="hidden-input change_photo" id="upload_photos7" type="file" name="{{$section_3_components[4]->ElementsModel[0]->id}}" >
                            </form> 
                                    </div>
       
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 edit-section">
                            
                          <i class="fa fa-edit edit" data-componentId="{{$section_3_components[2]->id}}" data-edit="header" data-target=""></i>            
                            
                            <h4 id="elt_{{$section_3_components[2]->ElementsModel[0]->id}}" class="header-text">{{$section_3_components[2]->ElementsModel[0]->content}}</h4>
                            <p id="elt_{{$section_3_components[2]->ElementsModel[1]->id}}">
                                {{$section_3_components[2]->ElementsModel[1]->content}}
                            </p>
                            <a href="{{$section_3_components[2]->ElementsModel[3]->content}}" id="elt_{{$section_3_components[2]->ElementsModel[2]->id}}" class="btn btn-fill btn-info" data-button="info">{{$section_3_components[2]->ElementsModel[2]->content}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-features">
                <div class="container">
                    <div class="edit-section">
                        <i class="fa fa-edit edit" data-componentId="{{$section_3_components[3]->id}}" data-edit="header" data-target=""></i>    
                        <h4 id="elt_{{$section_3_components[3]->ElementsModel[0]->id}}" class="header-text text-center">{{$section_3_components[3]->ElementsModel[0]->content}}</h4>
                    </div>
                    
                <div class="p-4 text-right" style="position: relative;">
                    <button class="btn add_card" data-cardName="section_3_landing">
                        <i class="fa fa-plus"></i> 
                    </button>
                </div>    
                    
                    
                    <div class="row section_3_landing">
                        
                        @foreach($section_3_landing_cards as $card)
                        
                        <div class="col-md-4" id="{{$card->id}}_card">
                            <div class="card card-blue edit-section">
                             <i class="fa fa-ellipsis-h edit2" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="right: 15px; top: 25px; color: black;"></i>    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" style="position: inherit;">
                              <a class="dropdown-item pointer edit_card" data-cardId="{{$card->id}}">
                                    <i class="fa fa-edit text-success"></i> Edit</a>
                              <a class="dropdown-item pointer card_remove" data-cardId="{{$card->id}}">
                                    <i class="fa fa-trash text-danger"></i> Remove</a>
                            </div> 
                            
                                <div class="icon mt-2">
                                    <img id="crd_{{$card->CardsElementsModel[2]->id}}" style="border-radius: 60px;" src="{{asset('public/'.$card->CardsElementsModel[2]->content)}}"/>
                                </div>
                                <div class="text">
                                    <h4 id="crd_{{$card->CardsElementsModel[0]->id}}">{{$card->CardsElementsModel[0]->content}}</h4>
                                    <p id="crd_{{$card->CardsElementsModel[1]->id}}">{{$card->CardsElementsModel[1]->content}}</p>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
 
                    </div>
                    
                    
                </div>
            </div>

            <div class="section section-no-padding">
                <div class="parallax filter-gradient blue cover" data-color="blue">
                    <label for="upload_photos4img" class="update-slider">
                                <i class="fa fa-camera"></i>
                                Update Photos
                    </label>
                    <form class="update_component_form"  enctype="multipart/form-data">
                        @csrf
                        <input class="hidden-input change_photo" id="upload_photos4img" type="file" name="{{$section_4_components[1]->ElementsModel[0]->id}}">
                    </form> 
                    
                    <div class="parallax-background">
                        <img class ="parallax-background-image" src="{{asset('public/'.$section_4_components[1]->ElementsModel[0]->content)}}"/>
                        
                    </div>
                    <div class="info edit-section">
                       <i class="fa fa-edit edit" data-componentId="{{$section_4_components[0]->id}}" data-edit="header" data-target="header_data"></i>                  
                        <h1 id="elt_{{$section_4_components[0]->ElementsModel[0]->id}}">{{$section_4_components[0]->ElementsModel[0]->content}}</h1>
                        <p id="elt_{{$section_4_components[0]->ElementsModel[1]->id}}">{{$section_4_components[0]->ElementsModel[1]->content}}</p>
                        <a href="{{$section_4_components[0]->ElementsModel[3]->content}}" id="elt_{{$section_4_components[0]->ElementsModel[2]->id}}" class="btn btn-neutral btn-lg btn-fill">{{$section_4_components[0]->ElementsModel[2]->content}}</a>
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




        <!--=================== Modals ====================-->


        <!--========= Edit Component Modal =========-->
        <div id="edit_component_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <form class="update_component_form" data-target="">
                  @csrf           
                      <div class="modal-body" id="edit_component_body">
                          
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary submit_edit_form">Save </button>
                      </div>
          
                  </form>        
              </div>
            </div>
        </div>
          
        <!--========= Edit Card Modal =========-->
        <div id="edit_card_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="update_card_form" data-target="">
                    @csrf           
                        <div class="modal-body" id="edit_card_body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary submit_edit_form">Save </button>
                        </div>
            
                    </form>        
                </div>
            </div>
        </div>
        
        <!--========= Add Card Modal =========-->
        <div id="add_card_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ADD Card</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="add_card_form" data-target="">
                    @csrf           
                        <div class="modal-body" id="add_card_body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary submit_edit_form">Save </button>
                        </div>
            
                    </form>        
                </div>
            </div>
        </div>








    </body>
    <script src="{{ asset('landing_assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    
    <script src="{{asset('js/addons.js')}}"></script>

    <script src="{{ asset('landing_assets/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing_assets/js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing_assets/js/awesome-landing-page.js') }}" type="text/javascript"></script>
</html>
