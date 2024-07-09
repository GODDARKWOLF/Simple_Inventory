<title>Creation</title>
<div>
    <section>
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
    </section>
</div>
