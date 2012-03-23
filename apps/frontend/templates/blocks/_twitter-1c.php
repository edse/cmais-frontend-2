              <!-- BOX TWITTER -->
              <div class="box-padrao twitter grid1">
                <script type="text/javascript" src="http://widgets.twimg.com/j/2/widget.js"></script>
                <script type="text/javascript">
                new TWTR.Widget({
                  version: 2,
                  type: 'profile',
                  rpp: 4,
                  interval: 6000,
                  width: 310,
                  height: 378,
                  theme: {
                    shell: {
                      background: '#666666',
                      color: '#ffffff'
                    },
                    tweets: {
                      background: '#ffffff',
                      color: '#000000',
                      links: '#ff6633'
                    }
                  },
                  features: {
                    scrollbar: true,
                    loop: false,
                    live: true,
                    hashtags: true,
                    timestamp: true,
                    avatars: true,
                    behavior: 'all'
                  }
                }).render().setUser('<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>').start();
                </script>
              </div>
              <!-- /BOX TWITTER -->
