<html>
<head>
    <title>View Students</title>
    <style>
        table {
  border-collapse: collapse;
  border: 1px solid black;
} 
th,td {
  border: 1px solid black;
}
    table.d {
        table-layout: fixed;
        width: 100%;  
    }
    </style>
</head>
<body>
<h2>Student Details</h2>
<table class="d">
  <tr>
    <th>Id</th>
    <th>Student Name</th>
    <th>Contact</th>
    
    <th>Profile</th>
    <th>Batch Year</th>
    <th>Working Company</th>
    <th>Working Designation</th>
    <th>Package</th>
  </tr>
  <?php
  $i=1;
  ?>
  @foreach($student as $s)

  <tr>
    <td>{{$i}}</td>
    <td>{{$s->name}}</td>
    <td>{{$s->mobile}}</td>
    <td><img src="{{asset('image')}}/{{$s->profile}}" height="50px" width="50px"></td>
    <td>{{$s->batch_year}}</td>
    <td>{{$s->working_company}}</td>
    <td>{{$s->working_designation}}</td>
    <td>{{$s->here_package}}</td>
  </tr>
  <?php
  $i++;
  ?>
  @endforeach
 </table>
</body>
</html>