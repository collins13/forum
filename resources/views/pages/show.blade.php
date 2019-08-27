@extends('layouts.front')




@section('content')
<div class="container">
<section>
  <div class="row">
    <div class="col-md-8">
      <article class="blog-post">
        <div class="blog-post-image">
          <a href="post.html"><img src="images/750x500-1.jpg" alt=""></a>
        </div>
          <div class="blog-post-body">
            <h2><a href="post.html">{{$thread->subject}}</a></h2>
            <div class="post-meta"><span>by <a href="#">{{$thread->user->name}}</a></span>/<span><i class="fa fa-clock-o"></i>{{$thread->created_at}}</span>/<span><i class="fa fa-comment-o"></i> <a href="#">343</a></span></div>
            <p>{!!\Michelf\Markdown::defaultTransform($thread->body)!!}</p>
          </div>
          <div class="row">
            @if(Auth::user());
            <div class="col-md-6">
                <a href="{{route('pages.edit',$thread->id)}}" class="ui button orange">Edit</a>
            </div>

             <div class="col-md-6">
                <form action="{{route('form.destroy',$thread->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('POST')}}
                    <input type="submit" class="ui button negative" value="Delete">
                  </form>
             </div>
            @else

            @endif

          </div>
          <div class="ui buttons">
              <a href="/" class="ui labeled red icon button">
                <i class="left chevron icon"></i>
                Back
              </a>
            </div>
      </article>
      <!-- article -->
    </div>
    <div class="col-md-4 sidebar-gutter">
      <aside>
      <!-- sidebar-widget -->
      <div class="sidebar-widget">
        <h3 class="sidebar-title">About Me</h3>
        <div class="widget-container widget-about">
          <a href="post.html"><img src="images/author.jpg" alt=""></a>
          <h4>Jamie Mooz</h4>
          <div class="author-title">Designer</div>
          <p>While everyone’s eyes are glued to the runway, it’s hard to ignore that there are major fashion moments on the front row too.</p>
        </div>
      </div>
      <!-- sidebar-widget -->
      <div class="sidebar-widget">
        <h3 class="sidebar-title">Featured Posts</h3>
        <div class="widget-container">
          <article class="widget-post">
            <div class="post-image">
              <a href="post.html"><img src="images/90x60-1.jpg" alt=""></a>
            </div>
            <div class="post-body">
              <h2><a href="post.html">The State of the Word 2014</a></h2>
              <div class="post-meta">
                <span><i class="fa fa-clock-o"></i> 2. august 2015</span> <span><a href="post.html"><i class="fa fa-comment-o"></i> 23</a></span>
              </div>
            </div>
          </article>

        </div>
      </div>
      <!-- sidebar-widget -->
      <div class="sidebar-widget">
        <h3 class="sidebar-title">Categories</h3>
        <div class="widget-container">
          <div class="ui middle aligned divided list">
  <div class="item">
    <img class="ui avatar image" src="/images/avatar/small/daniel.jpg">
    <div class="content">
      <a href="#">Fashion</a>
    </div>
  </div>
  <div class="item">
    <img class="ui avatar image" src="/images/avatar/small/stevie.jpg">
    <div class="content">
      <li><a href="#">Art</a></li>
    </div>
  </div>
  <div class="item">
    <img class="ui avatar image" src="/images/avatar/small/elliot.jpg">
    <div class="content">
      <li><a href="#">Design</a></li>
    </div>
  </div>
  <div class="item">
    <img class="ui avatar image" src="/images/avatar/small/elliot.jpg">
    <div class="content">
      <li><a href="#">Design</a></li>
    </div>
  </div>
  <div class="item">
    <img class="ui avatar image" src="/images/avatar/small/elliot.jpg">
    <div class="content">
      <li><a href="#">Design</a></li>
    </div>
  </div>
  <div class="item">
    <img class="ui avatar image" src="/images/avatar/small/elliot.jpg">
    <div class="content">
      <li><a href="#">Design</a></li>
    </div>
  </div>

</div>
        </div>
      </div>
      </div>
      </aside>
    </div>
  </div>
</section>
</div><!-- /.container -->

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
