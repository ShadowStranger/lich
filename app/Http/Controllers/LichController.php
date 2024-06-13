<?php

namespace App\Http\Controllers;

use App\Models\Lich;
use Illuminate\Http\Request;

class LichController extends Controller
{
    public function index()
    {
       $liches = Lich::all();
       return view('liches', compact('liches'));
    }

    public function create()
    {
       $lichesArr = [
           [
               'stringi' => 'black',
               'nuni' => 'nuni44',
               'valerki' => 68,
               'is_gay' => 1,
           ],
           [
               'stringi' => 'white',
               'nuni' => 'nuni43',
               'valerki' => 12,
               'is_gay' => 0,
           ],
           [
               'stringi' => 'yellow',
               'nuni' => 'nigerundaio',
               'valerki' => 110,
               'is_gay' => 1,
           ]
       ];
       foreach ($lichesArr as $item)
           Lich::create($item);

       dd('created');
    }


    public function update()
    {
      $liches = Lich::find(8);
      $liches->update([
          'stringi' => 'obnovil',
          'nuni' => 'rabotaet',
          'valerki' => 17,
          'is_gay' => 1,
      ]);
      dd('updated');
    }

    public function delete()
    {
        $liches = Lich::find(2);
        $liches->delete();
        dd('deleted');
    }
    public function restore()
    {
        $liches = Lich::withTrashed()->find(2);
        $liches->restore();
        dd('restored');
    }
    public function firstOrCreate()
    {

        $anotherLich =[
            'stringi' => 'rabotaet',
            'nuni' => 'realy',
            'valerki' => 100,
            'is_gay' => 1,
        ];
        $lich = Lich::firstOrCreate([
            'stringi' => 'penis'
        ],[
            'stringi' => 'penis',
            'nuni' => 'realy',
            'valerki' => 100,
            'is_gay' => 1,
        ]);
        dump($lich->nuni);
        dd('gotovo');
    }

    public function updateOrCreate()
    {
        $anotherLich =[
            'nuni' => 'UOC realy',
            'stringi' => 'UOC rabotaet',
            'valerki' => 101,
            'is_gay' => 1,
        ];

        $lich = Lich::updateOrCreate([
            'stringi' => 'penisoid'
        ],[
            'stringi' => 'penisoid',
            'nuni' => 'drugoe dermo realy',
            'valerki' => 543,
            'is_gay' => 1,
        ]);
        dump($lich->nuni);
    }
}
