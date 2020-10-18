<?php

namespace App\Http\Controllers;

use App\Models\DamageRelation;
use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Pokemon::get(), 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        //
    }

    public function get_pokemons(Request $request)
    {
        $data=$request->all();
        if(isset($data['sort'])){
            $pokemons=Pokemon::with('typeOne','typeTwo')
            ->where(function($query) use($data){
                if(isset($data['name']))
                {
                    $query->where('name','LIKE', '%'.strtolower($data['name']).'%');
                }
                if(isset($data['filter:type']))
                {
                    $type=Type::where('name',$data['filter:type'])->first();
                    $query->where('type_one_id',$type->id)
                        ->orWhere('type_two_id',$type->id);
                }
            })->orderBy($data['sort'],'asc')->get();
        }
        else{
            $pokemons=Pokemon::with('typeOne','typeTwo')
            ->where(function($query) use($data){
                if(isset($data['name']))
                {
                    $query->where('name','LIKE', '%'.strtolower($data['name']).'%');
                }                if(isset($data['filter:type']))
                {
                    $type=Type::where('name',$data['filter:type'])->first();
                    $query->where('type_one_id',$type->id)
                        ->orWhere('type_two_id',$type->id);
                }
            })->get();
        }

        $pokemons = $this->get_damage_relation($pokemons);
        return response()->json([
            "count"=>$pokemons->count(),
            "results"=>$pokemons
        ], 201);
    }

    public function get_pokemons_by_id(Request $request, $ids)
    {
        $data=$request->all();
        $ids=explode(",", $request->ids);
        if(isset($data['sort'])){
            $pokemons=Pokemon::with('typeOne','typeTwo')
            ->where(function($query) use($data, $ids){
                if(isset($data['filter:type']))
                {
                    $type=Type::where('name',$data['filter:type'])->first();
                    $query->where('type_one_id',$type->id)
                        ->orWhere('type_two_id',$type->id);
                }
                if(isset($data['name']))
                {
                    $query->where('name','LIKE', '%'.strtolower($data['name']).'%');
                }
                if(isset($ids))
                {
                    $query->whereIn('id',$ids);
                }
            })->orderBy($data['sort'],'asc')->get();
        }
        else{
            $pokemons=Pokemon::with('typeOne','typeTwo')
            ->where(function($query) use($data, $ids){
                if(isset($data['filter:type']))
                {
                    $type=Type::where('name',$data['filter:type'])->first();
                    $query->where('type_one_id',$type->id)
                        ->orWhere('type_two_id',$type->id);
                }
                if(isset($data['name']))
                {
                    $query->where('name','LIKE', '%'.strtolower($data['name']).'%');
                }
                if(isset($ids))
                {
                    $query->whereIn('id',$ids);
                }
            })->get();
        }

        $pokemons = $this->get_damage_relation($pokemons);
        return response()->json([
            "count"=>$pokemons->count(),
            "results"=>$pokemons
        ], 201);
    }

    public function get_damage_relation($pokemons){
        $pokemons->map(function($pokemon){
            //Fuerte contra
            $pokemon->double_damage_to = DamageRelation::
            join('types','damage_relations.lose_type_id','=','types.id')
            ->whereIn('damage_relations.win_type_id',[$pokemon->type_one_id,$pokemon->type_two_id])
            ->select('types.id', 'name')
            ->get();
            //Devil contra
            $pokemon->double_damage_from = DamageRelation::
            join('types','damage_relations.win_type_id','=','types.id')
            ->whereIn('damage_relations.lose_type_id',[$pokemon->type_one_id,$pokemon->type_two_id])
            ->select('types.id', 'name')
            ->get();
        });
        return $pokemons;
    }
}
