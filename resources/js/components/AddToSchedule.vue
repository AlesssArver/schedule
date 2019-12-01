<template>
  <div>
    <form @submit.prevent="submit">
      <div class="columns">
        <div class="column">

        </div>
        <div class="column is-6">
          <div class="field">
              <div class="control">
                <input class="input"
                       name="title"
                       placeholder="Your task"
                       v-model="title"
                >
              </div>
          </div>
          <div class="field">
              <div class="control">
                <button class="button">Create</button>
              </div>
          </div>

        </div>
        <div class="column">

          <div class="field">
              <div class="control">
                <input class="input" type="time" name="time" v-model="time">
              </div>
          </div>
        </div>
        <div class="column">


        </div>

       </div>
        <div class="column">

        </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: '',
      time: ''
    }
  },
  methods: {
    submit() {
      axios.post('/schedules', this.$data)
      .then(response => console.log(response))
      .catch(error => console.log(error.response));
    }
  }
}
</script>

<style>
</style>
