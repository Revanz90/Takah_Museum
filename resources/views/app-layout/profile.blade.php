@extends('main')

<!-- Page Heading -->
<header class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Profile
        </h2>
    </div>
</header>

<!-- Page Content -->
<main>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                Profile Information
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                Update your account&#039;s profile information and email address.
                            </p>
                        </header>

                        <form id="send-verification" method="post"
                            action="http://127.0.0.1:8000/email/verification-notification">
                            <input type="hidden" name="_token" value="sgMN8cSNl79pqmWDMrYjDecKLCnTybSrkFcBK1ez">
                        </form>

                        <form method="post" action="http://127.0.0.1:8000/profile" class="mt-6 space-y-6">
                            <input type="hidden" name="_token" value="sgMN8cSNl79pqmWDMrYjDecKLCnTybSrkFcBK1ez">
                            <input type="hidden" name="_method" value="patch">
                            <div>
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                    for="name">
                                    Name
                                </label>
                                <input
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                    id="name" name="name" type="text" value="Revanza Marsapala"
                                    required="required" autofocus="autofocus" autocomplete="name">
                            </div>

                            <div>
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                    for="email">
                                    Email
                                </label>
                                <input
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                    id="email" name="email" type="email" value="revanzamarsapala11@gmail.com"
                                    required="required" autocomplete="username">

                            </div>

                            <div class="flex items-center gap-4">
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Save
                                </button>

                            </div>
                        </form>
                    </section>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                Update Password
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                Ensure your account is using a long, random password to stay secure.
                            </p>
                        </header>

                        <form method="post" action="http://127.0.0.1:8000/password" class="mt-6 space-y-6">
                            <input type="hidden" name="_token" value="sgMN8cSNl79pqmWDMrYjDecKLCnTybSrkFcBK1ez">
                            <input type="hidden" name="_method" value="put">
                            <div>
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                    for="current_password">
                                    Current Password
                                </label>
                                <input
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                    id="current_password" name="current_password" type="password"
                                    autocomplete="current-password">
                            </div>

                            <div>
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                    for="password">
                                    New Password
                                </label>
                                <input
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                    id="password" name="password" type="password" autocomplete="new-password">
                            </div>

                            <div>
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300"
                                    for="password_confirmation">
                                    Confirm Password
                                </label>
                                <input
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full"
                                    id="password_confirmation" name="password_confirmation" type="password"
                                    autocomplete="new-password">
                            </div>

                            <div class="flex items-center gap-4">
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Save
                                </button>

                            </div>
                        </form>
                    </section>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section class="space-y-6">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                Delete Account
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                Once your account is deleted, all of its resources and data will be
                                permanently deleted. Before deleting your account, please download any data
                                or information that you wish to retain.
                            </p>
                        </header>

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
                            Delete Account
                        </button>
