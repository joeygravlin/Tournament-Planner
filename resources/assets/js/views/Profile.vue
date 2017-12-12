<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ title }}</div>

                    <div class="panel-body">
                        <passport-clients></passport-clients>
                        <passport-authorized-clients></passport-authorized-clients>
                        <passport-personal-access-tokens></passport-personal-access-tokens>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    import PassportClients from '../components/passport/Clients.vue';
    import PassportAuthorizedClients from '../components/passport/AuthorizedClients.vue';
    import PassportPersonalAccessTokens from '../components/passport/PersonalAccessTokens.vue';

    export default {
        components: {
            PassportClients,
            PassportAuthorizedClients,
            PassportPersonalAccessTokens,
        },
        name: 'profile',
        data () {
            return {
                title: 'Profile Page',
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

