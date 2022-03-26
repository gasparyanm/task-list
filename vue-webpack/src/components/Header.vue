<template>
  <div class="header">
    <b-navbar toggleable="lg" type="dark" variant="info">
      <b-navbar-brand to="/">Profile</b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse v-if="$auth.check()" id="nav-collapse" is-nav>
        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item-dropdown right>
            <!-- Using 'button-content' slot -->
            <template #button-content>
              <em>{{ $auth.user().name }}</em>
            </template>
            <b-dropdown-item @click="$auth.logout()" >
              Sign Out
            </b-dropdown-item>
          </b-nav-item-dropdown>
        </b-navbar-nav>
      </b-collapse>
      <b-collapse v-else id="nav-collapse" is-nav>
        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item right to="/login">
              <em>Login</em>
          </b-nav-item>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>

<script>
export default {
  name: "Header"
}
</script>

<style scoped>
  .header{
    position: fixed;
    z-index: 9999;
    left: 0;
    right: 0;
  }
</style>
