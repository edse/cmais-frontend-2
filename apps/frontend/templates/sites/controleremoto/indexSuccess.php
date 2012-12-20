<script type="text/javascript" src="/js/jquery-ui-1.8.7/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="/portal/js/mediaplayer-5.10/jwplayer.js"></script>
<div id="mediaplayer">Loading the player ...</div>
<script type="text/javascript">
jwplayer("mediaplayer").setup({
  height: 270,
  width: 480,
  modes: [
  /*
    { type: "flash",
      src: "/portal/js/mediaplayer-5.10/player.swf",
      config: {
        autostart : 'true',
        file: "radioam",
        streamer: "rtmp://200.136.27.12/live",
        provider: "rtmp"
      }
    },
   */
    { type: "html5",
      config: {
        autostart : 'true',
        file: "http://midiaserver.tvcultura.com.br:8003/;stream/1"
      }
    }
  ]
});
</script>