<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('meta.php'); ?>
    <?php include('links.php'); ?>

    <link rel="stylesheet" href="assets/css/fancybox.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
</head>

<body>

    <?php include('header.php'); ?>



    <section class="gallery-area pt-100 pb-70">
        <div class="container">
            <?php
            // Path to the images folder
            $directory = 'assets/images/future/events/';

            // Get all image files from the directory (you can add more extensions if needed)
            $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            // Check if any images exist
            if ($images) {
                echo '<div class="row">';

                // Loop through each image and display it
                foreach ($images as $image) {
                    echo '<div class="col-lg-4 col-md-6">';
                    echo '    <div class="single-gallery-item">';
                    echo '        <a data-fancybox="gallery" href="' . $image . '">';
                    echo '            <img src="' . $image . '" alt="image">';
                    echo '        </a>';
                    echo '    </div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No images found in the directory.</p>';
            }
            ?>

            <?php
            // Path to the videos folder
            $directory = 'assets/images/future/events/';

            // Get all video files from the directory (you can add more extensions if needed)
            $videos = glob($directory . "*.{mp4,webm,ogg}", GLOB_BRACE);

            // Check if any videos exist
            if ($videos) {


                // Loop through each video and display it
                foreach ($videos as $video) {
                    echo '<div class="col-lg-4 col-md-6">';
                    echo '    <div class="single-gallery-item video">';
                    echo ' <a data-fancybox="gallery" href="' . $video . '">';
                    echo '<div class="play-btn">
<i class="fa fa-play" aria-hidden="true"></i>
</div>';
                    echo '        <video width="100%">';
                    echo '            <source src="' . $video . '" type="video/mp4">';
                    echo '            Your browser does not support the video tag.';
                    echo '        </video> </a>';
                    echo '    </div>';
                    echo '</div>';
                }

                echo '</div>';
            } else {
                echo '<p>No videos found in the directory.</p>';
            }
            ?>

        </div>
    </section>

    <?php include('footer.php'); ?>

    <?php include('scripts.php'); ?>
    <script src="assets/js/fancybox.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>


</body>

</html>