<?php

namespace App\Http\Requests;

use App\Models\Image;
use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if ($this->method() == 'PUT') {
            return [
                'title' => 'required'
            ];
        }
        return [
            'file' => 'required|image',
            'title' => 'nullable'
        ];
    }

    public function getData()
    {
        $data = $this->validated() + [
            'user_id' => 1 // $this->user->id
        ];

        if ($this->hasFile('file')) {
            $directory = Image::makeDirectory();
            $data['file'] = $this->file->store($directory);
            $data['dimension'] = Image::getDimension($data['file']);
        }

        if ($title = $data['title']) {
            $data['slug'] = $this->getSlug($title);
        }

        return $data;
    }

    protected function getSlug($title) {
        $slug = str($title)->slug();
        $numSlugs = Image::where('slug', 'LIKE', "$slug%")->count();
        if ($numSlugs > 0) {
            return $slug . '-' . $numSlugs + 1;
        }
        return $slug;
    }
}
