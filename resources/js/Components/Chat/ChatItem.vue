<script>
import { ref } from 'vue'

export default {
    props: {
        selected: Boolean,
    },
 setup(props) {
     console.log(props.selected)
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
<div
    :class="`flex flex-row py-4 px-2 items-center border-b-2
    ${selected ? 'border-l-4 border-blue-400' : ''}`"

        >
        <div>
        </div>
          <div class="w-1/4">
            <img
              src="https://source.unsplash.com/L2cxSuKWbpo/600x600"
              class="object-cover h-12 w-12 rounded-full"
              alt=""
            />
          </div>
          <div class="w-full">
            <div class="text-lg font-semibold">MERN Stack</div>
            <span class="text-gray-500">Lusi : Thanks Everyone</span>
          </div>
        </div>
</template>
