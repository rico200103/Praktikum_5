 <?= $this->extend('layout/template'); ?>

 <?= $this->section('content'); ?>
 <div class="container">
   <div class="row">
     <div class="col">
       <!DOCTYPE html>
       <html>

       <body>

         <!-- header -->
         <header>
           <div class="container">
             <h1><a href="index.html"></a>Control & Monitoring IoT</h1>
           </div>
         </header>

         <!-- banner -->
         <section class="banner">
           <h2>WELCOME TO MY WEBSITE</h2>
         </section>

         <!-- about -->
         <section class="about">
           <div class="container">
             <h3>Control & Monitoring IoT</h3>
             <p>Aplikasi ini dapat membantu anda dalam mengawasi dan melakukan kontrol pada perangkat elektronik anda</p>
           </div>
         </section>
       </body>

       </html>
     </div>
   </div>
 </div>
 <?= $this->endSection(); ?>