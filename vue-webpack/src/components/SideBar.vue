<template>
  <div class="sidebar p-3">
    <b-list-group>
      <b-list-group-item to="/tasks">Tasks</b-list-group-item>
    </b-list-group>
  </div>
</template>

<script>
export default {
  name: "SideBar"
}
</script>

<style scoped>
  .sidebar{
    position: fixed;
    z-index: 9999;
    top:56px;
    left: 0;
    bottom: 0;
    width: 25%;
  }
</style>
