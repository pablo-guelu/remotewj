<template>
  <div>
    <ais-instant-search index-name="jobs" :search-client="searchClient">
      <!-- Widgets -->
      <ais-search-box />

      <ais-hits>
        <template v-slot:item="{ item }">
          <div class="m-3 border rounded-3 shadow-sm w-100">
            <a
              :href="'/jobs/' + item.id"
              class="list-group-item list-group-item-action d-flex gap-3 py-3"
              aria-current="true"
            >
              <img
                :src="item.company.logo"
                :alt="item.company.name"
                width="32"
                height="32"
                class="rounded-circle flex-shrink-0"
              />
              <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                  <h6 class="mb-0">{{ item.title }}</h6>
                  <p class="mb-0 opacity-75">
                    {{ item.company.name }}
                  </p>
                  <p class="mb-0 opacity-75">{{ item.days }} days</p>
                </div>
                <small class="opacity-50 text-nowrap">now</small>
              </div>
            </a>
          </div>
        </template>
      </ais-hits>
    </ais-instant-search>
  </div>
</template>

<script>
import { instantMeiliSearch } from "@meilisearch/instant-meilisearch";
import { simple } from "instantsearch.js/es/lib/stateMappings";

const searchClient = instantMeiliSearch("http://localhost:7700", "");

export default {
  data() {
    return {
      searchClient,
    };
  },
};
</script>

<style>
.ais-InstantSearch {
  margin: auto;
  margin-top: 2rem;
  width: 80%;
}

.ais-Hits-item {
  box-shadow: none;
  padding: 0;
}

.ais-SearchBox {
  margin-bottom: 2rem;
}
</style>