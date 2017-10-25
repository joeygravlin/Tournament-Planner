import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home')
    },

    {
        path: '/about',
        component: require('./views/About')
    }
    {
      path: '/create',
      component: require('./views/CreateT')
    }
    {
      path: '/register',
      component: require('./views/Register')
    }
    {
      path: '/login',
      component: require('./views/Login')
    }
    {
      path: '/sign',
      component: require('./views/SignIn')
    }
];

export default new VueRouter({
    routes
    // linkActiveClass: 'is-active'
});
