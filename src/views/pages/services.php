<?php

$title = 'services';

ob_start();?>
   <!-- services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="services_taital">Services</h1>
               <p class="services_text">Typesetting industry lorem Ipsum is simply dummy text of the </p>
            </div>
         </div>
         <div class="services_section_2">
            <div class="row">
               <div class="col-lg-4 col-sm-12 col-md-4">
                  <div class="box_main active">
                     <h3 class="decorate_text">Original Coffee</h3>
                     <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12 col-md-4">
                  <div class="box_main">
                     <h3 class="decorate_text">20 Coffee Flavors</h3>
                     <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12 col-md-4">
                  <div class="box_main">
                     <h3 class="decorate_text">Pleasant Abient</h3>
                     <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->
   <?php
$page_content = ob_get_clean();
