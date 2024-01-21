<?php

namespace App\Http\Controllers;

use App\Http\Resources\WishListResource;
use App\Models\WishList;
use App\Http\Requests\StoreWishListRequest;
use App\Http\Requests\UpdateWishListRequest;
use App\Http\Resources\WishListCollection;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return new WishListCollection(WishList::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWishListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWishListRequest $request)
    {
        //        
        $data = $request->validated();
        $row_exists = WishList::where('user_id', '=', $data['user_id'])->where('product_id', '=', $data['product_id'])->first();
        if ($row_exists) {
            return "juego ya agregado";
        } else {
            $wishList = WishList::create($data);
            return response(new WishListResource($wishList), 201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function show(WishList $wishList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWishListRequest  $request
     * @param  \App\Models\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWishListRequest $request, WishList $wishList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $response = WishList::find($id);
        return $response->delete();
    }
}
