<?php

namespace App\Models;

use Dotenv\Parser\Lines;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostElement extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'subtitle',
        'text',
    ];

    protected $table = "posts_elements";


    public function convertCharSet() {

        $lines = [];
        $lastTake = 0;

        for($i = 0; $i < strlen($this->text); $i++) {
            if($this->text[$i] == "\n") {
                $lines[] = substr($this->text, $lastTake, $i - $lastTake);
                $lastTake = $i + strlen("\n");
            }
        }

        $lines = array_filter($lines, function($item) {
            return $item != "";
        });

        return $lines;
    }
}
