<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Restaurant;
use App\Dish;

class RestaurantController extends Controller
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

        $data = [
            'restaurants' => $restaurants,
            'user' => $user
        ];

        return view('admin.restaurants.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $restaurant_id = Restaurant::all()->where('user_id', '=', $user->id);

        /* dd($restaurant_id); */

        $data = [
            'user' => $user,
            'restaurant' => $user->restaurant,
            'restaurant_id' => $restaurant_id
        ];

        return view('admin.restaurants.create', $data);
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

        $user = Auth::user();
        $restaurant = new Restaurant();

        $restaurant->fill($form_data);
        $restaurant->user_id = $user->id;
        $restaurant->save();

        if (!isset($user->createdRestaurants)) {
            $user->createdRestaurants = $restaurant->id;

            $user->save();
        }
        else{

            $restaurants = Restaurant::all()->where('user_id', '=', $user->id);

            $data = [
                'restaurants' => $restaurants
            ];

            return view('admin.restaurants.index', $data);

        }


        return redirect()->route('admin.restaurants.show',['restaurant' => $restaurant->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);

        $user = Auth::user();

        $data = [

            'restaurants' => $restaurant,
            'user' => $user
            
        ];

        return view('admin.restaurants.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurants = Restaurant::findOrFail($id);
        
        $data = [

            'restaurants' => $restaurants,
        ];

        return view('admin.restaurants.edit', $data);
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

        $request->validate($this->getValidationRules());
        
        $restaurants = Restaurant::findOrFail($id);

        if(isset($form_data['immagine'])) {
            // Cancello il file vecchio
            if($restaurants->immagine) {
                Storage::delete($restaurants->immagine);
            }

            // Faccio l'upload il nuovo file
            $img_path = Storage::put('restaurant_images', $form_data['immagine']);

            // Salvo nella colonna cover il path al nuovo file
            $form_data['immagine'] = $img_path;
        }

        $restaurants->update($form_data);

/*         $user_info = $user->userInfo ? $user->userInfo : new UserInfo();
        $user_info->phone = $form_data['user-telephone'];
        $user_info->address = $form_data['user-address'];
        $user_info->user_id = $user->id;
        $user_info->save(); */

        return redirect()->route('admin.restaurants.show',['restaurant' => $restaurants->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurants = Restaurant::findOrFail($id);

        $dishes = Dish::all()->where('restaurants_id', '=', $restaurants->id);

        $user = Auth::user();

        foreach($dishes as $dish){

            $dish->delete();

        }

        $user->createdRestaurants = null;

        $user->save();

        $restaurants->delete();

        return redirect()->route('admin.restaurants.index');
    }

    protected function getValidationRules(){
        return[
            'nome_attivita'=>'required|max:30',
            'P_IVA'=>'required|max:50',
            'telefono'=>'required|max:15',
            'indirizzo'=>'required|max:50',
            'immagine'=>'image|max:3500',
            'user_id' => 'exists:user,id|nullable',
        ];
    }

}
