<?php 

include './resources/_head.php';
include './functions/imageFolder.php';

$arr = getFolder('./category/Вхідні');
$iter = count($arr);

?>

<main class="main" role="main">
    <section class="page_start">
        <div class="content">
            <div class="layer" style="background: url('/build/img/title_page/front_door.jpg') center / cover no-repeat;  background-attachment: fixed;">
        </div>
        <div class="text"><p>Вхідні двері</p></div>
    </section>
    <div class="content_main">
        <div class="wrapper">
            <section class="gallery_container">
                <?php 
                    for($i = 0; $i < count($arr); $i++) {
                    list($delay, $duration) = get_delay_duration($i);
                    ?>
                    <div class="box_images wow animate__animated animate__backInUp" data-wow-duration="<?php echo $duration; ?>" data-wow-delay="<?php echo $delay; ?>">
                        <img data-fancybox="gallery" src="<?php echo $arr[$i]; ?>">
                    </div>
                    <?php 
                    }
                ?>
            </section>
        </div>
    </div>
</main>

<?php include './resources/_footer.php' ?>