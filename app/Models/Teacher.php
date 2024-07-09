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


    
    protected $guard = 'teacher';
    protected $table = 'teachers';


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

   
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function courseAssignments()
    {
        return $this->hasMany(CourseAssignment::class);
    }
}
