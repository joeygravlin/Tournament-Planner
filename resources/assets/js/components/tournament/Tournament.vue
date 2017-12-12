<template>
    <div class="container">
        <div class="row">
<!--
            <div class="col-md-3">
                <div class="list-group">
                    <router-link :to="{name: 'tournament.create'}" class="list-group-item" active-class="active" exact>Create Tournament</router-link>
                </div>
            </div>

            <div class="col-md-9">
                <transition name="fade" mode="out-in">
                    <router-view></router-view>
                </transition>
            </div> -->

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
            // TODO
        }
    }
</script>
