
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

       
        <h2>Logo section</h2>
        <form action="{{ url('/upload_logo') }}" method="post" enctype="multipart/form-data">
            @csrf
            <lable>Logo Image: </lable>
            <input type="file" name="image" required><br>

            <lable>Name: </lable>
            <input type="text" name="name" style="color:black" required><br>
          
            <input type="submit" value="Write" class="btn btn-primary" required>
        </form>


        <br><br>
        <h2>Current Logo</h2>
        <table style="background-color: black">
          <tr style="background-color: skyblue; color:black">
            <th>Image</th>
            <th>Title</th>
            <th>Action</th>
          </tr>
        
          @foreach ($logo as $logo)
          <tr align="center">
            <td><img src="logoimage/{{ $logo->image }}" height="100" width="100"></td>
            <td>{{ $logo->name }}</td>
            <td><a href="{{ url('/delete_logo', $logo->id) }}" class="btn btn-danger">Delete</a></td>
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