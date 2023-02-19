<?php 

include './resources/_head.php';
include './functions/imageFolder.php';

$arr = getFolder('./category/Інші');
$iter = count($arr);

?>

<main class="main" role="main">
    <section class="page_start">
        <div class="content">
            <div class="layer" style="background: url('/build/img/title_page/other.jpg') center / cover no-repeat;  background-attachment: fixed;">
        </div>
        <div class="text"><p>Інші</p></div>
    </section>
    <div class="content_main">
        <div class="wrapper">
            <?php  if($iter > 0){ ?>
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
            <?php } else { ?>
                <div class="alert">
                    <h2>На жаль, наразі пропозиції відсутні, але незабаром ми додамо нові</h2>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

<?php include './resources/_footer.php' ?>