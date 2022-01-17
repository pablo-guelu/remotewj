<template>
  <div>
    <div class="container py-3">
      <header class="sticky-top" style="background-color: white">
        <div
          class="
            d-flex
            flex-column flex-md-row
            align-items-center
            pb-3
            mb-2
            border-bottom
          "
        >
          <a
            href="/"
            class="d-flex align-items-center text-dark text-decoration-none"
          >
            <img
              src="/img/earth.svg"
              alt="logo"
              style="height: 6vh"
              class="m-2"
            />
            <span class="fs-4">Remote Weekend Job</span>
          </a>

          <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <div class="mx-3">
              <router-link :to="{ name: 'list' }">Job List</router-link>
            </div>

            <div class="mx-3">
              <router-link :to="{ name: 'postJob' }">Post a Job</router-link>
            </div>

            <div class="mx-3">
              <router-link :to="{ name: 'search' }">Search Jobs</router-link>
            </div>
          </nav>
        </div>
      </header>

      <main>
        <router-view> </router-view>
      </main>
    </div>
  </div>
</template>

<script>


  export default {
    data() {
      return {
      }
    },
    methods: {
      
    }
  };
</script>

<style>
</style>