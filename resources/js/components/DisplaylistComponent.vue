<template>
    <div>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Remote Weekend Job</h1>
            <p class="fs-5 text-muted">
                Remote Weekend Job is a platform to offer flexibility to those
                who think that working remotely on weekends is a better option
                for them.
            </p>
            <p class="fs-5 text-muted">
                It is also a platform where employers can hire the best talent
                there is for the time they really need it.
            </p>
            <p class="fs-5 text-muted">
                The golden rule here is that there are no jobs that requires
                more than 3 days a week.
            </p>
        </div>

        <list-component></list-component>
        
    </div>
</template>

<script>
import ListComponent from "./ListComponent.vue";

export default {
    components: {
        ListComponent,
    },
};
</script>

<style></style>
