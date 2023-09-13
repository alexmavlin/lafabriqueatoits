<?php

use App\Models\Image;
use App\Models\Lot;
use Illuminate\Support\Str;

function prepare_update_data_for_habitations($validated_data) {
    
    $lot_prices = find_min_lot_price($validated_data);
    $delivery_date = prepare_delivery_date($validated_data);
    
    $store_data = [
        'slug' => Str::slug($validated_data['link']),
        'title' => $validated_data['title'],
        'meta_title' => $validated_data['meta_title'],
        'h1_title' => $validated_data['h1_title'],
        'h2_title' => isset($validated_data['h2_title']) ? $validated_data['h2_title'] : '',
        'h3_title' => $validated_data['h3_title'],
        'min_price' => !empty($lot_prices) ? min($lot_prices) : '',
        'description' => isset($validated_data['description']) ? $validated_data['description'] : '',
        'mini_descreption' => isset($validated_data['mini_descreption']) ? $validated_data['mini_descreption'] : '',
        'meta_keywords' => $validated_data['meta_keywords'],
        'meta_description' => $validated_data['meta_description'],
        'type' => $validated_data['type'],
        'devices' => $validated_data['devices'],
        'address' => $validated_data['address'],
        'department_id' => isset($validated_data['department_id']) ? $validated_data['department_id'] : '',
        'lon' => isset($validated_data['lon']) ? $validated_data['lon'] : '',
        'lat' => isset($validated_data['lat']) ? $validated_data['lat'] : '',
        'city' => isset($validated_data['city']) ? $validated_data['city'] : '',
        'delivery_date' => isset($validated_data['delivery_date']) ? $delivery_date : '',
        'trimester' => isset($validated_data['trimester']) ? $validated_data['trimester'] : '',
        'city_info_title_1' => isset($validated_data['city_info_title_1']) ? $validated_data['city_info_title_1'] : '',
        'city_info_title_2' => isset($validated_data['city_info_title_2']) ? $validated_data['city_info_title_2'] : '',
        'city_info_title_3' => isset($validated_data['city_info_title_3']) ? $validated_data['city_info_title_3'] : '',
        'city_info_title_4' => isset($validated_data['city_info_title_4']) ? $validated_data['city_info_title_4'] : '',
        'city_info_1' => isset($validated_data['city_info_1']) ? $validated_data['city_info_1'] : '',
        'city_info_2' => isset($validated_data['city_info_2']) ? $validated_data['city_info_2'] : '',
        'city_info_3' => isset($validated_data['city_info_3']) ? $validated_data['city_info_3'] : '',
        'city_info_4' => isset($validated_data['city_info_4']) ? $validated_data['city_info_4'] : '',
        'is_new' => isset($validated_data['is_new']) ? 1 : 0,
        'breadcrumb' => $validated_data['breadcrumb'] ? $validated_data['breadcrumb'] : '',
        'is_selected' => isset($validated_data['is_selected']) ? 1 : 0,
    ];
    return $store_data;
}

function update_images_for_habitation($validated_data, $habitation) {
    for($i = 1; $i <= 5; $i++) {
        if(isset($validated_data['image_' . $i])) {

            // Existing Image
            $image = Image::where([
                ['habitations_id', $habitation->id],
                ['is_first', $i],
            ])->first();

            if($image) {
                $file_path = $image->src;
                if(file_exists(public_path() . $file_path)) {
                    unlink(public_path() . $file_path);
                }

                // Uploading new Image
                $file_name = $validated_data['image_' . $i]->getClientOriginalName();
                $db_file_path = "/uploads/images/habitations/" . $file_name;
                $validated_data['image_' . $i]->move(public_path('uploads/images/habitations'), $file_name);

                $update_data = [
                    'src' => $db_file_path,
                    'alt' => isset($validated_data['alt_' . $i]) ? $validated_data['alt_' . $i] : '',
                    'habitations_id' => $habitation->id,
                    'is_first' => $i === 1 ? 1 : 0,
                ];
                $image_instance = Image::find($image->id);
                $image_instance->update($update_data);
            } else {
                for($i = 1; $i <= 5; $i++) {
                    if(isset($validated_data['image_' . $i])) {
                        $file_name = $validated_data['image_' . $i]->getClientOriginalName();
                        $db_file_path = "/uploads/images/habitations/" . $file_name;
                        $validated_data['image_' . $i]->move(public_path('uploads/images/habitations'), $file_name);
            
                        $store_data = [
                            'src' => $db_file_path,
                            'alt' => isset($validated_data['alt_' . $i]) ? $validated_data['alt_' . $i] : '',
                            'habitations_id' => $habitation->id,
                            'is_first' => $i,
                        ];
                        Image::create($store_data);
                    }
                }
            }
            
            // dd($file_path);
            
        }
    }
}

function update_lots_for_habitation($validated_data, $habitation) {
    for($i = 1; $i <= 4; $i++) {
        // dd($validated_data);
        if($validated_data['lot_id_' . $i]) {
            $lot = Lot::find($validated_data['lot_id_' . $i]);

            if($lot) {
                if(isset($validated_data['img_lot_' . $i])){
                    if(!empty($lot->img)) {
                        $file_path = $lot->img;
                        if(file_exists(public_path() . $file_path)) {
                            unlink(public_path() . $file_path);
                        }
                    }
                    $file_name = $validated_data['img_lot_' . $i]->getClientOriginalName();
                    $db_file_path = "/uploads/images/lots/" . $file_name;
                    $validated_data['img_lot_' . $i]->move(public_path('uploads/images/lots'), $file_name);    
                }
                $update_data = [
                    'name' => isset($validated_data['name_lot_' . $i]) ? $validated_data['name_lot_' . $i] : '',
                    'alt' => isset($validated_data['alt_img_' . $i]) ? $validated_data['alt_img_' . $i] : '',
                    'price' => isset($validated_data['price_lot_' . $i]) ? $validated_data['price_lot_' . $i] : '',
                    'descreption' => isset($validated_data['descreption_lot_' . $i]) ? $validated_data['descreption_lot_' . $i] : '',
                    'img' => isset($validated_data['img_lot_' . $i]) ? $db_file_path : $lot->img,
                    'habitations_id' => $habitation->id,
                    'parts' => isset($validated_data['parts_' . $i]) ? $validated_data['parts_' . $i] : '',
                ];
                $lot->update($update_data);
            }
        } else {
            if(isset($validated_data['name_lot_' . $i])) {
                if(isset($validated_data['img_lot_' . $i])) {
                    $file_name = $validated_data['img_lot_' . $i]->getClientOriginalName();
                    $db_file_path = "/uploads/images/lots/" . $file_name;
                    $validated_data['img_lot_' . $i]->move(public_path('uploads/images/lots'), $file_name);
                }
    
                $store_data = [
                    'name' => isset($validated_data['name_lot_' . $i]) ? $validated_data['name_lot_' . $i] : '',
                    'alt' => isset($validated_data['alt_img_' . $i]) ? $validated_data['alt_img_' . $i] : '',
                    'price' => isset($validated_data['price_lot_' . $i]) ? $validated_data['price_lot_' . $i] : '',
                    'descreption' => isset($validated_data['descreption_lot_' . $i]) ? $validated_data['descreption_lot_' . $i] : '',
                    'img' => isset($validated_data['img_lot_' . $i]) ? $db_file_path : '',
                    'habitations_id' => $habitation->id,
                    'parts' => isset($validated_data['parts_' . $i]) ? $validated_data['parts_' . $i] : '',
                ];
                Lot::create($store_data);
            }
        }
    }
}