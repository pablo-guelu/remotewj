<template>
  <div>
    <header class="header">
      <h1 class="header-title">Search with MeiliSearch</h1>
    </header>
    <ais-instant-search
      index-name="jobs"
      :search-client="searchClient"
      
    >
      <!-- Widgets -->
      <ais-search-box />
      <!-- <ais-refinement-list attribute="jobs" /> -->

      <ais-hits>
        <template v-slot:item="{ item }">
          <ul>
            
              <h1>{{ item.title }}</h1>
            
          </ul>
        </template>
      </ais-hits>
      <ais-state-results>
        <template
          v-slot="{ state: { query }, results: { items } }"
        >
          No results found for the query: <q>{{ query }}</q>
        </template>
      </ais-state-results>
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
      searchClient
      // searchClient: instantMeiliSearch("http://localhost:7700", ""),
      // routing: {
      //   stateMapping: simple(),
      // },
      // initialUiState: {
      //   indexName: {
      //     query: " ",
      //   },
      // },
    };
  },
};
</script>

<style>
body,
h1 {
  margin: 0;
  padding: 0;
}
body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.header {
  display: flex;
  align-jobs: center;
  min-height: 50px;
  padding: 0.5rem 1rem;
  background-image: linear-gradient(to right, #5b0723, #e41359);
  color: #fff;
  margin-bottom: 1rem;
}
.header-title {
  font-size: 1.2rem;
  font-weight: normal;
}
.header-subtitle {
  font-size: 1.2rem;
}
.container {
  padding: 1rem;
}

.ais-SearchBox {
  margin-bottom: 2rem;
}
</style>