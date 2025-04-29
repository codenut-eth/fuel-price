{{-- resources/views/userprofile.blade.php --}}
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section id="features" class="features">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2 col-xs-12 sidebarUSER">
                    <div class="sideINNER">
                        <ul>
                            @include('partials.usernav')
                        </ul>
                    </div>
                </div>

                <div class="col-md-10 col-xs-12">
                    <div class="section-content">
                    <div class="das-box">
   <!-- page content -->
   <div class="right_col" role="main">
                            <!-- <div class="clearfix"></div> -->
                                <div class="sidehead">
                                    <h1 class="pb-3" style="font-size:24px;">Welcome, {{ Auth::user()->role->name ?? 'User' }}</h1>
                                </div>
                        </div> <!-- End of right_col -->
                    </div>
                     
                        </div> <!-- End of section-content -->
                </div> <!-- End of rightUSER -->
            </div> <!-- End of row -->
        </div> <!-- End of container -->
    </section>
@endsection

@push('scripts')

@endpush
