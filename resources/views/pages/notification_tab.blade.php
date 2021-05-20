@extends('layouts.app')

@section('content')

<div id="content-page" class="content-page">
    <div class="container">
       <div class="row">
          <div class="col-sm-12">
             <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Notification</h4>
                </div>
             </div>
          </div>
          <div class="col-sm-12">
             


                     <livewire:user.notification-tab />
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
