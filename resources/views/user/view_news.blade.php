<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
  @include('user.navbar')
  </header>
  @if(session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">
        x
      </button>
      {{session()->get('message')}}
    </div>
    @endif
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/news_bg_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
          </ol>
        </nav>
        <h1 class="display-4">News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">

            @foreach($news as $newss)
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a>{{$newss->category}}</a>
                  </div>
                  <a>
                    <img src="newsimage/{{$newss->image}}" alt="">
                  </a>
                </div>
                <div class="body">
                  <!---->
                  <h5 class="post-title"><a href="{{route('detailed_news.show', ['id' => $newss->id])}}">{{$newss->title}}</a></h5>
                  <!---->
                  <div class="site-info">
                  <span>{{$newss->category}}</span>
                </div>
                </div>
              </div>
            </div>
            @endforeach

            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent News</h3>
              @foreach($news as $newss)
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="newsimage/{{$newss->image}}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="{{route('detailed_news.show', ['id' => $newss->id])}}">{{$newss->title}}</a></h5>
                  <div class="avatar mr-2">
                    <span>{{$newss->category}}</span>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  
  @if(Route::has('login'))
  @auth
  @include('user.userAddNews')
  @endauth
  @endif 

  @include('user.footer')

  @include('user.script')
  
</body>
</html>