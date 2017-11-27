@extends('layouts.app')


@section('content')

<table class="table table-striped">
<thead>
  <tr>
    <th>ID Card</th>
    <th>Firstname</th>
    <th>Lastname</th>
    
  </tr>
</thead>
<tbody id="stdtable">
</tbody>
</table>

<div id="strow">

</div>


<input type="text" placeholder="filter by name" id="search-name" />

<hr>

<div id="students-result">

</div>

<hr>

@forelse ($students as $student)

<div>

<p>ID: {{ $student -> id }}</p>
<p>ID Card: {{ $student -> id_card }}</p>
<p>First Name: {{ $student -> first_name }}</p>
<p>Last Name: {{ $student -> last_name }}</p>
<p>Career: {{ $student -> career }}</p>

</div>
<hr>
@empty
@endforelse

@stop

@section('scripts')
<script>

$(function () {
  $('#search-name').on('keypress', function () {

    if (this.value != '') {
      $.ajax({
        url : '/api/students/?first_name=' + this.value,
        type : "get",
        success : function(students) {
          students = JSON.parse(students);
          // ES2015 ECMA Script 6
          // v6 JS
          for (student of students) {
            console.log(student);
            var html = '<div onclick="send_click(this)" first_name="' + student.first_name + '" \
            last_name="' + student.last_name +  '" id_card="' + student.id_card + '" >';
            html += '<p><strong>Name: </strong>' + student.first_name + '</p>';
            html += '<p><strong>Last Name: </strong>' + student.last_name + '</p>';
            html += '<hr>';
            html += '</div>';
            $('#students-result').append(html);
          }
        },
        error: function() {
          connectionError();
        }
      });
    }

  });

});


function send_click(object) {

  var row_html = '<tr> \
    <td>' + object.getAttribute('id_card') + '</td> \
    <td>' + object.getAttribute('first_name') + '</td> \
    <td>' + object.getAttribute('last_name') + '</td>\
  </tr>';
  $('#stdtable').append(row_html);
}


</script>
@stop