<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;
use Illuminate\Support\Str;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();

        $data = [
            'dishes' => $dishes
        ];

        return view('admin.dishes.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dishes.create');
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

        if(isset($form_data['visibile'])) {
            
            if($form_data['visibile'] === 'on'){
    
                $form_data['visibile'] = 1;
        
            }

        }
        else{

            $form_data['visibile'] = 0;

        }

        $request->validate($this->getValidationRules());
        $new_dish = new Dish();
        $new_dish->fill($form_data);

        $new_dish->slug = $this->getUniqueSlug($form_data['nome']);
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

        $data = [
            'dish'=>$dish
        ];

        return view('admin.dishes.show',$data);
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

        $data = [
            'dish'=> $dish
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
            'prezzo'=>'required|numeric',
            'ingredienti'=>'max:60000',
            'immagine'=>'max:60000'

/*

            $table->string('nome', 30);
            $table->string('slug', 40)->unique();
            $table->text('descrizione')->nullable();
            $table->decimal('prezzo', 5, 2);
            $table->text('ingredienti')->nullable();
            // NULLABLE AD RIMUOVERE
            $table->text('immagine')->nullable();
            $table->boolean('visibile')->nullable();

*/
        ];
    }

    protected function getUniqueSlug($nome){
        //controllo se esiste un post con lo stesso slug
        //se si aggiungo un numero incremenale fino a non avere duplicati
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
