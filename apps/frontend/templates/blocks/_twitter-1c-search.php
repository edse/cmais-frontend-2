              <div class="box-twitter grid1">
                <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                <script>
                new TWTR.Widget({
                  version: 2,
                  type: 'search',
                  search: 'tvcultura',
                  interval: 6000,
                  width: 310,
                  height: 370,
                  theme: {
                    shell: {
                      background: '#333333',
                      color: '#ffffff',
                      border:'none'
                    },
                    tweets: {
                      background: '#ffffff',
                      color: '#333333',
                      links: '#333333',
                      border:'none'
                    }
                  },
                  features: {
                    scrollbar: true,
                    loop: true,
                    live: true,
                    hashtags: true,
                    timestamp: false,
                    avatars: true,
                    toptweets: true,
                    behavior: 'default'
                  }
                }).render().start();
                </script>
              </div>