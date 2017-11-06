<?php

namespace Dinamicus\Transformer;

use Dinamicus\Entity\ImageDataObject;
use League\Fractal\TransformerAbstract;

class ImageTransformer extends TransformerAbstract
{
    public function transform(ImageDataObject $entity)
    {
        return [
            'id' => $entity->getId(),
            'entity' => $entity->getEntityName(),
            'paths' => $entity->getImagesPath(),
        ];
    }
}