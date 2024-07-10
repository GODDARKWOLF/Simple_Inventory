<?php

  namespace App\Http\Controllers;

  use App\Http\Controllers\Controller;
  use App\Models\Item;
  use illumiate\http\Request;
  use Illuminate\Support\Facades\Route;

class CrudController extends Controller
{
  //method to store data into the database
  public function index()
  {
     return view("create"); //gets the create page so that user can input the data
  }

  public function store()
  {
       request()->validate([
        'Item_name' => 'required',
        'Info'=> 'required|max:240',
        'Quantity'=> 'required'
       ]); //This makes sure that information has been inputed 

      $item = Item::create([
        'Item_name'=>request()->get('Item_name',''), //requests to get data from the input tag called Item_name
        'Description'=>request()->get('Info',''), //requests to get data from the textbox called info
        'Quantity'=>request()->get('Quantity',0) //requests to get data from the input tag called Quantity
      ]); //create function that adds data into the table
        
      return redirect()->route('display')->with('success','Item has been added to the inventory'); //function redirects the user to the page that is displaying the table
  }

  //method to shows the data in the database in a table
  public function display_table()
  {
    $data = Item::all(); //this will fetch all the data in the table

    return view('home', ['table_data' => $data]); //displays table on home page

  }

  public function edit_display(Item $id)
  {
    $data = Item::all();

    return view('edit',compact('id'),['table_data' => $data]);
  }

  public function edit_data(Item $id,) //Using the model to get the id of the element
  {
    request()->validate([
      'Item_name' => 'required',
      'Info'=> 'required|max:240',
      'Quantity'=> 'required'
     ]); //This makes sure that information has been inputed 

      $id->Item_name = request()->get('Item_name',''); //requests to get data from the input tag called Item_name
      $id->Description = request()->get('Info',''); //requests to get data from the textbox called info
      $id->Quantity = request()->get('Quantity',0); //requests to get data from the input tag called Quantity

      $id->save();
      
    return redirect()->route('display')->with('Updated','Item has been updated');
  }

  //method deleting an item from the table/database
  public function delete_data(Item $id) //Using the model to get the id of the element
  {
    //'Item $id' is the same as '$id = Item::findorfail($id)'
    $id -> delete(); //deletes item located at this id

    return redirect()->route('display')->with('deletion_done','Item has been deleted.'); //function redirects the user to the page that is displaying the table
  }

}
