<template>
  <div
    class="main h-100 p-3"
    :class="$auth.check() ? 'main': 'w-100'"
  >
    <router-view/>
  </div>
</template>

<script>

export default {
  name: "Main",
}
</script>

<style scoped>
  .main {
    position: absolute;
    top: 56px;
    right: 0;
    width: 75%;
    overflow-y: auto;
  }
</style>
