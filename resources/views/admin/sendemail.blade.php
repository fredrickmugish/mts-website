

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
<h1 style="font-size:25px">Send email to {{ $contact->email }}</h1>

@if (session()->has('message'))
   <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"></button>
     {{ session()->get('message')}}
   </div>
   @endif

<form action="{{ url('/send_email', $contact->id) }}" method="POST">
    @csrf
<div>
    <lable>Email Greeting: </lable>
    <input style="color:black" type="text" name="greeting"></input><br>

    <lable>Email Body: </lable>
    <input style="color:black" type="text" name="body"></input><br>

    

    <lable>Email Endpart: </lable>
    <input style="color:black" type="text" name="endpart"></input><br>

    <input type="submit" value="send email" class="btn btn-primary">

</div>
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