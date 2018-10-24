<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    // Inventary methods
    public function equipItem(Request $request)
    {
        $itemId = Input::get('itemId');
        $item = Item::find($itemId);
        $user = User::find(Auth::user()->id);

        $this->setPivotEquip($user, $item);

        if($item->type_id == 1) {
            $user->weapon_id = $item->id;
        }
        else if($item->type_id == 2) {
            $user->armor_id = $item->id;
        }
        else if($item->type_id == 3) {
            $user->shield_id = $item->id;
        }
        else if($item->type_id == 4) {
            $user->helmet_id = $item->id;
        }

        $user->save();

        return back();
    }
    public function unEquipItem(Request $request)
    {
        $itemId = Input::get('itemId');
        $item = Item::find($itemId);
        $user = User::find(Auth::user()->id);

        $this->unSetPivotEquip($user, $item);

        if($item->type_id == 1) {
            $user->weapon_id = 0;
        }
        else if($item->type_id == 2) {
            $user->armor_id = 0;
        }
        else if($item->type_id == 3) {
            $user->shield_id = 0;
        }
        else if($item->type_id == 4) {
            $user->helmet_id = 0;
        }

        $user->save();

        return back();
    }

    public function setPivotEquip($user, $item)
    {
        foreach ($user->getInventory as $inventory) {
            if ($inventory->id == $item->id) {
                $inventory->pivot->equipado = 1;
                $inventory->pivot->save();
            } else {
                if ($item->type_id == 1) {
                    $oldItem = $user->weapon_id;
                    if ($oldItem == $inventory->id) {
                        $inventory->pivot->equipado = 0;
                        $inventory->pivot->save();
                    }
                }
                if ($item->type_id == 2) {
                    $oldItem = $user->armor_id;
                    if ($oldItem == $inventory->id) {
                        $inventory->pivot->equipado = 0;
                        $inventory->pivot->save();
                    }
                }
                if ($item->type_id == 3) {
                    $oldItem = $user->shield_id;
                    if ($oldItem == $inventory->id) {
                        $inventory->pivot->equipado = 0;
                        $inventory->pivot->save();
                    }
                }
                if ($item->type_id == 4) {
                    $oldItem = $user->helmet_id;
                    if ($oldItem == $inventory->id) {
                        $inventory->pivot->equipado = 0;
                        $inventory->pivot->save();
                    }
                }
            }
        }
    }
    public function unSetPivotEquip($user, $item)
    {
        foreach ($user->getInventory as $inventory) {
            if ($inventory->id == $item->id) {
                $inventory->pivot->equipado = 0;
                $inventory->pivot->save();
            }
        }
    }
}
