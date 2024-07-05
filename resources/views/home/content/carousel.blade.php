<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{&#39;autoplayTimeout&#39;: 10000}" data-dynamic-height="[&#39;700px&#39;,&#39;700px&#39;,&#39;700px&#39;,&#39;550px&#39;,&#39;500px&#39;]" style="height: 700px; opacity: 1;">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            <!-- Carousel Slide 1 -->

            @foreach ($header as $slide )

            <div class="owl-item position-relative overlay overlay-show overlay-op-1 removing animated fadeOut" data-dynamic-height="[&#39;700px&#39;,&#39;700px&#39;,&#39;700px&#39;,&#39;550px&#39;,&#39;500px&#39;]" style="background-image: url(&quot;{{ asset('/storage/'.$slide->image) }}&quot;); background-size: cover; background-position: center center; height: 700px;">

            </div>
            @endforeach


        </div>
    </div>
    <div class="owl-nav"> <button type="button" role="presentation" class="owl-prev"></button> <button type="button" role="presentation" class="owl-next"></button> </div>
    <div class="owl-dots mb-5"> <button role="button" class="owl-dot"><span></span></button> <button role="button" class="owl-dot active"><span></span></button> <button role="button" class="owl-dot"><span></span></button>
    </div>
</div>
