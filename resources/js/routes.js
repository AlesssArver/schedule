import VueRouter from 'vue-router';

let routes = [
  {
    path: '/',
    component: require('./components/Home').default,
    meta: { auth: undefined }
  },
  {
    path: '/register',
    component: require('./components/Registry').default,
    meta: { auth: false }
  },
  {
    path: '/login',
    component: require('./components/Login').default,
    meta: { auth: false }
  },
  {
    path: '/schedules',
    name: 'schedules',
    component: require('./components/Schedules').default,
    meta: { auth: true }
  },
  {
    path: '/settings',
    component: require('./components/Settings').default,
    meta: { auth: true }
  },
  {
     path: '/admin',
     name: 'admin',
     component: require('./components/Admin').default,
     meta: {
         auth: {
             roles: 2,
             redirect: { name: 'login' },
             forbiddenRedirect: '/403'
         }
      }
  }
];

export default new VueRouter({
  history: true,
  mode: 'history',
  routes
});
