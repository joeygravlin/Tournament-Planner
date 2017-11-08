<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ title }}</div>

                    <div class="panel-body">
                        <strong>Howdy!</strong>

                        <p>Tournament Planner is a webapp designed for organizing and managing tournaments all sorts!</p>

                        <p>It is currently limited to single-elimination tournaments, although we hope to add other types soon. Stay tuned!</p>

                        <div class="example"><p>{{ msg }}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        name: 'home',
        data () {
            return {
                title: 'Home Page',
                msg: 'Hello world! THIS IS A TEST'
            }
        },
        mounted () {
            console.log ('Component mounted: ' + this.$options.name)
        }
    }
</script>


<style>
.example {
  color: red;
}
</style>

