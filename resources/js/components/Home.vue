<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="welcome-letter">
                    U dont hav time? Don't know what you spend it on?
                    This schedule help u.
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column"></div>
            <div class="column">
                <div class="columns">
                    <div class="column"></div>
                    <div class="column is-2">
                        <router-link to="/register">
                            <a>Registry</a>
                        </router-link>
                    </div>
                    <div class="column is-2">
                        <router-link to="/login">
                            <a>Login</a>
                        </router-link>
                    </div>
                    <div class="column"></div>
                </div>
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    import Registry from './Registry';
    export default {
        components: { Registry },
    }
</script>

<style>

</style>
