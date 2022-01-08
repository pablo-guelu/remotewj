<template>
  <div>
    <header class="header">
      <h1 class="header-title">Search with MeiliSearch</h1>
    </header>
    <ais-instant-search index-name="jobs" :search-client="searchClient">
      <!-- Widgets -->
      <ais-search-box placeholder="Search for jobs...">
        <template v-slot:submit-icon>🔎</template>
      </ais-search-box>
      <ais-hits>
        <template v-slot:item="{ item }">
          <div>
            <h3>{{ item.title }}</h3>
            <p>{{ item.description }}</p>
          </div>
        </template>
      </ais-hits>
    </ais-instant-search>
  </div>
</template>

<script>
import { instantMeiliSearch } from "@meilisearch/instant-meilisearch";

export default {
  data() {
    return {
      searchClient: instantMeiliSearch("http://localhost:7700", "masterKey"),
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

.ais-SearchBox-form {
  width: 50%;
  height: 3em;
}

.ais-SearchBox-input {
  width: 90%;
  height: 100%;
  border: 1px solid #c4c8d8;
  border-radius: 5px;
  padding: .5em;
}

.ais-SearchBox-submit {
  height: 100%;
  width: 10%;
}

/*
** Over write highlighted results style
*/
.ais-Highlight-highlighted {
  background: #e4135973;
  padding: 1px;
}
/*
** Over write numbers of results on a line
*/
.ais-Hits-item {
  margin-bottom: 1em;
  width: calc(50% - 1rem);
}
.disclaimer {
  margin-left: 1em;
}
.hit-name {
  margin-bottom: 0.5em;
}
.hit-info {
  font-size: 90%;
}
.header {
  display: flex;
  align-items: center;
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
.ais-InstantSearch {
  max-width: 960px;
  overflow: hidden;
  margin: 0;
}
.search-panel__filters {
  float: left;
  width: 200px;
}
.search-panel__results {
  margin-left: 210px;
}
.ais-SearchBox {
  margin-bottom: 2rem;

}
.ais-Pagination {
  margin: 2rem auto;
  text-align: center;
}
/*
** Styling for motivation section
*/
.motivation {
  text-transform: capitalize;
  color: #989eb5;
  text-transform: capitalize;
  margin: 10px 0;
  font-style: italic;
}
</style>