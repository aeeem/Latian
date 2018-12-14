<?php

namespace App;


use App\Http\Middleware\AdminMiddleware;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


//kemungkinan akan ditambahkan profile
//antara student profile atau cuma user profile,

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','id_role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //untuk role user.
    public function userrole(){
        return $this->belongsTo('App\Model\UserRole','id_role');
    }

    //relasi dengan student exam, passing id user
    public function StudentExam()
    {
        return $this->belongsToMany('App\Model\StudentExam', 'student_exams', 'Id_User', 'Id_Exam');
    }


    //cek apakah id user merupakan admin
    //masih di hardcode
    public function IsAdmin(){
        if ($this->userrole->id == '1') {
            return true;
        }
        return false;

    }
}
