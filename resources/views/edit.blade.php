@include('home')
<title>Editing Page</title>
<style>
  .edit
  {
    margin: auto;
    width: 500px;
  }

  body
  {

    font-family: 'Franklin Gothic Medium';
    font-size: 18;
    text-align: center;
    margin: 10px;
    background-color: lightblue;

  }

  button
  {
    background-color: #ccc;
  }

  button:hover
  {
    background-color: hotpink;
    cursor: pointer;
  }

  textarea, input
  {
    border: 1px solid #ccc;
  }

  textarea:focus, input[type="text"]:focus
  {
    outline: 1px solid purple;
  }

  textarea
  {
    width: 50%;
    height: 50%;
    resize: both;
  }

  input[type="text"],textarea,input[type="number"]
  {
    background-color: rgb(153, 235, 135);
  }

  input[type="text"],textarea,input[type="number"],button
  {
    padding: 10px;
    border-radius: 10px;
  }

</style>

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
