<template>
    <div>
        <form action="/schedule/store" @submit.prevent="submit" method="post">
            <div class="columns">
                <div class="column is-8">
                    <div class="field">
                        <div class="control">
                            <input type="text" class="input" required v-model="title">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button">Create</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <input type="time" class="input" required v-model="time">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: '',
            time: '',
            errors: {}
        }
    },
    methods: {
        submit() {
            axios.post('/schedule/store', {
                title: this.title,
                time: this.time
            })
                 .then(response => console.log(response))
                 .catch(e => this.errors.push(e))
        },
    }
}
</script>

<style>
</style>
