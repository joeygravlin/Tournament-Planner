<template>
    <div>
        <app-header></app-header>

        <!-- <notification></notification> -->

        <section class="section">
            <div class="container">

                <transition name="fade" mode="out-in">
                    <router-view></router-view>
                </transition>

            </div>
        </section>

        <!-- <app-footer></app-footer> -->
    </div>
</template>


<script>
    import AppHeader from './components/partials/AppHeader.vue'

    export default {
        name: 'app',
        components: {
            AppHeader
        },
        created () {
            // TODO
        },
        mounted () {
            console.log ('Component mounted: ' + this.$options.name)
        }
    }
</script>


<style>

</style>

