<?php
function flash($message,$level='success'){
    session()->flash('flash_message', $message);
    session()->flash('flash_message_level', $level);
}