<script >
import { Head, Link } from '@inertiajs/vue3';
import ChatsSidebar from '../Components/Chat/ChatsSidebar.vue'
import Header from '../Components/Layouts/Header.vue'

export default {
    components: {
        ChatsSidebar,
        Header,
    }
   ,
    props: {
        chats:Object,
    },
    setup(props) {
        return {
            chats:props.chats
        }
    }
}
</script>

<template>
    <Head title="Welcome" />
        <div>
<div class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <!-- This is an example component -->
<div class="container mx-auto shadow-lg rounded-lg">
        <!-- headaer -->
        <Header />
    <!-- end header -->
    <!-- Chatting -->
    <div class="flex flex-row justify-between bg-white">
      <!-- chat list -->
        <chats-sidebar :chats="chats" />
      <!-- end chat list -->
      <!-- message -->
      <div class="w-full px-5 flex flex-col justify-between">
        <div class="flex flex-col mt-5">
          <div class="flex justify-end mb-4">
            <div
              class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white"
            >
              Welcome to group everyone !
            </div>
            <img
              src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
              class="object-cover h-8 w-8 rounded-full"
              alt=""
            />
          </div>
          <div class="flex justify-start mb-4">
            <img
              src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
              class="object-cover h-8 w-8 rounded-full"
              alt=""
            />
            <div
              class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white"
            >
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
              at praesentium, aut ullam delectus odio error sit rem. Architecto
              nulla doloribus laborum illo rem enim dolor odio saepe,
              consequatur quas?
            </div>
          </div>
          <div class="flex justify-end mb-4">
            <div>
              <div
                class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white"
              >
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Magnam, repudiandae.
              </div>

              <div
                class="mt-4 mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white"
              >
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Debitis, reiciendis!
              </div>
            </div>
            <img
              src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
              class="object-cover h-8 w-8 rounded-full"
              alt=""
            />
          </div>
          <div class="flex justify-start mb-4">
            <img
              src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
              class="object-cover h-8 w-8 rounded-full"
              alt=""
            />
            <div
              class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white"
            >
              happy holiday guys!
            </div>
          </div>
        </div>
        <div class="py-5">
          <input
            class="w-full bg-gray-300 py-5 px-3 rounded-xl"
            type="text"
            placeholder="type your message here..."
          />
        </div>
      </div>
      <!-- end message -->
      <div class="w-2/5 border-l-2 px-5">
        <div class="flex flex-col">
          <div class="font-semibold text-xl py-4">Mern Stack Group</div>
          <img
            src="https://source.unsplash.com/L2cxSuKWbpo/600x600"
            class="object-cover rounded-xl h-64"
            alt=""
          />
          <div class="font-semibold py-4">Created 22 Sep 2021</div>
          <div class="font-light">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
            perspiciatis!
          </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

        <!-- </div> -->
</template>
