<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $statusCode = 200;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     *
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function respond($data, $headers = [])
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }
  
      /**
     * @param string $message
     *
     * @return mixed
     */
    public function respondWithError($message)
    {
        return $this->respond([
            'status' => 0,
            'message' => $message
        ]);
    }

       /**
     * @param string $message
     *
     * @return mixed
     */
    public function respondWithSuccess($data)
    {
        return $this->respond([
            'status' => 1,
            'data' => $data
        ]);
    }

    public function respondWithSuccessMessage($message)
    {
        return $this->respond([
            'status' => 1,
            'message' => $message
        ]);
    }
    

    public function respondWithValidationError($validator)
    {
        return $this->setStatusCode(200)->respondWithError($validator->errors()->first());
    }

    public function respondNotFound($message = "Not found!")
    {
        return $this->setStatusCode(200)->respondWithError($message);
    }
    
}
