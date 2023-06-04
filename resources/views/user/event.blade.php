<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest Events</h1>
      <div class="row mt-5">

        @foreach($events as $event)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{$event->category}}</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="eventimage/{{$event->image}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">{{$event->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <span>{{$event->category}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach


        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="blog.html" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->