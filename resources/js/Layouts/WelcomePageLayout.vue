<script setup>
import { Disclosure, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { Link } from '@inertiajs/vue3';
import FBSLogo from '/resources/images/Logo_FBS-Wide.png';


const navigation = [
  { name: 'Dashboard', href: '#', current: true },
  { name: 'Team', href: '#', current: false },
  { name: 'Projects', href: '#', current: false },
  { name: 'Calendar', href: '#', current: false },
]
</script>

<template>
    <div class="bg-dots-darker bg-gray-100">
      <header>
        <div class="fixed top-0 z-50 w-full">
          <Disclosure as="nav" class="bg-white " v-slot="{ open }">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
              <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-0 left-0 flex items-center sm:hidden">
                </div>
                <div class="flex justify-center sm:items-stretch sm:justify-start">
                  <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" :src="FBSLogo" alt="FBS Triumph" />
                  </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                  
                  <!-- Profile dropdown -->
                  <Menu as="div" class="relative ml-3" v-if="$page.props.auth.user">
                    <div>
                      <MenuButton class="flex bg-green-100 px-2 py-1 justify-center rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-3 focus:ring-offset-green-400">
                        <span class="absolute -inset-1.5" />
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                        <div class="ml-2 pr-2 py-2">
                          Hi, {{ $page.props.auth.user.name }}
                        </div>
                      </MenuButton>
                    </div>
                    <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                      <MenuItems class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <MenuItem v-slot="{ active }">
                          <a :href="route('profile.edit')" 
                          :class="[active ? 'bg-slate-100' : '', 'block px-4 py-2 text-sm text-gray-700 hover:bg-green-100']"
                          >Your Profile</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                          <Link :href="route('logout')" method="post" :class="[active ? 'bg-slate-100' : '', 'block px-4 py-2 text-sm text-gray-700 hover:bg-green-100']">Log out</Link>
                        </MenuItem>
                      </MenuItems>
                    </transition>
                  </Menu>

                  <template v-else>
                    <Link
                    :href="route('login')"
                    class="rounded-md bg-green-100 px-2 py-1 justify-center font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Log in</Link>
                    
                    <Link
                    :href="route('register')"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Register</Link>
                  </template>
                  

                </div>
              </div>
            </div>

          </Disclosure>
        </div>
        
      </header>
      
      <main>
        <div class="relative top-20 flex flex-col h-screen w-full">
          <div class="px-2">
            <div class="bg-white h-fit shadow p-4 rounded-md">
              <slot name="promo-carousel"></slot>
            </div> 
            <div class=" mt-5 h-fit ">
              <slot name="customer-card"></slot>
            </div>
            <div> 03 </div>
          </div>
          
        </div>
      </main>
    </div>
    
    

  
  </template>
<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
  
