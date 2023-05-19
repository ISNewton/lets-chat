import { createApp } from 'vue'
import { createStore } from 'vuex'

// Create a new store instance.
const store = createStore({
  state () {
    return {
        chats: [],
    }
  },
  mutations: {
      addChat(state , context) {
          state.chats.push(context.chats)
      }
  }
})


export default store
