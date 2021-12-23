<template>
  <div>
    <main>
      <div class="py-5 text-center">
        <p></p>
        <h2>{{ job.title }}</h2>
        <h3 v-if="job.company">{{ job.company.name }}</h3>
      </div>

      <div class="row g-5">

        <!-- company card -->
        <template v-if="job.company">
          <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary" v-if="job.company">{{ job.company.name }}</span>
            <span>
              <img v-if="job.company"
                :src="job.company.logo"
                :alt="job.company.name"
                width="60"
                height="60"
                class="rounded-circle flex-shrink-0"
            /></span>
          </h4>

          <div>
            <p v-if="job.company">{{ job.company.description }}</p>
          </div>

          <div class="mt-5">
            <p>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-building"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"
                ></path>
                <path
                  d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"
                ></path>
              </svg>
              <span class="mx-1" v-if="job.company"> {{ job.company.headquarters }} </span>
            </p>
          </div>

          <div class="mt-3">
            <a :href="job.company.website" class="text-decoration-none" v-if="job.company">
              {{ job.company.name }}
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-box-arrow-up-right"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"
                ></path>
                <path
                  fill-rule="evenodd"
                  d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"
                ></path>
              </svg>
            </a>
          </div>

        </div>
        </template>
        
        <!-- job details -->
        <div class="col-md-7 col-lg-8">
          <p>  </p>
          <h4 class="mb-3">Job Description</h4>
          <p><span class="badge bg-info text-dark me-2">{{job.region}}</span>
          <span class="badge bg-info text-dark mr-e">{{job.timezone}}</span>
          </p>
          <p class="text-break">{{ job.description }}</p>
        </div>
      </div>

      <div class="my-5">
        <a :href="job.url"
          ><button type="button" class="btn btn-danger">
            Apply to this job
          </button></a
        >
      </div>
    </main>
  </div>
</template>

<script>
export default {
  data() {
    return {
      jobId: this.$route.params.id,
      job: {
        id: null,
        title: "",
        description: "",
        url: "",
        posted: "",
        company: {
          id: null,
          name: "",
          headquarters: "",
          statement: "",
          logo: "",
          website: "",
          email: "",
          description: "",
        },
        category: "",
        region: "",
        timezone: "",
        type: "",
      },
    };
  },

  created() {
    this.axios.get("/api/jobs/" + this.jobId).then((response) => {
      console.log(response.data.job);
      this.job = response.data.job;
    });
  },
};
</script>

<style>
</style>