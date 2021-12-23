<template>
    <div class="list-group">
        <item-component v-for="job in jobs"
        :job="job"
        :key="job.id">
        </item-component>        
    </div>
</template>

<script>

import ItemComponent from './ItemComponent.vue';

export default {

    components: {
        ItemComponent
    },

    data() {
        return {
            jobs:[],
        }
    },

    methods: {
        getJobs() {
            this.axios.get('/api/jobs').then(response => {
                console.log(response.data);
            })
        }
    },

    mounted () {
        this.axios.get('/api/jobs').then(response => {
            this.jobs = response.data.jobs;
        })
    } 
};
</script>

<style></style>
