<template>
  <b-card class="mb-2" :title="task.email">
    <b-card-text> {{task.description}} </b-card-text>

    <div class="d-flex mt-4 justify-content-between">
      <span class="text-sm text-primary">{{task.created_at}}</span>
      <b-badge :variant="task.badge">{{task.label}}</b-badge>
    </div>
  </b-card>
</template>

<script>
export default {
  name: "Task",
  props: {
    task: {required: true, type: Object},
  }
}
</script>

<style scoped>

</style>
