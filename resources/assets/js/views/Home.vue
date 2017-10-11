<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ title }}</div>

                    <div class="panel-body">
                        I'm an example component!

                        <p><mark>Testing out browsersync...</mark></p>

                        <div class="example">
                            {{ msg }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data () {
            return {
                title: 'Home Page',
                msg: 'Hello world! THIS IS A TEST'
            }
        },
        mounted () {
            console.log ('Component mounted.')
        }
    }
</script>


<style>
.example {
  color: red;
}
</style>

