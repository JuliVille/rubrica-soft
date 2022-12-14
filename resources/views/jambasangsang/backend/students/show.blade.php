@extends('layouts.backend.master')
@section('css')
    <style>
        .title {
            background-color: rgba(7, 41, 77, 0.8) !important;
            padding: 10px;
            cursor: pointer;
        }

        .title .btn-link {
            text-decoration: none;
            color: white;
        }

        .title strong {
            text-decoration: none;
            color: white;
        }

        .title .btn-link:hover {
            text-decoration: none;
            color: white;
        }

        .card-title {
            text-transform: uppercase;
            font-family: 'poppin';
        }

        body {
            font-family: 'poppin'
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
            <section class="card">
                <div class="twt-feed blue-bg">
                    <div class="media">
                        <a href="#">
                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt=""
                                src="{{ $student->avatar }}">
                        </a>
                        <div class="media-body">
                            <h3 class="text-white display-6">{{ $student->name }}</h3>
                            <p class="text-light">{{ $student->assignRoles() }}</p>
                        </div>
                    </div>

                </div>
                <div class="twt-write col-sm-12">
                    {{-- <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea> --}}
                </div>
                <footer class="twt-footer">
                    <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    {{ $student->email }}
                </footer>
            </section>
        </div>
        <div class="col-md-8">
            <div class="card">
                {{-- <img class="card-img-top" src="{{ $student->image() }}" alt="{{ $student->name }}"> --}}
                <div class="card-body">
                    <h3 class="card-title mb-3">@lang('Cursos registrados:') {{ count($student->courses) }}</h3>

                    <div class="accordion" id="accordionExample">
                        @forelse ($student->courses as $key => $course)
                            <div class="card">
                                <div class="title">
                                    <div style="background-image: url('{{ $course->course->image() }}'); background-repeat:no-repeat; background-position: center; background-size: cover;"
                                        class="card-header" id="headingOne{{ $course->id }}" data-toggle="collapse"
                                        data-target="#collapseOne{{ $course->id }}">
                                        <h2 class="mb-0 title">
                                            <img class="align-self-center rounded-circle mr-3"
                                                style="width:60px; height:60px;" alt=""
                                                src="{{ $course->course->teacher->avatar }}">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne{{ $course->id }}" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                @lang($course->course->name . ' ' . $key + 1) <br>
                                                <span>{{ $course->course->teacher->name }}</span>
                                            </button>

                                        </h2>
                                    </div>
                                </div>

                                <div id="collapseOne{{ $course->id }}" class="collapse"
                                    aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            @forelse ($course->course->lessons as $lesson)
                                                <li
                                                    style="padding: 0.5em; background:rgb(217, 215, 215); margin-bottom:1px">
                                                    {{ $lesson->title }} <span class="pull-right"><i
                                                            class="fa fa-clock-o"
                                                            aria-hidden="true"></i>{{ $lesson->duration }}</span>
                                                </li>
                                            @empty
                                                <div class="flex justify-between">
                                                    <h2 class="text-center">Sin Clases</h2>

                                                </div>
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="flex justify-between">
                                <h2 class="text-center">No Lesson</h2>

                            </div>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
