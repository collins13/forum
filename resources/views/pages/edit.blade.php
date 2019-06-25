@extends('layouts.front')




@section('content')
  <div class="container">
    <h1>Create Content</h1><hr>
    <div class="create-form col-md-8">
        <form method="post" action="{{ route('form.update', $thread->id) }}">
        @csrf
        <div class="form-group">
          <label for="subject">Subject:</label>
        <input type="text" name="subject" value="{{$thread->subject}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="subject">Category:</label>
        <input type="text" name="type" value="{{$thread->type}}" class="form-control">
        </div>
        <div class="form-group">
          <label for="content">Content:</label>
        <textarea name="body" id='ckeditor' rows="8" cols="80" class="form-control">{{$thread->body}}</textarea>
        <script>
           CKEDITOR.replace( 'ckeditor' );
       </script>
        </div>
        <input type="submit" value="submit" class="btn btn-success">
    </form>
    <a href="/">Go back</a>

    </div>

  </div>

  <footer class="footer">

    <div class="footer-socials">
      <button class="ui facebook button">
        <i class="facebook icon"></i>
        Facebook
      </button>
      <button class="ui twitter button">
        <i class="twitter icon"></i>
        twitter
      </button>
      <button class="ui instagram button">
        <i class="instagram icon"></i>
        instagram
      </button>
      <button class="ui google plus button">
        <i class="google plus icon"></i>
        google plus
      </button>
      <button class="ui dribble button">
        <i class="dribble icon"></i>
        dribble
      </button>
      <button class="ui reddit button">
        <i class="reddit icon"></i>
        reddit
      </button>
    </div>

    <div class="footer-bottom">
      <i class="fa fa-copyright"></i> Copyright 2019. All rights reserved.<br>
      Site made by <a href="http://www.moozthemes.com">Forum</a>
    </div>
  </footer>

@endsection
