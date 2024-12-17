<section class="track spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title">
                    <h2>Latest tracks</h2>
                    <h1>Music podcast</h1>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="track__all">
                    <a href="#" class="primary-btn border-btn">View all tracks</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 p-0">
                <div class="track__content nice-scroll">
                    @foreach ($song as $s)
                    <div class="single_player_container">
                        <h4>{{$s->artist}}</h4>
                        <p class="my-2">{{$s->songdescription}} , {{$s->year}} , {{$s->language}}</p>

                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1">
                            {{$s->audiofile}}
                        </div>
                        <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                            <div class="jp-gui jp-interface">
                                <!-- Player Controls -->
                                <div class="player_controls_box">
                                    <button class="jp-play player_button" tabindex="0"></button>
                                </div>
                                <!-- Progress Bar -->
                                <div class="player_bars">
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div>
                                                <div class="jp-play-bar">
                                                    <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp-duration ml-auto" role="timer" aria-label="duration"></div>
                                </div>
                                <!-- Volume Controls -->
                                <div class="jp-volume-controls">
                                    <button class="jp-mute" tabindex="0"><i
                                            class="fa fa-volume-down"></i></button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    
                   
                </div>
            </div>
            <div class="col-lg-5 p-0">
                <div class="track__pic">
                    <img src="users/img/track-right.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
