@include('home')
<title>Editing Page</title>
<!-- I just copied the code in create and changed the form method to put and the placeholder 
  to value so that it has the right information to change -->
<section class="edit">
  <body>
    <form action="{{route('edit_item',$id->id)}}" method="POST">
      @csrf
      @method('PUT')
      <label for="Item_name">Item</label>
          <br>
          <input type="text" name="Item_name" id="Item" value="{{$id->Item_name}}">
          <br><br>
  
          <label for="Info">Info</label>
          <br>
          <textarea name="Info" id="Info">{{$id->Description}}</textarea>
          <br><br>
  
          <label for="Quantity">Amount</label>
          <br>
          <input type="number" name="Quantity" id="Quantity" value="{{$id->Quantity}}">
          <br><br>
  
          <button type="submit">Update</button>
    </form>
    </body>
</section>
