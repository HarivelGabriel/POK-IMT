<x-app-layout>

    @push('style')
        <link rel="stylesheet" href="{{ URL::asset('css/menus/info.css') }} " type="text/css">
    @endpush

    @include('tools.navbar')

    <div id="main-container">
        <div id='energy-container'>
            <p>{{ $user_energy }}</p>
        </div>
        <div id='avatar-container'>

        </div>
        <div id='statistics-container'>

        </div>
        <div id='replays-container'>

        </div>
    </div>
</x-app-layout>
