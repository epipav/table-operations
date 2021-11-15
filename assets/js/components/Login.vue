<template>
  <div>
    <b-container class="mb-4 float-left">
      <b-row class="no-gutters" align-v="center">
        <b-col class="text-left col-1 col-md-3">Please enter passphrase:</b-col>
        <b-col class="col-2 col-md-2">
          <b-form-input id="passphrase" v-model="passphrase" type="text" placeholder="Passphrase"></b-form-input>
        </b-col>
        <b-col class="ml-3 col-2 col-md-2">
          <b-button size="sm" @click="login">Login</b-button>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>
<script src="../login.js"></script>
