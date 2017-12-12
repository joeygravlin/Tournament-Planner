<template>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <router-link class="navbar-brand" :to="{name: 'index'}" v-once>{{ siteName }}</router-link>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                    <router-link :to="{name: 'index'}" tag="li" active-class="active" exact>
                        <a>Home</a>
                    </router-link>
                    <router-link :to="{name: 'about'}" tag="li" active-class="active">
                        <a>About</a>
                    </router-link>

                    <!-- <router-link :to="{name: 'team'}" tag="li" active-class="active" class="dropdown"> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tournaments <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <router-link :to="{name: 'tournament.create'}" tag="li" active-class="active">
                                <a>Create Tournament</a>
                            </router-link>
                            <!-- <li role="separator" class="divider"></li> -->
                        </ul>
                    </li>
                    <!-- </router-link> -->

                    <!-- <router-link :to="{name: 'team'}" tag="li" active-class="active" class="dropdown"> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teams <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <router-link :to="{name: 'team.join'}" tag="li" active-class="active">
                                <a>Join Team</a>
                            </router-link>
                            <!-- <li role="separator" class="divider"></li> -->
                        </ul>
                    </li>
                    <!-- </router-link> -->


                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- <router-link v-if="!user.authenticated" -->
                    <router-link :to="{name: 'login'}" tag="li" active-class="active" exact>
                        <a>Login</a>
                    </router-link>
                    <!-- <router-link v-if="!user.authenticated" -->
                    <router-link :to="{name: 'register'}" tag="li" active-class="active" exact>
                        <a>Register</a>
                    </router-link>
                    <!-- <router-link v-if="user.authenticated" -->
                    <router-link :to="{name: 'profile'}" tag="li" active-class="active">
                        <a>Profile</a>
                    </router-link>
<!--
                    <li v-if="user.authenticated">
                        <a href="#" @click.prevent="logout()">Logout</a>
                    </li>
 -->
                </ul>
            </div>
        </div>
    </nav>
</template>


<script>
// import {siteName} from './../../bootstrap';

export default {
    name: 'app-header',
    data() {
        return {
            // siteName: siteName
            siteName: 'Tournament Planner'
        }
    },
    computed: {
        auth () {
            // return this.$store.getters.isAuthenticated
        }
    },
    created () {
        // TODO
    },
    methods: {
        onLogout() {
            // this.$store.dispatch('logout')
        }
    },
    mounted () {
        console.log ('Component mounted: ' + this.$options.name)
    }
}
</script>


<style>

</style>
