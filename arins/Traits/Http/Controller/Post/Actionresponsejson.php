<?php

namespace Arins\Traits\Http\Controller\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Arins\Facades\Response;

trait Actionresponsejson
{

    public function responseJsonStore0()
    {
        $result = Response::saveOk();
        $result->status_description = 'Add Data Success';
        $result->data = ['id' => $this->data->getId()];

        return json_encode($result);
    }

    public function responseJsonStore1()
    {
        $result = Response::validationFailed();
        $result->status_description = 'Validation Failed';
        $result->data = [
            'errors' => $this->validator->messages()->messages(),
        ];

        return json_encode($result);
    }

    public function responseJsonStore2()
    {
        $result = Response::saveFailed();
        $result->status_description = 'Add Data Failed';

        return json_encode($result);
    }

    public function responseJsonUpdate0($id)
    {
        $result = Response::saveOk();
        $result->status_description = 'Update Data Success';
        $result->data = ['id' => $this->data->getId()];

        return json_encode($result);
    }

    public function responseJsonUpdate1($id)
    {
        $result = Response::validationFailed();
        $result->status_description = 'Validation Failed';
        $result->data = [
            'errors' => $this->validator->messages()->messages(),
        ];

        return json_encode($result);
    }

    public function responseJsonUpdate2($id)
    {
        $result = Response::saveFailed();
        $result->status_description = 'Update Data Failed';

        return json_encode($result);
    }

    public function responseJsonDestroy0($id)
    {
        $result = Response::saveOk();
        $result->status_description = 'Delete Data Success';
        $result->data = ['id' => $this->data->getId()];

        return json_encode($result);
    }

    public function responseJsonDestroy1($id)
    {
        $result = Response::validationFailed();
        $result->status_description = 'Validation Failed';
        $result->data = [
            'errors' => $this->validator->messages()->messages(),
        ];

        return json_encode($result);
    }

    public function responseJsonDestroy2($id)
    {
        $result = Response::saveFailed();
        $result->status_description = 'Delete Data Failed';

        return json_encode($result);
    }


}

