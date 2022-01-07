<template>
  <ais-instant-search :search-client="searchClient" index-name="jobs">
    <ais-search-box />
    <ais-hits>
      <div slot="item" slot-scope="{ item }">
        <h2>{{ item.name }}</h2>
      </div>
    </ais-hits>
  </ais-instant-search>
</template>

<script>
import { instantMeiliSearch } from '@meilisearch/instant-meilisearch';

export default {
  data() {
    return {
      searchClient: instantMeiliSearch(
        "http://localhost:7700",
        "masterKey"
      ),
    };
  },
};
</script>

<style>
body {
  font-family: sans-serif;
  padding: 1em;
}
</style>