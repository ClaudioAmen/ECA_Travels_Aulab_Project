<footer class="text-center footerCustom">
    <!-- Grid container -->
    <div class="container pt-2">


    <!-- Section: Social media -->
    <section class="mb-3 d-flex justify-content-evenly">
        
       <!-- Instagram -->
       <a
       data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://www.instagram.com/eca_travels/" role="button"data-mdb-ripple-color="dark" target="blank"> 
       <i class="fa-brands fa-instagram" style="color: #187af1;"></i>
   </a>
        <!-- Twitter -->
        <a
        data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://x.com/aulab_it" role="button"data-mdb-ripple-color="dark" target="blank"> 
        <i class="fa-brands fa-x-twitter" style="color: #187af1;"></i>
    </a>

        <!-- Pinterest -->
        <a
        data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://it.pinterest.com/#top" role="button"data-mdb-ripple-color="dark" target="blank"> 
        <i class="fa-brands fa-pinterest" style="color: #187af1;"></i>
        </a>

        {{-- <!-- Facebook -->
        <a
        data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="https://www.facebook.com/aulab/?locale=it_IT" role="button"data-mdb-ripple-color="dark" target="blank"> 
        <i class="fa-brands fa-facebook" style="color: #187af1;"></i>
        </a> --}}

        {{--------------- contact us (collega mail) ---------------}}

        <a
        data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="{{route('contactus')}}" role="button"data-mdb-ripple-color="dark"> 
        <i class="fa-regular fa-address-book" style="color: #187af1;"></i>
        </a>

    </section>
    <!-- Section: Social media -->
 <!-- quote -->

 <p class="pb-3"> {{__('ui.quote')}}</p>
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3 copyrightCustom">
      © 2024 Copyright:
      <a class="copyrightCustom" href="https://youtu.be/A8qMyBWZNw0" target="blank" >ECATravels.noi</a>
    </div>
   
    <!-- Copyright -->

    
  </footer>