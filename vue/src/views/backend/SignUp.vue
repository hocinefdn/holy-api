<template>
    <div
        class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8"
    >
        <div class="w-full max-w-md space-y-8">
            <div>
                <img
                    class="mx-auto h-12 w-auto"
                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="Your Company"
                />
                <h2
                    class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900"
                >
                    Inscrivez-vous
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST">
                <input type="hidden" name="remember" value="true" />
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="lastname" class="sr-only">Nom</label>
                        <input
                            id="lastname"
                            name="lastname"
                            type="text"
                            required=""
                            class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Nom"
                        />
                    </div>
                    <div>
                        <label for="firstname" class="sr-only">Prénom</label>
                        <input
                            id="firstname"
                            name="firstname"
                            type="text"
                            required=""
                            class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Prénom"
                        />
                    </div>
                    <div>
                        <label for="email-address" class="sr-only"
                            >Adresse email</label
                        >
                        <input
                            id="email-address"
                            name="email"
                            type="email"
                            autocomplete="email"
                            required=""
                            class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Adresse email"
                        />
                    </div>
                    <div>
                        <label for="phone" class="sr-only">Téléphone</label>
                        <input
                            id="phone"
                            name="phone"
                            type="phone"
                            required=""
                            class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Téléphone"
                        />
                    </div>

                    <div>
                        <label for="password" class="sr-only"
                            >Mot de passe</label
                        >
                        <input
                            id="password"
                            name="password"
                            type="password"
                            autocomplete="current-password"
                            required=""
                            class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Mot de passe"
                        />
                    </div>
                </div>

                <div>
                    <button
                        type="submit"
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        <span
                            class="absolute inset-y-0 left-0 flex items-center pl-3"
                        >
                            <LockClosedIcon
                                class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                aria-hidden="true"
                            />
                        </span>
                        S'inscrire
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { LockClosedIcon } from "@heroicons/vue/20/solid";
</script>
