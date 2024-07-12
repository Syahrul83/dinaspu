<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0"
    data-plugin-options="{ 'autoplayTimeout': 10000 }" data-dynamic-height="['700px','700px','700px','550px','500px']"
    style="height: 700px; opacity: 1;">
    <div class="owl-stage-outer">
        <div class="owl-stage">

            @foreach ($header as $slide)
                <div class="owl-item position-relative overlay overlay-show overlay-op-1 removing"
                    data-dynamic-height="['700px','700px','700px','550px','500px']"
                    style="background-image: url('{{ asset('/storage/' . $slide->image) }}'); background-size: cover; background-position: center center; height: 700px;">
                </div>
            @endforeach

        </div>
    </div>
    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev"></button>
        <button type="button" role="presentation" class="owl-next"></button>
    </div>
    <div class="owl-dots mb-5">
        <button role="button" class="owl-dot"><span></span></button>
        <button role="button" class="owl-dot active"><span></span></button>
        <button role="button" class="owl-dot"><span></span></button>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 10000, // Adjusted autoplay timeout
            autoplayHoverPause: true,
            lazyLoad: true, // Enable lazy loading
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    });
</script>
