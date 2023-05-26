
<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.sidebar')
     @include('admin.header')
     

 <!----wrapper----->
 <div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
     



    <div style="position: relative; overflow-x: auto;">
      <h2>Update hero section</h2>
        <form action="{{ url('/updateabout', $about->id) }}" method="post" enctype="multipart/form-data" >
            @csrf
            <lable>Heading: </lable>
            <input type="text" name="head" value="{{ $about->head }}" style="color:black" required><br>
            <lable>Title: </lable>
            <input type="text" name="title" value="{{ $about->title }}" style="color:black" required><br>
            <lable>Paragraph: </lable>
            <input type="text" name="paragraph" value="{{ $about->paragraph }}"style="color:black" required><br>

            <lable>Hero Image: </lable>
            <img height="100" width="100" src="/aboutimage/{{ $about->image }}"><br>

            <lable>New Image</lable>
            <input type="file" name="image"><br>


            <input type="submit" value="Change" class="btn btn-primary" required>
        </form>
    </div>
     
   
   
<!---wrapper---->
</div>
</div>
</div>



    </div>
    @include('admin.scripts')
  </body>
</html>