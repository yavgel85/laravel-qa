<template>
    <div>
        <span class="text-muted">{{ postData }}</span>
        <div class="media mt-2">
            <a :href="user.url" class="pr-2">
                <img :src="user.avatar" alt="User avatar">
            </a>
            <div class="media-body mt-1">
                <a :href="user.url">{{ user.name }}</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['model', 'label'],
        computed: {
            postData () {
                return this.label + ' ' + this.model.created_date;
            }
        },
        data () {
            return {
                user: this.model.user
            }
        }
    }
</script>

<style scoped>

</style>
