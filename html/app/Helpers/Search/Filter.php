<?php

namespace App\Helpers\Search;

use App\Models\Habitation;
use App\Models\Lot;

class Filter
{
    public $query = null;
    protected $request = null;
    protected $paginate = 10;

    public function __construct($instatnce, $request, $paginate)
    {
        $this->query = $instatnce->query();
        $this->request = $request;
        $this->paginate = $paginate;
        // dd($paginate);
    }

    public function find()
    {
        $this->filter_by_type();
        $this->filter_by_min_pieces();
        $this->filter_by_max_pieces();
        $this->filter_by_min_price();
        $this->filter_by_max_price();
        $this->filter_by_departement();
        $this->filter_by_fiscaux();
        $this->filter_by_price();
        $result = $this->query->with('department')->
                            with('images')->
                            with(['lots' => function($q) {
                                $q->orderBy('parts', 'ASC');
                            }])->
                            paginate($this->paginate);
        // dd($result);
        return $result;
    }

    /* Filter by Type */
    private function filter_by_type() 
    {
        if(isset($this->request->type) && $this->request->type != 'tous') {
            // dd($this->query->where('type', $this->request->type)->get());
            return $this->query->where('type', $this->request->type);
        }
    }

    /* Filter by Min Pieces */
    private function filter_by_min_pieces() 
    {
        if(isset($this->request->min_pieces)) {
            $value = $this->request->min_pieces;
            return $this->query->whereHas('lots', function($q) use($value)
            {
                // dd(Lot::where('parts', '>=', $value)->get());
                $q->where('parts', '>=', $value);
            });
        }
    }

    /* Filter by Max Pieces */
    private function filter_by_max_pieces()
    {
        if(isset($this->request->max_pieces)) {
            $value = $this->request->max_pieces;
            return $this->query->whereHas('lots', function($q) use($value)
            {
                // dd(Lot::where('parts', '<=', $value)->get());
                $q->where('parts', '<=', $value);
            });
        }
    }

    /* Filter by Min Price */
    private function filter_by_min_price() 
    {
        if(isset($this->request->min_price))
        {
            $value = $this->request->min_price;
            return $this->query->whereHas('lots', function($q) use($value)
            {
                // dd(Lot::where('price', '>=', $value)->get());
                $q->where('price', '>=', $value);
            });
        }
    }

    /* Filter by Max Price */
    private function filter_by_max_price() 
    {
        if(isset($this->request->max_price))
        {

            $value = $this->request->max_price;
            return $this->query->whereHas('lots', function($q) use($value)
            {
                // dd(Lot::where('price', '<=', $value)->get());
                $q->where('price', '<=', $value);
            });
        }
    }

    /* Filter by Departement */
    private function filter_by_departement()
    {
        if(isset($this->request->departement) && $this->request->departement != 'Tous')
        {
            return $this->query->where('department_id', $this->request->departement);
        }
    }

    /* Filter by Fiscaux */
    private function filter_by_fiscaux()
    {
        if(isset($this->request->fiscaux) && $this->request->fiscaux != 'Tous')
        {
            return $this->query->where('devices', $this->request->fiscaux);
        }
    }

    /* Filter by Price */
    private function filter_by_price()
    {
        if(isset($this->request->order))
        {
            if($this->request->order === 'asc')
            {
                return $this->query->orderBy('min_price', 'ASC');
            }
            if($this->request->order === 'desc')
            {
                return $this->query->orderBy('min_price', 'DESC');
            }
        }
    }
}