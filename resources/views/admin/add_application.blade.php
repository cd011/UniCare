<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        
        @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="left" style="padding-top: 50px">
                @if(session()->has('message'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">
                    x
                  </button>
                  {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('upload_application')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px">
                        <label>Application Title</label>
                        <input type="text" style="color:black; width: 42em;" name="title" placeholder="Add application title.." required="">
                    </div>

                    <div style="padding: 15px">
                        <label>Category</label>
                        <select name="category" style="color:black;" required="">
                            <option>--Select--</option>
                            <option value="Mahapola">Mahapola</option>
                            <option value="Laptop">Laptop Loan</option>
                            <option value="Hostel">Hostel</option>
                            <option value="Bursary">Bursary</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div style="padding: 15px">
                        <label>Details</label>
                        <!--input type="text" style="color:black;" name="body" placeholder="Add news body.."-->
                        <textarea name="body" style="color:black; width: 42em; height: 20em" placeholder="Add details.." required="">
                        </textarea>
                    </div>

                    <div style="padding: 15px">
                        <label>Image</label>
                        <input type="file" name="image" required="">
                    </div>

                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
