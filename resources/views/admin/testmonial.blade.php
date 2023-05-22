
<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.navbar')
    


     <div style="position: relative; top:100px;">

        <h2>Write testmonial section1</h2>
        <form action="{{ url('/testmonial_sect1') }}" method="post" enctype="multipart/form-data">
            @csrf
            <lable>Heading: </lable>
            <input type="text" name="head" style="color:black" required><br>

            <lable>Description: </lable>
            <input type="text" name="description" style="color:black" required><br>

            <input type="submit" value="Write" class="btn btn-primary" required>
        </form>
      
        <br><br>

        <h2>Write Testmonial section</h2>
        <form action="{{ url('/testmonial_sect') }}" method="post" enctype="multipart/form-data">
            @csrf

            <lable>Message: </lable>
            <input type="text" name="paragraph" style="color:black" required><br>

            <lable>Image: </lable>
            <input type="file" name="image" required><br>

            <lable>Name: </lable>
            <input type="text" name="name" style="color:black" required><br>
            <lable>Professional: </lable>
            <input type="text" name="professional" style="color:black" required><br>

            <input type="submit" value="Write" class="btn btn-primary" required>
        </form>
    
        <br><br>
        <h2>Current Testmonial section</h2>
        <table style="background-color: black">
          <tr style="background-color: skyblue; color:black">
            <th>Message</th>
            <th>Image</th>
            <th>Name</th>
            <th>Professional</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        
          @foreach ($testmonial as $testmonial)
          <tr align="center">
            <td>{{ $testmonial->paragraph }}</td>
            <td><img src="testmonialimg/{{ $testmonial->image }}" height="100" width="100"></td>
            <td>{{ $testmonial->name }}</td>
            <td>{{ $testmonial->professional }}</td>
            <td><a href="{{ url('/update_testmonial', $testmonial->id )}}" class="btn btn-primary">Update</a></td>
            <td><a href="{{ url('/delete_testmonial', $testmonial->id) }}" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
          
        </table>
   
    </div>
   
    </div>
    @include('admin.scripts')
  </body>
</html>