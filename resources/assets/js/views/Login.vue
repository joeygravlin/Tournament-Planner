<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <form id="login">
                Mail: <input v-model=message placeholder="email"> <br>
                Password: <input type=password placeholder="password">
                <button v-on:click="logi">Register</button>
              </form>
            </div>
        </div>
    </div>
</template>


<script>
var create = new Vue({
    el: 'login'
    methods: {
        logi : function() {
            //other page
            //communicate with DB
        }
    }
})

</script>


<style>

</style>
