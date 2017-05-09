/**
 * This is your app's main JS entry point
 */




  new Vue({
          el        : '#app',
          components: {
            counter: {
              template: '#counter-template',
              props   : ['subject'],
              data    : function () {
                return {count: 0};
              }
            }
          }
        });







