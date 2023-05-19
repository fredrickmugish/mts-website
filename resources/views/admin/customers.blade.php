
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
   
     
   <div style="position: relative; top:60px">
<table style="background-color: black">
<tr style="background-color: skyblue; color:black">
    <th style="padding: 10px">Customer Name</th>
    <th style="padding: 10px">Email</th>
    <th style="padding: 10px">Message</th>
    <th style="padding: 10px">Action</th>
</tr>

@foreach ($contact as $contact )
<tr align="center">
    <td>{{ $contact->name }}</td>
    <td>{{ $contact->email }}</td>
    <td>{{ $contact->message }}</td>
    <td><a class="btn btn-primary">Send Email</a></td>
</tr> 
@endforeach
</table>
</div>
   
    </div>
    @include('admin.scripts')
  </body>
</html>