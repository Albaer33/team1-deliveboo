<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Dish;
use App\Category;
use App\Restaurant;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $restaurants = Restaurant::all()->where('user_id', '=', $user->id);

        $dishes = Dish::all()->where('restaurant_id', '=', $user->createdRestaurants);

        $data = [
            'dishes' => $dishes,
            'user' => $user
        ];

        return view('admin.dishes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $user = Auth::user();

        $data = [
            'categories' => $categories,
            'user' => $user
        ];

        return view('admin.dishes.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $request->validate($this->getValidationRules());

        // fare una func per visible
        if(isset($form_data['visibile'])) {
            
            if($form_data['visibile'] === 'on'){
    
                $form_data['visibile'] = 1;
        
            }

        }
        else{

            $form_data['visibile'] = 0;

        }

        $new_dish = new Dish();
        $new_dish->fill($form_data);

        $new_dish->slug = $this->getUniqueSlug($form_data['nome']);

        if(isset($form_data['immagine'])) {
            // 1- Mettere l'immagine caricata nella cartella di Storage
            $img_path = Storage::put('dish_images', $form_data['immagine']);

            // 2- Salvare il path al file nella colonna immagine del piatto
            $new_dish->immagine = $img_path;
        }

        $user = Auth::user();
        
        $new_dish->restaurant_id = $user->createdRestaurants;

        $new_dish->save();

        return redirect()->route('admin.dishes.show',['dish' => $new_dish->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dish = Dish::findOrFail($id);
        $categories = Category::all();
        $user = Auth::user();
        
        $data = [
            'dish'=> $dish,
            'categories' => $categories,
            'user' => $user

        ];

        return view('admin.dishes.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dish = Dish::findOrFail($id);
        $categories = Category::all();
        $user = Auth::user();

        $data = [
            'dish'=> $dish,
            'categories' => $categories,
            'user' => $user
        ];

        return view('admin.dishes.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form_data = $request->all();

        if(isset($form_data['visibile'])) {
            
            if($form_data['visibile'] === 'on'){
    
                $form_data['visibile'] = 1;
        
            }

        }
        else{

            $form_data['visibile'] = 0;

        }

        $request->validate($this->getValidationRules());
        $dish = Dish::findOrFail($id);

        if($form_data['nome'] != $dish->nome){
            $form_data['slug'] = $this->getUniqueSlug($form_data['nome']);
        }
        
        if(isset($form_data['immagine'])) {
            // Cancello il file vecchio
            if($dish->immagine) {
                Storage::delete($dish->immagine);
            }

            // Faccio l'upload il nuovo file
            $img_path = Storage::put('dish_images', $form_data['immagine']);

            // Salvo nella colonna cover il path al nuovo file
            $form_data['immagine'] = $img_path;
        }

        $dish->update($form_data);

        return redirect()->route('admin.dishes.show',['dish'=>$dish->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dish = Dish::findOrFail($id);
        $dish->delete();
        return redirect()->route('admin.dishes.index');
    }

    protected function getValidationRules(){
        return[
            'nome'=>'required|max:30',
            'descrizione'=>'max:60000',
            'prezzo'=>'required|numeric|min:0.01|max:999.99',
            'ingredienti'=>'max:60000',
            'immagine'=>'image|max:3500',
            'categories_id' => 'exists:categories,id|nullable',
        ];
    }

    protected function getUniqueSlug($nome){
        //controllo se esiste un post con lo stesso slug
        //se si aggiungo un numero incrementale fino a non avere duplicati
        $slug = Str::slug($nome);
        $slug_base = $slug;
        $dish_found = Dish::where('slug','=',$slug)->first();

        $counter= 1;
        while($dish_found){

            $slug = $slug_base .'-'. $counter;
            $dish_found = Dish::where('slug','=',$slug)->first();
            $counter++;
        }
        return $slug;
    }
}
