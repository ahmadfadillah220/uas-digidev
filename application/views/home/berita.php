


<!-- Start Upcoming Events Section -->


<section class="bg-upcoming-events">
<div class="container">
<div class="row">
<div class="upcoming-events">
<div class="section-header">
    <h2>Package</h2>
</div>
<!-- .section-header -->
<div class="row" id="package">
    <?php foreach($berita as $berita) { ?>
    <div class="col-md-4">
        <div class="event-items">
            
            <div class="events-content">
                <div style="min-height: 120px !important;">
                <h3><a href="#"><?php echo $berita->judul_berita; ?></a></h3>
                
                </div>
                <p class="text-justify"><?php echo $berita->isi; ?></p>
                <a href="#" class="btn btn-default">Order</a>
                
            </div>
            <!-- .events-content -->
        </div>
        <!-- .events-items -->
    </div>
    <?php } ?>
    <!-- .col-md-6 -->
</div>
<!-- .row -->
</div>
<!-- .upcoming-events -->
</div>
<!-- .row -->
</div>
<!-- .container -->
</section>


<!-- End Upcoming Events Section -->
