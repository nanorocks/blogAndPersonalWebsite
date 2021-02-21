<?php

namespace App\Domain\Dtos\Project;

use App\Http\Requests\Project\StoreRequest;
use Spatie\DataTransferObject\DataTransferObject;

class CreateDto extends DataTransferObject
{
    public string $title;
    public string $description;
    public string $date;
    public string $status;
    public string $link;
    public string $image;
    public int $userId;

    public static function fromRequest(StoreRequest $request): self
    {
        return new self([
            'title' => $request->getParams()->title,
            'description' => $request->getParams()->description,
            'date' => $request->getParams()->date,
            'status' => $request->getParams()->status,
            'link' => $request->getParams()->link,
            'image' => $request->getParams()->image,
            'userId' => $request->userId
        ]);
    }

}