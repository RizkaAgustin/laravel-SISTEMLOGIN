@extends('base')
@section('content')
<!-- Main Section -->
<section class="main-section">
    <!-- Add Your Content Inside -->
    <div class="content">
        <!-- Remove This Before You Start -->
        <h1>Silahkan Registrasi</h1>
        <hr>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ url('/registerPost') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="alamat">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="alamat">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="alamat">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="alamat">Password Confirmation:</label>
                <input type="password" class="form-control" id="confirmation" name="confirmation">
            </div>
    </div>
    <div class="form-group">
        <span style="margin: 15px">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <a href="{{url('login')}}" type="reset" class="btn btn-md btn-danger">Cancel</a>
        </span>
    </div>
    </form>
    </div>
    <!-- /.content -->
</section>
<!-- /.main-section -->
@endsection