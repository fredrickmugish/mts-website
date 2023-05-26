
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
            


    <div style="position: relative; overflow: auto;">
      <h2>Update service section</h2>
        <form action="{{ url('/updateservice', $service->id) }}" method="post" enctype="multipart/form-data" >
            @csrf

            <lable>Service Image: </lable>
            <img height="100" width="100" src="/serviceimage/{{ $service->image }}"><br>

            <lable>New Image</lable>
            <input type="file" name="image"><br>

            <lable>Title: </lable>
            <input type="text" name="title" value="{{ $service->title }}" style="color:black" required><br>
            <lable>Paragraph: </lable>
            <input type="text" name="paragraph" value="{{ $service->paragraph }}"style="color:black" required><br>

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