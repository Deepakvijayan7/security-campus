<footer>
   <div class="footer_class padding80">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-sm-8 col-12 col-lg-4">
            <div class="ftr-img">
               <img class="ftr-logo" src="assets/images/footer_logo.svg">
               
            </div>
         </div>
         
         <div class="col-md-3 col-sm-3 col-12 col-lg-2">
            <div class="ftr-menu">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">who we are</a></li>
                  <li><a href="careers.php">testimonials</a></li>
                  <li><a href="contact.php">contact us</a></li>
               </ul>
            </div>
         </div>

         <div class="col-md-3 col-sm-4 col-12 col-lg-2">
            <div class="ftr-menu">
               <ul>
                  <li><a href="">ASIS respiratory</a></li>
                  <li><a href="">certifications</a></li>
                  <li><a href="">our learning path</a></li>
               </ul>
            </div>
         </div>

         <div class="col-md-6 col-sm-4 col-12 col-lg-2">
            <div class="ftr-menu">
            <ul>
                  <li><a href="">news & articles</a></li>
                  <li><a href="">resources</a></li>
                  <li><a href="">training calendar</a></li>
                  <li><a href="">forum</a></li>
               </ul>
            </div>
         </div>

         <div class="col-md-6 col-sm-4 col-12 col-lg-2">
            <div class="ftr-menu">
               <ul>
                  <li><a href="">FAQ</a></li>
                  <li><a href="">terms and conditions</a></li>
                  <li><a href="">privacy policy</a></li>
                  <li><a href="">cookies policy</a></li>
               </ul>
            </div>
         </div>

         <div class="line_ftr"></div>

         <div class="col-md-4">
            <div class="ftr-menu">
               <ul>
                  <li><a href="">Copyright © <span>SECURITY CAMPUS.</span> All rights reserved.</a></li>
               </ul>
            </div>
         </div>

         <div class="col-md-4">
            <div class="ftr-menu">
               <ul>
                  <li>203/204 Parshwanath Business Park
                     Sarkhej - Gandhinagar Hwy, Satellite, 
                     Opp KFC, Prahlad Nagar
                     Ahmedabad, Gujarat 380015</li>
               </ul>
            </div>
         </div>

         <div class="col-md-4">
            <div class="ftr-menu">
               <ul>
                  <li>Phone: +91 99999 33425</li>
                  <li>E-Mail: info@securitycampus.com</li>
               </ul>
            </div>
         </div>

         <div class="line_ftr"></div>

         <ul class="social_media">
            <li><a href="#"><img src="assets/images/social1.svg"></a></li>
            <li><a href="#"><img src="assets/images/social2.svg"></a></li>
            <li><a href="#"><img src="assets/images/social3.svg"></a></li>
         </ul>

      </div>
      </div>
   </div>
</footer>
<script src="assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>



<script src="assets/js/easy-responsive-tabs.js" type="text/javascript"></script>
 <script>
         $(document).ready(function () {
             $('#horizontalTab').easyResponsiveTabs({
                 type: 'default', //Types: default, vertical, accordion           
                 width: 'auto', //auto or any width like 600px
                 fit: true, // 100% fit in a container
                 closed: 'accordion', // Start closed if in accordion view
                 activate: function (event) { // Callback function if tab is switched
                     var $tab = $(this);
                     var $info = $('#tabInfo');
                     var $name = $('span', $info);
                     $name.text($tab.text());
                     $info.show();
                 }
             });
             $('#verticalTab').easyResponsiveTabs({
                 type: 'vertical',
                 width: 'auto',
                 fit: true
             });
         });
      </script> 


<script>

/*-------------main banner carousel------*/
$('.main-banner .owl-carousel').owlCarousel({
       loop: true,
       margin: 30,
       items:1,
       dots:true,
	   autoplay: true,
	   autoplayTimeout:4000,
	   autoplayHoverPause:false,
	   autoplaySpeed: 1200,
   });

/*-------------certification carousel------*/


   $('.certification .owl-carousel').owlCarousel({
       nav:true,
       loop: true,
       margin: 30,
       dots:false,
	   autoplay: true,
	   autoplayTimeout:4000,
	   autoplayHoverPause:false,
	   autoplaySpeed: 1200,
       navText: [
        '<img src="assets/images/next.png"></img>',
        '<img src="assets/images/prev.png"></img>'
    ],
       responsive: {
           0: {
               items: 1,
               nav:false
           },
           481: {
               items: 2,
               nav:false
           },
           601: {
               nav:true
           },
           700: {
               items: 3
           },
           850:{
               items: 4
           },
           1100: {
               items: 5
           }
       }
   });
  

/*-------------News carousel------*/

   $('.news-section .owl-carousel').owlCarousel({
       loop: true,
       margin: 30,
       items:3,
       dots:false,
	   autoplay: false,
	   autoplayTimeout:4000,
	   autoplayHoverPause:false,
      responsive: {
           0: {
               items: 1,
	   autoplay: true,
	   autoplaySpeed: 900
           },
           481: {
               items: 1,
	   autoplay: true,
	   autoplaySpeed: 1100
           },
           600: {
               items: 2,
	   autoplay: true,
	   autoplaySpeed: 1100
           },
           992: {
               items: 3

           }
       }
      
   });



/*-------------testimonial carousel------*/
$(document).ready(function() {
 
 $('.section_testimonial .owl-carousel').owlCarousel({
loop:true,
dots:false,
nav: true, 
items:1,
 autoplay: true,
 autoplayTimeout:2000,
 autoplaySpeed: 1500,
singleItem:true,
navText: [
   '<img src="assets/images/prev1.png"></img>',
   '<img src="assets/images/next1.png"></img>'
],
responsive: {
  0:{
nav: false
  },
  561: {
nav: true 
      }
  }
});

});


</script>
</body>
</html>