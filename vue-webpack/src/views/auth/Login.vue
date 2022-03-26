<template>
  <div class="w-50 pt-5 m-auto">
    <b-alert :show="error" variant="danger">{{ message }}</b-alert>
    <b-form @submit.prevent.stop="login">
      <b-form-group
        id="input-group-1"
        label="Email address:"
        label-for="input-1"
      >
        <b-form-input
          id="input-1"
          v-model="form.email"
          type="email"
          placeholder="Enter email"
        ></b-form-input>
      </b-form-group>
      <b-form-group id="input-group-2" label="Your Password:" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.password"
          placeholder="Enter Password"
        ></b-form-input>
      </b-form-group>
      <b-button type="submit" variant="primary">Submit</b-button>
    </b-form>
  </div>
</template>

<script>
export default {
  name: "Login",
  data() {
    return {
      form: {
        email: '',
        password: ''
      },
      error: false,
      message: ''
    }
  },
  methods: {
    login() {
      let self = this;
      this.$auth.login({
        data: self.form,
        success: function() {
          this.$router.push({name: 'profile.index'})
        },
        error: function(error) {
          self.error = true
          self.message = error.response.data.message
        },
        rememberMe: true,
        fetchUser: true
      })
    },
  }
}
</script>

<style scoped>

</style>
