<?php
namespace App\Models\Shared;

class WpFile extends WpPost
{
    const POST_TYPE = 'attachment';
    const VISIBLE_STATUS = ['inherit'];

    public function getUrlAttribute()
    {
        return $this->guid;
    }

    public function url($size = 'thumbnail')
    {
        //メタデータが存在しないなら、オリジナルのURLを返す
        $attachment_metadata_serialized = $this->meta->_wp_attachment_metadata;
        if (!$attachment_metadata_serialized) {
            return $this->guid;
        }

        $attachment_metadata = unserialize($attachment_metadata_serialized);
        if (!$attachment_metadata) {
            return $this->guid;
        }

        //指定サイズのデータが存在しないなら、オリジナルのURLを返す
        if (!isset($attachment_metadata['sizes'][$size])) {
            return $this->guid;
        }

        //指定サイズのURLを返す
        return str_replace(basename($this->guid), $attachment_metadata['sizes'][$size]['file'], $this->guid);
    }
}
