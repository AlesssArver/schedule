<template>
  <div class="columns" :style="{ backgroundColor: color}">
    <div class="column">

    </div>
    <div class="column">
      <div class="">
        <div class="field">
          <input class="input"
                  type="text"
                   :style="{ color: color}"
                   v-model="color"
                   maxlength="15"
            >
        </div>
      </div>
      <div class="field">
          <div class="control">
            <input type="color" v-model="color">
          </div>
      </div>
      <div class="field">
          <div class="control">
            <button class="button">Submit</button>
          </div>
      </div>
    </div>
    <div class="column">

    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      color: 'white',
      settings: [],
      color: 'magenta'
    };
  },
  methods: {
    updateTheme(color) {
      this.color = color;
    }
  }
}
</script>

<style>
</style>
