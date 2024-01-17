<?php

ob_start();?>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="?p=home"><h1>Coffee Shop.</h1></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="?p=home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="?p=about">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="?p=gallery">Gallery</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="?p=services">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="?p=contact">Contact Us</a>
                     </li>
                     <li class="nav-item">
                        <div class="searchIcon">
                           <input checked="" class="checkbox" type="checkbox"> 
                           <div class="mainbox">
                               <div class="iconContainer">
                                   <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" class="search_icon"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path></svg>
                               </div>
                            <input class="search_input" placeholder="Rechecher" type="text">
                           </div>
                       </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!--header section end -->
<?php
$header = ob_get_clean();
