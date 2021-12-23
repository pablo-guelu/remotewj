<template>
    <div>
        <router-link
        :to="jobDetail"
        class="list-group-item list-group-item-action d-flex gap-3 py-3"
        aria-current="true"
        ><img
            v-if="job.company"
            :src="job.company.logo"
            :alt="job.company.name"
            width="32"
            height="32"
            class="rounded-circle flex-shrink-0"
        />
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">{{ job.title }}</h6>
                <p class="mb-0 opacity-75" v-if="job.company">
                    {{job.company.name}}
                </p>
                <p class="mb-0 opacity-75">
                    {{job.type}} / {{job.region}}
                </p>
            </div>
            <small class="opacity-50 text-nowrap">now</small>
        </div>
        </router-link>

    </div>
    
</template>

<script>

export default {

    props: {
        job: {
            type: Object,
            required: true,
        }
    },

    methods: {},

    computed: {
        jobDetail () {
            return '/job/' + this.job.id
        }
    }
};
</script>

<style></style>
