<script>
import { router, useForm} from '@inertiajs/vue3';
import { ref, watch } from 'vue';

export default {
    setup() {
        let searchText = ref('')
        let users = ref([])

        const searchUser = () => {
            // here search for the user
            console.log('searching...')


            router.get('/' , {
                username: searchText.value ,
            } ,
                {preserveState:true , onSuccess(data) {
                    users.value = data.props.users
            }})
            console.log(users)
        }

        watch(searchText,searchUser)

        return {
            searchText,
            users,
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

                <div v-if="users.length" className="absolute z-10 w-1/4 border divide-y shadow max-h-72 overflow-y-auto bg-white">
                        <div v-for="user in users"  className="block p-2 hover:bg-indigo-50 cursor-pointer">
                            <p>{{user.username}}</p>
                        </div>
                </div>

        </div>
</template>
