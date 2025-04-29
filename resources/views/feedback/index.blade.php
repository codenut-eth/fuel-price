@extends('layouts.app')

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
                <div class="col-md-10 col-xs-12 ">
                    <div class="section-content">
                        <div class="das-box">
                        <div class="col-12">
                            <h1 class="pb-3" style="font-size:24px;">Feedbacks</h1>
                        </div>
                        @if($feedback->isNotEmpty())
                            <table class="table table-responsive table-striped table-bordered tablewhite" style="max-height: 400px; overflow-y: auto;">
                                <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Station ID</th>
                                    <th>Comment</th>
                                    <th>User Rating</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($feedback as $index => $feedbacks)
								    <tr data-toggle="modal" data-target=".feedback-modal-{{ $feedbacks->id }}" style="cursor:pointer">
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $feedbacks->station_id }}</td>
                                        <td>{{ $feedbacks->comment }}</td>
                                        <td>{{ $feedbacks->user_rating }}</td>
                                        <td>{{ $feedbacks->date }}</td>
                                        <td>{{ $feedbacks->time }}</td>
                                        <td><span class="badge badge-primary">View</span></td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade feedback-modal-{{ $feedbacks->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" style="max-width:650px;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Feedback</h4>
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row mb-4">
                                                        <div class="col-lg-12">
														    @if($feedbacks->station_id)
																  <h5>Station Id: {{ $feedbacks->station_id }}</h5>
															@endif
                                                        </div>
                                                    </div>

													<div class="row mb-4">
                                                        <div class="col-lg-12">
														    @if($feedbacks->comment)
																  <h5>Comments: {{ $feedbacks->comment }}</h5>
															@endif
                                                        </div>
                                                    </div>

													<div class="row mb-4">
                                                        <div class="col-lg-12">
														    @if($feedbacks->user_rating)
																  <h5>Comments: {{ $feedbacks->user_rating }}</h5>
															@endif
                                                        </div>
                                                    </div>

													<div class="row mb-4">
                                                        <div class="col-lg-12">
														    @if($feedbacks->date)
																  <h5>Date: {{ $feedbacks->date }}</h5>
															@endif
                                                        </div>
                                                    </div>
	
													<div class="row mb-4">
                                                        <div class="col-lg-12">
														    @if($feedbacks->time)
																  <h5>time: {{ $feedbacks->time }}</h5>
															@endif
                                                        </div>
                                                    </div>
	
													
                                                </div>
                                                <div class="modal-footer">
                                                    <p>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Modal -->
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <p class="text-center">No feedbacks to display</p>
                        @endif
                        </div>
                       
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        .comentSection h5 {
            color: #000;
            padding-left: 10px;
            font-size: 16px;
            font-weight: bold;
            padding: 10px;
        }
        .reply_admin {
            float: right;
            clear: both;
        }
        .Usercoment {
            border-radius: 0px 20px 20px 20px;
            margin-top: 5px;
            background: #afdbf3;
        }
        .AdminComment {
            background: #c3fcf3;
            border-radius: 20px 0px 20px 20px;
            margin-top: 5px;
        }
        .comentSection {
            padding: 10px 0px;
            border-radius: 5px;
        }
        .Adminreply_admin {
            clear: both;
            width: auto;
            display: flex;
            float: right;
            max-width: 75%;
        }
        .modal-content p {
            margin-bottom: 0px;
            color: #000;
            padding-bottom: 5px;
            float: left;
            font-size: 14px;
            padding: 8px 10px;
        }
        .badge-danger {
            padding: 10px;
        }
        .badge-primary {
            padding: 10px;
        }
        .Userreply_admin {
            clear: both;
        }
    </style>
@endsection
