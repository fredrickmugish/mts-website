

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
      <h2>Write hero section</h2>
        <form action="{{ url('/hero_section') }}" method="post" enctype="multipart/form-data">
            @csrf
            <lable>Title: </lable>
            <input type="text" name="title" style="color:black" required><br>
            <lable>Paragraph: </lable>
            <input type="text" name="paragraph" style="color:black" required><br>
            <lable>Hero Image: </lable>
            <input type="file" name="image" required><br>
            <input type="submit" value="Write" class="btn btn-primary" required>
        </form>

        <br><br>

<h2>Current hero section</h2>
<table style="background-color: black">
  <tr style="background-color: skyblue; color:black">
    <th>Title</th>
    <th>Paragraph</th>
    <th>Image</th>
    <th>Action</th>
    <th>Action</th>
  </tr>

  @foreach ($hero as $hero)
  <tr align="center">
    <td>{{ $hero->title }}</td>
    <td>{{ $hero->paragraph }}</td>
    <td><img src="heroimage/{{ $hero->image }}" height="100" width="100"></td>
    <td><a href="{{ url('/update_hero', $hero->id )}}" class="btn btn-primary">Update</a></td>
    <td><a href="{{ url('/delete_hero', $hero->id) }}" class="btn btn-danger">Delete</a></td>
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