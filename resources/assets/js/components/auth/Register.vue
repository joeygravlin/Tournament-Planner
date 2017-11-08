<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ this.$options.name }}</div>

                    <div class="panel-body">
                        <form class="form-horizontal" id="register" @submit.prevent="register()">

                            <div class="form-group" ><!-- :class="{ 'has-error' : errors.name}"> -->
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" v-model="name" required autofocus>
                                    <!-- <span class="help-block" v-if="errors.name">{{ errors.name }}</span> -->
                                </div>
                            </div>

                            <div class="form-group" ><!-- :class="{ 'has-error' : errors.email}"> -->
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" v-model="email" required>
                                    <!-- <span class="help-block" v-if="errors.email">{{ errors.email }}</span> -->
                                </div>
                            </div>

                            <div class="form-group" ><!-- :class="{ 'has-error' : errors.password}"> -->
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" v-model="password" required>

                                    <!-- <span class="help-block" v-if="errors.password">{{ errors.password }}</span> -->
                                </div>
                            </div>

                           <div class="form-group" ><!-- :class="{ 'has-error' : errors.passwordConfirmation}"> -->
                                <label for="password-confirmation" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirmation" type="password" class="form-control" v-model="passwordConfirmation" required>

                                    <!-- <span class="help-block" v-if="errors.passwordConfirmation">{{ errors.passwordConfirmation }}</span> -->
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        name: 'register',
        created () {
            //TODO
        },
        data () {
            return {
                name: null,
                email: null,
                password: null,
                passwordConfirmation: null,
            }
        },
        computed: {
            //TODO
        },
        methods: {
            register () {
                const formData = {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    passwordConfirmation: this.passwordConfirmation,
                };
                console.log(formData);
                // dispatch store...
            },
            clearForm() {
                this.name = null;
                this.email = null;
                this.password = null;
                this.passwordConfirmation = null;
            }
        },
        mounted () {
            console.log ('Component mounted: ' + this.$options.name)
        }
    }
</script>


<style>

</style>
