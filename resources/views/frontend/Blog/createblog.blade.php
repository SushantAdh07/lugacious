@extends('frontend.home')
@section('hero')
    <div class="block p-4">
        <form action="" method="POST">
            @csrf
            <div class="m-3">
                <label for="">Blog title</label>
                <input type="text" name="blog_title" placeholder="Title">
            </div>
            <div class="m-3">
                <label for="">Blog Description</label>
                <input type="text" name="blog_desc" placeholder="Description">
            </div>
            <a class="bg-black text-white p-2" href="">Save</a>
        </form>
    </div>
@endsection
