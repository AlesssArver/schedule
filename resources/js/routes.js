import VueRouter from 'vue-router';

let routes = [
  {
    path: '/schedules',
    component: require('./components/Schedules').default
  },
  {
    path: '/settings',
    component: require('./components/Settings').default
  }
];

export default new VueRouter({
  routes
});
