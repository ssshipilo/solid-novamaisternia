<?php 
include './resources/_head.php';
include './functions/imageFolder.php';
?>

<main class="main" role="main">
    <section class="slider_start">
        <div class="content">
            <div class="video-wrapper">
            <video autoplay loop muted playsinline>
                <source src="./build/video/videos.mp4" type="video/mp4">
            </video>
            </div>
        </div>
        <p class="text"></p>
    </section>
    <div class="content_main">
    <div class="wrapper">

        <?php 
            $front = getFolder('./category/Вхідні');   
            if(count($front) > 4){
        ?>
            <div class="slider_mounted">
                <h3 class="category_title">
                    Вхідні двері
                </h3>
                <div class="line_slider">
                    <div class="slider_for">
                    <button class="slider-prev">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="#080808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>  
                    </button>
                    <div class="slider">
                        <?php 
                            for( $i = 0; $i<5; $i++) {
                            list($delay, $duration) = get_delay_duration($i);
                            ?>
                            <div class="slide">
                                <div class="img wow animate__animated animate__backInUp" data-wow-duration="<?php echo $duration; ?>" data-wow-delay="<?php echo $delay; ?>">
                                    <img data-fancybox="Front doors" src="<?php echo $front[$i]; ?>">
                                </div>
                            </div>
                            <?php 
                            }
                        ?>
                    </div>
                    <button class="slider-next">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L0.999999 1" stroke="#080808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    </div>
                </div>
                <div class="line_controller">
                    <a href="/front_door" class="btn wow animate__animated animate__backInUp" data-wow-duration="1s" data-wow-delay="0.4"><p>Переглянути більше</p></a>
                </div>
            </div>
        <?php } ?>


        <?php 
            $interior = getFolder('./category/Міжкімнатні');   
            if(count($interior) > 4){
        ?>
            <div class="slider_mounted">
            <h3 class="category_title">
                Міжкімнатні двері
            </h3>
            <div class="line_slider">
                <div class="slider_for">
                <button class="slider-prev">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="#080808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>  
                </button>
                <div class="slider">
                    <?php 
                        for( $i = 0; $i<5; $i++) {
                            list($delay, $duration) = get_delay_duration($i);
                            ?>
                            <div class="slide">
                                <div class="img wow animate__animated animate__backInUp" data-wow-duration="<?php echo $duration; ?>" data-wow-delay="<?php echo $delay; ?>">
                                    <img data-fancybox="Міжкімнатні двері" src="<?php echo $interior[$i]; ?>">
                                </div>
                            </div>
                            <?php 
                        }
                    ?>
                </div>
                <button class="slider-next">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 13L7 7L0.999999 1" stroke="#080808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                </div>
            </div>
            <div class="line_controller">
                <a href="/interior" class="btn wow animate__animated animate__backInUp" data-wow-duration="1s" data-wow-delay="0.4"><p>Переглянути більше</p></a>
            </div>
            </div>

        <?php  } ?>


        <?php 
            $gate = getFolder('./category/Ворота-Забори');   
            if(count($gate) > 4){
        ?>
            <div class="slider_mounted">
                <h3 class="category_title">
                    Ворота/Забори
                </h3>
                <div class="line_slider">
                    <div class="slider_for">
                    <button class="slider-prev">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="#080808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>  
                    </button>
                    <div class="slider">
                    <?php 
                    for( $i = 0; $i<5; $i++) {
                        list($delay, $duration) = get_delay_duration($i);
                        ?>
                        <div class="slide">
                            <div class="img wow animate__animated animate__backInUp" data-wow-duration="<?php echo $duration; ?>" data-wow-delay="<?php echo $delay; ?>">
                                <img data-fancybox="Gates" src="<?php echo $gate[$i]; ?>">
                            </div>
                        </div>
                        <?php  } ?>
                    </div>
                    <button class="slider-next">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L0.999999 1" stroke="#080808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    </div>
                </div>
                <div class="line_controller">
                    <a href="/gate" class="btn wow animate__animated animate__backInUp" data-wow-duration="1s" data-wow-delay="0.4"><p>Переглянути більше</p></a>
                </div>
            </div>

        <?php } ?>


        <?php 
            $loft = getFolder('./category/Меблі лофт');   
            if(count($loft) > 4){
        ?>
            <div class="slider_mounted">
            <h3 class="category_title">
                Меблі лофт
            </h3>
            <div class="line_slider">
                <div class="slider_for">
                <button class="slider-prev">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="#080808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>  
                </button> 
                <div class="slider">
                <?php 
                    for( $i = 0; $i<5; $i++) {
                        list($delay, $duration) = get_delay_duration($i);
                        ?>
                        <div class="slide">
                            <div class="img wow animate__animated animate__backInUp" data-wow-duration="<?php echo $duration; ?>" data-wow-delay="<?php echo $delay; ?>">
                                <img data-fancybox="Mebley loft" src="<?php echo $loft[$i]; ?>">
                            </div>
                        </div>
                <?php  } ?>
                </div>
                <button class="slider-next">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 13L7 7L0.999999 1" stroke="#080808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                </div>
            </div>
            <div class="line_controller">
                <a href="/loft" class="btn wow animate__animated animate__backInUp" data-wow-duration="1s" data-wow-delay="0.4"><p>Переглянути більше</p></a>
            </div>
            </div>

        <?php } ?>


        <?php 
            $other = getFolder('./category/Інші');   
            if(count($other) > 4){
        ?>
            <div class="slider_mounted">
            <h3 class="category_title">
                Інші
            </h3>
            <div class="line_slider">
                <div class="slider_for">
                <button class="slider-prev">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 1L1 7L7 13" stroke="#080808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>  
                </button>
                <div class="slider">
                    <?php 
                        for( $i = 0; $i<5; $i++) {
                            list($delay, $duration) = get_delay_duration($i);
                            ?>
                            <div class="slide">
                                <div class="img wow animate__animated animate__backInUp" data-wow-duration="<?php echo $duration; ?>" data-wow-delay="<?php echo $delay; ?>">
                                    <img data-fancybox="Other" src="<?php echo $other[$i]; ?>">
                                </div>
                            </div>
                    <?php  } ?>
                </div>
                <button class="slider-next">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 13L7 7L0.999999 1" stroke="#080808" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                </div>
            </div>
            <div class="line_controller">
                <a href="/other" class="btn wow animate__animated animate__backInUp" data-wow-duration="1s" data-wow-delay="0.4"><p>Переглянути більше</p></a>
            </div>
            </div>

        <?php } ?>
    </div>
    </div>
</main>

<?php include './resources/_footer.php' ?>