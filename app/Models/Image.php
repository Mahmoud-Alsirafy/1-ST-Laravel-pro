<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        "product_id",
        "image"
    ];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function saveImage($id, $image)
    {
        $file = $_FILES["image"]["name"];
        foreach ($file as $key => $value) {
            $tmp = $_FILES["image"]["tmp_name"][$key];
            $ext = pathinfo($_FILES["image"]["name"][$key], PATHINFO_EXTENSION);
            $newName = uniqid() . "." . $ext;
            Image::create([
                "product_id" => $id,
                "image" => $newName
            ]);
            move_uploaded_file($tmp, storage_path("app/public/i/$newName"));
        }
    }

    public static function deleteImage($id)
    {
        $file = Image::where("product_id", $id)->pluck("image");
        foreach ($file as $key => $value) {
            unlink(storage_path("app/public/i/".$value));
        }
    }
}
