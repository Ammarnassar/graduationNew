@extends('layouts.app')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <livewire:user.profile.index :user="$user" />
        </div>
    </div>

@endsection
