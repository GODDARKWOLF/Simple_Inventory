<title>Creation</title>
<style>
  .wrapper-main
  {
    margin: auto;
    width: 500px;
  }

  body
  {

    font-family: 'Franklin Gothic Medium';
    font-size: medium;
    margin: 10px;
    background-color: gray;

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
    width: 25%;
    height: 25%;
    resize: both;
  }
</style>

<div>
    <section class="wrapper-main">
      <body>
        
        <form action="{{route('list_create')}}" method="POST">
          @csrf
          <label for="Item_name">Item</label>
          <br>
          <input type="text" name="Item_name" id="Item" placeholder="Enter the name of the item">
          @error('Item_name')
            <span class="fs-6" text='danger'>{{$message}}</span>
          @enderror
          <br><br>
  
          <label for="Info">Info</label>
          <br>
          <textarea name="Info" id="Info" placeholder="Enter infomation that describes this item"></textarea>
          @error('Info')
            <span class="fs-6" text='danger'>{{$message}}</span>
          @enderror
          <br><br>
  
          <label for="Quantity">Amount</label>
          <br>
          <input type="number" name="Quantity" id="Quantity">
          @error('Quantity')
            <span class="fs-6" text='danger'>{{$message}}</span>
          @enderror
          <br><br>
  
          <button type="submit">save</button>
  
        </form>

      </body>
      
    </section>
</div>
