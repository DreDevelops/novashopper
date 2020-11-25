<?php $__env->startSection('content'); ?>
    <div class="uk-section uk-padding-remove">
        <div class="uk-dark uk-padding-remove">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">

                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                            <img src="images/newreleases.jpg" alt="" uk-cover>

                        </div>

                    </li>
                    <li>
                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
                            <img src="images/beard.jpg" alt="" uk-cover>
                        </div>
                    </li>
                    <li>
                        <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
                            <img src="images/apparel.jpg" alt="" uk-cover>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>
                <div class="uk-overlay uk-position-center-left uk-light">
                    <h1 class="uk-text-bold uk-text-danger" style="text-shadow: 2px 2px #0d34c1; font-family: 'Big Shoulders Stencil Text', cursive;">GET INTO THE GROOVE</h1>

                </div>
                <div class="uk-overlay uk-position-bottom-right">
                        <button style="background-color: #ec0129;" class="uk-button uk-button-primary uk-button-large">CHECK OUT NEW RELEASES</button>
                    </div>
                </div>

            

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dre/Documents/repos/nova-shopper/resources/views/welcome.blade.php ENDPATH**/ ?>