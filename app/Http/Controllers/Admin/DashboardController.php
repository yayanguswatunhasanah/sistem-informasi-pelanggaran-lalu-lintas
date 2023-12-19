<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $master_data = DB::table('datasets')->get();
        
        #region grafik
        $kategori_db = DB::table('datasets')
            ->select('kategori')
            ->distinct()
            ->get();
        $harga_db = DB::table('datasets')
            ->select('harga')
            ->distinct()
            ->get();
        $jarak_db = DB::table('datasets')
            ->select('jarak')
            ->distinct()
            ->get();
        
        $kategori = [];
        foreach ($kategori_db as $kd) {
            $kategori[] = $kd->kategori;
        }
        $harga = [];
        foreach ($harga_db as $hd) {
            $harga[] = $hd->harga;
        }
        $jarak = [];
        foreach ($jarak_db as $jd) {
            $jarak[] = $jd->jarak;
        }

        $kategori_data = [];
        foreach ($master_data as $m) {
            $kategori_data[$m->kategori][] = $m;
        }
        $kategori_final_data = [];
        foreach ($kategori as $k) {
            $kategori_final_data[] = count($kategori_data[$k]);
        }

        $harga_data = [];
        foreach ($master_data as $m) {
            $harga_data[$m->harga][] = $m;
        }
        $harga_final_data = [];
        foreach ($harga as $h) {
            $harga_final_data[] = count($harga_data[$h]);
        }

        $jarak_data = [];
        foreach ($master_data as $m) {
            $jarak_data[$m->jarak][] = $m;
        }
        $jarak_final_data = [];
        foreach ($jarak as $j) {
            $jarak_final_data[] = count($jarak_data[$j]);
        }
        #endregion

        $preferensi = [
            [
                "key" => "escape",
                "value" => "Escape"
            ],
            [
                "key" => "relaxation",
                "value" => "Relaxataion"
            ],
            [
                "key" => "play",
                "value" => "Play"
            ],
            [
                "key" => "strengthening_family_bonds",
                "value" => "Streghtening Family Bonds"
            ],
            [
                "key" => "prestige",
                "value" => "Prestige"
            ],
            [
                "key" => "social_interaction",
                "value" => "Social Interaction"
            ],
            [
                "key" => "romance",
                "value" => "Romance"
            ],
            [
                "key" => "educational_opportunity",
                "value" => "Educational Opportunity"
            ],
            [
                "key" => "self_fulfilment",
                "value" => "Self-fulfilment"
            ],
            [
                "key" => "wish_fulfilment",
                "value" => "Wish-fulfilment"
            ],
            [
                "key" => "transportation_and_travel_services",
                "value" => "Transportation & Travel Services"
            ],
            [
                "key" => "accommodation_services",
                "value" => "Accommodation Services"
            ],
            [
                "key" => "recreation_and_attraction_services",
                "value" => "Recreation & Attraction Services"
            ],
            [
                "key" => "shopping_services",
                "value" => "Shopping Services"
            ],
            [
                "key" => "food_and_beverages_services",
                "value" => "Food & Beverages Services"
            ],
        ];
        $preferensi_data = [
            'escape' => [
                'iya' => [],
                'tidak' => [],
            ],
            'relaxation' => [
                'iya' => [],
                'tidak' => [],
            ],
            'play' => [
                'iya' => [],
                'tidak' => [],
            ],
            'strengthening_family_bonds' => [
                'iya' => [],
                'tidak' => [],
            ],
            'prestige' => [
                'iya' => [],
                'tidak' => [],
            ],
            'social_interaction' => [
                'iya' => [],
                'tidak' => [],
            ],
            'romance' => [
                'iya' => [],
                'tidak' => [],
            ],
            'educational_opportunity' => [
                'iya' => [],
                'tidak' => [],
            ],
            'self_fulfilment' => [
                'iya' => [],
                'tidak' => [],
            ],
            'wish_fulfilment' => [
                'iya' => [],
                'tidak' => [],
            ],
            'transportation_and_travel_services' => [
                'iya' => [],
                'tidak' => [],
            ],
            'accommodation_services' => [
                'iya' => [],
                'tidak' => [],
            ],
            'recreation_and_attraction_services' => [
                'iya' => [],
                'tidak' => [],
            ],
            'shopping_services' => [
                'iya' => [],
                'tidak' => [],
            ],
            'food_and_beverages_services' => [
                'iya' => [],
                'tidak' => [],
            ],
        ];
        foreach ($master_data as $m) {
            if (strtolower($m->escape) == 'ya') {
                $preferensi_data['escape']['iya'][] = true;
            } elseif (strtolower($m->escape) == 'tidak') {
                $preferensi_data['escape']['tidak'][] = true;
            }

            if (strtolower($m->relaxation) == 'ya') {
                $preferensi_data['relaxation']['iya'][] = true;
            } elseif (strtolower($m->relaxation) == 'tidak') {
                $preferensi_data['relaxation']['tidak'][] = true;
            }

            if (strtolower($m->play) == 'ya') {
                $preferensi_data['play']['iya'][] = true;
            } elseif (strtolower($m->play) == 'tidak') {
                $preferensi_data['play']['tidak'][] = true;
            }

            if (strtolower($m->strengthening_family_bonds) == 'ya') {
                $preferensi_data['strengthening_family_bonds']['iya'][] = true;
            } elseif (strtolower($m->strengthening_family_bonds) == 'tidak') {
                $preferensi_data['strengthening_family_bonds']['tidak'][] = true;
            }

            if (strtolower($m->prestige) == 'ya') {
                $preferensi_data['prestige']['iya'][] = true;
            } elseif (strtolower($m->prestige) == 'tidak') {
                $preferensi_data['prestige']['tidak'][] = true;
            }

            if (strtolower($m->social_interaction) == 'ya') {
                $preferensi_data['social_interaction']['iya'][] = true;
            } elseif (strtolower($m->social_interaction) == 'tidak') {
                $preferensi_data['social_interaction']['tidak'][] = true;
            }

            if (strtolower($m->romance) == 'ya') {
                $preferensi_data['romance']['iya'][] = true;
            } elseif (strtolower($m->romance) == 'tidak') {
                $preferensi_data['romance']['tidak'][] = true;
            }

            if (strtolower($m->educational_opportunity) == 'ya') {
                $preferensi_data['educational_opportunity']['iya'][] = true;
            } elseif (strtolower($m->educational_opportunity) == 'tidak') {
                $preferensi_data['educational_opportunity']['tidak'][] = true;
            }

            if (strtolower($m->self_fulfilment) == 'ya') {
                $preferensi_data['self_fulfilment']['iya'][] = true;
            } elseif (strtolower($m->self_fulfilment) == 'tidak') {
                $preferensi_data['self_fulfilment']['tidak'][] = true;
            }

            if (strtolower($m->wish_fulfilment) == 'ya') {
                $preferensi_data['wish_fulfilment']['iya'][] = true;
            } elseif (strtolower($m->wish_fulfilment) == 'tidak') {
                $preferensi_data['wish_fulfilment']['tidak'][] = true;
            }

            if (strtolower($m->transportation_and_travel_services) == 'ya') {
                $preferensi_data['transportation_and_travel_services']['iya'][] = true;
            } elseif (strtolower($m->transportation_and_travel_services) == 'tidak') {
                $preferensi_data['transportation_and_travel_services']['tidak'][] = true;
            }

            if (strtolower($m->accommodation_services) == 'ya') {
                $preferensi_data['accommodation_services']['iya'][] = true;
            } elseif (strtolower($m->accommodation_services) == 'tidak') {
                $preferensi_data['accommodation_services']['tidak'][] = true;
            }

            if (strtolower($m->recreation_and_attraction_services) == 'ya') {
                $preferensi_data['recreation_and_attraction_services']['iya'][] = true;
            } elseif (strtolower($m->recreation_and_attraction_services) == 'tidak') {
                $preferensi_data['recreation_and_attraction_services']['tidak'][] = true;
            }

            if (strtolower($m->shopping_services) == 'ya') {
                $preferensi_data['shopping_services']['iya'][] = true;
            } elseif (strtolower($m->shopping_services) == 'tidak') {
                $preferensi_data['shopping_services']['tidak'][] = true;
            }

            if (strtolower($m->food_and_beverages_services) == 'ya') {
                $preferensi_data['food_and_beverages_services']['iya'][] = true;
            } elseif (strtolower($m->food_and_beverages_services) == 'tidak') {
                $preferensi_data['food_and_beverages_services']['tidak'][] = true;
            }
        }

        $info_data = DB::table('tops')->first();
        $info_data_arr = json_decode($info_data->data, true);

        return view('admin.dashboard', compact('kategori', 'kategori_final_data', 'harga', 'harga_final_data', 'jarak', 'jarak_final_data', 'preferensi', 'preferensi_data', 'info_data_arr'));
    }
}
