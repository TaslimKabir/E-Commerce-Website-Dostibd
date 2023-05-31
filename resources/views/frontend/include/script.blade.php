<!-- Jquery Script  CDN-->
<script src="{{asset('/')}}asset/folder/jquery.min.js"></script>

<!-- Jquery Script  CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap Script  CDN-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   <!-- Metis Menus Script -->
   <script src="https://www.baticrom.com/public/batikrom/js/metisMenu.min.js"></script>

   <!-- Sweet Alert CDN -->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

   <!-- Slick slider CDN -->
   <script type="text/javascript" src="https://www.baticrom.com/public/batikrom/js/slick.min.js"></script>

   <!--iconify Script CDN-->
   <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

   <!-- Custom Script for this Design -->
   <script src="https://www.baticrom.com/public/batikrom/js/myjquery.js"></script>

   <script>
   $(document).ready(function(){
       
           $(document).on("click", ".Quantityplus", function () {
               var that =$(this);
               var m = that.attr("data-max");
               var id = that.attr("data-id");
               var cls ='input.qty_'+id;
               var q = parseInt($(cls).val());
               
               q = isNaN(q) ? 1 : q;
               
               var access = m - q;
               
               if (access > 0) {
                   q++;
                   $(cls).val(q)
               }
               
           });
           
           
           $(document).on("click", ".Quantityminus", function () {
               var that =$(this);
               var n = that.attr("data-min");
               var id = that.attr("data-id");
               var cls ='input.qty_'+id;
               var q = parseInt($(cls).val());
               
               q = isNaN(q) ? 1 : q;
               
               if (q > n) {
                   q--;
                   $(cls).val(q)
                   
               }
               
           });
       
       $(document).on('click', function(e) {

           var container = $(".search-section");
           var containerClose = $(".SearchResultDiv");
           
           if (!$(e.target).closest(container).length) {
               containerClose.hide();
           }
   
       });
       
       $(document).on("keyup", ".AjaxSearchProduct", function () {
           
           var search =$(this).val();
           
           if(search.length > 2){
               var url = $(this).data('url');

               $.ajax({
                 url: url,
                 type: 'GET',
                 dataType: 'json',
                 cache: false,
                 data:{'search':search}
               })
               .done(function(data) {
                   $(".SearchResultDiv").empty().append(data.searchProducts);
                   $(".SearchResultDiv").show();
               })
               .fail(function() {
                 // alert("error");
               });
               
           }
           
           
       });
       
       $(document).on('click','.wishlistCompareUpdate',function(){
             var url = $(this).data('url');

             var that = $( this );

             $.ajax({
                 url: url,
                 type: 'GET',
                 dataType: 'json',
                 cache: false,
               })
               .done(function(data) {
                   if(data.success)
                      {

                       $(".viewItemsLists").empty().append(data.itemsView);

                       if(data.status==true){
                         $(that).addClass('active');
                       }else{
                         $(that).removeClass('active');
                       }
                       if(data.statusType==0){
                         $(".wlcounter").empty().append(data.count);
                         if(data.alert==true){
                           alert('Wishlist Are Full. Cannot Added Over 48 Items.');
                         }
                       }else{
                         $(".cpcounter").empty().append(data.count);
                         if(data.alert==true){
                           alert('Compare Are Full. Cannot Added Over 20 Items.');
                         }
                       }



                      }
               })
               .fail(function() {
                 // alert("error");
               });


       });
           
       $(document).on("click", ".singleaddCart", function () {
           
               var that =$(this);
               var id = that.attr("data-id");
               var url = that.attr("data-url");
               
               var cls ='.addToCartProduct_'+ id;
               var clsMS ='.MessageSuccess'+ id;
               var clsCMS ='.CMessageSuccess'+ id;
               var clsLoading ='.LoadingaddCartHide_'+ id;
               var clsAction ='.addCartShow_'+ id;
               
               var data = $(cls).serialize();
               
               $.ajax({
                   url: url,
                   method: "POST",
                   data: data,
                   beforeSend: function() {
                       $(clsAction).hide();
                       $(clsLoading).show();
                       $(clsMS).empty();
                   },
               })
               .done(function (data) {
                   $(clsMS).empty().append('<div style="border: 1px solid #28a745;padding: 5px 10px;margin-bottom:5px;">Product Added Success</div>');
                   $(clsCMS).empty().append('<a href="https://www.baticrom.com/carts" style="border: 1px solid #28a745;padding: 2px 10px;margin-bottom:5px;display:inline-block;">View Cart <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>');
                   $(".HeaderCartItems").empty().append(data.HeadercartItems);
                   $(".HeaderCartItems2").empty().append(data.HeadercartItems2);
                   $(clsLoading).hide();
                   $(clsAction).show();
               })
               .fail(function () {
                   $(clsLoading).hide();
                   $(clsAction).show();
                   location.reload(true);
               });
               
       });
       
       $(document).on('click','.cartUpdate',function(){

             var url = $(this).data('url');
             var Dcharge =parseInt($('.cartDeliveryCharge').text());

             if (isNaN(Dcharge)){
               Dcharge =0;
             }

               $.ajax({
                 url: url,
                 type: 'GET',
                 dataType: 'json',
                 cache: false,
               })
               .done(function(data) {

                   $(".productList-table").empty().append(data.cartItems);
                   $(".HeaderCartItems").empty().append(data.HeadercartItems);
                   $(".HeaderCartItems2").empty().append(data.HeadercartItems2);
               })
               .fail(function() {
                 // alert("error");
               });


       });
       
       
       
   });
       jQuery(document).ready(($) => {
           // $(".quantity").on("click", ".plus", function (e) {
           //     let $input = $(this).prev("input.qty");
           //     let val = parseInt($input.val());
           //     $input.val(val + 1).change();
           // });
           
           
           
                   
           
           // $(".quantity").on("click", ".minus", function (e) {
           //     let $input = $(this).next("input.qty");
           //     var val = parseInt($input.val());
           //     if (val > 0) {
           //         $input.val(val - 1).change();
           //     }
           // });
       });
   </script>
   
   <script>
       $(".sale-slider").slick({
           dots: false,
           autoplay: true,
           autoplaySpeed: 2500,
           infinite: true,
           speed: 300,
           slidesToShow: 4,
           slidesToScroll: 4,
           responsive: [
               {
                   breakpoint: 1024,
                   settings: {
                       slidesToShow: 3,
                       slidesToScroll: 3,
                       infinite: true,
                       dots: true,
                   },
               },
               {
                   breakpoint: 600,
                   settings: {
                       slidesToShow: 1,
                       slidesToScroll: 1,
                   },
               },
               {
                   breakpoint: 480,
                   settings: {
                       slidesToShow: 1,
                       slidesToScroll: 1,
                   },
               },
               // You can unslick at a given breakpoint now by adding:
               // settings: "unslick"
               // instead of a settings object
           ],
       });
   </script>

   <script>
       $(".slider-one").slick({
           dots: false,
           autoplay: true,
           autoplaySpeed: 2500,
           infinite: true,
           speed: 300,
           slidesToShow: 4,
           slidesToScroll: 4,
           responsive: [
               {
                   breakpoint: 1024,
                   settings: {
                       slidesToShow: 3,
                       slidesToScroll: 3,
                       infinite: true,
                       dots: true,
                   },
               },
               {
                   breakpoint: 600,
                   settings: {
                       slidesToShow: 1,
                       slidesToScroll: 1,
                   },
               },
               {
                   breakpoint: 480,
                   settings: {
                       slidesToShow: 1,
                       slidesToScroll: 1,
                   },
               },
               // You can unslick at a given breakpoint now by adding:
               // settings: "unslick"
               // instead of a settings object
           ],
       });
   </script>
   
   <script type="text/javascript">

  

     var url = "http://dostibd.techdevbd.com/lang/change";
  
    
  
     $(".changeLang").change(function(){
  
         window.location.href = url + "?lang="+ $(this).val();
  
     });
  
    
  
 </script>   