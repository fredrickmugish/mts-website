
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

        <h2>Write portfolio section1</h2>
        <form action="{{ url('/portfolio_sect1') }}" method="post" enctype="multipart/form-data">
            @csrf
            <lable>Heading: </lable>
            <input type="text" name="head" style="color:black" required><br>

            <lable>Description: </lable>
            <input type="text" name="description" style="color:black" required><br>

            <input type="submit" value="Write" class="btn btn-primary" required>
        </form>
       
        <br><br>
        <h2>Write portfolio section</h2>
        <form action="{{ url('/portfolio_sect') }}" method="post" enctype="multipart/form-data">
            @csrf
            <lable>Portfolio Image: </lable>
            <input type="file" name="image" required><br>

            <lable>Title: </lable>
            <input type="text" name="title" style="color:black" required><br>
          
            <input type="submit" value="Write" class="btn btn-primary" required>
        </form>
   
    </div>
   
    </div>
    @include('admin.scripts')
  </body>
</html>