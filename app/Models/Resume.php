<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Resume
 *
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resume newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resume newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resume query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $user_id
 * @property mixed $resume
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resume whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resume whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resume whereResume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resume whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Resume whereUserId($value)
 */
class Resume extends Model
{

    protected $fillable = [
      'user_id',
      'resume'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getBasicResumeStructure(string $firstName, string $lastName)
    {
        $resumeStructure = [
            'basic' => [
                'first_name' => $firstName,
                'last_name' => $lastName
            ]
        ];

        return $resumeStructure;
    }

    public static function getResumeStructure()
    {
        $resumeStructure = [
//            'value' => [
            'basic' => [
                'first_name' => [
//                        'label' => '',
//                        'value' => []
                ],
                'last_name' => '',
                'title' => '',
                'phone' => '',
                'date_of_birth' => '',
                'address' => ''
            ],
            'description' => '',
            'education' => [
                'school' => [
                    'institution' => '',
                    'specialization' => '',
                    'type' => '',
                    'city' => '',
                    'start' => '',
                    'end' => ''
                ]
            ],
            'experience' => [
                'job' => [
                    'institution' => '',
                    'position' => '',
                    'location' => '',
                    'description' => '',
                    'start' => '',
                    'end' => '',
                    'present' => ''
                ]
            ],
            'abilities' => [

            ],
            'job_type' => ''
//            ]
        ];

        return $resumeStructure;
    }
}
