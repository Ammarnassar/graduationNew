@extends('layouts.app')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <livewire:group.index :group="$group" />
        </div>
    </div>

@endsection
