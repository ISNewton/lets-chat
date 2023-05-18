<script>
import { router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

export default {
    setup() {
        const searchText = ref('')

        const searchUser = () => {
            // here search for the user
            console.log('searching...')
            const data = router.post('users/search' , {
                username: searchText

            })
            console.log(232323 , data)
        }

        watch(searchText , searchUser)

        return {
            searchText,
            searchUser,
        }
    }
}
</script>

<template>
 <div className="w-1/2">
            <input
                type="text"
                placeholder="Search Username"
                className="rounded-2xl outline-none focus:outline-none  bg-gray-100 py-3 px-5 w-full"
                v-model="searchText"
            />
                <div className="absolute z-10 w-1/4 border divide-y shadow max-h-72 overflow-y-auto bg-white">
                        <div className="block p-2 hover:bg-indigo-50 cursor-pointer">{user.username}</div>
                </div>

            )}
        </div>
</template>
