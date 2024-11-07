@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- end page title -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ $title }}</h4>
        </div>

        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-label">Tiêu đề</label>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="email" class="form-control" value="{{  env('MAIL_TO') }}">
                        </div>
                        <div class="col-md-4">

                            <button class="btn btn-success">Cập nhật</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
