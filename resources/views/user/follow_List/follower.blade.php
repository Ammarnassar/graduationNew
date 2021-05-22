@extends('layouts.app')

@section('content')
    <div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                    <livewire:list.followers />

                  </div>
               </div>
            </div>
         </div>
@endsection
