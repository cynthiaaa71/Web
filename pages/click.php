<html>
    <head>
        <link rel="stylesheet" href="css-nasr/click.css">
        <link rel="stylesheet" href="css-nasr/adshome.css">
        <link rel="stylesheet" href="CSS-majd/styles.css">    
        <link rel="stylesheet" href="css-nasr/home.css">  
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark navbar-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h3>RentMe</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul id="navbar" class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="help.html">help and support</a></li>
                                <li><a class="dropdown-item" href="terms.html">terms of service</a></li>
                                <li><a class="dropdown-item" href="privacypolicy.html">privacy policy</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="report.html">report a neighbourhood concern</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle nav-item " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profile.html">my profile</a></li>
                                <li><a class="dropdown-item" href="inbox.html">inbox</a></li>
                                <li><a class="dropdown-item" href="tripshistory.html">trips history</a></li>
                                <li><a class="dropdown-item" href="wishList.html">wishlist</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="signIn.html">sign out</a></li>
                            </ul>
                        </li>
                    </ul>
        
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pt-3">
                        <li class="nav-item">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-dark" type="submit">Search</button>
                            </form>
                        </li>
        
                    </ul>
        
                </div>
            </div>
        </nav>
        
        

      
        <div class="click">
            <img id="clickedImage" src="" class="clicking">
            <p class="p">you clicked on this house. this is a bigger picture! ENJOY! This is the description of this house: 
                Certainly, here's a small description of a typical suburban house:

Nestled in a quiet, tree-lined neighborhood, this charming suburban house exudes warmth and comfort. Its exterior features a welcoming front porch, adorned with potted plants, and a well-maintained garden that adds a burst of color. The house is a two-story structure with a classic gabled roof and soft, earthy tones that blend seamlessly with the natural surroundings.

Inside, the interior is tastefully decorated with a balance of modern and traditional elements. The open-concept living space is filled with natural light, thanks to large windows, creating an inviting atmosphere. The cozy living room is centered around a fireplace, providing a perfect spot for gatherings during cooler evenings.

The kitchen is a chef's dream, equipped with stainless steel appliances, granite countertops, and an island for casual dining. Adjoining the kitchen is a spacious dining area that leads to a back patio, ideal for al fresco dining and entertaining.

Upstairs, the house boasts comfortable bedrooms, each with its unique character and ample closet space. The master bedroom features an en-suite bathroom and a large window with a lovely view of the backyard.

This suburban house is a place where modern convenience meets the tranquility of a suburban setting, making it a perfect home for those seeking a peaceful and stylish lifestyle.
            </p>
        </div>

        <script>
            
function setClickedImage() {
    var params = new URLSearchParams(window.location.search);
    var imageUrl = params.get('image');
    document.getElementById('clickedImage').src = imageUrl;
}
window.addEventListener('load', setClickedImage);
        </script>


<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
    
    <section class="d-flex justify-content-between p-4" style="background-color: #e0bb38">
        
        <div class="me-5">
            <span>Get connected with us on social networks:</span>
        </div>
        

        
        <div>
            <a href="" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fab fa-github"></i>
            </a>
        </div>
        
    </section>
    

    
    <section class="">
        <div class="container text-center text-md-start mt-5">
            
            <div class="row mt-3">

                
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    
                    <h6 class="text-uppercase fw-bold">Services</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #e0bb38; height: 2px" />
                    <p>
                        <a href="specialoffers.html" class="text-white">Offers</a>
                    </p>
                    <p>
                        <a href="ads.html" class="text-white">Ads</a>
                    </p>

                </div>
                

                
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    
                    <h6 class="text-uppercase fw-bold">Support</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #e0bb38; height: 2px" />
                    <p>
                        <a href="report.html" class="text-white">Report Concern</a>
                    </p>
                    <p>
                        <a href="help.html" class="text-white">Help and Soppurt</a>
                    </p>
                    <p>
                        <a href="terms.html" class="text-white">Terms of Service</a>
                    </p>
                    <p>
                        <a href="privacypolicy.html" class="text-white">Privacy policy</a>
                    </p>
                </div>
                

                
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #e0bb38; height: 2px" />
                    <p><i class="fas fa-home mr-3"></i> Beirut, Lebanon</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 961 03 030303</p>
                    <p><a href=#! class="text-white"><i class="fas fa-print mr-3"></i> Contact Us</a></p>
                </div>
                
            </div>
            
        </div>
    </section>
    

    
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Majd-Cynthia-Nasr</a>
    </div>
    
</footer>


</main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
    </body>
</html>