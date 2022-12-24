
<template>
    <layout title="Users">
      <div v-for="user in users" :key="user.id">
        <inertia-link :href="`/users/${user.id}`">
          {{ user.name }}
        </inertia-link>
        <div>{{ user.email }}</div>
      </div>
    </layout>
  </template>

  <script>
  import Layout from '../Shared/Layout'

  export default {
    components: {
      Layout,
    },
    /* Controllerで指定した変数をpropsで受け取るため、同じ変数名を指定します。
      IFはInertiaにおまかせです。
    */
    props: {
      users: Array,
    },
  }
  </script>
