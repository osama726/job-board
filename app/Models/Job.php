<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Job {
    public static function all() {
        return [
            [
                "title" => "Senior Laravel Developer",
                "description" => "We are looking for a Senior Laravel Developer to join our team.",
                "salary" => "$80,000"
            ],
            [
                "title"=> "Junior PHP Developer",
                "description"=> "An entry-level position for a Junior PHP Developer.",
                "salary"=> "$50,000"
            ]
        ];
    }
}
