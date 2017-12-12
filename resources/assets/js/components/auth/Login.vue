<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ this.$options.name }}</div>

                    <div class="panel-body">
                        <form class="form-horizontal" id="login" @submit.prevent="login()">

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
<!--
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
 -->
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

<!--
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
 -->
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
        name: 'login',
        created () {
            //TODO
        },
        data () {
            return {
                email: '',
                password: ''
            }
        },
        computed: {
            //TODO
        },
        methods: {
            login () {
                const formData = {
                    email: this.email,
                    password: this.password,
                };
                console.log(formData);
                // this.$store.dispatch('login', {email: formData.email, password: formData.password});
            },
            clearForm() {
                this.email = null;
                this.password = null;
            }
        },
        mounted () {
            console.log ('Component mounted: ' + this.$options.name)
        }
    }
</script>


<style>

</style>
