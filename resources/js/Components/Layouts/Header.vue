<script>
import { router } from '@inertiajs/vue3';
import SearchUser from '../Chat/SearchUser.vue'
export default {
    components: {
        SearchUser,
    },
    setup() {
        const logout = () => {
            console.log('logging out...')
            router.post('logout' )
        }

        return {
            logout
        }
    }
}
</script>

<template>
<div class="px-5 py-5 flex justify-between items-center bg-white border-b-2">
      <div class="font-semibold text-2xl">GoingChat</div>
      <search-user />
      <div
        class="h-12 w-12 p-2 bg-yellow-500 rounded-full text-white font-semibold flex items-center justify-center"
      >
        RA
      </div>
      <button @click="logout">Log out</button>
    </div>
</template>
