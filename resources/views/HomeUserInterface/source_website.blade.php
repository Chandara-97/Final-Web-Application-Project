<div class="row">
    <div class="col"></div>
    <?php $k=0;?>
    @foreach($websites as $website)
        <?php $k++;?>
        @if($k<4)
            <div class="card col-3 " data-aos="flip-up" style="width: 18rem;">
                <a href="#" target="_blank">
                    <img src="{{asset("WebsiteImages/".$website->image)}}" class="card-img-top img-thumbnail" alt="BookImage">
                </a>
                <div class="card-body">
                    <p class="card-text">
                        <?php
                        echo $website->description;
                        ?>
                    </p>
                </div>
            </div>
        @endif
    @endforeach
    <div class="col"></div>
</div>
