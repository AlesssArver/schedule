new Vue({
  el: '#create',
  data: {
    title: '',
    time: ''
  },
  methods: {
    submit() {
      axios.post('/schedules', this.$data);
    },
    delete(id) {
      axios.delete('/delete-post/' + id, this.body);
    },
    like() {
      axious.post('/like', this.like);
    }
  }
});
