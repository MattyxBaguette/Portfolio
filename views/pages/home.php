<?php include '../views/partials/header.php' ?>

    <div class="box-1">
        <div data-scroll-depth="0.7" class="scroll-parallax image">
            <div data-cursor-depth="0.075" data-src="<?= URL ?>/assets/images/Oval1.svg" class="inner cursor-parallax lazy">
                <img class="oval-1" src="<?= URL ?>/assets/images/Oval1.svg">
            </div>
        </div>
        <div class="presentation">
            <div data-scroll-depth="0.0" class="scroll-parallax">
                <div data-cursor-depth="0.2" class="inner cursor-parallax">
                    Hi my name is <span class="name"> Mathis Gadie</span><br>
                    I'm an <span class="underlined_text">UX/UI webdesigner</span>
                </div>
            </div>
        </div>
        <div data-scroll-depth="0.9" class="scroll-parallax image">
            <div data-cursor-depth="0.025" data-src="<?= URL ?>/assets/images/Oval2.svg" class="inner cursor-parallax lazy">
                <img class="oval-2" src="<?= URL ?>/assets/images/Oval2.svg">
            </div>
        </div>
        <div data-scroll-depth="0.9" class="scroll-parallax image">
            <div data-cursor-depth="0.025" data-src="<?= URL ?>/assets/images/Oval3.svg" class="inner cursor-parallax lazy">
                <img class="oval-3" src="<?= URL ?>/assets/images/Oval3.svg">
            </div>
        </div>
    </div>

    <div class="box-2">
        <div data-scroll-depth="1.0" class="scroll-parallax image">
            <div data-cursor-depth="0.0" data-src="<?= URL ?>/assets/images/Oval4.svg" class="inner cursor-parallax lazy">
                <img class="oval-4" src="<?= URL ?>/assets/images/Oval4.svg">
            </div>
        </div>
        <div data-scroll-depth="0.3" class="scroll-parallax">
            <div data-cursor-depth="0.175" class="inner cursor-parallax">
                <div class="see-more">
                    See more
                    <img src="<?= URL ?>/assets/images/arrow.svg">
                </div>
            </div>
        </div>
        <div data-scroll-depth="0.6" class="scroll-parallax image">
            <div data-cursor-depth="0.1" data-src="<?= URL ?>/assets/images/Oval5.svg" class="inner cursor-parallax lazy">
                <img class="oval-5" src="<?= URL ?>/assets/images/Oval5.svg">
            </div>
        </div>
    </div>
    <div data-scroll-depth="0.3" class="scroll-parallax">
        <div class="box-gallery">
            <div class="overlay-container">
                <a href="<?= URL ?>/work-01"><img class="work-gallery" src="<?= URL ?>/assets/images/Incredibles2_mockup.png">
                <div class="overlay">
                    <div class="text">INCREDIBLES 2</div>
                </div></a>
            </div>
            <div class="overlay-container">
                <a href="<?= URL ?>/work-02"><img class="work-gallery" src="<?= URL ?>/assets/images/Mandala_mockup.png">
                <div class="overlay">
                    <div class="text">THE LITTLE PRINCE</div>
                </div></a>
            </div>
            <div class="overlay-container">
                <a href="<?= URL ?>/work-03"><img class="work-gallery" src="<?= URL ?>/assets/images/Instagram_mockup.png">
                <div class="overlay">
                    <div class="text">NODISK CONTEST</div>
                </div></a>
            </div>
            <a href="<?= URL ?>/work-04"><div class="overlay-container">
                <img class="work-gallery" src="<?= URL ?>/assets/images/Typo_mockup.png">
                <div class="overlay">
                    <div class="text">TYPO</div>
                </div></div>
            </div>
        </div>
    </div>

<?php include '../views/partials/footer.php' ?>
