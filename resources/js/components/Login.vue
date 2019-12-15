<template>
    <div class="columns">
        <div class="column"></div>
        <div class="column is-6">
            <div class="title">Login</div>
            <form @submit.prevent="submit" method="post">
                <div class="field">
                    <div class="control">
                        <input type="email" class="input" placeholder="Email" required v-model="email">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input type="text" class="input" placeholder="Password" required v-model="password">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button">Login</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="column"></div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                email: null,
                password: null,
                has_error: false
            }
        },
        mounted() {
            //
        },
        methods: {
            submit() {
                var redirect = this.$auth.redirect()
                var app = this
                this.$auth.login({
                    params: {
                        email: app.email,
                        password: app.password
                    },
                    success: () => {
                        const redirectTo = redirect ? redirect.from.name :
                              this.$auth.user().role === 2 ? 'admin' : 'schedules'

                        this.$router.push({ name: redirectTo })
                    },
                    error() {
                        app.has_error = true
                    },
                    rememberMe: true,
                    fetchUser: true
                })
            }
        }
    }
</script>

<style>
</style>
