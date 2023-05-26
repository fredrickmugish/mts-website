
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

        <h2>Write services section1</h2>
        <form action="{{ url('/service_sect1') }}" method="post" enctype="multipart/form-data">
            @csrf
            <lable>Heading: </lable>
            <input type="text" name="head" style="color:black" required><br>

            <lable>Description: </lable>
            <input type="text" name="description" style="color:black" required><br>

            <input type="submit" value="Write" class="btn btn-primary" required>
        </form>
        <br><br>

     <h2>Write services section</h2>
        <form action="{{ url('/service_sect') }}" method="post" enctype="multipart/form-data">
            @csrf
            <lable>Service Image: </lable>
            <input type="file" name="image" required><br>

            <lable>Title: </lable>
            <input type="text" name="title" style="color:black" required><br>
            <lable>Paragraph: </lable>
            <input type="text" name="paragraph" style="color:black" required><br>

            <input type="submit" value="Write" class="btn btn-primary" required>
        </form>

        <br><br>
        <h2>Current Services section</h2>
        <table style="background-color: black">
          <tr style="background-color: skyblue; color:black">
            <th>Image</th>
            <th>Title</th>
            <th>Paragraph</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        
          @foreach ($service as $service)
          <tr align="center">
            <td><img src="serviceimage/{{ $service->image }}" height="100" width="100"></td>
            <td>{{ $service->title }}</td>
            <td>{{ $service->paragraph }}</td>
            <td><a href="{{ url('/update_service', $service->id )}}" class="btn btn-primary">Update</a></td>
            <td><a href="{{ url('/delete_service', $service->id) }}" class="btn btn-danger">Delete</a></td>
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