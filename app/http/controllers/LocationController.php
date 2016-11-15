<?php
 
class LocationController extends \BaseController {
 
    public function getIndex() {
        $propinsi = array('' => '');
        foreach(Propinsi::all() as $row)
            $propinsi[$row->id] = $row->propinsi;
         
        return View::make('index', array(
            'propinsi' => $propinsi
        ));
    }
     
    public function postData() {
        switch(Input::get('type')):
            case 'kota':
                $return = '<option value=""></option>';
                foreach(Kota::where('propinsi_id', Input::get('id'))->get() as $row) 
                    $return .= "<option value='$row->id'>$row->kota</option>";
                return $return;
            break;
            case 'kecamatan':
                $return = '<option value=""></option>';
                foreach(Kecamatan::where('kota_id', Input::get('id'))->get() as $row) 
                    $return .= "<option value='$row->id'>$row->kecamatan</option>";
                return $return;
            break;
            case 'desa':
                $return = '<option value=""></option>';
                foreach(Desa::where('kecamatan_id', Input::get('id'))->get() as $row) 
                    $return .= "<option value='$row->id'>$row->desa</option>";
                return $return;
            break;
        endswitch;    
    }
}