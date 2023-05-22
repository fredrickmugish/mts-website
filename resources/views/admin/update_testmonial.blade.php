
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
     @include('admin.navbar')
     
    <div style="position: relative; top:100px;">




      <h2>Update testmonial section</h2>
        <form action="{{ url('/updatestmonial', $testmonial->id) }}" method="post" enctype="multipart/form-data" >
            @csrf

            <lable>Paragraph: </lable>
            <input type="text" name="paragraph" value="{{ $testmonial->paragraph }}"style="color:black" required><br>

            <lable>Testmonial Image: </lable>
            <img height="100" width="100" src="/testmonialimg/{{ $testmonial->image }}"><br>

            <lable>New Image</lable>
            <input type="file" name="image"><br>

            <lable>Name: </lable>
            <input type="text" name="name" value="{{ $testmonial->name }}" style="color:black" required><br>
            
            <lable>Professional: </lable>
            <input type="text" name="professional" value="{{ $testmonial->professional }}" style="color:black" required><br>
            
            

            <input type="submit" value="Change" class="btn btn-primary" required>
        </form>
    </div>
     
   
   
    </div>
    @include('admin.scripts')
  </body>
</html>