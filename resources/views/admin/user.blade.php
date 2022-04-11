<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller" style="float: left;">

    @include("admin.navbar")
    <h1>Users</h1>
    <table bgcolor="gray" border="2px">
      <tr>
        <th style="padding:30px;">Name</th>
        <th style="padding:30px;">Email</th>
        <th style="padding:30px;">Action</th>
      </tr>

      @foreach($data as $data)
      <tr align="center">
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>

        @if($data->usertype =="0")
        <td><a href="{{('/deleteuser')}}">Delete</a></td>

        @else{
        <td><a>Not Allowed</a></td>
      }
      @endif
      </tr>

      @endforeach
    </table>
  </div>

    @include("admin.adminscript")
  </body>
</html>