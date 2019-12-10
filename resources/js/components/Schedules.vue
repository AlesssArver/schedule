<template>
  <div class="columns">
    <div class="column is-4">

    </div>
    <div class="column is-5">
        <form>
            <div class="columns">
                <div class="column is-8">
                    <div class="field">
                        <div class="control">
                            <input type="text" class="input">
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <div class="control">
                            <input type="time" class="input">
                        </div>
                    </div>
                </div>
                <div class="column is-1">
                    <div class="field">
                        <div class="control">
                            <button class="delete is-medium"></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <add-to-schedule></add-to-schedule>
    </div>

  </div>
</template>

<script>
    import AddToSchedule from './AddToSchedule';
export default {
    components: { AddToSchedule },
}
</script>

<style>

</style>
