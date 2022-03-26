<template>
  <div class="w-100">
    <draggable v-model="tasks" draggable=".item">
      <div v-for="task in tasks" :key="task.id" class="item">
        <Task :task="task"></Task>
      </div>
    </draggable>
  </div>
</template>

<script>
import draggable from 'vuedraggable';
import Task from "../../components/Task";
import {mapActions} from "vuex";

export default {
  name: "Index",
  components: {draggable, Task},
  computed: {
    tasks: {
      get() {
        return this.$store.state.task.tasks
      },
      set(value) {
        this.$store.commit('SET_TASKS', value)
      }
    }
  },
  methods: {
    ...mapActions(['fetchTasks'])
  },
  mounted() {
    this.fetchTasks();
  }
}
</script>

<style scoped>

</style>
