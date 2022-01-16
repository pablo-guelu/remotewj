<template>
  <div class="py-5 text-center container">
    <div class="h-100 p-3 bg-light border rounded-3 shadow-sm subscribe-card">
      <h2>Subscribe to find the job you need</h2>
      <p>Receive weekly alerts of new job offerings to work on weekends</p>
      <form @submit.prevent="sendEmail">
        <div class="w-80 row g-0 justify-content-evenly flex-nowrap">
          <input
            type="email"
            class="col-8 p-2 me-2"
            placeholder="Your email..."
          />
          <button class="btn btn-outline-primary col-4 fs-5" type="submit">
            Subscribe
          </button>
        </div>
      </form>
    </div>

  </div>
</template>

<script>
export default {
    methods: {
        sendEmail () {
            this.axios.get('/subscription_email').then(response => {
                console.log(response.data);
            })

            document.getElementsByClassName('subscribe-card')[0].innerHTML = `<h1> Text Changed </h1>`;
        }
    }
};
</script>

<style>
</style>