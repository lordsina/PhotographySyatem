<?php

namespace App\Policies;

use App\Models\Bookcomment;
use App\Models\User;

class BookCommentPolicy
{
    /**
     * Create a new policy instance.
     */
    public function update(User $user,Bookcomment $bookcomment)
    {
       //return $user->id == $bookcomment->user_id;
       return $user->owns($bookcomment);
    }
}
