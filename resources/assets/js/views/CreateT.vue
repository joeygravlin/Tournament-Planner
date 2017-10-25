<template>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form id="createT">
                Name: <input type="text" placeholder="" /> <br>
                Date: <input type="date" is="date" /> <br>
                Teams: <input type="number" /> <br>
                Size: <input type="number" /> <br>
                Referees: <input type="text" /> <br>
                <button v-on:click="save">Save</button>
            </form>
        </div>
    </div>
</template>


<script>
  var create = new Vue({
      el: 'createT'
      methods: {
          save: function() {
              //other page
          }
      }
  })
</script>


<style>

</style>
