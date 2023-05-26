
<!DOCTYPE html>
<html lang="en">
  <head>
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
      <h2>Write about section</h2>
        <form action="{{ url('/about_sect') }}" method="post" enctype="multipart/form-data">
            @csrf
            <lable>Heading: </lable>
            <input type="text" name="head" style="color:black" required><br>
            <lable>Title: </lable>
            <input type="text" name="title" style="color:black" required><br>
            <lable>Paragraph: </lable>
            <input type="text" name="paragraph" style="color:black" required><br>
            <lable>About Image: </lable>
            <input type="file" name="image" required><br>
            <input type="submit" value="Write" class="btn btn-primary" required>
        </form>

        <br><br>

        <h2>Current about section</h2>
        <table style="background-color: black">
          <tr style="background-color: skyblue; color:black">
            <th>Heading</th>
            <th>Title</th>
            <th>Paragraph</th>
            <th>Image</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        
          @foreach ($about as $about)
          <tr align="center">
            <td>{{ $about->head }}</td>
            <td>{{ $about->title }}</td>
            <td>{{ $about->paragraph }}</td>
            <td><img src="aboutimage/{{ $about->image }}" height="100" width="100"></td>
            <td><a href="{{ url('/update_about', $about->id )}}" class="btn btn-primary">Update</a></td>
            <td><a href="{{ url('/delete_about', $about->id) }}" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
          
        </table>
    </div>
     
   

<!---wrapper---->
</div>
</div>
</div>


   
    </div>
    @include('admin.scripts')
  </body>
</html>