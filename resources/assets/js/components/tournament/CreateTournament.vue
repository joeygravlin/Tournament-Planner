
<template>
<!--
    <div class="container">
        <div class="row">
 -->
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ this.$options.name }}</div>

                    <div class="panel-body">
                        <form class="form-horizontal" id="createTournament" @submit.prevent="createTournament()">

                            <div class="form-group" ><!-- :class="{ 'has-error' : errors.name}"> -->
                                <label for="name" class="col-md-4 control-label">Tournament Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" v-model="name" required autofocus>
                                    <!-- <span class="help-block" v-if="errors.name">{{ errors.name }}</span> -->
                                </div>
                            </div>

                            <div class="form-group" ><!-- :class="{ 'has-error' : errors.date}"> -->
                                <label for="date" class="col-md-4 control-label">Date</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" v-model="date" required autofocus>
                                    <!-- <span class="help-block" v-if="errors.date">{{ errors.date }}</span> -->
                                </div>
                            </div>

                            <div class="form-group" ><!-- :class="{ 'has-error' : errors.teamCount}"> -->
                                <label for="teamCount" class="col-md-4 control-label">Numer of Teams</label>

                                <div class="col-md-6">
                                    <input id="teamCount" type="number" class="form-control" v-model="teamCount" required autofocus>
                                    <!-- <span class="help-block" v-if="errors.teamCount">{{ errors.teamCount }}</span> -->
                                </div>
                            </div>

                            <div class="form-group" ><!-- :class="{ 'has-error' : errors.teamSize}"> -->
                                <label for="teamSize" class="col-md-4 control-label">Team Size</label>

                                <div class="col-md-6">
                                    <input id="teamSize" type="number" class="form-control" v-model="teamSize" required autofocus>
                                    <!-- <span class="help-block" v-if="errors.teamSize">{{ errors.teamSize }}</span> -->
                                </div>
                            </div>

                            <div class="form-group" ><!-- :class="{ 'has-error' : errors.referee}"> -->
                                <label for="referee" class="col-md-4 control-label">Referee Name</label>

                                <div class="col-md-6">
                                    <input id="referee" type="text" class="form-control" v-model="referee" required autofocus>
                                    <!-- <span class="help-block" v-if="errors.referee">{{ errors.referee }}</span> -->
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create Tournament
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
<!--
        </div>
    </div>
 -->
</template>


<script>
export default {
    name: 'create-tournament',
    created () {
        //TODO
    },
    data () {
        return {
            name: null,
            date: null,
            teamCount: 0,
            teamSize: 0,
            referee: null
        }
    },
    computed: {
        //TODO
    },
    methods: {
        createTournament () {
            const formData = {
                name: this.name,
                date: this.date,
                teamCount: this.teamCount,
                teamSize: this.teamSize,
                referee: this.referee
            };
            console.log(formData);
            // dispatch state...
        },
        clearForm() {
            this.name = null,
            this.date = null,
            this.teamCount = 0,
            this.teamSize = 0,
            this.referee = null
        }
    },
    mounted () {
        console.log ('Component mounted: ' + this.$options.name)
    }
}
</script>


<style>

</style>
