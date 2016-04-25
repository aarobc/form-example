new Vue({
  el: '#app',
  data: {
    form: {
        name: '',
        number: ''
    },
    response: {
       data: [],
       errors: []
    },
    url: 'submit.php'
  },

  methods: {
      submit: function(){
          this.$http.post(this.url, this.form)
          .then(function(resp){
              console.log(resp.data.data);
              this.response = resp.data;
          })
      }
  }
})
