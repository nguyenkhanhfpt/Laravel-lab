<?php

namespace App\Services;

use App\Models\GroupChat;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Log;

class GroupChatService extends BaseService
{
    const FOLDER_IMAGE = 'group-chats';

    protected $imageService;

    public function __construct(
      ImageService $imageService
    ) {
        $this->imageService = $imageService;
    }

    public function storeGroupChat($inputs)
    {
        DB::beginTransaction();

        try {
            $data = $this->modifyData($inputs);
            $result = GroupChat::create($data);

            DB::commit();
            return $result;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
        }
    }

    public function modifyData($inputs)
    {
        $inputs['image'] = $this->imageService->storeFile($inputs['image'], self::FOLDER_IMAGE);

        return $inputs;
    }
}
