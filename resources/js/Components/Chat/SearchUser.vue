<script>
import { router, useForm } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

export default {
    setup() {
        const form = useForm({
            username: ''
        })

        const searchUser = () => {
            // here search for the user
            console.log('searching...')
            form.post('users/search' , {
                onSuccess(data) {
                    console.log(3348343)
                    console.log(data)
                }
            })
        }

        watch(() => form.username,searchUser)
        //watch(() => form.username ,  searchUser)

        return {
            form,
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
                v-model="form.username"
            />
                <div className="absolute z-10 w-1/4 border divide-y shadow max-h-72 overflow-y-auto bg-white">
                        <div className="block p-2 hover:bg-indigo-50 cursor-pointer">{user.username}</div>
                </div>

            )}
        </div>
</template>
