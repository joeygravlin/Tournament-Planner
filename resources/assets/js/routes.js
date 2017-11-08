import VueRouter from 'vue-router';

// Main
import AppHeader from './components/partials/AppHeader.vue'
import Home from './views/Home';
import About from './views/About';
// Auth
import Register from './components/auth/Register';
import Login from './components/auth/Login';
// Tournaments
import Tournament from './components/tournament/Tournament';
import CreateTournament from './components/tournament/CreateTournament';
// import EditTournament from './components/tournament/EditTournament';
// Teams
import Team from './components/team/Team';
// import CreateTeam from './components/team/CreateTeam';
// import EditTeam from './components/team/EditTeam';
import JoinTeam from './components/team/JoinTeam';


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '',
            name: 'index',
            component: Home
            // components: {
            //     default: Home,
            //     AppHeader
            // }
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/profile',
            // component: Profile,
            children: [
                {
                    path: '',
                    name: 'profile',
                    // component: Profile,
                    meta: { requiresAuth: true }
                },
                {
                    path: 'edit',
                    name: 'profile.edit',
                    // component: EditProfile,
                    meta: { requiresAuth: true }
                }
            ]
        },
        {
            path: '/tournament',
            component: Tournament,
            children: [
                {
                    path: 'create',
                    name: 'tournament.create',
                    component: CreateTournament
                },
                // {
                //     path: ':id/edit',
                //     name: 'tournament.edit',
                //     component: EditTournament
                // },
            ]
        },
        {
            path: '/team',
            component: Team,
            children: [
                // {
                //     path: 'create',
                //     name: 'team.create',
                //     component: CreateTeam
                // },
                // {
                //     path: ':id/edit',
                //     name: 'team.edit',
                //     component: EditTeam
                // },
                {
                    path: 'join',
                    // path: ':id/join',
                    name: 'team.join',
                    component: JoinTeam
                },
            ]
        },


    ],
    linkActiveClass: 'is-active'
});

export default router;
