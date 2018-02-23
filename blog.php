<?php include("./header.php") ?>
<div class="page-head">
    <h1>BLOG</h1>
</div>
<div id="blog" class="container">
    <div class="row">
    <?php for ($i=0; $i < 5; $i++) : ?>
    <div class="col-12 col-md-4 blog-block wow fadeIn" data-wow-delay="<?=$i * 0.3?>s" data-wow-duration="2s">
        <a href="#"><img src="./images/shutterstock_596083874.jpg" alt=""></a>
        <a href="#"><h1>Title</h1></a>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam totam accusantium veniam reprehenderit deserunt impedit vitae quisquam, laborum natus, officiis vel facilis commodi possimus est esse neque, iste eveniet a.</p>
        <a class="blog-link" href="#">Read More</a>
    </div>
    <?php endfor; ?>
    </div>
</div>

<?php include("./footer.php") ?>