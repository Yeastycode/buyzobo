<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    const STATUS_INITIALIZED = 'initialized';

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setResponse($response) {
        $this->response = $response;
    }

    public function setCompleted($completed) {
        $this->completed = !!$completed;
    }

    public function setTransactionReference($ref) {
        $this->ref = $ref;
    }
}
