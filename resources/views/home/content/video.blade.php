<div class="card">
    <div class="card-side bg-color-primary text-3 text-uppercase ">Video</div>
    <br>
    <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
        <div class="row">
            <div class="col">
                <div class="ratio ratio-16x9 ratio-borders">

                    <iframe width="420" height="315" src="https://www.youtube.com/embed/{{$video->link}}">
                    </iframe>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="thumb-info-caption-text">
                    <div class="d-inline-block text-default text-1 mt-2 float-none">
                        <a target="_blank" href="https://www.youtube.com/watch?v={{$video->link}}olor-default">{{$video->created_at->format('d M Y')}}</a>
                    </div>
                    <h4 class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
                        <a target="_blank" href="https://www.youtube.com/watch?v={{$video->link}}decoration-none text-color-dark text-color-hover-primary">{{$video->title}}</a>
                    </h4>
                </div>
            </div>
        </div>
    </article>
</div>
