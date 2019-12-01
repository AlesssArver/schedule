import './bootstrap';
import router from './routes';

Vue.component('add-to-schedule-component', require('./components/AddToSchedule').default);

new Vue({
  el: '#app',
  router
})
