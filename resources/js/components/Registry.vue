<template>
    <div class="columns">
        <div class="column"></div>
        <div class="column is-6">
            <div class="title">Register</div>
            <form @submit.prevent="submit" method="post">
                <div class="field">
                    <div class="control">
                        <input type="text" class="input" placeholder="Name" required v-model="name">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input type="email" class="input" placeholder="Email" required v-model="email">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input type="password" class="input" placeholder="Password" required v-model="password">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input type="password" class="input" placeholder="Repeat password" required v-model="password_confirmation">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button">Register</button>
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
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            has_error: false,
            error: '',
            errors: {},
            success: false
        }
    },
    methods: {
        submit() {
            this.$auth.register({
                data: {
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation
                },
                success: () => {
                    this.success = true,
                        this.$router.push({
                            name: 'login',
                            params: {
                                successRegistrationRedirect: true
                            }
                        })
                },
                error: (res) => {
                    console.log(res.response.data.errors)
                    this.has_error = true
                    this.error = res.response.data.error
                    this.errors = res.response.data.errors || {}
                }
            })
        }
    }
}
</script>

<style>
</style>
