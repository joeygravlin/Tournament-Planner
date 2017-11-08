<template>
    <div class="container">
        <div class="row">

            <transition name="fade" mode="out-in">
                <router-view></router-view>
            </transition>

        </div>
    </div>
</template>

<script>
    export default {
        name: 'tournament',
        methods: {
            //TODO
        }
    }
</script>
