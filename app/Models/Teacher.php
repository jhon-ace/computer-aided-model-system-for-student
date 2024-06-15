<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Course;
use App\Models\Department;

class Teacher extends Authenticatable
{
    use HasFactory, Notifiable;

    public $table = 'teachers';
    
    protected $guard = 'teacher';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'teachers_photo',
        'name',
        'email',
        'password',
        'course_taught_id',
        'department_id',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_taught_id');
    }

    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
