<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <form id="register">
                Name: <input v-model=message placeholder="email"> <br>
                Password: <input type=password placeholder="password"> <br>
                Confirm Password: <input type=password placeholder="password"> <br>
                <button v-on:click="regi">Register</button>
              </form>
            </div>
        </div>
    </div>
</template>


<script>
var create = new Vue({
    el: 'register'
    methods: {
        regi: function() {
            //other page
            //Comunicate with DB
        }
    }
})

</script>


<style>

</style>
