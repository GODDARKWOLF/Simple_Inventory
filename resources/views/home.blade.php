<title>Inventory</title>
<link rel="stylesheet" href="/resources/css/main.css">

<section class="create">
  <label for="add">Do you wish to add an item?</label>
  <a href="{{route('list_display')}}"><button id="add" type="submit">Yes</button></a>
  <br><br>
</section>

@if (@session()->has('success'))
  {{ 'Data has been added' }}
@endif

<section class="main_display">
  <body>
    <h1>Inventory</h1>
  
    <table border="2">
      <thead>
        <th>ID</th>
        <th>Item_Name</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Date_created</th>
        <th>Date_updated</th>
      </thead>
      <tbody>
  
        <!-- for loop insert the data from the database into  a table -->
        @foreach ($table_data as $data)
          <tr>
            <td>{{$data -> id}}</td>
          <td>{{$data -> Item_name}}</td>
          <td>{{$data -> Description}}</td>
          <td>{{$data -> Quantity}}</td>
          <td>{{$data -> created_at}}</td>
          <td>{{$data -> updated_at}}</td>
        
          <!-- button to delete elements from the table/database -->
          <td>
            <!-- we'er using the data variable from the for loop condition -->
            <a mx-2 href="{{route('edit_page',$data->id)}}"><button>Edit</button></a>
            <form action="{{route('delete_item',['id' => $data->id])}}" method="POST">
              @csrf
              @method('DELETE') <!-- changes the post method to a delete method -->
              <button type="submit">Delete</button>
            </form>
          </td>
  
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
  <br><br>
</section>

@if (@session()->has('deletion_done'))
  {{ 'Data has been deleted' }}
@endif
@if (@session()->has('Updated'))
  {{ 'Data has been updated' }}
@endif