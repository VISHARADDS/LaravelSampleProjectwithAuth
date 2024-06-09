<x-app-layout>
@push('styles')
        <link rel="stylesheet" href="{{ asset('css/headerUI.css') }}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    @endpush

    <div style="margin-top:10px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900" style="padding:1.5rem">
                    {{ __("You're logged in as Admin!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>