<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Favorite;
use Session;
class FavoriteController extends Controller
{
    public function index(){
        $id= session()->get('id');
        $detail = Favorite::where('id_user',$id)->get();
        $count = count($detail);
        $list_menu =[];
        foreach($detail as $key => $detail){
            $menu_new=[];
            $id_menu=$detail->id_menu;
            $menu = Menu::where('id_menu',$id_menu)->first();
            $menu_name = $menu->name;
            $menu_new["id_favorite"]=$detail->id_favorite;
            $menu_new["name"]=$menu_name;
            array_push($list_menu,$menu_new);
        }
        return view('favoriteview',['list_menu'=>$list_menu, 'count'=>$count]);
    }
    public function add_favorite(){
        $menu_name = $_GET['nama'];
        $id= session()->get('id');

        $menuselect = Menu::select('id_menu')->where('name',$menu_name)->first();
        $id_menu = $menuselect->id_menu;
        
        $favorite_cek = Favorite::where([
            ['id_user', '=', $id],
            ['id_menu', '=', $id_menu]
        ])->first();

        if($favorite_cek)
        {
            return redirect()->back()->with('alert', 'Item sudah ada di Favorite anda');
        }
        else
        {
            Favorite::create([
            'id_user'=> $id,
            'id_menu' => $id_menu
            ]);
            return redirect()->back()->with('alert', 'Item berhasil ditambahkan');
        }
    }

    public function add_order(){
        $menu_name = $_GET['nama'];
        $qty = $_GET['qty'];
        $order = session()->get('order',[]);
        $cek =false;
        $hasil=0;
        if($qty>0)
        {   
            if($order)
            {   
                foreach($order as &$data)
                {   
                    $menu=array_keys($data);
                    if(strcmp($menu[0],$menu_name)==0)
                    {   
                        $hasil=(int)$data[$menu_name];
                        $hasil+=$qty;
                        $data[$menu_name]=$hasil;
                        $cek=true;
                        break;
                    }
                }
                if($cek){
                    echo "<br>";
                    Session::put('order',$order);
                    
                }else{
                    $array =[];
                    $array[$menu_name]=$qty;
                    Session::push('order',$array);
                }
            }
            else 
            {   
                $array =[];
                $array[$menu_name]=$qty;
                Session::push('order', $array);
                
            }
            return redirect('/view_favorite');
        }
        else
        {
            return redirect()->back()->with('alert', 'Angka yang anda masukkan kurang dari 1');
        }
    }

    public function delete(){
        $id_favorite = $_GET['id_favorite'];
        $favorite = Favorite::where('id_favorite',$id_favorite);
        $favorite->delete();
        return redirect("/view_favorite")->with('alert', 'Item berhasil dihapus dari Favorite anda');
    }
}
