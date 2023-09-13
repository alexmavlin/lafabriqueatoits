<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Programme\StoreRequest;
use App\Http\Requests\Admin\Programme\UpdateRequest;
use Illuminate\Support\Str;
use App\Models\Department;
use App\Models\Habitation;
use App\Models\Image;
use App\Models\Lot;
use Illuminate\Http\Request;

require(app_path('Helpers/Admin/Programme/Store.php'));
require(app_path('Helpers/Admin/Programme/Update.php'));

class ProgrammeController extends Controller
{
    public function index() {
        $data = [
            'habitations' => Habitation::   with('lots')->
                                            with(['images' => function($q) {
                                                $q->where('is_first', 1)->get();
                                            }])->
                                            orderBy('id', 'DESC')->
                                            paginate(10),
        ];
        //dd(count($data['habitations'][2]->images));
        return view('admin.programme.index', compact('data'));
    }
    public function create() {
        $data = [
            'departments' => Department::all(),
        ];
        return view('admin.programme.create', compact('data'));
    }


    public function store(StoreRequest $request) {
        $validated_data = $request->validated();

        // Prepare Store Data - (App\Helpers\Admin\Programme\Store)
        $store_data = prepare_store_data_for_habitations($validated_data);

        // Save Habitation
        $habitation = Habitation::create($store_data);

        // Saving Images - (App\Helpers\Admin\Programme\Store)
        store_images_for_habitation($validated_data, $habitation);

        // Saving Lots - (App\Helpers\Admin\Programme\Store)
        store_lots_for_habitation($validated_data, $habitation);

        return redirect()->route('admin.programme.index');
    }
    public function edit(Habitation $habitation) {

        $data = [
            'habitation' => $habitation,
            'lots' => $habitation->lots()->get(),
            'departments' => Department::all(),
        ];
        //dd(isset($data['lots'][0]) ? $data['lots'][0]->name : '');
        return view('admin.programme.edit', compact('data'));
    }
    public function update(Habitation $habitation, UpdateRequest $request) {
        $validated_data = $request->validated();

        // Prepare Update Data - (App\Helpers\Admin\Programme\Update)
        $store_data = prepare_update_data_for_habitations($validated_data);

        // Update Habitation
        $habitation->update($store_data);

        // Saving Images - (App\Helpers\Admin\Programme\Store)
        update_images_for_habitation($validated_data, $habitation);

        // Saving Lots - (App\Helpers\Admin\Programme\Store)
        update_lots_for_habitation($validated_data, $habitation);

        return redirect()->route('admin.programme.edit', $habitation->id);
    }
    public function delete(Habitation $habitation) {
        //dd($habitation->images()->get());
        if(count($habitation->images()->get())) {
            foreach($habitation->images()->get() as $image) {
                if($image->src) {
                    if(file_exists(public_path() . $image->src)){
                        unlink(public_path() . $image->src);
                    }
                }
                $image_instance = Image::find($image->id);
                $image_instance->delete();
            }
        }
        if(count($habitation->lots()->get())) {
            foreach($habitation->lots()->get() as $lot) {
                if($lot->img) {
                    if(file_exists(public_path() . $lot->img)) {
                        unlink(public_path() . $lot->img);
                    }
                }
                $lot_instance = Lot::find($lot->id);
                $lot_instance->delete();
            }
        }

        $habitation->delete();
        return redirect()->route('admin.programme.index');
    }
}
