<?php // get_template_part('templates/page', 'header'); ?>

<div class="video-container">
  <div id="player"></div>
<!--  <iframe width="100%" height="100%" id="video" src="//www.youtube.com/embed/pE_P9EcbVOI?&autoplay=0&modestbranding=1&showinfo=0&controls=0&loop=1" frameborder="0" allowfullscreen></iframe> -->
  <div class="error-404">
    <h1 class="text-center">404: Page not found</h1>
  </div>
</div>

<script>      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = "http://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
          playerVars: { 'autoplay': 1, 'controls': 0,'showinfo': 0, 'loop': 1, 'wmode':'opaque', 'iv_load_policy': 3, 'modestbranding': 1, 'playlist': 'pE_P9EcbVOI'},
          videoId: 'pE_P9EcbVOI',
          events: {
            'onReady': onPlayerReady}
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.mute();
      }
</script>
