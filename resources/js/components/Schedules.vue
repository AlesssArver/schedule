<template>
  <div class="columns">
    <div class="column is-4"></div>
    <div class="column is-5">
        <form v-for="schedule in schedules">
            <div class="columns">
                <div class="column is-8">
                    <div class="field">
                        <div class="control">
                            <input type="text" class="input" v-model="schedule.title">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <input type="time" class="input" v-model="schedule.time">
                        </div>
                    </div>
                </div>
                <div class="column is-1">
                    <div class="field">
                        <div class="control">
                            <button class="delete is-medium"></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <add-to-schedule></add-to-schedule>
    </div>

  </div>
</template>

<script>
    import AddToSchedule from './AddToSchedule';
export default {
    components: { AddToSchedule },
    data() {
        return {
            schedules: {},
            errors: {}
        }
    },
    created() {
        axios.get('/schedule', this.schedules)
             .then(response => this.schedules = response.data)
             .catch(e => this.errors.push(e))
    }
}
</script>

<style>

</style>
