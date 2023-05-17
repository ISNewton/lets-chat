<script >
import ChatItem from './ChatItem.vue'
import {ref} from 'vue'
export default {
components: {
    ChatItem,
},
 setup() {
    const selectedChat = ref(null)

    const setSelectedChat = (chat) => {
        selectedChat.vaule = chat
    }
    return {
        selectedChat,
        setSelectedChat
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

        <chat-item :selected="false" />
            <chat-item  :selected="false"/>
                <chat-item  :selected="true"/>

        <!-- end user list -->
      </div>
</template>
