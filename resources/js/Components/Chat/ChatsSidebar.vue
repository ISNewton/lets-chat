<script >
import ChatItem from './ChatItem.vue'
import {ref} from 'vue'
export default {
components: {
    ChatItem,
},
    props: {
        chats:Object
    },
 setup(props) {
    const selectedChat = ref(null)

     const chats = ref(props.chats)

     console.log(props.chats,1111)
    const setSelectedChat = (chat) => {
        selectedChat.vaule = chat
    }
    return {
        selectedChat,
        setSelectedChat,
        chats,
    }
}

}
</script>

<template>
<div class="flex flex-col w-2/5 border-r-2 overflow-y-auto">
        <!-- search compt -->
        <div class="border-b-2 py-4 px-2">
          <input
            type="text"
            placeholder="search chatting"
            class="py-2 px-2 border-2 border-gray-200 rounded-2xl w-full"
          />
        </div>
        <!-- end search compt -->
        <!-- user list -->

        <chat-item v-for="chat in chats" key="chat.id" :selected="true" />
        <!-- end user list -->
      </div>
</template>
