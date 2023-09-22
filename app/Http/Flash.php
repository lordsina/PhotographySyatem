<?php 
namespace App\Http;

class Flash{

    function create($title,$message,$level){
        return session()->flash('flash_message',[
        'title'=>$title,
        'message'=>$message,
        'level' => $level
    ]);
    }

    function info($title,$message){
        return $this->create($title,$message,'info');
    }

    function success($title,$message){
        return $this->create($title,$message,'success');
    }

    function error($title,$message){
        return $this->create($title,$message,'error');
    }

    function warning($title,$message){
        return $this->create($title,$message,'warning');
    }

}