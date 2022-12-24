<template>
    <div>
      <draggable v-model="items">
        <div v-for="item in items" :key="item.id">
          {{ item.text }}
        </div>
      </draggable>
    </div>
  </template>

  <script>
  import draggable from 'vue-draggable'

  export default {
    components: {
      draggable
    },
    data() {
      return {
        items: [
          { id: 1, text: 'Item 1' },
          { id: 2, text: 'Item 2' },
          { id: 3, text: 'Item 3' },
          { id: 4, text: 'Item 4' }
        ]
      }
    }
  }
  </script>
