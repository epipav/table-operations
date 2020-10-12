<template>
  <div>
    <b-container class="mb-4 float-left">
      <b-row class="no-gutters" align-v="center">
        <b-col class="col-2 col-md-4" align-v="center">
          <b-pagination
            class="text-center"
            v-model="currentPage"
            :total-rows="rows"
            :per-page="perPage"
            aria-controls="my-table"
          ></b-pagination>
        </b-col>
      </b-row>
      <b-row class="no-gutters" align-v="center">
        <b-col class="text-left col-1 col-md-1">Items per page:</b-col>
        <b-col class="col-2 col-md-1">
          <b-form-input
            id="per-page"
            maxlength="3"
            v-model="perPage"
            type="number"
            placeholder="Enter your name"
          ></b-form-input>
        </b-col>
      </b-row>
      <b-row class="no-gutters" align-v="center">
        <b-col class="text-left col-1 col-md-1">Search:</b-col>
        <b-col class="col-2 col-md-2">
          <b-form-input
            id="search"
            v-model="search"
            type="text"
            placeholder="Search"
          ></b-form-input>
        </b-col>
      </b-row>
    </b-container>

    <b-table
      id="my-table"
      striped
      hover
      :items="items"
      :per-page="perPage"
      :current-page="currentPage"
    ></b-table>
  </div>
</template>
<script src="../table.js"></script>
