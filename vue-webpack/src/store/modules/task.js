import axios from 'axios'

const state = {
  tasks: []
}

const actions = {
  async fetchTasks({ commit}) {
    let tasks = localStorage.getItem('tasks');

    if (!tasks) {
      const response = await axios.get('/api/tasks/');
      tasks = response.data.data
    } else {
      tasks = JSON.parse(tasks);
    }
    commit('SET_TASKS', tasks);
  },
}

const mutations = {
  SET_TASKS: function (state, tasks) {
    localStorage.setItem('tasks', JSON.stringify(tasks));
    state.tasks = tasks;
  },
}

export default {
  state,
  actions,
  mutations
};
