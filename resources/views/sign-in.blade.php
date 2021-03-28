@extends('layouts.default')
@section('title')
    OSM Integration
@stop

@section('bodyClass')
    bg-grey-5 dark:bg-gray-700 flex items-center justify-center
@stop

@section('content')
    <div class="text-center p-8 bg-white dark:bg-gray-800">
        <x-logo class="inline w-40 text-purple dark:text-white"></x-logo>
        <div class="mb-10">
            <p>This service is intended for use by volunteers of Tadley Scouts only.</p>
            <p>If you are unsure how to use this service, please contact <a class="font-bold hover:text-blue" href="mailto:support@tadleyscouts.org.uk">Support</a>.
            </p>
        </div>

        <x-button href="#">Sign in with OSM</x-button>


    </div>
@stop
