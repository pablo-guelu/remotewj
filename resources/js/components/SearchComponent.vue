<template>
  <form @onchange="searchJob()">
    <div class="input-group w-50" style="margin: auto">
      <input
        class="form-control"
        placeholder="Input group example"
        aria-label="Input group example"
        aria-describedby="basic-addon1"
        v-model="searchTerm"
        name="term"
      />

      <button class="btn btn-outline-secondary" type="submit">
        <a href="">

        </a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-search"
          viewBox="0 0 16 16"
        >
          <path
            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
          ></path>
        </svg>
      </button>
    </div>
    {{ searchTerm }}
  </form>

</template>

<script>
export default {
  data() {
    return {
      searchTerm: ''
    }
  },

  methods: {
    searchJob() {
      this.axios
        .post("api/search/", {term: this.searchTerm})
        .then((response) => {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error.response.data.errors);
        });
    },

    mounted() {
     
    },
  },
};

 
</script>

<style>
</style>