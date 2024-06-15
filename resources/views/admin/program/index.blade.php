<x-admin-app-layout>
<x-user-route-page-name :routeName="'admin.program.index'" />
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-neutral-200 text-black dark:text-white">
        <div class="h-full ml-14 mb-10 md:ml-48 ">
            <div class="max-w-full mx-auto  mt-10 sm:px-10 md:px-12 lg:px-10 xl:px-10 ">
                <div class="ml-5 font-bold text-md tracking-tight text-gray-600 uppercase">admin / Manage program</div>
                    <div class="container mx-auto p-4">

                            <livewire:program-show-table />

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-admin-app-layout>


