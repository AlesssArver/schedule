<template>
  <div class="">
    <form @submit.prevent="edit">
      <div class="columns">
        <div class="column">

        </div>
        <div class="column">
            <div class="columns" v-for="(schedule, id) in schedules">
              <div class="column">
              </div>
              <div class="column is-6">
                <div class="field">
                    <div class="control">
                      <input class="input" type="text" name="title" v-model="schedule.title">
                    </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                    <div class="control">
                      <input class="input" type="time" name="time" v-model="schedule.time">
                    </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                    <div class="control">
                        <button class="button"
                                @click="edit(schedule, schedule.id) in schedules"
                         >
                         Edit
                       </button>
                    </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                    <div class="control">
                        <button class="button"
                                @click="deleteSchedule(schedule, schedule.id) in schedules"
                         >
                         Delete
                       </button>
                    </div>
                </div>
              </div>

              </div>
        </div>
        <div class="column">

        </div>
      </div>
    </form>
    <add-to-schedule @completed="addSchedule"></add-to-schedule>
  </div>
</template>

<script>
import moment from 'moment';
import Schedule from '../models/Schedule';
import AddToSchedule from './AddToSchedule';

export default {
  components: { AddToSchedule },
  data() {
    return {
      schedules: [],
      schedulesEdit: [],
      errors: []
    }
  },
  created() {
    axios.get('/schedules')
         .then(response => this.schedules = response.data)
         .catch(error => console.log(error));
  },
  methods: {
    addSchedule(schedule) {
      this.schedules.unshift(schedule);

      window.scrollTo(0, 0);
    },
    deleteSchedule(schedule, id) {
      axios.delete('/schedules/' + schedule.id, console.log(schedule.id))
           .then(response => this.schedule.splice(index, -1))
           .catch(error => console.log(error));
    },
    edit(schedule, id) {
      axios.post('/schedules/' + schedule.id + '/edit/', console.log('Edited: ' + schedule.id))
            .then(response => this.schedulesEdit = response.data)
           .catch(error => console.log(error));
    }
  }
}
</script>

<style>
</style>
